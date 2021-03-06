<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\TranslatedType;

use Simivar\PocztaPolskaTracking\Type\Jednostka;

/**
 * @see Jednostka
 */
final class Office
{
    private ?OfficeData $officeData;
    private ?string $name;

    public function __construct(?OfficeData $officeData, ?string $name)
    {
        $this->officeData = $officeData;
        $this->name = $name;
    }

    public function getOfficeData(): ?OfficeData
    {
        return $this->officeData;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public static function fromJednostka(Jednostka $jednostka): self
    {
        $officeData = null;
        if ($jednostka->getDaneSzczegolowe() !== null) {
            $officeData = OfficeData::fromSzczDaneJednostki($jednostka->getDaneSzczegolowe());
        }

        return new self($officeData, $jednostka->getNazwa());
    }
}
