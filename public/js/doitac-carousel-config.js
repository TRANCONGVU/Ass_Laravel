$('.doitac-content-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    dots:false,
    nav:false,
    autoplay:true,
    autoplayTimeout:3000,
    responsive:{
        0:{
            items:3,
        },
        600:{
            items:5,
        },
        1000:{
            items:7,
        }
    }
})