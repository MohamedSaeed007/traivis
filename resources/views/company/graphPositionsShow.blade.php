

@extends('company.layouts.app-company')
@section('additional_styles')
    <link rel="stylesheet" href="{{ asset('users/vendor/jquery-dataTables/css/jquery.dataTables.min.css') }}">
@endsection
@section('content')
    <div class="page-content bg-light">
        <a href="{{ URL('company/positions_download/'.$positions->id) }}" class="ml-auto" target="_blank">Click To Print</a>
        <div class="panel panel-light">
            <div class="panel-header">
                <div class="panel-title">
                    <h1>{{ $positions->position_en }}</h1>
                </div>
            </div>
        </div>



        <div class="row mt-4">

            <div class="col-md-4 ">
                <div class="card card-primary">

                    <div class="card-body" style="display: block;">
                        <div class="chart">
                            <h3 class="card-title">Percentage Of All Certificates In {{ $positions->position_en }}</h3>
                            {!! $graph6->render() !!}
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
            <div class="col-md-8 ">
                <div class="card card-primary">

                    <div class="card-body" style="display: block;">
                        <div class="chart">
                            <h3 class="card-title">Employees Certificates In {{ $positions->position_en }}</h3>
                            {!! $graph9->render() !!}
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
        </div>
        <div class="panel panel-light">

            <div class="panel-body othertbl">
                <div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <div class="search-table-outter wrapper">
                                    <div id="example_wrapper" class="dataTables_wrapper no-footer">
                         
                                        <div id="example_processing" class="dataTables_processing" style="display: none;">
                                            Processing...</div>
                                        <table id="example" class="search-table inner table-row-hover dataTable no-footer"
                                            role="grid" aria-describedby="example_info" style="width: 1449px;">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" rowspan="1" colspan="1" aria-label="S#"
                                                        style="width: 5%">S#
                                                    </th>
                                                    <th class="sorting_asc" rowspan="1" colspan="1" aria-label="S#"
                                                        style="width: 10%">Items
                                                    </th>
                                                    <th class="sorting_asc" rowspan="1" colspan="1" aria-label="S#"
                                                        style="width: 10%">Count
                                                    </th>
                                                    <th class="sorting_asc" rowspan="1" colspan="1" aria-label="S#"
                                                        style="width: 20%">Percentage
                                                    </th>

                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1"><span class="si_no">1</span> </td>
                                                    <td class="sorting_1"><span class="si_no">Total</span> </td>
                                                    <td class="sorting_1"><span
                                                            class="si_no">{{ $positions->total_coursesWorkForce->count() }}</span>
                                                    </td>
                                                    <td class="sorting_1"><span class="si_no"> {{ $positionTotalPercent }} % </span> </td>
                                                    
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td class="sorting_1"><span class="si_no">2</span> </td>
                                                    <td class="sorting_1"><span class="si_no">Valid</span> </td>
                                                    <td class="sorting_1"><span
                                                            class="si_no">{{ $positions->valid_courses->count() }}</span>
                                                    </td>
                                                    <td class="sorting_1"><span class="si_no"> {{ $positionValidPercent }} % </span> </td>

                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1"><span class="si_no">3</span> </td>
                                                    <td class="sorting_1"><span class="si_no">Expired</span> </td>
                                                    <td class="sorting_1"><span
                                                            class="si_no">{{ $positions->expired_courses->count() }}</span>
                                                    </td>
                                                    <td class="sorting_1"><span class="si_no"> {{ $positionExPercent }} %
                                                        </span> </td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1"><span class="si_no">4</span> </td>
                                                    <td class="sorting_1"><span class="si_no">Close To Expire</span> </td>
                                                    <td class="sorting_1"><span
                                                            class="si_no">{{ $positions->aboutToExpireCourse->count() }}</span>
                                                    </td>
                                                    <td class="sorting_1"><span class="si_no">
                                                            {{ $positionAboutToExPercent }} %</span> </td>



                                                </tr>
                                            </tbody>
                                        </table>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            
        </div>
        <div class="panel panel-light">



      

            <div class="panel-body othertbl">
                <div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <div class="search-table-outter wrapper">
                                    <div id="example_wrapper" class="dataTables_wrapper no-footer">
                      
                                        <div id="example_processing" class="dataTables_processing" style="display: none;">
                                            Processing...</div>
                                        <table id="example1" class="search-table inner table-row-hover dataTable no-footer"
                                            role="grid" aria-describedby="example_info" style="width: 1449px;">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" rowspan="1" colspan="1" aria-label="S#"
                                                        style="width:5%">#
                                                    </th>
                                                    <th class="sorting_asc" rowspan="1" colspan="1" aria-label="S#"
                                                        style="width: 10%">Employees Name
                                                    </th>
                                                    <th class="sorting_asc" rowspan="1" colspan="1" aria-label="S#"
                                                        style="width: 10%">Total
                                                    </th>
                                                    <th class="sorting_asc" rowspan="1" colspan="1" aria-label="S#"
                                                    style="width: 10%">Expired
                                                </th>
                                                    <th class="sorting_asc" rowspan="1" colspan="1" aria-label="S#"
                                                        style="width: 10%">Valid
                                                    </th>
                                                  
                                                    <th class="sorting_asc" rowspan="1" colspan="1" aria-label="S#"
                                                        style="width: 10%">Close To Expired
                                                    </th>



                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 0 ?>
                                                @foreach ($data as $user)
                                                <tr role="row" class="odd">
                                                    <?php $i++ ?>
                                                    <td class="sorting_1"><span class="si_no">{{$i}}</span> </td>
                                                    <td class="sorting_1"><span class="si_no">{{ $user->name }}</span> </td>
                                                    <td class="sorting_1"><span class="si_no">{{ $user->totaldWorkForceCourse->count() }}</span> </td>
                                                    
                                                    <td class="sorting_1"><span class="si_no">{{ $user->aboutToExpireCourse->count() }}</span> </td>
                                                    <td class="sorting_1"><span class="si_no">{{ $user->validWorkForceCourse->count() }}</span> </td>
                                                    <td class="sorting_1"><span class="si_no">{{ $user->expiredWorkForceCourse->count()}}</span> </td>
                                           
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
            </div>
            
        </div>
    </div>

@endsection
@section('additional_scripts')
<script src="https://fastly.jsdelivr.net/npm/chart.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#example1').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        });
    });
</script>

@endsection
