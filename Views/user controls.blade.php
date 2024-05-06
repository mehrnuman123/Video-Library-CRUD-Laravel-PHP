<h2> Your Uploaded Files </h2>

<table border="1px" align="center" margin-top="50px" class="table">
  <thead class="black white-tex">
  <tr>
    <th>id</th>
    <th> Video </th>
    <th> Title </th>
    <th> Descripton </th>
    <th> Category </th>
  
    <th colspan="2"> User Controls </th>
  </tr>
  </thead>
@foreach($u_data ?? '' as $row)
<tr>
    <td>{{$row->id}}</td>
    <td><video><source src="{{URL::asset("/uploads/$row->path")}}" type="video/mp4"></video></td>
    <td>{{$row->title}}</td>
     <td>{{$row->category}}</td>
    <td> <a href="edit-product/{{$row->id}}" > Edit </a></td>
    <td> <a href="delete-video/{{$row->id}}" > Delete </a> </td>
</tr>
@endforeach
</table>
