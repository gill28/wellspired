(function ($) {
  $(document).ready(function () {
    // Scroll to Top
    jQuery(".scrolltotop").click(function () {
      jQuery("html").animate({ scrollTop: "0px" }, 250);
      return false;
    });

    jQuery(window).scroll(function () {
      var upto = jQuery(window).scrollTop();
      if (upto > 500) {
        jQuery(".scrolltotop").fadeIn();
      } else {
        jQuery(".scrolltotop").fadeOut();
      }
    });

    jQuery(".hamburger-box").click(function () {
      jQuery(".menu-area").slideToggle();
    });

    $(".main-carousel").flickity({
      cellAlign: "left",
      contain: true,
      groupCells: true,
      freeScroll: true,
      wrapAround: true,
      groupCells: 1,
      autoPlay: false,
      pauseAutoPlayOnHover: false,
      initialIndex: 1,
      wrapAround: true,
      prevNextButtons: true,
      pageDots: false,
    });

    $(".ziehharmonika").ziehharmonika({
      collapsible: true,
      prefix: "",
    });

    let lotusText = document.querySelector(".lotus-text");
    $("#number1").mouseenter(function () {
      $(this).addClass("fill-leaf");
      if (lotusText.innerHTML.length === 0) {
        lotusText.innerHTML = `<h3>Start with Strategy</h3><br><p>We’ll work with you to
        understand your business,
        inside and out, and help you
        clarify your vision for what you
        want to create.</p>`;
      } else {
        lotusText.innerHTML = "";
      }
    });
    $("#number2").mouseenter(function () {
      $(this).addClass("fill-leaf");
      if (lotusText.innerHTML.length === 0) {
        lotusText.innerHTML = `<h3>Another Statement</h3><br><p>We’ll work with you to
        understand your business,
        inside and out, and help you
        clarify your vision for what you
        want to create.</p>`;
      } else {
        lotusText.innerHTML = "";
      }
    });
    $("#number3").mouseenter(function () {
      $(this).addClass("fill-leaf");
      if (lotusText.innerHTML.length === 0) {
        lotusText.innerHTML = `<h3>Statement 2</h3><br><p>We’ll work with you to
        understand your business,
        inside and out, and help you
        clarify your vision for what you
        want to create.</p>`;
      } else {
        lotusText.innerHTML = "";
      }
    });
    $("#number4").mouseenter(function () {
      $(this).addClass("fill-leaf");
      if (lotusText.innerHTML.length === 0) {
        lotusText.innerHTML = `<h3>Statement 3</h3><br><p>We’ll work with you to
        understand your business,
        inside and out, and help you
        clarify your vision for what you
        want to create.</p>`;
      } else {
        lotusText.innerHTML = "";
      }
    });
    $("#number5").mouseenter(function () {
      $(this).addClass("fill-leaf");
      if (lotusText.innerHTML.length === 0) {
        lotusText.innerHTML = `<h3>Statement 4</h3><br><p>We’ll work with you to
        understand your business,
        inside and out, and help you
        clarify your vision for what you
        want to create.</p>`;
      } else {
        lotusText.innerHTML = "";
      }
    });
    $("#number6, #_6").mouseenter(function () {
      $(this).addClass("fill-leaf");
      if (lotusText.innerHTML.length === 0) {
        lotusText.innerHTML = `<h3>Statement 5</h3><br><p>We’ll work with you to
        understand your business,
        inside and out, and help you
        clarify your vision for what you
        want to create.</p>`;
      } else {
        lotusText.innerHTML = "";
      }
    });

    $(
      "#number1, #number2, #number3, #number4, #number5, #number6, #_6"
    ).mouseleave(function () {
      $(this).removeClass("fill-leaf");
      lotusText.innerHTML = "";
    });
  });
})(jQuery);
