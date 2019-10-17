<?php

namespace app\models;

use school145\base\Model;

class AppModel extends Model
{
    public static function createAlias($table, $field, $str, $id)
    {
        self::strToUrl($str);
        $res = \R::findOne($table, "{$field} = ?", [$str]);
        if($res)
        {
            $str = "{$str}-{$id}";
            $res = \R::count($table, "{$field} = ?", [$str]);
            if($res)
            {
                $str = self::createAlias($table, $field, $str, $id);
            }
        }
        return $str;
    }

    public static function strToUrl($str)
    {
        // переводим в транслит
        $str = self::rusToTranslit($str);
        // в нижний регистр
        $str = strtolower($str);
        // замена ненужного на "-"
        $str = preg_replace('~[^-a-z0-9_]+~u', '-', $str);
        // удаление начальных и конечных "-"
        $str = trim($str, "-");
        return $str;
    }

    public static function rusToTranslit($string)
    {
        $converter = [
            'а' => 'a',     'б' => 'b',     'в' => 'v',
            'г' => 'g',     'д' => 'd',     'е' => 'e',
            'ё' => 'yo',     'ж' => 'zh',     'з' => 'z',
            'и' => 'i',     'й' => 'y',     'к' => 'k',
            'л' => 'l',     'м' => 'm',     'н' => 'n',
            'о' => 'o',     'п' => 'p',     'р' => 'r',
            'с' => 's',     'т' => 't',     'у' => 'u',
            'ф' => 'f',     'х' => 'kh',     'ц' => 'ts',
            'ч' => 'ch',     'ш' => 'sh',     'щ' => 'sch',
            'ь' => '\'',     'ы' => 'y',     'ъ' => '\'',
            'э' => 'e',     'ю' => 'yu',         'я' => 'ya',


            'А' => 'A',     'Б' => 'B',     'В' => 'V',
            'Г' => 'G',     'Д' => 'D',     'Е' => 'E',
            'Ё' => 'YO',     'Ж' => 'ZH',     'З' => 'Z',
            'И' => 'I',     'Й' => 'Y',     'К' => 'K',
            'Л' => 'L',     'М' => 'M',     'Н' => 'N',
            'О' => 'O',     'П' => 'P',     'Р' => 'R',
            'С' => 'S',     'Т' => 'T',     'У' => 'U',
            'Ф' => 'F',     'Х' => 'KH',     'Ц' => 'TS',
            'Ч' => 'CH',     'Ш' => 'SH',     'Щ' => 'SCH',
            'Ь' => '\'',     'Ы' => 'Y',     'Ъ' => '\'',
            'Э' => 'E',     'Ю' => 'YU',         'Я' => 'YA'
        ];

        return strtr($string, $converter);
    }
}

?>