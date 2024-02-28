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
 * JSON encoded xAPI result fixtures.
 *
 * These fixtures are borrowed from the
 * {@link https://github.com/adlnet/xAPI_LRS_Test Experience API Learning Record Store Conformance Test} package.
 */
class ResultJsonFixtures extends JsonFixtures
{
    public const DIRECTORY = 'Result';

    public static function getEmptyResult(): string
    {
        return self::load('empty');
    }

    public static function getTypicalResult(): string
    {
        return self::load('typical');
    }

    public static function getScoreResult(): string
    {
        return self::load('score');
    }

    public static function getEmptyScoreResult(): string
    {
        return self::load('empty_score');
    }

    public static function getSuccessResult(): string
    {
        return self::load('success');
    }

    public static function getCompletionResult(): string
    {
        return self::load('completion');
    }

    public static function getResponseResult(): string
    {
        return self::load('response');
    }

    public static function getDurationResult(): string
    {
        return self::load('duration');
    }

    public static function getExtensionsResult(): string
    {
        return self::load('extensions');
    }

    public static function getEmptyExtensionsResult(): string
    {
        return self::load('empty_extensions');
    }

    public static function getScoreAndSuccessResult(): string
    {
        return self::load('score_and_success');
    }

    public static function getScoreAndCompletionResult(): string
    {
        return self::load('score_and_completion');
    }

    public static function getScoreAndResponseResult(): string
    {
        return self::load('score_and_response');
    }

    public static function getScoreAndDurationResult(): string
    {
        return self::load('score_and_duration');
    }

    public static function getSuccessAndCompletionResult(): string
    {
        return self::load('success_and_completion');
    }

    public static function getSuccessAndResponseResult(): string
    {
        return self::load('success_and_response');
    }

    public static function getSuccessAndDurationResult(): string
    {
        return self::load('success_and_duration');
    }

    public static function getCompletionAndResponseResult(): string
    {
        return self::load('completion_and_response');
    }

    public static function getCompletionAndDurationResult(): string
    {
        return self::load('completion_and_duration');
    }

    public static function getResponseAndDurationResult(): string
    {
        return self::load('response_and_duration');
    }

    public static function getScoreSuccessAndCompletionResult(): string
    {
        return self::load('score_success_and_completion');
    }

    public static function getScoreSuccessAndResponseResult(): string
    {
        return self::load('score_success_and_response');
    }

    public static function getScoreSuccessAndDurationResult(): string
    {
        return self::load('score_success_and_duration');
    }

    public static function getScoreCompletionAndResponseResult(): string
    {
        return self::load('score_completion_and_response');
    }

    public static function getScoreCompletionAndDurationResult(): string
    {
        return self::load('score_completion_and_duration');
    }

    public static function getScoreResponseAndDurationResult(): string
    {
        return self::load('score_response_and_duration');
    }

    public static function getSuccessCompletionAndResponseResult(): string
    {
        return self::load('success_completion_and_response');
    }

    public static function getSuccessCompletionAndDurationResult(): string
    {
        return self::load('success_completion_and_duration');
    }

    public static function getSuccessResponseAndDurationResult(): string
    {
        return self::load('success_response_and_duration');
    }

    public static function getCompletionResponseAndDurationResult(): string
    {
        return self::load('completion_response_and_duration');
    }

    public static function getScoreSuccessCompletionAndResponseResult(): string
    {
        return self::load('score_success_completion_and_response');
    }

    public static function getScoreSuccessCompletionAndDurationResult(): string
    {
        return self::load('score_success_completion_and_duration');
    }

    public static function getSuccessCompletionResponseAndDurationResult(): string
    {
        return self::load('success_completion_response_and_duration');
    }

    public static function getAllPropertiesResult(): string
    {
        return self::load('all_properties');
    }
}
