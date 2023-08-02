@extends('layouts.main')

@section('content')
    <!-- Contact Form Section Begin -->
    <section class="contact-from-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Dashboard Participant</h2>
                        <p>Fill in the form below to register.</p>
                    </div>
                </div>
            </div>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-primary">Logout</button>
            </form>
            {{-- <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <livewire:register-form />
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- Contact Form Section End -->
@endsection
