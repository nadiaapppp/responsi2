<form method="POST" action="{{ route('login') }}" style="max-width: 400px; margin: auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px;">
    @csrf

    <!-- Pilihan Role -->
    <div class="form-group" style="margin-bottom: 15px;">
        <label for="role" style="display: block; font-weight: bold; color: #2c3e50;">Login sebagai</label>
        <select id="role" name="role" required style="width: 100%; padding: 10px; border: 1px solid #dcdcdc; border-radius: 4px; background-color: #f0f9f4; color: #34495e;">
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select>
    </div>

    <!-- Input Email -->
    <div class="form-group" style="margin-bottom: 15px;">
        <label for="email" style="display: block; font-weight: bold; color: #2c3e50;">Email</label>
        <input type="email" id="email" name="email" placeholder="Email" required style="width: 100%; padding: 10px; border: 1px solid #dcdcdc; border-radius: 4px; background-color: #f0f9f4; color: #34495e;">
    </div>

    <!-- Input Password -->
    <div class="form-group" style="margin-bottom: 15px;">
        <label for="password" style="display: block; font-weight: bold; color: #2c3e50;">Password</label>
        <input type="password" id="password" name="password" placeholder="Password" required style="width: 100%; padding: 10px; border: 1px solid #dcdcdc; border-radius: 4px; background-color: #f0f9f4; color: #34495e;">
    </div>

    <!-- Remember Me -->
    <div class="form-group" style="margin-bottom: 15px;">
        <label for="remember_me" style="display: block; font-weight: bold; color: #2c3e50;">
            <input type="checkbox" id="remember_me" name="remember" style="accent-color: #a8d5ba; margin-right: 10px;">
            Remember Me
        </label>
    </div>

    <!-- Link Lupa Password -->
    <div class="form-group" style="margin-bottom: 15px; text-align: right;">
        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" style="text-decoration: none; color: #2c3e50; font-size: 14px;">Forgot your password?</a>
        @endif
    </div>

    <!-- Tombol Submit -->
    <button type="submit" style="width: 100%; padding: 10px; background-color: #a8d5ba; color: white; border: none; border-radius: 4px; font-size: 16px; cursor: pointer;">Log in</button>
</form>
