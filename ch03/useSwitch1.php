<?php
    $num=mt_rand(1,9);  //1～9の間でランダム数値を形成

    switch ($num){
        case 1:
            $msg="中吉";
            break;
        case 2:
            $msg="小吉";
            break;
        case 3:
            $msg="吉";
            break;
        case 4:
            $msg="末吉";
            break;
        case 5:
            $msg="凶";
            break;
        default :
            $msg="大吉";
            break;
    }
?>
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	</head>
	<body>
		あなたの今日の運勢は「<?=$msg."(".$num.")"?>」です。
	</body>
</html>
