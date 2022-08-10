<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Product List Page</title>
</head>
<body>
    <div class="container" >
        <div class="row">
            <div class="col-md-12">
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif
                <h2>Product List</h2>
                <div>
                    <a href="{{url('add-product')}}" class="btn btn-dark" style="float: right; margin-right: 20px;"  >Add</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Producer</th>
                            <th>Type</th>
                            
                            
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                        <tr>
                            <td>{{$row->productID}}</td>
                            <td>{{$row->productName}}</td>
                            <td>{{$row->productPrice}}</td>
                            <td>{{$row->productDescription}}</td>
                            <td><img src="img/GearPT/{{$row->productImage}}" width="100px" height="100px" alt=""></td>
                            <td>{{$row->producerName}}</td>
                            <td>{{$row->productTypeName}}</td>
                            <td>
                                <a href="{{url('edit-product/'.$row->productID)}}" class="btn btn-primary">Edit</a>
                                <a href="{{url('delete-product/'.$row->productID)}}" class="btn btn-danger" onclick="return confirm('Are you sure to Delete this product')">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>

        </div>
    </div>






    <!-- JavaScript-->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
</body>
</html>