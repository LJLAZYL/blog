<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>博客</title>
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
    <h1 style="text-align: center;margin-bottom: 20px">登陆</h1>
    <form action="check.php" method="post" style="line-height: 26px;">
        <table border="0" style="border-collapse:separate; border-spacing:0px 10px;">
            <tr>
                <td>Email：</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>密码：</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="text-align: center"><button type="submit" name="submit" value="登陆">登陆</button></td>
                <td style="text-align: center"><button type="submit" name="qx" value="取消">取消</button></td>
            </tr>
        </table> </form>
</div>
<div class="foot"><p style="text-align: center">©2017&nbsp;&nbsp;PHP&nbsp;&nbsp;
        使用PHP前必读&nbsp;&nbsp;厦门大学嘉庚学院&nbsp;&nbsp;闽ICP证0000号&nbsp;&nbsp;京公网安备11000002000000号 </p></div>
</body>
</html>