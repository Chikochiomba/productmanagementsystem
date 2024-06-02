<?php include("Includes/formheader.php");
    include("process.php");
?>
<div class="container mt-3">
    <div class="h2">Add New Product</div>
    <div class="p">
        
    </div>
    <form method="post" action="">
    <div class="row">
        <div class="col-md-12">
        <label for="pname" class="form-label">Product Name:</label>
        <input type="text" class="form-control border-secondary" id="pname" name="pname" placeholder="Enter product Name" value="">
     </div>
    <div class="row">
        <div class="col">
        <label for="uname" class="form-label">Price:</label>
        <input type="number" class="form-control border-secondary" id="price" name="price" placeholder="Enter price" value="" >
        </div>
        <div class="col">
            <label for="Quantity" class="form-label">Quantity:</label>
            <input type="number" class="form-control border-secondary" id="quantity" name="quantity" placeholder="Enter Quantity" value="">
            </div>
    </div>
        
        <div class="row mb-3">
            <div class="col">
            <label for="Description" class="form-label">Description:</label>
            <textarea class="form-control border-secondary" id="desc" name="desc" rows="3"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col">
            <button type="submit" class="btn btn-success me-5" id="add">Add product</button>
            <a class="btn btn-success text-center" href="index.php" role="button">Back</a>
            </div>
        </div>

    </form>
    
</div>
<script src="script.js"></script>
<?php include("Includes/footer.php");