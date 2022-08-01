<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    
    <title>Add Product</title>
</head>
<body>
    <div class="container mt-3" >
        <h2>Add Student</h2>
        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
        @endif
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
                <input type="text" class="form-control" id="productDescription" placeholder="Enter product Description" name="productDescription" >
            </div>
            <div class="mb-3" >
                <label for="productDetail" >Product Image</label>
                <input type="text" class="form-control" id="productImage" placeholder="Enter product Image" name="productImage" >
            </div>

            <div class="mb-3" >
                <label for="productType" >Product Type</label>
                <input type="text" class="form-control" id="productType" placeholder="Enter product Type" name="productType" >
            </div>
            <div class="mb-3" >
                <label for="productDetail" >Product Producer</label>
                <input type="te" class="form-control" id="productProducer" placeholder="Enter product Producer" name="productProducer" >
            </div>

            {{-- <label for="productCategory">Product category</label>
                <select class="form-control" name="productCategory" id="productCategory"  require>
                <option value="" disabled selected>Select a categoty</option>
                @foreach ( $ProductTypedata as $row )
                    <option>
                        {{$row->$productTypeName}}
                    </option>
                        
                @endforeach
                </select>
            </div> --}}
            
            {{-- <div class="panel-body">
                <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="inputImage">Image:</label>
                        <input 
                            type="file" 
                            name="image" 
                            id="inputImage"
                            class="form-control @error('image') is-invalid @enderror">
        
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </form> 
            </div> --}}

        

            <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure to ADD this product')">Add</button>
            <a href="{{url('list')}}" class="btn btn-danger">Back</a>
        </form>
           

        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>