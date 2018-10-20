<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>验证登录界面用户名密码</title>
        <?php  
		$username=$_POST["name"];
		$password=$_POST["pass"];
		$con=mysql_connect("localhost","root","tianyi0327"); 
    	if (!$con) { 
     		die('connect error'. mysql_error()); 
    	} 
    	mysql_select_db("test",$con);
    	$tmp_username=null;
    	$tmp_password=null;
    	$result=mysql_query("select * from logindata where username ='{$username}';");
    	if ($row=mysql_fetch_array($result)) {
    	  	$tmp_username=$row["username"]; 
   	   		$tmp_password=$row["password"]; 
    	}
    	if ($tmp_username=null;) { 
  	?> 
  		<script type="text/javascript"> 
    		alert("用户名不存在"); 
    		window.location.href="注册与登录系统.html"; 
  		</script> 
      <?php 
      } 
      else { 
          if ($tmp_password!=$password){ 
    ?> 
        <script type="text/javascript"> 
          alert("密码错误"); 
          window.location.href="注册与登录系统.html";
        </script>

</body>
</html>