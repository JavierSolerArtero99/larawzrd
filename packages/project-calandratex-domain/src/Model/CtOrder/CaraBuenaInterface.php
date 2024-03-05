<?php

namespace Wzrd\CalandraTexDomain\Model\CtOrder;

interface CaraBuenaInterface
{
    const DENTRO = "ancho";
    const DENTRO_LABEL = "Ancho";
    const FUERA = "lomo";
    const FUERA_LABEL = "Lomo";

    const SELECT_VALUES = [
        self::DENTRO => self::DENTRO_LABEL,
        self::FUERA => self::FUERA_LABEL,
    ];

    const VALUES = [
        self::DENTRO,
        self::FUERA,
    ];
}
