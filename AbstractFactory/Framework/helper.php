<?php

namespace AbstractFactory\Framework;

class Helper {}

/**
 * @param $str
 * @return string
 */
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}