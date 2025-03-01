<?php

namespace TestSuite\Documentation;

class DocumentationTestSnapshot
{
    private static $SNAPSHOT_ROOT_DIRECTORY = __DIR__ . DIRECTORY_SEPARATOR . '__snapshots__';

    public static function getSnapshotPathFromTitle($sTitle): string
    {
        $sPathFromTitle = str_replace(' / ', DIRECTORY_SEPARATOR, $sTitle);
        $sSafePath = preg_replace('/[^\/A-Za-z0-9-]+/', '_', $sPathFromTitle);

        return static::$SNAPSHOT_ROOT_DIRECTORY . DIRECTORY_SEPARATOR . $sSafePath;
    }
}
