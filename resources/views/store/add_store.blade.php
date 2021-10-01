@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card ">
                <div class="card-header text-white bg-primary">{{ __('Add New Store') }}</div>
                <div class="card-body">
                @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

                @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <h6>{{ $message }}</h6>
        </div>
    @endif 
   
                    <form action="/addstore" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Store Name</label>
                                    <input type="text" class="form-control" name="store_name" id="store_name"  aria-describedby="nameHelp">
                                    <!-- <div id="nameHelp" class="form-text">Add name for new store</div> -->
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Store ID</label>
                                <input type="text" class="form-control" name="store_id" id="store_id"  >
                            </div>
                         </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Score</label>
                                <input type="text" class="form-control" name ="store_score" id="store_score" >
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Store Link</label>
                                <input type="text" class="form-control" name="store_link" id="store_id"  >
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="exampleFormControlSelect1">Select Category</label>
                                <select class="form-control" name="store_category" id="store_category">
                                @foreach($dispcat as $c)
                                <option value="{{$c->category_name}}">{{$c->category_name}}</option>
                                @endforeach
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">                        
                            <label for="exampleFormControlSelect1">Store Image</label>
                                <input type="file" name="store_image" class="form-control-file" placeholder="Upload Image">
                            </div>
                        </div>

                        <div class="mb-3">
                        <label for="exampleFormControlTextarea1">Store Description</label>
                        <textarea class="form-control" name="store_desc" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Add Store</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection