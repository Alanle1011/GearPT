<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    
    <title>Feedback Editing Page</title>
</head>
<body>
    <div class="container mt-3" >
        <h2>Feedback Editing</h2>
        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
        @endif
        <form action="{{url('update-feedback')}}" method="post" style="margin: 50px">
            @csrf
            <div class="mb-3">
                <label for="feedbackID" >feedback ID</label>
                <input type="text" class="form-control" id="feedbackID" name="feedbackID" value="{{$data->feedbackID}}" readonly >
            </div>
            <div class="mb-3">
                <label for="clientID" >Client ID</label>
                <input type="text" class="form-control" id="clientID" name="clientID" value="{{$data->clientID}}" readonly >
            </div>

            <div class="mb-3">
                <label for="productID" >Product ID</label>
                <input type="text" class="form-control" id="productID" value="{{$data->productID}}" name="productID" readonly>
            @error('productID')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
            @enderror
            </div>
        
            <div class="mb-3" >
                <label for="ranking" >Ranking</label>
                <select class="form-control" name="ranking" id="ranking" require>
                    <option value="{{$data->ranking}}" >
                       {{$data->ranking}}
                    
                    </option>
                  
                    <option value="0"> 
                       0
                    </option>
                    <option value="1"> 
                       1
                    </option>
                    <option value="2"> 
                       2
                    </option>
                    <option value="3"> 
                       3
                    </option>
                    <option value="4"> 
                       4
                    </option>
                    <option value="5"> 
                       5
                    </option>
                    
                </select>
                @error('ranking')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                 @enderror
            </div>
            <div class="mb-3" >
                <label for="comment" >Comment</label>
                <input type="text" class="form-control" id="comment" value="{{$data->comment}}" name="comment" >
            </div>

           

    
        

            <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure to EDIT this feedback')">Edit</button>
            <a href="{{url('list-feedback')}}" class="btn btn-danger">Back</a>
        </form>
           

        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>