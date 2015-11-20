@extends('layouts.static')

@section('meta')
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>"Глобал Тендер" CЕМИНАРЫ ПО ГОСУДАРСТВЕННЫМ ЗАКУПКАМ</title>
        <meta name="description" content="">
@stop

@section('content')

<?php

$semArray = array(
    '223' => array(
	'xab' => array('Хабаровск', '23 ноября', '15', 'http://organum-visus.com/sites/default/files/styles/1024x768/public/news_mini_top_img/khabarovsk-organum-visus-eyenews-120712g.jpeg?itok=C7U8OkzE&slideshow=true&slideshowAuto=false&slideshowSpeed=4000&speed=350&transition=fade'),
	'vlad223' => array('Владивосток', '24 ноября', '15', 'http://s.pikabu.ru/post_img/big/2013/10/23/5/1382508326_1790634624.jpg'),
	'blag' => array('Благовещенск', '25 ноября', '15', 'http://www.infokart.ru/wp-content/uploads/2013/02/blagoveshchensk_gorod.jpg'),
	'sktvkr223' => array('Сыктывкар', '11 декабря', '15', 'http://mwc2015.ru/files/syktyvkar-winter-city-panorama.jpg'),
	'chel223' => array('Челябинск', '14 декабря', '15', 'http://img-fotki.yandex.ru/get/9668/106089749.38/0_e8448_2ae441db_orig.jpg'),
	'vor2223' => array('Воронеж', '18 декабря', '15', 'http://calvertforum.org/images/uploads/pages/0200-1280.jpg'),
	'kaluga223' => array('Калуга', '21 декабря', '15', 'http://www.gvasawyer.ru/ImgProjects/kaluga11.jpg'),
	'kras223' => array('Краснодар', '23 декабря', '15', 'http://cdn.tvc.ru/pictures/o/100/768.jpg'),
	'irk223' => array('Иркутск', '23 декабря', '15', 'http://bestmaps.ru/files/content_images/20120910135034.jpg'),
        ),
    '44'  => array(
	//'belgorod' => array('Белгород', '14 августа', '15', 'http://trans-continental.ru/wp-content/uploads/2013/12/41907831.jpg'),
	//'irkutsk' => array('Иркутск', '20 августа', '15', 'http://voyage-irk.ru/wp-content/uploads/2014/04/BEQhHrt4qHg.jpg'),
	//'krasnodar44' => array('Краснодар', '10 июня', '15', 'http://cdn2.img22.ria.ru/images/63571/94/635719458.jpg'),
	//'stav44' => array('Ставрополь', '08 июля', '15', 'http://stavgorod.ru/assets/components/stavgorod/connector2.php?action=web/getfile&filename=17818&ld=21474&image.jpg'),
	//'tumen' => array('Тюмень', '24 апреля', '15', 'http://www.argoturs.ru/userfiles/image/catalog/original/1355322418_dsc05201.jpg?PHPSESSID=f10466dcb0ccab58cf928330ab91c007'),
	//'piter' => array('Санкт-Петербург', '29 апреля', '15', 'http://ved69.ru/images/Spb.jpg'),
        //'vladimir' => array('Владимир', '03 апреля', '15', 'http://www.zapoved.ru/photos/9bab/db77/834c/1083/95b7/ee05/50a8/bbba/large.jpg?2880811'),
        //'belgorod' => array('Белгород', '30 января', '15', 'http://trans-continental.ru/wp-content/uploads/2013/12/41907831.jpg'),
        //'voronezh' => array('Воронеж', '18 февраля', '15', 'http://bestmaps.ru/files/content_images/20130204134915.jpg'), 
        //'ryzan' => array('Рязань', '18 февраля', '15', 'http://ryazan.igid.ru/img/upload/photos/66939df1c60a354c5c76e5def4cddd6a_1024_0.jpg'), 
        'stav44' => array('Ставрополь', '30 ноября', '15', 'http://nstarikov.ru/wp-content/uploads/2014/11/%D1%81%D1%82%D0%B0%D0%B2%D1%80%D0%BE%D0%BF%D0%BE%D0%BB%D1%8C.jpg'), 
        //'stav223' => array('Ставрополь', '24 ноября', '', 'http://photo.vsedomarossii.ru/area_26/city_1651/street_9260/101850_3.jpg'), 
        //'rostov44' => array('Ростов-на-Дону', '11 декабря', '', 'http://upload.wikimedia.org/wikipedia/ru/0/0f/%D0%9D%D0%B0%D0%B1%D0%B5%D1%80%D0%B5%D0%B6%D0%BD%D0%B0%D1%8F_%D0%A0%D0%BE%D1%81%D1%82%D0%BE%D0%B2%D0%B0-%D0%BD%D0%B0-%D0%94%D0%BE%D0%BD%D1%83.jpg'), 
        //'moscow' => array('Москва', '28 ноября', '', 'http://www.mandri.lg.ua/kcfinder/img/images/Moscow-1600x900-005.jpg'),
        //'arch44' => array('Архангельск', '16 октября', '', 'http://fotki29.ru/images/1/dvina_arkhangelsk_.jpg'),
        ),
    'nal'  => array(
        ),
    '223n' => array(
	//'tomsk223' => array('Томск', '26 мая', '15', 'http://voinskayachast.ru/wp-content/uploads/2015/01/%D1%82%D0%BE%D0%BC%D1%81%D0%BA.jpg'),
	//'murmansk' => array('Мурманск', '08 июня', '15', 'http://miriam-tour.ru/pic/kola_murmansk_01b.jpg'),
        //'arch223_2' => array('Архангельск', '09 июня', '15', 'http://fotki29.ru/images/1/dvina_arkhangelsk_.jpg'),
	//'makhachkala' => array('Махачкала', '13 июля', '15', 'http://radiomap.eu/ru/kavkaz/makhachkala_01.jpg'),
	),
    );
?>
                <main class="wrapper clearfix">
                    <h2 class="title padding-t25">Расписание семинаров</h2>
                    <h3 class="seminar-title"><b>223-ФЗ</b>: новые требования к закупкам унитарных предприятий, автономных учреждений, государственных компаний и субъектов естественных монополий</h3>
                    <ul class="seminars">
                        <?php
                            foreach($semArray[223] as $val => $sem) {
                                echo   "<li class=\"seminar\">
                                            <div class=\"seminar-back\" style=\"background-image: url(".$sem[3].");\"></div>
                                            <a href=\"seminar?act=223&sem=".$val."\">
                                                <span class=\"sem-date\">".$sem[1]." <span class=\"year\">'".$sem[2]."</span></span>
                                                <span class=\"place\">".$sem[0]."</span>
                                            </a>
                                        </li>";
                            }
                        ?>
                    </ul>

		    <? if (!(empty($semArray['223n']))) { ?>
		    <h3 class="seminar-title"><b>223-ФЗ</b>: новые требования к закупкам унитарных предприятий, автономных учреждений, государственных компаний и субъектов естественных монополий. Работа с Торговым порталом Fabrikant.ru</h3>
                    <ul class="seminars">
                        <?php
                            foreach($semArray['223n'] as $val => $sem) {
                                echo   "<li class=\"seminar\">
                                            <div class=\"seminar-back\" style=\"background-image: url(".$sem[3].");\"></div>
                                            <a href=\"seminar?act=223n&sem=".$val."\">
                                                <span class=\"sem-date\">".$sem[1]." <span class=\"year\">'".$sem[2]."</span></span>
                                                <span class=\"place\">".$sem[0]."</span>
                                            </a>
                                        </li>";
                            }
                        ?>
                    </ul>
		    <? } ?>

                    <h3 class="seminar-title">Новые требования и практика применения федерального закона «О КОНТРАКТНОЙ СИСТЕМЕ В СФЕРЕ ЗАКУПОК ТОВАРОВ, РАБОТ, УСЛУГ ДЛЯ ОБЕСПЕЧЕНИЯ ГОСУДАРСТВЕННЫХ И МУНИЦИПАЛЬНЫХ НУЖД» от 05.04.2013 № <b>44-ФЗ</b></h3>
                    <ul class="seminars">
                        <?php
                            foreach($semArray[44] as $val => $sem) {
                                echo   "<li class=\"seminar\">
                                            <div class=\"seminar-back\" style=\"background-image: url(".$sem[3].");\"></div>
                                            <a href=\"seminar?act=44&sem=".$val."\">
                                                <span class=\"sem-date\">".$sem[1]." <span class=\"year\">'".$sem[2]."</span></span>
                                                <span class=\"place\">".$sem[0]."</span>
                                            </a>
                                        </li>";
                            }
                        ?>
                    </ul>
                </main>
@stop
