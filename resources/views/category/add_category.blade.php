@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Add New Category') }}</div>
                <div class="card-body">
                                @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <h6>{{ $message }}</h6>
                        </div>
                    @endif 
                   
                    <form action="/addcategory" method="POST">
                    @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Category Name</label>
                            <input type="text" class="form-control" name="category_name" id="category_name" required aria-describedby="nameHelp">
                            <div id="nameHelp" class="form-text">Add name for new category</div>                            
                        </div>
                                       
                        <button type="submit" class="btn btn-primary">Add Category</button>
                    </form>
                    
                </div>
            </div>
        </div>
        <div class="col-md-8">
        <div class="card">
                <div class="card-header">{{ __('All Categories') }}</div>
                <div class="card-body">                            
                   
                <table class="table">
  <thead>
    <tr>
      <th class="col-2" scope="col">ID</th>
      <th class="col-6" scope="col">CATEGORY NAME</th> 
      <th class="col-4" scope="col">ACTION</th>     
    </tr>
  </thead>
  <tbody>
      @foreach($category as $c)
    <tr>
      <td class="col-2">{{$c->id}}</td>
      <td class="col-6">{{$c->category_name}}</td> 
      <td class="col-4"><a href="/editcategory/{{$c->id}}"><button type="submit" class="btn btn-success mr-1" >EDIT</button></a><a href="/deletecategory/{{$c->id}}"><button type="submit" class="btn btn-danger mr-1" onclick="return confirm('Are you sure?')">DELETE</button></a></td>  
          
    </tr>
    @endforeach  
    

  </tbody>
</table>
                    
                </div>
            </div>

        </div>

    </div>
</div>
@endsection