<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    
    <title>Staff Addition Page</title>
</head>
<body class="img js-fullheight" style="background-image: url(../img/Background/bg.jpg);">
    <div class="container mt-3" >
        <h2>Staff Addition</h2>
        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
        @endif
        <form action="{{url('save-staff')}}" method="post" enctype="multipart/form-data" style="margin: 50px">
            @csrf

            <div class="mb-3">
                <label for="staffName" >Full name</label>
                <input type="text" class="form-control" id="staffName" placeholder="Enter staff name" name="staffName" require>
                @error('staffName')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                @enderror
            </div>
        
            <div class="mb-3">
                <label for="staffPhone" >Phone</label>
                <input type="number" class="form-control" id="staffPhone" placeholder="Enter staff price" name="staffPhone" require>
                @error('staffPhone')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                 @enderror
            </div>

            <div class="mb-3" >
                <label for="staffAddress" >Address</label>
                <input type="text" class="form-control" id="staffAddress" placeholder="Enter staff address" name="staffAddress" require>
                @error('staffAddress')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                 @enderror
            </div>
            <div class="mb-3" >
                <label for="staffUsername" >Username</label>
                <input type="text" class="form-control" id="staffUsername" placeholder="Enter staff username" name="staffUsername" require>
                @error('staffUsername')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                 @enderror
            </div>

            <div class="mb-3" >
                <label for="staffPassword" >Password</label>
                <input type="text" class="form-control" id="staffPassword" placeholder="Enter staff password" name="staffPassword" require>
                @error('staffPassword')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                 @enderror
            </div>
            
            <div class="mb-3" >
                <label for="staffImage" >Image</label>
                <input type="file" class="form-control" id="staffImage" placeholder="Enter staff image" name="staffImage" require>
                @error('staffImage')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                 @enderror
            </div>

        

        

            <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure to ADD this staff')">Add</button>
            <a href="{{url('list-staff')}}" class="btn btn-danger">Back</a>
        </form>
           

        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>