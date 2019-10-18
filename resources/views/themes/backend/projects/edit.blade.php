@extends('themes.backend.layout.app')

@section('content')
<div class="side-app">
<div class="mb-5">
    <div class="page-header mb-0">
        <h3 class="page-title">Edit projects Page</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit projects Page</li>
        </ol>
    </div>
</div>

<!-- config form start -->
<div class="row">
<div class="col-lg-12">
    <form  method="post" class="card" action="/eficor/administrator/projects/edit/{{$donationDetails->id}}" enctype="multipart/form-data">
         @csrf
        <div class="card-header">
            <h3 class="card-title">Edit projects Page</h3>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
            @if($errors->any())
                    <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                    </div>
                @endif  
                @if(Session::has('flash_message_error'))
                    <div class="alert alert-danger">{{ Session::get('flash_message_error') }}</div>
                @endif
                @if(Session::has('flash_message'))
                     <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
                @endif 
            </div>
        </div>
        <div class="card-body">
            <!-- start fields  -->
            <div class="row">

                <div class="col-md-6 col-lg-12">
                    <div class="form-group">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" value="{{$donationDetails->title}}" name="title" placeholder="Please Enter The Name">
                    </div>
                    <br/>
                    <div class="form-group">
                        <label class="form-label">Short Description</label>
                        <textarea class="form-control" name="short_description" rows="6" placeholder="Please Enter The Short Description">{{$donationDetails->short_description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Description<span class="form-label-small">56/100</span></label>
                        <textarea class="form-control" name="description" id="description" rows="6" placeholder="Please Enter The Description">{{$donationDetails->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <img src="{{ asset('uploads/pages/') }}/{{@$donationDetails->image}}" width="150" height="150" alt="" />
                    </div>
                    <div class="form-group">
                        <div class="form-label">Feature Images</div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="featureimage_1">
                            <label class="custom-file-label">Choose Feature Image file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Category</label>
                        <input type="text" class="form-control" value="{{$donationDetails->category}}" name="category" placeholder="Please Enter The Category">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Author</label>
                        <input type="text" class="form-control" value="{{$donationDetails->author}}" name="author" placeholder="Please Enter The Author">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Type</label>
                        <select class="form-control" name="type">
                            <option value="0">Select a Page Type</option>
                            <option value="1" @if($donationDetails->type==1) selected @endif >Projects</option>
                            <option value="2" @if($donationDetails->type==2) selected @endif >News</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- end fields -->
            <div class="row">
                <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                </div>                    
            </div>
        </div>
    </form>
</div>
</div>  
<!-- config form end  -->
                     
</div>
@endsection
@section('addCustomJS')
<script>
jQuery( document ).ready(function($) {
    
    $('#description').richText();

});
</script>
@endsection
