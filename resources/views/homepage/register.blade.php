@extends('layouts.main')

@section('content')
    <!-- Contact Form Section Begin -->
    <section class="contact-from-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Registration</h2>
                        <p>Fill in the form below to register.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="fullName">Full Name</label>
                                    <input type="text" class="form-control" id="fullName"
                                        placeholder="Full Name (without academic title)">
                                    <small id="fullName" class="form-text text-muted mb-2">Example: Muhammad Ridho</small>
                                    <input type="text" class="form-control" id="fullName2"
                                        placeholder="Full Name (with academic title)">
                                    <small id="fullName" class="form-text text-muted">Example: Dr. Muhammad Ridho,
                                        M.Sc</small>
                                </div>

                                <div class="form-group">
                                    <label for="gender" class="d-block">Gender</label>
                                    <label class="form-text text-muted d-inline">
                                        <input type="radio" name="options" id="gender" autocomplete="off"
                                            value="male"> Male
                                    </label>
                                    <label class="form-text text-muted d-inline">
                                        <input type="radio" name="options" id="gender" autocomplete="off"
                                            value="female">
                                        Female
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="participant">
                                        Participant
                                    </label>
                                    <select class="custom-select" id="participant">
                                        <option value="">Choose One</option>
                                        <option value="1">Profesional presenter</option>
                                        <option value="2">Student presenter</option>
                                        <option value="3">Student participant</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="institution">Institution</label>
                                    <textarea class="form-control" id="institution" rows="3" placeholder="Institution Name"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="institution">Address</label>
                                    <textarea class="form-control" id="institution" rows="3" placeholder="Full Address"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" class="form-control" id="phone" placeholder="Phone Number">
                                </div>
                                <div class="form-group">
                                    <label for="hki">HKI ID Member</label>
                                    <input type="text" class="form-control" id="hki" aria-describedby="emailHelp"
                                        placeholder="Enter HKI Number ID">
                                    <small id="emailHelp" class="form-text text-muted">Not required, if you are HKI member,
                                        you will get 25% discount.</small>
                                </div>
                                <div class="form-group">
                                    <label for="fax">Fax Number</label>
                                    <input type="text" class="form-control" id="fax" placeholder="Fax Number">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                        placeholder="Enter email">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                        anyone
                                        else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="retypePw">Retype Password</label>
                                    <input type="password" class="form-control" id="retypePw"
                                        placeholder="Confirmation Password">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form Section End -->
@endsection
