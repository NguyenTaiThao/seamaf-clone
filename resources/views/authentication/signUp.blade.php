@extends("layouts.layout")

@section("content")
<div class="content">
    <div class="row align-items-center justify-content-center">
        <div class="col-md-9">
            <div class="authentication-box">
                <div class="row">
                    <div class="col-md-5 background-img px-0"></div>

                    <div class="col-md-7 authentication-form d-flex flex-column justify-content-center px-0">
                        <div class="row title">
                            <span>Create an account</span>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-10 form-section">
                                <div class="row">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text basic-addon" id="">
                                            <i class="fas fa-user"></i>
                                        </span>
                                        <input type="text" class="form-control authentication-input remove-outline" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text basic-addon" id="">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                        <input type="text" class="form-control authentication-input remove-outline" placeholder="Email Address" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text basic-addon" id="">
                                            <i class="fas fa-key"></i>
                                        </span>
                                        <input type="text" class="form-control authentication-input remove-outline" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text basic-addon" id="">
                                            <i class="fas fa-key"></i>
                                        </span>
                                        <input type="text" class="form-control authentication-input remove-outline" placeholder="Confirm Password" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-grid">
                                        <button type="button" class="btn btn-primary authentication-btn remove-outline">Register</button>
                                    </div>
                                </div>
                                <div class="row other-auth-text">
                                    <div class="col-md-12">
                                        <span>or register with</span>
                                    </div>
                                </div>
                                <div class="row other-auth-btn">
                                    <div class="col-md-6">
                                        <button type="button" class="btn btn-primary w-100">Facebook</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="button" class="btn btn-danger w-100">Google</button>
                                    </div>
                                </div>
                                <div class="row auth-divider">
                                    <div class="col-md-12">
                                        <hr>
                                    </div>
                                </div>  
                                <div class="row switch-auth">
                                    <div class="col-md-12">
                                        <span>Already have an account?</span>
                                        <a href="{{asset('sign-in')}}">Click here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection