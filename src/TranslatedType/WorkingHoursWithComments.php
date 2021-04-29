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

    public function withWorkingHours(?string $workingHours): self
    {
        $new = clone $this;
        $new->workingHours = $workingHours;

        return $new;
    }

    public function getComments(): ?string
    {
        return $this->comments;
    }

    public function withComments(?string $comments): self
    {
        $new = clone $this;
        $new->comments = $comments;

        return $new;
    }

    public static function fromGodzinyZUwagami(GodzinyZUwagami $godzinyZUwagami): self
    {
        return new self($godzinyZUwagami->getGodziny(), $godzinyZUwagami->getUwagi());
    }
}
