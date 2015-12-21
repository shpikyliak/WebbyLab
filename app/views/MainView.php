<div id="messages">
    <?php
         if (isset($_GET['warnings'])) echo "<p class='text-warning'>".$_GET['warnings']."</p>";
        if (isset($_GET['message'])) echo "<p class='text-success'>".$_GET['message']."</p>";
    ?>
</div>
<form method="post" action="main/import" enctype="multipart/form-data">
    <label for="file">Import from file</label>
    <input id="file" name="file" type="file">
    <button type="submit" class="btn btn-primary butt" >Import</button>
</form>
<!--<form id="search" action="search" method="get">-->
<!--    <input id="form-control">-->
<!--    <button class="btn btn-default">SEARCH</button>-->
<!--</form>-->
<table class="table">
<?php
if (!empty($data))
    foreach($data as $key=>$value)
    {
        echo "
        <tr id=".$value['id'].">
            <td class='title'>".$value['title']."</td>
            <td class='year'>".$value['release_year']."</td>
            <td class='format'>".$value['format']."</td>
            <td class='actors'>".unserialize($value['actors'])."</td>
            <td class='show'><a href='http://".$_SERVER['HTTP_HOST']."/film?id=".$value['id']."'>DETAIL</td>
            <td>
            <a href='/delete?id=".$value['id']."' class='btn btn-danger'>DELETE</a>
             </td>
        </tr>
    ";
    }

?>
</table>
