<form method="POST" action="{{ route('logout') }}" class="dropdown-item">
    @csrf
    <button type="submit" class="btn">
        <i class="fas fa-arrow-left mr-2"></i> Logout
    </button>
</form>
