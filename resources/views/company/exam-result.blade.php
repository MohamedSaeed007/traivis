@extends('company.layouts.app-company')
@section('additional_styles')
<link rel="stylesheet" href="{{asset('users/vendor/select2/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('users/vendor/jquery-dataTables/css/jquery.dataTables.min.css')}}">
<style>
  .select2-container {width:100% !Important;} 
  .select2-container--default .select2-selection--multiple {
 border: solid #e2e5ec 1px !important;}
</style>
@endsection
@section('content')
<div class="page-content">
   <header>
      <div class="row">
         <div class="col-md-6">
            <h1 class="mb-0" id="hedn">Result</h1>
         </div>
         <div class="col-md-6 mb-3 ">
            <i class="float-right far fa-question-circle" style="color: grey ; font-size:30px" data-toggle="tooltip"
                data-placement="bottom" title="Find Your Exam Results Here"></i>
        </div>
      </div>
   </header>
   <div class="panel panel-light">
  
      <div class="panel-body othertbl">
         <div>
            <div class="row">
               <div class="col-md-12">
                  <div class="table-responsive">
                     <div class="search-table-outter wrapper">
                        <table id="example" class="search-table inner table-row-hover">
                           <thead>
                              <tr>
                                 <th>S#</th>
                                 <th>WorkForce</th>
                                 <th>Course</th>
                                 <th>Passing Percent</th>
                                 <th>Total Score</th>
                                 <th>Result</th>
                              </tr>
                           </thead>
                        </table>
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

<script src="{{asset('users/vendor/jquery-dataTables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('users/vendor/jquery-validate/jquery.validate.min.js')}}"></script>
<script type="text/javascript">
   $(document).ready( function () {
     loadTable();
   });

 
 
   function loadTable(){

        var $department = $("#search_department").val();
        var $position   = $("#search_position").val();
        var $project    = $("#search_project").val();

         $('#example').DataTable({
     
           "fnDrawCallback": function(oSettings) {
             if (oSettings.bSorted || oSettings.bFiltered || oSettings._iDisplayLength){
               j = 0;
               for (var i = oSettings._iDisplayStart; i < oSettings.aiDisplay.length + oSettings._iDisplayStart; i++){
                 $('td:eq(0)', oSettings.aoData[ oSettings.aiDisplay[j] ].nTr).find('span').text(i + 1);
                       j++;
               }
             }
           },
     
           processing: true,
           serverSide: true,
           "pageLength": 10,
           ajax: {
                 url: COMPANY_URL+'get-result',
                 data: function (d) {
                  
                 }
           },
           "columnDefs": [{ 'orderable': false, 'targets': [0,1] }],
           mark: true,
           fixedColumns: {
           },
           columns: [
               {data: 's#', name: 's#'},
               {data: 'user', name: 'user'},
               {data: 'course', name: 'course'},
               {data: 'passing_percent', name: 'passing_percent'},
               {data: 'total_score', name: 'total_score'},
               {data: 'result', name: 'result'},
               ]
           });
     }
     
</script>


@endsection