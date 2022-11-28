<?php

namespace App\Http\Controllers\Api;

use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends BaseApiController
{
    public static $dataToView1 = array(
        'status' => 'OK',
        'data' =>
        array(
            'payload' =>
            array(
                'yandex' =>
                array(
                    'rik' =>
                    array(
                        'found' => 1566449,
                        'results' =>
                        array(
                            1 =>
                            array(
                                'url' => 'https://www.youtube.com/channel/UCjzhzbnwYid8BXOYfXfspKw',
                                'title' => 'Ric - YouTube',
                                'passage' => 'Всем добряяяя сеньёры и сеньёрины меня зовут Ric) если коротко говоря это канал с видосиками по Standoff 2 ну а так же тут появляется CS:GO иногда, vr игры в...',
                                'status' => 'negative',
                            ),
                            2 =>
                            array(
                                'url' => 'https://rick-i-morty.online/?ref=ratrating.com',
                                'title' => 'Рик и Морти смотреть онлайн все сезоны и серии!',
                                'passage' => 'Рик и Морти смотреть онлайн бесплатно в 1080 HD качестве в русской озвучке. У нас вы можете смотреть бесплатно все сезоны и все серии на любых мобильных устройствах!',
                                'status' => 'neutral',
                                'ctr' => '17,1',
                            ),
                            3 =>
                            array(
                                'url' => 'https://en.wikipedia.org/wiki/RIK',
                                'title' => 'RIK - Wikipedia',
                                'passage' => 'Look up Rik or rik in Wiktionary, the free dictionary. Rik or RIK may refer to: Rik (given name), a masculine given name. Rik, Iran, a village. &quot;Rik&quot; (song), 2016, by Albin Johnsén and Mattias Andréasson. Riq, tambourine used in Arabic music.',
                                'status' => 'null',
                                'ctr' => '10,72',
                            ),
                            4 =>
                            array(
                                'url' => 'https://rik.studio/',
                                'title' => 'RikAnimation',
                                'passage' => 'They trust us. We are always in touch. rik@rik.studio. Instagram YouTube Behance.',
                                'status' => 'neutral',
                            ),
                            5 =>
                            array(
                                'url' => 'https://en.m.wikipedia.org/wiki/Rik_(given_name)',
                                'title' => 'Rik (given name) - Wikipedia',
                                'passage' => 'Rik is a masculine given name and nickname. Most common in Belgium, it is a short form of the Dutch language given name Hendrik or sometimes Frederik, Erik or Rikkert. As an English-language name it usually is a variant of Rick, a short form of Richard.',
                                'status' => 'neutral',
                            ),
                            6 =>
                            array(
                                'url' => 'https://ru.wikipedia.org/wiki/%D0%A0%D0%B8%D0%BA_%D0%A1%D0%B0%D0%BD%D1%87%D0%B5%D1%81',
                                'title' => 'Рик Санчес — Википедия',
                                'passage' => 'Рик Санчес — один из двух главных героев американского мультсериала «Рик и Морти», созданного Джастином Ройландом и Дэном Хармоном.',
                                'status' => 'neutral',
                            ),
                            7 =>
                            array(
                                'url' => 'https://rickandmorty.fandom.com/ru/wiki/%D0%A0%D0%B8%D0%BA_%D0%A1%D0%B0%D0%BD%D1%87%D0%B5%D0%B7',
                                'title' => 'Рик Санчез | Рик и Морти вики | Fandom',
                                'passage' => 'Ричард «Рик» Санчез (англ. Rick Sanchez) — главный протагонист мультсериала «Рик и Морти». Безумный ученый, чей алкоголизм, безрассудность и социопатия заставляют беспокоиться семью его дочери.',
                                'status' => 'neutral',
                            ),
                            8 =>
                            array(
                                'url' => 'https://translate.yandex.ru/translate?lang=en-ru&url=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FRichard_Sanchez&view=c',
                                'title' => 'Рик Санчес - Википедия',
                                'passage' => 'Рик, за которым обычно следует шоу, официально упоминается Трансмерным советом Риков как Рик С-137, ссылаясь на его первоначальную вселенную С-137.',
                                'status' => 'neutral',
                            ),
                            9 =>
                            array(
                                'url' => 'https://www.kinopoisk.ru/series/685246/',
                                'title' => 'Рик и Морти (сериал, 6 сезонов) — Кинопоиск',
                                'passage' => 'В центре сюжета - школьник по имени Морти и его дедушка Рик. Морти - самый обычный мальчик, который ничем не отличается от своих сверстников.',
                                'status' => 'neutral',
                            ),
                            10 =>
                            array(
                                'url' => 'https://www.tiktok.com/discover/rik?lang=ru-RU',
                                'title' => 'Смотрите популярные видео от rik | TikTok',
                                'passage' => 'Видео в TikTok от пользователя BOISAC (@bo.isac): «Vad mer indikerar på att man är rik? #inredning #fördig». Om du har detta hemma så är du antagligen RIK | Har man bara likadana bestick...',
                                'status' => 'neutral',
                            ),
                        ),
                    ),
                    'рик' =>
                    array(
                        'found' => 1566449,
                        'results' =>
                        array(
                            1 =>
                            array(
                                'url' => 'https://www.youtube.com/channel/UCjzhzbnwYid8BXOYfXfspKw',
                                'title' => 'Ric - YouTube',
                                'passage' => 'Всем добряяяя сеньёры и сеньёрины меня зовут Ric) если коротко говоря это канал с видосиками по Standoff 2 ну а так же тут появляется CS:GO иногда, vr игры в...',
                                'status' => 'neutral',
                            ),
                            2 =>
                            array(
                                'url' => 'https://rick-i-morty.online/?ref=ratrating.com',
                                'title' => 'Рик и Морти смотреть онлайн все сезоны и серии!',
                                'passage' => 'Рик и Морти смотреть онлайн бесплатно в 1080 HD качестве в русской озвучке. У нас вы можете смотреть бесплатно все сезоны и все серии на любых мобильных устройствах!',
                                'status' => 'neutral',
                            ),
                            3 =>
                            array(
                                'url' => 'https://en.wikipedia.org/wiki/RIK',
                                'title' => 'RIK - Wikipedia',
                                'passage' => 'Look up Rik or rik in Wiktionary, the free dictionary. Rik or RIK may refer to: Rik (given name), a masculine given name. Rik, Iran, a village. &quot;Rik&quot; (song), 2016, by Albin Johnsén and Mattias Andréasson. Riq, tambourine used in Arabic music.',
                                'status' => 'negative',
                            ),
                            4 =>
                            array(
                                'url' => 'https://rik.studio/',
                                'title' => 'RikAnimation',
                                'passage' => 'They trust us. We are always in touch. rik@rik.studio. Instagram YouTube Behance.',
                                'status' => 'neutral',
                            ),
                            5 =>
                            array(
                                'url' => 'https://en.m.wikipedia.org/wiki/Rik_(given_name)',
                                'title' => 'Rik (given name) - Wikipedia',
                                'passage' => 'Rik is a masculine given name and nickname. Most common in Belgium, it is a short form of the Dutch language given name Hendrik or sometimes Frederik, Erik or Rikkert. As an English-language name it usually is a variant of Rick, a short form of Richard.',
                                'status' => 'neutral',
                            ),
                            6 =>
                            array(
                                'url' => 'https://ru.wikipedia.org/wiki/%D0%A0%D0%B8%D0%BA_%D0%A1%D0%B0%D0%BD%D1%87%D0%B5%D1%81',
                                'title' => 'Рик Санчес — Википедия',
                                'passage' => 'Рик Санчес — один из двух главных героев американского мультсериала «Рик и Морти», созданного Джастином Ройландом и Дэном Хармоном.',
                                'status' => 'neutral',
                            ),
                            7 =>
                            array(
                                'url' => 'https://rickandmorty.fandom.com/ru/wiki/%D0%A0%D0%B8%D0%BA_%D0%A1%D0%B0%D0%BD%D1%87%D0%B5%D0%B7',
                                'title' => 'Рик Санчез | Рик и Морти вики | Fandom',
                                'passage' => 'Ричард «Рик» Санчез (англ. Rick Sanchez) — главный протагонист мультсериала «Рик и Морти». Безумный ученый, чей алкоголизм, безрассудность и социопатия заставляют беспокоиться семью его дочери.',
                                'status' => 'neutral',
                            ),
                            8 =>
                            array(
                                'url' => 'https://translate.yandex.ru/translate?lang=en-ru&url=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FRichard_Sanchez&view=c',
                                'title' => 'Рик Санчес - Википедия',
                                'passage' => 'Рик, за которым обычно следует шоу, официально упоминается Трансмерным советом Риков как Рик С-137, ссылаясь на его первоначальную вселенную С-137.',
                                'status' => 'neutral',
                            ),
                            9 =>
                            array(
                                'url' => 'https://www.kinopoisk.ru/series/685246/',
                                'title' => 'Рик и Морти (сериал, 6 сезонов) — Кинопоиск',
                                'passage' => 'В центре сюжета - школьник по имени Морти и его дедушка Рик. Морти - самый обычный мальчик, который ничем не отличается от своих сверстников.',
                                'status' => 'neutral',
                            ),
                            10 =>
                            array(
                                'url' => 'https://www.tiktok.com/discover/rik?lang=ru-RU',
                                'title' => 'Смотрите популярные видео от rik | TikTok',
                                'passage' => 'Видео в TikTok от пользователя BOISAC (@bo.isac): «Vad mer indikerar på att man är rik? #inredning #fördig». Om du har detta hemma så är du antagligen RIK | Har man bara likadana bestick...',
                                'status' => 'neutral',
                            ),
                        ),
                    ),
                    'рога и копыта' =>
                    array(
                        'found' => 559954,
                        'results' =>
                        array(
                            1 =>
                            array(
                                'url' => 'https://www.youtube.com/channel/UCjzhzbnwYid8BXOYfXfspKw',
                                'title' => 'Ric - YouTube',
                                'passage' => 'Всем добряяяя сеньёры и сеньёрины меня зовут Ric) если коротко говоря это канал с видосиками по Standoff 2 ну а так же тут появляется CS:GO иногда, vr игры в...',
                                'status' => 'neutral',
                            ),
                            2 =>
                            array(
                                'url' => 'https://rik.studio/',
                                'title' => 'RikAnimation',
                                'passage' => 'They trust us. We are always in touch. rik@rik.studio. Instagram YouTube Behance.',
                                'status' => 'negative',
                            ),
                            3 =>
                            array(
                                'url' => 'https://rick-i-morty.online/?ref=ratrating.com',
                                'title' => 'Рик и Морти смотреть онлайн все сезоны и серии!',
                                'passage' => 'Рик и Морти смотреть онлайн бесплатно в 1080 HD качестве в русской озвучке. У нас вы можете смотреть бесплатно все сезоны и все серии на любых мобильных устройствах!',
                                'status' => 'neutral',
                            ),
                            4 =>
                            array(
                                'url' => 'https://en.wikipedia.org/wiki/RIK',
                                'title' => 'RIK - Wikipedia',
                                'passage' => 'Look up Rik or rik in Wiktionary, the free dictionary. Rik or RIK may refer to: Rik (given name), a masculine given name. Rik, Iran, a village. &quot;Rik&quot; (song), 2016, by Albin Johnsén and Mattias Andréasson. Riq, tambourine used in Arabic music.',
                                'status' => 'neutral',
                            ),
                            5 =>
                            array(
                                'url' => 'https://en.m.wikipedia.org/wiki/Rik_(given_name)',
                                'title' => 'Rik (given name) - Wikipedia',
                                'passage' => 'Rik is a masculine given name and nickname. Most common in Belgium, it is a short form of the Dutch language given name Hendrik or sometimes Frederik, Erik or Rikkert. As an English-language name it usually is a variant of Rick, a short form of Richard.',
                                'status' => 'neutral',
                            ),
                            6 =>
                            array(
                                'url' => 'https://ru.wikipedia.org/wiki/%D0%A0%D0%B8%D0%BA_%D0%A1%D0%B0%D0%BD%D1%87%D0%B5%D1%81',
                                'title' => 'Рик Санчес — Википедия',
                                'passage' => 'Рик Санчес — один из двух главных героев американского мультсериала «Рик и Морти», созданного Джастином Ройландом и Дэном Хармоном.',
                                'status' => 'neutral',
                            ),
                            7 =>
                            array(
                                'url' => 'https://rickandmorty.fandom.com/ru/wiki/%D0%A0%D0%B8%D0%BA_%D0%A1%D0%B0%D0%BD%D1%87%D0%B5%D0%B7',
                                'title' => 'Рик Санчез | Рик и Морти вики | Fandom',
                                'passage' => 'Ричард «Рик» Санчез (англ. Rick Sanchez) — главный протагонист мультсериала «Рик и Морти». Безумный ученый, чей алкоголизм, безрассудность и социопатия заставляют беспокоиться семью его дочери.',
                                'status' => 'neutral',
                            ),
                            8 =>
                            array(
                                'url' => 'https://translate.yandex.ru/translate?lang=en-ru&url=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FRichard_Sanchez&view=c',
                                'title' => 'Рик Санчес - Википедия',
                                'passage' => 'Рик, за которым обычно следует шоу, официально упоминается Трансмерным советом Риков как Рик С-137, ссылаясь на его первоначальную вселенную С-137.',
                                'status' => 'neutral',
                            ),
                            9 =>
                            array(
                                'url' => 'https://www.kinopoisk.ru/series/685246/',
                                'title' => 'Рик и Морти (сериал, 6 сезонов) — Кинопоиск',
                                'passage' => 'В центре сюжета - школьник по имени Морти и его дедушка Рик. Морти - самый обычный мальчик, который ничем не отличается от своих сверстников.',
                                'status' => 'neutral',
                            ),
                            10 =>
                            array(
                                'url' => 'https://www.tiktok.com/discover/rik?lang=ru-RU',
                                'title' => 'Смотрите популярные видео от rik | TikTok',
                                'passage' => 'Видео в TikTok от пользователя BOISAC (@bo.isac): «Vad mer indikerar på att man är rik? #inredning #fördig». Om du har detta hemma så är du antagligen RIK | Har man bara likadana bestick...',
                                'status' => 'neutral',
                            ),
                        ),
                    ),
                ),
                'google' =>
                array(
                    'rik' =>
                    array(
                        'date' => '20221122T124206',
                        'found' => 71800000,
                        'page' => 0,
                        'first' => 1,
                        'last' => 8,
                        'results' =>
                        array(
                            1 =>
                            array(
                                'url' => 'https://www.smetarik.ru/',
                                'title' => 'smetarik',
                                'contenttype' => 'organic',
                                'breadcrumbs' => 'https://www.smetarik.ru',
                                'passage' => 'Новости · 16.11.2022 Индексы изменения сметной стоимости за IV квартал 2022 года в формате ПК «РИК» · 16.11.2022 C 17 ноября 2022 года обновлен прайс-лист на ...',
                                'cachelink' => 'https://webcache.googleusercontent.com/search?q=cache:https://www.smetarik.ru/',
                                'status' => 'neutral',
                            ),
                            2 =>
                            array(
                                'url' => 'https://rik174.ru/',
                                'title' => 'РИК - электронные компоненты и радиодетали',
                                'contenttype' => 'organic',
                                'breadcrumbs' => 'https://rik174.ru',
                                'passage' => 'РИК - электронные компоненты и радиодетали За более чем многолетний опыт работы налажены связи со многими заводами-производителями и ключевыми поставщиками ...',
                                'cachelink' => 'https://webcache.googleusercontent.com/search?q=cache:https://rik174.ru/',
                                'status' => 'negative',
                            ),
                            3 =>
                            array(
                                'url' => 'https://ria.ru/organization_RIK/',
                                'title' => 'РИК - последние новости сегодня',
                                'contenttype' => 'organic',
                                'breadcrumbs' => 'https://ria.ru › organization_RIK',
                                'passage' => 'РИК. Читайте последние новости на тему в ленте новостей на сайте РИА Новости. Участники Четырехстороннего диалога по безопасности в Токио будут оказывать на ...',
                                'cachelink' => 'https://webcache.googleusercontent.com/search?q=cache:https://ria.ru/organization_RIK/',
                                'status' => 'neutral',
                            ),
                            4 =>
                            array(
                                'url' => 'https://www.kinopoisk.ru/series/685246/',
                                'title' => 'Рик и Морти (сериал, 6 сезонов) - Кинопоиск',
                                'contenttype' => 'organic',
                                'breadcrumbs' => 'https://www.kinopoisk.ru › series',
                                'stars' => 'Рейтинг: 9/10',
                                'passage' => 'Рик и Морти (сериал 2013 – ...) Rick and Morty18+. Буду смотреть.',
                                'cachelink' => 'https://webcache.googleusercontent.com/search?q=cache:https://www.kinopoisk.ru/series/685246/',
                                'status' => 'neutral',
                            ),
                            5 =>
                            array(
                                'url' => 'https://rik78.ru/',
                                'title' => 'Компания РиК: Грузовые перевозки по России',
                                'contenttype' => 'organic',
                                'breadcrumbs' => 'https://rik78.ru',
                                'passage' => 'ООО «РиК». Закажите перевозку груза по России у нас! Нужен кран, манипулятор, самосвал, погрузчик или бульдозер в Ленобласти? Звоните прямо сейчас!',
                                'cachelink' => 'https://webcache.googleusercontent.com/search?q=cache:https://rik78.ru/',
                                'status' => 'neutral',
                            ),
                            6 =>
                            array(
                                'url' => 'http://rikm.ru/',
                                'title' => 'Главная - Рик - материалы для дорожного строительства и ...',
                                'contenttype' => 'organic',
                                'breadcrumbs' => 'http://rikm.ru',
                                'passage' => 'Производство и продажа материалов для дорожного строительства. Световозвращающая пленка для дорожных знаков и рекламы, ИДН (лежачие полицейские) и ...',
                                'cachelink' => 'https://webcache.googleusercontent.com/search?q=cache:http://rikm.ru/',
                                'status' => 'neutral',
                            ),
                            7 =>
                            array(
                                'url' => 'https://www.mxgroup.ru/catalog/engine/piston-rings/riken/',
                                'title' => 'Двигатель — Кольца поршневые — RIK - MX group',
                                'contenttype' => 'organic',
                                'breadcrumbs' => 'https://www.mxgroup.ru › engine › piston-rings › riken',
                                'passage' => 'Riken Corporation была основана в 1927г. Головной офис находится в Токио, Япония. Компания Riken Corporation была первой, кто начал массовое производство ...',
                                'cachelink' => 'https://webcache.googleusercontent.com/search?q=cache:https://www.mxgroup.ru/catalog/engine/piston-rings/riken/',
                                'status' => 'negative',
                            ),
                            8 =>
                            array(
                                'url' => 'https://ru.wikipedia.org/wiki/%D0%AD%D1%81%D1%82%D0%BB%D0%B8,_%D0%A0%D0%B8%D0%BA',
                                'title' => 'Эстли, Рик - Википедия',
                                'contenttype' => 'organic',
                                'breadcrumbs' => 'https://ru.wikipedia.org › wiki › Эстли,_Рик',
                                'passage' => 'Рик Э́стли (англ. Rick Astley; настоящее имя — Ри́чард Пол Э́стли (англ. Richard Paul Astley); род. 6 февраля 1966, Ньютон-Ле-Виллоус (англ.) ...',
                                'cachelink' => 'https://webcache.googleusercontent.com/search?q=cache:https://ru.wikipedia.org/wiki/%D0%AD%D1%81%D1%82%D0%BB%D0%B8,_%D0%A0%D0%B8%D0%BA',
                                'status' => 'neutral',
                            ),
                        ),
                    ),
                    'рик' =>
                    array(
                        'date' => '20221122T124209',
                        'found' => 27000000,
                        'page' => 0,
                        'first' => 1,
                        'last' => 8,
                        'results' =>
                        array(
                            1 =>
                            array(
                                'url' => 'https://rick-i-morty.online/',
                                'title' => 'Рик и Морти смотреть онлайн все сезоны и серии!',
                                'contenttype' => 'organic',
                                'breadcrumbs' => 'https://rick-i-morty.online',
                                'passage' => 'Рик и Морти смотреть онлайн. Rick and Morty. Рик и Морти - американский анимационный телесериал, созданный Дэном Хармоном и Джастином Ройландом, ...',
                                'cachelink' => 'https://webcache.googleusercontent.com/search?q=cache:https://rick-i-morty.online/',
                                'status' => 'neutral',
                            ),
                            2 =>
                            array(
                                'url' => 'https://rickandmorty.fandom.com/ru/wiki/%D0%A0%D0%B8%D0%BA_%D0%A1%D0%B0%D0%BD%D1%87%D0%B5%D0%B7',
                                'title' => 'Рик Санчез | Рик и Морти вики | Fandom',
                                'contenttype' => 'organic',
                                'breadcrumbs' => 'https://rickandmorty.fandom.com › wiki › Рик_Санчез',
                                'passage' => 'Рик — скептик, крайне циничен, ворчлив, но не лишен чувства юмора, в основном чёрного. Из-за своей гениальности и характера нажил себе немало врагов во ...',
                                'cachelink' => 'https://webcache.googleusercontent.com/search?q=cache:https://rickandmorty.fandom.com/ru/wiki/%D0%A0%D0%B8%D0%BA_%D0%A1%D0%B0%D0%BD%D1%87%D0%B5%D0%B7',
                                'status' => 'neutral',
                            ),
                            3 =>
                            array(
                                'url' => 'https://ru.wikipedia.org/wiki/%D0%A0%D0%B8%D0%BA_%D0%B8_%D0%9C%D0%BE%D1%80%D1%82%D0%B8',
                                'title' => 'Рик и Морти - Википедия',
                                'contenttype' => 'organic',
                                'breadcrumbs' => 'https://ru.wikipedia.org › wiki › Рик_и_Морти',
                                'passage' => '«Рик и Морти» (англ. Rick and Morty) — американский комедийный научно-фантастический анимационный сериал для взрослых, созданный Джастином Ройландом и Дэном ...',
                                'cachelink' => 'https://webcache.googleusercontent.com/search?q=cache:https://ru.wikipedia.org/wiki/%D0%A0%D0%B8%D0%BA_%D0%B8_%D0%9C%D0%BE%D1%80%D1%82%D0%B8',
                                'status' => 'neutral',
                            ),
                            4 =>
                            array(
                                'url' => 'https://www.kinopoisk.ru/name/29366/',
                                'title' => 'Рик Юн — фильмы - Кинопоиск',
                                'contenttype' => 'organic',
                                'breadcrumbs' => 'https://www.kinopoisk.ru › name',
                                'passage' => 'Рик Юн. Rick Yune. О персоне. Карьера. Актер ,. Продюсер ,.',
                                'cachelink' => 'https://webcache.googleusercontent.com/search?q=cache:https://www.kinopoisk.ru/name/29366/',
                                'status' => 'neutral',
                            ),
                            5 =>
                            array(
                                'url' => 'http://rikm.ru/',
                                'title' => 'Главная - Рик - материалы для дорожного строительства и ...',
                                'contenttype' => 'organic',
                                'breadcrumbs' => 'http://rikm.ru',
                                'passage' => 'Производство и продажа материалов для дорожного строительства. Световозвращающая пленка для дорожных знаков и рекламы, ИДН (лежачие полицейские) и ...',
                                'cachelink' => 'https://webcache.googleusercontent.com/search?q=cache:http://rikm.ru/',
                                'status' => 'neutral',
                            ),
                            6 =>
                            array(
                                'url' => 'https://rik174.ru/',
                                'title' => 'РИК - электронные компоненты и радиодетали',
                                'contenttype' => 'organic',
                                'breadcrumbs' => 'https://rik174.ru',
                                'passage' => 'РИК - электронные компоненты и радиодетали За более чем многолетний опыт работы налажены связи со многими заводами-производителями и ключевыми поставщиками ...',
                                'cachelink' => 'https://webcache.googleusercontent.com/search?q=cache:https://rik174.ru/',
                                'status' => 'neutral',
                            ),
                            7 =>
                            array(
                                'url' => 'https://www.all-smety.ru/programs/smetnye_programmy/winrik/kupit-winrik/',
                                'title' => 'Купить «РИК», «WinРИК» | Прайс-лист, цены на программу ...',
                                'contenttype' => 'organic',
                                'breadcrumbs' => 'https://www.all-smety.ru › ... › РИК',
                                'passage' => 'Программа будет доставлена Вам бесплатно экспресс-почтой. Прежде чем приобрести «РИК» (бывш. «WinRik») Вы можете также ознакомиться с ценами на программу, ...',
                                'cachelink' => 'https://webcache.googleusercontent.com/search?q=cache:https://www.all-smety.ru/programs/smetnye_programmy/winrik/kupit-winrik/',
                                'status' => 'negative',
                            ),
                            8 =>
                            array(
                                'url' => 'https://www.smetarik.ru/',
                                'title' => 'smetarik',
                                'contenttype' => 'organic',
                                'breadcrumbs' => 'https://www.smetarik.ru',
                                'passage' => 'Новости · 16.11.2022 Индексы изменения сметной стоимости за IV квартал 2022 года в формате ПК «РИК» · 16.11.2022 C 17 ноября 2022 года обновлен прайс-лист на ...',
                                'cachelink' => 'https://webcache.googleusercontent.com/search?q=cache:https://www.smetarik.ru/',
                                'status' => 'neutral',
                            ),
                        ),
                    ),
                    'рога и копыта' =>
                    array(
                        'date' => '20221122T124212',
                        'found' => 1120000,
                        'page' => 0,
                        'first' => 1,
                        'last' => 9,
                        'results' =>
                        array(
                            1 =>
                            array(
                                'url' => 'https://www.kinopoisk.ru/film/81621/',
                                'title' => 'Рога и копыта (2006) - Кинопоиск',
                                'contenttype' => 'organic',
                                'breadcrumbs' => 'https://www.kinopoisk.ru › film',
                                'stars' => 'Рейтинг: 5,6/10',
                                'passage' => 'Рога и копыта (2006). Barnyard0+. Буду смотреть ...',
                                'cachelink' => 'https://webcache.googleusercontent.com/search?q=cache:https://www.kinopoisk.ru/film/81621/',
                                'status' => 'neutral',
                            ),
                            2 =>
                            array(
                                'url' => 'https://ru.wikipedia.org/wiki/%D0%A0%D0%BE%D0%B3%D0%B0_%D0%B8_%D0%BA%D0%BE%D0%BF%D1%8B%D1%82%D0%B0_(%D0%BC%D1%83%D0%BB%D1%8C%D1%82%D1%84%D0%B8%D0%BB%D1%8C%D0%BC)',
                                'title' => 'Рога и копыта (мультфильм) - Википедия',
                                'contenttype' => 'organic',
                                'breadcrumbs' => 'https://ru.wikipedia.org › wiki › Рога_и_копыта_(мул...',
                                'passage' => '«Рога и копыта» (англ. Barnyard, досл. «Скотный двор») — семейная анимационная комедия и драма 2006 года. Рога и копыта. англ. Barnyard. BarnyardPoster.jpg.',
                                'cachelink' => 'https://webcache.googleusercontent.com/search?q=cache:https://ru.wikipedia.org/wiki/%D0%A0%D0%BE%D0%B3%D0%B0_%D0%B8_%D0%BA%D0%BE%D0%BF%D1%8B%D1%82%D0%B0_(%D0%BC%D1%83%D0%BB%D1%8C%D1%82%D1%84%D0%B8%D0%BB%D1%8C%D0%BC)',
                                'status' => 'neutral',
                            ),
                            3 =>
                            array(
                                'url' => 'https://www.ivi.ru/watch/110685',
                                'title' => 'Рога и копыта (Мультфильм 2006) - IVI',
                                'contenttype' => 'organic',
                                'breadcrumbs' => 'https://www.ivi.ru › Мультфильмы › Для детей',
                                'passage' => NULL,
                                'cachelink' => 'https://webcache.googleusercontent.com/search?q=cache:https://www.ivi.ru/watch/110685',
                                'status' => 'negative',
                            ),
                            4 =>
                            array(
                                'url' => 'https://ru.wiktionary.org/wiki/%D0%A0%D0%BE%D0%B3%D0%B0_%D0%B8_%D0%BA%D0%BE%D0%BF%D1%8B%D1%82%D0%B0',
                                'title' => 'Рога и копыта - Викисловарь',
                                'contenttype' => 'organic',
                                'breadcrumbs' => 'https://ru.wiktionary.org › wiki › Рога_и_копыта',
                                'passage' => 'От названия фиктивной конторы «Рога и копыта» в сатирическом романе И. Ильфа и Е. Петрова «Золотой телёнок» (1931). ПереводПравить. Список переводов ...',
                                'cachelink' => 'https://webcache.googleusercontent.com/search?q=cache:https://ru.wiktionary.org/wiki/%D0%A0%D0%BE%D0%B3%D0%B0_%D0%B8_%D0%BA%D0%BE%D0%BF%D1%8B%D1%82%D0%B0',
                                'status' => 'neutral',
                            ),
                            5 =>
                            array(
                                'url' => 'https://vseseriipodriad.ru/multfilmy/997-roga-i-kopyta.html',
                                'title' => 'Рога и копыта мультфильм 2006 смотреть онлайн в ...',
                                'contenttype' => 'organic',
                                'breadcrumbs' => 'https://vseseriipodriad.ru › 997-roga-i-kopyta',
                                'passage' => '«Рога и копыта» - юность – чудесная пора, когда можно играть и веселиться, не задумываясь ни о каких проблемах. Но напрасно взрослые обвиняют своих детишек ...',
                                'cachelink' => 'https://webcache.googleusercontent.com/search?q=cache:https://vseseriipodriad.ru/multfilmy/997-roga-i-kopyta.html',
                                'status' => 'neutral',
                            ),
                            6 =>
                            array(
                                'url' => 'https://vk.com/rogaikopyta76',
                                'title' => 'Рога и Копыта. Ярославль - ВКонтакте',
                                'contenttype' => 'organic',
                                'breadcrumbs' => 'https://vk.com › rogaikopyta76',
                                'passage' => 'Знаменитая кофейня «Рога и копыта» находится в самом сердце Ярославля - историческом центре города - на Богоявленской площади! | 1425 подписчиков.',
                                'cachelink' => 'https://webcache.googleusercontent.com/search?q=cache:https://vk.com/rogaikopyta76',
                                'status' => 'neutral',
                            ),
                            7 =>
                            array(
                                'url' => 'http://trash36.ru/',
                                'title' => 'Авторазбор Рога и Копыта - запчасти для иномарок',
                                'contenttype' => 'organic',
                                'breadcrumbs' => 'http://trash36.ru',
                                'passage' => 'Интернет-магазин Авторазбор Рога и Копыта : большой ассортимент запчастей для Японских и Корейских автомобилей в Воронеже.',
                                'cachelink' => 'https://webcache.googleusercontent.com/search?q=cache:http://trash36.ru/',
                                'status' => 'negative',
                            ),
                            8 =>
                            array(
                                'url' => 'http://www.rogaikopita44.org/',
                                'title' => 'Рога и копыта',
                                'contenttype' => 'organic',
                                'breadcrumbs' => 'http://www.rogaikopita44.org',
                                'passage' => 'Кофейня “Рога и Копыта” это отличное место для проведения праздников, корпоративов, и просто уютных посиделок с друзьями.',
                                'cachelink' => 'https://webcache.googleusercontent.com/search?q=cache:http://www.rogaikopita44.org/',
                                'status' => 'neutral',
                            ),
                            9 =>
                            array(
                                'url' => 'https://idss.lordfilm.codes/11708-roga-i-kopyta.html',
                                'title' => 'Рога и копыта (2006) смотреть онлайн - LordFilm',
                                'contenttype' => 'organic',
                                'breadcrumbs' => 'https://idss.lordfilm.codes › мультфильмы',
                                'passage' => 'Рога и копыта (мультфильм, 2006) смотреть онлайн бесплатно. Название: Barnyard; Год выхода: 2006; Режиссер: Стив Одекерк ...',
                                'cachelink' => 'https://webcache.googleusercontent.com/search?q=cache:https://idss.lordfilm.codes/11708-roga-i-kopyta.html',
                                'status' => 'neutral',
                            ),
                        ),
                    ),
                ),
                'keywords' =>
                array(
                    0 => 'rik',
                    1 => 'рик',
                    2 => 'рога и копыта',
                ),
            ),
            'losts' =>
            array(
                'overallQuerys' =>
                array(
                    'google' => 2599248,
                    'yandex' => 2123679,
                ),
                'rik' =>
                array(
                    'shows' =>
                    array(
                        'yandex' => 5151,
                        'google' => 6181,
                    ),
                    'losts' =>
                    array(
                        'yandex' => 690,
                        'google' => 498,
                    ),
                    'reputationLosts' => 1188,
                    'directViews' => 2972,
                    'negativeCoverage' => 8916,
                ),
                'рик' =>
                array(
                    'shows' =>
                    array(
                        'yandex' => 2081318,
                        'google' => 2497582,
                    ),
                    'losts' =>
                    array(
                        'yandex' => 89247,
                        'google' => 30471,
                    ),
                    'reputationLosts' => 119718,
                    'directViews' => 299293,
                    'negativeCoverage' => 897879,
                ),
                'рога и копыта' =>
                array(
                    'shows' =>
                    array(
                        'yandex' => 37210,
                        'google' => 44652,
                    ),
                    'losts' =>
                    array(
                        'yandex' => 2545,
                        'google' => 2460,
                    ),
                    'reputationLosts' => 5005,
                    'directViews' => 12512,
                    'negativeCoverage' => 37536,
                ),
                'total' =>
                array(
                    'overallReputationLosts' => 125911,
                    'overallDirectViews' => 314777,
                    'overallNegativeCoverage' => 944331,
                ),
            ),
        ),
    );

    public static function generatePdf($dataToView = [])
    {

        $dataToView = json_decode(json_encode(self::$dataToView1), true);
        $pdf = PDF::loadView(
            'pdf.offer',
            // $data
            compact('dataToView')
        );
        // ->setPaper('a4', 'landscape');

        $path = public_path('pdf/');
        $fileName =  'offer' . '.' . 'pdf';
        $pdf->save($path . '/' . $fileName);
        return
            $pdf->stream('offer.pdf');
        // $pdf->download($fileName);
    }
    public static function generatePdf2($dataToView = [])
    {

        $dataToView = json_decode(json_encode(self::$dataToView1), true);
        return view('pdf.offer', compact('dataToView'));
        $pdf = PDF::loadView(
            'pdf.offer',
            // $data
            compact('dataToView')
        );
        // ->setPaper('a4', 'landscape');

        $path = public_path('pdf/');
        $fileName =  'offer' . '.' . 'pdf';
        $pdf->save($path . '/' . $fileName);
        return
            $pdf->stream('offer.pdf');
        // $pdf->download($fileName);
    }
}
