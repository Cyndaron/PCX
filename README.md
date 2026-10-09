PCX Decoder
===========

Reads PCX files and decode them into a GdImage, which can then be used in other Gd functions or exported as an image.

This was created in order to handle RCT1 screenshots, which are in PCX format, and as a result it has not been tested
with other types of PCX files. Patches are welcome, provided they were written without the use of LLMs.

Usage:
```PHP
use function Cyndaron\PCX\imagecreatefrompcx;

$gd = imagecreatefrompcx($filename);
imagepng($gd, 'converted.png');
```