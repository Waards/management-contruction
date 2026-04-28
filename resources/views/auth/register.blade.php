<form method="POST" action="{{ route('register') }}">
    @csrf

    <div style="display: flex; flex-direction: column; gap: 1.25rem;">
        <div>
            <label style="display: block; font-size: 0.875rem; font-weight: 500; color: #374151; margin-bottom: 0.25rem;">Full Name</label>
            <input type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name"
                   style="width: 100%; padding: 0.75rem 1rem; border: 1px solid #d1d5db; border-radius: 0.75rem; background: #f9fafb; font-size: 1rem;">
            @error('name')
                <p style="margin-top: 0.25rem; font-size: 0.875rem; color: #dc2626;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label style="display: block; font-size: 0.875rem; font-weight: 500; color: #374151; margin-bottom: 0.25rem;">Email Address</label>
            <input type="email" name="email" value="{{ old('email') }}" required autocomplete="username"
                   style="width: 100%; padding: 0.75rem 1rem; border: 1px solid #d1d5db; border-radius: 0.75rem; background: #f9fafb; font-size: 1rem;">
            @error('email')
                <p style="margin-top: 0.25rem; font-size: 0.875rem; color: #dc2626;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label style="display: block; font-size: 0.875rem; font-weight: 500; color: #374151; margin-bottom: 0.25rem;">Select Role</label>
            <select name="role" required
                    style="width: 100%; padding: 0.75rem 1rem; border: 1px solid #d1d5db; border-radius: 0.75rem; background: #f9fafb; font-size: 1rem;">
                <option value="pm">Project Manager (PM)</option>
                <option value="hr">HR</option>
                <option value="engineer">Engineer</option>
                <option value="admin">Admin</option>
            </select>
            <p style="margin-top: 0.25rem; font-size: 0.75rem; color: #6b7280;">Choose the role that best describes your position</p>
            @error('role')
                <p style="margin-top: 0.25rem; font-size: 0.875rem; color: #dc2626;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label style="display: block; font-size: 0.875rem; font-weight: 500; color: #374151; margin-bottom: 0.25rem;">Password</label>
            <input type="password" name="password" required autocomplete="new-password"
                   style="width: 100%; padding: 0.75rem 1rem; border: 1px solid #d1d5db; border-radius: 0.75rem; background: #f9fafb; font-size: 1rem;">
            @error('password')
                <p style="margin-top: 0.25rem; font-size: 0.875rem; color: #dc2626;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label style="display: block; font-size: 0.875rem; font-weight: 500; color: #374151; margin-bottom: 0.25rem;">Confirm Password</label>
            <input type="password" name="password_confirmation" required autocomplete="new-password"
                   style="width: 100%; padding: 0.75rem 1rem; border: 1px solid #d1d5db; border-radius: 0.75rem; background: #f9fafb; font-size: 1rem;">
            @error('password_confirmation')
                <p style="margin-top: 0.25rem; font-size: 0.875rem; color: #dc2626;">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" style="width: 100%; padding: 0.75rem 1rem; background: #4f46e5; color: white; font-weight: 600; border-radius: 0.75rem; border: none; cursor: pointer; font-size: 1rem; transition: background 0.2s;">
            Create Account
        </button>
    </div>
</form>