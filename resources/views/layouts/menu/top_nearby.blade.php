<nav id="navbar-main" class="navbar navbar-light navbar-expand-lg fixed-top">
  <div class="container">
      <a class="navbar-brand mr-lg-5" href="/">
        <img src="{{ asset('/default/logo_nearby.png') }}">
      </a>
      <div class="d-flex w-100 justify-content-between align-items-center">
      @if(session()->has('geolocation'))
        <div>
          <div style="z-index: 10" class="delivery-location-title">
            Location
          </div>            
          <div class="d-flex justify-content-start">
            <span>
              <b id="top_address_info"><?php 
                echo mb_strimwidth(session('geolocation')->address, 0, 30, "..."); 
              ?></b>
              <a data-toggle="modal" href="#locationset" class="">▼</a>
            </span>
          </div>
        </div>
      @endif
        <div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
      <div class="navbar-collapse collapse" id="navbar_global">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="#">
                <img src="{{ asset('/default/logo_nearby.png') }}">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
          
          @if (!config('settings.single_mode')&&config('settings.restaurant_link_register_position')=="navbar")
            <li class="nav-item">
              <a data-mode="popup" target="_blank" class="button nav-link nav-link-icon" href="{{ route('newrestaurant.register') }}">{{ __(config('settings.restaurant_link_register_title')) }}</a>
            </li>
          @endif
          @if (config('app.isft')&&config('settings.driver_link_register_position')=="navbar")
          <li class="nav-item">
              <a data-mode="popup" target="_blank" class="button nav-link nav-link-icon" href="{{ route('driver.register') }}">{{ __(config('settings.driver_link_register_title')) }}</a>
            </li>
            @endif
          @if(!empty(config('global.facebook')))
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="{{ config('global.facebook') }}" target="_blank" data-toggle="tooltip" title="{{ __('Like us on Facebook') }}">
              <i class="fa fa-facebook-square"></i>
              <span class="nav-link-inner--text d-lg-none">{{ __('Facebook') }}</span>
            </a>
          </li>
          @endif
          @if(!empty(config('global.instagram')))
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="{{ config('global.instagram') }}" target="_blank" data-toggle="tooltip" title="{{ __('Follow us on Instagram') }}">
              <i class="fa fa-instagram"></i>
              <span class="nav-link-inner--text d-lg-none">{{ __('Instagram') }}</span>
            </a>
          </li>
          @endif
          @yield('addiitional_button_1')
          @yield('addiitional_button_2')
          <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
          </ul>
        </ul>
      </div>
    </div>

  </nav>
