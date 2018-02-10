
(function () {
  'use strict';

  var BODY_BACKGROUNDS = [
    '#8850FF',
    '#FFBA00',
    '#F15A29',
    '#4054FF'
  ];

  function Slider () {
    this.cards = document.querySelectorAll('.card');
    this.currentIndex = 0;

    this.isDragging = false;
    this.startX = 0;
    this.currentX = 0;

    this.initEvents();
    this.setActivePlaceholder();
  }

  // initialize drag events
  Slider.prototype.initEvents = function () {
    document.addEventListener('touchstart', this.onStart.bind(this));
    document.addEventListener('touchmove', this.onMove.bind(this));
    document.addEventListener('touchend', this.onEnd.bind(this));

    document.addEventListener('mousedown', this.onStart.bind(this));
    document.addEventListener('mousemove', this.onMove.bind(this));
    document.addEventListener('mouseup', this.onEnd.bind(this));

  };

  // set active placeholder
  Slider.prototype.setActivePlaceholder = function () {
    var placeholders = document.querySelectorAll('.cards-placeholder__item');
    var activePlaceholder = document.querySelector('.cards-placeholder__item--active')

    if (activePlaceholder) {
      activePlaceholder.classList.remove('cards-placeholder__item--active');
    }

    placeholders[this.currentIndex].classList.add('cards-placeholder__item--active');

    var bodyEl = document.querySelector('.cosa');
    bodyEl.style.background = BODY_BACKGROUNDS[this.currentIndex];
  };

  // mousedown event
  Slider.prototype.onStart = function (evt) {
    this.isDragging = true;

    this.currentX = evt.pageX || evt.touches[0].pageX;
    this.startX = this.currentX;

    var card = this.cards[this.currentIndex];

    // calculate ration to use in parallax effect
    this.windowWidth = window.innerWidth;
    this.cardWidth = card.offsetWidth;
    this.ratio = this.windowWidth / (this.cardWidth / 4);
  };

  // mouseup event
  Slider.prototype.onEnd = function (evt) {
    this.isDragging = false;

    var diff = this.startX - this.currentX;
    var direction = (diff > 0) ? 'left' : 'right';
    this.startX = 0;

    if (Math.abs(diff) > this.windowWidth / 4) {
      if (direction === 'left') {
        this.slideLeft();
      } else if (direction === 'right') {
        this.slideRight();
      } else {
        this.cancelMoveCard();
      }

    } else {
      this.cancelMoveCard();

    }

  };

  // mousemove event
  Slider.prototype.onMove = function (evt) {
    if (!this.isDragging) return;

    this.currentX = evt.pageX || evt.touches[0].pageX;
    var diff = this.startX - this.currentX;
    diff *= -1;

    // don't let drag way from the center more than quarter of window
    if (Math.abs(diff) > this.windowWidth / 4) {
      if (diff > 0) {
        diff = this.windowWidth / 4;
      } else {
        diff = - this.windowWidth / 4;
      }
    }

    this.moveCard(diff);
  };

  // slide to left direction
  Slider.prototype.slideLeft = function () {
    // if last don't do nothing
    if (this.currentIndex === this.cards.length - 1) {
      this.cancelMoveCard();
      return;
    }

    var self = this;
    var card = this.cards[this.currentIndex];
    var cardWidth = this.windowWidth / 2;

    card.style.left = '-50%';

    this.resetCardElsPosition();

    this.currentIndex += 1;
    this.setActivePlaceholder();
    card = this.cards[this.currentIndex];

    card.style.left = '50%';

    this.moveCardEls(cardWidth * 3);

    // add delay to resetting position
    setTimeout(function () {
      self.resetCardElsPosition();
    }, 50);
  };

  // slide to right direction
  Slider.prototype.slideRight = function () {
    // if last don't do nothing
    if (this.currentIndex === 0) {
      this.cancelMoveCard();
      return;
    }

    var self = this;
    var card = this.cards[this.currentIndex];
    var cardWidth = this.windowWidth / 2;

    card.style.left = '150%';

    this.resetCardElsPosition();

    this.currentIndex -= 1;
    this.setActivePlaceholder();
    card = this.cards[this.currentIndex];

    card.style.left = '50%';

    this.moveCardEls(-cardWidth * 3);

    // add delay to resetting position
    setTimeout(function () {
      self.resetCardElsPosition();
    }, 50);
  };

  // put active card in original position (center)
  Slider.prototype.cancelMoveCard = function () {
    var self = this;
    var card = this.cards[this.currentIndex];

    card.style.transition = 'transform 0.5s ease-out';
    card.style.transform = '';

    this.resetCardElsPosition();
  };

  // reset to original position elements of card
  Slider.prototype.resetCardElsPosition = function () {
    var self = this;
    var card = this.cards[this.currentIndex];

    var cardLogo = card.querySelector('.card__logo');
    var cardPrice = card.querySelector('.card__price');
    var cardTitle = card.querySelector('.card__title');
    var cardSubtitle = card.querySelector('.card__subtitle');
    var cardImage = card.querySelector('.card__image');
    var cardWishList = card.querySelector('.card__wish-list');
    var cardCategory = card.querySelector('.card__category');
    var cardWillAnimate = card.querySelectorAll('.card__will-animate');
    var fondo = document.querySelector('.cosa');


    fondo.style.backgroundPosition = '';
    // move card elements to original position
    cardWillAnimate.forEach(function (el) {
      el.style.transition = 'transform 0.5s ease-out';
    });

    cardLogo.style.transform = '';
    cardPrice.style.transform = '';

    cardTitle.style.transform = '';
    cardSubtitle.style.transform = '';

    cardImage.style.transform = '';
    cardWishList.style.transform = '';
    cardCategory.style.transform = '';

    // clear transitions
    setTimeout(function () {
      card.style.transform = '';
      card.style.transition = '';

      cardWillAnimate.forEach(function (el) {
        el.style.transition = '';
      });
    }, 500);

  };

  // slide card while dragging
  Slider.prototype.moveCard = function (diff) {

    var card = this.cards[this.currentIndex];

    card.style.transform = 'translateX(calc(' + diff + 'px - 50%))';
    diff *= -1;

    this.moveCardEls(diff);
  };

  // create parallax effect on card elements sliding them
  Slider.prototype.moveCardEls = function (diff) {
    var card = this.cards[this.currentIndex];

    var cardLogo = card.querySelector('.card__logo');
    var cardPrice = card.querySelector('.card__price');
    var cardTitle = card.querySelector('.card__title');
    var cardSubtitle = card.querySelector('.card__subtitle');
    var cardImage = card.querySelector('.card__image');
    var cardWishList = card.querySelector('.card__wish-list');
    var cardCategory = card.querySelector('.card__category');
    var cardWillAnimate = card.querySelectorAll('.card__will-animate');
    var fondo = document.querySelector('.cosa');

    fondo.style.backgroundPosition = (50 + Math.round(diff / this.ratio *1.3)) +'% 50%';

    cardLogo.style.transform = 'translateX(' + (diff / this.ratio) + 'px)';
    cardPrice.style.transform = 'translateX(' + (diff / this.ratio) + 'px)';

    cardTitle.style.transform = 'translateX(' + (diff / (this.ratio * 0.90)) + 'px)';
    cardSubtitle.style.transform = 'translateX(' + (diff / (this.ratio * 0.85)) + 'px)';

    cardImage.style.transform = 'translateX(' + (diff / (this.ratio * 0.35)) + 'px)';

    cardWishList.style.transform = 'translateX(' + (diff / (this.ratio * 0.85)) + 'px)';
    cardCategory.style.transform = 'translateX(' + (diff / (this.ratio * 0.65)) + 'px)';

  };


  // create slider
  var slider = new Slider();

})();



var path = anime.path('.st0');


function particula(maximo, duracioon, camino, agregar){
  var maxElements = maximo;
  var duration = duracioon;
  var toAnimate = [];
  var radius = window.innerWidth < window.innerHeight ? window.innerWidth : window.innerHeight;
  var distance = radius / 10 <= 100 ? 200 : radius / 10; 
  var colors = ['rgba(0,255,0, 0.3)'];
  var anchosParticulas = window.innerWidth+100;
  console.log(anchosParticulas);


  var createElements = (function() {
    var fragment = document.createDocumentFragment();
    for (var i = 0; i < maxElements; i++) {
      var el = document.createElement('div');
      el.classList.add('particula_potato');
      let anchooos = Math.round(Math.random(anchosParticulas)*200) + 'px';
      console.log(anchooos);
      el.style.width = anchooos;
      el.style.height = anchooos;
      el.style.color = colors;
      el.style.background = colors;
      toAnimate.push(el);
      fragment.appendChild(el);
    }
    agregar[0].appendChild(fragment);
  })();

  var animate = function(el, i) {
    var angle = Math.random() * Math.PI * 2;
    anime({
      targets: el,
      translateX: { 
        value: camino('x'),
        delay: 1000,
        easing: 'easeOutSine',
      },
      translateY: { 
        value: camino('y'),
        delay: 1000,
        easing: 'easeOutSine',
      },
      scale: [
        {value: [0, 1], duration: 800, easing: 'easeOutBack'},
        {value: 0, duration: 800, delay: duration - 3500, easing: 'easeInBack'}
      ],
      offset: (duration / maxElements) * i,
      duration: duration,
      delay: (duration / maxElements) * i,
      easing: 'easeOutSine',
      loop: true
    });
  }

  toAnimate.forEach(animate);
}

let agregarCanvas =  document.getElementsByClassName('canvas')

particula(10, 6000, anime.path('.st0'), agregarCanvas);

particula(10, 6000, anime.path('.st2'), agregarCanvas);

let tootgleIcono = document.getElementById("nav-icon");
tootgleIcono.addEventListener("click", cambiarClase);

function cambiarClase(){
  console.log('potato');
  tootgleIcono.classList.toggle("abrir_header");
}



