@extends('themes.backend.layout.app')

@section('content')
<div class="side-app">
<div class="mb-5">
    <div class="page-header mb-0">
        <h3 class="page-title">List Team</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">List Team</li>
        </ol>
    </div>
</div>

<!-- config form start -->
<div class="row">
<div class="col-lg-12">
    <form  method="post" class="card" action="#" enctype="multipart/form-data">
         @csrf
        <div class="card-header">
            <h3 class="card-title">Add Team</h3>
            <div class="float-right ml-auto">
                <a href="/eficor/administrator/cms/team/add" class="btn btn-primary btn-sm"><i class="si si-plus mr-1"></i>Add New</a>
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
                                        <th class="text-white">Name</th>
                                        <th class="text-white">Position</th>
                                        <th class="text-white">Group</th>
                                        <th class="text-white">Delete</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($teamList as $singleTeam)
                                    <tr>
                                        <th scope="row">{{$singleTeam->id}}</th>
                                        <td><img src="{{ asset('uploads/team/') }}/{{$singleTeam->image}}" alt="{{$singleTeam->name}}" width="100" height="100" /></td>
                                        <td>{{$singleTeam->name}}</td>
                                        <td>{{$singleTeam->role}}</td>
                                        <td>
                                            @if($singleTeam->group==1)
                                                Board and Society
                                            @elseif($singleTeam->group==2)
                                                Directors
                                            @elseif($singleTeam->group==3)
                                                Managers
                                            @else 

                                            @endif

                                        </td>
                                        <td>
                                            <a href="/eficor/administrator/cms/team/edit/{{$singleTeam->id}}" class="mr-3" data-toggle="tooltip" title="Edit " data-original-title="Edit"><i class="fe fe-edit-2 text-dark fs-16"></i></a>
                                            <a href="/eficor/administrator/cms/team/delete/{{$singleTeam->id}}" class="btn btn-sm btn-danger">Delete</a>
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
