<div>
    <div class="login-form-container">

        <div id="close-login-btn" class="fas fa-times"></div>
        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- SignIn -->
            <h3>sign in</h3>
            <span>Email</span>
            <input id="email" class="box" type="email" name="email" :value="old('email')" required autofocus>
            <span>password</span>
            <input id="password" class="box" type="password" name="password" required autocomplete="current-password">
            <div class="checkbox">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me"> remember me</label>
            </div>
            <input type="submit" value="sign in" class="btn">
            @if (Route::has('password.request'))
                <p>forget password ? <a href="{{ route('password.request') }}">click here</a></p>
            @endif
            <p>don't have an account ? <a href="#" id="signup-btn">create one</a></p>

        </form>
    </div>
</div>
