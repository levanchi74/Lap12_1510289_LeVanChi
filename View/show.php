<?php
    // $RootPath = $_SERVER["DOCUMENT_ROOT"];
    // include($RootPath . '/LAB/crud/action.php');
    include('../action.php');

    $id=$_GET["id"];
    $where = array("id"=>$id,);
    $row = $obj->select_record("cars",$where);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<body>
  
    <h3> Information Car </h3>
    <table class="table">
        <tr>
            <td>ID</td>
            <td class="text-gray"><?php echo $row["id"] ?></td>
        </tr>
        <tr>
            <td>Name</td>
            <td class="text-gray"><?php echo $row["name"] ?></td>
        </tr>
        <tr>
            <td>Year</td>
            <td class="text-gray"><?php echo $row["year"] ?></td>
        </tr>
        
    </table>

</body>
</html>
