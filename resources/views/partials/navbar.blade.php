<div style="background-color: #333; padding: 15px; color: #fff; display: flex; justify-content: space-between; align-items: center;">
    <div>
        <strong style="font-size: 18px;">Student Manager</strong>
        @auth
            <a href="{{ route('students.index') }}" style="margin-left: 20px; color: #fff; text-decoration: none;">Dashboard</a>
            <a href="{{ route('students.create') }}" style="margin-left: 15px; color: #fff; text-decoration: none;">Add Student</a>
        @endauth
    </div>

    <div>
        @auth
            <span style="margin-right: 10px;">👋 {{ Auth::user()->name }}</span>
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" style="background-color: #e74c3c; color: white; border: none; padding: 6px 10px; cursor: pointer; border-radius: 4px;">
                    Logout
                </button>
            </form>
        @else
            <a href="{{ route('login') }}" style="color: #fff; text-decoration: none; margin-right: 10px;">Login</a>
            <a href="{{ route('register') }}" style="color: #fff; text-decoration: none;">Register</a>
        @endauth
    </div>
</div>
