$(function(){
  // Carrusel 1
  $('.carousel').slick({
    dots: true,
  accessibility: true,
  infinite: true,
  autoplay: true,
  autoplaySpeed: 6000,
  speed: 700,
  centerMode: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  centerPadding: "100px",
  responsive: [
    {
      breakpoint: 992,
    },
    {
      breakpoint: 10000,
      centerMode: true,
    },
  ],
  });
  $('.slick-track').slick({
    arrows: true,
    accessibility: true,
    infinite: false,
    speed: 500,
    slidesToShow: 5,
    slidesToScroll: 1,
    prevArrow: '.slick-prev',
    nextArrow: '.slick-next',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          initialSlide: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
        },
      },
    ], 
  });
});