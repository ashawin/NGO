@extends('themes.backend.layout.app')

@section('content')
    <div class="side-app">
        <div class="mb-5">
            <div class="page-header mb-0">
                <h3 class="page-title">Comments</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Comments</li>
                </ol>
            </div>
        </div>

        <!-- config form start -->
        <div class="row">
            <div class="col-lg-12">
                <form  method="post" class="card" action="#" enctype="multipart/form-data">


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
                                                <th class="text-white">First Name</th>
                                                <th class="text-white">Last Name</th>

                                                <th class="text-white">Comments</th>
                                                <th class="text-white">Email</th>
                                                <th class="text-white">Mobile</th>
                                                <th class="text-white">Status</th>
                                                <th class="text-white">Delete</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($comments as $com)
                                                <tr>
                                                    <th scope="row">{{$com->id}}</th>
                                                  <td>{{$com->first_name}}</td>
                                                    <td>{{$com->last_name}}</td>

                                                    <td>{{$com->comments}}</td>
                                                    <td>{{$com->email}}</td>
                                                    <td>{{$com->mobile}}</td>
                                                    <td>
                                                        <?php
                                                            if($com->status==1){
                                                                $status="Already Approved";
                                                                $css="success";
                                                            }
                                                            else{
                                                                $status="Already Rejected";
                                                                $css="danger";
                                                            }
                                                        ?>
                                                        <p style="text-align: center" class=" alert-{{$css}}">{{$status}}</p> <a href="/admin/comment/status/like/{{$com->id}}" type="button" id="dislike" class="btn btn-sm  btn-primary" >Approve</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<a href="/admin/comment/status/dislike/{{$com->id}}" type="button"  class="btn btn-sm  btn-success">Reject</a></td>

                                                    <td>
                                                       <a href="/admin/comment/delete/{{$com->id}}" class="btn btn-sm btn-danger">Delete</a>
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
        <script>

            $("#like").click(function(e) {
                alert('ddfdsf');

                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        id: $("#like").val(),
                        like:1

                    },
                    success: function(result) {

                    },
                    error: function(result) {
                        alert('error');
                    }
                });
            });

        </script>
    </div>
@endsection
