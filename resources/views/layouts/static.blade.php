<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>"Глобал Тендер" CЕМИНАРЫ ПО ГОСУДАРСТВЕННЫМ ЗАКУПКАМ</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=500, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:100,300,400,600&subset=cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed&subset=latin,cyrillic,cyrillic-ext' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Exo+2:400,500,600,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

        <link rel="stylesheet" href="{{URL::to('assets/css/normalize.css')}}">
        <link rel="stylesheet" href="{{URL::to('assets/css/main.css')}}">
        <link rel="stylesheet" href="{{URL::to('assets/css/fotorama.css')}}">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <script src="{{URL::to('assets/js/vendor/modernizr-2.6.2.min.js')}}"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="container page">
            <div class="inside">
                <header class="menu menu-black">
                    <nav>
                        <ul class="menu-ul">
                            <li class="menu-li"><a href="{{URL::to('/')}}">Главная</a></li>
                            <li class="menu-li"><a href="{{URL::to('/seminars')}}">Семинары</a></li>
				<li class="menu-li"><a href="{{URL::to('/services')}}">Юр. услуги</a></li>
                            <li class="menu-li"><a href="{{URL::to('/feedback')}}">Отзывы</a></li>
                            <li class="menu-li"><a href="{{URL::to('/contacts')}}">Контакты</a></li>
                            @if(Auth::check())
                                <li class="menu-li"><a href="{{URL::to('/home')}}">Админ</a></li>
                            @endif
                        </ul>
                    </nav>
                </header>

                @yield('content')
                
            </div>
        </div>
        <footer class="footer">
            <span class="fl-l footer-text">Global-Tender &copy; 2010 - 2015</span>
        </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="{{URL::to('assets/js/vendor/jquery-1.10.2.min.js')}}"><\/script>')</script>
        <script src="{{URL::to('assets/js/vendor/fotorama.js')}}"></script>
        <script src="{{URL::to('assets/js/plugins.js')}}"></script>
        <script src="{{URL::to('assets/js/main.js')}}"></script>

        @yield('script')

        <!-- Yandex.Metrika informer --><script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter22043605 = new Ya.Metrika({id:22043605, webvisor:true, clickmap:true, trackLinks:true, accurateTrackBounce:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><!-- /Yandex.Metrika counter -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter33786709 = new Ya.Metrika({
                    id:33786709,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/33786709" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

	<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
var sc_project=10598202; 
var sc_invisible=1; 
var sc_security="8b94add3"; 
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="site stats"
href="http://statcounter.com/" target="_blank"><img
class="statcounter"
src="http://c.statcounter.com/10598202/0/8b94add3/1/"
alt="site stats"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->
    </body>
</html>
