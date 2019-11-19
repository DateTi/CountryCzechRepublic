<?php

namespace DateTi\Countries\Czech;

use DateTi\Holidays\Czech\Holidays;
use DateTi\Holidays\EasterHolidayInterface;
use DateTi\Holidays\HolidaysInterface;
use DateTi\Localization\Czech\Localization;
use DateTi\Localization\LocalizationInterface;

class Country implements CountryInterface
{
    /** @var HolidaysInterface */
    private $holidays;

    /** @var LocalizationInterface */
    private $localization;

    public function __construct(EasterHolidayInterface $easterHoliday)
    {
        $this->holidays = new Holidays($easterHoliday);
    }

    public function getHolidays(): HolidaysInterface
    {
        return $this->holidays;
    }

    public function getLocalization(): LocalizationInterface
    {
        if ($this->localization === null) {
            $this->localization = new Localization();
        }

        return $this->localization;
    }
}
