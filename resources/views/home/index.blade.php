@extends('home/layouts/main')

@section('content')
    @include('partials.loader')
    <!-- Jumbotron -->
    <section class="jumbotron d-flex align-items-center justify-content-center text-white text-center">
        <div class="row g-0 px-5">
            <h1 class="display-4 fw-bold mb-3">Desa Wisata Tiwingan Lama</h1>
            <p class="lead fw-light">
                @foreach ($destinations as $destination)
                    <span class="destination">{{ $destination->name }}</span>
                @endforeach
            </p>
        </div>
    </section>
    <!-- End Jumbotron -->

    <!-- Destination -->
    <section id="destination">
        <div class="container text-center">
            <div class="row g-0 mb-3">
                <h2>Wisata Tiwingan Lama</h2>
            </div>
            <div class="row fs-5 justify-content-center">
                @foreach ($destinations as $destination)
                    <div class="col-md-6 col-lg-3 mt-3 d-flex justify-content-center">
                        <div class="card">
                            <img src="{{ asset('storage/' . $destination->destination_images[0]->image) }}"
                                class="card-img card-img-top" />
                            <div class="card-body">
                                <h5 class="card-title">{{ $destination->name }}</h5>
                                <p class="card-text">{{ strip_tags($destination->body) }}</p>
                            </div>
                            <div class="p-3">
                                <button data-slug="{{ $destination->slug }}" class="btn btn-primary btn-show">Lihat
                                    Selengkapnya...</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- End Destination --}}

    <div class="container">
        <hr>
    </div>

    <!-- Village Profile -->
    <section id="village">
        <div class="container">
            <div class="row g-0 mb-3 text-center">
                <h2>Desa Tiwingan Lama</h2>
            </div>
            <div class="row g-0">
                <div class="col-lg-4 col-md-12">
                    <img src="/assets/images/village.jpg" class="img-thumbnail" alt="Profil Desa Tiwingan Lama" />
                </div>
                <div class="col-lg-8 col-md-12 p-3 fs-5">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae velit nobis magni eius ipsum illum
                    dicta expedita suscipit ea veniam temporibus dolor, debitis ipsam. Veniam asperiores esse harum. Illum,
                    quisquam. Fugiat quod
                    blanditiis minus quos autem ab recusandae delectus doloremque molestiae consequuntur aut, obcaecati
                    libero ipsa magni at veritatis ratione voluptate illo quam possimus eius, nam ea. Obcaecati, eum vero!
                    Tenetur consequatur
                    deleniti quidem laboriosceat hic quaerat repellendus adipisci molestias soluta ullam vitae sint
                    excepturi delectus iure voluptatem sunt dolores? Aliquam, in fuga saepe id quis sapiente nesciunt? Vel,
                    quisquam.
                    Iusto id fugiat laudantium nostrum quae itaque doloribus, reprehenderit optio of.
                </div>
            </div>
        </div>
    </section>
    <!-- End Village Profile -->

    <div class="container">
        <hr>
    </div>

    <!-- Tour Package -->
    <section id="tour-package">
        <div class="container text-center">
            <div class="row g-0 mb-3">
                <h2>Paket Wisata</h2>
            </div>
            <div class="row fs-5 justify-content-center">
                @foreach ($tour_packages as $tour_package)
                    <div class="col-md-6 col-lg-3 mt-3 d-flex justify-content-center">
                        <div class="card">
                            <img src="{{ asset('storage/' . $tour_package->tour_package_images[0]->image) }}"
                                class="card-img card-img-top" />
                            <div class="card-body">
                                <h5 class="card-title">{{ $tour_package->name }}</h5>
                                <p class="card-text">{{ strip_tags($tour_package->body) }}</p>
                            </div>
                            <div class="p-3">
                                <button data-slug="{{ $tour_package->slug }}" class="btn btn-primary btn-show">Lihat
                                    Selengkapnya...</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Tour Package -->

    <div class="container">
        <hr>
    </div>

    <!-- About Us -->
    <section id="about-us">
        <div class="container text-center">
            <div class="row g-0 mb-5">
                <h2>Tentang Kami</h2>
            </div>
            <div class="row justify-content-evenly">
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="row g-0 justify-content-center align-items-center">
                        <div class="row text-center" style="height: 3rem;">
                            <h1 id="footer-brand">Dewi Tilam</h1>
                        </div>
                        <div id="join-us" class="row justify-content-center p-4">
                            <div id="instagram" class="col-auto">
                                <a href="https://www.instagram.com/dewitilam/" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                        class="bi bi-instagram" viewBox="0 0 16 16">
                                        <path
                                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                    </svg>
                                </a>
                            </div>
                            <div id="whatsapp" class="col-auto">
                                <a href="https://api.whatsapp.com/send?phone=0895348676676" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                        class="bi bi-whatsapp" viewBox="0 0 16 16">
                                        <path
                                            d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                    </svg>
                                </a>
                            </div>
                            <div id="email" class="col-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path
                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                </svg>
                            </div>
                            <div id="location" class="col-auto">
                                <a href="https://www.google.com/maps/place/Tiwingan+Lama,+Aranio,+Banjar+Regency,+South+Kalimantan/@-3.5197194,114.9719083,12z/data=!3m1!4b1!4m5!3m4!1s0x2de67b1f23016137:0x7a042cce7a11e130!8m2!3d-3.5170002!4d115.0406679"
                                    target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                        class="bi bi-geo-alt" viewBox="0 0 16 16">
                                        <path
                                            d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="row justify-content-center">
                        <div class="col-3 col-sm-4 col-lg-4 col-xl-3 mb-3">
                            <img src="/assets/images/logo-kab-banjar.png" style="width: 100%;">
                        </div>
                        <div class="col-sm-12 col-md-6 justify-content-center">
                            <h2 class="ps-4">Pemerintah Kabupaten Banjar</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us -->

    @include('partials.modal_image')
    <script>
        // modal.js need 'url' variable
        const url = '{{ URL::asset('storage') }}';
    </script>
    <script src="/scripts/templates.js"></script>
    <script src="/scripts/modal.js"></script>
    <script src="/scripts/home.js"></script>
@endsection
