<?php

   
    include('../action.php');

    // Create
    if(isset($_POST["submit"])){
       
        $car_arr = array(   "id"=>"null",
                            "name" => $_POST["name"],
                            "year" => $_POST["year"],
                            
                        );
        if($obj->insert_record("cars",$car_arr)){
            header("location:../View/index.php?msg=Record Inserted");
            // header('location:..View/index.php?msg=Record Inserted');
        }
    } 
    
    // Update
    if(isset($_POST["update"])){
        $id = $_POST["id"];
        $where = array("id"=>$id);
        $car_arr = array( 
                            "name" => $_POST["name"],
                            "year" => $_POST["year"]
                        );
        if($obj->update_record("cars",$where,$car_arr)){
            header("location:../View/index.php?msg=Record Updated Successfully");
        }
        
    }
    
    if(isset($_GET["delete"])){
        $id = $_GET["id"] ?? null;
        $where = array("id"=>$id);
        if($obj->delete_record("cars",$where)){
            header("location:index.php?msg=Deteted success");
        }
    }


?>
