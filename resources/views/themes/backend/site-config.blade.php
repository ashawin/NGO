@extends('themes.backend.layout.app')
@section('content')
<div class="side-app">
<div class="mb-5">
    <div class="page-header mb-0">
        <h3 class="page-title">Dashboard</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </div>
</div>
<!-- config form start -->
<div class="row">
<div class="col-lg-12">
    <form  method="post" class="card" action="/eficor/administrator/site-config" enctype="multipart/form-data">
         @csrf
        <div class="card-header">
            <h3 class="card-title">Site Configuration</h3>
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
                <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                        <img src="{{ asset('uploads/settings/') }}/{{$settings->logo}}" width="350" height="150">
                    </div>
                    <div class="form-group">
                        <div class="form-label">Site Logo</div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="logo">
                            <label class="custom-file-label">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label">Site Favico</div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="favico">
                            <label class="custom-file-label">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label">Footer Image</div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="footer_img">
                            <label class="custom-file-label">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Site Tile</label>
                        <input type="text" class="form-control" value="{{$settings->title}}" name="title" placeholder="Please Enter The Title">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Short Intro <span class="form-label-small">56/100</span></label>
                        <textarea class="form-control" name="short_intro" rows="6" placeholder="Short Intro">{{$settings->short_intro}}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Long Summary</label>
                        <textarea class="form-control" name="long_summary" rows="6" placeholder="Long Summary">{{$settings->long_summary}}</textarea>
                    </div>            
                    <div class="form-group">
                        <label class="form-label">Phone</label>
                        <input type="text" class="form-control" value="{{$settings->phone}}" name="phone" placeholder="Phone...">
                    </div>
                    <!--is-valid state-valid  -->
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" value="{{$settings->email}}" name="email" placeholder="Email..">
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Timming</label>
                        <input type="text" class="form-control" value="{{$settings->timing}}" name="timing" placeholder="Timming..">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Location</label>
                        <input type="text" class="form-control" value="{{$settings->location}}" name="location" placeholder="Location..">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Facebook</label>
                        <input type="text" class="form-control" value="{{$settings->facebook}}" name="facebook" placeholder="Facebook...">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Twitter</label>
                        <input type="text" class="form-control" value="{{$settings->twitter}}" name="twitter" placeholder="Twitter...">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Google Plus</label>
                        <input type="text" class="form-control" value="{{$settings->google_plus}}" name="google_plus" placeholder="Google Plus...">
                    </div>                    
                    <div class="form-group">
                        <label class="form-label">Instagram</label>
                        <input type="text" class="form-control" value="{{$settings->instagram}}" name="instagram" placeholder="Instagram">
                    </div>                    
                    <div class="form-group">
                        <label class="form-label">Youtube</label>
                        <input type="text" class="form-control" value="{{$settings->youtube}}" name="youtube" placeholder="Youtube">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Footer 1 <span class="form-label-small">56/100</span></label>
                        <textarea class="form-control" name="footer_1" rows="6" placeholder="Short Intro">{{$settings->footer_1}}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Footer 2 <span class="form-label-small">56/100</span></label>
                        <textarea class="form-control" name="footer_2" rows="6" placeholder="Short Intro">{{$settings->footer_2}}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Footer 3 <span class="form-label-small">56/100</span></label>
                        <textarea class="form-control" name="footer_3" rows="6" placeholder="Short Intro">{{$settings->footer_3}}</textarea>
                    </div>
                </div>
            </div>
            <!-- end fields -->
            <div class="row">
                <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                </div>                    
            </div>
        </div>
    </form>
</div>
</div>  
<!-- config form end  -->
                     
</div>
@endsection
