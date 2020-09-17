require('bootstrap');

import {
  jarallax,
  jarallaxElement,
  jarallaxVideo
} from 'jarallax';

jarallaxVideo();
jarallaxElement();

var app = {
  init: function() {
    console.log('init');

    app.oagency_parallax();
    
  },

  oagency_parallax: function()
  {
    jarallax(document.querySelectorAll('.jarallax'), {
      speed: 0.2,
      type:'scroll-opacity'
    });

  }
};

$(app.init);
