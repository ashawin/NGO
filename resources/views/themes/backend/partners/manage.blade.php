@extends('themes.backend.layout.app')

@section('content')
<div class="side-app">
<div class="mb-5">
    <div class="page-header mb-0">
        <h3 class="page-title">Partner&Inter Ship Pages</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Manage Partner&Inter Ship  Pages</li>
        </ol>
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

<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Manage Partner&Inter Ship </h3>
                <div class="float-right ml-auto">
                    <a href="/eficor/administrator/cms/partner-inter/add" class="btn btn-primary btn-sm"><i class="si si-plus mr-1"></i>Add New Partner&Inter Ship</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table card-table table-vcenter  border text-nowrap">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th class="w-1">Sno</th>
                                <th>Title</th>
                                <th>Group</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ships as $singlePage)
                            <tr>
                                <td><span class="text-muted">#{{$singlePage->id}}</span></td>
                                <td><?=wordwrap($singlePage->title,15,"<br>\n");?></td>
                                <td>{{$singlePage->group}}</td>
                                <td>{{$singlePage->created_at}}</td>
                                <td>
                                    <a href="/eficor/administrator/cms/partner-inter/edit/{{$singlePage->id}}" class="mr-3" data-toggle="tooltip" title="Edit {{$singlePage->title}}" data-original-title="Edit"><i class="fe fe-edit-2 text-dark fs-16"></i></a>

                                    <a href="/eficor/administrator/cms/partner-inter/delete/{{$singlePage->id}}" class="mr-3" data-toggle="tooltip" title="Edit {{$singlePage->title}}" data-original-title="Edit"><i class="fe fe-trash text-dark fs-16"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>                      
</div>
@endsection
