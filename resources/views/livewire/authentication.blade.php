 <x-header />
<div class="authentication-wrapper authentication-cover">
    <div class="authentication-inner row m-0">

    <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center p-5 bg-primary">
          <div class="w-100 d-flex justify-content-center">
            <img
              src="../../assets/img/illustrations/girl-verify-password-light.png"
              class="img-fluid"
              alt="Login image"
              width="700"
              data-app-dark-img="illustrations/opcr_login_wall.png"
              data-app-light-img="illustrations/opcr_login_wall.png" />
          </div>
        </div>
    <!-- /Left Text -->

    <!-- Login -->
    <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-5 p-4">
        <div class="w-px-400 mx-auto">
        <!-- Logo -->
        <div class="app-brand mb-3">
            <a href="index.html" class="app-brand-link gap-2">
            <img src="{{asset('assets/img/branding/logo.png')}}" class="logo-container" alt="Login" style="width: 10%;">
            <span class="app-brand-text demo text-body fw-bold text-uppercase">Livewire</span>
            </a>
        </div>
        <!-- /Logo -->
        <h4 class="mb-2">Welcome to Livewire Sample Application</h4>
        <p class="mb-4">Please sign-in</p>

        @livewire('login-form')

        </div>
    </div>
    <!-- /Login -->
    </div>
</div>

@livewireScripts


 
 