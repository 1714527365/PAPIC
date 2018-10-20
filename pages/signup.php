<!DOCTYPE HTML>
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>注册界面</title> 
</head> 
<body> 
  <?php 
    $username=$_POST["name"]; 
    $password=$_POST["pass"]; 
    $con=mysql_connect("localhost","root","tianyi0327"); 
    if (!$con) { 
      die('error'. mysql_error()); 
    } 
    mysql_select_db("test",$con); 
    $tmp_username=null; 
    $tmp_password=null; 
    $result=mysql_query("select * from logindata where username ='{$username}';"); 
    if $username==mysql_fetch_array($result)) { 
      $tmp_username=$row["username"]; 
      $tmp_password=$row["password"]; 
    } 
      if ($tmp_username!=null;){
  ?>
  <script type="text/javascript">
      alert("该用户名已被注册"); 
      window.location.href="注册界面.html";
    }
  </script>
    <?php
      else{
        mysql_query("insert into logindata (username,password) values('{$username}','{$password}')") or die("error".mysql_error()) ; 
    mysql_close($con);
  ?> 
  <script type="text/javascript"> 
    window.location.href="注册成功界面.html"; 
  </script>
  <?php 
    }
  ?> 
    </body> 
</html> 