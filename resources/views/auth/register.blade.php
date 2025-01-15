<form method="POST" action="{{ route('register') }}" style="max-width: 400px; margin: auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px;">
    @csrf
    
    <div class="form-group" style="margin-bottom: 15px;">
        <label for="name" style="display: block; font-weight: bold; color: #2c3e50;">Name</label>
        <input type="text" id="name" name="name" placeholder="Name" required style="width: 100%; padding: 10px; border: 1px solid #dcdcdc; border-radius: 4px; background-color: #f0f9f4; color: #34495e;">
    </div>

    <div class="form-group" style="margin-bottom: 15px;">
        <label for="email" style="display: block; font-weight: bold; color: #2c3e50;">Email</label>
        <input type="email" id="email" name="email" placeholder="Email" required style="width: 100%; padding: 10px; border: 1px solid #dcdcdc; border-radius: 4px; background-color: #f0f9f4; color: #34495e;">
    </div>

    <div class="form-group" style="margin-bottom: 15px;">
        <label for="password" style="display: block; font-weight: bold; color: #2c3e50;">Password</label>
        <input type="password" id="password" name="password" placeholder="Password" required style="width: 100%; padding: 10px; border: 1px solid #dcdcdc; border-radius: 4px; background-color: #f0f9f4; color: #34495e;">
    </div>

    <div class="form-group" style="margin-bottom: 15px;">
        <label for="password_confirmation" style="display: block; font-weight: bold; color: #2c3e50;">Confirm Password</label>
        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required style="width: 100%; padding: 10px; border: 1px solid #dcdcdc; border-radius: 4px; background-color: #f0f9f4; color: #34495e;">
    </div>

    <div class="form-group" style="margin-bottom: 15px;">
        <label style="font-weight: bold; color: #2c3e50;">Role</label>
        <div>
            <label>
                <input type="radio" name="role" value="user" checked style="accent-color: #a8d5ba; margin-right: 10px;"> User
            </label>
            <label>
                <input type="radio" name="role" value="admin" style="accent-color: #a8d5ba; margin-left: 10px;"> Admin
            </label>
        </div>
    </div>

    <button type="submit" style="width: 100%; padding: 10px; background-color: #a8d5ba; color: white; border: none; border-radius: 4px; font-size: 16px; cursor: pointer;">Register</button>
</form>
