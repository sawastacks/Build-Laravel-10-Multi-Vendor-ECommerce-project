
(function ($) {
    "use strict";
    $(".bg-top").parent().addClass("b-top");
    $(".bg-bottom").parent().addClass("b-bottom");
    $(".bg-center").parent().addClass("b-center");
    $(".bg-left").parent().addClass("b-left");
    $(".bg-right").parent().addClass("b-right");
    $(".bg_size_content").parent().addClass("b_size_content");
    $(".bg-img").parent().addClass("bg-size");
    $(".bg-img.blur-up").parent().addClass("blur-up lazyload");
    $(".bg-img").each(function () {
        var el = $(this),
            src = el.attr("src"),
            parent = el.parent();

        parent.css({
            "background-image": "url(" + src + ")",
            "background-size": "cover",
            "background-position": "center",
            "background-repeat": "no-repeat",
            display: "block",
        });

        el.hide();
    });


    $(".grid-option li").on("click", function () {
        $(this).addClass('active').siblings().removeClass('active');
    });
    $(".grid-option .grid-btn").on("click", function () {
        $(".product-list-section").removeClass("list-style");
    });
    $(".grid-option .list-btn").on("click", function () {
        $(".product-list-section").addClass("list-style");
    });
    $('.three-grid').on('click', function (e) {
        $(".product-list-section").removeClass("row-cols-xxl-5 row-cols-xxl-4 row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-2 list-style").addClass("row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-2");
    });
    $('.grid-btn').on('click', function (e) {
        $(".product-list-section").removeClass("row-cols-xxl-5 row-cols-xxl-4 row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-2 list-style").addClass("row-cols-xxl-4 row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-2");
    });
    $('.five-grid').on('click', function (e) {
        $(".product-list-section").removeClass("list-style").addClass("row-cols-xxl-5 row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-2");
    });
    var contentwidth = $(window).width();
    if (contentwidth < "1199") {
        $(".grid-options .grid-btn").addClass("active");
    }
    if (contentwidth < "991") {
        $(".grid-options .three-grid").addClass("active");
    }


    var isCashOnDelivery = true;

    var cashOnDelivery = $(document).find('.payment-methods').find('input[name="payment_method"][id="cash_on_delivery"]').is(':checked');

    if(cashOnDelivery){
        $(document).find('.proceed-btn').html('<span class="btn-text">Place Order</span>');
    }else{
        $(document).find('.proceed-btn').html('<span class="btn-hover-text">Proceed to Checkout</span>');
    }

    $(document).find('.payment-methods').find('input[name="payment_method"]').on('click', function(){
        var value = $(this).val();
        if(value !== 'cash_on_delivery'){
            $(document).find('.proceed-btn').html('<span class="btn-hover-text">Proceed to Checkout</span>');
        }else{
            $(document).find('.proceed-btn').html('<span class="btn-text">Place Order</span>');
        }
    });

    $(document).on('click','#setShippingAddress', function(){

         var bi_country = $('.checkout-section').find('select[id="country"]');
         var bi_fname = $('.checkout-section').find('input[id="fname"]');
         var bi_lname = $('.checkout-section').find('input[id="lname"]');
         var bi_cname = $('.checkout-section').find('input[id="cname"]');
         var bi_add1 = $('.checkout-section').find('input[id="add1"]');
         var bi_add2 = $('.checkout-section').find('input[id="add2"]');
         var bi_tcity = $('.checkout-section').find('input[id="tcity"]');
         var bi_stcountry = $('.checkout-section').find('input[id="stcountry"]');
         var bi_zip = $('.checkout-section').find('input[id="zip"]');
         var bi_email = $('.checkout-section').find('input[id="email"]');
         var bi_phone = $('.checkout-section').find('input[id="phone"]');

         var sh_country = $('.checkout-section').find('select[id="sh_country"]');
         var sh_fname = $('.checkout-section').find('input[id="sh_fname"]');
         var sh_lname = $('.checkout-section').find('input[id="sh_lname"]');
         var sh_cname = $('.checkout-section').find('input[id="sh_cname"]');
         var sh_add1 = $('.checkout-section').find('input[id="sh_add1"]');
         var sh_add2 = $('.checkout-section').find('input[id="sh_add2"]');
         var sh_tcity = $('.checkout-section').find('input[id="sh_tcity"]');
         var sh_stcountry = $('.checkout-section').find('input[id="sh_stcountry"]');
         var sh_zip = $('.checkout-section').find('input[id="sh_zip"]');
         var sh_email = $('.checkout-section').find('input[id="sh_email"]');
         var sh_phone = $('.checkout-section').find('input[id="sh_phone"]');

         if( $(this).is(':checked') ){
            $(sh_country).val(bi_country.val());
            $(sh_fname).val(bi_fname.val());
            $(sh_lname).val(bi_lname.val());
            $(sh_cname).val(bi_cname.val());
            $(sh_add1).val(bi_add1.val());
            $(sh_add2).val(bi_add2.val());
            $(sh_tcity).val(bi_tcity.val());
            $(sh_stcountry).val(bi_stcountry.val());
            $(sh_zip).val(bi_zip.val());
            $(sh_email).val(bi_email.val());
            $(sh_phone).val(bi_phone.val());       
         }else{
            $(sh_fname).val('');
            $(sh_lname).val('');
            $(sh_cname).val('');
            $(sh_add1).val('');
            $(sh_add2).val('');
            $(sh_tcity).val('');
            $(sh_stcountry).val('');
            $(sh_zip).val('');
            $(sh_email).val('');
            $(sh_phone).val('');
         }
    });


    /**
     * INCREASE / DECREASE INPUT NUMBER
     */
    $(document).on('click','.input-number__sub', function(e){
        e.preventDefault();
        var inputVal = 0;
        var input = $(this).parent().find('input[type="number"]');
        var min = $(input).attr('min');
        inputVal = $(input).val();
        if( inputVal >= parseInt(min) + 1 ){
            $(input).val(parseInt(inputVal) - 1);
        }
    });

    $(document).on('click','.input-number__add', function(e){
        e.preventDefault();
        var inputVal = 0;
        var input = $(this).parent().find('input[type="number"]');
        var max = $(input).attr('max');
        var inputVal = $(input).val();
        if( inputVal != parseInt(max) ){
             $(input).val(parseInt(inputVal) + 1);
        }
    });

    

})(jQuery);

/*=====================
    03. Footer function js
==========================*/
var contentwidth = $(window).width();
if (contentwidth < "576") {
    $(".footer-title h4").append(
        '<span class="according-menu float-end"><i class="fa fa-angle-down"></i></span>'
    );
    $(".footer-title").on("click", function () {
        $(".footer-title")
            .removeClass("active")
            .find("span")
            .replaceWith(
                '<span class="according-menu float-end"><i class="fa fa-angle-down"></i></span>'
            );
        $(".footer-contact, .footer-contain").slideUp("normal");
        if ($(this).next().is(":hidden") == true) {
            $(this).addClass("active");
            $(this)
                .find("span")
                .replaceWith(
                    '<span class="according-menu float-end"><i class="fa fa-chevron-up fa-xl"></i></span>'
                );
            $(this).next().slideDown("normal");
        } else {
            $(this)
                .find("span")
                .replaceWith(
                    '<span class="according-menu float-end"><i class="fa fa-angle-down fa-xl"></i></span>'
                );
        }
    });
    $(".footer-contact, .footer-contain").hide();
} else {
    $(".footer-contact, .footer-contain").show();
}

/*=====================
  04. mobile menu active class js
   ==========================*/
$(document).ready(function () {
    $('.mobile-menu ul li a').click(function () {
        $('li a').removeClass("active");
        $(this).addClass("active");
    });
});

/*=====================
  05. btn-cart open close js
   ==========================*/
$(document).ready(function () {
    $('.button-item').on("click", function () {
        $('.item-section').addClass("active");
    });

    $('.close-button').on("click", function () {
        $('.item-section').removeClass("active");
    });

    $('.btn-cart').on("click", function () {
        setTimeout(function () {
            $('.item-section').addClass("active")
        }, 1500);
        setTimeout(function () {
            $('.item-section').removeClass('active');
        }, 5000);
    });
});

/*=====================
  06. quantity js
   ==========================*/
$('.qty-box .quantity-right-plus').on('click', function () {
    var $qty = $(this).parents(".qty-box").find(".input-number");
    var currentVal = parseInt($qty.val(), 10);
    if (!isNaN(currentVal)) {
        $qty.val(currentVal + 0);
    }
});
$('.qty-box .quantity-left-minus').on('click', function () {
    var $qty = $(this).parents(".qty-box").find(".input-number");
    var currentVal = parseInt($qty.val(), 10);
    if (!isNaN(currentVal) && currentVal > 0) {
        $qty.val(currentVal - 0);
    }
});

/*=====================
  07. Tap to Top js
   ==========================*/
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('.back-to-top').fadeIn();
        } else {
            $('.back-to-top').fadeOut();
        }
    });
    // scroll body to 0px on click
    $('.back-to-top').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 400);
        return false;
    });
});

/*=====================
   08. User Dashboard Left Sidebar Show Js
   ==========================*/
$(".left-dashboard-show").click(function () {
    $(".bg-overlay, .dashboard-left-sidebar").addClass("show");
});
$(".close-button, .bg-overlay, .user-nav-pills .nav-item .nav-link").click(function () {
    $(".bg-overlay, .dashboard-left-sidebar").removeClass("show");
});

/*=====================
   09. Tooltip Js
   ==========================*/
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})

/*=====================
   10. Cookie Bar Js
   ==========================*/
$(".ok-button").click(function () {
    $(".cookie-bar-box").addClass("hide");
});

/*=====================
   11. Image To Background Js
   ==========================*/
$(".bg-top").parent().addClass("b-top");
$(".bg-bottom").parent().addClass("b-bottom");
$(".bg-center").parent().addClass("b-center");
$(".bg-left").parent().addClass("b-left");
$(".bg-right").parent().addClass("b-right");
$(".bg_size_content").parent().addClass("b_size_content");
$(".bg-img").parent().addClass("bg-size");
$(".bg-img.blur-up").parent().addClass("blur-up lazyload");
$(".bg-img").each(function () {
    var el = $(this),
        src = el.attr("src"),
        parent = el.parent();

    parent.css({
        "background-image": "url(" + src + ")",
        "background-size": "cover",
        "background-position": "center",
        "background-repeat": "no-repeat",
        display: "block",
    });

    el.hide();
});

/*=====================
   12. search box function Js
   ==========================*/
$(".search-box").on("click", function () {
    $(this).closest(".rightside-box").find(".search-full").addClass("open");
});
$(window).on("load resize", function () {
    // open searchbox
    $(".search-type").on("click", function () {
        $(this).parents(".search-full").addClass("show");
    });

    // close seach
    $(".close-search").on("click", function () {
        $(this).closest(".rightside-box").find(".search-full").removeClass("open");
    });
});

   /*=====================
   13. Wishlist Js
   ==========================*/
$(".notifi-wishlist").on("click", function () {
    $.notify({
        icon: "fa fa-check",
        title: "Success!",
        message: "Item Successfully added in wishlist",
    }, {
        element: "body",
        position: null,
        type: "info",
        allow_dismiss: true,
        newest_on_top: false,
        showProgressbar: true,
        placement: {
            from: "top",
            align: "right",
        },
        offset: 20,
        spacing: 10,
        z_index: 1031,
        delay: 5000,
        animate: {
            enter: "animated fadeInDown",
            exit: "animated fadeOutUp",
        },
        icon_type: "class",
        template: '<div data-notify="container" class="col-xxl-3 col-lg-5 col-md-6 col-sm-7 col-12 alert alert-{0}" role="alert">' +
            '<button type="button" aria-hidden="true" class="btn-close" data-notify="dismiss"></button>' +
            '<span data-notify="icon"></span> ' +
            '<span data-notify="title">{1}</span> ' +
            '<span data-notify="message">{2}</span>' +
            '<div class="progress" data-notify="progressbar">' +
            '<div class="progress-bar progress-bar-info progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
            "</div>" +
            '<a href="{3}" target="{4}" data-notify="url"></a>' +
            "</div>",
    });
});

/*=====================
   14. Loader Js
   ==========================*/
const loaderEl = document.getElementsByClassName("fullpage-loader")[0];
document.addEventListener("readystatechange", (event) => {
    const readyState = "complete";
    if (document.readyState == readyState) {
        loaderEl.classList.add("fullpage-loader--invisible");

        setTimeout(() => {
            loaderEl.parentNode.removeChild(loaderEl);
        }, 2000);
    }
});

/*=====================
    15. header Dropdown Js
 ==========================*/
$(".dropdown-menu li a").on('click', function () {
    var a = $(this).closest("a");
    var getSampling = a.text();
    var getImage = a.find('img').attr('src');

    // console.log("src path", getImage);
    $(this).closest(".dropdown-menu").prev('.dropdown-toggle').find('span').text(getSampling);
    $(this).closest(".dropdown-menu").prev('.dropdown-toggle').find('img').attr("src", getImage);
});

/*=====================
   16. Add to Cart Show Js
   ==========================*/
$(".addCart").click(function () {
    $(".add-cart-box").addClass("show");
    setTimeout(function () {
        $(".add-cart-box").removeClass("show");
    }, 5000);
});
$(".add-cart-box .btn-close").click(function () {
    $(".add-cart-box").removeClass("show");
});

/*=====================
   17. active class Js
   ==========================*/
$(".product-packege .select-packege li a").click(function () {
    $("li a").removeClass("active");
    $(this).addClass("active");
});

/*=====================
   18. Scroll down header fix js
   ==========================*/
$(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $('header').addClass('active')
    } else {
        $('header').removeClass('active')
    }
});

/*=====================
   19. setting-option open js
   ==========================*/
$(".theme-option .setting-box .setting-button").click(function () {
    $(".theme-setting-2").toggleClass("active");
    $(this).find("i").toggleClass("fa-xmark");
});

/*=====================
   20. user-dashboard profile change js
   ==========================*/
function readURL(uploader) {
    $('.update_img').attr('src',
        window.URL.createObjectURL(uploader.files[0]));
};

/*=====================
   21. Wishlist box remove js
   ==========================*/
$(".close_button").click(function () {
    $(this).closest(".product-box-contain").fadeOut("slow", function () {
        $(this).closest(".product-box-contain").remove();
    });
});

/*=====================
   22. Category Box js
   ==========================*/
$(".mobile-category").click(function () {
    $(".bg-overlay, .category-dropdown").addClass("show");
});
$(".close-button, .bg-overlay").click(function () {
    $(".bg-overlay, .category-dropdown").removeClass("show");
});

/*=====================
   23. remove notication bar js
   ==========================*/
$(".close-notification").click(function () {
    $(".header-notification").addClass("remove");
});

/*=====================
    24. category box js
==========================*/
var contentwidth = $(window).width();
if (contentwidth < "767") {
    $(".onhover-category-list .category-name").append('<span class="according-menu">+</span>');
    $(".category-name").on("click", function () {
        $(".category-name")
            .removeClass("active")
            .find("span")
            .replaceWith('<span class="according-menu">+</span>');
        $(".onhover-category-list .onhover-category-box").slideUp("normal");
        if ($(this).next().is(":hidden") == true) {
            $(this).addClass("active");
            $(this)
                .find("span")
                .replaceWith('<span class="according-menu">-</span>');
            $(this).next().slideDown("normal");
        } else {
            $(this)
                .find("span")
                .replaceWith('<span class="according-menu">+</span>');
        }
    });
    $(".accordion-box").hide();
}