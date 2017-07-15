<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
$page_title = '查看当前所有用户';
include('header.html');
include ('includes/side.html');
echo '<h1 id="mainhead" style="text-align: center">查看用户</h1>';

require_once("includes/conn.php");

$sql = "SELECT user_id,name, email,DATE_FORMAT(create_time, '%Y年%m月%d日') AS dr  FROM user";

mysql_query(" set  names utf8 " ) ;

$result = @mysql_query ($sql);

$num = mysql_num_rows($result);

if ($num > 0) {
    echo "<p style='text-align: center'>共有 $num 位注册用户</p>\n";
    echo '<table align="center" cellspacing="0" cellpadding="5">';
    echo <<<TR
	<tr>
		<td><b>序号</b></td>
		<td><b>用户名</b></td>
		<td><b>邮箱</b></td>
		<td><b>注册日期</b></td>
		
		</tr>
TR;
    while($row = mysql_fetch_assoc($result)){
        echo <<<TR
   <tr>
	<td>{$row['user_id']}</td>
	<td>{$row['name']}</td>
	<td>{$row['email']}</td>
	<td>{$row['dr']}</td>
  </tr>
TR;
    }
    echo'</table>';
    mysql_free_result ($result);

} else {
    echo '<p class="error">当前还没有注册用户。</p>';
}

mysql_close();
include ('includes/footer.html');
?>
</body>
</html>