<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>博客</title>
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
        body{
            background-image: url("images/gss.jpg");
            font: 18px/30px Tahoma, Verdana, sans-serif;
        }
        .s1{
            width:340px;
            height:200px;
            position:absolute;
            top:40%;left:45%;
            margin-left:-50px;
            margin-top:-50px;
        }
        .foot{
            position:fixed;
            height:60px;
            width:100%;
            bottom:0px;
        }
        button{
            width: 50px;
            height: 30px;
            float: right;
        }
        #mainhead{
            color: red;
        }
        input{
            width: 200px;
            height: 25px;
        }
    </style>
</head>
<body>
<?php
include 'header.html';
?>
<div class="s1">
    <h1 style="text-align: center;margin-bottom: 20px">注册</h1>
    <form action="register.php" method="post" style="line-height: 26px;">
    <table border="0" style="border-collapse:separate; border-spacing:0px 10px;">
        <tr>
            <td>用户名：</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Email地址：</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>密码：</td>
            <td><input type="password" name="password1"></td>
        </tr>
        <tr>
            <td>确认密码：</td>
            <td><input type="password" name="password2"></td>
        </tr>
        <tr>
            <td style="text-align: center"><button type="submit" name="zc" value="注册">注册</button></td>
            <td style="text-align: center"><button type="submit" name="qx" value="取消">取消</button></td>
        </tr>
    </table> </form>
</div>
<?php
$page_title = '注册';

if (isset($_POST['zc'])) {
    $errors = array();
    echo "<div id='xx'>";
    if (empty($_POST['name'])) {
        $errors[] = '您忘记输入用户名.';
    }
    if (empty($_POST['email'])) {
        $errors[] = '您忘记输入您的EMAIL地址.';
    }
    if (!empty($_POST['password1'])) {
        if ($_POST['password1'] != $_POST['password2']) {
            $errors[] = '两次输入密码不同.';
        }
    } else {
        $errors[] = '您忘记输入密码.';
    }

    if (empty($errors)) {
        require_once("includes/conn.php");
        $sql = "SELECT user_id FROM user WHERE email='{$_POST['email']}'";
        $result = mysql_query($sql);
        if (mysql_num_rows($result) == 0) {

            $sql = "INSERT INTO `user` ( `user_id` , `name` , `email` , `password` , `user_number` ,`create_time` ) 
					VALUES (NULL , '{$_POST['name']}' , '{$_POST['email']}', SHA1( '{$_POST['password1']}' ),0, NOW( ));";
            mysql_query(" set  names utf8 " ) ;
            $result = @mysql_query($sql);

            if($result){

                echo '<h1 id="mainhead">注册成功！</h1>';
                echo "<p>谢谢您注册我们的站点！\n您的登录密码为：{$_POST['password1']}</p>";
                echo '<p>您已注册成功，确认邮件已发送至您的邮箱！</p><p></p>';
                echo"<script type='text/javascript'>alert('注册成功');location='login.php';</script>";
            }else{
                echo '<h1 id="mainhead">系统错误！</h1>
				<p class="error">很抱歉您暂时无法注册。<br />';
                echo '<p>' . mysql_error() ;
                exit();
            }
        } else {
            echo '<h1 id="mainhead">错误！</h1>
			<p class="error">对不起，这个email地址已被注册，请重新选择。</p>';
        }
        mysql_close();
    } else {
        echo '<h1 id="mainhead">错误！</h1>
		<p class="error">出现以下错误：<br />';
        foreach ($errors as $msg) {
            echo " - $msg<br />\n";
        }
        echo '</p><p>请重填：</p><p><br /></p>';

    }
    echo '</div>';
}

?>
<div class="foot"><p style="text-align: center">©2017&nbsp;&nbsp;PHP&nbsp;&nbsp;
        使用PHP前必读&nbsp;&nbsp;厦门大学嘉庚学院&nbsp;&nbsp;闽ICP证0000号&nbsp;&nbsp;京公网安备11000002000000号 </p></div>
</body>
</html>

