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
            'code' => 'ZA',
            'name' => 'Afrique Du Sud',
        ],
        'ar'         => [
            'code' => 'EG',
            'name' => 'Égypte',
        ],
        'az'         => [
            'code' => 'AZ',
            'name' => 'Azerbaïdjan',
        ],
        'be'         => [
            'code' => 'BY',
            'name' => 'Biélorussie',
        ],
        'bg'         => [
            'code' => 'BG',
            'name' => 'Bulgarie',
        ],
        'bn'         => [
            'code' => 'BD',
            'name' => 'Bangladesh',
        ],
        'bs'         => [
            'code' => 'BA',
            'name' => 'Bosnie-Herzégovine',
        ],
        'ca'         => [
            'code' => 'ES',
            'name' => 'Espagne',
        ],
        'cs'         => [
            'code' => 'CZ',
            'name' => 'Tchéquie',
        ],
        'cy'         => [
            'code' => 'GB',
            'name' => 'Royaume-Uni',
        ],
        'da'         => [
            'code' => 'DK',
            'name' => 'Danemark',
        ],
        'de'         => [
            'code' => 'DE',
            'name' => 'Allemagne',
        ],
        'de_CH'      => [
            'code' => 'CH',
            'name' => 'Suisse',
        ],
        'el'         => [
            'code' => 'GR',
            'name' => 'Grèce',
        ],
        'en'         => [
            'code' => 'US',
            'name' => 'États-Unis',
        ],
        'es'         => [
            'code' => 'ES',
            'name' => 'Espagne',
        ],
        'et'         => [
            'code' => 'EE',
            'name' => 'Estonie',
        ],
        'eu'         => [
            'code' => 'ES',
            'name' => 'Espagne',
        ],
        'fa'         => [
            'code' => 'IR',
            'name' => 'Iran',
        ],
        'fi'         => [
            'code' => 'FI',
            'name' => 'Finlande',
        ],
        'fil'        => [
            'code' => 'PH',
            'name' => 'Philippines',
        ],
        'fr'         => [
            'code' => 'FR',
            'name' => 'France',
        ],
        'gl'         => [
            'code' => 'ES',
            'name' => 'Espagne',
        ],
        'gu'         => [
            'code' => 'IN',
            'name' => 'Inde',
        ],
        'he'         => [
            'code' => 'IL',
            'name' => 'Israël',
        ],
        'hi'         => [
            'code' => 'IN',
            'name' => 'Inde',
        ],
        'hr'         => [
            'code' => 'HR',
            'name' => 'Croatie',
        ],
        'hu'         => [
            'code' => 'HU',
            'name' => 'Hongrie',
        ],
        'hy'         => [
            'code' => 'AM',
            'name' => 'Arménie',
        ],
        'id'         => [
            'code' => 'ID',
            'name' => 'Indonésie',
        ],
        'is'         => [
            'code' => 'IS',
            'name' => 'Islande',
        ],
        'it'         => [
            'code' => 'IT',
            'name' => 'Italie',
        ],
        'ja'         => [
            'code' => 'JP',
            'name' => 'Japon',
        ],
        'ka'         => [
            'code' => 'GE',
            'name' => 'Géorgie',
        ],
        'kk'         => [
            'code' => 'KZ',
            'name' => 'Kazakhstan',
        ],
        'km'         => [
            'code' => 'KH',
            'name' => 'Cambodge',
        ],
        'kn'         => [
            'code' => 'IN',
            'name' => 'Inde',
        ],
        'ko'         => [
            'code' => 'KR',
            'name' => 'Corée Du Sud',
        ],
        'lt'         => [
            'code' => 'LT',
            'name' => 'Lituanie',
        ],
        'lv'         => [
            'code' => 'LV',
            'name' => 'Lettonie',
        ],
        'mk'         => [
            'code' => 'MK',
            'name' => 'Macédoine Du Nord',
        ],
        'mn'         => [
            'code' => 'MN',
            'name' => 'Mongolie',
        ],
        'mr'         => [
            'code' => 'IN',
            'name' => 'Inde',
        ],
        'ms'         => [
            'code' => 'MY',
            'name' => 'Malaisie',
        ],
        'nb'         => [
            'code' => 'NO',
            'name' => 'Norvège',
        ],
        'ne'         => [
            'code' => 'NP',
            'name' => 'Népal',
        ],
        'nl'         => [
            'code' => 'NL',
            'name' => 'Pays-Bas',
        ],
        'nn'         => [
            'code' => 'NO',
            'name' => 'Norvège',
        ],
        'oc'         => [
            'code' => 'FR',
            'name' => 'France',
        ],
        'pl'         => [
            'code' => 'PL',
            'name' => 'Pologne',
        ],
        'ps'         => [
            'code' => 'AF',
            'name' => 'Afghanistan',
        ],
        'pt'         => [
            'code' => 'BR',
            'name' => 'Brésil',
        ],
        'pt_BR'      => [
            'code' => 'BR',
            'name' => 'Brésil',
        ],
        'ro'         => [
            'code' => 'RO',
            'name' => 'Roumanie',
        ],
        'ru'         => [
            'code' => 'RU',
            'name' => 'Russie',
        ],
        'sc'         => [
            'code' => 'IT',
            'name' => 'Italie',
        ],
        'si'         => [
            'code' => 'LK',
            'name' => 'Sri Lanka',
        ],
        'sk'         => [
            'code' => 'SK',
            'name' => 'Slovaquie',
        ],
        'sl'         => [
            'code' => 'SI',
            'name' => 'Slovénie',
        ],
        'sq'         => [
            'code' => 'AL',
            'name' => 'Albanie',
        ],
        'sr_Cyrl'    => [
            'code' => 'RS',
            'name' => 'Serbie',
        ],
        'sr_Latn'    => [
            'code' => 'RS',
            'name' => 'Serbie',
        ],
        'sr_Latn_ME' => [
            'code' => 'ME',
            'name' => 'Monténégro',
        ],
        'sv'         => [
            'code' => 'SE',
            'name' => 'Suède',
        ],
        'sw'         => [
            'code' => 'TZ',
            'name' => 'Tanzanie',
        ],
        'tg'         => [
            'code' => 'TJ',
            'name' => 'Tadjikistan',
        ],
        'th'         => [
            'code' => 'TH',
            'name' => 'Thaïlande',
        ],
        'tk'         => [
            'code' => 'TM',
            'name' => 'Turkménistan',
        ],
        'tl'         => [
            'code' => 'PH',
            'name' => 'Philippines',
        ],
        'tr'         => [
            'code' => 'TR',
            'name' => 'Turquie',
        ],
        'ug'         => [
            'code' => 'CN',
            'name' => 'Chine',
        ],
        'uk'         => [
            'code' => 'UA',
            'name' => 'Ukraine',
        ],
        'ur'         => [
            'code' => 'PK',
            'name' => 'Pakistan',
        ],
        'uz_Cyrl'    => [
            'code' => 'UZ',
            'name' => 'Ouzbékistan',
        ],
        'uz_Latn'    => [
            'code' => 'UZ',
            'name' => 'Ouzbékistan',
        ],
        'vi'         => [
            'code' => 'VN',
            'name' => 'Viêt Nam',
        ],
        'zh_CN'      => [
            'code' => 'CN',
            'name' => 'Chine',
        ],
        'zh_HK'      => [
            'code' => 'HK',
            'name' => 'R.a.s. Chinoise De Hong Kong',
        ],
        'zh_TW'      => [
            'code' => 'TW',
            'name' => 'Taïwan',
        ],
    ]);

it('should check the returned list in Ukrainian')
    ->expect(fn () => flatten(CountryNames::get(Locale::Ukrainian, SortBy::Key)))
    ->toBe([
        'af'         => [
            'code' => 'ZA',
            'name' => 'Південно-Африканська Республіка',
        ],
        'ar'         => [
            'code' => 'EG',
            'name' => 'Єгипет',
        ],
        'az'         => [
            'code' => 'AZ',
            'name' => 'Азербайджан',
        ],
        'be'         => [
            'code' => 'BY',
            'name' => 'Білорусь',
        ],
        'bg'         => [
            'code' => 'BG',
            'name' => 'Болгарія',
        ],
        'bn'         => [
            'code' => 'BD',
            'name' => 'Бангладеш',
        ],
        'bs'         => [
            'code' => 'BA',
            'name' => 'Боснія І Герцеговина',
        ],
        'ca'         => [
            'code' => 'ES',
            'name' => 'Іспанія',
        ],
        'cs'         => [
            'code' => 'CZ',
            'name' => 'Чехія',
        ],
        'cy'         => [
            'code' => 'GB',
            'name' => 'Велика Британія',
        ],
        'da'         => [
            'code' => 'DK',
            'name' => 'Данія',
        ],
        'de'         => [
            'code' => 'DE',
            'name' => 'Німеччина',
        ],
        'de_CH'      => [
            'code' => 'CH',
            'name' => 'Швейцарія',
        ],
        'el'         => [
            'code' => 'GR',
            'name' => 'Греція',
        ],
        'en'         => [
            'code' => 'US',
            'name' => 'Сполучені Штати',
        ],
        'es'         => [
            'code' => 'ES',
            'name' => 'Іспанія',
        ],
        'et'         => [
            'code' => 'EE',
            'name' => 'Естонія',
        ],
        'eu'         => [
            'code' => 'ES',
            'name' => 'Іспанія',
        ],
        'fa'         => [
            'code' => 'IR',
            'name' => 'Іран',
        ],
        'fi'         => [
            'code' => 'FI',
            'name' => 'Фінляндія',
        ],
        'fil'        => [
            'code' => 'PH',
            'name' => 'Філіппіни',
        ],
        'fr'         => [
            'code' => 'FR',
            'name' => 'Франція',
        ],
        'gl'         => [
            'code' => 'ES',
            'name' => 'Іспанія',
        ],
        'gu'         => [
            'code' => 'IN',
            'name' => 'Індія',
        ],
        'he'         => [
            'code' => 'IL',
            'name' => 'Ізраїль',
        ],
        'hi'         => [
            'code' => 'IN',
            'name' => 'Індія',
        ],
        'hr'         => [
            'code' => 'HR',
            'name' => 'Хорватія',
        ],
        'hu'         => [
            'code' => 'HU',
            'name' => 'Угорщина',
        ],
        'hy'         => [
            'code' => 'AM',
            'name' => 'Вірменія',
        ],
        'id'         => [
            'code' => 'ID',
            'name' => 'Індонезія',
        ],
        'is'         => [
            'code' => 'IS',
            'name' => 'Ісландія',
        ],
        'it'         => [
            'code' => 'IT',
            'name' => 'Італія',
        ],
        'ja'         => [
            'code' => 'JP',
            'name' => 'Японія',
        ],
        'ka'         => [
            'code' => 'GE',
            'name' => 'Грузія',
        ],
        'kk'         => [
            'code' => 'KZ',
            'name' => 'Казахстан',
        ],
        'km'         => [
            'code' => 'KH',
            'name' => 'Камбоджа',
        ],
        'kn'         => [
            'code' => 'IN',
            'name' => 'Індія',
        ],
        'ko'         => [
            'code' => 'KR',
            'name' => 'Південна Корея',
        ],
        'lt'         => [
            'code' => 'LT',
            'name' => 'Литва',
        ],
        'lv'         => [
            'code' => 'LV',
            'name' => 'Латвія',
        ],
        'mk'         => [
            'code' => 'MK',
            'name' => 'Північна Македонія',
        ],
        'mn'         => [
            'code' => 'MN',
            'name' => 'Монголія',
        ],
        'mr'         => [
            'code' => 'IN',
            'name' => 'Індія',
        ],
        'ms'         => [
            'code' => 'MY',
            'name' => 'Малайзія',
        ],
        'nb'         => [
            'code' => 'NO',
            'name' => 'Норвегія',
        ],
        'ne'         => [
            'code' => 'NP',
            'name' => 'Непал',
        ],
        'nl'         => [
            'code' => 'NL',
            'name' => 'Нідерланди',
        ],
        'nn'         => [
            'code' => 'NO',
            'name' => 'Норвегія',
        ],
        'oc'         => [
            'code' => 'FR',
            'name' => 'Франція',
        ],
        'pl'         => [
            'code' => 'PL',
            'name' => 'Польща',
        ],
        'ps'         => [
            'code' => 'AF',
            'name' => 'Афганістан',
        ],
        'pt'         => [
            'code' => 'BR',
            'name' => 'Бразилія',
        ],
        'pt_BR'      => [
            'code' => 'BR',
            'name' => 'Бразилія',
        ],
        'ro'         => [
            'code' => 'RO',
            'name' => 'Румунія',
        ],
        'ru'         => [
            'code' => 'RU',
            'name' => 'Росія',
        ],
        'sc'         => [
            'code' => 'IT',
            'name' => 'Італія',
        ],
        'si'         => [
            'code' => 'LK',
            'name' => 'Шрі-Ланка',
        ],
        'sk'         => [
            'code' => 'SK',
            'name' => 'Словаччина',
        ],
        'sl'         => [
            'code' => 'SI',
            'name' => 'Словенія',
        ],
        'sq'         => [
            'code' => 'AL',
            'name' => 'Албанія',
        ],
        'sr_Cyrl'    => [
            'code' => 'RS',
            'name' => 'Сербія',
        ],
        'sr_Latn'    => [
            'code' => 'RS',
            'name' => 'Сербія',
        ],
        'sr_Latn_ME' => [
            'code' => 'ME',
            'name' => 'Чорногорія',
        ],
        'sv'         => [
            'code' => 'SE',
            'name' => 'Швеція',
        ],
        'sw'         => [
            'code' => 'TZ',
            'name' => 'Танзанія',
        ],
        'tg'         => [
            'code' => 'TJ',
            'name' => 'Таджикистан',
        ],
        'th'         => [
            'code' => 'TH',
            'name' => 'Таїланд',
        ],
        'tk'         => [
            'code' => 'TM',
            'name' => 'Туркменістан',
        ],
        'tl'         => [
            'code' => 'PH',
            'name' => 'Філіппіни',
        ],
        'tr'         => [
            'code' => 'TR',
            'name' => 'Туреччина',
        ],
        'ug'         => [
            'code' => 'CN',
            'name' => 'Китай',
        ],
        'uk'         => [
            'code' => 'UA',
            'name' => 'Україна',
        ],
        'ur'         => [
            'code' => 'PK',
            'name' => 'Пакистан',
        ],
        'uz_Cyrl'    => [
            'code' => 'UZ',
            'name' => 'Узбекистан',
        ],
        'uz_Latn'    => [
            'code' => 'UZ',
            'name' => 'Узбекистан',
        ],
        'vi'         => [
            'code' => 'VN',
            'name' => 'Вʼєтнам',
        ],
        'zh_CN'      => [
            'code' => 'CN',
            'name' => 'Китай',
        ],
        'zh_HK'      => [
            'code' => 'HK',
            'name' => 'Гонконг, Оар Китаю',
        ],
        'zh_TW'      => [
            'code' => 'TW',
            'name' => 'Тайвань',
        ],
    ]);
