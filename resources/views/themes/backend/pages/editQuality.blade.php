@extends('themes.backend.layout.app')

@section('content')
    <div class="side-app">
        <div class="mb-5">
            <div class="page-header mb-0">
                <h3 class="page-title">Edit QUALITY STANDARDS</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit QUALITY STANDARDS</li>
                </ol>
            </div>
        </div>

        <!-- config form start -->
        <div class="row">
            <div class="col-lg-12">
                <form  method="post" class="card" action="/eficor/administrator/cms/quality/edit" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$quality->id}}">
                    <input type="hidden" name="imagename" value="{{$quality->image}}">
                    <div class="card-header">
                        <h3 class="card-title">Edit QUALITY STANDARDS</h3>
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
                                    <input type="text" class="form-control" value="{{$quality->title}}" name="title" placeholder="Please Enter The Title">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" name="desc">{{$quality->title}}</textarea>
                                </div>

                                <div class="form-group">
                                    <img src="{{asset('uploads/pages/'.$quality->image)}}" height="100" width="100" alt="no image">

                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end fields -->
                        <div class="row">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- config form end  -->
    </div>
@endsection
