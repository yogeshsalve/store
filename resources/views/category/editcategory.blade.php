@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Update Category') }}</div>
                <div class="card-body">

                @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <h6>{{ $message }}</h6>
        </div>
    @endif 
                   
                    <form action="/editcategory" method="POST">
                    @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Category Name</label>
                            <input type="hidden" class="form-control" name="id" id="category_name" required aria-describedby="nameHelp" value="{{$category->id}}">
                            <input type="text" class="form-control" name="category_name" id="category_name" required aria-describedby="nameHelp" value="{{$category->category_name}}">
                            <!-- <div id="nameHelp" class="form-text">Add name for new store</div> -->
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Update Category</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection