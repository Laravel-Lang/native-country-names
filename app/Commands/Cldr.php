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

namespace LaravelLang\Dev\Commands;

use LaravelLang\Dev\Processors\Cldr as CldrProcessor;

class Cldr extends Command
{
    protected string $info = 'Updating CLDR Data';

    protected string $processor = CldrProcessor::class;
}
