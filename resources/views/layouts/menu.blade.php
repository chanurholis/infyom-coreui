
<li class="nav-item {{ Request::is('users*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('users.index') !!}">
        <i class="nav-icon icon-cursor"></i>
        <span>Users</span>
    </a>
</li>
<li class="nav-item {{ Request::is('classrooms*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('classrooms.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Classrooms</span>
    </a>
</li>
