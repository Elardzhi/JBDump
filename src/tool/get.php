<?php
/**
 * JBDump
 *
 * Copyright (c) 2015, Denis Smetannikov <denis@jbzoo.com>.
 *
 * @package   JBDump
 * @author    Denis Smetannikov <denis@jbzoo.com>
 * @copyright 2015 Denis Smetannikov <denis@jbzoo.com>
 * @link      http://github.com/smetdenis/jbdump
 */

namespace SmetDenis\JBDump;

/**
 * Class ToolGet
 * @package SmetDenis\JBDump
 */
class ToolGet extends Tool
{
    /**
     * Show $_POST array
     * @return  JBDump
     */
    public static function get()
    {
        if (!self::isDebug()) {
            return false;
        }
        return self::i()->dump($_GET, '! $_POST !');
    }
}