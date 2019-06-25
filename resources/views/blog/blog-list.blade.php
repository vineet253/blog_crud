@extends('layouts.app')

@section('content')

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

                        
                        
<div class="container">
    <div class="row justify-content-center">
                        
 <div class="col-12">
                                 
 <div class="card-box">

                                     

<table class="table table-bordered table-striped">
 <tr>
  <th width="10%">Image</th>
  <th width="35%">Name</th>
  <th width="35%">Description</th>
  <th width="30%">Action</th>
 </tr>
 @foreach($blog as $row)
  <tr>
   <td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
   <td>{{ $row->name }}</td>
   <td>{{ $row->detail }}</td>
   <td>

    <a class="btn btn-danger" href="{{ route('delete-blog',['id'=>$row->id]) }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();">
                                        {{ __('Delete') }}
                                    </a>

                                    <form id="delete-form" action="{{ route('delete-blog', ['id'=>$row->id]) }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>



        <form action="{{ route('delete-blog', $row->id) }}" method="post">
                    
                    <a href="{{ route('edit-blog', $row->id) }}" class="btn btn-warning">Edit</a>
                                     
                </form>
   </td>
  </tr>
 @endforeach
</table>
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>

    
@endsection
   
    