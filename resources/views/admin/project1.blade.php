@extends('admin.home')
@section('project1')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
</head>
<body>
    <section>
        <div class="container col">
            <center>
            <h3>Add Project</h3>
            <form action="{{url('project1')}}" method="post">
            @if($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif
            @csrf

                <label for=""><b>Project Name:</b></label><br>
                <input type="text" name="pname" ><br>
                <label for=""><b>Project Details:</b></label><br>
                <textarea id="tast_textarea" name="details" placeholder="Write here...." cols="50" rows="6"></textarea><br>
                <input type="submit" value="Add" class="btn btn-secondary">
            </form>
            </center>
        </div>  
        <!-- <div class="container col">
            <h3>Add Previous Project</h3>
            <form action="" method="post">
                <label for=""> Project Name: </label>
                <input type="text" name="pname1"><br>
                <input type="submit" value="Add" class="btn btn-primary">
            </form>
        </div> -->      
    </section>
    <br>
    <br>
    <section>
        <div>
            <center><h3>Projects</h3></center>
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Date</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($gf as $bf)
                    <tr>
                    <th scope="row">{{$bf -> id}}</th>
                    <td>{{$bf -> name}}</td>
                    <td>{{$bf -> date}}</td>
                    <td><a href="{{url('editproject/'.$bf->id)}}" class="btn btn-secondary">Edit</a> </td>
                    <td><a href="{{url('delete1/'.$bf->id)}}" class="btn btn-danger">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
                </table>

        </div>
         
    </section>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>

                 
</body>
</html>
@endsection
@section('script')
<script>
                        ClassicEditor
                                .create( document.querySelector( '#tast_textarea' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                </script>
@endsection