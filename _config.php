<?php
$dir = basename(dirname(__FILE__));
  define('SHORTCODES_DIR', $dir);

ShortcodeParser::get()->register('facebook', array('ShortCodes', 'FacebookShortCodeHandler'));
ShortcodeParser::get()->register('twitter', array('ShortCodes', 'TwitterShortCodeHandler'));