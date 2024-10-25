<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            Noble<span>UI</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item ">
                <a href="{{ url('admin/') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Anasayafa</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/') }}" target="_blank" class="nav-link">
                    <i class="link-icon" data-feather="send"></i>
                    <span class="link-title">Siteyi Görüntüle</span>
                </a>
            </li>
            <li class="nav-item nav-category">Site Yönetimi</li>
            <li class="nav-item">
                <a href="{{ url('admin/') }}" class="nav-link">
                    <i class="link-icon" data-feather="settings"></i>
                    <span class="link-title">Site Ayarları</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/') }}" class="nav-link">
                    <i class="link-icon" data-feather="disc"></i>
                    <span class="link-title">Seo Yönetimi</span>
                </a>
            </li>
            <li class="nav-item nav-category">İçerik Yönetimi</li>

            <li class="nav-item ">
                <a class="nav-link" data-bs-toggle="collapse" href="#proje" role="button" >
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Hizmetler</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse " id="proje">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route("services") }}" class="nav-link">Hizmetler</a>
                        </li>



                    </ul>
                </div>
            </li>

            <li class="nav-item ">
                <a class="nav-link" data-bs-toggle="collapse" href="#kategori" role="button" >
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Kategori Yönetimi</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse " id="kategori">
                    <ul class="nav sub-menu">

                        <li class="nav-item">
                            <a href="{{  route("servicesCategory") }}" class="nav-link">Kategoriler</a>
                        </li>


                    </ul>
                </div>
            </li>




            <li class="nav-item nav-category">Components</li>
            <li class="nav-item">
                <a href="{{ url('admin/') }}" class="nav-link">
                    <i class="link-icon" data-feather="settings"></i>
                    <span class="link-title">Whatsapp Destek</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/') }}" class="nav-link">
                    <i class="link-icon" data-feather="settings"></i>
                    <span class="link-title">Google&Yandex Yönetimi</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/') }}"  class="nav-link">
                    <i class="link-icon" data-feather="settings"></i>
                    <span class="link-title">Sosyal Medya Yönetimi</span>
                </a>
            </li>
        </ul>
    </div>
</nav>

