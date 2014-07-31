(function() {
  var loadApplication, theTable;

  loadApplication = function() {
    var styles;
    styles = ["display: block", "background: #f7cd81", "color: white", "padding: 20px 20px 20px 20px", "text-align: center", "font-weight: normal", "font-size: 20px", "line-height: 60px"].join(';');
    console.log('%c Periodic Table of Web Templates!', styles, 'Has loaded.');
    return $(theTable);
  };

  theTable = function() {
    var detailContainer, element, overlay, support, toggleOverlay, transEndEventName, transEndEventNames, triggerBttn;
    overlay = $('.overlay');
    triggerBttn = $("trigger-overlay");
    overlay = $('.overlay');
    transEndEventNames = {
      WebkitTransition: "webkitTransitionEnd",
      MozTransition: "transitionend",
      OTransition: "oTransitionEnd",
      msTransition: "MSTransitionEnd",
      transition: "transitionend"
    };
    transEndEventName = transEndEventNames[Modernizr.prefixed("transition")];
    support = {
      transitions: Modernizr.csstransitions
    };
    toggleOverlay = function() {};
    if ($('#theTable').length > 0) {
      detailContainer = $('#detail-container');
      element = $('.available');
      return element.on('click', function(e) {
        var target, yamlFile;
        target = $(this).data('target');
        yamlFile = "/content/table/" + target + ".yml";
        return YAML.load(yamlFile, function(result) {
          var source, template;
          source = $('#project-details').html();
          template = Handlebars.compile(source);
          $('.detail-inner').append(template(result));
          $.magnificPopup.open({
            items: {
              src: '#detail-container',
              type: 'inline'
            },
            preloader: true,
            mainClass: 'mfp-fade',
            removalDelay: 300,
            modal: true,
            callbacks: {
              open: function() {
                var detailSlider;
                _gaq.push(['_trackEvent', 'Templates', 'Open', target]);
                $('.template-slider').animate({
                  opacity: 1
                }, 1000);
                detailSlider = $('.template-slider .swiper-container');
                return detailSlider.swiper({
                  calculateHeight: true,
                  pagination: '.detail-pagination',
                  paginationClickable: true
                });
              },
              afterClose: function() {
                return $('.detail-inner').html('');
              }
            }
          });
          return $('.close-modal').on('click', function() {
            return $.magnificPopup.close();
          });
        });
      });
    }
  };

  $(loadApplication);

}).call(this);
