<html>
<head>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }
</style>
</head>
<body>
<h1>Login<h1>
<form action='<?php echo base_url("demo/login")?>' method='post'>
<table cellspacing='5' align='center'>
<tr><td>User name:</td><td><input type='text' name='name'/></td></tr>
<tr><td>Password:</td><td><input type='password' name='pwd'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>

</form>

</body>
</html>
