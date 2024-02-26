<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $positions->position_en }}</title>



    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <style>
        @media print {
            #print {
                display: none;
            }
        }
        hr.new3 {
  border-top: 1px dotted red;
}
    </style>

</head>

<body>
    <div class="container">
        <button id="print" class="btn btn-primary mt-2" onclick="window.print()">Print</button>

        <div class="row mt-3">
            <div class="col-md-12">
                <h1>{{ $positions->position_en }}</h1>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-9 mt-3">
                <h3 class="card-title">Percentage Of All Certificates In {{ $positions->position_en }}</h3>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4 mt-3">


                {!! $graph6->render() !!}

            </div>


            <div class="col-md-12 mt-5">

                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Items</th>
                            <th>Count</th>
                            <th>Percentage</th>


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
                            <td class="sorting_1"><span class="si_no">{{ $positions->valid_courses->count() }}</span>
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
            
            <div class="col-md-3 "></div>
            <div class="col-md-6 mt-5 pt-5">
                <h3 class="card-title">Employees Certificates In {{ $positions->position_en }}</h3>
            </div>
            <div class="col-md-3 "></div>
            
            <div class="col-md-12">
                
                {!! $graph9->render() !!}
            </div>

        </div>

        <div class="col-md-12 mt-5">
            <table id="example1" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Employees Name</th>
                        <th>Total</th>
                        <th>Expired</th>
                        <th>Valid</th>
                        <th>Close To Expired</th>


                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0; ?>
                    @foreach ($data as $user)
                        <tr role="row" class="odd">
                            <?php $i++; ?>
                            <td class="sorting_1"><span class="si_no">{{ $i }}</span> </td>
                            <td class="sorting_1"><span class="si_no">{{ $user->name }}</span> </td>
                            <td class="sorting_1"><span
                                    class="si_no">{{ $user->totaldWorkForceCourse->count() }}</span> </td>

                            <td class="sorting_1"><span
                                    class="si_no">{{ $user->aboutToExpireCourse->count() }}</span> </td>
                            <td class="sorting_1"><span
                                    class="si_no">{{ $user->validWorkForceCourse->count() }}</span> </td>
                            <td class="sorting_1"><span
                                    class="si_no">{{ $user->expiredWorkForceCourse->count() }}</span> </td>

                        </tr>
                    @endforeach



                </tbody>

            </table>

        </div>
    </div>

    <script src="https://fastly.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    {{-- <script>
        $(document).ready(function() {
            $('#example1').DataTable();
        });
    </script> --}}

</body>

</html>
