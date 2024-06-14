<header class="header-style-01">
    <!-- Menu area Starts -->
    <nav
      class="navbar navbar-area navbar-border navbar-padding navbar-expand-lg navbar-right-content"
    >
      <div class="container custom-container-one nav-container">
        <div class="logo-wrapper">
          <a href="{{route('home')}}" class="logo">
            <img src="/front/assets/img/logo.png" alt="" />
          </a>
        </div>
        <div class="responsive-mobile-menu d-lg-none">
          <a href="javascript:void(0)" class="click-nav-right-icon">
            <i class="las la-ellipsis-v"></i>
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#hotel_booking_menu"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="hotel_booking_menu">
          <ul class="navbar-nav">
            <li><a href="{{route('home')}}"> Beranda </a></li>
            <li><a href="{{route('about')}}"> Tentang Kami </a></li>
            <li><a href="{{route('event')}}"> Program dan Kegiatan </a></li>
            <li class="menu-item-has-children current-menu-item">
              <a href="javascript:void(0)">Info Publik</a>
              <ul class="sub-menu">
                <li><a href="{{route('publicNews')}}">Berita Media</a></li>
                <li><a href="{{route('publicPers')}}">Siaran Pers</a></li>
              </ul>
            </li>
            <li class="menu-item-has-children current-menu-item">
              <a href="javascript:void(0)">Oase</a>
              <ul class="sub-menu">
                <li><a href="{{route('oaseOpini')}}">Opini</a></li>
                <li><a href="{{route('oaseEsai')}}">Esai</a></li>
                <li><a href="{{route('oasePustaka')}}">Pustaka</a></li>
                <li><a href="{{route('oaseInfografis')}}">Infografis</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Menu area end -->
  </header>