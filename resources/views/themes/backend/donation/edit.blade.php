@extends('themes.backend.layout.app')

@section('content')
<div class="side-app">
<div class="mb-5">
    <div class="page-header mb-0">
        <h3 class="page-title">Edit Donation Page</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Donation Page</li>
        </ol>
    </div>
</div>

<!-- config form start -->
<div class="row">
<div class="col-lg-12">
    <form  method="post" class="card" action="/eficor/administrator/donation/edit/{{$donationDetails->id}}" enctype="multipart/form-data">
         @csrf
        <div class="card-header">
            <h3 class="card-title">Edit Donation Page</h3>
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
                        <input type="text" class="form-control" value="{{$donationDetails->title}}" name="title" placeholder="Please Enter The Title">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Description<span class="form-label-small">56/100</span></label>
                        <textarea class="form-control" name="description" id="description" rows="6" placeholder="Slider Description">{{$donationDetails->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Keyword Seperate By (,) </label>
                        <input type="text" class="form-control" value="{{$donationDetails->keywords}}" name="keywords" placeholder="Please Enter The Keyword">
                    </div>
                    <div class="form-group">
                        <img src="{{ asset('uploads/pages/') }}/{{@$donationDetails->feature_image_1}}" width="150" height="150" alt="{{$donationDetails->title}}" />
                    </div>
                    <div class="form-group">
                        <div class="form-label">Feature Image 1</div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="featureimage_1">
                            <label class="custom-file-label">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <img src="{{ asset('uploads/pages/') }}/{{@$donationDetails->feature_image_2}}" width="150" height="150" alt="{{$donationDetails->title}}" />
                    </div>
                    <div class="form-group">
                        <div class="form-label">Feature Image 2</div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="featureimage_2">
                            <label class="custom-file-label">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <img src="{{ asset('uploads/pages/') }}/{{@$donationDetails->image_1}}" width="150" height="150" alt="{{$donationDetails->title}}" />
                    </div>
                    <div class="form-group">
                        <div class="form-label">Slider Image 1</div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="slider_image_1">
                            <label class="custom-file-label">Choose file</label>
                        </div>
                    </div> 
                    <div class="form-group">
                        <img src="{{ asset('uploads/pages/') }}/{{@$donationDetails->image_2}}" width="150" height="150" alt="{{$donationDetails->title}}" />
                    </div>
                    <div class="form-group">
                        <div class="form-label">Slider Image 2</div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="slider_image_2">
                            <label class="custom-file-label">Choose file</label>
                        </div>
                    </div> 
                    <div class="form-group">
                        <img src="{{ asset('uploads/pages/') }}/{{@$donationDetails->image_3}}" width="150" height="150" alt="{{$donationDetails->title}}" />
                    </div>
                    <div class="form-group">
                        <div class="form-label">Slider Image 3</div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="slider_image_3">
                            <label class="custom-file-label">Choose file</label>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label class="form-label">Left Content<span class="form-label-small">56/100</span></label>
                        <textarea class="form-control" name="leftcontent" id="leftcontent" rows="6" placeholder="Slider Description">{{$donationDetails->left_content}}</textarea>
                    </div>                   
                    <div class="form-group">
                        <label class="form-label">Right Content<span class="form-label-small">56/100</span></label>
                        <textarea class="form-control" name="rightcontent" id="rightcontent" rows="6" placeholder="Slider Description">{{$donationDetails->right_content}}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Youtube Video<span class="form-label-small">56/100</span></label>
                        <textarea class="form-control" name="video" id="video" rows="6" placeholder="Slider Description">{{$donationDetails->youtube_video}}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Sort</label>
                        <select class="form-control" name="sort">
                            <option value="">Select a Type</option>
                            <?php for($i=1;$i<=30;$i++) { ?>
                            <option value="<?=$i?>" @if($donationDetails->sorting==$i) selected @endif >Sort (<?=$i?>)</option>
                            <?php } ?>
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
    $('#leftcontent').richText();
    $('#rightcontent').richText();

});
</script>
@endsection
