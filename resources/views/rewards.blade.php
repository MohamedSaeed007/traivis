@extends(theme('dashboard.layouts.dashboard'))
@section('content')

<div >

    <div class="panel panel-light">
        <div class="panel-header">
            <h1 class="panel-title">Rewards</h1>
                                                                                
                                        </div>
        <div class="panel-body p-0 ">

            <ul class="list-group list-group-notifications">
                                                        

                        <li class="list-group-item">
                            <div class=" bg-primary-light">
                                <h2>Congratulations..! </h2>
                                <h4>You have a coupon code <span style="color: #0045ed" id="code" >{{ Auth::user()->coupon }}</span></h4> 

                            </div>
                            <button type="button" onclick="copyToClipboard('#code')" class="btn btn-secondary ml-auto" data-toggle="tooltip" data-placement="top" title="copy coupon">
                                Copy
                              </button>
                            <div class="item-info">
                          
                            </div>
                        </li>
                                                        
            </ul>

        </div>
    </div>

</div>
<script>
function copyToClipboard(element) {
 var $temp = $("<input>");
 $("body").append($temp);
 $temp.val($(element).html()).select();
 document.execCommand("copy");
 $temp.remove();
}
</script>
@endsection