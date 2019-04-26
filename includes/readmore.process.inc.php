<?php

if(isset($_GET['id'])){

    $id = $_GET['post-id'];

    header("Location: ../reports-readmore.php?readmore=url&id=".$id);
    //echo $id;
}