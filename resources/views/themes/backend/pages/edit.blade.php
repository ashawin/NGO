@extends('themes.backend.layout.app')

@section('content')
<div class="side-app">
<div class="mb-5">
    <div class="page-header mb-0">
        <h3 class="page-title">Edit Slider</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Slider</li>
        </ol>
    </div>
</div>

<!-- config form start -->
<div class="row">
<div class="col-lg-12">
    <form  method="post" class="card" action="/eficor/administrator/slider/edit/{{$singleSlider->id}}" enctype="multipart/form-data">
         @csrf
        <div class="card-header">
            <h3 class="card-title">Edit Slider</h3>
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
                        <img src="{{ asset('uploads/slider/') }}/{{@$singleSlider->image}}" width="150" height="150" alt="" />
                    </div>
                    <div class="form-group">
                        <div class="form-label">Slider Image</div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image">
                            <label class="custom-file-label">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Slider Tile</label>
                        <input type="text" class="form-control" value="{{$singleSlider->title}}" name="title" placeholder="Please Enter The Title">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Slider Description<span class="form-label-small">56/100</span></label>
                        <textarea class="form-control" name="description" rows="6" placeholder="Slider Description">{{$singleSlider->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Slider Link</label>
                        <input type="text" class="form-control" value="{{$singleSlider->link}}" name="link" placeholder="Please Enter The Title">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Slider Status</label>
                        <select class="form-control" name="status">
                            <option @if($singleSlider->status==1) Selected @endif value="1">Enable</option>
                            <option @if($singleSlider->status==0) Selected @endif value="0">Disable</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- end fields -->
            <div class="row">
                <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update Slider</button>
                        <a href="/eficor/administrator/slider/manage-slider" class="btn btn-danger">Cancel</a>
                </div>                    
            </div>
        </div>
    </form>
</div>
</div>  
<!-- config form end  -->
                     
</div>
@endsection
