<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="/dashboard" class="app-brand-link">
        <img src="{{asset('assets/img/branding/logo.png')}}" class="app-brand-logo w-px-30 h-auto me-2 " alt="logo" />
            <span class="app-brand-text menu-text fw-bold">Livewire App
              <br />
              <span class="fs-tiny fw-medium"></span>
            </span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Page -->
        <li class="menu-item {{ request()->is('dashboard') ? 'active' : '' }}">
          <a href="/dashboard" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div class="text-truncate" data-i18n="Page 1">Dashboard</div>
          </a>
        </li>
          <li class="menu-item">
              <div style="margin-left: 5%; margin-top: 5%; color: #b4b0c4;">Transactions</div>
          </li>

        <li class="menu-item">
          <div style="margin-left: 5%; margin-top: 5%; color: #b4b0c4;">User Management</div>
        </li>
        

        <li class="menu-item {{ request()->is('roles') ? 'active' : '' }}">
          <a href="/roles" class="menu-link" >
            {{-- <i class='menu-icon bx bx-purchase-tag-alt'></i> --}}
            <i class='menu-icon bx bx-shield-plus'></i>
            {{-- <i class='menu-icon tf-icons bx bx-group'></i> --}}
            <div class="text-truncate" data-i18n="Page 2">Roles</div>
          </a>
        </li>

        <li class="menu-item" {{ request()->is('permissions') ? 'active' : '' }}>
          <a href="/permissions" class="menu-link" >
            <i class='menu-icon tf-icons bx bx-key'></i>
            <div class="text-truncate" data-i18n="Page 2">Permission</div>
          </a>
        </li>

        <li class="menu-item {{ request()->is('user-management') ? 'active' : '' }}">
          <a href="/user-management" class="menu-link" >
            <i class='menu-icon tf-icons bx bx-group'></i>
            <div class="text-truncate" data-i18n="Page 2">Users</div>
          </a>
        </li>

      </ul>
  </aside>
