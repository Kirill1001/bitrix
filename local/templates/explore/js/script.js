$( document ).ready(function() {

//Slider

$('.owl-carousel').owlCarousel({
	loop:true,
	margin:25,
	dots: true,
	autoplay: true,
	autoplayTimeout: 5000,
	responsive:{
			0:{
					items:1
			},
			600:{
					items:3
			},
			1000:{
					items:3,
					dots: true
			}
	}
});

//Tabs(фильтр товаров)

var Filter = {
	//Сортирует элементы по категориям
	sort: function(items) {
		items.fadeIn(500);
		var list = $('.products-list');
		list.find('.product').not(items).hide();
		list.find('.products-btn').not(items).hide();
	},
	//Показывает все товары
	showAll: function(items) {
		items.fadeIn(500);
	},
	//Определяет выбор категории
	doSort: function() {
		$(window).on('load', function() {
			$('.product, .products-btn').hide();
			$('[data-cat = all]').show();
		});
		$('a', '.categories').on('click', function(event) {

			var $a = $(this);


			var items = $('[data-cat=' + $a.data('cat') + ']', '.products-list');

			Filter.sort(items);

			//Добавляем категории вид активной ссылки
			$('.categories').find('a.active').removeClass('active');
			$a.addClass('active');

			event.preventDefault();

		});
	}
};

//Вызывает метод по клику
Filter.doSort();

//Phone-menu
$('.phone-menu').on('click', function() {

    $('.nav').slideToggle(300, function() {
        if ($(this).css('display') === 'none') {
            $(this).removeAttr('style');
        }
    });

});

//Ajax load products

$(function(){

	$('.products-btn').on('click', function(event) {
		var cat = $('.categories').find('a.active');
		var attribute = cat.attr('data-cat');

		$.ajax({
			url: 'bitrix/templates/explore/' + attribute + '.json',
			dataType: 'json',
			success: function(data) {
				for (var i = 0; i < data.length; i++) {
					var currentItem = data[i],
						category = '.products-list-';
					$(category + attribute).append('<article class="product product-ajax" data-cat="' + currentItem.category + '">' +
						'<a href="#" class="product__overlay" data-id="' + currentItem.id + '">add to cart</a>' +
						'<a href="#" class="product__pic"><img src="bitrix/templates/explore/' + currentItem.img + '" class="product__img"></a>' +
						'<div class="product__descr">' +
						'<div class="product__subtitle">' +
						'<a href="#" class="section-subtitle">' + currentItem.name + '</a>' +
						'</div>' +
						'<p class="section-descr">' + currentItem.description + '</p>' +
						'<div class="section-price product__price">' + currentItem.price + '</div>' +
						'</div></article>');
					if (i === data.length - 1) {
						$(event.target).remove();
					}
				}
			}
		});
		return false;
	});
});

/**
 *Корзина товаров
 */
class Cart {

	constructor() {
		this.timer = null;
	}

    /**
	 * Возврашает колличество товаров из localStorage
     */
    getCart() {
        let cartCount = 0;
        if (localStorage.getItem('cart') !== null) {
            cartCount = JSON.parse(localStorage.getItem('cart'));
        }
        return cartCount;
    }

    /**
	 * Показывает колличество товаров в корзине
	 */
    showCart() {
        let num = this.getCart();
        $('.account__badge').text(num);
    }

    /**
	 * устанавливаем таймер и очищаем корзину через час
	 */
    setClearCart() {
    	clearTimeout(this.timer);
    	this.timer = setTimeout(function() {
            localStorage.removeItem('cart');
            $('.account__badge').text('0');
        }, 3600000);
    }

    /**
	 * Добавляем товар в корзину
	 * @returns {boolean}
	 */
    addToCart() {
		let idProduct = $('.product__overlay').attr('data-id');
		let count = JSON.parse(localStorage.getItem('cart'));
		if (count === 0) {
			count = 1;
		} else {
			count++;
		}
		localStorage.setItem('cart', JSON.stringify(count));
		this.showCart();
		return false;
    }

}


    let cart = new Cart();
    cart.showCart();
    const allProducts = $('.products-list');
    allProducts.on('click', '.product__overlay', cart.addToCart.bind(cart));
    allProducts.on('click', '.product__overlay', cart.setClearCart.bind(cart));
});