@extends('admin.home')
@section('team')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css"  href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <Center><h1>Team</h1></Center>
    <form class="col-4 container" action="/team11" method="post" enctype="multipart/form-data">
      @csrf 
      <label><b>Name:</b></label>
      <br>
      <input type="text" name='name'>
      @error('name')<div class="alert alert-danger">{{ $message }}</div>@enderror

      <br>
      <label><b>Short Bio:</b></label><br>
      <textarea id="tast_textarea" name="bio" cols="30" placeholder="Write here....."></textarea>
      @error('bio')<div class="alert alert-danger">{{ $message }}</div>@enderror
      <label><b>Rank: </b></label><br>
      <select class="form-select" aria-label="Default select example" name="rank">
      <option selected >..Select Rank..</option>
      <option value="Principal investigator">Principal investigator</option>
      <option value="Research assistant">Research Assistant</option>
      <option value="Content Developer">Content Developer</option>
      <option value="External ContributorOne">External ContributorOne</option>
      @error('rank')<div class="alert alert-danger">{{ $message }}</div>@enderror
      </select><br>
 
      <label><b>Image:</b></label>
      <input class="form-control"  name="photo" type="file">
      @error('photo')<div class="alert alert-danger">{{ $message }}</div>@enderror
      <br>
      <input class="btn btn-secondary" type="submit" name="" value="Submit" id="">
      <br>
      <br>
    </form>
    
</div>
<table class="table">
  
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Bio</th>
      <th scope="col">Rank</th>
      <th scope="col"></th>
      <th scope="col"></th>


    </tr>
  </thead>
  <tbody>
    @foreach($abcd as $k)
    <tr>
      <th scope="row">{{$k -> id}}</th>
      <td>{{$k -> name}}</td>
      <td><img style="hight: 30px; width: 30px;" src="{{asset($k -> img)}}" alt=""></td>
      <td>{!! $k -> bio !!}</td>
      <td>{{$k-> rank}}</td>
      <td><a href="{{url('editteam/'.$k->id)}}" class="btn btn-secondary">Edit</a></td>
      <td><a href="{{url('deleteTeam/'.$k->id)}}" class="btn btn-danger">Delete</a></td>

    </tr>
    @endforeach
  </tbody>
  
</table>
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