<?php
class Content{
    public static $pages = array(
    1=>'assets/start.html',
    2=>'assets/aboutgame.html',
    3=>'assets/toplistofgame.html'
    );

    public static function get_page($page){
        if(!array_key_exists($page, self::$pages))
        {
            return file_get_contents(self::$pages[1]);
        }
        else
        {
            return file_get_contents(self::$pages[$page]);
        }
            // считывает файл и начинку отдает
    }
}
/**
 * Created by PhpStorm.
 * User: Kiril
 * Date: 16.10.2017
 * Time: 21:48
 */