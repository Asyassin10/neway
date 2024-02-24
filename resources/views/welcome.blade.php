@extends('app')

@section('main')
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="{{route('home')}}"><img src="{{ asset('assets/img/neway-icon.png') }}" height="160" width="160"
                alt="" class="rounded"></a></h1>

            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li>
                    <li><a class="nav-link scrollto" href="#about">Qui sommes nous</a></li>
                    <li><a class="nav-link scrollto" href="#clients">Nos référence</a></li>
                    <li class="dropdown"><a class="nav-link scrollto"><span>Nos expertises</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#portfolio" class="nav-link">Development It</a></li>
                            <li><a href="#portfolio" class="nav-link">Cloud</a></li>
                            <li><a href="#portfolio" class="nav-link">DevOps</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#blog">Blog</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contactez-nous</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1 style="font-family: Gill Sans, sans-serif;">Neway E-soft</h1>
                    <h2>Parceque chaque client est unique. <br> L'art de l'excellence en technologie : Votre partenaire IT
                        et IA.</h2>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>QUI SOMMES NOUS?</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                            in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 ">
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                            in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>
                <br>
                <div class="row content">
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                            in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 ">
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                            in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->
        <section id="why-us" class="why-us bg-white">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
                        <div class="content">
                            <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                            </p>
                        </div>
                        <div class="accordion-list">
                            <ul>
                                <li>
                                    <a data-bs-toggle="collapse" class="collapse"
                                        data-bs-target="#accordion-list-1"><span>01</span> Non consectetur a erat nam at
                                        lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                        <p>
                                            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus
                                            laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor
                                            rhoncus dolor purus non.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2"
                                        class="collapsed"><span>02</span> Feugiat scelerisque varius morbi enim nunc? <i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                            interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                            scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                            Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3"
                                        class="collapsed"><span>03</span> Dolor sit amet consectetur adipiscing elit? <i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci.
                                            Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl
                                            suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis
                                            convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                        style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">
                        &nbsp;</div>
                </div>

            </div>
        </section><!-- End Why Us Section -->
        <section id="clients" class="clients section-bg">
            <div class="container">
                <div class="section-title">
                    <h2>NOS RÉFÉRENCES</h2>
                </div>
                <div class="row justify-content-center" data-aos="zoom-in">
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <img src="https://www.experts-comptables.fr/themes/csoec/logo.svg" class="img-fluid mobile"
                            style="width: 300px; height: 150px" alt="">
                        <img src="assets/img/CNB.png" class="img-fluid mobile" style="width: 300px; height: 200px"
                            alt="">
                        <img src="assets/img/bti___advisory_logo.png" class="img-fluid mobile"
                            style="width: 150px; height: 160px" alt="">
                    </div>
                </div>
            </div>
        </section><!-- End Clients Section -->




        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>nos expertises</h2>
                    <p>CONSEIL ET SOLUTIONS DIGITALES.</p>
                </div>
                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img style="border-radius: 2%;"
                                src="https://www.creative-tim.com/blog/content/images/2022/01/What-it-takes-to-be-successful-in-development.jpg"
                                class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Development It</h4>

                            <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Card 2"></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img style="border-radius: 2%;"
                                src="https://ignitesap.com/wp-content/uploads/2021/01/cloud-app.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Cloud</h4>

                            <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Card 2"></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img style="border-radius: 2%;"
                                src="https://st3.depositphotos.com/1000975/35471/i/450/depositphotos_354712702-stock-photo-devops-software-development-it-concept.jpg"
                                class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>DevOps</h4>

                            <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Card 2"></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"></a>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Portfolio Section -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                                data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non
                                    curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus
                                    non.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc?
                                <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                    velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec
                                    pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus
                                    turpis massa tincidunt dui.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit?
                                <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                                    pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum
                                    tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna
                                    molestie at elementum eu facilisis sed odio morbi quis
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam
                                sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est
                                    ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit
                                    adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="500">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius
                                vel pharetra vel turpis nunc eget lorem dolor? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo
                                    integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc
                                    eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
            <style>

            </style>
        </section><!-- End Frequently Asked Questions Section -->
        <section id="blog" class="blog section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Blog</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>
                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="mt-5 col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                            data-aos-delay="100">
                            <a href="{{ route('blog.show', $blog->slug) }}">
                                <div class="card">
                                    <img src="{{ asset('uploads/' . $blog->image) }}" class="card-img-top"
                                        alt="{{ $blog->title }}" style="object-fit: cover;height: 170px;">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $blog->title }}</h5>
                                        <p class="card-text">{{ $blog->descrption }} </p>

                                    </div>
                                    <p class="ml-3 card-text text-secondary mb-2" style="margin-left:6% !important;"> <i
                                            class="bi bi-clock"></i> {{ $blog->created_at->formatLocalized('%B %d, %Y') }}
                                    </p>
                                    <div class="card-footer bg bg-white" style="border: none">
                                        <b class="card-text text-info"
                                            style="margin-left: 4% !important; margin-bottom: 4% !important;">
                                            <span>Lire plus <i class="bi bi-eye"></i></span>
                                        </b>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>


            </div>
        </section>


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55s</p>
                            </div>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                                frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="{{ route('contact.store') }}" method="post" role="form"
                            class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Votre nom</label>
                                    <input type="text" name="name" class="form-control" id="name" required>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="subject">Sujette</label>
                                <input type="text" class="form-control" name="subject" id="subject" required>
                                @error('subject')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="message">Contenu</label>
                                <textarea class="form-control" name="message" id="message" rows="10" required></textarea>
                                @error('message')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            {!! FriendlyCaptcha::renderWidget() !!}
                            @error('message')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Votre message a été envoyé. Merci!</div>
                            </div>
                            <div class="text-center"><button type="submit">Envoyer</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
