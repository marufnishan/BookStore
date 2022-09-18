<div>
    <div class="signup-form-container">

        <div id="close-signup-btn" class="fas fa-times"></div>

        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf
            <!-- SignUp -->
            <h3>sign up</h3>
            <span>Image</span>
            <input id="image" class="box" type="file" name="image"  autofocus >
            <span>Name</span>
            <input id="name" class="box" type="text" name="name" :value="old('name')" required autofocus
                autocomplete="name">
            <span>Email</span>
            <input id="email" class="box" type="email" name="email" :value="old('email')" required>
            <span>Phone</span>
            <input id="phone" class="box" type="text" name="phone"  :value="old('phone')" required >
            <span>Password</span>
            <input id="password" class="box" type="password" name="password" required autocomplete="new-password">
            <span>Confirm Password</span>
            <input id="password_confirmation" type="password" name="password_confirmation" required
                autocomplete="new-password" class="box">
            <div class="checkbox">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me"> remember me</label>
            </div>
            <input type="submit" value="sign up" class="btn">

            @if (Route::has('password.request'))
                <p>forget password ? <a href="{{ route('password.request') }}">click here</a></p>
            @endif
            
            <p>already have an account ? <a href="{{ route('login') }}">sign in</a></p>

        </form>

    </div>
</div>
