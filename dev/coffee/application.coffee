loadApplication = ->
  styles = ["display: block","background: #f7cd81","color: white","padding: 20px 20px 20px 20px","text-align: center","font-weight: normal","font-size: 20px","line-height: 60px"].join(';')
  console.log '%c Periodic Table of Web Templates!', styles, 'Has loaded.'
  $(theTable)

theTable = ->
  overlay = $('.overlay')
  triggerBttn = $("trigger-overlay")
  overlay = $('.overlay')
  transEndEventNames =
    WebkitTransition: "webkitTransitionEnd"
    MozTransition: "transitionend"
    OTransition: "oTransitionEnd"
    msTransition: "MSTransitionEnd"
    transition: "transitionend"

  transEndEventName = transEndEventNames[Modernizr.prefixed("transition")]
  support = transitions: Modernizr.csstransitions

  # closeBttn = $("button.overlay-close")
  # closeBttn.addEventListener "click", toggleOverlay
  toggleOverlay = ->
  if $('#theTable').length > 0
    detailContainer = $('#detail-container')
    element = $('.available')
    element.on 'click', (e) ->
      target = $(@).data 'target'
      yamlFile = "/content/table/" + target + ".yml"
      YAML.load yamlFile, (result) ->
        source   = $('#project-details').html()
        template = Handlebars.compile(source)
        $('.detail-inner').append(template(result))


        $.magnificPopup.open
          items:
            src: '#detail-container'
            type: 'inline'
          preloader: true
          mainClass: 'mfp-fade'
          removalDelay: 300
          modal: true
          callbacks:
            open: ->
              # Google tracking
              _gaq.push(['_trackEvent', 'Templates', 'Open', target]);
              $('.template-slider').animate opacity: 1, 1000
              detailSlider = $('.template-slider .swiper-container')
              detailSlider.swiper
                calculateHeight: true
                pagination: '.detail-pagination'
                paginationClickable: true
            afterClose: ->
              $('.detail-inner').html ''

        $('.close-modal').on 'click', ->
          $.magnificPopup.close()





$(loadApplication)
