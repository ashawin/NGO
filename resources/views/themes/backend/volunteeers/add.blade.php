@extends('themes.backend.layout.app')

@section('content')
<div class="side-app">
<div class="mb-5">
    <div class="page-header mb-0">
        <h3 class="page-title">Add Volunteeer Page</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Volunteeer Page</li>
        </ol>
    </div>
</div>

<!-- config form start -->
<div class="row">
<div class="col-lg-12">
    <form  method="post" class="card" action="/eficor/administrator/cms/volunteeers/add" enctype="multipart/form-data">
         @csrf
        <div class="card-header">
            <h3 class="card-title">Add Volunteeer Page</h3>
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
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Please Enter The Name">
                    </div>
                    <br/>
                    <div class="form-group">
                        <label class="form-label">Description<span class="form-label-small">56/100</span></label>
                        <textarea class="form-control" name="description" rows="6" placeholder="Please Enter The Description"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="form-label">Photo</div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image">
                            <label class="custom-file-label">Choose Photo file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Please Enter The email">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Mobile</label>
                        <input type="text" class="form-control" name="mobile" placeholder="Please Enter The Mobile">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Gender</label>
                        <select class="form-control" name="sex">
                            <option value="0">Select a Gender</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Branch (Country)</label>
                        <input type="text" class="form-control" name="branch" placeholder="Please Enter The Title">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Message</label>
                        <textarea class="form-control" name="msg" placeholder="Please Enter The Message"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Resume</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="resume">
                            <label class="custom-file-label">Choose Resume file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Date Of Birth</label>
                        <input type="text" class="form-control" value="" name="date_of_Birth" placeholder="Please Enter The Date Of Birth">
                    </div>                    
                    <div class="form-group">
                        <label class="form-label">Facebook</label>
                        <input type="text" class="form-control" value="" name="facebook" placeholder="Please Enter The Facebook">
                    </div> 
                    <div class="form-group">
                        <label class="form-label">Google Plus</label>
                        <input type="text" class="form-control" value="" name="google_Plus" placeholder="Please Enter The Google Plus">
                    </div> 
                    <div class="form-group">
                        <label class="form-label">Twitter</label>
                        <input type="text" class="form-control" value="" name="twitter" placeholder="Please Enter The Twitter">
                    </div> 
                    <div class="form-group">
                        <label class="form-label">Instagram</label>
                        <input type="text" class="form-control" value="" name="instagram" placeholder="Please Enter The Instagram">
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
