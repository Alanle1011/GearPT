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
<body class="img js-fullheight" style="background-image: url(../img/Background/bg.jpg);">
    <div class="container mt-3" >
        <h2>Client Editing</h2>
        @if(Session::has('fail'))
        <div class="alert alert-success" role="alert">
            {{Session::get('fail')}}
        </div>
        @endif
        <form action="{{url('check-passclient')}}" method="post" style="margin: 50px">
            @csrf
            <div class="mb-3">
                <label for="clientID" >ID</label>
                <input type="text" class="form-control" id="clientID" name="clientID" value="{{$data->clientID}}" readonly >
            </div>

            <div class="mb-3" >
                <label for="clientPassword" >Old Password</label>
                <input type="password" class="form-control" placeholder="Enter client password" name="clientOldPassword" id="clientOldPassword"  required>
                @error('clientPassword')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                 @enderror
            </div>
            <div class="mb-3" >
                <label for="clientPassword" >Password</label>
                <input type="password" class="form-control"placeholder="Enter client password" name="clientnewPassword" id="clientnewPassword"  required>
                @error('clientPassword')
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