
$( document ).ready(function() {

  $('#myCarousel .list-inline-item:first-child').addClass('active');
  $('#myCarousel .carousel-item:first-child').addClass('active');

$('#nav-icon').on('click', function(){
  $('#navegacion_miniburbuajas').removeClass();
  $('#navegacion_miniburbuajas').addClass('abierto_minis');
});

$('.cerrar_navega').on('click', function(){
  $('#navegacion_miniburbuajas').removeClass();
  $('#navegacion_miniburbuajas').addClass('cerrado_minis');
});

  $( '.baby_navega' ).hover( function(){
    $('.fondo_change > div').removeClass();
    $('.fondo_change > div').addClass('fondo_baby');
    $('.fondo_baby').animate({
      opacity: 1
    }, 300);

  });
  $( '.kids_navega' ).hover( function(){
    $('.fondo_change > div').removeClass();
    $('.fondo_change > div').addClass('fondo_kids');
    $('.fondo_kids').animate({
      opacity: 1
    }, 300);
  });
  $( '.primeros_navega' ).hover( function(){
    $('.fondo_change > div').removeClass();
    $('.fondo_change > div').addClass('fondo_primeros');
    $('.fondo_primeros').animate({
      opacity: 1
    }, 300);
  });
  $( '.juvenil_navega' ).hover( function(){
    $('.fondo_change > div').removeClass();
    $('.fondo_change > div').addClass('fondo_juvenil');
    $('.fondo_juvenil').animate({
      opacity: 1
    }, 300);
  });
});
new WOW().init();

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


