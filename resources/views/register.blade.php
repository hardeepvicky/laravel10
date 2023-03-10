<x-login-layout>
    <x-flash />
    <div class="auth-content my-auto">
        <div class="text-center">
            <h5 class="mb-0">Register Account</h5>
            <p class="text-muted mt-2">Get your free Minia account now.</p>
        </div>
        <form class="needs-validation mt-4 pt-2" novalidate="" action="/register" method="POST">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Name</label>
                <input type="text" name="name" value="{{ old('name')}}" class="form-control" class="form-control" />
                @error('name')
                    <div class="pristine-error text-help">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="useremail" class="form-label">Email</label>
                <input type="text" name="email" value="{{ old('email')}}" class="form-control" placeholder="Enter email" />                
                @error('email')
                    <div class="pristine-error text-help">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="userpassword" class="form-label">Password</label>                
                <input type="password" name="password" class="form-control"/>
                @error('password')
                    <div class="pristine-error text-help">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-4">
                <p class="mb-0">By registering you agree to the Minia <a href="#" class="text-primary">Terms of Use</a></p>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Register</button>
            </div>
        </form>

        <div class="mt-4 pt-2 text-center">
            <div class="signin-other-title">
                <h5 class="font-size-14 mb-3 text-muted fw-medium">- Sign up using -</h5>
            </div>

            <ul class="list-inline mb-0">
                <li class="list-inline-item">
                    <a href="javascript:void()" class="social-list-item bg-primary text-white border-primary">
                        <i class="mdi mdi-facebook"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="javascript:void()" class="social-list-item bg-info text-white border-info">
                        <i class="mdi mdi-twitter"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="javascript:void()" class="social-list-item bg-danger text-white border-danger">
                        <i class="mdi mdi-google"></i>
                    </a>
                </li>
            </ul>
        </div>

        <div class="mt-5 text-center">
            <p class="text-muted mb-0">Already have an account ? <a href="/login" class="text-primary fw-semibold"> Login </a> </p>
        </div>
    </div>
</x-login-layout>