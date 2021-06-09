<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\TranslatedType;

use Simivar\PocztaPolskaTracking\Type\GodzinyZUwagami;

/**
 * @see GodzinyZUwagami
 */
final class WorkingHoursWithComments
{
    private ?string $workingHours;
    private ?string $comments;

    public function __construct(?string $workingHours, ?string $comments)
    {
        $this->workingHours = $workingHours;
        $this->comments = $comments;
    }

    public function getWorkingHours(): ?string
    {
        return $this->workingHours;
    }

    public function getComments(): ?string
    {
        return $this->comments;
    }

    public static function fromGodzinyZUwagami(GodzinyZUwagami $godzinyZUwagami): self
    {
        return new self($godzinyZUwagami->getGodziny(), $godzinyZUwagami->getUwagi());
    }
}
