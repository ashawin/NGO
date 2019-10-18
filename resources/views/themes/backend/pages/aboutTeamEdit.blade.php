@extends('themes.backend.layout.app')


@section('content')
    <div class="side-app">
        <div class="mb-5">
            <div class="page-header mb-0">
                <h3 class="page-title">Edit Team</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Team</li>
                </ol>
            </div>
        </div>

        <!-- config form start -->
        <div class="row">
            <div class="col-lg-12">
                <form  method="post" class="card" action="{{route('saveeditaboutteam')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$singleteam->id}}">
                    <div class="card-header">
                        <h3 class="card-title">Edit Team</h3>
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
                                <img src="{{asset('uploads/team/'.$singleteam->image)}}" height="100px" width="100px" alt="no image">
                                <div class="form-group">
                                    <div class="form-label">Team Image</div>
                                    <div class="custom-file">
                                        <input type="hidden" name="filename" value="{{$singleteam->image}}">
                                        <input type="file" class="custom-file-input" name="image">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Team Name</label>
                                    <input type="text" class="form-control" value="{{$singleteam->name}}" name="name" placeholder="Please Enter The Name">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Team Designation<span class="form-label-small">56/100</span></label>
                                    <input type="text" class="form-control" value="{{$singleteam->role}}" name="designation" placeholder="Please Enter The Designation">
                                </div>

                                <?php
                                    $group='';
                                    if($singleteam->group==1)
                                        {
                                            $group='Board and Society';
                                        }
                                if($singleteam->group==2)
                                {
                                    $group='Directors';
                                }
                                if($singleteam->group==3)
                                {
                                    $group='Managers';
                                }
                                ?>
                                <div class="form-group">
                                    <label class="form-label">Team Group</label>
                                    <select class="form-control" id="group" name="group">
                                        <option value="">Select A Team Group</option>
                                        <option value="{{$singleteam->group}}" selected>{{$group}}</option>
                                        <option value="1">Board and Society</option>
                                        <option value="2">Directors</option>
                                        <option value="3">Managers</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Facebook link</label>
                                    <input type="text" class="form-control" value="{{$singleteam->fb_link}}" name="fb" placeholder="Enter The Facebook link">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Twitter link</label>
                                    <input type="text" class="form-control" value="{{$singleteam->tw_link}}" name="tw" placeholder="Enter The Twitter link">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Linkedln link</label>
                                    <input type="text" class="form-control" value="{{$singleteam->lnk_link}}" name="lk" placeholder="Enter The Linkedln link">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Address</label>
                                    <textarea type="text" class="form-control" value="" rows="6" name="address" placeholder="Enter The Address">{{$singleteam->address}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Contact</label>
                                    <textarea type="text" class="form-control" value="" rows="4" name="contact" placeholder="Enter The Contact">{{$singleteam->contact}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Education</label>
                                    <textarea type="text" class="form-control" value="" rows="4" name="education" placeholder="Enter The Education">{{$singleteam->education}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Description<span class="form-label-small">56/100</span></label>
                                    <textarea class="form-control" name="description" id="description" rows="6" placeholder="Please Enter The Description">{{$singleteam->description}}</textarea>
                                </div>

                            </div>
                        </div>
                        <!-- end fields -->
                        <div class="row">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Save </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- config form end  -->

    </div>
@endsection
