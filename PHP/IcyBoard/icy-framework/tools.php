<?php

/**
 * tools short summary.
 *
 * tools description.
 *
 * @version 1.0
 * @author Tobias
 */
namespace ibc;

class tools
{
    public static function startsWith($haystack, $needle) {
        // search backwards starting from haystack length characters from the end
        return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== FALSE;
    }
    public static function endsWith($haystack, $needle) {
        // search forward starting from end minus needle length characters
        return $needle === "" || (($temp = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $temp) !== FALSE);
    }
    
    public static function getSiteName()
    {
        return "FastIM Forum";
    }
}
