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

use LaravelLang\NativeCountryNames\Helpers\Arr;
use LaravelLang\NativeCountryNames\Native;

it('should not be a clone of the English version')
    ->expect(fn () => Native::get())
    ->toBeSameCount()
    ->toBe(Arr::sort(sourceLocale('_native')))
    ->not->toBe(Arr::sort(sourceLocale('en')))
    ->not->toBeEmpty();
