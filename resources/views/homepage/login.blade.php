@extends('layouts.main')

@section('content')
    <!-- Contact Form Section Begin -->
    <section class="contact-from-section spad" style="padding-top:0px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Login</h2>
                        <p>Use email and password to login.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <livewire:login-form />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form Section End -->
@endsection
