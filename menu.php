<?php
class Menu{
    // объявление листа
    public static $items = array (
        1 => 'HOME',
        2 => 'ABOUT',
        3 => 'RATING'
    );

    // Объявление метода
    public static function generate_menu($item_number) {
        $menu = '<ul class="class_main_menu">';

        for($i = 1; $i < count(self::$items); $i++)
        {
            $store_item = self::$items[$i];
            if($i == $$item_number){
                $menu .= '<li><a href="index.php?page='.$i.'" class="class_a_link">'.$store_item.'</a></li>';
            }
            else{
                $menu .= '<li><a href="index.php?page='.$i.'">'.$store_item.'</a></li>';
            }
        }
        $menu .= '</ul>';
        return $menu;
    }
}
/**
* Created by PhpStorm.
* User: Kiril
* Date: 16.10.2017
* Time: 20:24
*/