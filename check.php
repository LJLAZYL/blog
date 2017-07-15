<?php
require_once ("includes/conn.php");
$name=$_POST['name'];
$password=$_POST['password'];
if($name == "")
{
    echo "请填写用户名<br>";
    echo"<script type='text/javascript'>alert('请填写用户名');location='login.php';  
            </script>";
}
else if($password == "")
{
    //echo "请填写密码<br><a href='login.php'>返回</a>";
    echo"<script type='text/javascript'>alert('请填写密码');location='login.php';</script>";
}
else
{
    $sql = "select * from user where name = '$name'";
    $name2 = mysql_query($sql);
    $row = mysql_fetch_array($name2);
    if(($row["password"] == $password)&&($row["user_number"] == 0))
    {
        //echo "验证成功！<br>";
        echo "<script type='text/javascript'>alert('登陆成功');location='user.php';</script>";
    }
    else if(($row["password"] == $password)&&($row["user_number"] == 1)){
        echo"<script type='text/javascript'>alert('管理员，欢迎您！');location='administrator.php';</script>";
    }
else
    {
        echo"<script type='text/javascript'>alert('密码错误');location='login.php';</script>";
    }

}
?>


