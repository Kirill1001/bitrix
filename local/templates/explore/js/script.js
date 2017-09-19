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

//Main catalog ajax
//     $('.products-btn').on('click', function(e) {
//     	let curPage = 1;
//     	let loadUrl = location.href;
//         if(location.search != ''){
//             loadUrl += '&';
//         }
//         else{
//             loadUrl += '?';
//         }
//         loadUrl  += 'PAGEN_'+ 1 +'=' + (++curPage);
//         $.ajax({
// 			type: "POST",
// 			url: loadUrl,
// 			data: {
//
// 			},
// 			success: function(){
//                 alert('!!!');
// 			}
//         }).done(function(data) {
//             $('.products-list').append(data);
//         });
//         e.preventDefault();
// 	});

    function newsLoader(p){
        var o = this;
        this.root = $(p.root);
        this.newsBlock = $(p.newsBlock, this.root);
        this.newsLoader = $(p.newsLoader);
        this.ajaxLoader = $(p.ajaxLoader);
        this.curPage = 1;
        this.loadSett = (p.loadSett);
        // загружаем дополнительные новости
        this.loadProducts = function(){
            var loadUrl = location.href;
            if(location.search != ''){
                loadUrl += '&';
            }
            else{
                loadUrl += '?';
            }
            loadUrl  += 'PAGEN_'+ o.loadSett.navNum +'=' + (++o.curPage);
            o.ajaxLoader.show();
            $.ajax({
                url: loadUrl,
                type: "POST",
                data:{
                    AJAX: 'Y'
                }
            }).done(function(html) {
                o.newsBlock.append(html);
                o.ajaxLoader.hide();

                if(o.curPage == o.loadSett.endPage){
                    o.newsLoader.parent().hide();
                }
            });
        }
        this.init = function(){
            o.newsLoader.click(function(event){
                o.loadProducts();
                event.preventDefault();
            })
        }
    }

});