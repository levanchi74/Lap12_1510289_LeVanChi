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
    <title></title>
</head>
<body>
    <form method="post" action="../Controller/UserController.php">
        ID: <input type="text" name="id" value="<?php echo $row["id"] ?>"><br><br>
        Name: <input type="text" name = "name" value="<?php echo $row["name"] ?>"><br><br>
        Year: <input type="text" name="year" value="<?php echo $row["year"] ?>"><br><br>
       
        <input type="submit" name ="update" value="Update" >

    </form>
</body>
</html>