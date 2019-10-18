@extends('themes.backend.layout.app')

@section('content')
    <div class="side-app">
        <div class="mb-5">
            <div class="page-header mb-0">
                <h3 class="page-title">Add jobs</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add jobs</li>
                </ol>
            </div>
        </div>

        <!-- config form start -->
        <div class="row">
            <div class="col-lg-12">
                <form  method="post" class="card" action="{{route('editsave_job')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$jobdetails->id}}">
                    <div class="card-header">
                        <h3 class="card-title">Edit jobs</h3>
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
                                    <label class="form-label">Job Tile</label>
                                    <input type="text" class="form-control" value="{{$jobdetails->title}}" name="title" placeholder="Please Enter The Title">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Job Description<span class="form-label-small">56/100</span></label>
                                    <textarea class="form-control" name="desc" rows="6" placeholder="Slider Description">{{$jobdetails->desc}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Job duration</label>
                                    <select class="form-control" name="duration">
                                        <option value="{{$jobdetails->duration}}" selected>{{$jobdetails->duration}}</option>
                                        <option value="0-6 month">0-6 month</option>
                                        <option value="6-12 month">6-12 month</option>
                                        <option value="12-24 month">12-24 month</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Job location<span class="form-label-small">56/100</span></label>
                                    <textarea class="form-control" name="location" rows="6" placeholder="Slider Description">{{$jobdetails->location}}</textarea>
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
