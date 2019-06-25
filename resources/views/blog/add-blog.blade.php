@extends('layouts.app')

@section('content')

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">                   
                       
                            
                       
<form method="POST" action="{{ route('add-blog') }}" enctype="multipart/form-data">
      {{ csrf_field() }}       
  <div class="form-group">
    <label for="text">Name</label>
    <input type="text" name="name" class="form-control" id="nametext" placeholder="Name"required="">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">file</label>
    <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1" required="">
  </div>
 
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" name="detail" id="exampleFormControlTextarea1" rows="3" placeholder="Description" required=""></textarea>
  </div>
  <div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-8">
    <button id="submit" name="submit" class="btn btn-primary" type="submit"> Submit</button>
    <button id="cancel" name="cancel" class="btn btn-default btn-danger" type="cancel">Cancel</button>
  </div>
</div>
</form>

</div>    
</div>
</div> 
 <!-- end page title --> 
                        


@endsection 