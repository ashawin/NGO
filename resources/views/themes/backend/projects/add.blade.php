@extends('themes.backend.layout.app')

@section('content')
<div class="side-app">
<div class="mb-5">
    <div class="page-header mb-0">
        <h3 class="page-title">Add Page</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Page</li>
        </ol>
    </div>
</div>

<!-- config form start -->
<div class="row">
<div class="col-lg-12">
    <form  method="post" class="card" action="/eficor/administrator/projects/add" enctype="multipart/form-data">
         @csrf
        <div class="card-header">
            <h3 class="card-title">Add Page</h3>
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
                        <input type="text" class="form-control" name="title" placeholder="Please Enter The Name">
                    </div>
                    <br/>
                    <div class="form-group">
                        <label class="form-label">Short Description</label>
                        <textarea class="form-control" name="short_description" rows="6" placeholder="Please Enter The Short Description"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Description<span class="form-label-small">56/100</span></label>
                        <textarea class="form-control" name="description" id="description" rows="6" placeholder="Please Enter The Description"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="form-label">Feature Images</div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image">
                            <label class="custom-file-label">Choose Feature Image file</label>
                        </div>
                        <p> Size of  news image should be 360 X 195(width 360 and height 195) and project 360 X 220 (width 360 and height 220) </p>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Category</label>
                        <input type="text" class="form-control" name="category" placeholder="Please Enter The Category">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Author</label>
                        <input type="text" class="form-control" name="author" placeholder="Please Enter The Author">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Type</label>
                        <select class="form-control" name="type">
                            <option value="0">Select a Page Type</option>
                            <option value="1">Projects</option>
                            <option value="2">News</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- end fields -->
            <div class="row">
                <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add New</button>
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