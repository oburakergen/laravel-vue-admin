<div id="header" class="header bg-theme-cultured">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg p-0">
                    <a class="navbar-brand logo h3" href="{{ route('home') }}">
                        <img src="{{ asset('/images/logo.png') }}"  width="106" alt="Logo" loading="lazy">
                    </a>
                    <button class="navbar-toggler theme-btn theme-btn-default" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <i class="fa fa-bars fa-2x"></i>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto text-uppercase">
                            <li class="nav-item active">
                                <a class="nav-link font-raleway" href="{{ route('home') }}">Anasayfa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-raleway" href="{{ route('about') }}">Hakkımızda</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hizmetlerimiz</a>
                                <ul class="dropdown-menu animate__animated animate__fadeIn">
                                    <li><a class="dropdown-item" href="{{ route('service') }}">Oto Tamir/Bakım Servisi</a></li>
                                    <li><a class="dropdown-item" href="{{ route('service') }}">Periyodik Bakım Servisi</a></li>
                                    <li><a class="dropdown-item" href="{{ route('service') }}">Oto Kaporta Servisi</a></li>
                                    <li><a class="dropdown-item" href="{{ route('service') }}">Oto Boyama Servisi</a></li>
                                    <li><a class="dropdown-item" href="{{ route('service') }}">Boya Koruma</a></li>
                                    <li><a class="dropdown-item" href="{{ route('service') }}">Oto Elektrik Servisi</a></li>
                                    <li><a class="dropdown-item" href="{{ route('service') }}">7/24 Yol Servisi</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contact') }}">Ürünlerimiz</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contact') }}">İletişim</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-lg-3 d-none d-lg-block">
                <div class="header-right-btn">
                    <div class="theme-d-inline-block">
                        <a href="{{ route('book') }}" class="btn btn-danger bg-theme-maximum color-theme-cultured"><span>Fiyat Teklifi Alın</span></a>
                    </div>
                </div>
            </div>
        </div><!-- row -->
    </div>
</div>
