<?php require_once('templutes/top.php');
if($_POST){
$err=array();
(empty($_POST['login']))? $err[]='Лож не заполнен логин' : false; 
(empty($_POST['password']))? $err[]='Лож не заполнен пароль' : false;
$qury="SELECT *From users WHERE login='".$_POST['login']."' AND password='".$_POST['password']."'" ;
$res=$db->query($qury);
$user=$res->fetch();
if($user['id']){
$_SESSION['id']=$user['id'];
?>
<script>
document.location.href='index.php';
</script>
<?php
}
else{
echo "<div class='bg-danger'>";	
echo 'Такого пользователя не сущесвует';
echo "</div>";
}
if(!$err){
echo 'OK';
}
else{
echo 'ошибока';
}
}
?>
<form class="form-horizontal" method='POST'>
  <div class="form-group">
    <label name='login' for="login" class="col-sm-2 control-label">Login</label>
    <div class="col-sm-10">
      <input name='login' type="text"  class="form-control" id="login" placeholder="Login">
    </div>
  </div>
  <div class="form-group">
    <label name='password'  for="password" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input name='password' type="password" class="form-control" id="password" placeholder="Password">
    </div>
  </div>
   <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Вход</button>
    </div>
  </div>
</form>
 
<?require_once('templutes/bottom.php');?>