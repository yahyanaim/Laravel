
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
<style>
.title
{
  margin-bottom: 5%;
}
.table
{
    margin-top: 2%;
}


</style>


<x-app-layout>
    <div class="title"></div>
    <center>Table Posts</center>
@if(Session::has('post_delete'))  
<span>{{Session::get('post_delete')}}</span> 
@endif 
@if(Session::has('user_delete'))  
<span>{{Session::get('user_delete')}}</span> 
@endif 
<div class="container table-responsive py-5"> 
    <table class="table table-bordered">
      <thead style="background: light;">
        <tr>
          <th scope="col">Id</th>
          <th scope="col">name</th>
          <th scope="col">email</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      @foreach($users as $user)
      <tbody> 
        <tr>
          <td>{{$user -> id}}</td>
          <td>{{$user -> name}}</td>
          <td>{{$user -> email}}</td>
          {{-- <td>{{$user -> role}}</td> --}}
          <td>
          <a href="/delete-user/{{$user -> id}}"> Delete User </a> 
        
          </td>
        </tr>
      </tbody>
      @endforeach

    
    </table>
    
    <center style="margin-top: 5%">Table Users</center>
    <table class="table table-bordered">
        <thead style="background: light;">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">title</th>
            <th scope="col">body</th>
            <th scope="col">question's post</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
      @foreach($posts as $post)
      <tbody> 
        <tr>
          <td>{{$post -> id}}</td>
          <td>{{$post -> title}}</td>
          <td>{{$post -> body}}</td>
          <td>{{$post -> user_id}}</td>
          <td>
         
          <a href="/delete-post/{{$post -> id}}"> Delete Post </a>
          </td>
        </tr>
      </tbody>
      @endforeach
    </table>
    </div>
    

</x-app-layout>
