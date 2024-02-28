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
 * JSON encoded xAPI context activities fixtures.
 *
 * These fixtures are borrowed from the
 * {@link https://github.com/adlnet/xAPI_LRS_Test Experience API Learning Record Store Conformance Test} package.
 */
class ContextActivitiesJsonFixtures extends JsonFixtures
{
    public const DIRECTORY = 'ContextActivities';

    public static function getEmptyContextActivities(): string
    {
        return self::load('empty');
    }

    public static function getTypicalContextActivities(): string
    {
        return self::load('typical');
    }

    public static function getCategoryOnlyContextActivities(): string
    {
        return self::load('category_only');
    }

    public static function getParentOnlyContextActivities(): string
    {
        return self::load('parent_only');
    }

    public static function getGroupingOnlyContextActivities(): string
    {
        return self::load('grouping_only');
    }

    public static function getOtherOnlyContextActivities(): string
    {
        return self::load('other_only');
    }

    public static function getAllPropertiesEmptyActivities(): string
    {
        return self::load('all_properties_empty');
    }

    public static function getAllPropertiesActivities(): string
    {
        return self::load('all_properties');
    }
}
