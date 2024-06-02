<?php 
include("Includes/formheader.php"); 
include("crud.php");
    $id="";
    $pname="";
    $price ="";
    $quantity = "";
    $errormessage="";
    $successmessage ="";

    if($_SERVER["REQUEST_METHOD"]==="GET"){
            if(!isset($_GET['id'])){
                header("location:index.php");
                exit;
            }
            $id = $_GET['id'];
            //we create a n object
            $mycon = new connection();
            $sql = "select*from products where id=$id";
            $result = $mycon->conn->query($sql);
            $row=$result->fetch_assoc();
            if(!$row){
                header("location:index.php");
                exit;
            }
            $pname=$row['product_name'];
            $price=$row['price'];
            $quantity=$row['quantity'];

    }else{
        $id=$_POST['id'];
        $pname= htmlspecialchars(trim($_POST['pname']));
        $price = htmlspecialchars(trim( $_POST['price']));
        $quantity = htmlspecialchars(trim($_POST['quantity']));
        do{
            if(Empty($pname)|| Empty($price) || Empty($quantity)){
                $errormessage="All fields are required";
                //echo "all fields are required";
                break;
            }
            $mycrud = new crud();
            $edit=$mycrud->editdata($id,$pname,$price,$quantity);
            if(!$edit){
                $errormessage="Error invalid query".$mycrud->conn->error;
                break;
            }
            $successmessage ="Product updated successfully";
            header("location:index.php");
            exit;
        }while(false);


    }






?>
<div class="container mt-3">
    <div class="h2">Edit Product</div>
    <?php
        if(!Empty($errormessage)){
            echo "
            <div class='alert alert-warning alert-dismissible'>
            <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
            <strong>Failed!</strong> $errormessage
             </div>
            
                ";
        }
        if(!empty($successmessage)){
             echo "
            <div class='alert alert-success alert-dismissible'>
            <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
            <strong>Success!</strong> $successmessage
             </div>

            ";
        }
    ?>
    <form method="post">
    <input type="hidden" name="id" value="<?php echo $pname; ?>">
    <div class="row">
        <div class="col-md-12">
        <label for="pname" class="form-label">Product Name:</label>
        <input type="text" class="form-control border-secondary" name="pname" placeholder="Enter product Name"   value="<?php echo $pname; ?>">
     </div>
    <div class="row">
        <div class="col-md-12">
        <label for="price" class="form-label">Price:</label>
        <input type="number" class="form-control border-secondary" name="price" placeholder="Enter price"    value="<?php echo $price; ?>">
        </div>
        <div class="col-md-12">
            <label for="Quantity" class="form-label">Quantity:</label>
            <input type="number" class="form-control border-secondary" name="quantity" placeholder="Enter price"    value="<?php echo $quantity; ?>">
            </div>

        <div class="row mt-3">
            <div class="col">  
            <button type="submit" class="btn btn-success me-5">Add product</button>
            <a class="btn btn-success mt-2 text-center" href="index" role="button">Back</a>
            </div>
        </div>
    </div>
    </form>
</div>


<?php include("Includes/footer.php"); ?>