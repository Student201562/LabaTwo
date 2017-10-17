<?php
    $page = $_GET['page'];
    require('menu.php');
    require('content.php');?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Gylever</title>
	<link rel="stylesheet" type="text/css" href="assets/css/start_game.css">
</head>
<body class="class_body">
	<div class="class_header_index">
		<div class="class_logotype">
		<a href="assets/start.html"><img src="assets/images/heisenberg.png" width="35"
                                 height="35" alt="logotype" title="logotype"></a>
		</div>
        <?php
            Menu::generate_menu($page);
        ?>
    </div>;
        <?php
            Content::get_page($page);
        ?>
</body>
</html>
/**
 * Created by PhpStorm.
 * User: Kiril
 * Date: 17.10.2017
 * Time: 14:05
 */