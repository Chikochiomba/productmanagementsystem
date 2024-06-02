<?php
    include("connection/connection.php");
    class crud extends connection{
        public function savedata($pname,$desc,$price,$quantity){
            $sql = "INSERT INTO products(product_name,description,price,quantity) VALUES('$pname','$desc','$price','$quantity')";
            $result = $this->conn->query($sql);
            if(!$result){
                return false;
            }else{
                return true;
            }
        }
        public function delete($id){
            $sql = "DELETE FROM products where id='$id'";
            $result = $this->conn->query($sql);
            if(!$result){
                return false;
            }else{
                return true;
            }
        }
        public function editdata($id,$pname,$price,$quantity){
            $sql = "UPDATE products SET product_name='$pname',price='$price',quantity='$quantity' Where id='$id'";
            $result = $this->conn->query($sql);
            if(!$result){
                return false;
            }else{
                return true;
            }

        }
    }
    

?>