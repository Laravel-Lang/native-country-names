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
use LaravelLang\NativeCountryNames\Enums\SortBy;
use LaravelLang\NativeCountryNames\Helpers\Arr;
use PHPUnit\Framework\Assert;

expect()->extend('toBeSameCount', function () {
    Assert::assertCount(count(Locale::values()), $this->value);

    return $this;
});

expect()->extend('toBeLocale', function (Locale|string $locale, SortBy $sortBy = SortBy::Value) {
    $values = Arr::sortBy(sourceLocale($locale->value ?? $locale), $sortBy);

    return $this->toBe($values);
});

expect()->extend('toBeCompileLocales', function (SortBy $sortBy = SortBy::Value) {
    $result = [];

    foreach ($this->value as $key => $value) {
        $result[$key] = sourceLocale($key)[$key];
    }

    $this->toBe(Arr::sortBy($result, $sortBy));

    return $this;
});
