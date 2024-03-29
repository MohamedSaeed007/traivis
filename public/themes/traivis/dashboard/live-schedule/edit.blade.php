@extends(theme('dashboard.layouts.dashboard'))
@section('content')

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
    <h5>Create Live Schedule</h5>
    
            <div class="card">
                <div class="card-body">
           
 
     
                    <form method="post">
                        @csrf
                        <hr>
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group {{ $errors->has('section') ? ' has-error' : '' }}">
                                    <label for="title">{{ __t('section') }}</label>
                                    <div class="input-group mb-3">
                                      <select class="form-control" name="section" id="">
                                          <option value="">Choose Section</option>
                                          @if($section)
                                          @foreach ($section as $optionItem)
                                              <option @if($liveSchedule->section_id == $optionItem->id) selected @endif value="{{$optionItem->id}}">{{$optionItem->section_name}}</option>
                                          @endforeach
                                          @endif
                                      </select>

                                    </div>
                                    @if ($errors->has('section'))
                                        <span
                                            class="invalid-feedback"><strong>{{ $errors->first('section') }}</strong></span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12 mt20 mb20">
                                    <label for="">Select Employees</label>
                                    <div class="form-group">
                                        
                                        <select class="form-control employees" name="employees[]" data-toggle="select2" data-search="true"
                                            class="form-control" multiple>

                                            @if ($userName)
                                                <option value="0">All</option>
                                                @foreach ($userName as $itemName)
                                                    <option @if($itemName->selectedWorkForceUser($liveSchedule->id,$itemName->id)) selected @endif  value="{{ $itemName->id }}">{{ $itemName->name }}</option>
                                                @endforeach
                                            @endif
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group {{ $errors->has('seat_available') ? ' has-error' : '' }}">
                                    <label for="title">{{ __t('seat_available') }}</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="seat_available" class="form-control" id="seat_available"
                                            value="{{ $liveSchedule->seat_available }}" >

                                    </div>
                                    @if ($errors->has('seat_available'))
                                        <span
                                            class="invalid-feedback"><strong>{{ $errors->first('seat_available') }}</strong></span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group {{ $errors->has('max_num_of_participate') ? ' has-error' : '' }}">
                                    <label for="title">{{ __t('max_num_of_participate') }}</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="max_num_of_participate" class="form-control"
                                        value="{{ $liveSchedule->max_num_of_participate }}">

                                    </div>
                                    @if ($errors->has('max_num_of_participate'))
                                        <span
                                            class="invalid-feedback"><strong>{{ $errors->first('max_num_of_participate') }}</strong></span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group {{ $errors->has('zoom_link') ? ' has-error' : '' }}">
                                    <label for="title">{{ __t('zoom_link') }}</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="zoom_link" class="form-control" id="zoom_link"
                                        value="{{ $liveSchedule->zoom_link }}">

                                    </div>
                                    @if ($errors->has('zoom_link'))
                                        <span
                                            class="invalid-feedback"><strong>{{ $errors->first('zoom_link') }}</strong></span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group {{ $errors->has('event_date_time') ? ' has-error' : '' }}">
                                    <label for="title">{{ __t('event_date_time') }}</label>
                                    <div class="input-group mb-3">
                                        <input type="datetime-local" name="event_date_time" class="form-control" 
                                        value="{{ $liveSchedule->event_date_time }}">

                                    </div>
                                    @if ($errors->has('event_date_time'))
                                        <span
                                            class="invalid-feedback"><strong>{{ $errors->first('event_date_time') }}</strong></span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('expiry_date_time') ? ' has-error' : '' }}">
                                    <label for="title">{{ __t('expiry_date_time') }}</label>
                                    <div class="input-group mb-3">
                                        <input type="datetime-local" name="expiry_date_time" class="form-control"
                                        value="{{ $liveSchedule->expiry_date_time }}">
                                    </div>
                                    @if ($errors->has('expiry_date_time'))
                                        <span
                                            class="invalid-feedback"><strong>{{ $errors->first('expiry_date_time') }}</strong></span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('team_link') ? ' has-error' : '' }}">
                                    <label for="title">{{ __t('team_link') }}</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="team_link" class="form-control" id="team_link" value="{{$liveSchedule->team_link}}"
                                            value="{{ old('team_link') }}">

                                    </div>
                                    @if ($errors->has('team_link'))
                                        <span
                                            class="invalid-feedback"><strong>{{ $errors->first('team_link') }}</strong></span>
                                    @endif
                                </div>

                                {{-- <input type="button"  value="Generate Team Link" class="btn btn-warning" onclick="randomStringToInput(this)"> --}}

                            </div>
                            <input type="text" name="course_id" value="{{ $courseId }}" id="" hidden>
                        </div>

                        <div class="col-md-12" align="right">
                            <button type="submit" class="btn btn-primary"> <i class="la la-save"></i>
                                {{ __t('create_course') }}</button>
                        </div>

                
               
            </div>
                </form>

            </div>
       

@endsection



@section('page-css')
    <script src="{{ asset('users/js/pages/form/extended/select2.js') }}"></script>
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
@endsection

@section('page-js')
    <script>
        $('.employees').on("select2:select", function(e) {

            var data = e.params.data.text;
            console.log(data);
            if (data == 'All') {
                // var dd = $('.employees > option[value="' + 0 + '"]').prop('selected', false);

                $("option:selected").removeAttr("selected");
                $(".employees > option").prop("selected", "selected");

                $(".employees").trigger("change");
            }
            $(".employees-error").addClass('hide');
            $(".employees").removeClass('error');
        });

        //event date time
        $(function() {
                $('#event_date_time').datetimepicker();
            });
            // expiry date time
            $(function() {
                $('#expiry_date_time').datetimepicker();
            });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script> --}}
  
    {{-- <script
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js">
</script> --}}
@endsection
