<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    
    <title>Client Editing Page</title>
</head>
<body>
    <div class="container mt-3" >
        <h2>Client Editing</h2>
        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
        @endif
        <form action="{{url('update-client')}}" method="post" style="margin: 50px">
            @csrf
            <div class="mb-3">
                <label for="clientID" >ID</label>
                <input type="text" class="form-control" id="clientID" name="clientID" value="{{$data->clientID}}" readonly >
            </div>

            <div class="mb-3">
                <label for="clientName" >Name</label>
                <input type="text" class="form-control" id="clientName" value="{{$data->clientName}}" name="clientName" required>
            @error('clientName')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
            @enderror
            </div>
        
            <div class="mb-3">
            <label for="clientPhone" >Phone</label>
            <input type="number" class="form-control" id="clientPhone" value="{{$data->clientPhone}}" name="clientPhone"  require>
            </div>

            <div class="mb-3" >
                <label for="clientAddress" >Address</label>
                <input type="text" class="form-control" id="clientAddress" value="{{$data->clientAddress}}" name="clientAddress" >
            </div>
            <div class="mb-3" >
                <label for="clientUsername" >Username</label>
                <input type="text" class="form-control" id="clientUsername" placeholder="Enter client username" name="clientUsername" value="{{$data->clientUsername}}" required>
                @error('clientUsername')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                 @enderror
            </div>

            <div class="mb-3" >
                <label for="clientPassword" >Password</label>
                <input type="text" class="form-control" id="clientPassword" placeholder="Enter client password" name="clientPassword" value="{{$data->clientPassword}}" required>
                @error('clientPassword')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                 @enderror
            </div>

            <div class="mb-3" >
                <label for="clientImage" >Image</label>
                <input type="file" class="form-control" id="clientImage" placeholder="Enter client image" name="clientImage" value="{{$data->clientImage}}" required>
                @error('clientImage')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                 @enderror
            </div>


           

    
        

            <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure to EDIT this client')">Edit</button>
            <a href="{{url('list-client')}}" class="btn btn-danger">Back</a>
        </form>
           

        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>