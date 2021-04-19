<x-guest-layout>
    <x-auth-card>
        <div class="card-body">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <h1 class="fs-3 mb-3 fw-normal">Please sign in</h1>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
                        autocomplete="none" name="email">
                    <label for="floatingInput">Email address</label>
                </div>

                <!-- Password -->
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                        name="password">
                    <label for="floatingPassword">Password</label>
                </div>

                <!-- Remember Me -->
                <div class="checkbox my-4">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>

                <button class="w-100 btn btn-lg btn-primary text-white mb-2 rounded-0" type="submit">Log
                    In</button>
                <a href="{{ 'register' }}" class="w-100 btn btn-lg btn-success text-white rounded-0"
                    type="submit">Sign Up</a>

                <p class="mt-5 mb-3 text-muted text-center">© 2021–2022</p>

                {{-- <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
        
                        <x-button class="ml-3">
                            {{ __('Log in') }}
                        </x-button>
                    </div> --}}
            </form>
            {{-- <form>
                    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
                            autocomplete="none">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>

                    <div class="checkbox my-4">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>

                    <a href="./" class="w-100 btn btn-lg btn-primary text-white mb-2 rounded-0" type="submit">Log
                        In</a>
                    <button class="w-100 btn btn-lg btn-success text-white rounded-0" type="submit">Sign Up</button>
                    <p class="mt-5 mb-3 text-muted text-center">© 2021–2022</p>
                </form> --}}
        </div>
    </x-auth-card>
</x-guest-layout>
