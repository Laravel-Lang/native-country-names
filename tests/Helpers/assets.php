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
use LaravelLang\NativeCountryNames\Enums\SortBy;
use LaravelLang\NativeCountryNames\Helpers\Arr;
use PHPUnit\Framework\Assert;

expect()->extend('toBeSameCount', function () {
    Assert::assertCount(count(Locale::values()), $this->value);

    return $this;
});

expect()->extend('toBeLocale', function (Locale|string $locale, SortBy $sortBy = SortBy::None) {
    $values = Arr::sortBy(sourceLocale($locale->value ?? $locale), $sortBy);

    Assert::assertSame($values, flatten($this->value));

    return $this;
});

expect()->extend('toBeCompileLocales', function (SortBy $sortBy = SortBy::None) {
    return $this->toBeLocale('_native', $sortBy);
});
