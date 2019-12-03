@extends('themes.backend.layout.app')

@section('content')
<div class="side-app">
<div class="mb-5">
    <div class="page-header mb-0">
        <h3 class="page-title">Add Financial Details List</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Financial Details</li>
        </ol>
    </div>
</div>

<!-- config form start -->
<div class="row">
<div class="col-lg-12">
        <div class="card-header">
            <h3 class="card-title">Add Financial Details list</h3>
            <div class="float-right ml-auto">
{{--                <a href="/eficor/administrator/cms/about-financials/add" class="btn btn-primary btn-sm"><i class="si si-plus mr-1"></i>Add Financial </a>--}}
                <a href="/eficor/administrator/cms/about-financials-details/add" class="btn btn-primary btn-sm"><i class="si si-plus mr-1"></i>Add Financial </a>
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
                <div class="table-responsive">
                            <table class="table card-table table-vcenter text-nowrap table-primary">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th class="text-white">ID</th>
                                        <th class="text-white">Name</th>
                                        <th class="text-white">Group</th>
                                        <th class="text-white">Pdf</th>
                                        <th class="text-white">Created at</th>
                                        <th class="text-white">Delete</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pageFin as $singleFin)
                                    <tr>
                                        <th scope="row">{{$singleFin->id}}</th>
                                        <td>{{$singleFin->title}}</td>
                                        <td>
                                            <?php 
                                            $pageFins = DB::table('page_fin')->where('id',$singleFin->f_id)->first();
                                            echo $pageFins->title;
                                            ?>
                                         </td>
                                        <td><a href="/eficor/administrator/cms/team/delete/{{$singleFin->id}}" class="btn btn-sm btn-info">PDF VIEW</a></td>
                                        <td>{{$singleFin->created_at}}</td>
                                        <td>
                                            <a href="/eficor/administrator/cms/about-financials/edit/{{$singleFin->id}}" class="mr-3" data-toggle="tooltip" title="Edit " data-original-title="Edit"><i class="fe fe-edit-2 text-dark fs-16"></i></a>

                                            <a href="/eficor/administrator/cms/about-financials-details/delete/{{$singleFin->id}}?fId={{$singleFin->f_id}}" class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                
            </div>
            <!-- end fields -->
        </div>
</div>
</div>  
<!-- config form end  -->
                     
</div>
@endsection