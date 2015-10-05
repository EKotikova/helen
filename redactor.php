<?require_once('templutes/top.php');
if ($_GET){
    $query = "SELECT*FROM tovars WHERE id=".$_GET['id'];
    $res = $db->query($query);
    $row = $res->fetch();
	//print_r($row);
	
	 if($_POST){
	   $qury="UPDATE tovars SET mame=CONCAT('".$_POST['mame']."'),'".$_POST['body']."','$picture','_',NOW(),'show')";
	 }
	 
	 ?>
<form enctype='multipart/form-data' method='POST' action=''>

  <div class="form-group">
    <label for="exampleInputEmail1">Наименование</label>
    <input type="text" name='name' class="form-control" id="exampleInputEmail1" placeholder="" value="<?=$row['mame']?>">
  </div>
  <div class="form-group">
    <label for="optishion">Описание</label>
    <textarea type="text" class="ckeditor form-control" name="body" id="textavea" placeholder="" value="<?=$row['body']?>"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Обзор</label>
    <input type="file" name='picture' id="file">
    <p class="help-block">Выберите нужный файл.</p>
  </div>
  <button type="submit" class="btn btn-default">Добавить</button>
</form>

<?
	
	}
require_once('templutes/bottom.php');?>