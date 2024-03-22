<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Kasir gw</title>

  @include('partials.css')
  </head>

  <body>
  <!-- Content -->

  <div class="container-xxl">
    <div class="row justify-content-center mt-5" >
      <div class="col-md-4 ">

        <div class="authentication-wrapper authentication-basic container-p-y">
          <div class="authentication-inner">
            <!-- Register -->
            <div class="card">
              <div class="card-body">
               
                <h4 class="mb-2 text-center">Kasir gw login</h4>
                <p class="mb-4 text-center">Silahkan login dan mulai bisnismu</p>
                @if (session()->has('loginError'))
                    <div class="alert alert-danger">{{ session('loginError') }}</div>
                @endif
    
                <form id="formAuthentication" class="mb-3" action="{{ route('auth.authenticate') }}" method="POST">
                  @csrf
                  <div class="mb-3">
                    <label for="email" class="form-label">username</label>
                    <input
                      type="text"
                      class="form-control"
                      id="email"
                      name="username"
                      placeholder="masukkan username"
                      autofocus
                    />
                    <p>

                      @error('username')
                      {{ $message }}
                      @enderror
                    </p>
                  </div>
                  <div class="mb-3 form-password-toggle">
                    <div class="d-flex justify-content-between">
                      <label class="form-label" for="password">Password</label>
                      
                    </div>
                    <div class="input-group input-group-merge">
                      <input
                        type="password"
                        id="password"
                        class="form-control"
                        name="password"
                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                        aria-describedby="password"
                      />
                      <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    </div>
                    <p>
                      @error('password')
                          {{ $message }}
                      @enderror
                    </p>
                  </div>
               
                  <div class="mb-3">
                    <button class="btn btn-primary d-grid w-100" type="submit">Login</button>
                  </div>
                </form>
              </div>
            </div>
            <!-- /Register -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- / Content -->

    @include('partials.js')
   
  </body>
</html>
