<div id="film">
    <?php
    echo "
    <h3>".$data[0]['title']."</h3>
    <p>Year: ".$data[0]['release_year']."</p>
    <p>Format: ".$data[0]['format']."</p>
    <p>Stars: ".$data[0]['stars']."</p>
    <a href='".$data[1]."'>BACK</a>
    <a href='/delete?id=".$data[0]['id']."' class='btn btn-danger'>DELETE</a>

    ";
    ?>
</div>