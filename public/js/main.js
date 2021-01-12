
  $(function() {
    $(window).scroll(function() {
        if($(window).scrollTop() > 50) {
            $("#main-nav").addClass("sticky");
        } else {
            $("#main-nav").removeClass("sticky");
        }
    });
  });

  AOS.init();

  //https://github.com/VincentGarreau/particles.js/



  var textWrapper = document.querySelector('.empower-text');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.empower-text .letter',
    opacity: [0,1],
    easing: "easeInOutQuad",
    duration: 2250,
    delay: (el, i) => 150 * (i+1)
  }).add({
    targets: '.empower-text',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
