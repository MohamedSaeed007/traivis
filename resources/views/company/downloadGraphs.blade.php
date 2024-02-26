<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @media print {
            #print{
                display: none
            }
            
        }
        .moo {
                margin-right: 70px
            }
            .moo0 {
                margin-right: 50px
            }
    </style>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>

<body>
   <div class="container pr">
    <button id="print" class="btn btn-primary mt-2" onclick="window.print()">Print</button>
    <div class="row mt-1">
        <div class="col-md-12">
            <div class="card-hover-shadow profile-responsive   p-3 mt-3 ">
                <div class="">
                    <p class="text-center font-weight-bold">Percentage Of Expired Certificates For Each Department</p>
                    <div class="moo">
                        {!! $graph2->render() !!}
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card-hover-shadow profile-responsive  p-3 mt-3 ">
                <div class="">
                    <p class="text-center font-weight-bold">Numbers Of All Certificates In All Projects</p>
                    <div class="moo">
                        {!! $graph3->render() !!}
                    </div>
                    
                </div>
            </div>
            

        </div>
        <div class="col-md-12  p-3">
            <div class="card-hover-shadow profile-responsive  p-3 ">
                <div class="">
                    <p class="text-center font-weight-bold">Numbers Of All Certificates In All Positions</p>
                    <div class="moo">{!! $graph4->render() !!}</div>
                </div>
            </div>
            

        </div>
        
        <div class="col-md-1"></div>
        <div class="col-md-4 p-3">
            <div class="card-hover-shadow profile-responsive  p-3  ">
                <div class="">
                    <p class="text-center font-weight-bold">Percentage Of All Certificates In All
                        Departments</p>
                    <div class="mooo">{!! $graph1->render() !!}</div>
                </div>
            </div>

        </div>
        <div class="col-md-1"></div>

        <div class="col-md-4 p-3">
            <div class="card-hover-shadow profile-responsive  p-3 ">
                <div class="">
                    <p class="text-center font-weight-bold">Number Of Expired Certificates In All
                        Departments</p>
                    <div class="mooo">{!! $graph5->render() !!}</div>
                </div>
            </div>
        </div>



        {{-- <div class="col-md-6"></div> --}}







    </div>
   </div>
 

    <script src="https://fastly.jsdelivr.net/npm/chart.js"></script>
</body>

</html>
