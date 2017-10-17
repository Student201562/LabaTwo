<?php
class Content{
    public $pages = array(
    1=>'assets/start.html',
    2=>'assets/aboutgame.html',
    3=>'assets/toplistofgame.html'
    );

    public static function get_page($page){
        return (include(self::$pages[$page]));
    }
}
/**
 * Created by PhpStorm.
 * User: Kiril
 * Date: 16.10.2017
 * Time: 21:48
 */