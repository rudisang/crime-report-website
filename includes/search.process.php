<?php 
if(isset($_GET['search'])){
 $search = $_GET['search-input'];
 header("Location: ../reports.php?search=true&value=".$search);

}

?>