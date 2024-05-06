<style type="text/css">
	/* Add a black background color to the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: black;

}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the "active" element to highlight the current page */
.topnav a.active {
  background-color: #2196F3;
  color: white;
}

/* Style the search box inside the navigation bar */
.topnav input[type=search] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  width: 400px;
  margin-right: 450px;
  font-size: 18px;
}

/* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
    height: 10px;
  }	
  .btn{
  	float: right;
  	background-color: purple;
  	color: white;
  }
}

</style>


<div class="topnav">
  <a class="active" href="#home">Home</a>

  <a href="{{URL::to('upload/files')}}" style="background-color: brown;float: center;margin-left: 900px;">
  Upload</a>
  <input type="search" name="search_video" placeholder="Search..">
</div>
<h2> All Data </h2>

<table border="1px" align="center" margin-top="50px">
 
@foreach($v_data ?? '' as $row)
       
    
    <video height="200px" width="300px" controls>
      <source src="{{URL::asset("/uploads/$row->path")}}" type="video/mp4">
    </video>
    {{$row->title}}
    

@endforeach
</table>