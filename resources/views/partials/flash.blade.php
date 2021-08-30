{{-- SUCCESS --}}

@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <strong>{{$message}}</strong>
    </div>
@endif

{{-- WARNING --}}

@if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-block">
        <strong>{{$message}}</strong>
    </div>
@endif

{{-- ERROR --}}

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $errors)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
