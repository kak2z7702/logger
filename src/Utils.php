<?php

namespace Betterde\Logger;

class Utils
{
    /**
     * @param $object
     * @return string
     * @internal
     */
    public static function getClass($object)
    {
        $class = \get_class($object);

        return 'c' === $class[0] && 0 === strpos($class, "class@anonymous\0") ? get_parent_class($class).'@anonymous' : $class;
    }
}