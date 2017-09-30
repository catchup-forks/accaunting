<header class="main-header">
  <!-- Logo -->
  <a href="#" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><img src="{{ asset($company->company_logo) }}" class="logo-image-lg" width="25"
                                 alt="{{ $company->company_name }}"></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><img src="{{ asset($company->company_logo) }}" class="logo-image-lg" width="25"
                               alt="{{ $company->company_name }}"> <b>{{ $company->company_name }}</b></span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Notifications: style can be found in dropdown.less -->
        <li class="dropdown notifications-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-bell-o"></i>
            @if ($notifications)
              <span class="label label-warning">{{ $notifications }}</span>
            @endif
          </a>
          <ul class="dropdown-menu">
            <li
              class="header">{{ trans_choice('header.notifications.counter', count($notifications), ['count' => count($notifications)]) }}</li>
            <li>
              <!-- inner menu: contains the actual data -->
              <ul class="menu">
                @if (count($bills))
                  <li>
                    <a href="{{ url('auth/users/' . $user->id . '/read-bills') }}">
                      <i
                        class="fa fa-shopping-cart text-red"></i> {{ trans_choice('header.notifications.upcoming_bills', count($bills), ['count' => count($bills)]) }}
                    </a>
                  </li>
                @endif
                @if (count($invoices))
                  <li>
                    <a href="{{ url('auth/users/' . $user->id . '/read-invoices') }}">
                      <i
                        class="fa fa-money text-green"></i> {{ trans_choice('header.notifications.overdue_invoices', count($invoices), ['count' => count($invoices)]) }}
                    </a>
                  </li>
                @endif
              </ul>
            </li>
            <li class="footer"><a href="#">{{ trans('header.notifications.view_all') }}</a></li>
          </ul>
        </li>
        <!-- Tasks: style can be found in dropdown.less -->
        <li class="dropdown tasks-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            {!! language()->flag() !!}
          </a>
          <ul class="dropdown-menu">
            <li class="header">{{ trans('header.change_language') }}</li>
            <li>
              <!-- inner menu: contains the actual data -->
              {!! language()->flags() !!}
            </li>
          </ul>
        </li>
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{ asset($user->picture) }}" class="user-image" alt="User Image">
            <span class="hidden-xs">{{ $user->name }}</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="{{ asset($user->picture) }}" class="img-circle" alt="User Image">
              <p>
                {{ $user->name }}
                <small>{{ trans('header.last_login', ['time' => $user->last_logged_in_at]) }}</small>
              </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              @permission('read-customers-profile')
              <div class="pull-left">
                <a href="{{ url('auth/users/' . $user->id . '/edit') }}"
                   class="btn btn-default btn-flat">{{ trans('auth.profile') }}</a>
              </div>
              @endpermission
              <div class="pull-right">
                <a href="{{ url('customers/logout') }}" class="btn btn-default btn-flat">{{ trans('auth.logout') }}</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
