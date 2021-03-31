<?php

namespace Conex\Utils;

final class Date
{
    public static function format(string $date): string
    {
        $date = explode('-', $date);

        return sprintf('%s/%s/%s', $date[2], $date[1], $date[0]);
    }
}