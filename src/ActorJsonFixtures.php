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
 * JSON encoded xAPI actor fixtures.
 *
 * These fixtures are borrowed from the
 * {@link https://github.com/adlnet/xAPI_LRS_Test Experience API Learning Record Store Conformance Test} package.
 */
class ActorJsonFixtures extends JsonFixtures
{
    public const DIRECTORY = 'Actor';

    public static function getTypicalAgent(): string
    {
        return self::load('typical_agent');
    }

    public static function getTypicalAgentWithType(): string
    {
        return self::load('typical_agent_with_type');
    }

    public static function getMboxAgent(): string
    {
        return self::load('mbox_agent');
    }

    public static function getMboxAgentWithType(): string
    {
        return self::load('mbox_agent_with_type');
    }

    public static function getMboxSha1SumAgent(): string
    {
        return self::load('mbox_sha1_sum_agent');
    }

    public static function getMboxSha1SumAgentWithType(): string
    {
        return self::load('mbox_sha1_sum_agent_with_type');
    }

    public static function getOpenIdAgent(): string
    {
        return self::load('open_id_agent');
    }

    public static function getOpenIdAgentWithType(): string
    {
        return self::load('open_id_agent_with_type');
    }

    public static function getAccountAgent(): string
    {
        return self::load('account_agent');
    }

    public static function getAccountAgentWithType(): string
    {
        return self::load('account_agent_with_type');
    }

    public static function getForQueryMboxAgent(): string
    {
        return self::load('for_query_mbox_agent');
    }

    public static function getForQueryMboxSha1SumAgent(): string
    {
        return self::load('for_query_mbox_sha1_sum_agent');
    }

    public static function getForQueryOpenIdAgent(): string
    {
        return self::load('for_query_open_id_agent');
    }

    public static function getForQueryAccountAgent(): string
    {
        return self::load('for_query_account_agent');
    }

    public static function getTypicalGroup(): string
    {
        return self::load('typical_group');
    }

    public static function getMboxGroup(): string
    {
        return self::load('mbox_group');
    }

    public static function getMboxSha1SumGroup(): string
    {
        return self::load('mbox_sha1_sum_group');
    }

    public static function getOpenIdGroup(): string
    {
        return self::load('open_id_group');
    }

    public static function getAccountGroup(): string
    {
        return self::load('account_group');
    }

    public static function getMboxAndNameGroup(): string
    {
        return self::load('mbox_and_name_group');
    }

    public static function getMboxSha1SumAndNameGroup(): string
    {
        return self::load('mbox_sha1_sum_and_name_group');
    }

    public static function getOpenIdAndNameGroup(): string
    {
        return self::load('open_id_and_name_group');
    }

    public static function getAccountAndNameGroup(): string
    {
        return self::load('account_and_name_group');
    }

    public static function getMboxAndMemberGroup(): string
    {
        return self::load('mbox_and_member_group');
    }

    public static function getMboxSha1SumAndMemberGroup(): string
    {
        return self::load('mbox_sha1_sum_and_member_group');
    }

    public static function getOpenIdAndMemberGroup(): string
    {
        return self::load('open_id_and_member_group');
    }

    public static function getAccountAndMemberGroup(): string
    {
        return self::load('account_and_member_group');
    }

    public static function getAllPropertiesAndTypicalAgentMemberGroup(): string
    {
        return self::load('all_properties_and_typical_agent_member_group');
    }

    public static function getAllPropertiesAndMboxAgentMemberGroup(): string
    {
        return self::load('all_properties_and_mbox_agent_member_group');
    }

    public static function getAllPropertiesAndMboxSha1SumAgentMemberGroup(): string
    {
        return self::load('all_properties_and_mbox_sha1_sum_agent_member_group');
    }

    public static function getAllPropertiesAndOpenIdAgentMemberGroup(): string
    {
        return self::load('all_properties_and_open_id_agent_member_group');
    }

    public static function getAllPropertiesAndAccountAgentMemberGroup(): string
    {
        return self::load('all_properties_and_account_agent_member_group');
    }

    public static function getAllPropertiesAndTwoTypicalAgentMembersGroup(): string
    {
        return self::load('all_properties_and_two_typical_agent_members_group');
    }
}
