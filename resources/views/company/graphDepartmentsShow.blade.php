@extends('company.layouts.app-company')
@section('additional_styles')
    <link rel="stylesheet" href="{{ asset('users/vendor/jquery-dataTables/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
   <style>
    
       @media print{
           body *{
               visibility: hidden;
           }
           .page-content , .page-content *{
               
               visibility: visible;
               
           }
  
       }
   </style>
@endsection
@section('content')

    <div class=" page-content bg-light ">

        <a href="{{ URL('company/departments_download/'.$departments->id) }}" class="ml-auto" target="_blank">Click To Print</a>
      
        <div class="panel panel-light">
            <div class="panel-header">
                <div class="panel-title">
                    <h1>{{ $departments->en_department }}</h1>
                </div>
            </div>
        </div>



        <div class="row mt-4">
            <div class="col-md-2"></div>
            <div class="col-md-8 ">
                <div class="card card-primary">

                    <div class="card-body" style="display: block;">
                        <div class="chart">
                            <h3 class="card-title">Employees Certificates In {{ $departments->en_department }}</h3>
                            {!! $graph10->render() !!}
                        </div>
                    </div>
                    <!-- /.card-body -->
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
                                           
                                            <div id="example_processing" class="dataTables_processing"
                                                style="display: none;">
                                                Processing...</div>
                                            <table id="example"
                                                class="search-table inner table-row-hover dataTable no-footer" role="grid"
                                                aria-describedby="example_info" style="width: 1449px;">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting_asc" rowspan="1" colspan="1" aria-label="S#"
                                                            style="width: 5%">#
                                                        </th>
                                                        <th class="sorting_asc" rowspan="1" colspan="1" aria-label="S#"
                                                            style="width: 15%">Items
                                                        </th>

                                                        <th class="sorting_asc" rowspan="1" colspan="1" aria-label="S#"
                                                            style="width: 20%">Valid
                                                        </th>
                                                        <th class="sorting_asc" rowspan="1" colspan="1" aria-label="S#"
                                                            style="width: 20%">Close To Expire
                                                        </th>
                                                        <th class="sorting_asc" rowspan="1" colspan="1" aria-label="S#"
                                                            style="width: 20%"> Expired
                                                        </th>




                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 0 ?>
                                                    @foreach ($data_depts as $item)
                                                        <tr role="row" class="odd">
                                                            <?php $i++ ?>
                                                            <td class="sorting_1"><span class="si_no">{{ $i }}</span> </td>
                                                            <td class="sorting_1"><span style="font-weight: bold"
                                                                    class="si_no">{{ $item->name }}</span> </td>
                                                         
                                                            <td class="sorting_1"><span
                                                                    class="si_no">{{ count($item->validWorkForceCourse) }}</span>
                                                            </td>
                                                            <td class="sorting_1"><span
                                                                    class="si_no">{{ count($item->aboutToExpireCourse) }}</span>
                                                            </td>
                                                            <td class="sorting_1"><span
                                                                    class="si_no">{{ count($item->expiredWorkForceCourse) }}</span>
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
  
@endsection
