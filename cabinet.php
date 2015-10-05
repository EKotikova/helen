<?php require_once('templutes/top.php');
if($_SESSION['id']){
$qury="SELECT * FROM users WHERE id=".$_SESSION['id'];
$res=$db->query($qury);
$user=$res->fetch();
if($_POST){
$dir='media/uploads/';
$picture=time().'.jpg';
$pic=$dir.$picture;
if($_FILES['picture']['type']=='image/jpeg'){
move_uploaded_file($_FILES['picture']['tmp_name'],$pic);
$qures="INSERT INTO tovars VALUES(NULL,'".$_SESSION['id']."','".$_POST['name']."','".$_POST['body']."','$picture','_',NOW(),'show')";
$db->exec($qures);
}
else{
echo 'no file' ;
}
}
?>
<form enctype='multipart/form-data' method='POST' action=''>

  <div class="form-group">
    <label for="exampleInputEmail1">Наименование</label>
    <input type="text" name='name' class="form-control" id="exampleInputEmail1" placeholder="">
  </div>
  <div class="form-group">
    <label for="optishion">Описание</label>
    <textarea type="text" class="ckeditor form-control" name="body" id="textavea" placeholder=""></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Обзор</label>
    <input type="file" name='picture' id="file">
    <p class="help-block">Выберите нужный файл.</p>
  </div>
  <button type="submit" class="btn btn-default">Добавить</button>
</form>

<?
$dir = 'media/uploads/'; 
$query="SELECT * FROM tovars WHERE user_id=".$_SESSION['id'];
$result=$db->query($query);
echo "<table class='table table-bordered'>";
echo "<tr class='success'><td>id</td><td>name</td><td>name_picture</td><td>picture</td></tr>\n";
while($row=$result->fetch()){
echo "<tr class='info'><td>".$row[0]."</td>
 <td>".$row[2]."</td>
 <td>".$row[4]."</td><td><img src='media/uploads/".$row[4]."' width='100' /></td><td><a name='id' class='btn' href='#' onclick=\"delete_position('delete.php?id=".$row['id']."','Вы действительно хотите удалить этот файл?')\">Удалить</a><a class='reg' href='redactor.php?id=".$row['id']."'>Редактировать</a></td></tr>\n";
}
echo '</table>';
}else
{
echo 'Ошибка входа';
}
require_once('templutes/bottom.php');?>
<script type="text/javascript" src="media/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="media/js/acaunt.js"></script>