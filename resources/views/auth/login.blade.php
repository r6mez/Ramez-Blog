<x-guest-layout>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
            @if($errors->has('email'))
                <div class="error">{{ $errors->first('email') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required autocomplete="current-password">
            @if($errors->has('password'))
                <div class="error">{{ $errors->first('password') }}</div>
            @endif
        </div>

        <div class="form-group" style="display:flex;align-items:center;">
            <input id="remember_me" type="checkbox" name="remember" style="margin-right:8px;">
            <label for="remember_me" style="margin:0;">Remember me</label>
        </div>

        <div style="display:flex;justify-content:space-between;align-items:center;">
            @if (Route::has('password.request'))
                <div>Don't have an account?  <a class="link" href="{{ route('register') }}">Sign up</a></div>
            @endif
            <button type="submit" class="primary-button">Log in</button>
        </div>
    </form>
</x-guest-layout>
