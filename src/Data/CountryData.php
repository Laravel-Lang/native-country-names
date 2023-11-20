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

namespace LaravelLang\NativeCountryNames\Data;

use DragonCode\Support\Facades\Helpers\Str;
use Illuminate\Contracts\Support\Arrayable;

class CountryData implements Arrayable
{
    public function __construct(
        public string $code,
        public string $name
    ) {
        $this->name = Str::title($this->name);
    }

    public function toArray(): array
    {
        return [
            'code' => $this->code,
            'name' => $this->name,
        ];
    }
}
