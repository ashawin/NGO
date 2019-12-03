@extends('themes.backend.layout.app')

@section('content')
    <div class="side-app">
        <div class="mb-5">
            <div class="page-header mb-0">
                <h3 class="page-title">Donater Lists</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Donater Lists</li>
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

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table card-table table-vcenter  border text-nowrap">
                                <thead class="bg-primary text-white">
                                <tr>
                                    <th class="w-1">Sno</th>
                                    <th>Title</th>
                                    <th>Name</th>
                                    <th>Donate For </th>
                                    <th>Amount</th>
                                    <th>Created At</th>
{{--                                    <th>Action</th>--}}
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($dpages as $singlePage)
                                    <tr>
                                        <td><span class="text-muted">#{{$singlePage->id}}</span></td>
                                        <td><?=wordwrap($singlePage->title,15,"<br>\n");?></td>

                                        <td>{{$singlePage->first_name}}</td>
                                        <td>{{$singlePage->donate_for}}</td>
                                        <td>{{$singlePage->amount}}</td>
                                        <td>{{$singlePage->created_at}}</td>
{{--                                        <td>--}}
{{--                                            <a href="/eficor/administrator/donation/edit/{{$singlePage->id}}" class="mr-3" data-toggle="tooltip" title="Edit {{$singlePage->title}}" data-original-title="Edit"><i class="fe fe-edit-2 text-dark fs-16"></i></a>--}}

{{--                                            <a href="/eficor/administrator/donation/delete/{{$singlePage->id}}" class="mr-3" data-toggle="tooltip" title="Delete {{$singlePage->title}}" data-original-title="Edit"><i class="fe fe-trash text-dark fs-16"></i></a>--}}
{{--                                        </td>--}}
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