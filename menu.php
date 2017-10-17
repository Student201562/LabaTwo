<?php
class Menu{
    // объявление листа
    public static $items = array (
        1 => '<html><ul class="class_main_menu">
            <li><a href="start.php?page=1" class="class_a_link">Home</a></li>
			<li><a href="aboutgame.php?page=2">About</a></li>
			<li><a href="toplistofgame.php?page=3">Rating</a></li>
		</ul></html>',
        2 => '<html><ul class="class_main_menu">
				<li><a href="start.php?page=1">Home</a></li>
				<li><a href="aboutgame.php?page=2" class="class_a_link">About</a></li>
				<li><a href="toplistofgame.php?page=3">Rating</a></li>
			</ul></html>',
        3 => '<html><ul class="class_main_menu">
			<li><a href="start.php?page=1">Home</a></li>
			<li><a href="aboutgame.php?page=2">About</a></li>
			<li><a href="toplistofgame.php?page=3" class="class_a_link">Rating</a></li>
		</ul></html>'
    );

    // Объявление метода
    public static function generate_menu($item) {
        echo Menu::$items[$item]; // Возможна ошибка
    }
}
/**
* Created by PhpStorm.
* User: Kiril
* Date: 16.10.2017
* Time: 20:24
*/