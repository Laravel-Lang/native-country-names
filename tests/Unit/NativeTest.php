<?php

/**
 * This file is part of the "laravel-lang/native-country-names" project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Andrey Helldar <helldar@dragon-code.pro>
 * @copyright 2023 Laravel Lang Team
 * @license MIT
 *
 * @see https://laravel-lang.com
 */

declare(strict_types=1);

use LaravelLang\LocaleList\Locale;
use LaravelLang\NativeCountryNames\CountryNames;
use LaravelLang\NativeCountryNames\Enums\SortBy;

it('should not be a clone of the English version')
    ->expect(fn () => CountryNames::get())
    ->toBeSameCount()
    ->toBeLocale('_native')
    ->not->toBeLocale('en')
    ->not->toBeEmpty();

it('should check the returned list in French')
    ->expect(fn () => flatten(CountryNames::get(Locale::French, SortBy::Key)))
    ->toBe([
        'af'         => [
            'code'      => 'ZA',
            'native'    => 'Suid-Afrika',
            'localized' => 'Afrique Du Sud',
        ],
        'ar'         => [
            'code'      => 'EG',
            'native'    => 'مصر',
            'localized' => 'Égypte',
        ],
        'az'         => [
            'code'      => 'AZ',
            'native'    => 'Azərbaycan',
            'localized' => 'Azerbaïdjan',
        ],
        'be'         => [
            'code'      => 'BY',
            'native'    => 'Беларусь',
            'localized' => 'Biélorussie',
        ],
        'bg'         => [
            'code'      => 'BG',
            'native'    => 'България',
            'localized' => 'Bulgarie',
        ],
        'bn'         => [
            'code'      => 'BD',
            'native'    => 'বাংলাদেশ',
            'localized' => 'Bangladesh',
        ],
        'bs'         => [
            'code'      => 'BA',
            'native'    => 'Bosna I Hercegovina',
            'localized' => 'Bosnie-Herzégovine',
        ],
        'ca'         => [
            'code'      => 'ES',
            'native'    => 'Espanya',
            'localized' => 'Espagne',
        ],
        'cs'         => [
            'code'      => 'CZ',
            'native'    => 'Česko',
            'localized' => 'Tchéquie',
        ],
        'cy'         => [
            'code'      => 'GB',
            'native'    => 'Y Deyrnas Unedig',
            'localized' => 'Royaume-Uni',
        ],
        'da'         => [
            'code'      => 'DK',
            'native'    => 'Danmark',
            'localized' => 'Danemark',
        ],
        'de'         => [
            'code'      => 'DE',
            'native'    => 'Deutschland',
            'localized' => 'Allemagne',
        ],
        'de_CH'      => [
            'code'      => 'CH',
            'native'    => 'Schweiz',
            'localized' => 'Suisse',
        ],
        'el'         => [
            'code'      => 'GR',
            'native'    => 'Ελλάδα',
            'localized' => 'Grèce',
        ],
        'en'         => [
            'code'      => 'US',
            'native'    => 'United States',
            'localized' => 'États-Unis',
        ],
        'es'         => [
            'code'      => 'ES',
            'native'    => 'España',
            'localized' => 'Espagne',
        ],
        'et'         => [
            'code'      => 'EE',
            'native'    => 'Eesti',
            'localized' => 'Estonie',
        ],
        'eu'         => [
            'code'      => 'ES',
            'native'    => 'Espainia',
            'localized' => 'Espagne',
        ],
        'fa'         => [
            'code'      => 'IR',
            'native'    => 'ایران',
            'localized' => 'Iran',
        ],
        'fi'         => [
            'code'      => 'FI',
            'native'    => 'Suomi',
            'localized' => 'Finlande',
        ],
        'fil'        => [
            'code'      => 'PH',
            'native'    => 'Pilipinas',
            'localized' => 'Philippines',
        ],
        'fr'         => [
            'code'      => 'FR',
            'native'    => 'France',
            'localized' => 'France',
        ],
        'gl'         => [
            'code'      => 'ES',
            'native'    => 'España',
            'localized' => 'Espagne',
        ],
        'gu'         => [
            'code'      => 'IN',
            'native'    => 'ભારત',
            'localized' => 'Inde',
        ],
        'he'         => [
            'code'      => 'IL',
            'native'    => 'ישראל',
            'localized' => 'Israël',
        ],
        'hi'         => [
            'code'      => 'IN',
            'native'    => 'भारत',
            'localized' => 'Inde',
        ],
        'hr'         => [
            'code'      => 'HR',
            'native'    => 'Hrvatska',
            'localized' => 'Croatie',
        ],
        'hu'         => [
            'code'      => 'HU',
            'native'    => 'Magyarország',
            'localized' => 'Hongrie',
        ],
        'hy'         => [
            'code'      => 'AM',
            'native'    => 'Հայաստան',
            'localized' => 'Arménie',
        ],
        'id'         => [
            'code'      => 'ID',
            'native'    => 'Indonesia',
            'localized' => 'Indonésie',
        ],
        'is'         => [
            'code'      => 'IS',
            'native'    => 'Ísland',
            'localized' => 'Islande',
        ],
        'it'         => [
            'code'      => 'IT',
            'native'    => 'Italia',
            'localized' => 'Italie',
        ],
        'ja'         => [
            'code'      => 'JP',
            'native'    => '日本',
            'localized' => 'Japon',
        ],
        'ka'         => [
            'code'      => 'GE',
            'native'    => 'საქართველო',
            'localized' => 'Géorgie',
        ],
        'kk'         => [
            'code'      => 'KZ',
            'native'    => 'Қазақстан',
            'localized' => 'Kazakhstan',
        ],
        'km'         => [
            'code'      => 'KH',
            'native'    => 'កម្ពុជា',
            'localized' => 'Cambodge',
        ],
        'kn'         => [
            'code'      => 'IN',
            'native'    => 'ಭಾರತ',
            'localized' => 'Inde',
        ],
        'ko'         => [
            'code'      => 'KR',
            'native'    => '대한민국',
            'localized' => 'Corée Du Sud',
        ],
        'lt'         => [
            'code'      => 'LT',
            'native'    => 'Lietuva',
            'localized' => 'Lituanie',
        ],
        'lv'         => [
            'code'      => 'LV',
            'native'    => 'Latvija',
            'localized' => 'Lettonie',
        ],
        'mk'         => [
            'code'      => 'MK',
            'native'    => 'Северна Македонија',
            'localized' => 'Macédoine Du Nord',
        ],
        'mn'         => [
            'code'      => 'MN',
            'native'    => 'Монгол',
            'localized' => 'Mongolie',
        ],
        'mr'         => [
            'code'      => 'IN',
            'native'    => 'भारत',
            'localized' => 'Inde',
        ],
        'ms'         => [
            'code'      => 'MY',
            'native'    => 'Malaysia',
            'localized' => 'Malaisie',
        ],
        'nb'         => [
            'code'      => 'NO',
            'native'    => 'Norge',
            'localized' => 'Norvège',
        ],
        'ne'         => [
            'code'      => 'NP',
            'native'    => 'नेपाल',
            'localized' => 'Népal',
        ],
        'nl'         => [
            'code'      => 'NL',
            'native'    => 'Nederland',
            'localized' => 'Pays-Bas',
        ],
        'nn'         => [
            'code'      => 'NO',
            'native'    => 'Noreg',
            'localized' => 'Norvège',
        ],
        'oc'         => [
            'code'      => 'FR',
            'native'    => 'Fr',
            'localized' => 'France',
        ],
        'pl'         => [
            'code'      => 'PL',
            'native'    => 'Polska',
            'localized' => 'Pologne',
        ],
        'ps'         => [
            'code'      => 'AF',
            'native'    => 'افغانستان',
            'localized' => 'Afghanistan',
        ],
        'pt'         => [
            'code'      => 'BR',
            'native'    => 'Brasil',
            'localized' => 'Brésil',
        ],
        'pt_BR'      => [
            'code'      => 'BR',
            'native'    => 'Brasil',
            'localized' => 'Brésil',
        ],
        'ro'         => [
            'code'      => 'RO',
            'native'    => 'România',
            'localized' => 'Roumanie',
        ],
        'ru'         => [
            'code'      => 'RU',
            'native'    => 'Россия',
            'localized' => 'Russie',
        ],
        'sc'         => [
            'code'      => 'IT',
            'native'    => 'Itàlia',
            'localized' => 'Italie',
        ],
        'si'         => [
            'code'      => 'LK',
            'native'    => 'ශ්‍රී ලංකාව',
            'localized' => 'Sri Lanka',
        ],
        'sk'         => [
            'code'      => 'SK',
            'native'    => 'Slovensko',
            'localized' => 'Slovaquie',
        ],
        'sl'         => [
            'code'      => 'SI',
            'native'    => 'Slovenija',
            'localized' => 'Slovénie',
        ],
        'sq'         => [
            'code'      => 'AL',
            'native'    => 'Shqipëri',
            'localized' => 'Albanie',
        ],
        'sr_Cyrl'    => [
            'code'      => 'RS',
            'native'    => 'Србија',
            'localized' => 'Serbie',
        ],
        'sr_Latn'    => [
            'code'      => 'RS',
            'native'    => 'Srbija',
            'localized' => 'Serbie',
        ],
        'sr_Latn_ME' => [
            'code'      => 'ME',
            'native'    => 'Crna Gora',
            'localized' => 'Monténégro',
        ],
        'sv'         => [
            'code'      => 'SE',
            'native'    => 'Sverige',
            'localized' => 'Suède',
        ],
        'sw'         => [
            'code'      => 'TZ',
            'native'    => 'Tanzania',
            'localized' => 'Tanzanie',
        ],
        'tg'         => [
            'code'      => 'TJ',
            'native'    => 'Тоҷикистон',
            'localized' => 'Tadjikistan',
        ],
        'th'         => [
            'code'      => 'TH',
            'native'    => 'ไทย',
            'localized' => 'Thaïlande',
        ],
        'tk'         => [
            'code'      => 'TM',
            'native'    => 'Türkmenistan',
            'localized' => 'Turkménistan',
        ],
        'tl'         => [
            'code'      => 'PH',
            'native'    => 'Philippines',
            'localized' => 'Philippines',
        ],
        'tr'         => [
            'code'      => 'TR',
            'native'    => 'Türkiye',
            'localized' => 'Turquie',
        ],
        'ug'         => [
            'code'      => 'CN',
            'native'    => 'جۇڭگو',
            'localized' => 'Chine',
        ],
        'uk'         => [
            'code'      => 'UA',
            'native'    => 'Україна',
            'localized' => 'Ukraine',
        ],
        'ur'         => [
            'code'      => 'PK',
            'native'    => 'پاکستان',
            'localized' => 'Pakistan',
        ],
        'uz_Cyrl'    => [
            'code'      => 'UZ',
            'native'    => 'Ўзбекистон',
            'localized' => 'Ouzbékistan',
        ],
        'uz_Latn'    => [
            'code'      => 'UZ',
            'native'    => 'Oʻzbekiston',
            'localized' => 'Ouzbékistan',
        ],
        'vi'         => [
            'code'      => 'VN',
            'native'    => 'Việt Nam',
            'localized' => 'Viêt Nam',
        ],
        'zh_CN'      => [
            'code'      => 'CN',
            'native'    => '中国',
            'localized' => 'Chine',
        ],
        'zh_HK'      => [
            'code'      => 'HK',
            'native'    => '中国香港特别行政区',
            'localized' => 'R.a.s. Chinoise De Hong Kong',
        ],
        'zh_TW'      => [
            'code'      => 'TW',
            'native'    => '台湾',
            'localized' => 'Taïwan',
        ],
    ]);

it('should check the returned list in Ukrainian')
    ->expect(fn () => flatten(CountryNames::get(Locale::Ukrainian, SortBy::Key)))
    ->toBe([
        'af'         => [
            'code'      => 'ZA',
            'native'    => 'Suid-Afrika',
            'localized' => 'Південно-Африканська Республіка',
        ],
        'ar'         => [
            'code'      => 'EG',
            'native'    => 'مصر',
            'localized' => 'Єгипет',
        ],
        'az'         => [
            'code'      => 'AZ',
            'native'    => 'Azərbaycan',
            'localized' => 'Азербайджан',
        ],
        'be'         => [
            'code'      => 'BY',
            'native'    => 'Беларусь',
            'localized' => 'Білорусь',
        ],
        'bg'         => [
            'code'      => 'BG',
            'native'    => 'България',
            'localized' => 'Болгарія',
        ],
        'bn'         => [
            'code'      => 'BD',
            'native'    => 'বাংলাদেশ',
            'localized' => 'Бангладеш',
        ],
        'bs'         => [
            'code'      => 'BA',
            'native'    => 'Bosna I Hercegovina',
            'localized' => 'Боснія І Герцеговина',
        ],
        'ca'         => [
            'code'      => 'ES',
            'native'    => 'Espanya',
            'localized' => 'Іспанія',
        ],
        'cs'         => [
            'code'      => 'CZ',
            'native'    => 'Česko',
            'localized' => 'Чехія',
        ],
        'cy'         => [
            'code'      => 'GB',
            'native'    => 'Y Deyrnas Unedig',
            'localized' => 'Велика Британія',
        ],
        'da'         => [
            'code'      => 'DK',
            'native'    => 'Danmark',
            'localized' => 'Данія',
        ],
        'de'         => [
            'code'      => 'DE',
            'native'    => 'Deutschland',
            'localized' => 'Німеччина',
        ],
        'de_CH'      => [
            'code'      => 'CH',
            'native'    => 'Schweiz',
            'localized' => 'Швейцарія',
        ],
        'el'         => [
            'code'      => 'GR',
            'native'    => 'Ελλάδα',
            'localized' => 'Греція',
        ],
        'en'         => [
            'code'      => 'US',
            'native'    => 'United States',
            'localized' => 'Сполучені Штати',
        ],
        'es'         => [
            'code'      => 'ES',
            'native'    => 'España',
            'localized' => 'Іспанія',
        ],
        'et'         => [
            'code'      => 'EE',
            'native'    => 'Eesti',
            'localized' => 'Естонія',
        ],
        'eu'         => [
            'code'      => 'ES',
            'native'    => 'Espainia',
            'localized' => 'Іспанія',
        ],
        'fa'         => [
            'code'      => 'IR',
            'native'    => 'ایران',
            'localized' => 'Іран',
        ],
        'fi'         => [
            'code'      => 'FI',
            'native'    => 'Suomi',
            'localized' => 'Фінляндія',
        ],
        'fil'        => [
            'code'      => 'PH',
            'native'    => 'Pilipinas',
            'localized' => 'Філіппіни',
        ],
        'fr'         => [
            'code'      => 'FR',
            'native'    => 'France',
            'localized' => 'Франція',
        ],
        'gl'         => [
            'code'      => 'ES',
            'native'    => 'España',
            'localized' => 'Іспанія',
        ],
        'gu'         => [
            'code'      => 'IN',
            'native'    => 'ભારત',
            'localized' => 'Індія',
        ],
        'he'         => [
            'code'      => 'IL',
            'native'    => 'ישראל',
            'localized' => 'Ізраїль',
        ],
        'hi'         => [
            'code'      => 'IN',
            'native'    => 'भारत',
            'localized' => 'Індія',
        ],
        'hr'         => [
            'code'      => 'HR',
            'native'    => 'Hrvatska',
            'localized' => 'Хорватія',
        ],
        'hu'         => [
            'code'      => 'HU',
            'native'    => 'Magyarország',
            'localized' => 'Угорщина',
        ],
        'hy'         => [
            'code'      => 'AM',
            'native'    => 'Հայաստան',
            'localized' => 'Вірменія',
        ],
        'id'         => [
            'code'      => 'ID',
            'native'    => 'Indonesia',
            'localized' => 'Індонезія',
        ],
        'is'         => [
            'code'      => 'IS',
            'native'    => 'Ísland',
            'localized' => 'Ісландія',
        ],
        'it'         => [
            'code'      => 'IT',
            'native'    => 'Italia',
            'localized' => 'Італія',
        ],
        'ja'         => [
            'code'      => 'JP',
            'native'    => '日本',
            'localized' => 'Японія',
        ],
        'ka'         => [
            'code'      => 'GE',
            'native'    => 'საქართველო',
            'localized' => 'Грузія',
        ],
        'kk'         => [
            'code'      => 'KZ',
            'native'    => 'Қазақстан',
            'localized' => 'Казахстан',
        ],
        'km'         => [
            'code'      => 'KH',
            'native'    => 'កម្ពុជា',
            'localized' => 'Камбоджа',
        ],
        'kn'         => [
            'code'      => 'IN',
            'native'    => 'ಭಾರತ',
            'localized' => 'Індія',
        ],
        'ko'         => [
            'code'      => 'KR',
            'native'    => '대한민국',
            'localized' => 'Південна Корея',
        ],
        'lt'         => [
            'code'      => 'LT',
            'native'    => 'Lietuva',
            'localized' => 'Литва',
        ],
        'lv'         => [
            'code'      => 'LV',
            'native'    => 'Latvija',
            'localized' => 'Латвія',
        ],
        'mk'         => [
            'code'      => 'MK',
            'native'    => 'Северна Македонија',
            'localized' => 'Північна Македонія',
        ],
        'mn'         => [
            'code'      => 'MN',
            'native'    => 'Монгол',
            'localized' => 'Монголія',
        ],
        'mr'         => [
            'code'      => 'IN',
            'native'    => 'भारत',
            'localized' => 'Індія',
        ],
        'ms'         => [
            'code'      => 'MY',
            'native'    => 'Malaysia',
            'localized' => 'Малайзія',
        ],
        'nb'         => [
            'code'      => 'NO',
            'native'    => 'Norge',
            'localized' => 'Норвегія',
        ],
        'ne'         => [
            'code'      => 'NP',
            'native'    => 'नेपाल',
            'localized' => 'Непал',
        ],
        'nl'         => [
            'code'      => 'NL',
            'native'    => 'Nederland',
            'localized' => 'Нідерланди',
        ],
        'nn'         => [
            'code'      => 'NO',
            'native'    => 'Noreg',
            'localized' => 'Норвегія',
        ],
        'oc'         => [
            'code'      => 'FR',
            'native'    => 'Fr',
            'localized' => 'Франція',
        ],
        'pl'         => [
            'code'      => 'PL',
            'native'    => 'Polska',
            'localized' => 'Польща',
        ],
        'ps'         => [
            'code'      => 'AF',
            'native'    => 'افغانستان',
            'localized' => 'Афганістан',
        ],
        'pt'         => [
            'code'      => 'BR',
            'native'    => 'Brasil',
            'localized' => 'Бразилія',
        ],
        'pt_BR'      => [
            'code'      => 'BR',
            'native'    => 'Brasil',
            'localized' => 'Бразилія',
        ],
        'ro'         => [
            'code'      => 'RO',
            'native'    => 'România',
            'localized' => 'Румунія',
        ],
        'ru'         => [
            'code'      => 'RU',
            'native'    => 'Россия',
            'localized' => 'Росія',
        ],
        'sc'         => [
            'code'      => 'IT',
            'native'    => 'Itàlia',
            'localized' => 'Італія',
        ],
        'si'         => [
            'code'      => 'LK',
            'native'    => 'ශ්‍රී ලංකාව',
            'localized' => 'Шрі-Ланка',
        ],
        'sk'         => [
            'code'      => 'SK',
            'native'    => 'Slovensko',
            'localized' => 'Словаччина',
        ],
        'sl'         => [
            'code'      => 'SI',
            'native'    => 'Slovenija',
            'localized' => 'Словенія',
        ],
        'sq'         => [
            'code'      => 'AL',
            'native'    => 'Shqipëri',
            'localized' => 'Албанія',
        ],
        'sr_Cyrl'    => [
            'code'      => 'RS',
            'native'    => 'Србија',
            'localized' => 'Сербія',
        ],
        'sr_Latn'    => [
            'code'      => 'RS',
            'native'    => 'Srbija',
            'localized' => 'Сербія',
        ],
        'sr_Latn_ME' => [
            'code'      => 'ME',
            'native'    => 'Crna Gora',
            'localized' => 'Чорногорія',
        ],
        'sv'         => [
            'code'      => 'SE',
            'native'    => 'Sverige',
            'localized' => 'Швеція',
        ],
        'sw'         => [
            'code'      => 'TZ',
            'native'    => 'Tanzania',
            'localized' => 'Танзанія',
        ],
        'tg'         => [
            'code'      => 'TJ',
            'native'    => 'Тоҷикистон',
            'localized' => 'Таджикистан',
        ],
        'th'         => [
            'code'      => 'TH',
            'native'    => 'ไทย',
            'localized' => 'Таїланд',
        ],
        'tk'         => [
            'code'      => 'TM',
            'native'    => 'Türkmenistan',
            'localized' => 'Туркменістан',
        ],
        'tl'         => [
            'code'      => 'PH',
            'native'    => 'Philippines',
            'localized' => 'Філіппіни',
        ],
        'tr'         => [
            'code'      => 'TR',
            'native'    => 'Türkiye',
            'localized' => 'Туреччина',
        ],
        'ug'         => [
            'code'      => 'CN',
            'native'    => 'جۇڭگو',
            'localized' => 'Китай',
        ],
        'uk'         => [
            'code'      => 'UA',
            'native'    => 'Україна',
            'localized' => 'Україна',
        ],
        'ur'         => [
            'code'      => 'PK',
            'native'    => 'پاکستان',
            'localized' => 'Пакистан',
        ],
        'uz_Cyrl'    => [
            'code'      => 'UZ',
            'native'    => 'Ўзбекистон',
            'localized' => 'Узбекистан',
        ],
        'uz_Latn'    => [
            'code'      => 'UZ',
            'native'    => 'Oʻzbekiston',
            'localized' => 'Узбекистан',
        ],
        'vi'         => [
            'code'      => 'VN',
            'native'    => 'Việt Nam',
            'localized' => 'Вʼєтнам',
        ],
        'zh_CN'      => [
            'code'      => 'CN',
            'native'    => '中国',
            'localized' => 'Китай',
        ],
        'zh_HK'      => [
            'code'      => 'HK',
            'native'    => '中国香港特别行政区',
            'localized' => 'Гонконг, Оар Китаю',
        ],
        'zh_TW'      => [
            'code'      => 'TW',
            'native'    => '台湾',
            'localized' => 'Тайвань',
        ],
    ]);
