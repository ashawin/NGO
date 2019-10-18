@extends('themes.backend.layout.app')

@section('content')
    <div class="side-app">
        <div class="mb-5">
            <div class="page-header mb-0">
                <h3 class="page-title">Add Work Location</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Work Location</li>
                </ol>
            </div>
        </div>

        <!-- config form start -->
        <div class="row">
            <div class="col-lg-12">
                <form  method="post" class="card" method="post" action="{{route('work_location_save')}}"  enctype="multipart/form-data">
                    @csrf

                    <div class="card-header">
                        <h3 class="card-title">Add Work Location</h3>
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
                            @if(Session::has('msg'))
                                <div class="alert alert-success">{{ Session::get('msg') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- start fields  -->
                        <div class="row">

                            <div class="col-md-6 col-lg-12">
                                <div class="form-group">
                                    <label class="form-label"> Title</label>
                                    <input type="text" class="form-control" value="" id="title" name="title" placeholder="Please Enter The Title" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label"> Address<span class="form-label-small">56/100</span></label>
                                    <textarea class="form-control" name="address" id="address" rows="6" placeholder="Slider Description" required></textarea>
                                </div>

                            </div>
                        </div>
                        <!-- end fields -->
                        <div class="row">
                            <div class="form-group">
                                <button type="submit"   class="btn btn-primary">Add</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- config form end  -->

    </div>

@endsection
