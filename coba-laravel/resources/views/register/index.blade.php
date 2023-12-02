@extends('layouts.main')
@section('container')
<main class="form-registration">
    <section class="vh-100">
        <h1 class="text-center">
            Registration Form
        </h1>
        <div class="container py-5 h-100">
          <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                class="img-fluid" alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
              <form class="needs-validation" method="post" action="/register" novalidate>
                @csrf
                {{-- Name Input --}}
    
                <div class="form-outline mb-4">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control @error('name')
                        is-invalid
                    @enderror" id="name" name="name" value="{{ old('name') }}" required>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                <div class="form-outline mb-4">
                    <label for="username">Username</label>
                    <input type="text" class="form-control @error('username')
                        is-invalid
                    @enderror" id="username" name="username" value="{{ old('username') }}" required>
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    
                  </div>
    
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error('email')
                        is-invalid
                    @enderror" id="email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-4">
                    <label for="password">Password</label>
                    <input type="password" class="form-control @error('password')
                        is-invalid
                    @enderror" id="password" name="password" required>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
      
                <div class="d-flex justify-content-around align-items-center mb-4">
                  <!-- Checkbox -->
                  <a href="#!">Forgot password?</a>
                  <p class=" fw-bold mt-2 pt-0 mt-0 mb-1">Already Register?
                     <a 
                    class="link-danger" href="/login">Login</a>
                </p>
                </div>
                <div class="text-center text-lg-start mt-1 pt-2">
                    
                  </div>
                <!-- Submit button -->
                <div class="d-flex justify-content-center">
    
                    <button type="submit" class="btn btn-primary btn-lg btn-block justify-content-center flex-fill">Register</button>
                </div>
      
                <div class="divider d-flex align-items-center justify-content-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                </div>
                
                <a class="btn btn-danger btn-lg btn-block mb-4 d-flex justify-content-center"  href="#!"
                  role="button">
                  <i class="fab fa-twitter me-2"></i>Continue with Google</a>
                <a class="btn btn-primary btn-lg btn-block mb-4 d-flex justify-content-center" style="background-color: #3b5998" href="#!"
                  role="button">
                  <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
                </a>
              </form>
            </div>
          </div>
        </div>
      </section>
</main>
@endsection
