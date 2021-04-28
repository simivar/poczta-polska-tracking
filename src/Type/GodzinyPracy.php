<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaWebservice\Type;

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

    public function withDniRobocze(GodzinyZUwagami $dniRobocze): self
    {
        $new = clone $this;
        $new->dniRobocze = $dniRobocze;

        return $new;
    }

    public function getNiedzISw(): GodzinyZUwagami
    {
        return $this->niedzISw;
    }

    public function withNiedzISw(GodzinyZUwagami $niedzISw): self
    {
        $new = clone $this;
        $new->niedzISw = $niedzISw;

        return $new;
    }

    public function getSoboty(): GodzinyZUwagami
    {
        return $this->soboty;
    }

    public function withSoboty(GodzinyZUwagami $soboty): self
    {
        $new = clone $this;
        $new->soboty = $soboty;

        return $new;
    }
}
