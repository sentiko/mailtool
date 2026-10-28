<?php

/**
 *  Uncomment this in php.ini:
 *  extension=intl;
 * 
*/


// Returns the Unicode code point value as an integer.

echo IntlChar::ord("\u{2500}");     // 9472
echo PHP_EOL;
echo IntlChar::ord("─");           // 9472
echo PHP_EOL;
