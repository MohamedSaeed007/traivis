<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $departments->en_department }}</title>



    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<style>
    @media print {
  #print {
    display: none;
  }
}
</style>

</head>

<body>
    <div class="container">
        <button id="print" class="btn btn-primary mt-2" onclick="window.print()">Print</button>
       
        <div class="row mt-3">
<div class="col-md-12">
    <h1>{{ $departments->en_department }}</h1>
</div>
            <div class="col-md-1"></div>
            <div class="col-md-8 mt-3">
                
                
        
                            <h3 class="card-title">Employees Certificates In {{ $departments->en_department }}</h3>
                            {!! $graph10->render() !!}
 
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>
            <div class="col-md-8 mt-5">
                
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Items</th>
                            <th>Valid</th>
                            <th>Close To Expire</th>
                            <th>Expired</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        @foreach ($data_depts as $item)
                            <tr>
                                <?php $i++; ?>
                                <td>{{ $i }} </td>
                                <td>{{ $item->name }}</td>
                                <td>{{ count($item->validWorkForceCourse) }}</td>
                                <td>{{ count($item->aboutToExpireCourse) }} </td>
                                <td>{{ count($item->expiredWorkForceCourse) }}</td>
                            </tr>



                        @endforeach

                    </tbody>

                </table>

            </div>
        </div>
    </div>

    <script src="https://fastly.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

  
   
</body>

</html>
