<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\Type;

/**
 * @internal
 */
final class GodzinyPracy
{
    private GodzinyZUwagami $dniRobocze;
    private GodzinyZUwagami $niedzISw;
    private GodzinyZUwagami $soboty;

    public function __construct(GodzinyZUwagami $dniRobocze, GodzinyZUwagami $niedzISw, GodzinyZUwagami $soboty)
    {
        $this->dniRobocze = $dniRobocze;
        $this->niedzISw = $niedzISw;
        $this->soboty = $soboty;
    }

    public function getDniRobocze(): GodzinyZUwagami
    {
        return $this->dniRobocze;
    }

    public function getNiedzISw(): GodzinyZUwagami
    {
        return $this->niedzISw;
    }

    public function getSoboty(): GodzinyZUwagami
    {
        return $this->soboty;
    }
}
