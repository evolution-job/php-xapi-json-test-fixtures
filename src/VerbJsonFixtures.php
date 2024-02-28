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
 * JSON encoded xAPI verb fixtures.
 *
 * These fixtures are borrowed from the
 * {@link https://github.com/adlnet/xAPI_LRS_Test Experience API Learning Record Store Conformance Test} package.
 */
class VerbJsonFixtures extends JsonFixtures
{
    public const DIRECTORY = 'Verb';

    public static function getTypicalVerb(): string
    {
        return self::load('typical');
    }

    public static function getVoidingVerb(): string
    {
        return self::load('voiding');
    }

    public static function getIdVerb(): string
    {
        return self::load('id');
    }

    public static function getIdAndDisplayVerb(): string
    {
        return self::load('id_and_display');
    }

    public static function getForQueryVerb(): string
    {
        return self::load('for_query');
    }
}
