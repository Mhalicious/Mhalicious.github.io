
<html>
  <head>
    <meta content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" type="text/css" href="css/global.css"/>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="fontawesome/font-awesome.min.css"/>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <script type="text/javascript" src="js/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57229957-1', 'auto');
  ga('send', 'pageview');

</script>
  </head>
  <body>
    <div id="mainContainer">
      <div id="contact"> <a href=""></a>
        <div id="contactOuter">
          <div id="contactInner">
            <h3>CONTACT ME!</h3>
            <form method="POST" action="send.php">
              <div class="group">
                <div class="left">
                  <input type="text" value="" placeholder="NAME" name="name" tabindex="1" class="redacted"/>
                </div>
                <div class="right">
                  <input type="text" value="" placeholder="EMAIL" name="email" tabindex="3" class="redacted"/>
                </div>
              </div>
              <div>
                <textarea placeholder="MESSAGE" name="message" tabindex="5" rows="10" class="redacted"></textarea>
              </div>
              <div>
                <input type="submit" value="Send Mail" tabindex="6" class="redacted"/>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div id="header">
        <div id="headerinner">
          <div id="img"><a href="#"> <img src="img/logo.png"/></a></div>
          <div id="navigation">
            <ul>
              <li><a href="about">about</a></li>
              <li><a href="portfolio">portfolio</a></li>
              <li><a href="#contact">contact</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div id="sliderOuter">
        <div class="sliderInner autoplay">
          <input name="cs_anchor1" id="cs_slide1_0" type="radio" autocomplete="off" class="cs_anchor slide"/>
          <input name="cs_anchor1" id="cs_slide1_1" type="radio" autocomplete="off" class="cs_anchor slide"/>
          <input name="cs_anchor1" id="cs_play1" type="radio" checked="checked" autocomplete="off" class="cs_anchor"/>
          <input name="cs_anchor1" id="cs_pause1_0" type="radio" autocomplete="off" class="cs_anchor pause"/>
          <input name="cs_anchor1" id="cs_pause1_1" type="radio" autocomplete="off" class="cs_anchor pause"/>
          <ul>
            <div style="width: 100%; visibility: hidden; font-size: 0px; line-height: 0;"><img src="img/slider/lupe.jpg" style="width: 100%;"/></div>
            <li class="num0 img"><img src="img/slider/hoverfly.jpg" alt="Hoverfly_Slider" title="Hoverfly"/></li>
            <li class="num1 img"><img src="img/slider/fish.jpg" alt="Fish_Slider" title="Fish"/></li>
          </ul>
          <div class="cs_play_pause">
            <label for="cs_play1" class="cs_play"><span><i></i></span></label>
            <label for="cs_pause1_0" class="cs_pause num0"><span><i></i></span></label>
            <label for="cs_pause1_1" class="cs_pause num1"><span><i></i></span></label>
          </div>
          <div class="cs_bullets">
            <label for="cs_slide1_0" class="num0"><span class="cs_point"></span></label>
            <label for="cs_slide1_1" class="num1"><span class="cs_point"></span></label>
          </div>
        </div>
      </div>
      <div id="containerOuter">
        <div id="container">
          <div class="one_half last">
            <h1>Photographer</h1>
            <div class="four_fifth">
              <p>
                I love photography. 
                I spend a lot of time in macro and landscape 
                photography. For me, photography is very important
                because I can check out the nature and see everytime 
                some new interesting and inspiring stuff.
                
              </p>
            </div>
            <div class="one_fifth last">
              <div><i class="fa fa-camera-retro fa-3x"></i></div>
            </div>
          </div>
          <div class="one_half last"> 
            <h1>Coder </h1>
            <div class="one_fifth"> 
              <div><i class="fa fa-code fa-3x"></i></div>
            </div>
            <div class="four_fifth last">
              <p>
                I like very readable code therefore I work 
                with Jade for HTML, SASS for CSS, 
                and CoffeeScript for JavaScript. JQuery and CSS3 are 
                very funny things to play around with. 
                Currently I check out the framework CakePHP.
                
                
              </p>
            </div>
          </div>
        </div>
      </div>
      <div id="refContainer"> 
        <h3>SOME OF MY RECENT WORK</h3>
        <ul class="boxes">
          <li><a href="http://www.digitalnativesounds.at" target="_blank"><img src="img/work/digital.jpg"/>
              <div class="desc">
                <div class="descInner">
                  <h5>DigitalNativeSounds </h5>
                  <p>Webdesign</p>
                </div>
              </div></a></li>
          <li><a href="http://www.volxpop-music.at" target="_blank"><img src="img/work/volxpop.jpg"/>
              <div class="desc">
                <div class="descInner">
                  <h5>Volxpop</h5>
                  <p>Wordpress Theme Optimization</p>
                </div>
              </div></a></li>
          <li><a href="#3"><img src="img/work/portal.jpg"/>
              <div class="desc">
                <div class="descInner">
                  <h5>PortalBee</h5>
                  <p>Photography / Macro</p>
                </div>
              </div></a></li>
        </ul>
      </div>
      <div id="footer"> 
        <div id="footerInner">copyright Jan Peer
          <div id="footIMG"><a href="#"> <img src="img/logo.png"/></a></div>
        </div>
      </div>
    </div>
  </body>
</html>