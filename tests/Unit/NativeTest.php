<?php

/**
 * This file is part of the "laravel-lang/native-country-names" project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Andrey Helldar <helldar@dragon-code.pro>
 * @copyright 2025 Laravel Lang Team
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
        'ak'         => [
            'code'      => 'GH',
            'native'    => 'Gaana',
            'localized' => 'Ghana',
        ],
        'am'         => [
            'code'      => 'ET',
            'native'    => 'ኢትዮጵያ',
            'localized' => 'Éthiopie',
        ],
        'ar'         => [
            'code'      => 'EG',
            'native'    => 'مصر',
            'localized' => 'Égypte',
        ],
        'as'         => [
            'code'      => 'IN',
            'native'    => 'ভাৰত',
            'localized' => 'Inde',
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
        'bho'        => [
            'code'      => 'IN',
            'native'    => 'भारत',
            'localized' => 'Inde',
        ],
        'bm'         => [
            'code'      => 'ML',
            'native'    => 'Mali',
            'localized' => 'Mali',
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
        'ceb'        => [
            'code'      => 'PH',
            'native'    => 'Pilipinas',
            'localized' => 'Philippines',
        ],
        'ckb'        => [
            'code'      => 'IQ',
            'native'    => 'عێراق',
            'localized' => 'Irak',
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
        'doi'        => [
            'code'      => 'IN',
            'native'    => 'भारत',
            'localized' => 'Inde',
        ],
        'ee'         => [
            'code'      => 'GH',
            'native'    => 'Ghana Nutome',
            'localized' => 'Ghana',
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
        'en_CA'      => [
            'code'      => 'CA',
            'native'    => 'Canada',
            'localized' => 'Canada',
        ],
        'eo'         => [
            'code'      => '001',
            'native'    => 'Mondo',
            'localized' => 'Monde',
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
        'fy'         => [
            'code'      => 'NL',
            'native'    => 'Nederlân',
            'localized' => 'Pays-Bas',
        ],
        'ga'         => [
            'code'      => 'IE',
            'native'    => 'Éire',
            'localized' => 'Irlande',
        ],
        'gd'         => [
            'code'      => 'GB',
            'native'    => 'An Rìoghachd Aonaichte',
            'localized' => 'Royaume-Uni',
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
        'ha'         => [
            'code'      => 'NG',
            'native'    => 'Nijeriya',
            'localized' => 'Nigeria',
        ],
        'haw'        => [
            'code'      => 'US',
            'native'    => 'ʻAmelika Hui Pū ʻIa',
            'localized' => 'États-Unis',
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
        'ig'         => [
            'code'      => 'NG',
            'native'    => 'Naịjịrịa',
            'localized' => 'Nigeria',
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
        'ku'         => [
            'code'      => 'TR',
            'native'    => 'Tirkiye',
            'localized' => 'Turquie',
        ],
        'ky'         => [
            'code'      => 'KG',
            'native'    => 'Кыргызстан',
            'localized' => 'Kirghizstan',
        ],
        'lb'         => [
            'code'      => 'LU',
            'native'    => 'Lëtzebuerg',
            'localized' => 'Luxembourg',
        ],
        'lg'         => [
            'code'      => 'UG',
            'native'    => 'Yuganda',
            'localized' => 'Ouganda',
        ],
        'ln'         => [
            'code'      => 'CD',
            'native'    => 'Republíki Ya Kongó Demokratíki',
            'localized' => 'Congo-Kinshasa',
        ],
        'lo'         => [
            'code'      => 'LA',
            'native'    => 'ລາວ',
            'localized' => 'Laos',
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
        'mai'        => [
            'code'      => 'IN',
            'native'    => 'भारत',
            'localized' => 'Inde',
        ],
        'mg'         => [
            'code'      => 'MG',
            'native'    => 'Madagasikara',
            'localized' => 'Madagascar',
        ],
        'mi'         => [
            'code'      => 'NZ',
            'native'    => 'Aotearoa',
            'localized' => 'Nouvelle-Zélande',
        ],
        'mk'         => [
            'code'      => 'MK',
            'native'    => 'Северна Македонија',
            'localized' => 'Macédoine Du Nord',
        ],
        'ml'         => [
            'code'      => 'IN',
            'native'    => 'ഇന്ത്യ',
            'localized' => 'Inde',
        ],
        'mn'         => [
            'code'      => 'MN',
            'native'    => 'Монгол',
            'localized' => 'Mongolie',
        ],
        'mni_Mtei'   => [
            'code'      => 'IN',
            'native'    => 'India',
            'localized' => 'Inde',
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
        'mt'         => [
            'code'      => 'MT',
            'native'    => 'Malta',
            'localized' => 'Malte',
        ],
        'my'         => [
            'code'      => 'MM',
            'native'    => 'မြန်မာ',
            'localized' => 'Myanmar (Birmanie)',
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
        'om'         => [
            'code'      => 'ET',
            'native'    => 'Itoophiyaa',
            'localized' => 'Éthiopie',
        ],
        'or'         => [
            'code'      => 'IN',
            'native'    => 'ଭାରତ',
            'localized' => 'Inde',
        ],
        'pa'         => [
            'code'      => 'IN',
            'native'    => 'ਭਾਰਤ',
            'localized' => 'Inde',
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
        'qu'         => [
            'code'      => 'PE',
            'native'    => 'Perú',
            'localized' => 'Pérou',
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
        'rw'         => [
            'code'      => 'RW',
            'native'    => 'U Rwanda',
            'localized' => 'Rwanda',
        ],
        'sa'         => [
            'code'      => 'IN',
            'native'    => 'भारतः',
            'localized' => 'Inde',
        ],
        'sc'         => [
            'code'      => 'IT',
            'native'    => 'Itàlia',
            'localized' => 'Italie',
        ],
        'sd'         => [
            'code'      => 'PK',
            'native'    => 'پاڪستان',
            'localized' => 'Pakistan',
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
        'sn'         => [
            'code'      => 'ZW',
            'native'    => 'Zimbabwe',
            'localized' => 'Zimbabwe',
        ],
        'so'         => [
            'code'      => 'SO',
            'native'    => 'Soomaaliya',
            'localized' => 'Somalie',
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
            'native'    => 'Serbia',
            'localized' => 'Serbie',
        ],
        'sr_Latn_ME' => [
            'code'      => 'ME',
            'native'    => 'Montenegro',
            'localized' => 'Monténégro',
        ],
        'su'         => [
            'code'      => 'ID',
            'native'    => 'Indonesia',
            'localized' => 'Indonésie',
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
        'ta'         => [
            'code'      => 'IN',
            'native'    => 'இந்தியா',
            'localized' => 'Inde',
        ],
        'te'         => [
            'code'      => 'IN',
            'native'    => 'భారతదేశం',
            'localized' => 'Inde',
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
        'ti'         => [
            'code'      => 'ET',
            'native'    => 'ኢትዮጵያ',
            'localized' => 'Éthiopie',
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
        'tt'         => [
            'code'      => 'RU',
            'native'    => 'Россия',
            'localized' => 'Russie',
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
            'native'    => 'Uzbekistan',
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
        'xh'         => [
            'code'      => 'ZA',
            'native'    => 'Emzantsi Afrika',
            'localized' => 'Afrique Du Sud',
        ],
        'yi'         => [
            'code'      => '001',
            'native'    => 'וועלט',
            'localized' => 'Monde',
        ],
        'yo'         => [
            'code'      => 'NG',
            'native'    => 'Nàìjíríà',
            'localized' => 'Nigeria',
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
        'zu'         => [
            'code'      => 'ZA',
            'native'    => 'Iningizimu Afrika',
            'localized' => 'Afrique Du Sud',
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
        'ak'         => [
            'code'      => 'GH',
            'native'    => 'Gaana',
            'localized' => 'Гана',
        ],
        'am'         => [
            'code'      => 'ET',
            'native'    => 'ኢትዮጵያ',
            'localized' => 'Ефіопія',
        ],
        'ar'         => [
            'code'      => 'EG',
            'native'    => 'مصر',
            'localized' => 'Єгипет',
        ],
        'as'         => [
            'code'      => 'IN',
            'native'    => 'ভাৰত',
            'localized' => 'Індія',
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
        'bho'        => [
            'code'      => 'IN',
            'native'    => 'भारत',
            'localized' => 'Індія',
        ],
        'bm'         => [
            'code'      => 'ML',
            'native'    => 'Mali',
            'localized' => 'Малі',
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
        'ceb'        => [
            'code'      => 'PH',
            'native'    => 'Pilipinas',
            'localized' => 'Філіппіни',
        ],
        'ckb'        => [
            'code'      => 'IQ',
            'native'    => 'عێراق',
            'localized' => 'Ірак',
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
        'doi'        => [
            'code'      => 'IN',
            'native'    => 'भारत',
            'localized' => 'Індія',
        ],
        'ee'         => [
            'code'      => 'GH',
            'native'    => 'Ghana Nutome',
            'localized' => 'Гана',
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
        'en_CA'      => [
            'code'      => 'CA',
            'native'    => 'Canada',
            'localized' => 'Канада',
        ],
        'eo'         => [
            'code'      => '001',
            'native'    => 'Mondo',
            'localized' => 'Світ',
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
        'fy'         => [
            'code'      => 'NL',
            'native'    => 'Nederlân',
            'localized' => 'Нідерланди',
        ],
        'ga'         => [
            'code'      => 'IE',
            'native'    => 'Éire',
            'localized' => 'Ірландія',
        ],
        'gd'         => [
            'code'      => 'GB',
            'native'    => 'An Rìoghachd Aonaichte',
            'localized' => 'Велика Британія',
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
        'ha'         => [
            'code'      => 'NG',
            'native'    => 'Nijeriya',
            'localized' => 'Нігерія',
        ],
        'haw'        => [
            'code'      => 'US',
            'native'    => 'ʻAmelika Hui Pū ʻIa',
            'localized' => 'Сполучені Штати',
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
        'ig'         => [
            'code'      => 'NG',
            'native'    => 'Naịjịrịa',
            'localized' => 'Нігерія',
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
        'ku'         => [
            'code'      => 'TR',
            'native'    => 'Tirkiye',
            'localized' => 'Туреччина',
        ],
        'ky'         => [
            'code'      => 'KG',
            'native'    => 'Кыргызстан',
            'localized' => 'Киргизстан',
        ],
        'lb'         => [
            'code'      => 'LU',
            'native'    => 'Lëtzebuerg',
            'localized' => 'Люксембург',
        ],
        'lg'         => [
            'code'      => 'UG',
            'native'    => 'Yuganda',
            'localized' => 'Уганда',
        ],
        'ln'         => [
            'code'      => 'CD',
            'native'    => 'Republíki Ya Kongó Demokratíki',
            'localized' => 'Конго – Кіншаса',
        ],
        'lo'         => [
            'code'      => 'LA',
            'native'    => 'ລາວ',
            'localized' => 'Лаос',
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
        'mai'        => [
            'code'      => 'IN',
            'native'    => 'भारत',
            'localized' => 'Індія',
        ],
        'mg'         => [
            'code'      => 'MG',
            'native'    => 'Madagasikara',
            'localized' => 'Мадагаскар',
        ],
        'mi'         => [
            'code'      => 'NZ',
            'native'    => 'Aotearoa',
            'localized' => 'Нова Зеландія',
        ],
        'mk'         => [
            'code'      => 'MK',
            'native'    => 'Северна Македонија',
            'localized' => 'Північна Македонія',
        ],
        'ml'         => [
            'code'      => 'IN',
            'native'    => 'ഇന്ത്യ',
            'localized' => 'Індія',
        ],
        'mn'         => [
            'code'      => 'MN',
            'native'    => 'Монгол',
            'localized' => 'Монголія',
        ],
        'mni_Mtei'   => [
            'code'      => 'IN',
            'native'    => 'India',
            'localized' => 'Індія',
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
        'mt'         => [
            'code'      => 'MT',
            'native'    => 'Malta',
            'localized' => 'Мальта',
        ],
        'my'         => [
            'code'      => 'MM',
            'native'    => 'မြန်မာ',
            'localized' => 'Мʼянма (Бірма)',
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
        'om'         => [
            'code'      => 'ET',
            'native'    => 'Itoophiyaa',
            'localized' => 'Ефіопія',
        ],
        'or'         => [
            'code'      => 'IN',
            'native'    => 'ଭାରତ',
            'localized' => 'Індія',
        ],
        'pa'         => [
            'code'      => 'IN',
            'native'    => 'ਭਾਰਤ',
            'localized' => 'Індія',
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
        'qu'         => [
            'code'      => 'PE',
            'native'    => 'Perú',
            'localized' => 'Перу',
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
        'rw'         => [
            'code'      => 'RW',
            'native'    => 'U Rwanda',
            'localized' => 'Руанда',
        ],
        'sa'         => [
            'code'      => 'IN',
            'native'    => 'भारतः',
            'localized' => 'Індія',
        ],
        'sc'         => [
            'code'      => 'IT',
            'native'    => 'Itàlia',
            'localized' => 'Італія',
        ],
        'sd'         => [
            'code'      => 'PK',
            'native'    => 'پاڪستان',
            'localized' => 'Пакистан',
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
        'sn'         => [
            'code'      => 'ZW',
            'native'    => 'Zimbabwe',
            'localized' => 'Зімбабве',
        ],
        'so'         => [
            'code'      => 'SO',
            'native'    => 'Soomaaliya',
            'localized' => 'Сомалі',
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
            'native'    => 'Serbia',
            'localized' => 'Сербія',
        ],
        'sr_Latn_ME' => [
            'code'      => 'ME',
            'native'    => 'Montenegro',
            'localized' => 'Чорногорія',
        ],
        'su'         => [
            'code'      => 'ID',
            'native'    => 'Indonesia',
            'localized' => 'Індонезія',
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
        'ta'         => [
            'code'      => 'IN',
            'native'    => 'இந்தியா',
            'localized' => 'Індія',
        ],
        'te'         => [
            'code'      => 'IN',
            'native'    => 'భారతదేశం',
            'localized' => 'Індія',
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
        'ti'         => [
            'code'      => 'ET',
            'native'    => 'ኢትዮጵያ',
            'localized' => 'Ефіопія',
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
        'tt'         => [
            'code'      => 'RU',
            'native'    => 'Россия',
            'localized' => 'Росія',
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
            'native'    => 'Uzbekistan',
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
        'xh'         => [
            'code'      => 'ZA',
            'native'    => 'Emzantsi Afrika',
            'localized' => 'Південно-Африканська Республіка',
        ],
        'yi'         => [
            'code'      => '001',
            'native'    => 'וועלט',
            'localized' => 'Світ',
        ],
        'yo'         => [
            'code'      => 'NG',
            'native'    => 'Nàìjíríà',
            'localized' => 'Нігерія',
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
        'zu'         => [
            'code'      => 'ZA',
            'native'    => 'Iningizimu Afrika',
            'localized' => 'Південно-Африканська Республіка',
        ],
    ]);
