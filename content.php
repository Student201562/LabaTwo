<?php
class Content{
    public $pages = array(
    1=>'start.php',
    2=>'aboutgame.php',
    3=>'toplistofgame.php'
    );

    public static function getPage($page){
        return Content::$pages[$page];
    }
}
/**
 * Created by PhpStorm.
 * User: Kiril
 * Date: 16.10.2017
 * Time: 21:48
 */