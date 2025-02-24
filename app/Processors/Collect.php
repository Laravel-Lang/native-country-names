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

namespace LaravelLang\Dev\Processors;

use DragonCode\Support\Facades\Helpers\Str;
use LaravelLang\Dev\Integrations\Cldr as CldrIntegration;
use LaravelLang\NativeCountryNames\CountryNames;
use LaravelLang\NativeCountryNames\Data\CountryData;
use Symfony\Component\Console\Output\OutputInterface;

class Collect extends Processor
{
    protected array $collection = [];

    public function __construct(
        OutputInterface $output,
        protected CldrIntegration $cldr = new CldrIntegration()
    ) {
        parent::__construct($output);
    }

    public function handle(): void
    {
        $this->output->writeln('Collecting locales...');
        $this->collectLocales();

        $this->output->writeln('Store locales...');
        $this->storeLocales();
    }

    protected function collectLocales(): void
    {
        foreach ($this->locales() as $first) {
            $this->collection[$first]['tl'] = $this->data('PH', 'Philippines', 'Philippines');

            foreach ($this->locales() as $second) {
                $data = $this->data(
                    $this->findCode($second),
                    $this->findName($second, $second),
                    $this->findName($second, $first)
                );

                $this->collection[$first][$second] = $data;

                if ($first === $second) {
                    $this->collection[CountryNames::$default][$first] = $data;
                }
            }
        }
    }

    protected function data(string $code, string $name, string $localized): array
    {
        return (new CountryData($code, Str::title($name), Str::title($localized)))->toArray();
    }

    protected function storeLocales(): void
    {
        foreach ($this->collection as $locale => $values) {
            $this->store($locale, $values);
        }
    }

    protected function findName(string $locale, string $forLocale): string
    {
        return $this->cldr->name($locale, $forLocale);
    }

    protected function findCode(string $locale): string
    {
        return $this->cldr->code($locale);
    }
}
