@extends(theme('dashboard.layouts.dashboard'))


@section('content')
    <div class="container-fluid">
        {{-- <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('courses_has_quiz') }}">{{ __t('courses') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ __t('certificate') }}</li>

            </ol>
        </nav> --}}
        <table class="table table-bordered  table">
            @if(Auth::user()->user_type == "student")
            <div class="row">
                <div class="col-md-6">
                    <strong> <h5>Certificate List</h5> </strong>
                </div>
                <div class="col-md-6 mb-3 ">
                    <i class="float-right far fa-question-circle" style="color: grey ; font-size:30px" data-toggle="tooltip"
                        data-placement="bottom" title="Find all certificates you have get here ."></i>
                </div>
            </div>
          
         
            @else
            <strong>   <h5>Certificate Upload</h5>    </strong>
            <br>  
            @endif
            <tbody>
                    @if($completeCourse)
                    @foreach ($completeCourse as $completeCourseItem)
                        <tr>
                            <td>
                                <h4 class="mb-3">
                                   
                                        <a href="">{{ $completeCourseItem->title }}</a>
                                  
                                </h4>
                                <div class="row">
                                    <div class="course-list-lectures-counts text-muted form-group col-md-2">
                                        <strong title="completed user">
                                            <a href="{{route('certificate_upload',$completeCourseItem->completed_course_id)}}" class="btn btn-primary btn-sm">
            @if(Auth::user()->user_type == "student")
           View
            @else 
            Upload Certificate
            @endif
                                            </a>
                                    </div>

                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @endif
            </tbody>
        </table>
    </div>
@endsection
