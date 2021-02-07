

    $('.owl-carousel.owl-cards').owlCarousel({
        nav: true,
        loop: true,
        navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
        autoplay:true,
        autoplayHoverPause:true,
        autoplayTimeout:7000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });

    $('.owl-carousel.banner').owlCarousel({
        nav: true,
        dots: true,
        loop: true,
        navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
        items:1,
        autoplay:true,
        autoplayHoverPause:true,
        autoplayTimeout:7000
    });

    //Fancybox from gallery Wordpress classic editor
    $(".gallery-icon a").attr("rel", "galeria");
    $(".gallery-icon a").fancybox();

    //Fancybox from gallery Wordpress gutenberg editor
    $(".blocks-gallery-item figure a").attr("rel", "galeria");
    $(".blocks-gallery-item figure  a").fancybox();

    //Add mask in input phone
    jQuery("#telefone")
        .mask("(99) 9999-99999")
        .focusout(function (event) {
            var target, phone, element;
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;
            phone = target.value.replace(/\D/g, '');
            element = $(target);
            element.unmask();
            if(phone.length > 10) {
                element.mask("(99) 99999-9999");
            } else {
                element.mask("(99) 9999-99999");
            }
        });

    //Hide collapsible navbar on click
    $('.anchor a, .menu-item-object-page a').on('click', function(){
        $('.navbar-collapse').collapse('hide');
    });


    //Implement offset nav scroll
    $(document).on('click', '.nav-link', function () {
        $('html, body').animate({
            scrollTop: $('section[id="' + this.hash.slice(1) + '"]').offset().top-60
        }, 500);
        return false;
    });
