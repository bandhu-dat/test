<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/hopage.css">
        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
        <!-- use jssor.slider.debug.js instead for debug -->
        <script>
            jQuery(document).ready(function ($) {   

                var jssor_1_SlideoTransitions = [
                    [{b: 5500, d: 3000, o: -1, r: 240, e: {r: 2}}],
                    [{b: -1, d: 1, o: -1, c: {x: 51.0, t: -51.0}}, {b: 0, d: 1000, o: 1, c: {x: -51.0, t: 51.0}, e: {o: 7, c: {x: 7, t: 7}}}],
                    [{b: -1, d: 1, o: -1, sX: 9, sY: 9}, {b: 1000, d: 1000, o: 1, sX: -9, sY: -9, e: {sX: 2, sY: 2}}],
                    [{b: -1, d: 1, o: -1, r: -180, sX: 9, sY: 9}, {b: 2000, d: 1000, o: 1, r: 180, sX: -9, sY: -9, e: {r: 2, sX: 2, sY: 2}}],
                    [{b: -1, d: 1, o: -1}, {b: 3000, d: 2000, y: 180, o: 1, e: {y: 16}}],
                    [{b: -1, d: 1, o: -1, r: -150}, {b: 7500, d: 1600, o: 1, r: 150, e: {r: 3}}],
                    [{b: 10000, d: 2000, x: -379, e: {x: 7}}],
                    [{b: 10000, d: 2000, x: -379, e: {x: 7}}],
                    [{b: -1, d: 1, o: -1, r: 288, sX: 9, sY: 9}, {b: 9100, d: 900, x: -1400, y: -660, o: 1, r: -288, sX: -9, sY: -9, e: {r: 6}}, {b: 10000, d: 1600, x: -200, o: -1, e: {x: 16}}]
                ];

                var jssor_1_options = {
                    $AutoPlay: true,
                    $SlideDuration: 800,
                    $SlideEasing: $Jease$.$OutQuint,
                    $CaptionSliderOptions: {
                        $Class: $JssorCaptionSlideo$,
                        $Transitions: jssor_1_SlideoTransitions
                    },
                    $ArrowNavigatorOptions: {
                        $Class: $JssorArrowNavigator$
                    },
                    $BulletNavigatorOptions: {
                        $Class: $JssorBulletNavigator$
                    }
                };

                var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                //responsive code begin
                //you can remove responsive code if you don't want the slider scales while window resizing
                function ScaleSlider() {
                    var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                    if (refSize) {
                        refSize = Math.min(refSize, 1920);
                        jssor_1_slider.$ScaleWidth(refSize);
                    }
                    else {
                        window.setTimeout(ScaleSlider, 30);
                    }
                }
                ScaleSlider();
                $(window).bind("load", ScaleSlider);
                $(window).bind("resize", ScaleSlider);
                $(window).bind("orientationchange", ScaleSlider);
                //responsive code end
            });
        </script>
    </head>
    <body>
        <div style="background-color:black; color:white; padding:2px;">
            <img src="logo.png" alt="Mountain View" style="width:200px;height:5 0px;">
            <p>HOME&nbsp;&nbsp;&nbsp;REGISTRATION&nbsp;&nbsp;&nbsp;STORE&nbsp;&nbsp;&nbsp;CONTACTUS</p>
        </div>

        <div align="center"><p class="ex"> <font size="8">metamorph_miresa</font></p> 
        </div>

        <div class="slider"style="margin-left:10px ;">
            <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 500px; height: 150px; overflow: hidden; visibility: hidden;">
                <!-- Loading Screen -->
                  <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 500px; height: 150px; overflow: hidden;">
                    <div data-p="125.00" style="display: none;">
                        <img data-u="image" src="img/landscape2.jpg" width="100" />
                        <div style="position: absolute; top: 30px; left: 30px; width: 480px; height: 120px; font-size: 50px; color: #ffffff; line-height: 60px;">TOUCH SWIPE SLIDER</div>
                        <div style="position: absolute; top: 300px; left: 30px; width: 480px; height: 120px; font-size: 30px; color: #ffffff; line-height: 38px;">Build your slider with anything, includes image, content, text, html, photo, picture</div>
                        
                    </div>
                    <div data-p="125.00" style="display: none;">
                        <img data-u="image" src="img/motor2.jpg" width="100" />
                    </div>
                    <div data-p="125.00" style="display: none;">
                        <img data-u="image" src="img/09.jpg" width="100"/>
                    </div>
                </div>
                <!-- Bullet Navigator -->
                <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
                    <!-- bullet navigator item prototype -->
                    <div data-u="prototype" style="width:16px;height:16px;"></div>
                </div>
                <!-- Arrow Navigator -->
                <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
                <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
                <a href="http://www.jssor.com" style="display:none">Slideshow Maker</a>
            </div>
        </div>

        <div class="content">
            <div class="article">
                <div class="article1"><img src="img/home_icon1.png" style="width:50px;"><font size="5">Business information</font>
                    <p class="b"><font size="2">ext in a pre element<br>is displayed in a fixed-width<br>font, and it preserves both<br>spaces and line breaks</font> </p>
                </div>
                <div class="article1"><img src="img/home_icon2.png" style="width:50px;"><font size="5">Diller Details</font>
                    <p class="b"><font size="2">ext in a pre element<br>is displayed in a fixed-width<br>font, and it preserves both<br>spaces and line breaks</font> </p>

                </div>
                <div class="article1"><img src="img/home_icon3.png" style="width:50px;"><font size="5">Distribution Point</font>
                    <p class="b"><font size="2">ext in a pre element<br>is displayed in a fixed-width<br>font, and it preserves both<br>spaces and line breaks</font> </p>
                </div>
                <div class="article1"><img src="img/home_icon4.png" style="width:50px;"><font size="5">Business option</font>
                    <p class="b"><font size="2">ext in a pre element<br>is displayed in a fixed-width<br>font, and it preserves both<br>spaces and line breaks</font> </p>
                </div> 
            </div>

        </div>
        <p class="a"><u><b><font size="5">STORE VIEW FOR CUSTOMER</font></b></u></p>

<div class="store">

    <a href="http://localhost/bandhu/carregistration.html">
        <img src="img/carimage1.jpg"  width="300" height="200" hspace="20px">
    </a>
    <a href="http://localhost/bandhu/carregistration.html">
        <img src="img/carimage2.jpg"  width="300" height="200"hspace="20px">
    </a>
    <a href="http://localhost/bandhu/carregistration.html">
        <img src="img/carimage3.jpg"  width="300" height="200"hspace="20px">
    </a><br>
    <a href="http://localhost/bandhu/carregistration.html">
        <img src="img/carimage4.jpg"  width="300" height="200"hspace="20px">
    </a>
    <a href="http://localhost/bandhu/carregistration.html">
        <img src="img/carimage5.jpg"  width="300" height="200"hspace="20px">
    </a>
    <a href="http://localhost/bandhu/carregistration.html">
        <img src="img/carimage6.jpg"  width="300" height="200"hspace="20px">
    </a><br>
    <a href="http://localhost/bandhu/carregistration.html">
        <img src="img/carimage7.jpg"  width="300" height="200"hspace="20px">
    </a>
    <a href="http://localhost/bandhu/carregistration.html">
        <img src="img/carimage8.jpg"  width="300" height="200"hspace="20px">
    </a>
    <a href="http://localhost/bandhu/carregistration.html">
        <img src="img/carimgae9.jpg"  width="300" height="200"hspace="20px">
    </a>
</div>   

<div class="footertitle">
    <button type="button"  style="margin-right:280px">READ MORE</button>
    <button type="button" style="margin-right:280px">READ MORE</button>
    <button type="button">READ MORE</button>

</div>



<p class ="ed"><u>
    <font size="3">
    CONTACT US FOR ANY QUARY
    </font></u>
<div class="footer">
    <div class="footer1"
         <div class="salse">
            FOR SALSE   
        </div>
        <div class="salse">
            <p class="salse">719 BANDRA,MUMBAI,<br>PHONE NO. 24252242<br>MAIL ID:salse@gmail.com</p> 
        </div>
    </div>

    <div class="footer2">
        <div class="delar">
            FOR DILLERSHIP  
        </div>
        <div class="delar">
            <p class="delar">912 BANDRA,MUMBAI,<br>PHONE NO. 296354,<br>MMAIL ID:DILLER@GMAIL.COM</p> 
        </div>
    </div>
</div>

</div>


</body>
</html>

