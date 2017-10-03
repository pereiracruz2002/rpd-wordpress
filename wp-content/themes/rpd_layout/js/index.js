$('.slider').each(function() {
  var $this = $(this);
  var $group = $this.find('.slide_group');
  var $slides = $this.find('.slide');
  var bulletArray = [];
  var currentIndex = 0;
  var timeout;

  function move(newIndex) {
    var animateLeft, slideLeft;

    advance();

    if ($group.is(':animated') || currentIndex === newIndex) {
      return;
    }

    bulletArray[currentIndex].removeClass('active');
    bulletArray[newIndex].addClass('active');

    if (newIndex > currentIndex) {
      slideLeft = '100%';
      animateLeft = '-100%';
    } else {
      slideLeft = '-100%';
      animateLeft = '100%';
    }

    $slides.eq(newIndex).css({
      display: 'block',
      left: slideLeft
    });
    $group.animate({
      left: animateLeft
    }, function() {
      $slides.eq(currentIndex).css({
        display: 'none'
      });
      $slides.eq(newIndex).css({
        left: 0
      });
      $group.css({
        left: 0
      });
      currentIndex = newIndex;
    });
  }

  function advance() {
    clearTimeout(timeout);
    timeout = setTimeout(function() {
      if (currentIndex < ($slides.length - 1)) {
        move(currentIndex + 1);
      } else {
        move(0);
      }
    }, 4000);
  }

  $('.next_btn').on('click', function() {
    if (currentIndex < ($slides.length - 1)) {
      move(currentIndex + 1);
    } else {
      move(0);
    }
  });

  $('.previous_btn').on('click', function() {
    if (currentIndex !== 0) {
      move(currentIndex - 1);
    } else {
      move(3);
    }
  });

  $.each($slides, function(index) {
    var $button = $('<a class="slide_btn">&bull;</a>');

    if (index === currentIndex) {
      $button.addClass('active');
    }
    $button.on('click', function() {
      move(index);
    }).appendTo('.slide_buttons');
    bulletArray.push($button);
  });

  advance();
});

$(".owl-carousel").owlCarousel({
  margin:10,
  loop:true,
  dots: true,
  nav: true,
  items: 1
});
"use strict";

new Vue({
  el: "#wrapper",
  data: {
    start: 0,
    end: 4,
    images: [{
      src: "https://s-media-cache-ak0.pinimg.com/736x/21/03/be/2103be1fba6d41cbf2786d798f2b995a.jpg"
    }, {
      src: "https://s-media-cache-ak0.pinimg.com/736x/fe/3c/cc/fe3ccc0819302b990eef51f3e7c1ece1.jpg"
    }, {
      src: "http://scontent-b.cdninstagram.com/hphotos-xfa1/t51.2885-15/e15/11005268_873255612718021_925682034_n.jpg"
    }, {
      src: "http://orig03.deviantart.net/a59d/f/2015/013/0/2/roshan_wallpaper_by_imkb-d8dqltj.jpg"
    }, {
      src: "http://dota2walls.com/wp-content/uploads/2014/09/undying-vector-wallpaper.jpg"
    }, {
      src: "https://raw.githubusercontent.com/paralin/Dota2/master/Resources/Misc/dota2_logo.jpg"
    }, {
      src: "https://s-media-cache-ak0.pinimg.com/736x/21/03/be/2103be1fba6d41cbf2786d798f2b995a.jpg"
    }]
  },
  filters: {
    paginate: function paginate(array, start, end) {
      return array.slice(start, end);
    }
  },
  methods: {
    paginate: function paginate(direction) {
      if (direction === 'moveRight') {
        if (this.end >= this.images.length) {
          this.start = this.start;
          this.end = this.images.length;
        } else {
          this.start += 1;
          this.end += 1;
        }
      } else if (direction === 'previous') {
        if (this.start <= 0) {
          this.start = 0;
          this.end = 4;
        } else {
          this.start -= 1;
          this.end -= 1;
        }
      }
    }
  }

});
