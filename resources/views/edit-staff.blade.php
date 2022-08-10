<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    
    <title>Staff Editing Page</title>
</head>
<body>
    <div class="container mt-3" >
        <h2>Staff Editing</h2>
        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
        @endif
        <form action="{{url('update-staff')}}" method="post" style="margin: 50px">
            @csrf
            <div class="mb-3">
                <label for="staffID" >ID</label>
                <input type="text" class="form-control" id="staffID" name="staffID" value="{{$data->staffID}}" readonly >
            </div>

            <div class="mb-3">
                <label for="staffName" >Name</label>
                <input type="text" class="form-control" id="staffName" value="{{$data->staffName}}" name="staffName" required>
            @error('staffName')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
            @enderror
            </div>
        
            <div class="mb-3">
            <label for="staffPhone" >Phone</label>
            <input type="number" class="form-control" id="staffPhone" value="{{$data->staffPhone}}" name="staffPhone"  require>
            </div>

            <div class="mb-3" >
                <label for="staffAddress" >Address</label>
                <input type="text" class="form-control" id="staffAddress" value="{{$data->staffAddress}}" name="staffAddress" >
            </div>
            <div class="mb-3" >
                <label for="staffUsername" >Username</label>
                <input type="text" class="form-control" id="staffUsername" placeholder="Enter staff username" name="staffUsername" value="{{$data->staffUsername}}" required>
                @error('staffUsername')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                 @enderror
            </div>

            <div class="mb-3" >
                <label for="staffPassword" >Password</label>
                <input type="" class="form-control" id="staffPassword" placeholder="Enter staff password" name="staffPassword" value="{{$data->staffPassword}}" required>
                @error('staffPassword')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                 @enderror
            </div>

            <div class="mb-3" >
                <label for="staffImage" >Image</label>
                <input type="file" class="form-control" id="staffImage" placeholder="Enter staff image" name="staffImage" value="{{$data->staffImage}}" required>
                @error('staffImage')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                 @enderror
            </div>


           

    
        

            <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure to EDIT this staff')">Edit</button>
            <a href="{{url('list-staff')}}" class="btn btn-danger">Back</a>
        </form>
           

        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>