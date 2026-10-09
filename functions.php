<?php

declare(strict_types=1);

namespace Cyndaron\PCX;

use GdImage;

function imagecreatefrompcx(string $filename): GdImage
{
    $reader = \Cyndaron\BinaryHandler\BinaryReader::fromFile($filename);

    $image = \RCTPHP\Util\PCX\PCXImage::fromReader($reader);
    return $image->exportAsGdImage();
}