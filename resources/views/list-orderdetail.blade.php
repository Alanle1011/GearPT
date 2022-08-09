<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Order Detail List</title>
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
                <h2>Order Detail List</h2>
                <div >
                    <a href="{{url('add-orderdetail')}}" class="btn btn-dark" style="float: right; margin-right: 20px;"  >Add</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Order ID</th>
                            <th>Product ID</th>
                            <th style="width: 200px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                        <tr>
                            <td>{{$row->orderDetailID}}</td>
                            <td>{{$row->orderID}}</td>
                            <td>{{$row->productID}}</td>
                            <td>
                                <a href="{{url('edit-orderdetail/'.$row->orderdetailID)}}" class="btn btn-primary">Edit</a>
                                <a href="{{url('delete-orderdetail/'.$row->orderdetailID)}}" class="btn btn-danger" onclick="return confirm('Are you sure to Delete this order detail')">Delete</a>
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