<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="{{ route('home') }}" class="simple-text logo-normal">
      <img src="/material/img/powerpay.png" alt="powerpay" height="40" width="150">
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i class="material-icons">library_books</i>
          <p>{{ __('Profiles') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> <strong>UP </strong> </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"><strong> UM </strong></span>
                <span class="sidebar-normal "> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item{{ $activePage == 'users.index' ? 'active' : ''}}">
        <a class="nav-link "href="{{route('product.index')}}" >
          <i class="material-icons">local_mall</i>
          <p>{{__('Products')}}</p>
        </a>
       
    </li>

      <li class="nav-item{{ $activePage == 'users.index' ? 'active' : ''}}">
        <a class="nav-link "href="{{route('users.index')}}" >
          <i class="material-icons">content_paste</i>
          <p>{{__('Pending Loans')}}</p>
        </a>
       
    </li>
    <li class="nav-item{{ $activePage == 'cleared.index' ? 'active' : ''}}">
      <a class="nav-link "href="{{route('cleared.index')}}" >
        <i class="material-icons">content_paste</i>
        <p>{{__('Clearance')}}</p>
      </a>
    </li>
    <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
      <a class="nav-link" href="{{route('paid.index')}}">
        <i class="material-icons">verified_user</i>
          <p>{{ __('Cleared Loans') }}</p>
      </a>
    </li>
     
  </li>
      <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('approved.index')}}">
          <i class="material-icons">assignment_turned_in</i>
            <p>{{ __('Approved Loans') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('declined.index')}}">
          <i class="material-icons">assignment_late</i>
            <p>{{ __('Declined Loans') }}</p>
        </a>
      </li>
    
      
       
      


    </ul>
  </div>
</div>