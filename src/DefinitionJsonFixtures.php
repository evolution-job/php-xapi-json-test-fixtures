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
 * JSON encoded xAPI activity definition fixtures.
 *
 * These fixtures are borrowed from the
 * {@link https://github.com/adlnet/xAPI_LRS_Test Experience API Learning Record Store Conformance Test} package.
 */
class DefinitionJsonFixtures extends JsonFixtures
{
    public const DIRECTORY = 'Definition';

    public static function getEmptyDefinition(): string
    {
        return self::load('empty');
    }

    public static function getTypicalDefinition(): string
    {
        return self::load('typical');
    }

    public static function getNameDefinition(): string
    {
        return self::load('name');
    }

    public static function getDescriptionDefinition(): string
    {
        return self::load('description');
    }

    public static function getTypeDefinition(): string
    {
        return self::load('type');
    }

    public static function getMoreInfoDefinition(): string
    {
        return self::load('more_info');
    }

    public static function getExtensionsDefinition(): string
    {
        return self::load('extensions');
    }

    public static function getEmptyExtensionsDefinition(): string
    {
        return self::load('empty_extensions');
    }

    public static function getAllPropertiesDefinition(): string
    {
        return self::load('all_properties');
    }

    public static function getTrueFalseDefinition(): string
    {
        return self::load('true_false');
    }

    public static function getFillInDefinition(): string
    {
        return self::load('fill_in');
    }

    public static function getNumericDefinition(): string
    {
        return self::load('numeric');
    }

    public static function getOtherDefinition(): string
    {
        return self::load('other');
    }

    public static function getOtherWithCorrectResponsesPatternDefinition(): string
    {
        return self::load('other_with_correct_responses_pattern');
    }

    public static function getChoiceDefinition(): string
    {
        return self::load('choice');
    }

    public static function getSequencingDefinition(): string
    {
        return self::load('sequencing');
    }

    public static function getLikertDefinition(): string
    {
        return self::load('likert');
    }

    public static function getMatchingDefinition(): string
    {
        return self::load('matching');
    }

    public static function getPerformanceDefinition(): string
    {
        return self::load('performance');
    }

    public static function getForQueryDefinition(): string
    {
        return self::load('for_query');
    }
}
