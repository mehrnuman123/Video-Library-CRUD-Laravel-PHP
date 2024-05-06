<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <style type="text/css">
    
    .container-fluid{
      height: 300px;
      border-radius: :1px red;
      width: 500px;
      margin-top: 100px;
      background-color:#D2CBD3;
    }
  </style>


<div class="container">
  <a href="{{URL::to('user/controls')}}" class="btn-primary">View uploads</a>
</div>
  <form action="{{URL::to('upload/video')}}" method="post" enctype='multipart/form-data'>
    <div class="container-fluid">
      <input type="file" name="vid_file" style="margin-top: 80px;margin-left: 120px;color: red">

    </div>
    <div class="container">
  <h4>Details </h4>

    <div class="form-group">
      <label for="usr" >Title:</label>
      <input type="text" required="title" class="form-control" name="vid_title">
    </div>
    <div class="form-group">
      <label for="usr">Description:</label>
      <input type="text" required="Description" class="form-control" name="vid_des">
    </div>

    <div class="container">
  <label>Category:</label>
  
    <select name="vid_cat">
    <option><a href="#" class="list-group-item active">Entertainment</a></option>
    <option><a href="#" class="list-group-item">Sports</a></option>
    <option><a href="#" class="list-group-item">Education</a></option>
    </select>
  </div>
</div>
<div class="container">
<label>Thumbnail</label>
<input type="file" value="upload" name="thumbnail">
</div><br><br><br><br>
 <input class="btn btn-primary" type="submit" value="Upload">
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
  </form><br><br><br>
</div>




</body>
</html>
