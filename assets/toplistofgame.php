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
	<div class="class_header_top_list_of_game">
		<div class="class_logotype">
		<a href="start.php"><img src="images/heisenberg.png" width="35"
                                 height="35" alt="logotype" title="logotype"></a>
		</div>
        <?php
        $page = $_GET['page'];
        switch($_GET['page']) {
            case empty('$page'):
                Menu::generate_menu(3);;
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
	<div class="topList">
		<img src="images/gold-medal.png" width="256" 
		height="256" alt="top Players" title="Top Players">
		<div class="class_block_table_rating">
			<table background="images/diablo.jpg" class="class_table_with_the_best_players" width="100%">
				<thead>
					<tr>
						<th>№</th>
						<th>Имя</th>
						<th>Страна</th>
						<th>Рейтинг</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td data-label="№"><span>1</span></td>
						<td data-label="Имя"><span>Gylever</span></td>
						<td data-label="Страна"><span>Russia</span></td>
						<td data-label="Рейтинг"><span>150</span></td>
					</tr>
					<tr>
						<td data-label="№"><span>2</span></td>
						<td data-label="Имя"><span>Bomba</span></td>
						<td data-label="Страна"><span>USA</span></td>
						<td data-label="Рейтинг"><span>101</span></td>
					</tr>
					<tr>
						<td data-label="№"><span>3</span></td>
						<td data-label="Имя"><span>Hunter</span></td>
						<td data-label="Страна"><span>Russia</span></td>
						<td data-label="Рейтинг"><span>98</span></td>
					</tr>
					<tr>
						<td data-label="№"><span>4</span></td>
						<td data-label="Имя"><span>Shedok</span></td>
						<td data-label="Страна"><span>Germany</span></td>
						<td data-label="Рейтинг"><span>86</span></td>
					</tr>
					<tr>
						<td data-label="№"><span>5</span></td>
						<td data-label="Имя"><span>Frend</span></td>
						<td data-label="Страна"><span>Russia</span></td>
						<td data-label="Рейтинг"><span>60</span></td>
					</tr>
					<tr>
						<td data-label="№"><span>6</span></td>
						<td data-label="Имя"><span>Katrina</span></td>
						<td data-label="Страна"><span>Russia</span></td>
						<td data-label="Рейтинг"><span>56</span></td>
					</tr>
				</tbody>
			</table>				
		</div>
	</div>
</body>
</html>
