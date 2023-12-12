<?php 
    include 'model.php';
    $model = new model();
    $id = $_REQUEST['ID'];
    $delete = $model->delete($id);
 
    if ($delete) {
        echo "<script>alert('User deleted successfully');</script>";
        echo "<script>window.location.href = 'dashboard.php';</script>";
    }
 ?>