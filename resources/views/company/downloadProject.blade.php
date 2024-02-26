<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $projects->en_project }}</title>



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
                <h1>{{ $projects->en_project }}</h1>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-9 mt-3">
                <h3 class="card-title"> All Positions(Its Certificatess) in {{ $projects->en_project }}</h3>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4 mt-3">


                {!! $graph8->render() !!}

            </div>


            <div class="col-md-12 mt-5">

                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Items</th>
                            <th>Close To Expire</th>
                            <th>Expired</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0 ?>
                        @foreach ($ExpiredCoursesInPositions as $item)
                            <tr role="row" class="odd">
                                <?php $i++ ?>
                                <td class="sorting_1"><span class="si_no">{{ $i }}</span> </td>
                                <td class="sorting_1"><span style="font-weight: bold"
                                        class="si_no">{{ $item->position_en }}</span> </td>
                               
                                <td class="sorting_1"><span
                                        class="si_no">{{ count($item->aboutToExpireCourse) }}</span>
                                </td>
                                <td class="sorting_1"><span
                                        class="si_no">{{ count($item->expired_courses) }}</span>
                                </td>



                            </tr>



                        @endforeach
                    </tbody>

                </table>



            </div>
            
            <div class="col-md-3 "></div>
            <div class="col-md-7 mt-5 pt-5">
                <h3 class="card-title">All Departments(Its Certificates) In {{ $projects->en_project }}</h3>
            </div>
            
            <div class="col-md-11">
                
                {!! $graph7->render() !!}
            </div>

        </div>

        <div class="col-md-12 mt-5">
            <table id="example1" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Employees Name</th>
                        <th>Total</th>
                        <th>Valid</th>
                        <th>Close To Expired</th>
                        <th>Expired</th>
                        
                        


                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0 ?>
                    @foreach ($ExpiredCoursesInDepts as $item)
                        <tr role="row" class="odd">
                            <?php $i++ ?>
                            <td class="sorting_1"><span class="si_no">{{ $i }}</span> </td>
                            <td class="sorting_1"><span style="font-weight: bold"
                                    class="si_no">{{ $item->en_department }}</span> </td>
                            <td class="sorting_1"><span
                                    class="si_no">{{ count($item->total_coursesWorkForce) }}</span>
                            </td>
                            <td class="sorting_1"><span
                                    class="si_no">{{ count($item->valid_courses) }}</span>
                            </td>
                            <td class="sorting_1"><span
                                    class="si_no">{{ count($item->aboutToExpireCourse) }}</span>
                            </td>
                            <td class="sorting_1"><span
                                    class="si_no">{{ count($item->expired_courses) }}</span>
                            </td>



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
