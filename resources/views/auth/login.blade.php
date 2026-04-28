<form method="POST" action="{{ route('login') }}">
    @csrf

    <div style="display: flex; flex-direction: column; gap: 1.25rem;">
        <div>
            <label style="display: block; font-size: 0.875rem; font-weight: 500; color: #374151; margin-bottom: 0.25rem;">Email Address</label>
            <input type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username"
                   style="width: 100%; padding: 0.75rem 1rem; border: 1px solid #d1d5db; border-radius: 0.75rem; background: #f9fafb; font-size: 1rem; transition: all 0.2s;">
            @error('email')
                <p style="margin-top: 0.25rem; font-size: 0.875rem; color: #dc2626;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label style="display: block; font-size: 0.875rem; font-weight: 500; color: #374151; margin-bottom: 0.25rem;">Password</label>
            <input type="password" name="password" required autocomplete="current-password"
                   style="width: 100%; padding: 0.75rem 1rem; border: 1px solid #d1d5db; border-radius: 0.75rem; background: #f9fafb; font-size: 1rem; transition: all 0.2s;">
            @error('password')
                <p style="margin-top: 0.25rem; font-size: 0.875rem; color: #dc2626;">{{ $message }}</p>
            @enderror
        </div>

        <div style="display: flex; align-items: center; justify-content: space-between;">
            <label style="display: flex; align-items: center;">
                <input type="checkbox" name="remember" style="width: 1rem; height: 1rem; border: 1px solid #d1d5db; border-radius: 0.25rem; margin-right: 0.5rem;">
                <span style="font-size: 0.875rem; color: #4b5563;">Remember me</span>
            </label>
            @if (Route::has('password.request'))
                <a style="font-size: 0.875rem; font-weight: 500; color: #4f46e5; text-decoration: none;" href="{{ route('password.request') }}">
                    Forgot password?
                </a>
            @endif
        </div>

        <button type="submit" style="width: 100%; padding: 0.75rem 1rem; background: #4f46e5; color: white; font-weight: 600; border-radius: 0.75rem; border: none; cursor: pointer; font-size: 1rem; transition: background 0.2s;">
            Sign In
        </button>
    </div>
</form>