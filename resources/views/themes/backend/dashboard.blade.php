@extends('themes.backend.layout.app')

@section('content')
<div class="side-app">
<div class="mb-5">
    <div class="page-header mb-0">
        <h3 class="page-title">Dashboard</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </div>
</div>

<!-- Dashboard Start -->
<div class="row">
<div class="col-md-12">
    <div class="card overflow-hidden">
        <div class="">
            <div class="row no-gutters">

                <div class="col-xl-3 col-md-6 border-right">
                    <div class="card-body pb-0">
                        <div class="float-right">
                            <span class="mini-stat-icon bg-primary"><i class="si si-cloud-upload"></i></span>
                        </div>
                        <div class="dash3">
                            <h5 class="text-muted">Total views</h5>
                            <!-- Default Statcounter code for eficor http://13.233.27.51 -->
                            <!-- Global site tag (gtag.js) - Google Analytics -->
                            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146814788-1"></script>
                            <script>
                                window.dataLayer = window.dataLayer || [];
                                function gtag(){dataLayer.push(arguments);}
                                gtag('js', new Date());

                                gtag('config', 'UA-146814788-1');
                            </script>

                            <!-- End of Statcounter Code -->
                        </div>
                    <div class="chart-wrapper chart-wraper-absolute">
                        <br/>
                    </div>
                </div>
                </div>

                <div class="col-xl-3 col-md-6 border-right">
                    <div class="card-body pb-0">
                        <div class="float-right">
                            <span class="mini-stat-icon bg-primary"><i class="si si-cloud-upload"></i></span>
                        </div>
                        <div class="dash3">
                            <h5 class="text-muted">Total Pages</h5>
                            <h4 class="counter text-primary font-weight-extrabold">28</h4>
                        </div>
                    </div>
                    <div class="chart-wrapper chart-wraper-absolute">
                        <br/>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 border-right relative">
                    <div class="card-body pb-0">
                        <div class="float-right">
                            <span class="mini-stat-icon bg-danger"><i class="si si-eye"></i></span>
                        </div>
                        <div class="dash3">
                            <h5 class="text-muted">Total Slider</h5>
                            <h4 class="counter text-danger font-weight-extrabold">593</h4>
                        </div>
                    </div>
                    <div class="chart-wrapper chart-wraper-absolute">
                        <br/>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 border-right">
                    <div class="card-body pb-0">
                        <div class="float-right">
                            <span class="mini-stat-icon bg-success"><i class="si si-bubble"></i></span>
                        </div>
                        <div class="dash3">
                            <h5 class="text-muted">Total Donation</h5>
                            <h4 class="counter text-success font-weight-extrabold">1680879</h4>
                        </div>
                    </div>
                    <div class="chart-wrapper chart-wraper-absolute">
                        <br/>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 border-right" style="margin-top: 20px">
                    <div class="card-body pb-0">
                        <div class="float-right">
                            <span class="mini-stat-icon bg-info"><i class="si si-chart"></i></span>
                        </div>
                        <div class="dash3">
                            <h5 class="text-muted">Total Donation Fund's</h5>
                        </div>
                    </div>
                    <div class="chart-wrapper chart-wraper-absolute">
                        <h1 class="counter text-info font-weight-extrabold">7,94500000.00</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Dashboard End -->
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Recent Donation</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table card-table table-vcenter  border text-nowrap">
                        <thead>
                            <tr>
                                <th class="w-1">Sno</th>
                                <th>Name</th>
                                <th>Mobile Number</th>
                                <th>Email Id</th>
                                <th>Payment Status</th>
                                <th>Payment Summary</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for($i=0;$i<=10;$i++) { ?>
                            <tr>
                                <td><span class="text-muted">#6754</span></td>
                                <td>Adam Berry</td>
                                <td><a href="tel:+91-9841117864">9841117864</a></td>
                                <td><a href="mailto:lenin2ud@gmail.com">lenin2ud@gmail.com</a></td>
                                <td><a href="#" class="btn btn-sm btn-pill btn-primary mb-1">PAYMENT STATUS</a></td>
                                <td>
                                    <a href="#" class="btn btn-sm mb-1 btn-info">VIEW</a>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="mr-3" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fe fe-edit-2 text-dark fs-16"></i></a>
                                    <a href="javascript:void(0)" class="mr-3" data-toggle="tooltip" title="" data-original-title="view"><i class="fe fe-eye text-dark fs-16"></i></a>
                                    
                                </td>
                            </tr>
                        <?php } ?>

                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>                      
</div>
@endsection
