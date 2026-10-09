<?php

declare(strict_types=1);

namespace Cyndaron\PCX;

use Cyndaron\BinaryHandler\BinaryReader;
use GdImage;

function imagecreatefrompcx(string $filename): GdImage
{
    $reader = BinaryReader::fromFile($filename);

    $image = PCXImage::fromReader($reader);
    return $image->exportAsGdImage();
}