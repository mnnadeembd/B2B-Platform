<nav class="navbar navbar-light bg-light px-3">
    <span class="navbar-brand">B2B Platform</span>

    <div>
        <span class="me-3">{{ auth()->user()->name ?? 'Guest' }}</span>
        <a href="/logout" class="btn btn-sm btn-danger">Logout</a>
    </div>
</nav>