@extends('company.layouts.app-company')
@section('additional_styles')
@endsection
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    @if (Auth::user()->profile_completion_status == 1 && Auth::user()->verification_status == 0)
        <div class="page-content ">

            <header>
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="mb-0">Your account has been successfully submitted for verification process </h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 mt-2 p-0 breadcrumbs-chevron">
                                <li class="breadcrumb-item"><a href="/">{{ \Carbon\Carbon::now()->format('d M Y') }}</a>
                                </li>

                            </ol>
                            <br>
                            <a href="{{ url('company/add-profile') }}" class="btn btn-primary">Update</a>
                        </nav>
                    </div>
                </div>
            </header>
        </div>
    @elseif( Auth::user()->profile_completion_status == 0 && Auth::user()->verification_status == 0)

        <div class="page-content">

            <header>
                <div class="row">
                    <div class="col-md-6 ">
                        <h1 class="mb-0">Please update your profile detail for verification </h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 mt-2 p-0 breadcrumbs-chevron">
                                <li class="breadcrumb-item"><a
                                        href="/">{{ \Carbon\Carbon::now()->format('d M Y H:i') }}</a>
                                </li>

                            </ol>
                            <br>
                            <a href="{{ url('company/add-profile') }}" class="btn btn-primary">Update</a>
                        </nav>
                    </div>
                </div>
            </header>
        </div>
    @else


        <!-- Main Page Content -->
        <div class="page-content ">
            <p> {{ Auth::user()->email }}</p>
            <header>
                <div class="row">
                    <div class="col-md-6 ">
                        <h1 class="mb-0" style="margin-left: 20px;">Welcome to Traivis</h1>
                        {{-- <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 mt-2 p-0 breadcrumbs-chevron">
                                <li class="breadcrumb-item"><a href="/">{{ \Carbon\Carbon::now()->format('d M Y') }}</a>
                                </li>

                            </ol>
                        </nav> --}}
                    </div>
                </div>
            </header>

            <div class="page-content bg-secondary">

              
                <div class="row">
                    <div class="col-md-7">
                        <div class="card">
                            {{-- <div class="card-header bg-light">
                                <h3 class="card-title">Area Chart</h3>
                            </div> --}}
                            <div class="card-body" style="display: block;">
                                <div class="chart">
                                    <h3 class="card-title">Area Chart</h3>
                                    <div >{!! $graph3->render() !!}</div>
                                    
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="card card-primary mt-3">
                            {{-- <div class="card-header">
                                <h3 class="card-title">Area Chart</h3>
                            </div> --}}
                            <div class="card-body" style="display: block;">
                                <div class="chart">
                                    <h3 class="card-title">Area Chart</h3>
                                    {!! $graph4->render() !!}
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card card-primary">
                            {{-- <div class="card-header ">
                                <h3 class="card-title">Area Chart</h3>
                            </div> --}}
                            <div class="card-body" style="height: 300px">
                                <div class="chart">
                                    <h3 class="card-title">Area Chart</h3>
                                    {!! $graph1->render() !!}
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="card card-primary mt-3">
                            {{-- <div class="card-header">
                                <h3 class="card-title">Area Chart</h3>
                            </div> --}}
                            <div class="card-body" style="display: block;">
                                <div class="chart">
                                    <h3 class="card-title">Area Chart</h3>
                                    {!! $graph2->render() !!}
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                   
                </div>



                 <br>
                    
                    <br>
                    <div class="row">
                        <div class="col-6">
                            <h5>All Certs In A Specific Position</h5>
                            <div style="width:75%;">
                                {{-- {!! $graph6->render() !!} --}}
                            </div>
                        </div>
                        <div class="col-6">
                            <h5>Percentage Of Expired Certs In All Depts</h5>
                            <div>
                                {!! $graph5->render() !!}
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-6">
                            <h5>Certs In Depts In A Specific Project</h5>
                            <div>
                                {!! $graph7->render() !!}
                            </div>
                        </div>
                        <div class="col-6">
                            <h5>Expired And Close toEx In Each Position in A project</h5>
                            <div>
                                {!! $graph8->render() !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <h5>Employees certs In Each Position </h5>
                            <div>
                                {!! $graph9->render() !!}
                            </div>
                        </div>
                        <div class="col-6">
                            <h5>Employees certs In Each Department </h5>
                            <div>
                                {!! $graph10->render() !!}
                            </div>
                        </div>
                    </div> 



            </div>






        </div><!-- / .page-content -->
        <!-- Main Page Content -->
    @endif


@endsection
@section('additional_scripts')
    <script src="{{ asset('users/vendor/amcharts/amcharts.js') }}"></script>
    <script src="{{ asset('users/js/charts/dashboard-chart.js') }}"></script>
    <script src="https://fastly.jsdelivr.net/npm/chart.js"></script>

@endsection
