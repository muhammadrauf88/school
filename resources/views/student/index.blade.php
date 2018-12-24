@extends('master')

@section('content')


  <div class="notification is-black">         
<h1 class="title is-size-5" style="margin-top:0px;">STUDENT DATA</h1> 
 <p class="control has-text-right">
            <a class="button is-light" href="">
              <span class="icon">
                <i class="fas fa-download" ></i>
              </span>
              <span>Download</span>
            </a>
          </p>
</div>

<div class="container">
  <div class="notification is-primary">
    
      
     @if(\Session::has('success'))
      <div class="notification is-dark">
        <p>{!! \session::get('success') !!}</p>
      </div>
    @endif



    
      <table class="table table-bordered">
    <tr>
    	<th>First Name</th>
    	<th>Last Name </th>  
      <th>Created Time</th>
    	<th>Edit</th>
    	<th>Delete</th>
      <th>Midterm</th>
      <th>Final</th>
      <th>Average</th>
    </tr>
    @foreach($students as $row)
      <tr>
      	<td>{{$row['first_name']}}</td>
      	<td>{{$row['last_name']}}</td>
        <td>{{$row['created_at']}}</td>
      	<td>
          <!-- Edit student button  -->
          {{-- <a href="{{ action('studentcontroller@edit', $row['id'])}}" class="button is-warning">
            Edit
          </a> --}}
        </td>
      	<td>
          <!-- Delete student button  -->
          {{-- <form
            class="delete-form"
            method="post"
            action="{{ action('studentcontroller@destroy', $row['id']) }}">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="DELETE"/>
            <button type="submit" class="button is-danger">Delete</button>  
          </form> --}}
        </td>
        <td>
          75/100
        </td>
        <td>
          85/100
        </td>
        <td>
          <span class="tag">
            80%
          </span>
        </td>

      </tr>
    @endforeach	
   </table>  
  </div>
</div>
  <script>
    $(document).ready(function(){
      $('.delete-form').on ('submit', function() {
          if(confirm("Are you sure you want to delete it? ")) {
            return true;
          } else {
            return false;
          }
        });
    });

</script>



@endsection