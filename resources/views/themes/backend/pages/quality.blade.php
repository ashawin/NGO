@extends('themes.backend.layout.app')

@section('content')
    <div class="side-app">
        <div class="mb-5">
            <div class="page-header mb-0">
                <h3 class="page-title">Quality List</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Quality List</li>
                </ol>
            </div>
        </div>

        <!-- config form start -->
        <div class="row">
            <div class="col-lg-12">
                <form  method="post" class="card" action="#" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <h3 class="card-title"> Quality</h3>
                        <div class="float-right ml-auto">
                            <a href="{{route('addquality')}}" class="btn btn-primary btn-sm"><i class="si si-plus mr-1"></i>Add New</a>
                        </div>
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
                            <div class="col-md-12 col-lg-12">
                                <div class="card">
                                    <div class="table-responsive">
                                        <table class="table card-table table-vcenter text-nowrap table-primary">
                                            <thead class="bg-primary text-white">
                                            <tr>
                                                <th class="text-white">ID</th>
                                                <th class="text-white">Image</th>
                                                <th class="text-white">Title</th>
                                                <th class="text-white">Description</th>

                                                <th class="text-white">Action</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($quality as $qa)
                                                <tr>
                                                    <th scope="row">{{$qa->id}}</th>
                                                    <td><img src="{{ asset('uploads/pages/') }}/{{$qa->image}}" alt="No image" width="200" height="100" /></td>
                                                    <td>{{$qa->title}}</td>
                                                    <td>{{$qa->description}}</td>


                                                    <td>
                                                        <a href="/eficor/administrator/cms/quality/edit/{{$qa->id}}" class="mr-3" data-toggle="tooltip" title="Edit " data-original-title="Edit"><i class="fe fe-edit-2 text-dark fs-16"></i></a>
                                                        <a href="/eficor/administrator/cms/quality/delete/{{$qa->id}}" class="btn btn-sm btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- table-responsive -->
                                </div>
                            </div>
                        </div>
                        <!-- end fields -->
                    </div>
                </form>
            </div>
        </div>
        <!-- config form end  -->

    </div>
@endsection
