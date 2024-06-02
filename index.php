<?php  include("Includes/header.php"); ?>
        <!--creating a link button to add new products-->
        <a class="btn btn-success mt-3 ms-2 mb-4 text-center" href="registerproduct.php" role="button">Add New Products</a>
        <!--productlisting table-->
        <div class="container mt-3">
        <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Product name</th>
                <th scope="col">Price(Mk)</th>
                <th scope="col">Quantity available</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php
                include("connection/connection.php");
                $mycon = new connection();
                //we query the database
                $sql = "select*from products";
                $result = $mycon->conn->query($sql);
                if(!$result){
                        die("failed to fetch data from the database".$mycon->conn->connect_error);
                }
                while($row=$result->fetch_assoc()){
                    echo "

                    <tr>
                <th scope='row'>$row[id]</th>
                <td>$row[product_name]</td>
                <td>$row[price]</td>
                <td>$row[quantity]</td>
                <td><a class='btn btn-success btn-sm'  href='Editproduct.php?id=$row[id]'>Edit</a>
                <a class='btn btn-success btn-sm'  href='delete.php?id=$row[id]'>Delete</a>
                </td>
                
                 </tr>
                    ";

                }

            ?>
             
                
        </tbody>
    </table>
        </div>
    <!--edit and delete buttons -->
    <!--<div class="container mt-5">
    <button type="button" class="btn btn-warning me-3 p-2">Edit</button>
    <button type="button" class="btn btn-danger me-3 p-2">Delete</button>
    </div>-->

<!--footer section of the page-->
<?php  
include("Includes/footer.php");
?>