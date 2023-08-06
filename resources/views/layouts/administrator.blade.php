@extends('layouts.main')

@section('content')
    <!-- Schedule Table Section Begin -->
    <section class="schedule-table-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="schedule-table-tab">

                        <ul class="nav nav-tabs" role="tablist" style="width:100%">
                            <li class="nav-item" style="width:100%">
                                <a class="nav-link {{ $title == 'Dashboard' ? 'active' : '' }}" href="/dashboard"
                                    style="font-size:16px">Dashboard</a>
                            </li>
                            <li class="nav-item" style="width:100%">
                                <a class="nav-link {{ $title == 'Registered Participant' ? 'active' : '' }}"
                                    href="/registered-participant" style="font-size:16px">Registered
                                    User</a>
                            </li>
                            <li class="nav-item" style="width:100%">
                                <a class="nav-link {{ $title == 'Validation HKI Member' ? 'active' : '' }}"
                                    href="/validation-hki-member" style="font-size:16px">Validation HKI member</a>
                            </li>
                            <li class="nav-item" style="width:100%">
                                <a class="nav-link {{ $title == 'Review Abstract' ? 'active' : '' }}"
                                    href="/review-abstract" style="font-size:16px">Review Abstract</a>
                            </li>
                            <li class="nav-item" style="width:100%">
                                <a class="nav-link {{ $title == 'Payment Validation' ? 'active' : '' }}" href="payment"
                                    style="font-size:16px">Payment Validation</a>
                            </li>
                            <li class="nav-item" style="width:100%">
                                <a class="nav-link {{ $title == 'Presenter' ? 'active' : '' }}" href="/presenter"
                                    style="font-size:16px">Presenter</a>
                            </li>
                            <li class="nav-item" style="width:100%">
                                <a class="nav-link {{ $title == 'Participant' ? 'active' : '' }}" href="/participant"
                                    style="font-size:16px">Participant</a>
                            </li>
                            <li class="nav-item" style="width:100%">
                                <a class="nav-link {{ $title == 'Full Paper' ? 'active' : '' }}" href="/upload-paper"
                                    style="font-size:16px">Uploaded
                                    Paper</a>
                            </li>
                            <li class="nav-item" style="width:100%">
                                <a class="nav-link {{ $title == 'My Profile' ? 'active' : '' }}" href="profile"
                                    style="font-size:16px;">Profile</a>
                            </li>
                            <li class="nav-item" style="width:100%;">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-primary"
                                        style="width:100%;background-color: transparent !important; border-color: transparent !important;">
                                        <a class="nav-link"style="font-size:16px;">Logout </a>
                                    </button>
                                </form>
                            </li>
                        </ul><!-- Tab panes -->

                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="tab-content d-inline">
                        <div class="card">
                            <div class="card-body">
                                @yield('content-dashboard')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Schedule Table Section End -->
@endsection
