<?php
    $page = (isset($_GET['page'])) ? $_GET['page'] : 1;
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
		<a href="index.php?page='.1.'"><img src="assets/images/heisenberg.png" width="35"
                                 height="35" alt="logotype" title="logotype"></a>
		</div>
        <?php
        echo Menu::generate_menu($page);
        ?>
    </div>
        <?php
            echo Content::get_page($page);
        ?>
</body>
</html>