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
                <form  method="post" class="card" action="{{route('quick_lin_policy_save')}}" enctype="multipart/form-data">
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
                                    <label class="form-label">Description<span class="form-label-small">56/100</span></label>
                                    <textarea class="form-control" name="description" id="description" rows="6" placeholder="Please Enter The Description"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Type</label>
                                    <select class="form-control" name="type">
                                        <option value="">Select a Page Type</option>
                                        <option value="privacypolicy">privacypolicy</option>
                                        <option value="termsandcondition">termsandcondition</option>
                                        <option value="ref">refandcanc</option>
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
