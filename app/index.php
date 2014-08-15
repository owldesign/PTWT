<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">
    <title>Periodic Table of Web Templates | Owl Design</title>
    <meta name="description" content="Owl Design, Web Themes and Resources. Periodic Table of Web Templates" />

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <link href="css/plugins.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="css/application.css" media="screen" rel="stylesheet" type="text/css" />
    <script src="js/libs/modernizr-2.6.2.min.js"></script>
  </head>

<body class="table-page">

    <section id="detail-container" class="white-popup mfp-hide mfp-fade">
      <button class="close-modal">Close</button>
      <div class="detail-inner"></div>
    </section>


  <script id="project-details" type="text/x-handlebars-template">

    <div class="template-slider">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          {{#each slides}}
          <div class="swiper-slide">
            <img src="images/{{image}}" />
          </div>
          {{/each}}
        </div>
        <div class="detail-pagination"></div>
      </div>
    </div>

    <div class="info">
      <h1 class="heading h-01">{{name}}</h1>
      <p class="copy-01">{{summary}}</p>

      <div class="action-links">
        {{#if demoUrl}}<a href="{{demoUrl}}" class="button view-btn">Demo</a>{{/if}}
        {{#if downloadUrl}}<a href="{{downloadUrl}}" class="button download-btn">Download</a>{{/if}}
        {{#if githubUrl}}<a href="{{githubUrl}}" class="button view-on-github">View on Github</a>{{/if}}
      </div>
    </div>

  </script>


  <div class="site-inner">
    <section id="theTable">
      <header>
        <figure class="logo">
          <img src="images/html-logo.png" />
          <figcaption>
            <h1 class="heading h-01">The Periodic Table of <span>Web Templates!</span></h1>
          </figcaption>
        </figure>
      </header>

      <section class="elements">
      <!-- <section class="row"> -->
        <div class="element available" data-target="hydrogen"><span class="element-name">hydrogen</span><span class="atomic-number">1</span><span class="element-symbol">H</span></div>
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="element" data-target="helium"><span class="element-name">helium</span><span class="atomic-number">2</span><span class="element-symbol">He</span></div>
      <!-- </section> -->

      <!-- <section class="row"> -->
        <div class="element available" data-target="lithium"><span class="element-name">lithium</span><span class="atomic-number">3</span><span class="element-symbol">Li</span></div>
        <div class="element" data-target="beryllium"><span class="element-name">beryllium</span><span class="atomic-number">4</span><span class="element-symbol">Be</span></div>
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="element" data-target="baron"><span class="element-name">baron</span><span class="atomic-number">5</span><span class="element-symbol">B</span></div>
        <div class="element" data-target="carbon"><span class="element-name">carbon</span><span class="atomic-number">6</span><span class="element-symbol">C</span></div>
        <div class="element" data-target="nitrogen"><span class="element-name">nitrogen</span><span class="atomic-number">7</span><span class="element-symbol">N</span></div>
        <div class="element" data-target="oxygen"><span class="element-name">oxygen</span><span class="atomic-number">8</span><span class="element-symbol">O</span></div>
        <div class="element" data-target="fluorine"><span class="element-name">fluorine</span><span class="atomic-number">9</span><span class="element-symbol">F</span></div>
        <div class="element" data-target="neon"><span class="element-name">neon</span><span class="atomic-number">10</span><span class="element-symbol">Ne</span></div>
      <!-- </section> -->

      <!-- <section class="row"> -->
        <div class="element" data-target="sodium"><span class="element-name">sodium</span><span class="atomic-number">11</span><span class="element-symbol">Na</span></div>
        <div class="element" data-target="magnesium"><span class="element-name">magnesium</span><span class="atomic-number">12</span><span class="element-symbol">Mg</span></div>
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="element" data-target="aluminium"><span class="element-name">aluminium</span><span class="atomic-number">13</span><span class="element-symbol">Al</span></div>
        <div class="element" data-target="silicon"><span class="element-name">silicon</span><span class="atomic-number">14</span><span class="element-symbol">Si</span></div>
        <div class="element" data-target="phosphorus"><span class="element-name">phosphorus</span><span class="atomic-number">15</span><span class="element-symbol">P</span></div>
        <div class="element" data-target="sulfur"><span class="element-name">sulfur</span><span class="atomic-number">16</span><span class="element-symbol">S</span></div>
        <div class="element" data-target="chlorine"><span class="element-name">chlorine</span><span class="atomic-number">17</span><span class="element-symbol">Cl</span></div>
        <div class="element" data-target="argon"><span class="element-name">argon</span><span class="atomic-number">18</span><span class="element-symbol">Ar</span></div>
      <!-- </section> -->

      <!-- <section class="row"> -->
        <div class="element" data-target="potassium"><span class="element-name">potassium</span><span class="atomic-number">19</span><span class="element-symbol">K</span></div>
        <div class="element" data-target="calcium"><span class="element-name">calcium</span><span class="atomic-number">20</span><span class="element-symbol">Ca</span></div>
        <div class="element" data-target="scandium"><span class="element-name">scandium</span><span class="atomic-number">21</span><span class="element-symbol">Sc</span></div>
        <div class="element" data-target="titanium"><span class="element-name">titanium</span><span class="atomic-number">22</span><span class="element-symbol">Ti</span></div>
        <div class="element" data-target="vanadium"><span class="element-name">vanadium</span><span class="atomic-number">23</span><span class="element-symbol">V</span></div>
        <div class="element" data-target="chromium"><span class="element-name">chromium</span><span class="atomic-number">24</span><span class="element-symbol">Cr</span></div>
        <div class="element" data-target="manganese"><span class="element-name">manganese</span><span class="atomic-number">25</span><span class="element-symbol">Mn</span></div>
        <div class="element" data-target="iron"><span class="element-name">iron</span><span class="atomic-number">26</span><span class="element-symbol">Fe</span></div>
        <div class="element" data-target="cobalt"><span class="element-name">cobalt</span><span class="atomic-number">27</span><span class="element-symbol">Co</span></div>
        <div class="element" data-target="nickel"><span class="element-name">nickel</span><span class="atomic-number">28</span><span class="element-symbol">Ni</span></div>
        <div class="element" data-target="copper"><span class="element-name">copper</span><span class="atomic-number">29</span><span class="element-symbol">Cu</span></div>
        <div class="element" data-target="zinc"><span class="element-name">zinc</span><span class="atomic-number">30</span><span class="element-symbol">Zn</span></div>
        <div class="element" data-target="gallium"><span class="element-name">gallium</span><span class="atomic-number">31</span><span class="element-symbol">Ga</span></div>
        <div class="element" data-target="germanium"><span class="element-name">germanium</span><span class="atomic-number">32</span><span class="element-symbol">Ge</span></div>
        <div class="element" data-target="arsenic"><span class="element-name">arsenic</span><span class="atomic-number">33</span><span class="element-symbol">As</span></div>
        <div class="element" data-target="salenium"><span class="element-name">salenium</span><span class="atomic-number">34</span><span class="element-symbol">Se</span></div>
        <div class="element" data-target="bromine"><span class="element-name">bromine</span><span class="atomic-number">35</span><span class="element-symbol">Br</span></div>
        <div class="element" data-target="krypton"><span class="element-name">krypton</span><span class="atomic-number">36</span><span class="element-symbol">Kr</span></div>
      <!-- </section> -->

      <!-- <section class="row"> -->
        <div class="element" data-target="rubidium"><span class="element-name">rubidium</span><span class="atomic-number">37</span><span class="element-symbol">Rb</span></div>
        <div class="element" data-target="strontium"><span class="element-name">strontium</span><span class="atomic-number">38</span><span class="element-symbol">Sr</span></div>
        <div class="element" data-target="yttrium"><span class="element-name">yttrium</span><span class="atomic-number">39</span><span class="element-symbol">Y</span></div>
        <div class="element" data-target="zirconium"><span class="element-name">zirconium</span><span class="atomic-number">40</span><span class="element-symbol">Zr</span></div>
        <div class="element" data-target="niobium"><span class="element-name">niobium</span><span class="atomic-number">41</span><span class="element-symbol">Nb</span></div>
        <div class="element" data-target="molybdenum"><span class="element-name">molybdenum</span><span class="atomic-number">42</span><span class="element-symbol">Mo</span></div>
        <div class="element" data-target="technetium"><span class="element-name">technetium</span><span class="atomic-number">43</span><span class="element-symbol">Tc</span></div>
        <div class="element" data-target="ruthenium"><span class="element-name">ruthenium</span><span class="atomic-number">44</span><span class="element-symbol">Ru</span></div>
        <div class="element" data-target="rhodium"><span class="element-name">rhodium</span><span class="atomic-number">45</span><span class="element-symbol">Rh</span></div>
        <div class="element" data-target="palladium"><span class="element-name">palladium</span><span class="atomic-number">46</span><span class="element-symbol">Pd</span></div>
        <div class="element" data-target="silver"><span class="element-name">silver</span><span class="atomic-number">47</span><span class="element-symbol">Ag</span></div>
        <div class="element" data-target="cadmium"><span class="element-name">cadmium</span><span class="atomic-number">48</span><span class="element-symbol">Cd</span></div>
        <div class="element" data-target="indium"><span class="element-name">indium</span><span class="atomic-number">49</span><span class="element-symbol">In</span></div>
        <div class="element" data-target="tin"><span class="element-name">tin</span><span class="atomic-number">50</span><span class="element-symbol">Sn</span></div>
        <div class="element" data-target="antimony"><span class="element-name">antimony</span><span class="atomic-number">51</span><span class="element-symbol">Sb</span></div>
        <div class="element" data-target="tellurium"><span class="element-name">tellurium</span><span class="atomic-number">52</span><span class="element-symbol">Te</span></div>
        <div class="element" data-target="iodine"><span class="element-name">iodine</span><span class="atomic-number">53</span><span class="element-symbol">I</span></div>
        <div class="element" data-target="xenon"><span class="element-name">xenon</span><span class="atomic-number">52</span><span class="element-symbol">Xe</span></div>
      <!-- </section> -->

      <!-- <section class="row"> -->
        <div class="element" data-target="caesium"><span class="element-name">caesium</span><span class="atomic-number">55</span><span class="element-symbol">Cs</span></div>
        <div class="element" data-target="barium"><span class="element-name">barium</span><span class="atomic-number">56</span><span class="element-symbol">Ba</span></div>
        <div class="empty"></div>
        <div class="element" data-target="hafnium"><span class="element-name">hafnium</span><span class="atomic-number">72</span><span class="element-symbol">Hf</span></div>
        <div class="element" data-target="tantalum"><span class="element-name">tantalum</span><span class="atomic-number">73</span><span class="element-symbol">Ta</span></div>
        <div class="element" data-target="tungsten"><span class="element-name">tungsten</span><span class="atomic-number">74</span><span class="element-symbol">W</span></div>
        <div class="element" data-target="rhenium"><span class="element-name">rhenium</span><span class="atomic-number">75</span><span class="element-symbol">Re</span></div>
        <div class="element" data-target="osmium"><span class="element-name">osmium</span><span class="atomic-number">76</span><span class="element-symbol">Os</span></div>
        <div class="element" data-target="iridium"><span class="element-name">iridium</span><span class="atomic-number">77</span><span class="element-symbol">Ir</span></div>
        <div class="element" data-target="platinum"><span class="element-name">platinum</span><span class="atomic-number">78</span><span class="element-symbol">Pt</span></div>
        <div class="element" data-target="gold"><span class="element-name">gold</span><span class="atomic-number">79</span><span class="element-symbol">Au</span></div>
        <div class="element" data-target="mercury"><span class="element-name">mercury</span><span class="atomic-number">80</span><span class="element-symbol">Hg</span></div>
        <div class="element" data-target="thallium"><span class="element-name">thallium</span><span class="atomic-number">81</span><span class="element-symbol">Tl</span></div>
        <div class="element" data-target="lead"><span class="element-name">lead</span><span class="atomic-number">82</span><span class="element-symbol">Pb</span></div>
        <div class="element" data-target="bismuth"><span class="element-name">bismuth</span><span class="atomic-number">83</span><span class="element-symbol">Bi</span></div>
        <div class="element" data-target="polonium"><span class="element-name">polonium</span><span class="atomic-number">84</span><span class="element-symbol">Po</span></div>
        <div class="element" data-target="astatine"><span class="element-name">astatine</span><span class="atomic-number">85</span><span class="element-symbol">At</span></div>
        <div class="element" data-target="radon"><span class="element-name">radon</span><span class="atomic-number">86</span><span class="element-symbol">Rn</span></div>
      <!-- </section> -->

      <!-- <section class="row"> -->
        <div class="element" data-target="francium"><span class="element-name">francium</span><span class="atomic-number">87</span><span class="element-symbol">Fr</span></div>
        <div class="element" data-target="radium"><span class="element-name">radium</span><span class="atomic-number">88</span><span class="element-symbol">Ra</span></div>
        <div class="empty"></div>
        <div class="element" data-target="rutherfordium"><span class="element-name">rutherfordium</span><span class="atomic-number">104</span><span class="element-symbol">Rf</span></div>
        <div class="element" data-target="dubnium"><span class="element-name">dubnium</span><span class="atomic-number">105</span><span class="element-symbol">Db</span></div>
        <div class="element" data-target="seaborgium"><span class="element-name">seaborgium</span><span class="atomic-number">106</span><span class="element-symbol">Sg</span></div>
        <div class="element" data-target="bohrium"><span class="element-name">bohrium</span><span class="atomic-number">107</span><span class="element-symbol">Bh</span></div>
        <div class="element" data-target="hassium"><span class="element-name">hassium</span><span class="atomic-number">108</span><span class="element-symbol">Hs</span></div>
        <div class="element" data-target="meitnerium"><span class="element-name">meitnerium</span><span class="atomic-number">109</span><span class="element-symbol">Mt</span></div>
        <div class="element" data-target="damstadtium"><span class="element-name">damstadtium</span><span class="atomic-number">110</span><span class="element-symbol">Ds</span></div>
        <div class="element" data-target="roentgenium"><span class="element-name">roentgenium</span><span class="atomic-number">111</span><span class="element-symbol">Rg</span></div>
        <div class="element" data-target="copernicium"><span class="element-name">copernicium</span><span class="atomic-number">112</span><span class="element-symbol">Cn</span></div>
        <div class="element" data-target="ununtrium"><span class="element-name">ununtrium</span><span class="atomic-number">113</span><span class="element-symbol">Uut</span></div>
        <div class="element" data-target="flerovium"><span class="element-name">flerovium</span><span class="atomic-number">114</span><span class="element-symbol">Fl</span></div>
        <div class="element" data-target="ununpentium"><span class="element-name">ununpentium</span><span class="atomic-number">115</span><span class="element-symbol">Uup</span></div>
        <div class="element" data-target="livermorium"><span class="element-name">livermorium</span><span class="atomic-number">116</span><span class="element-symbol">Lv</span></div>
        <div class="element" data-target="ununseptium"><span class="element-name">ununseptium</span><span class="atomic-number">117</span><span class="element-symbol">Uus</span></div>
        <div class="element" data-target="ununoctium"><span class="element-name">ununoctium</span><span class="atomic-number">118</span><span class="element-symbol">Uuo</span></div>
      <!-- </section> -->

      <!-- <section class="row push"> -->
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="element" data-target="lanthanum"><span class="element-name">lanthanum</span><span class="atomic-number">57</span><span class="element-symbol">La</span></div>
        <div class="element" data-target="cerium"><span class="element-name">cerium</span><span class="atomic-number">58</span><span class="element-symbol">Ce</span></div>
        <div class="element" data-target="praseodymium"><span class="element-name">praseodymium</span><span class="atomic-number">59</span><span class="element-symbol">Pr</span></div>
        <div class="element" data-target="neodymium"><span class="element-name">neodymium</span><span class="atomic-number">60</span><span class="element-symbol">Nd</span></div>
        <div class="element" data-target="promethium"><span class="element-name">promethium</span><span class="atomic-number">61</span><span class="element-symbol">Pm</span></div>
        <div class="element" data-target="samarium"><span class="element-name">samarium</span><span class="atomic-number">62</span><span class="element-symbol">Sm</span></div>
        <div class="element" data-target="europium"><span class="element-name">europium</span><span class="atomic-number">63</span><span class="element-symbol">Eu</span></div>
        <div class="element" data-target="gadolinium"><span class="element-name">gadolinium</span><span class="atomic-number">64</span><span class="element-symbol">Gd</span></div>
        <div class="element" data-target="terbium"><span class="element-name">terbium</span><span class="atomic-number">65</span><span class="element-symbol">Tb</span></div>
        <div class="element" data-target="dysprosium"><span class="element-name">dysprosium</span><span class="atomic-number">66</span><span class="element-symbol">Dy</span></div>
        <div class="element" data-target="holmium"><span class="element-name">holmium</span><span class="atomic-number">67</span><span class="element-symbol">Ho</span></div>
        <div class="element" data-target="erbium"><span class="element-name">erbium</span><span class="atomic-number">68</span><span class="element-symbol">Er</span></div>
        <div class="element" data-target="thulium"><span class="element-name">thulium</span><span class="atomic-number">69</span><span class="element-symbol">Tm</span></div>
        <div class="element" data-target="ytterbium"><span class="element-name">ytterbium</span><span class="atomic-number">70</span><span class="element-symbol">Yb</span></div>
        <div class="element" data-target="lutetium"><span class="element-name">lutetium</span><span class="atomic-number">71</span><span class="element-symbol">Lu</span></div>
      <!-- </section> -->

      <!-- <section class="row"> -->
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="element" data-target="actinium"><span class="element-name">actinium</span><span class="atomic-number">89</span><span class="element-symbol">Ac</span></div>
        <div class="element" data-target="thorium"><span class="element-name">thorium</span><span class="atomic-number">90</span><span class="element-symbol">Th</span></div>
        <div class="element" data-target="protactinium"><span class="element-name">protactinium</span><span class="atomic-number">91</span><span class="element-symbol">Pa</span></div>
        <div class="element" data-target="uranium"><span class="element-name">uranium</span><span class="atomic-number">92</span><span class="element-symbol">U</span></div>
        <div class="element" data-target="neptunium"><span class="element-name">neptunium</span><span class="atomic-number">93</span><span class="element-symbol">Np</span></div>
        <div class="element" data-target="plutonium"><span class="element-name">plutonium</span><span class="atomic-number">94</span><span class="element-symbol">Pu</span></div>
        <div class="element" data-target="americium"><span class="element-name">americium</span><span class="atomic-number">95</span><span class="element-symbol">Am</span></div>
        <div class="element" data-target="cirium"><span class="element-name">cirium</span><span class="atomic-number">96</span><span class="element-symbol">Cm</span></div>
        <div class="element" data-target="berkelium"><span class="element-name">berkelium</span><span class="atomic-number">97</span><span class="element-symbol">Bk</span></div>
        <div class="element" data-target="californium"><span class="element-name">californium</span><span class="atomic-number">98</span><span class="element-symbol">Cf</span></div>
        <div class="element" data-target="einsteinium"><span class="element-name">einsteinium</span><span class="atomic-number">99</span><span class="element-symbol">Es</span></div>
        <div class="element" data-target="fermium"><span class="element-name">fermium</span><span class="atomic-number">100</span><span class="element-symbol">Fm</span></div>
        <div class="element" data-target="mendelevium"><span class="element-name">mendelevium</span><span class="atomic-number">101</span><span class="element-symbol">Md</span></div>
        <div class="element" data-target="nobelium"><span class="element-name">nobelium</span><span class="atomic-number">102</span><span class="element-symbol">No</span></div>
        <div class="element" data-target="lawrencium"><span class="element-name">lawrencium</span><span class="atomic-number">103</span><span class="element-symbol">Lr</span></div>
      <!-- </section> -->
      </section>
    </section>
  </div>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.10.2.min.js"><\/script>');</script>

  <script src="js/plugins.js"></script>
  <script src="js/application.js"></script>


  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-53431423-1']);
    _gaq.push(['_trackPageview']);
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>

</body>
</html>
