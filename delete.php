<?php
    include('crud.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $mycrud = new crud();
        $result=$mycrud->delete($id);


    }
    header("location:index.php");
     exit;



?>