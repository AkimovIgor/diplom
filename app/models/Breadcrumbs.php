<?php

namespace app\models;

use school145\App;

class Breadcrumbs
{
    public static function getBreadcrumbs($category_id, $name='')
    {
        $cats = App::$app->getProperty('cats');
        $breadcrumbs_array = self::getParts($cats, $category_id);
    }

    public static function getParts($cats, $id)
    {
        // debug($id);
        // debug($cats);
    }
}

?>