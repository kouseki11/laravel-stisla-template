<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand mt-4 mb-3">
            <div class="logo">
                <img class="mb-1 rounded-circle" src="{{ asset('assets') }}/img/logo.png" alt="" width="50" height="50" >
                <a href="">Shinkai</a>
            </div>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <img src="{{ asset('assets') }}/img/logo.png" alt="" width="50" height="50">
        </div>
        <ul class="sidebar-menu">
            <li><a class="nav-link <?= $page == 'dashboard' ? 'active' : '' ?>" href="/"><i class="fa-solid fa-house"></i> <span>Dashboard</span></a></li>
            <li><a class="nav-link <?= $page == 'user' ? 'active' : '' ?>" href="/user"><i class="fa-solid fa-user"></i> <span>User</span></a></li>
            {{-- <li class="nav-item dropdown <?= $page == 'employee' || $page == 'user' || $page == 'role' ? 'active' : '' ?>">
                <a href="#" class="nav-link has-dropdown"><i class="fa-solid fa-hands-holding-child"></i>
                    <span>Human Resource</span></a>
                <ul class="dropdown-menu">
                    <li class=" <?= $page == 'role' ? 'active' : '' ?>"><a class="nav-link" href="/role"><i class="fa-solid fa-user-gear"></i> <span>Role</span></a></li>
                    <li class=" <?= $page == 'user' ? 'active' : '' ?>"><a class="nav-link" href="/user"><i class="fa-solid fa-user"></i> <span>User</span></a></li>
                    <li class=" <?= $page == 'employee' ? 'active' : '' ?>"><a class="nav-link" href="/employee"><i class="fa-solid fa-users"></i> <span>Employee</span></a></li>
                </ul>
            </li>
            <li><a class="nav-link <?= $page == 'supplier' ? 'active' : '' ?>" href="/supplier"><i class="fa-solid fa-box"></i> <span>Supplier</span></a></li>
            <li><a class="nav-link <?= $page == 'project' ? 'active' : '' ?>" href="/project"><i class="fas fa-project-diagram" style="color: #000000;"></i> <span>Project</span></a></li> --}}
        </ul>
    </aside>
</div>
