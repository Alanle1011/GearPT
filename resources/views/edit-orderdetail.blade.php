<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    
    <title>Order Detail Editing Page</title>
</head>
<body class="img js-fullheight" style="background-image: url(../img/Background/bg.jpg);">
    <div class="container mt-3" >
        <h2>Order Detail Editing</h2>
        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
        @endif
        <form action="{{url('update-orderdetail')}}" method="post" style="margin: 50px">
            @csrf
            <div class="mb-3">
                <label for="orderdetailID" >ID</label>
                <input type="text" class="form-control" id="orderdetailID" name="orderdetailID" value="{{$data->orderDetailID}}" readonly >
            </div>

            <div class="mb-3">
                <label for="orderID" >Order ID</label>
                <input type="text" class="form-control" id="orderID" value="{{$data->orderID}}" name="orderID" required>
            @error('orderID')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
            @enderror
            </div>
        
            <div class="mb-3">
                <label for="productID" >Product ID</label>
                <input type="number" class="form-control" id="productID" value="{{$data->productID}}" name="productID"  require>
                @error('orderID')
                    <div class="alert alert-danger" role="alert">
                    {{$message}}
                    </div>
                @enderror
            </div>


           

    
        

            <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure to EDIT this order detail')">Edit</button>
            <a href="{{url('list-orderdetail')}}" class="btn btn-danger">Back</a>
        </form>
           

        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>