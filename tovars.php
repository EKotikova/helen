<? require_once('templutes/top.php');
    $query = "SELECT*FROM tovars";
    $res = $db->query($query);
    $rows = $res->fetchALL();?>
        <table class="table">
            <tr class="info">
                <td>Картинка</td>
                <td>Название</td>
                <td>Описание</td>
            </tr>
        <?foreach ($rows as $row):?>
              <tr>
                <td><img image_id="<?=$row['id']?>" class='pic' src='media/uploads/<?=$row['picher']?>'></td>
                <td class='name'><?=$row['mame']?></td>
                <td class="body_name"><?=$row['body']?></td>
            </tr>
        <?endforeach;?>
        </table>
<?require_once('templutes/bottom.php')?>
<script src="media/js/modal.js"></script>
