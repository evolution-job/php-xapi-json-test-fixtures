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
 * JSON encoded state fixtures.
 *
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
class StateJsonFixtures extends JsonFixtures
{
    public const DIRECTORY = 'State';

    public static function getMinimalState(): string
    {
        return static::load('minimal');
    }

    public static function getTypicalState(): string
    {
        return static::load('typical');
    }

    public static function getAllPropertiesState(): string
    {
        return static::load('all_properties');
    }

    public static function getCustomState(): string
    {
        return static::load('custom');
    }
}
