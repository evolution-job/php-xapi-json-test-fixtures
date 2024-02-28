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
 * JSON encoded xAPI statement attachment fixtures.
 *
 * These fixtures are borrowed from the
 * {@link https://github.com/adlnet/xAPI_LRS_Test Experience API Learning Record Store Conformance Test} package.
 */
class AttachmentJsonFixtures extends JsonFixtures
{
    public const DIRECTORY = 'Attachment';

    public static function getTextAttachment(): string
    {
        return self::load('text');
    }

    public static function getJSONAttachment(): string
    {
        return self::load('JSON');
    }

    public static function getFileUrlOnlyAttachment(): string
    {
        return self::load('file_url_only');
    }
}
