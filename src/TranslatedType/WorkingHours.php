<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\TranslatedType;

use Simivar\PocztaPolskaTracking\Type\GodzinyPracy;

/**
 * @see GodzinyPracy
 */
final class WorkingHours
{
    private WorkingHoursWithComments $workingDays;
    private WorkingHoursWithComments $sundaysAndHolidays;
    private WorkingHoursWithComments $saturdays;

    public function __construct(WorkingHoursWithComments $workingDays, WorkingHoursWithComments $sundaysAndHolidays, WorkingHoursWithComments $saturdays)
    {
        $this->workingDays = $workingDays;
        $this->sundaysAndHolidays = $sundaysAndHolidays;
        $this->saturdays = $saturdays;
    }

    public function getWorkingDays(): WorkingHoursWithComments
    {
        return $this->workingDays;
    }

    public function getSundaysAndHolidays(): WorkingHoursWithComments
    {
        return $this->sundaysAndHolidays;
    }

    public function getSaturdays(): WorkingHoursWithComments
    {
        return $this->saturdays;
    }

    public static function fromGodzinyPracy(GodzinyPracy $godzinyPracy): self
    {
        return new self(
            WorkingHoursWithComments::fromGodzinyZUwagami($godzinyPracy->getDniRobocze()),
            WorkingHoursWithComments::fromGodzinyZUwagami($godzinyPracy->getNiedzISw()),
            WorkingHoursWithComments::fromGodzinyZUwagami($godzinyPracy->getSoboty()),
        );
    }
}
