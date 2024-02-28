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
 * JSON encoded xAPI context fixtures.
 *
 * These fixtures are borrowed from the
 * {@link https://github.com/adlnet/xAPI_LRS_Test Experience API Learning Record Store Conformance Test} package.
 */
class ContextJsonFixtures extends JsonFixtures
{
    public const DIRECTORY = 'Context';

    public static function getEmptyContext(): string
    {
        return self::load('empty');
    }

    public static function getTypicalContext(): string
    {
        return self::load('typical');
    }

    public static function getTypicalAgentInstructorContext(): string
    {
        return self::load('typical_agent_instructor');
    }

    public static function getMboxAgentInstructorContext(): string
    {
        return self::load('mbox_agent_instructor');
    }

    public static function getMboxAgentInstructorContextWithType(): string
    {
        return self::load('mbox_agent_with_type_instructor');
    }

    public static function getMboxSha1SumAgentInstructorContext(): string
    {
        return self::load('mbox_sha1_sum_agent_instructor');
    }

    public static function getMboxSha1SumAgentInstructorContextWithType(): string
    {
        return self::load('mbox_sha1_sum_agent_with_type_instructor');
    }

    public static function getOpenIdAgentInstructorContext(): string
    {
        return self::load('open_id_agent_instructor');
    }

    public static function getOpenIdAgentInstructorContextWithType(): string
    {
        return self::load('open_id_agent_with_type_instructor');
    }

    public static function getAccountAgentInstructorContext(): string
    {
        return self::load('account_agent_instructor');
    }

    public static function getAccountAgentInstructorContextWithType(): string
    {
        return self::load('account_agent_with_type_instructor');
    }

    public static function getTypicalGroupTeamContext(): string
    {
        return self::load('typical_group_team');
    }

    public static function getStatementOnlyContext(): string
    {
        return self::load('statement_only');
    }

    public static function getExtensionsOnlyContext(): string
    {
        return self::load('extensions_only');
    }

    public static function getEmptyExtensionsOnlyContext(): string
    {
        return self::load('empty_extensions_only');
    }

    public static function getEmptyContextActivitiesContext(): string
    {
        return self::load('empty_context_activities');
    }

    public static function getEmptyContextActivitiesAllPropertiesEmptyContext(): string
    {
        return self::load('empty_context_activities_all_properties_empty');
    }

    public static function getContextActivitiesAllPropertiesOnlyContext(): string
    {
        return self::load('context_activities_all_properties_only');
    }

    public static function getAllPropertiesContext(): string
    {
        return self::load('all_properties');
    }
}
