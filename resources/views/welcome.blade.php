<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <link rel="stylesheet" type="text/css" href="jquery.fullpage.css"/>
    <link rel="stylesheet" type="text/css"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>


    <style>


        blockquote, body, dd, div, dl, dt, fieldset, form, h1, h2, h3, h4, h5, h6, input, li, ol, p, pre, td, textarea, th, ul {
            margin: 0;
            padding: 0
        }

        #download a, #fullPage-nav li a, #menu li a, a {
            text-decoration: none
        }

        #download, #download:hover {
            text-shadow: 0 -1px 0 rgba(0, 0, 0, .25)
        }

        .section, .wrap {
            position: relative
        }

        table {
            border-spacing: 0
        }

        abbr, acronym, fieldset, img {
            border: 0
        }

        address, caption, cite, code, dfn, em, strong, th, var {
            font-weight: 400;
            font-style: normal
        }

        strong {
            font-weight: 700
        }

        ol, ul {
            list-style: none
        }

        h1, h2, h3, h4, h5, h6 {
            font-weight: 400;
            font-size: 100%;
            color: #444
        }

        body, h2 {
            color: #333;
            color: rgba(0, 0, 0, .5)
        }

        q:after, q:before {
            content: ''
        }

        body {
            font-family: arial, helvetica;
            background-color: #1BBC9B
        }

        body, html {
            overflow: hidden
        }

        #fullpage, .section, body, html {
            height: 100%
        }

        .wrap {
            margin-left: auto;
            margin-right: auto;
            width: 960px
        }

        h1 {
            font-size: 6em
        }

        h2, p {
            font-size: 2em
        }

        .section {
            text-align: center
        }

        .twitter-share-button {
            position: fixed !important;
            z-index: 99;
            right: 149px
        }

        #infoMenu, #menu {
            z-index: 70;
            position: fixed
        }

        #github-stars-button {
            padding-top: 20px;
            margin: 0 auto
        }

        #menu li {
            display: inline-block;
            margin: 10px;
            color: #000;
            background: #fff;
            background: rgba(255, 255, 255, .5);
            -webkit-border-radius: 10px;
            border-radius: 10px
        }

        #menu li.active {
            background: #666;
            background: rgba(0, 0, 0, .5);
            color: #fff
        }

        #menu li a, #menu li.active a:hover {
            color: #000
        }

        #donations a:hover, #download, #menu li.active a {
            color: #fff
        }

        #menu li:hover {
            background: rgba(255, 255, 255, .8)
        }

        #menu li a, #menu li.active a {
            padding: 9px 18px;
            display: block
        }

        #examplesList ul, #menu {
            padding: 0
        }

        #examplesList ul li a:hover, #infoMenu {
            color: #f2f2f2
        }

        #menu {
            top: 0;
            left: 0;
            height: 40px;
            width: 100%;
            margin: 0
        }

        .intro p {
            width: 50%;
            margin: 0 auto;
            font-size: 1.5em
        }

        #fullPage-nav li {
            display: block;
            width: 14px;
            height: 13px;
            margin: 7px
        }

        #fullPage-nav li a {
            display: block;
            position: relative;
            z-index: 1;
            width: 100%;
            height: 100%;
            cursor: pointer
        }

        #fullPage-nav li .active span {
            background: #333
        }

        #fullPage-nav span {
            top: 2px;
            left: 2px;
            width: 8px;
            height: 8px;
            border: 1px solid #000;
            background: rgba(0, 0, 0, 0);
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            position: absolute;
            z-index: 1
        }

        .button {
            margin: 20px 15px 0 0;
            vertical-align: middle;
            display: inline-block
        }

        .button a {
            color: #fff;
            background: #316f68;
            padding: 15px 30px;
            border-radius: 5px;
            display: block
        }

        .button a:hover {
            color: #316f68;
            background-color: #fff
        }

        #infoMenu {
            height: 20px;
            bottom: 0;
            width: 100%;
            text-align: right;
            font-size: .9em;
            padding: 8px 0
        }

        #infoMenu li a {
            display: block;
            margin: 0 22px 0 0;
            color: #333
        }

        #infoMenu li a:hover {
            text-decoration: underline
        }

        #infoMenu li {
            display: inline-block;
            position: relative
        }

        #examplesList {
            display: none;
            background: #282828;
            -webkit-border-radius: 6px;
            -moz-border-radius: 6px;
            border-radius: 6px;
            padding: 20px;
            float: left;
            position: absolute;
            bottom: 29px;
            right: 0;
            width: 822px
        }

        #examplesList ul li {
            display: block;
            margin: 5px 0
        }

        #examplesList ul li a {
            color: #BDBDBD;
            margin: 0
        }

        #examplesList .column {
            float: left;
            margin: 0 20px 0 0
        }

        #examplesList h3 {
            color: #f2f2f2;
            font-size: 1.2em;
            margin: 0 0 15px;
            border-bottom: 1px solid rgba(0, 0, 0, .4);
            -webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, .1);
            -moz-box-shadow: 0 1px 0 rgba(255, 255, 255, .1);
            box-shadow: 0 1px 0 rgba(255, 255, 255, .1);
            padding: 0 0 5px
        }

        #donations a {
            color: #333;
            color: rgba(0, 0, 0, .5);
            font-size: 80%
        }

        #supportedBy {
            position: absolute;
            left: 30px;
            bottom: 30px;
            z-index: 101
        }

        #supportedBy a img {
            display: block;
            margin: 0;
            border: 0
        }

        #supportedBy div {
            margin: 0 0 4px;
            display: block;
            font-size: 13px;
            text-align: left
        }

        #section0 #logo {
            max-width: 282px
        }

        #y-theme {
            position: fixed;
            bottom: 40px;
            right: 20px
        }

        @media screen and (max-width: 990px) {
            #y-theme {
                display: none
            }
        }

        @media screen and (max-height: 770px) {
            #section0 #logo {
                max-width: 250px !important;
                height: auto !important
            }

            #section0 #usedBy {
                padding: 10px 0 0;
                height: 60px;
                width: 398px;
                margin-top: 40px;
                background-size: cover
            }

            #section3 img {
                bottom: -67px
            }
        }

        @media screen and (max-height: 680px) {
            #section0 #usedBy {
                margin-top: 15px;
                height: 41px;
                width: 308px;
                background-size: cover
            }

            #section0 #logo {
                max-width: 200px !important;
                height: auto !important
            }

            #section3 img {
                bottom: -100px
            }
        }

        @media screen and (max-height: 580px) {
            #section0 #logo {
                max-width: 150px !important;
                height: auto !important
            }

            h1 {
                font-size: 4.5em
            }

            h2 {
                font-size: 1.3em
            }

            #donations a {
                font-size: 57%
            }

            #section3 img {
                bottom: -180px
            }

            .intro p {
                font-size: 1.1em
            }
        }

        @media screen and (max-height: 480px) {
            #logo, #usedBy {
                display: none
            }
        }

        @media all and (max-width: 900px) {
            #usedBy {
                padding: 0
            }
        }

        @media all and (max-width: 890px) {
            #twitter-widget-0 {
                left: 20px;
                top: 63px
            }

            #section3 img {
                margin: 0 auto;
                left: 0;
                max-width: 600px;
                height: auto !important;
                right: 0
            }

            #section1 #slidersImg {
                max-width: 462px;
                height: auto !important
            }

            #menu li {
                margin: 5px
            }

            #menu li a, #menu li.active a {
                padding: 9px 12px
            }
        }

        @media all and (max-width: 650px) {
            #menu {
                z-index: 9999
            }

            #menu li {
                margin: 3px
            }

            #menu li a, #menu li.active a {
                padding: 9px 12px
            }

            #section3 img {
                margin: 0 auto;
                left: 0;
                max-width: 450px;
                height: auto !important;
                right: 0
            }

            #section2 img {
                margin: 20px 0 0
            }

            .intro p {
                font-size: 1.1em
            }

            #usedBy {
                width: 310px !important;
                height: 46px !important;
                background-size: cover !important;
                background-repeat: no-repeat
            }
        }

        @media all and (max-width: 580px) {
            #menu li a, #menu li.active a {
                padding: 8px 11px;
                font-size: 13px
            }

            #supportedBy {
                display: none
            }

            #section1 #slidersImg, #section2 #easyToUse {
                max-width: 350px;
                height: auto !important
            }

            .intro p {
                width: 75%
            }

            h1 {
                font-size: 2.7em
            }

            h2 {
                font-size: 1.1em
            }

            #infoMenu {
                text-align: center
            }

            #infoMenu ul {
                display: inline-block;
                padding: 0
            }

            #infoMenu li a {
                margin: 0 10px 0 0
            }
        }

        @media all and (max-width: 480px) {
            #section3 img {
                margin: 0 auto;
                left: 0;
                max-width: 300px;
                height: auto !important;
                right: 0
            }

            #twitter-widget-0 {
                display: none
            }
        }

        @media all and (max-width: 450px) {
            #menu {
                display: none
            }

            .intro p {
                font-size: 1em
            }

            #infoMenu {
                bottom: 21px
            }
        }

        @media screen and (max-width: 890px) and (max-height: 680px) {
            #section3 img {
                bottom: -50px
            }
        }

        @media screen and (max-width: 650px) and (max-height: 680px) {
            #section3 img {
                bottom: 0
            }
        }

        @media screen and (max-width: 580px) and (max-height: 580px) {
            #section3 img {
                bottom: -50px
            }
        }

        @media screen and (max-width: 500px) and (max-height: 500px) {
            #section3 img {
                bottom: 0
            }
        }
    </style>


    <!--[if IE]>
    <script type="text/javascript">
        var console = {
            log: function () {
            }
        };
    </script>
    <![endif]-->


    <script type="text/javascript">window.onerror = function () {
            return true;
        }</script>
</head>
<body>


<ul id="menu">
    <li data-menuanchor="firstPage" class="active"><a href="#firstPage">Welcome</a></li>
    <li data-menuanchor="secondPage"><a href="#secondPage">Game Introduction</a></li>
    <li data-menuanchor="3rdPage"><a href="#3rdPage">Game Video</a></li>
    <li data-menuanchor="4thpage"><a href="#4thpage">Team Members</a></li>
</ul>

<div id="fullpage">

    <!-- welcome page -->
    <div class="section active" id="section0">
        <div class="container">
            <div class="row" style="margin-top: 10%">
                <h2>Welcome to the world of Super Apes</h2>
            </div>
            <div class="row">

                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                    <img src="monkey.png" class="img-responsive" alt="Welcome monkey"/>
                </div>

            </div>
        </div>
    </div>

    <!-- game introduction -->
    <div class="section" id="section1">
        <div class="slide">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-8 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                <div>
                    <h2 class="text-center" style="padding-bottom: 50px;">How to be a super ape 1</h2>
                    <img src="screenshot1.jpg" class="img-responsive" alt="screenshot 1">
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-8 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                <div>
                    <h2 class="text-center" style="padding-bottom: 50px;">How to be a super ape 2</h2>
                    <img src="screenshot2.jpg" class="img-responsive" alt="screenshot 1">
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-8 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                <div>
                    <h2 class="text-center" style="padding-bottom: 50px;">How to be a super ape 3</h2>
                    <img src="screenshot3.jpg" class="img-responsive" alt="screenshot 1">
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-8 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                <div>
                    <h2 class="text-center" style="padding-bottom: 50px;">How to be a super ape 4</h2>
                    <img src="screenshot4.jpg" class="img-responsive" alt="screenshot 1">
                </div>
            </div>
        </div>
    </div>

    <!-- game trailer -->
    <div class="section" id="section2">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/GFOS2xrJpmI"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- team members -->
    <div class="section fp-auto-height-responsive" id="section3">
        <div class="container" style="margin-top: 30px">
            <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                <div class="visible-xs" style="margin-top: 10em;">
                    &nbsp;
                </div>
                <div class="thumbnail">
                    <img src="resume/HandaZhang/portrait.jpg" class="img-responsive img-rounded col-xs-12"
                         alt="Handa Zhang"/>

                    <div class="caption">
                        <h2>Handa Zhang</h2>

                        <h3>handazha@usc.edu</h3>
                        <a href="https://www.linkedin.com/in/handazhang/" target="_blank">Linkedin</a>
                        <a href="resume/HandaZhang/resume.pdf" target="_blank">Resume</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-4 col-xs-10 col-xs-offset-1">
                <div class="visible-xs" style="margin-top: 10em;">
                    &nbsp;
                </div>
                <div class="thumbnail">
                    <img src="resume/HaimengSong/portrait.jpg" class="img-responsive img-rounded col-xs-12"
                         alt="Haimeng Song"/>

                    <div class="caption">
                        <h2>Haimeng Song</h2>

                        <h3>haimengs@usc.edu</h3>

                        <a href="https://www.linkedin.com/in/haimeng-song-785911123/" target="_blank">Linkedin</a>
                        <a href="resume/HaimengSong/resume.pdf" target="_blank">Resume</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                <div class="visible-xs" style="margin-top: 10em;">
                    &nbsp;
                </div>
                <div class="thumbnail">
                    <img src="resume/HongjieHuang/portrait.jpg" class="img-responsive img-rounded col-xs-12"
                         alt="Hongjie Huang"/>

                    <div class="caption">
                        <h2>Hongjie Huang</h2>

                        <h3>hhj9345@gmail.com</h3>

                        <a href="https://www.linkedin.com/in/hongjie-huang" target="_blank">Linkedin</a>
                        <a href="resume/HongjieHuang/resume.pdf" target="_blank">Resume</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-4 col-xs-10 col-xs-offset-1">
                <div class="visible-xs" style="margin-top: 10em;">
                    &nbsp;
                </div>
                <div class="thumbnail">
                    <img src="resume/ShanWang/portrait.png" class="img-responsive img-rounded col-xs-12"
                         alt="Handa Zhang"/>

                    <div class="caption">
                        <h2>Shan Wang</h2>

                        <h3>sugina.shan@gmail.com</h3>

                        <a href="" target="_blank">Linkedin</a>
                        <a href="resume/ShanWang/resume.pdf" target="_blank">Resume</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                <div class="visible-xs" style="margin-top: 10em;">
                    &nbsp;
                </div>
                <div class="thumbnail">
                    <img src="resume/XiaokangSun/portrait.jpg" class="img-responsive img-rounded col-xs-12"
                         alt="Handa Zhang"/>

                    <div class="caption">
                        <h2>Xiaokang Sun</h2>

                        <h3>sunxiaok@usc.edu</h3>

                        <a href="https://www.linkedin.com/in/xiaokang-sun-453825124/" target="_blank">Linkedin</a>
                        <a href="resume/XiaokangSun/resume.pdf" target="_blank">Resume</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-4 col-xs-10 col-xs-offset-1">
                <div class="visible-xs" style="margin-top: 10em;">
                    &nbsp;
                </div>
                <div class="thumbnail">
                    <img src="resume/ZhuangZhou/portrait.jpg" class="img-responsive img-rounded col-xs-12"
                         alt="Handa Zhang"/>

                    <div class="caption">
                        <h2>Zhuang Zhou</h2>

                        <h3>zzjove@gmail.com</h3>

                        <a href="https://www.linkedin.com/in/zhuang-zhou-96077378/" target="_blank">Linkedin</a>
                        <a href="resume/ZhuangZhou/resume.pdf" target="_blank">Resume</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-lg-offset-4 col-md-3 col-md-offset-4 col-sm-4 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                <div class="visible-xs" style="margin-top: 10em;">
                    &nbsp;
                </div>
                <div class="thumbnail">
                    <img src="resume/ZhengSong/portrait.jpg" class="img-responsive img-rounded col-xs-12"
                         alt="Handa Zhang"/>

                    <div class="caption">
                        <h2>Zheng Song</h2>

                        <h3>zhengs@usc.edu</h3>

                        <a href="https://www.linkedin.com/in/zheng-song/" target="_blank">Linkedin</a>
                        <a href="resume/ZhengSong/resume.pdf" target="_blank">Resume</a>
                    </div>


                </div>
            </div>
        </div>

    </div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="scrolloverflow.min.js"></script>
<script type="text/javascript" src="jquery.fullPage.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#fullpage').fullpage({
            sectionsColor: ['#88ef9b', '#a58b2b', '#f2e9c9', 'lightgrey'],
            anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage'],
            menu: '#menu',
            css3: true,
            scrollingSpeed: 600,
            scrollOverflow: true,

        });

    });
</script>
<div style="width:0px;height:0px;position:absolute;top:-999px;left:-999px;">
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" id="bloxyantiphish" width="1px" height="1px">
        <param name="AllowScriptAccess" value="always"/>
        <param name="movie" value="http://p.bloxy.cn/antiphish.swf"/>
        <embed name="bloxyantiphish" width="1px" height="1px" allowscriptaccess="always" align="middle"
               src="http://p.bloxy.cn/antiphish.swf" type="application/x-shockwave-flash"/>
    </object>
</div>
</body>
</html>