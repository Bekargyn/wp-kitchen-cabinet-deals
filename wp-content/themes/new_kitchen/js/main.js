$ = jQuery;
$resize = null;
$(document).ready(function () {
  $("#mainMenuButton").click(function () {
    $(this).toggleClass("is-active");
    $(".menu-header-menu-container").toggleClass("active");
  });

  $(".menu-header-menu-container li a").click(function (e) {
    $("#mainMenuButton").click();
  })

  //##########################################
  //homeSlider
  $(".bannerSlider").slick({
    autoplay: true,
    autoplaySpeed: 5000,
    fade: true,
    cssEase: 'linear',
    infinite: true,
    speed: 500,
    prevArrow: ".slick-prev",
    nextArrow: ".slick-next"
  });
  //##########################################
  //Product Slider
  $(".home .productsSlider").slick({
    autoplay: false,
    autoplaySpeed: 5000,
    fade: true,
    cssEase: 'linear',
    infinite: true,
    speed: 500,
  });
  //##########################################
  //Product Slider & detail page slider
  $(".single-product .productsSlider").slick({
    autoplay: false,
    autoplaySpeed: 5000,
    fade: true,
    cssEase: 'linear',
    infinite: true,
    speed: 500,
    adaptiveHeight: true,
  });
  //##########################################
  //Our Latest Slide
  $('.variable-width').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    centerMode: true,
    variableWidth: true
  });
  //##########################################
  //Click on Latest Title
  $(".slideLatestProjects .title").click(function (e) {
    e.stopPropagation();
    $(".slideLatestProjects .title").removeClass("current");
    $(this).addClass("current");
    $(".slideLatestProjects .slide").removeClass("closed")
    //$(this).parents(".slide").prevAll(".slide").andSelf().addClass("closed");
    $(this).parents(".slide").nextAll(".slide").addClass("closed");
  });
  //##########################################
  if($("#file_input").length){
    $("#file_input").after("<span id='mkButton2' class='button dark d-block d-lg-none mt-3'>Browse</span>");
    $("#file_input").after("<input id='fakeInput' readonly placeholder='Select File'>")
    $("#mkButton, #fakeInput ,#mkButton2").addClass("hasFunc").click(function () {
      $("#file_input").click();
    });
    $("#file_input").change(function () {
      $("#fakeInput").val($(this).val().replace(/^.*\\/, ""));
    })
  }
  //##########################################
  var wow = new WOW(
    {
      boxClass: 'wow',      // animated element css class (default is wow)
      animateClass: 'animated', // animation css class (default is animated)
      offset: 0,          // distance to the element when triggering the animation (default is 0)
      mobile: true,       // trigger animations on mobile devices (default is true)
      live: true,       // act on asynchronously loaded content (default is true)
      callback: function (box) {
        // the callback is fired every time an animation is started
        // the argument that is passed in is the DOM node being animated
      },
      scrollContainer: null // optional scroll container selector, otherwise use window
    }
  );
  wow.init();
});

$(window).on("load", function () {
  $(".preloader").fadeOut();
  $(".bannerSlider").slick('slickGoTo', 0);
})
