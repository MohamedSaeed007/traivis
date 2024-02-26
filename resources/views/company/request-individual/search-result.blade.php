<div class="row">
    <div class="col-md-6">
        <div class="dashboard-card d-flex mb-12 border bg-white p-3">
            <div class="card-icon mr10 mr-2">
                @if ($user->avatar)
                    <img src="{{ $user->avatar }}" width="100" height="100"
                        class="avatar rounded-circle" alt="Avatar image">
                @else
                    <img src="http://train.ca/themes/traivis/assets/website/img/user.png" width="100"
                        height="100" class="avatar rounded-circle" alt="Avatar image">
                @endif
            </div>

            <div class="card-info">
                <div class="text-value">
                    <h5>{{ ucwords($user->name) }}</h5>
                </div>
                <div><b>Email : {{ $user->email }}</b></div>
                @if ($user->phone)
                    <div><b>Phone : {{ $user->phone }} </b></div>
                @endif
                @if ($user->address)
                    <div><b>Address : {{ $user->address }}</b></div>
                @endif
                {{-- <div><b>Training center:</b></div> --}}
                {{-- {{dd($user->trainingCenterTRainer($user->id))}} --}}
                @if ($companyRequest)
                    <a class="btn btn-sm btn-success btn-block mt10 request-success"> Requested</a>
                @else
                    <a role="button" data-id="{{ $user->id }}"
                        class="btn btn-sm btn-primary btn-block mt10 request-trainer">Request</a>
                @endif
                <a style="display: none;"
                    class="btn btn-sm btn-success btn-block mt10 request-success">Requested</a>

            </div>
        </div>
    </div>
</div>
