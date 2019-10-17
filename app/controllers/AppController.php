<?php

namespace app\controllers;

use school145\base\Controller;
use app\models\AppModel;
use school145\Cache;
use school145\App;

class AppController extends Controller
{
    public function __construct($route)
    {
        parent::__construct($route);
        new AppModel();
        
        App::$app->setProperty('cats', self::cacheCategory());
        //debug(App::$app->getProperties());
    }

    public static function cacheCategory()
    {
        $cache =  Cache::instance();
        $cats = $cache->get('cats');
        if(!$cats)
        {
            $cats = \R::getAssoc("SELECT * FROM category WHERE status='1'");
            $cache->set('cats', $cats);
        }
        return $cats;
    }
}



?>