<?php

namespace Wzrd\HorusDomain\Model;

interface InteractionInterface
{
    const IOS = "ios";
    const ANDROID = "android";

    const PLATFORMS = [
        self::IOS,
        self::ANDROID,
    ];

}
