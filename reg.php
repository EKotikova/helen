<?php require_once('templutes/top.php');
if($_POST){
$err=array();
(empty($_POST['login']))? $err[]='Лож не заполнен логин' :false; 
($_POST['password']!=$_POST['pass_again'])? $err[]='Пароль не совпадает' : false;
(empty($_POST['password']))? $err[]='Лож не заполнен пароль' : false;
(empty($_POST['pass_again']))? $err[]='Лож не заполнен пароль' : false;
(empty($_POST['email']))? $err[]='Лож не заполнен email' : false;
$res=$db->query("SELECT* FROM users WHERE login='".$_POST['login']."'");
$user=$res->fetch();
(isset($user['login']))?$err[]='Пользователь существует' : false;
if($err){
echo "<div class='bg-danger'>";
foreach($err as $one){
echo"<p>";
echo $one;
echo "</p>";
}
echo "</div>";
}else{
 $quers="INSERT INTO users VALUES(Null,'".$_POST['login']."','".$_POST['password']."','".$_POST['email']."',NOW(),NOW(),'unblock')";

 $db->exec($quers);
 ?>
 <script>
 document.location.href='index.php';
 </script>
 <?php
 }
}
?>
<form class="form-horizontal" method='POST'>
  <div class="form-group">
    <label name='login' for="login" class="col-sm-2 control-label">Login</label>
    <div class="col-sm-10">
      <input name='login' type="text"  class="form-control" id="login" placeholder="login">
    </div>
  </div>
  <div class="form-group">
    <label name='password'  for="password" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input name='password' type="password" class="form-control" id="password" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
     <label name='pass_again'  for="password" class="col-sm-2 control-label">Repit_Password</label>
    <div class="col-sm-10">
      <input name='pass_again' type="password" class="form-control" id="password" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
     <label name='email'  for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input name='email' type="email" class="form-control" id="email" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Registration</button>
    </div>
  </div>
</form>
<?require_once('templutes/bottom.php');?>