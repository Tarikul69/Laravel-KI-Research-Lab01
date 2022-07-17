@extends('admin.home')
@section('editnews')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css"  href="public/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/assets/css/responsive.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css"  href="public/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/assets/css/responsive.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <div class="container">
 
         
         <form action="{{url('update/'.$abc->id)}}" method="POST">
             @csrf
             @method('PUT')

         @if(Session::get('success'))
         <div class="alert alert-success">
             {{Session::get('success')}}
         </div>
         @endif

         @if(Session::get('fail'))
         <div class="alert alert-danger">
             {{Session::get('fail')}}
         </div>
         @endif

        @if($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        @endif
             <center>
                <h2>News</h2>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlInput1"><b>Title:</b></label>
                    <input type="text" class="form-control" name="name" value="{{$abc->name}}" id="exampleFormControlInput1">
                     
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1"><b>Notice:</b></label><br>
                    <textarea type="text" class="form-control col container" name="notice" value="{{$data->notice}}" id="tast_textarea" rows="10"></textarea>
                </div>
                <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Submit">
                </div>

             </center>
         </form>
     </div>
     </body>
</html>
@endsection
@section('script')
<script>


        ClassicEditor
                .create( document.querySelector( '#tast_textarea' )  )
                .then( editor => {
                        console.log( editor );
                } )
                .catch( error => {
                        console.error( error );
                } );
</script>
@endsection