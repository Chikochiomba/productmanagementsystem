<?php
    include("crud.php");
    $pname="";
    $price ="";
    $description ="";
    $quantity = "";
    $errormessage="";
    $successmessage ="";
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $pname= htmlspecialchars(trim($_POST['pname']));
        $price = htmlspecialchars(trim( $_POST['price']));
        $description =htmlspecialchars(trim($_POST['desc']));
        $quantity = htmlspecialchars(trim($_POST['quantity']));
        do{
        if(Empty($pname)|| Empty($price) || Empty($description) || Empty($quantity)){
            $errormessage="All fields are required";
            //echo "all fields are required";
            break;
        }
            $mycrud = new crud();
            $mycrud->savedata($pname,$description,$price,$quantity);
            $successmessage="Product registered successfully";
            //echo "Product registered successfully";
            header("location:index.php");
            exit;
            $pname="";
            $price ="";
            $description ="";
            $quantity = "";
        
        }while(false);
            if(!Empty($errormessage)){
                echo "
                <div class='alert alert-warning alert-dismissible'>
                <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                <strong>Failed!</strong> $errormessage
                 </div>
                
                    ";
            }else{
                echo "
                <div class='alert alert-success alert-dismissible'>
                <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                <strong>Success!</strong> $successmessage
                 </div>

                ";

            }

        
        
        
        
    


    }
?>