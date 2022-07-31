<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    
    <title>Add Product</title>
</head>
<body>
    <div class="container mt-3" >
        <h2>Add Student</h2>
        <form action="{{url('save-product')}}" method="post" style="margin: 50px">
            @csrf
            <div class="mb-3">
            <label for="productName" >Product Name</label>
            <input type="text" class="form-control" id="productName" placeholder="Enter product name" name="productName"  require>
            </div>
        
            <div class="mb-3">
            <label for="productPrice" >Product Price</label>
            <input type="number" class="form-control" id="productPrice" placeholder="Enter product price" name="productPrice"  require>
            </div>

            <div class="mb-3" >
                <label for="productDetail" >Product Description</label>
                <input type="text" class="form-control" id="productDescription" placeholder="Enter product Description" name="productDescription" value="no details">
                </div>
            
            <div class="mb-3">
            <label for="productImage" >Product Image</label>
            <input type="text" class="form-control" id="productImage" placeholder="Enter product image" name="productImage"  require>
            </div>
            
           

        </form>
           

        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>