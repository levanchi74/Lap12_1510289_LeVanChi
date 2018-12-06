<?php
    // $RootPath = $_SERVER["DOCUMENT_ROOT"];
    include('../action.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
    
    <!-- <script src="main.js"></script> -->
</head>
<body>
    <h3 class="text-center" style="margin-top:10px;">List Car</h3>
    <div class="container">
        <a href="new.php" class="btn btn-primary" style="margin-top:10px; margin-bottom:20px;">New Car</a>
        <table class="table">
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>year</th>
        
            <th>#</th>
            <th>#</th>
            <th>#</th>
        </tr>

        <?php
            $myrow = $obj->fetch_record("cars");
            foreach ($myrow as $row) {
        ?>
        <tr>
            <td> <?php echo $row["id"] ?> </td>
            <td> <?php echo $row["name"] ?> </td>
            <td> <?php echo $row["year"] ?> </td>
        
            <td><a class="btn btn-success" href="show.php?get&id=<?php echo $row["id"]; ?>">Show</a></td>
            <td><a class="btn btn-warning" href="edit.php?get&id=<?php echo $row["id"]; ?>">Edit</a></td>
            <td><a class="btn btn-danger" href="index.php?delete&id=<?php echo $row["id"]; ?>">Delete</a></td>
            
        </tr>

        <?php }?>
        </table>

    </div>


</body>
</html>
<?php

    if(isset($_GET["delete"])){
        $id = $_GET["id"] ?? null;
        $where = array("id"=>$id);
        if($obj->delete_record("cars",$where)){
            header("location:index.php?msg=Deteted success");
        }
    }

?>