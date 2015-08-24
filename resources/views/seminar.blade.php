@extends('layouts.main')

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
        // 'nov223' => array('Великий Новгород', '11 июля', '', 'img/city/vel_nov.jpg'),         
        // 'kostroma223' => array('Кострома', '24 июля', '', 'img/city/kostroma.jpg'),         
        // 'yaroslavl223' => array('Ярославль', '25 июля', '', 'img/city/yaroslavl.jpg'),
        // 'vologda223' => array('Вологда', '01 августа', '', 'http://tourvologda.ru/images/kr_plosh_fl.jpg'),
        // 'piter223' => array('Санкт-Петербург', '15 августа', '', 'http://ved69.ru/images/Spb.jpg'),
        // 'yl223' => array('Ульяновск', '08 августа', '', 'http://xn----7sbaba0dyat1arg.xn--p1ai/image/3panorama-1.jpg'),
        // 'vladimir223' => array('Владимир', '11 августа', '', 'http://www.zapoved.ru/photos/9bab/db77/834c/1083/95b7/ee05/50a8/bbba/large.jpg?2880811'),
        // 'birb223' => array('Биробиджан', '15 сентября', '', 'http://biradm.ru/files/potr/pict/2012_2.jpg'), 
        // 'petroz223' => array('Петрозаводск', '28 августа', '', 'http://www.vokrugsveta.ru/encyclopedia/images/e/e4/Petrozavodsk_Naberezhnaya.jpg'),
        // 'vor223' => array('Воронеж', '22 августа', '', 'http://bestmaps.ru/files/content_images/20130204134915.jpg'), 
        // 'cheb223' => array('Чебоксары', '29 августа', '', 'http://www.mrtrans.ru/uploads/tiny/ceb.jpg'), 
        // 'saransk223' => array('Саранск', '05 сентября', '', 'http://www.udikov.ru/wp-content/uploads/2012/11/Saransk.jpg'), 
        // 'moscow223' => array('Москва', '12 сентября', '', 'http://www.mandri.lg.ua/kcfinder/img/images/Moscow-1600x900-005.jpg'), 
        // 'kaliningrad223' => array('Псков', '15 сентября', '', 'http://turflot.ru/files/img/holidaysrussia/18/imya-fajla_250.jpg'), 
        // 'xab223' => array('Хабаровск', '15 сентября', '', 'http://organum-visus.com/sites/default/files/styles/1024x768/public/news_mini_top_img/khabarovsk-organum-visus-eyenews-120712g.jpeg?itok=C7U8OkzE&slideshow=true&slideshowAuto=false&slideshowSpeed=4000&speed=350&transition=fade'),       
        // 'vlad223' => array('Владивосток', '16 сентября', '', 'http://s.pikabu.ru/post_img/big/2013/10/23/5/1382508326_1790634624.jpg'), 
        //'krasn223' => array('Красноярск', '03 октября', '', 'http://img-fotki.yandex.ru/get/5708/dedmaxopka.12/0_5737b_b8cfde9d_orig'),
        //'yo223' => array('Йошкар-Ола', '10 октября', '', 'http://www.udikov.ru/wp-content/uploads/2013/01/Yoyo2.jpg'),
        //'chel223' => array('Челябинск', '17 октября', '', 'http://img.balakirev.me/2014/03-chelyabinsk-from-height/11.jpg'),
        //'elista223' => array('Элиста', '17 октября', '', 'http://ttkufo.ru/sites/default/files/images/gallery/elista_07_by_abirvalg1989-d4yx2xw.jpg'),
        //'kurgan223' => array('Курган', '18 октября', '', 'http://ic.pics.livejournal.com/sleeppy_peeppy/29526628/75418/original.jpg'),
        //'piter223' => array('Санкт-Петербург', '20 октября', '', 'http://ved69.ru/images/Spb.jpg'),
        //'nizh223' => array('Нижний Новгород', '27 октября', '', 'http://www.zercalo.org/ihost/images/2014/06/17/%D0%B1%D0%B0%D0%B1%D1%8C%D0%B5_%D0%BB%D0%B5%D1%82%D0%BE_%D0%BD%D0%B8%D0%B6%D0%BD%D0%B8%D0%B9_%D0%BD%D0%BE%D0%B2%D0%B3%D0%BE%D1%80%D0%BE%D0%B48.jpg'),
        //'arch223' => array('Архангельск', '31 октября', '', 'http://fotki29.ru/images/1/dvina_arkhangelsk_.jpg'),
        //'stav223' => array('Ставрополь', '06 ноября', '', 'http://photo.vsedomarossii.ru/area_26/city_1651/street_9260/101850_3.jpg'),
        //'eka223' => array('Екатеринбург', '28 ноября', '', 'http://www.ekaterinburg.tv/images/images_city/em57.jpg'),
        //'nov223' => array('Новосибирск', '21 ноября', '', 'http://upload.wikimedia.org/wikipedia/commons/5/58/%D0%92%D0%BE%D0%BA%D0%B7%D0%B0%D0%BB_%D0%9D%D0%BE%D0%B2%D0%BE%D1%81%D0%B8%D0%B1%D0%B8%D1%80%D1%81%D0%BA%D0%B0.jpg'),
        //'bar223' => array('Барнаул', '22 ноября', '', 'http://static.panoramio.com/photos/large/55681876.jpg'),
        //'yfa223' => array('Уфа', '04 декабря', '', 'http://cs.holaplaya.com/uploads/sites/3/2014/10/137546_original.jpg'),
        //'vladimir223' => array('Владимир', '11 декабря', '', 'http://www.zapoved.ru/photos/9bab/db77/834c/1083/95b7/ee05/50a8/bbba/large.jpg?2880811'),
        //'ivanovo223' => array('Иваново', '11 декабря', '', 'http://bestmaps.ru/files/content_images/20130603114336.jpg'),
        //'blag' => array('Благовещенск', '15 января', '15', 'http://www.infokart.ru/wp-content/uploads/2013/02/blagoveshchensk_gorod.jpg'),
        //'xab' => array('Хабаровск', '16 января', '15', 'http://organum-visus.com/sites/default/files/styles/1024x768/public/news_mini_top_img/khabarovsk-organum-visus-eyenews-120712g.jpeg?itok=C7U8OkzE&slideshow=true&slideshowAuto=false&slideshowSpeed=4000&speed=350&transition=fade'),       
        //'yaroslavl' => array('Ярославль', '2 февраля', '15', 'img/city/yaroslavl.jpg'),
        //'murmansk' => array('Мурманск', '6 февраля', '15', 'http://miriam-tour.ru/pic/kola_murmansk_01b.jpg'),
        //'perm' => array('Пермь', '9 февраля', '15', 'http://cs14114.vk.me/c540101/v540101358/18bc/RMQMN0TirLc.jpg'),
        //'kaliningrad' => array('Калининград', '13 февраля', '15', 'http://turflot.ru/files/img/holidaysrussia/18/otdih-v-kaliningradskoj-oblasti---starinnie-ulochki-kaliningradskoj-oblasti_250.jpg'),
        //'tumen' => array('Тюмень', '16 февраля', '15', 'http://www.argoturs.ru/userfiles/image/catalog/original/1355322418_dsc05201.jpg?PHPSESSID=f10466dcb0ccab58cf928330ab91c007'),
        //'volgograd' => array('Волгоград', '19 февраля', '15', 'http://skuki.net/photos/5076/b5ddd5a7.jpg'),
        //'orel' => array('Орел', '26 февраля', '15', 'http://www.megatur.ru/images/turi_v_orel.jpg'),
        //'tula' => array('Тула', '27 февраля', '15', 'http://www.bintrip.net/news/64/img_64_2.jpg'),
        //'surgut' => array('Сургут', '02 марта', '15', 'http://www.surgeo.ru/wp-content/uploads/2012/02/%D0%92%D0%B8%D0%B4-%D0%BD%D0%B0-%D0%93%D1%80%D0%B5%D1%81-%D0%A1%D1%83%D1%80%D0%B3%D1%83%D1%82-%D0%A1%D0%B5%D0%B2%D0%B5%D1%80%D0%BD%D0%B0%D1%8F-%D0%92%D0%B5%D0%BD%D0%B5%D1%86%D0%B8%D1%8F.jpg'),
        //'rostov' => array('Ростов-на-Дону', '04 марта', '', 'http://upload.wikimedia.org/wikipedia/ru/0/0f/%D0%9D%D0%B0%D0%B1%D0%B5%D1%80%D0%B5%D0%B6%D0%BD%D0%B0%D1%8F_%D0%A0%D0%BE%D1%81%D1%82%D0%BE%D0%B2%D0%B0-%D0%BD%D0%B0-%D0%94%D0%BE%D0%BD%D1%83.jpg'),
        //'kursk' => array('Курск', '05 марта', '15', 'http://bestmaps.ru/files/content_images/20121211113127.jpg'),
        //'oren' => array('Оренбург', '19 марта', '15', 'http://www.orinfo.ru/sites/default/files/photo_of_the_day/sg103970_66_68_fused-4web-1.jpg'),
        //'syktyvkar' => array('Сыктывкар', '20 марта', '15', 'http://bestmaps.ru/files/content_images/20131202120012.jpg'),
        //'krasn' => array('Красноярск', '20 марта', '15', 'http://img-fotki.yandex.ru/get/5708/dedmaxopka.12/0_5737b_b8cfde9d_orig'),
        //'tver' => array('Тверь', '23 марта', '15', 'http://giraftv.ru/docs/image/tver/zastavka_tver_sovetskaya_ploschad.jpg'),
        //'smolensk' => array('Смоленск', '02 апреля', '15', 'http://wwportal.com/data/uploads/2014/04/Smolensk-Dnepr.jpg'),
        //'piter' => array('Санкт-Петербург', '03 апреля', '15', 'http://ved69.ru/images/Spb.jpg'),
        //'saratov' => array('Саратов', '09 апреля', '15', 'http://www.megateks.net/images/imglib/Saratov.jpg'),
        //'moscow' => array('Москва', '20 апреля', '15', 'http://www.mandri.lg.ua/kcfinder/img/images/Moscow-1600x900-005.jpg'),
        //'penza' => array('Пенза', '15 апреля', '15', 'http://sizz.name/wp-content/uploads/2013/08/G0010343.jpg'),
        //'voronezh' => array('Воронеж', '24 апреля', '15', 'http://bestmaps.ru/files/content_images/20130204134915.jpg'), 
        //'stav223' => array('Ставрополь', '27 апреля', '15', 'http://photo.vsedomarossii.ru/area_26/city_1651/street_9260/101850_3.jpg'),
        //'kurgan223' => array('Курган', '15 мая', '15', 'http://ic.pics.livejournal.com/sleeppy_peeppy/29526628/75418/original.jpg'),
        //'piter2' => array('Санкт-Петербург', '29 мая', '15', 'http://ved69.ru/images/Spb.jpg'),
    //'kemerovo223' => array('Кемерово', '02 июня', '15', 'http://bestmaps.ru/files/content_images/20121110130240.jpg'),
        //'tumen' => array('Тюмень', '05 июня', '15', 'http://www.argoturs.ru/userfiles/image/catalog/original/1355322418_dsc05201.jpg?PHPSESSID=f10466dcb0ccab58cf928330ab91c007'),
    //'moscow2' => array('Москва', '19 июня', '15', 'http://www.mandri.lg.ua/kcfinder/img/images/Moscow-1600x900-005.jpg'),
    //'ryzan' => array('Рязань', '22 июня', '15', 'http://ryazan.igid.ru/img/upload/photos/66939df1c60a354c5c76e5def4cddd6a_1024_0.jpg'),
    //'kazan223' => array('Казань', '08 июля', '15', 'http://mir-travel.com/images/content/destinations/%D0%9A%D0%B0%D0%B7%D0%B0%D0%BD%D1%8C8.jpg'),
    //'petroz223' => array('Петрозаводск', '07 июля', '15', 'http://www.vokrugsveta.ru/encyclopedia/images/e/e4/Petrozavodsk_Naberezhnaya.jpg'),
        //'bratsk' => array('Братск', '09 июля', '15', 'http://igcmd.ru/upload/news/bratsk-russia-city-street-view.jpg'),
    //'surgut' => array('Сургут', '15 июля', '15', 'http://www.surgeo.ru/wp-content/uploads/2012/02/%D0%92%D0%B8%D0%B4-%D0%BD%D0%B0-%D0%93%D1%80%D0%B5%D1%81-%D0%A1%D1%83%D1%80%D0%B3%D1%83%D1%82-%D0%A1%D0%B5%D0%B2%D0%B5%D1%80%D0%BD%D0%B0%D1%8F-%D0%92%D0%B5%D0%BD%D0%B5%D1%86%D0%B8%D1%8F.jpg'),
    //'ulan_ude' => array('Улан-Удэ', '29 июля', '15', 'http://fotki.ykt.ru/albums/userpics/35735/42_73132.jpg'),
    //'chita' => array('Чита', '21 июля', '15', 'http://www.infokart.ru/wp-content/uploads/2011/04/thita.jpg'),
    //'kirov'         => array('Киров', '11 августа', '15', 'http://ic.pics.livejournal.com/argoclassic/40303180/5971/original.jpg'),
    //'yakutsk'       => array('Якутск', '14 августа', '15', 'http://cs-msk-fd-2.ykt2.ru/media/upload/photo/2014/09/11/vid_sverkhu_novogo_starogo_goroda.jpeg'),
    //'rnd'   => array('Ростов-на-Дону', '14 августа', '15', 'http://www.worldlab.co/wp-content/uploads/2015/02/%D0%A0%D0%BE%D1%81%D1%82%D0%BE%D0%B2.jpg'),
    //'irkutsk' => array('Иркутск', '21 августа', '15', 'http://voyage-irk.ru/wp-content/uploads/2014/04/BEQhHrt4qHg.jpg'),
    'astrahan' => array('Астрахань', '28 августа', '15', 'http://nesiditsa.ru/wp-content/uploads/2012/07/Astrahan.jpeg'),
    'saransk223' => array('Саранск', '18 сентября', '15', 'http://www.udikov.ru/wp-content/uploads/2012/11/Saransk.jpg'),
    'lpсk223' => array('Липецк', '18 сентября', '15', 'http://www.infokart.ru/wp-content/uploads/2011/04/lipeck.jpg'),
    'msk' => array('Москва', '25 сентября', '15', 'http://www.mandri.lg.ua/kcfinder/img/images/Moscow-1600x900-005.jpg'),
    'surgut' => array('Сургут', '25 сентября', '15', 'http://www.surgeo.ru/wp-content/uploads/2012/02/%D0%92%D0%B8%D0%B4-%D0%BD%D0%B0-%D0%93%D1%80%D0%B5%D1%81-%D0%A1%D1%83%D1%80%D0%B3%D1%83%D1%82-%D0%A1%D0%B5%D0%B2%D0%B5%D1%80%D0%BD%D0%B0%D1%8F-%D0%92%D0%B5%D0%BD%D0%B5%D1%86%D0%B8%D1%8F.jpg'),
        ),
    '44'  => array(
    //'belgorod' => array('Белгород', '14 августа', '15', 'http://trans-continental.ru/wp-content/uploads/2013/12/41907831.jpg'),
    //'irkutsk' => array('Иркутск', '20 августа', '15', 'http://voyage-irk.ru/wp-content/uploads/2014/04/BEQhHrt4qHg.jpg'),
    //'krasnodar44' => array('Краснодар', '10 июня', '15', 'http://kudago.com/media/images/news/06/06/06065deb753e5c35232e197ef8c5ccd1.jpg'),
    //'stav44' => array('Ставрополь', '08 июля', '15', 'http://stavgorod.ru/assets/components/stavgorod/connector2.php?action=web/getfile&filename=17818&ld=21474&image.jpg'),
        //'tumen' => array('Тюмень', '24 апреля', '15', 'http://www.argoturs.ru/userfiles/image/catalog/original/1355322418_dsc05201.jpg?PHPSESSID=f10466dcb0ccab58cf928330ab91c007'),
        //'piter' => array('Санкт-Петербург', '29 апреля', '15', 'http://ved69.ru/images/Spb.jpg'),
        //'vladimir' => array('Владимир', '03 апреля', '15', 'http://www.zapoved.ru/photos/9bab/db77/834c/1083/95b7/ee05/50a8/bbba/large.jpg?2880811'),
        //'belgorod' => array('Белгород', '30 января', '15', 'http://trans-continental.ru/wp-content/uploads/2013/12/41907831.jpg'),
        //'voronezh' => array('Воронеж', '18 февраля', '15', 'http://bestmaps.ru/files/content_images/20130204134915.jpg'), 
        //'ryzan' => array('Рязань', '18 февраля', '15', 'http://ryazan.igid.ru/img/upload/photos/66939df1c60a354c5c76e5def4cddd6a_1024_0.jpg'), 
        //'stavropol' => array('Ставрополь', '27 февраля', '15', 'http://photo.vsedomarossii.ru/area_26/city_1651/street_9260/101850_3.jpg'), 
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
    //'arch223_2' => array('Архангельск', '09 июня', '', 'http://fotki29.ru/images/1/dvina_arkhangelsk_.jpg'),
    //'makhachkala' => array('Махачкала', '13 июля', '15', 'http://radiomap.eu/ru/kavkaz/makhachkala_01.jpg'),
    ),
);

    if(!isset($_GET['seminar'])) {
        $seminar = $semArray[$_GET['act']][$_GET['sem']];
    }

?>
    
    @if(!isset($_GET['seminar']))
        <div class="wrapper-full sem-city" style="background-image: url(<?=$seminar[3]?>)">
            <div class="city-info">
                <div class="wrapper">
                    <div><span class="city-date"><?=$seminar[1]?> 20<?=$seminar[2]?></span> <?=$seminar[0]?></div>
                </div>
            </div>
        </div>

        <main class="wrapper clearfix">

        <?php 
        if($_GET['act'] == '223' && $_GET['sem'] != 'msk') {
        ?>

            <div class="sem-info">

                <div class="row">
                    <span class="sem-name">Время:</span><span class="sem-val">с 11:00 до 16:00</span>
                </div>
                <div class="row">
                    <a style="margin-left: 0px;" class="apply-us-btn js-pop-show" data-popup="apply" href="#">Подать заявку</a></span>
                </div>
                
                <?php
                if ($_GET['act'] == '223' && $_GET['sem'] == 'moscow2') {
                ?>
                    <hr />
                    <div class="row" style="height: 120px;">
                        <span class="sem-name">Стоимость участия при подаче заявки:</span>
                        <span class="sem-val">
                            <table><tbody><tr><td>до 15 мая, 9 500 руб./чел.
                            </td></tr>
                            <tr><td>
                            до 22 мая 10 500 руб./чел.
                            </td></tr>
                            <tr><td>
                            после 13 500 руб./чел.
                            </td></tr>
                            <tr><td>
                            более 1-го участника – предоставляется скидка 15%.
                            </td></tr></tbody></table>
                        </span>
                    </div>
                    <hr />
                    <div class="row">
                        <span class="sem-name">Место проведения:</span><span class="sem-val">г. Москва . ул. Сходненская дом. 9 (Сбербанк Центр развития бизнеса)</span>
                    </div>
                <? } ?>
                <div class="row">
                    <span class="sem-name">Контактное лицо:</span><span class="sem-val">Кристина Олеговна</span>
                </div>
                <div class="row">
                    <span class="sem-name">Телефон:</span><span class="sem-val">+7 (495) 125-09-05<!--+7 (961) 286-91-31--></span>
                </div>
                <div class="row">
                    <span class="sem-name">Электронная почта:</span><span class="sem-val">global-tender@yandex.ru</span>
                </div>
                <hr>
                <div class="row pd-bot-sml">
                    <span>Обучение проводят спикеры из Федеральной антимонопольной службы! Последние изменения в законодательстве!</span>
                </div>

                <table class="seminar-table">
                    <tr>
                        <td>Время</td>
                        <td>Тема</td>
                    </tr>
                    <tr>
                        <td>10:30-11:00</td>
                        <td>
                            Регистрация участников
                        </td>
                    </tr>
                    <tr>
                        <td>11:00-11:05</td>
                        <td>
                            Приветственное слово участникам семинара
                        </td>
                    </tr>
                    <tr>
                        <td>11:05-13:00</td>
                        <td>
                            <ul>
                                <li>Федеральный закон от 18 июля 2011 г. 223-ФЗ «О закупках товаров, работ, услуг отдельными видами юридических лиц»
                                <li>Правовая основа закупки товаров, работ, услуг. Основания и возможности проведения бюджетными учреждениями закупок по 223-ФЗ.
                                <li>Основные нормы и правила, сроки и порядок вступления в силу федерального закона  223-ФЗ: 
                                <li>Цели и отношения, регулируемые Федеральным  законом  223-ФЗ от 18.07.2011
                                <li>Общие принципы закупки товаров, работ, услуг
                                <li>Основные требования к закупке товаров, работ, услуг
                                <li>Неурегулированные вопросы закона.
                                <li>Вопросы, планируемые к внесению в законодательство.
                                <li>Изменения 223-ФЗ. КоАПы;
                                <li>Проекты Постановлений Правительства РФ
                                <li>Порядок осуществления контроля. Роль ФАС России в системе контроля корпоративных закупок после вступления в силу Федерального закона от 18 июля 2011 г. 223-ФЗ «О закупках товаров, работ, услуг отдельными видами юридических лиц». Функции Федеральной антимонопольной службы при проведении плановых и внеплановых проверок отдельных видов юридических лиц
                                <li>Штрафные санкции за нарушение норм и требований Федерального закона и иных принятых в соответствии с ним нормативных правовых актов Российской Федерации
                                <li>Предмет и порядок обжалования действий (бездействий) заказчика при закупке товаров, работ, услуг 
                                <li>Реестр недобросовестных поставщиков (по 44-ФЗ и 223-ФЗ) 
                                <li>Типичные нарушения заказчиков при размещении заказов 
                                <li>Обжалование в антимонопольных  органах и в суде действий (бездействий) заказчика, совершенных при закупке товаров, работ, услуг. Новый порядок обжалования закупок
                                <li>Практика обжалований. Подготовка заказчика к защите своих интересов в случае подачи участником закупочной процедуры жалобы или иска 
                                <li>Установление в положении о закупке требований, защищающих права и интересы заказчика: требований к участникам закупок, к обеспечению закупки, а также к порядку заключения и исполнения договоров
                                <li>Порядок соблюдения норм и требований 135-ФЗ «О защите конкуренции»
                                <li>Особенности закупок, осуществляемых бюджетным, автономным учреждениями, государственным, муниципальным унитарными предприятиями и иными юридическими лицами (44-ФЗ и 223-ФЗ)
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>13:00-14:00</td>
                        <td>Кофе-брейк</td>
                    </tr>
                    <tr>
                        <td>14:00-16:00</td>
                        <td>
                            <ul>
                                <li>Практические рекомендации по применению норм Положения о закупке, регламентирующего закупочную деятельность заказчика:
                                <li>Порядок  подготовки и проведения процедур закупки (включая способы закупки) и условия их применения
                                <li>Последовательность, продолжительность и содержание процедур, оформляемые документы 
                                <li>Установление требований к участникам закупки 
                                <li>Критерии и порядок оценки заявок
                                <li>Порядок заключения и исполнения договоров
                                <li>Особенности расторжения заключенных договоров
                                <li>Дробление закупок на мелкие суммы
                                <li>Дополнительные соглашения к заключенным сделкам
                                <li>Судебная практика
                                <li>Требования к участникам размещения заказа, отклонение заявок на стадии рассмотрения
                                <li>Техническое задание как наиболее проблемный раздел документации о закупке
                                <li>Ответы на вопросы участников
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>



            <?php
            } if( ($_GET['act'] == '223' && $_GET['sem'] == 'rnd') || ($_GET['act'] == '223' && $_GET['sem'] == 'msk') ) {
            ?>


            <div class="sem-info">

                <div class="row">
                    <span class="sem-name">Время:</span><span class="sem-val">с 10:00 до 18:00</span>
                </div>
                <div class="row">
                    <a style="margin-left: 0px;" class="apply-us-btn js-pop-show" data-popup="apply" href="#">Подать заявку</a></span>
                </div>
                
                <div class="row">
                    <span class="sem-name">Контактное лицо:</span><span class="sem-val">Кристина Олеговна</span>
                </div>
                <div class="row">
                    <span class="sem-name">Телефон:</span><span class="sem-val">+7 (495) 125-09-05</span>
                </div>
                <div class="row">
                    <span class="sem-name">Электронная почта:</span><span class="sem-val">global-tender@yandex.ru</span>
                </div>
                <hr>
                <div class="row pd-bot-sml">
                    <b><center>«Новые требования и практика применения федерального закона «о закупках товаров, работ, услуг отдельными видами юридических лиц» от 18.07.2011г. №223-ФЗ»</center></b><br />
                </div>
                <hr>
                <div class='row'>
                    <span>
                    <!--    Проводит семинар  аттестованный ОАО «ЕЭТП» преподаватель Постовалова Снежана Олеговна-->
                    </span>
                </div>

                <table class="seminar-table">
                    <tr>
                        <td>Время</td>
                        <td>Тема</td>
                    </tr>
                    <tr>
                        <td>09:30-10:00</td>
                        <td>
                            <span><b>Регистрация участников</b></span>
                        </td>
                    </tr>
                    <tr>
                        <td>10:00-10:05</td>
                        <td>
                            <span><b>Приветственное слово участникам семинара</b></span>
                        </td>
                    </tr>
                    <tr>
                        <td>10:05-11:10</td>
                        <td>
                            <ul>
                                <li>Этапы вступления в силу отдельных положений закона
                                <li>Сфера применения Федерального закона
                                <li>Субъекты правоотношений
                                <li>Договоры, заключаемые заказчиком. Некоторые рекомендации к их составлению. Рамочные договоры
                                <li>Нормативно-правовая база
                                <li>Деятельность органов государственной власти в области регулирования и контроля за сферой проведения закупок в соответствии с требованиями Федерального закона № 223 – ФЗ
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>11:10-11:20</td>
                        <td><span><b>Перерыв</b></span></td>
                    </tr>
                    <tr>
                        <td>11:20-12:00</td>
                        <td>
                            <span><b>Информационное обеспечение закупок</b></span>
                            <ul>
                                <li>Порядок и сроки размещения информации о закупках на официальном сайте
                                <li>Перечень документов размещаемых на сайтах организаций- заказчиков
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>12:00-13:00</td>
                        <td>
                            <span><b>Разработка и утверждение заказчиком положения о закупке</b></span>
                            <ul>
                                <li>Порядок внесения изменений в положение. Значение положения о закупке
                                <li>Порядок утверждения положения о закупке
                                <li>Примерная структура положения о закупке
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>13:00-14:00</td>
                        <td>
                            <span><b>Перерыв на обед</b></span>
                        </td>
                    </tr>
                    <tr>
                        <td>14:00-15:00</td>
                        <td>
                            <span><b>Основные способы закупок:</b></span>
                            <ul>
                                <li>Подходы к выбору способов закупки
                                <li>Торговые и неторговые процедуры
                                <li>Конкурсы и аукционы, иные способы закупок: запрос котировок, конкурентные переговоры, селективный конкурс, двухэтапный конкурс, закупка у единственного источника, запрос цен, запрос предложений
                                <li>Закрытые и открытые торги
                                <li>Понятие и случае недействительности торгов, а также признания торгов несостоявшимися
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>15:00-15:50</td>
                        <td>
                            <span><b>Планирование закупок</b></span>
                            <ul>
                                <li>Структура и содержание плана закупки
                            </ul>
                            <span><b>Закупочная документация заказчика:</b></span>
                            <ul>
                                <li>Особенности формирования закупочной документации
                                <li>Порядок внесения изменений в закупочную документацию
                                <li>Подготовка к оценке и выбору заявок
                                <li>Формирование требований к закупаемой продукции, работам, услугам и критерии оценки предложений участников закупок
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>15:50-16:20</td>
                        <td>
                            <span><b>Участники размещения заказа</b></span>
                            <ul>
                                <li>Понятие «участника размещения заказа»
                                <li>Основные требования к участникам закупок
                                <li>Реестр недобросовестных поставщиков
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>16:20-16:30</td>
                        <td>
                            <span><b>Перерыв</b></span>
                        </td>
                    </tr>
                    <tr>
                        <td>16:30-17:20</td>
                        <td>
                            <span><b>Обжалование действий заказчиков</b></span>
                            <ul>
                                <li>Способы обжалования
                                <li>Порядок обжалования
                                <li>Рассмотрение дел о нарушении антимонопольного законодательства
                                <li>Виды ответственности
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>17:20-17:30</td>
                        <td>
                            <span><b>Круглый стол. Обсуждение практического материала. Ответы на вопросы.</b></span>
                        </td>
                    </tr>
                </table>
            </div>


            <?php
            } if($_GET['act'] == '223n') {
            ?>


            <div class="sem-info">

                <div class="row">
                    <span class="sem-name">Время:</span><span class="sem-val">с 10:00 до 18:00</span>
                </div>
                <div class="row">
                    <a style="margin-left: 0px;" class="apply-us-btn js-pop-show" data-popup="apply" href="#">Подать заявку</a></span>
                </div>

                <div class="row">
                    <span class="sem-name">Контактное лицо:</span><span class="sem-val">Кристина Олеговна</span>
                </div>
                <div class="row">
                    <span class="sem-name">Телефон:</span><span class="sem-val">+7 (495) 125-09-05<!--+7 (961) 286-91-31--></span>
                </div>
                <div class="row">
                    <span class="sem-name">Электронная почта:</span><span class="sem-val">global-tender@yandex.ru</span>
                </div>
                <hr>

        <table class="seminar-table">
        <tr>
            <td>Время</td>
            <td>Тема</td>
        </tr>
        <tr>
            <td>09:45-10:00</td>
            <td>
                <h3>Регистрация участников семинара</h3>
            </td>
        </tr>
        <tr>
            <td>10:00-11:30</td>
            <td>
                <h3>Федеральный закон от 18 июля 2011 г. № 223-ФЗ «О закупках товаров, работ, услуг отдельными видами юридических лиц».</h3>
                <ul>
                    <li>Субъекты регулирования, основные нормы, исключения, сроки вступления в силу.</li>
                    <li>Законодательное регулирование закупок: связанные федеральные законы, подзаконные нормативные акты.</li>
                    <li>Обзор произошедших изменений и др.</li>
                    <li>Преференции для субъектов малого и среднего предпринимательства.</li>
                </ul>

                <h3>Планирование закупок</h3>
                <ul>
                    <li>Постановление Правительства РФ № 932</li>
                    <li>Содержание и форма плана, сроки публикации и исключения.</li>
                </ul>

                <h3>Положение о закупке</h3>
                <ul>
                    <li>Требования 223-ФЗ к Положению о закупке: содержание, порядок утверждения и сроки публикации.</li>
                    <li>Этапы закупочной деятельности заказчика и структура Положения о закупке</li>
                    <li>Изменение Положения о закупке: порядок и сроки внесения</li>
                </ul>

                <h3>Информационное обеспечение закупок</h3>
                <ul>
                    <li>Требования Постановления Правительства №908</li>
                    <li>ЕИС, ЭТП. Закупки в электронной форме</li>
                    <li>Презентация Торгового портала Fabrikant.ru</li>
                    <li>Извещение и документация</li>
                    <li>Протоколы</li>
                    <li>Отчёты о заключенных договорах и Реестр договоров</li>
                    <li>Отчётность в Росстат</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>11:30-11:45</td>
            <td>
                <h3>Перерыв</h3>
            </td>
        </tr>
        <tr>
            <td>11:45-13:30</td>
            <td>
                <h3>Способы закупок: преимущества и недостатки, правила проведения</h3>
                <ul>
                    <li>Конкурентные и неконкурентные способы закупок. Требования законодательства к торгам, запросам котировок и запросам предложений. Требования 135-ФЗ «О защите конкуренции»</li>
                    <li>Открытый аукцион, открытый конкурс, запрос котировок, запрос предложений, конкурентные переговоры и их «модификации».</li>
                    <li>Закупка у единственного поставщика</li>
                </ul>
                <h3>Дополнительные элементы закупочных процедур.</h3>
                <ul>
                    <li>Переторжка, предварительный отбор, альтернативные предложения и иные способы сделать процедуру эффективнее</li>
                    <li>Ограничения со стороны законодательства при введении дополнительных элементов</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>13:30-14:30</td>
            <td>
                <h3>Обед</h3>
            </td>
        </tr>
        <tr>
            <td>14:30-15:45</td>
            <td>
                <h3>Контроль и обжалование действий (бездействий) заказчиков по 223-ФЗ</h3>
                <ul>
                    <li>Обзор часто встречающихся нарушений, практики ФАС и судебной практики</li>
                    <li>Порядок обжалования действий (бездействий) заказчиков</li>
                    <li>Реестры недобросовестных поставщиков. Порядок передачи сведений в контрольный орган, причины внесения.</li>
                    <li><b>Обзор готовящихся изменений.</b></li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>15:45-16:00</td>
            <td>
                <h3>Перерыв</h3>
            </td>
        </tr>
        <tr>
            <td>16:00-17:00</td>
            <td>
                <h3>Основы работы на портале</h3>
                <ul>
                    <li>Правила работы</li>
                    <li>Тарифные планы</li>
                    <li>Правила применения ЭЦП на портале</li>
                    <li>Секции торговой площадки</li>
                    <li>Регистрация на портале</li>
                </ul>
                <h3>Работа в личном кабинете:</h3>
                <ul>
                    <li>Информация об организации</li>
                    <li>Личные настройки</li>
                    <li>Продукция и услуги (работа с классификатором)</li>
                    <li>Интеграция с ООС 223-ФЗ</li>
                    <li>Информация о торгах (ваши торги, комментарии к торгам, аналитика, «профессиональная экспертиза», финансирование)</li>
                    <li>виды процедур закупки</li>
                    <li>дополнительные элементы процедур закупки</li>
                    <li>возможность проверки благонадежности поставщиков</li>
                    <li>возможность проведения процедур закупки только с участием предприятий малого и среднего бизнеса</li>
                </ul>
                <h3>Размещение и участие в процедуре закупки.</h3>
            </td>
        </tr>
        <tr>
            <td>17:00-18:00</td>
            <td>
                <h3>«Круглый стол» (ответы на вопросы). Завершение семинара.</h3>
            </td>
        </tr>
    </table>
    </div>



        <?php 
        } if($_GET['act'] == '44') {
        ?>
        <div class="sem-info">
            <div class="row">
                    <span class="sem-name">Время:</span><span class="sem-val">с 11:00 до 16:00</span>
            </div>
            <div class="row">
                <a style="margin-left: 0px;" class="apply-us-btn js-pop-show" data-popup="apply" href="#">Подать заявку</a></span>
            </div>
            <div class="row">
                <span class="sem-name">Контактное лицо:</span><span class="sem-val">Кристина Олеговна</span>
            </div>
            <div class="row">
                <span class="sem-name">Телефон:</span><!--
                --><span class="sem-val">+7 (495) 125-09-05<!--+7 (961) 286-91-31--></span>
            </div>
            <div class="row">
                <span class="sem-name">Электронная почта:</span><span class="sem-val">global-tender@yandex.ru</span>
            </div>
            <hr>
            <table class="seminar-table">
                <tr>
                    <td>Время:</td>
                    <td>Программа семинара:</td>
                </tr>
                <tr>
                    <td>10.30 – 11.00</td>
                    <td>Регистрация участников</td>
                </tr>
                <tr>
                    <td>11.00 – 11.05</td>
                    <td>Приветственное слово участникам семинара</td>
                <tr>
                    <td>11.05 – 13.00</td>
                    <td>

                        <h3>Положения Федерального закона от 05.04.2013 № 44-ФЗ "О контрактной системе в сфере закупок товаров, работ, услуг для обеспечения государственных и муниципальных нужд":</h3>
                        <ul>
                            <li>Актуальные вопросы практики применения законодательства о контрактной системе.
                            <li>Основные направления развития контрактной системы. Переход на электронные закупки.
                        </ul>

                        <h3>Будущее Единой информационной системы как:</h3>
                        <ul>
                            <li>Развитие централизованной автоматизации в ФКС. Практика применения электронного документооборота.
                            <li>Региональные и муниципальные информационные системы.
                        </ul>

                        <h3>Прогнозирование и планирование закупок в свете последних изменений в законодательстве:</h3>
                        <ul>
                            <li>План-график и план закупок. Разработка, утверждение, публикация и корректировка.
                            <li>Особенности планирования закупок с учетом требований бюджетного законодательства.
                            <li>Правила описания объекта закупки.
                            <li>Обоснование закупок. Обоснование начальной максимальной цены.
                            <li>Нормирование в сфере закупок.
                        </ul>

                        <h3>Совокупный годовой объем закупок</h3>
                        <ul>
                            <li>Как правильно рассчитать?
                            <li>Малый и средний бизнес в системе госзакупок. Отчетность по закупкам для субъектов малого предпринимательства.
                            <li>Учет закупок, попадающих под требование о предоставлении преференций.
                        </ul>

                        <h3>Проведение открытых процедур в рамках 44-ФЗ:</h3>
                        <ul>
                            <li>Сложные вопросы выбора способа закупки. Особенности составления технического задания.
                            <li>Как правильно провести запрос предложений?
                            <li>Нововведения в запросе котировок, открытом конкурсе, электронном аукционе.
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>13.00 – 14.00</td>
                    <td><i>Кофе-брейк</i></td>
                </tr>
                <tr>
                    <td>14.00 – 16.00</td>
                    <td>
                        <h3>Кардинальные изменения в закупке у единственного поставщика: новые возможности и риски.</h3>

                        <h3>Когда заказчик вправе отказаться заключать контракт:</h3>
                        <ul>
                            <li>Что может быть основанием для расторжения контракта.
                            <li>Порядок расторжения контракта.
                            <li>Расторжение контракта в одностороннем порядке.
                            <li>Риски при исполнении контракта.
                        </ul>

                        <h3>Обжалование действия (бездействия) заказчика, уполномоченного органа, учреждения, комиссии и ее членов, должностного лица контрактной службы, контрактного управляющего, оператора:</h3>
                        <ul>
                            <li>Практика участия контролирующих органов в системе госзаказа на примере антимонопольной службы.
                            <li>Порядок подачи и рассмотрения жалобы.
                        </ul>

                        <h3>Порядок включения сведений в РНП</h3>

                        <h3>Контроль за деятельностью заказчика: общественный, ведомственный.</h3>
                        <ul>
                            <li>Ответственность руководителя заказчика, контрактного управляющего, члена комиссии.
                        </ul>

                    </td>
                </tr>

            </table>
            <div class="download-block">
                <a href="#"><i class="fa fa-file"></i> Скачать программу</a>
            </div>
        </div>

        <?php
        }
        ?>

        <?php 
        /*if($_GET['act'] == '44' && $_GET['sem'] == 'stav44') {
        ?>
        <div class="sem-info">
            <div class="row">
                    <span class="sem-name">Время:</span><span class="sem-val">с 10:00 до 18:00</span>
            </div>
            <div class="row">
                <a style="margin-left: 0px;" class="apply-us-btn js-pop-show" data-popup="apply" href="#">Подать заявку</a></span>
            </div>
            <div class="row">
                <span class="sem-name">Контактное лицо:</span><span class="sem-val">Кристина Олеговна</span>
            </div>
            <div class="row">
                <span class="sem-name">Телефон:</span><!--
                --><span class="sem-val">+7 (495) 125-09-05<!--+7 (961) 286-91-31--></span>
            </div>
            <div class="row">
                <span class="sem-name">Электронная почта:</span><span class="sem-val">global-tender@yandex.ru</span>
            </div>
            <hr>
            <table class="seminar-table">
                <tr>
                    <td>Время:</td>
                    <td>Программа семинара:</td>
                </tr>
                <tr>
                    <td>9.45 – 10.00</td>
                    <td>Регистрация участников</td>
                </tr>
                <tr>
                    <td>10.00 – 11.30</td>
                    <td>

                        <h3>Контрактная система (КС) в РФ:</h3>
                        <ul>
                            <li>Основные понятия КС, сфера действия, объекты регулирования, информационное обеспечение.
                            <li>Нормативно-правовая база в сфере закупок.
                            <li>Обзор произошедших и готовящихся изменений КС.
                        </ul>

                        <h3>Изменения в планировании закупочной деятельности:</h3>
                        <ul>
                            <li>Особенности планирования закупок: нормирование, обоснование НМЦК, планы-графики, планы закупок.
                            <li>Обоснование НМЦК (начальной цены): методы определения и особенности их использования.
                        </ul>

                        <h3>Общие требования к осуществлению закупок в рамках 44-ФЗ</h3>
                        <ul>
                            <li>Извещение и документация о закупке. Требования к описанию предмета закупки («техническому заданию», «ТЗ»). Использование товарных знаков, «диапазонов», требования антимонопольного законодательства. Разбор примеров из практики, а также возможных ошибок поставщиков.
                            <li>Единые и дополнительные требования к участникам закупок. Правила их установления.  Подтверждение участником соответствия данным требованиям.
                            <li>Требования к обеспечению заявки на участие в закупке и к обеспечению исполнения контракта. Виды.
                            <li>Антидемпинговые меры. Правила применения. Подтверждение добросовестности поставщиков.
                            <li>Преимущества для отдельных участников закупок: субъектов малого предпринимательства, социально-ориентированных некоммерческих организаций, учреждений и предприятий уголовно-исправительной системы, организаций инвалидов.
                            <li>Национальный режим: условия, запреты и ограничения на поставку иностранных товаров. Преференции.
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>11.30 – 11.45</td>
                    <td>Перерыв</td>
                </tr>
                <tr>
                    <td>11.45 – 13.30</td>
                    <td>
                        <h3>Заключение, изменение и расторжение контракта.</h3>
                        <ul>
                            <li>Заключение, изменения и исполнения контрактов.
                            <li>Расторжение контракта: по соглашению сторон, по решению суда, в порядке применения одностороннего отказа стороны контракта от исполнения обязательств. Односторонний отказ: процедура и последствия.
                            <li>Особенности заключения, изменения и исполнения контрактов в различных отраслях.
                        </ul>
                        <h3>Запрос котировок</h3>
                        <ul>
                            <li>Основания для проведения.
                            <li>Правила подготовки и подачи заявок. Требования к форме и составу заявки.
                        </ul>
                        <h3>Электронный аукцион.</h3>
                        <ul>
                            <li>Основания для проведения. «Аукционный перечень».
                            <li>Требования к составу первой части заявки. Особенности указания характеристик.
                            <li>Требования к составу второй части заявки.
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>13.30 – 14.30</td>
                    <td>Обед</td>
                </tr>
                <tr>
                    <td>14.30 – 15.45</td>
                    <td>
                        <h3>Открытый конкурс.</h3>
                        <ul>
                            <li>Основания для проведения и особенности процедуры.
                            <li>Правила подачи конкурсных заявок. Требования к составу заявки.
                            <li>Обязательный пакет документов по составу конкурсной заявки и.
                        </ul>

                        <h3>Конкурс с ограниченным участием и Двухэтапный конкурс.</h3>
                        <ul>
                            <li>Основания для проведения.
                            <li>Предквалификационный отбор участников закупок. Порядок подготовки пакета документов в составе заявки для его прохождения.
                            <li>Постановление Правительства РФ № 1089 от 28.11.2013г. «Об условиях проведения процедуры конкурса с ограниченным участием…» и его применение в соответствующих отраслях.
                        </ul>

                        <h3>Запрос предложений</h3>
                        <ul>
                            <li>Основания для проведения и особенности процедуры.
                            <li>Правила подачи заявок и окончательных предложений. Выставление требований к форме и составу заявки.
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>15.45 – 16.00</td>
                    <td>Перерыв</td>
                </tr>
                <tr>
                    <td>16.00 – 16.40</td>
                    <td>
                        <h3>Обжалование и контроль. Ответственность за нарушения</h3>
                        <ul>
                            <li>Контрольные органы.
                            <li>Подача жалобы (требования к срокам, форме, составу и способу подачи).
                            <li>Процедура рассмотрения жалобы в ФАС. Реестры недобросовестных поставщиков (РНП). Основания, процедура  и последствия включения участника в РНП
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>16.40 - 17.00</td>
                    <td>
                        <h3>Концепция изменения способов определения поставщиков.</h3>
                        <ul>
                            <li>Обзор вносимых изменений в перечень способов.
                            <li>Единая информационная система. Региональные и муниципальные системы.
                            <li>Особенности документооборота.
                        </ul>
                    </td>
                </tr>    
                <tr>
                    <td>17.00 – 18.00</td>
                    <td>«Круглый стол» (ответы на вопросы).</td>
                </tr>
            </table>
            <div class="download-block">
                <a href="#"><i class="fa fa-file"></i> Скачать программу</a>
            </div>
        </div>

        <?php
        }*/
        ?>
    </main>
</div>
@endif

@stop

@section('script')
    
    <script>

        $(document).on('submit', '.apply-form', function(e){
            e.preventDefault();
            $('.btn-subm').addClass('active').attr('disabled', 'disabled');
            $.ajax({
                url: '{{URL::to("mailsend")}}',
                type: 'POST',
                data: $(this).serialize()
            }).always(function(){
                $('.btn-subm').removeClass('active').removeAttr('disabled');
                Popup.close('apply');
                setTimeout(function(){
                    Popup.show('result');

                    setTimeout(function(){
                        Popup.close('result');
                    }, 3000);
                }, 600);
            }).done(function(){
                $('.result-icon').html('<i class="fa fa-paper-plane"></i>');
                $('.result-text').html('Ваша заявка успешно отправленна');
            }).fail(function(data){
                console.log(data);
                $('.result-icon').html('<i class="fa fa-times-circle"></i>');
                $('.result-text').html('Произошла ошибка при отправке, попробуйте позже');
            });
            return false;
        });

    </script>

@stop



