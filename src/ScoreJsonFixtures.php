<?php

/*
 * This file is part of the xAPI package.
 *
 * (c) Christian Flothmann <christian.flothmann@xabbuh.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace XApi\Fixtures\Json;

/**
 * JSON encoded xAPI score fixtures.
 *
 * These fixtures are borrowed from the
 * {@link https://github.com/adlnet/xAPI_LRS_Test Experience API Learning Record Store Conformance Test} package.
 */
class ScoreJsonFixtures extends JsonFixtures
{
    public const DIRECTORY = 'Score';

    public static function getEmptyScore(): string
    {
        return self::load('empty_score');
    }

    public static function getTypicalScore(): string
    {
        return self::load('typical_score');
    }

    public static function getScaledScore(): string
    {
        return self::load('scaled_score');
    }

    public static function getRawScore(): string
    {
        return self::load('raw_score');
    }

    public static function getMinScore(): string
    {
        return self::load('min_score');
    }

    public static function getMaxScore(): string
    {
        return self::load('max_score');
    }

    public static function getScaledAndRawScore(): string
    {
        return self::load('scaled_and_raw_score');
    }

    public static function getScaledAndMinScore(): string
    {
        return self::load('scaled_and_min_score');
    }

    public static function getScaledAndMaxScore(): string
    {
        return self::load('scaled_and_max_score');
    }

    public static function getRawAndMinScore(): string
    {
        return self::load('raw_and_min_score');
    }

    public static function getRawAndMaxScore(): string
    {
        return self::load('raw_and_max_score');
    }

    public static function getMinAndMaxScore(): string
    {
        return self::load('min_and_max_score');
    }

    public static function getScaledRawAndMinScore(): string
    {
        return self::load('scaled_raw_and_min_score');
    }

    public static function getScaledRawAndMaxScore(): string
    {
        return self::load('scaled_raw_and_max_score');
    }

    public static function getRawMinAndMaxScore(): string
    {
        return self::load('raw_min_and_max_score');
    }

    public static function getAllPropertiesScore(): string
    {
        return self::load('all_properties_score');
    }
}
