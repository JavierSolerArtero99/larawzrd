<?php

namespace Wzrd\CalandraTexDomain\Model\CtOrder;

interface PresentationInterface
{
    const ANCHO = "ancho";
    const ANCHO_LABEL = "Ancho";
    const LOMO = "lomo";
    const LOMO_LABEL = "Lomo";
    const CORTADO = "cortado";
    const CORTADO_LABEL = "Cortado";

    const SELECT_VALUES = [
        self::ANCHO => self::ANCHO_LABEL,
        self::LOMO => self::LOMO_LABEL,
        self::CORTADO => self::CORTADO_LABEL,
    ];

    const VALUES = [
        self::ANCHO,
        self::LOMO,
        self::CORTADO,
    ];
}
