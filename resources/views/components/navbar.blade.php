<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary fixed-top">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand ms-3 mt-2 mt-lg-0" href="#">
                <img src="https://media.cakeresume.com/image/upload/s--ipq1T9zw--/c_pad,fl_png8,h_400,w_400/v1633584258/eeatxcqk9klrucxsorfu.png"
                    height="55" alt="MDB Logo" loading="lazy" />
            </a>
            <!-- Left links -->
            <style>
                li {
                    margin-left: 3rem;
                }

                ul {
                    margin-left: 5rem;
                }
            </style>
            <ul class="navbar-nav mb-2 mb-lg-0 " style="margin-left: 18rem">

                <li class="nav-item">
                    <a class="nav-link" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profil.index') }}">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('ekstrakurikuler.index') }}">Ekstrakurikuler</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/galeri">Galeri</a>
                </li>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->
