function RingSize(x) {
  if (x.matches) { // If media query matches
    return 100;
  } else {
    return 200;
  }
}

function Font(x) {
  if (x.matches) { // If media query matches
    return 'bold 40px Helvetica';
  } else {
    return 'bold 72px Helvetica';
  }
}

var WindowSize = window.matchMedia("(max-width: 700px)")
var ringer = {
    //countdown_to: "10/31/2014",
    countdown_to: "08/21/2021 14:00",
    rings: {
      'Tage': { 
        s: 86400000, // mseconds in a day,
        max: 365
      },
      'Stunden': {
        s: 3600000, // mseconds per hour,
        max: 24
      },
      'Minuten': {
        s: 60000, // mseconds per minute
        max: 60
      }
     },
    
    r_count: 3,
    r_spacing: 15, // px
    r_size: RingSize(WindowSize), // px
    r_thickness: 5, // px
    update_interval: 60000, // ms
      
      
    init: function(){
     
      $r = ringer;
      $r.cvs = document.createElement('canvas');
      
      $r.size = { 
        w: ($r.r_size + $r.r_thickness) * $r.r_count + ($r.r_spacing*($r.r_count-1)), 
        h: ($r.r_size + $r.r_thickness) 
      };
      
  
  
      $r.cvs.setAttribute('width',$r.size.w);           
      $r.cvs.setAttribute('height',$r.size.h);
      $r.ctx = $r.cvs.getContext('2d');
      $(".countdown").append($r.cvs);
      $r.cvs = $($r.cvs);    
      $r.ctx.textAlign = 'center';
      $r.actual_size = $r.r_size + $r.r_thickness;
      $r.countdown_to_time = new Date($r.countdown_to).getTime();
      $r.cvs.css({ width: $r.size.w+"px", height: $r.size.h+"px" });
      $r.go();
    },
    ctx: null,
    go: function(){
      var idx=0;
      
      $r.time = (new Date().getTime()) - $r.countdown_to_time;
      
      
      for(var r_key in $r.rings) $r.unit(idx++,r_key,$r.rings[r_key]);      
      
      setTimeout($r.go,$r.update_interval);
    },
    unit: function(idx,label,ring) {
      var x,y, value, ring_secs = ring.s;
      value = parseFloat($r.time/ring_secs);
      $r.time-=Math.round(parseInt(value)) * ring_secs;
      value = Math.abs(value);
      
      x = ($r.r_size*.5 + $r.r_thickness*.5);
      x +=+(idx*($r.r_size+$r.r_spacing+$r.r_thickness));
      y = $r.r_size*.5;
      y += $r.r_thickness*.5;
  
      
      // calculate arc end angle
      var degrees = 360-(value / ring.max) * 360.0;
      var endAngle = degrees * (Math.PI / 180);
      
      $r.ctx.save();
  
      $r.ctx.translate(x,y);
      $r.ctx.clearRect($r.actual_size*-0.5,$r.actual_size*-0.5,$r.actual_size,$r.actual_size);
  
      // first circle
      $r.ctx.strokeStyle = "rgba(128,128,128,0.2)";
      $r.ctx.beginPath();
      $r.ctx.arc(0,0,$r.r_size/2,0,2 * Math.PI, 2);
      $r.ctx.lineWidth =$r.r_thickness;
      $r.ctx.stroke();
     
      // second circle
      $r.ctx.strokeStyle = "rgba(0, 150, 163, 0.9)";
      $r.ctx.beginPath();
      $r.ctx.arc(0,0,$r.r_size/2,0,endAngle, 1);
      $r.ctx.lineWidth =$r.r_thickness;
      $r.ctx.stroke();
      
      // label
      $r.ctx.fillStyle = "#000000";
     
      $r.ctx.font = '20px Helvetica';
      $r.ctx.fillText(label, 0, 30);
      $r.ctx.fillText(label, 0, 30);   
      
      $r.ctx.font = Font(WindowSize);
      $r.ctx.fillText(Math.floor(value), 0, 10);
      
      $r.ctx.restore();
    }
  }
  
  ringer.init();

  $(function(){

    window.sr = ScrollReveal();
  
    if ($(window).width() < 768) {
  
      if ($('.timeline-content').hasClass('js--fadeInLeft')) {
        $('.timeline-content').removeClass('js--fadeInLeft').addClass('js--fadeInRight');
      }
  
      sr.reveal('.js--fadeInRight', {
        origin: 'right',
        distance: '300px',
        easing: 'ease-in-out',
        duration: 800,
      });
  
    } else {
      
      sr.reveal('.js--fadeInLeft', {
        origin: 'left',
        distance: '300px',
        easing: 'ease-in-out',
        duration: 800,
      });
  
      sr.reveal('.js--fadeInRight', {
        origin: 'right',
        distance: '300px',
        easing: 'ease-in-out',
        duration: 800,
      });
  
    }
    
    sr.reveal('.js--fadeInLeft', {
        origin: 'left',
        distance: '300px',
        easing: 'ease-in-out',
        duration: 800,
      });
  
      sr.reveal('.js--fadeInRight', {
        origin: 'right',
        distance: '300px',
        easing: 'ease-in-out',
        duration: 800,
      });
  
  
  });

  // Story Timeline

  var timelineSwiper = new Swiper ('.timeline .swiper-container', {
    direction: 'vertical',
    loop: false,
    speed: 1600,
    pagination: '.swiper-pagination',
    paginationBulletRender: function (swiper, index, className) {
      var year = document.querySelectorAll('.swiper-slide')[index].getAttribute('data-year');
      return '<span class="' + className + '">' + year + '</span>';
    },
    paginationClickable: true,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    breakpoints: {
      768: {
        direction: 'horizontal',
      }
    }
  });