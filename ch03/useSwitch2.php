<?php
    $month=$_POST['month'];     //画面からの入力値を取得

    switch ($month){
        case 3:
        case 4:
        case 5:
            $msg=$munth."月は春です。";
            break;
        case 6:
        case 7:
        case 8:
            $msg=$month."月は夏です。";
            break;
        case 9:
        case 10:
        case 11:
            $msg=$month."月は秋です。";
            break;
        case 12:
        case 1:
        case 2:
            $msg=$month."月は冬です。";
            break;
        default:
            $msg="1～12の月を入力してください。";
            break;
    }
?>
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	</head>
	<body>
		<?=$msg?>
	</body>
</html>
