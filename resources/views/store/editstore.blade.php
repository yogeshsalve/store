@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Add New Store') }}</div>
                <div class="card-body">

                @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <h6>{{ $message }}</h6>
        </div>
    @endif 
                   
                    <form action="/editstore" method="POST">
                    @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Store Name</label>
                            <input type="hidden" class="form-control" name="id" id="store_name" required aria-describedby="nameHelp" value="{{$store->id}}">
                            <input type="text" class="form-control" name="store_name" id="store_name" required aria-describedby="nameHelp" value="{{$store->store_name}}">
                            <!-- <div id="nameHelp" class="form-text">Add name for new store</div> -->
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Store ID</label>
                            <input type="text" class="form-control" name="store_id" id="store_id" rquired value="{{$store->store_id}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Score</label>
                            <input type="text" class="form-control" name ="store_score" id="store_score" required value="{{$store->store_score}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Add Store</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection