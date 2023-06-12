<div class="footer pt-5">
    <div class="container">
        <div class="row row-cols-lg-3 row-cols-1 justify-content-between">
            <div class="col col-lg-6 mb-lg-0 mb-4">
                <a href="{{ '/' }}" class="text-white fs-2">Bengkelin.</a>
                <p class="text-white-50 my-4">Bengkelin adalah sebuah website yang menyediakan layanan berupa Booking
                    Bengkel
                    secara online
                    sehingga Kamu dan Bengkel dapat terhubung dengan cepat.</p>
            </div>
            <div class="col col-lg-2 d-flex flex-column mb-lg-0 mb-4">
                <h5 class="fw-bold text-white">Menu</h5>
                <a href="{{ url('/') }}" class="text-white-50 mt-3">
                    Home
                </a>
                <a href="{{ url('servicepage') }}" class="text-white-50 mt-2">
                    Service
                </a>
                <a href="#" class="text-white-50 mt-2">
                    About Us
                </a>
                @guest
                    <a href="{{ route('login') }}" class="text-white-50 mt-2">
                        Login
                    </a>
                @endguest
            </div>
            <div class="col col-lg-3 d-flex flex-column mb-lg-0 mb-4">
                <h5 class="fw-bold text-white mb-3">Contact</h5>
                <a href="https://www.instagram.com/msibgits_kel.06/" class="text-white-50 mt-2">
                    Our Instagram
                </a>
                <a href="https://github.com/orgs/msib4-gits-kelompok6/repositories" class="text-white-50 mt-2">
                    Our Github
                </a>
                <p class="text-white-50 mt-2">Indonesia</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="text-white text-center copytext">&copy; Copyright 2023 by Rangkong, All Right Reserved.</p>
            </div>
        </div>
    </div>
</div>
