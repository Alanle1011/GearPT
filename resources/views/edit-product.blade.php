<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    
    <title>Product Editing Page</title>
</head>
<body>
    <div class="container mt-3" >
        <h2>Product Editing</h2>
        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
        @endif
        <form action="{{url('update-product')}}" method="post" style="margin: 50px">
            @csrf
            <div class="mb-3">
                <label for="productPrice" >ID</label>
                <input type="text" class="form-control" id="productID" name="productID" value="{{$data->productID}}" readonly >
            </div>

            <div class="mb-3">
                <label for="productName" >Name</label>
                <input type="text" class="form-control" id="productName" value="{{$data->productName}}" name="productName" required>
            @error('productName')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
            @enderror
            </div>
        
            <div class="mb-3">
            <label for="productPrice" >Price</label>
            <input type="number" class="form-control" id="productPrice" value="{{$data->productPrice}}" name="productPrice"  require>
            </div>

            <div class="mb-3" >
                <label for="productDetail" >Description</label>
                <input type="text" class="form-control" id="productDescription" value="{{$data->productDescription}}" name="productDescription" >
            </div>
            <div class="mb-3" >
                <label for="productDetail" >Image</label>
                <input type="file" class="form-control" id="productImage" placeholder="Enter product Image" name="productImage" value="{{$data->productImage}}" required>
                @error('productType')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                 @enderror
            </div>

            <div class="mb-3" >
                <label for="productType" >Type</label>
                <select class="form-control" name="productType" id="productType"  require>
                    <option value="{{$data->productTypeID}}">{{$data->productTypeID}}</option>
                    @foreach($productTypedata as $row)
                    <option value="{{$row->productTypeID}}"> 
                        {{$row->productTypeID}} - {{$row->productTypeName}} 
                    </option>
                    @endforeach
                </select>
                @error('productType')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                 @enderror
            </div>
            
            <div class="mb-3" >
                <label for="productDetail" >Producer</label>
                <select class="form-control" name="producerID" id="producerID"  require>
                    <option value="{{$data->producerID}}">{{$data->producerID}}</option>
                    @foreach($producerdata as $row)
                    <option value="{{$row->producerID}}"> 
                        {{$row->producerID}} - {{$row->producerName}}
                    </option>
                    @endforeach
                </select>
                @error('productProducer')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                 @enderror
            </div>

           

    
        

            <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure to EDIT this product')">Edit</button>
            <a href="{{url('list-product')}}" class="btn btn-danger">Back</a>
        </form>
           

        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>