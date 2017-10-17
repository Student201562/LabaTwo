<?php include '../menu.php';
include '../content.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Gylever</title>
	<link rel="stylesheet" type="text/css" href="css/start_game.css">
</head>
<body class="class_body">
	<div class="class_header_index">
		<div class="class_logotype">
		<a href="start.php"><img src="images/heisenberg.png" width="35"
                                 height="35" alt="logotype" title="logotype"></a>
		</div>
        <?php
        $page = $_GET['page'];
        switch($_GET['page']) {
            case empty('$page'):
                Menu::generate_menu(1);;
                break;
            case 1:
                Content::getPage($page);;
                break;
            case 2:
                Content::getPage($page);;
                break;
            case 3:
                Content::getPage($page);;
                break;
        }
        ?>
    </div>
	
	<div class="class_for_button">
		<button class="class_button_play">
			Play
		</button>
	</div>
</body>
</html>
