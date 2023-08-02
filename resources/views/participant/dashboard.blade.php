@extends('layouts.participant')

@section('content-dashboard')
    <div class="row mx-3">
        @if (Auth::user()->participant->uploadAbstracts->first())
            <p><strong>Information : </strong>Your abstract status is
                <strong>{{ Auth::user()->participant->uploadAbstracts->first()->status }}</strong>
            </p>
        @else
            <p><strong>Information : </strong>You haven't added abstract yet, add abstract in abstract menu</p>
        @endif

    </div>
@endsection
