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
 * JSON encoded xAPI sub statement fixtures.
 *
 * These fixtures are borrowed from the
 * {@link https://github.com/adlnet/xAPI_LRS_Test Experience API Learning Record Store Conformance Test} package.
 */
class SubStatementJsonFixtures extends JsonFixtures
{
    public const DIRECTORY = 'SubStatement';

    public static function getTypicalSubStatement(): string
    {
        return self::load('typical');
    }

    public static function getSubStatementWithMboxAgent(): string
    {
        return self::load('mbox_agent_actor');
    }

    public static function getSubStatementWithMboxSha1SumAgent(): string
    {
        return self::load('mbox_sha1_sum_agent_actor');
    }

    public static function getSubStatementWithOpenIdAgent(): string
    {
        return self::load('open_id_agent_actor');
    }

    public static function getSubStatementWithAccountAgent(): string
    {
        return self::load('account_agent_actor');
    }

    public static function getSubStatementWithMboxAgentWithType(): string
    {
        return self::load('mbox_agent_with_type_actor');
    }

    public static function getSubStatementWithMboxSha1SumAgentWithType(): string
    {
        return self::load('mbox_sha1_sum_agent_with_type_actor');
    }

    public static function getSubStatementWithOpenIdAgentWithType(): string
    {
        return self::load('open_id_agent_with_type_actor');
    }

    public static function getSubStatementWithAccountAgentWithType(): string
    {
        return self::load('account_agent_with_type_actor');
    }

    public static function getSubStatementWithMboxGroup(): string
    {
        return self::load('mbox_group_actor');
    }

    public static function getSubStatementWithMboxSha1SumGroup(): string
    {
        return self::load('mbox_sha1_sum_group_actor');
    }

    public static function getSubStatementWithOpenIdGroup(): string
    {
        return self::load('open_id_group_actor');
    }

    public static function getSubStatementWithAccountGroup(): string
    {
        return self::load('account_group_actor');
    }

    public static function getSubStatementWithIdOnlyVerb(): string
    {
        return self::load('id_verb');
    }

    public static function getSubStatementWithMboxAgentObject(): string
    {
        return self::load('mbox_agent_object');
    }

    public static function getSubStatementWithMboxSha1SumAgentObject(): string
    {
        return self::load('mbox_sha1_sum_agent_object');
    }

    public static function getSubStatementWithOpenIdAgentObject(): string
    {
        return self::load('open_id_agent_object');
    }

    public static function getSubStatementWithAccountAgentObject(): string
    {
        return self::load('account_agent_object');
    }

    public static function getSubStatementWithMboxAgentObjectWithType(): string
    {
        return self::load('mbox_agent_with_type_object');
    }

    public static function getSubStatementWithMboxSha1SumAgentObjectWithType(): string
    {
        return self::load('mbox_sha1_sum_agent_with_type_object');
    }

    public static function getSubStatementWithOpenIdAgentObjectWithType(): string
    {
        return self::load('open_id_agent_with_type_object');
    }

    public static function getSubStatementWithAccountAgentObjectWithType(): string
    {
        return self::load('account_agent_with_type_object');
    }

    public static function getSubStatementWithMboxGroupObject(): string
    {
        return self::load('mbox_group_object');
    }

    public static function getSubStatementWithMboxSha1SumGroupObject(): string
    {
        return self::load('mbox_sha1_sum_group_object');
    }

    public static function getSubStatementWithOpenIdGroupObject(): string
    {
        return self::load('open_id_group_object');
    }

    public static function getSubStatementWithAccountGroupObject(): string
    {
        return self::load('account_group_object');
    }

    public static function getSubStatementWithAllPropertiesAndTypicalAgentMemberGroupObject(): string
    {
        return self::load('all_properties_typical_agent_member_group_object');
    }

    public static function getSubStatementWithAllPropertiesActivityObject(): string
    {
        return self::load('all_properties_activity_object');
    }

    public static function getSubStatementWithTypicalStatementReferenceObject(): string
    {
        return self::load('typical_statement_reference_object');
    }

    public static function getAllPropertiesSubStatement(): string
    {
        return self::load('all_properties');
    }
}
