@extends('app')

@section('main')
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="{{ route('home') }}"><img src="{{ asset('assets/img/neway-icon.png') }}"
                        height="160" width="160" alt="" class="rounded"></a></h1>

            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <style>
        /*--------------------------------------------------------------
                # Hero Section
                --------------------------------------------------------------*/
        #heroblog {
            width: 100%;
            height: 80vh;
            background-image: url('{{ asset("uploads/$blog->image") }}');
            background-size: cover;
        }

        #heroblog .container {
            padding-top: 72px;
        }

        #heroblog h1 {
            margin: 0 0 10px 0;
            font-size: 48px;
            font-weight: 700;
            line-height: 56px;
            color: #fff;
        }

        #heroblog h2 {
            color: rgba(255, 255, 255, 0.6);
            margin-bottom: 50px;
            font-size: 24px;
        }

        #heroblog .btn-get-started {
            font-family: "Jost", sans-serif;
            font-weight: 500;
            font-size: 16px;
            letter-spacing: 1px;
            display: inline-block;
            padding: 10px 28px 11px 28px;
            border-radius: 50px;
            transition: 0.5s;
            margin: 10px 0 0 0;
            color: #fff;
            background: #47b2e4;
        }

        #heroblog .btn-get-started:hover {
            background: #209dd8;
        }

        #heroblog .btn-watch-video {
            font-size: 16px;
            display: flex;
            align-items: center;
            transition: 0.5s;
            margin: 10px 0 0 25px;
            color: #fff;
            line-height: 1;
        }

        #heroblog .btn-watch-video i {
            line-height: 0;
            color: #fff;
            font-size: 32px;
            transition: 0.3s;
            margin-right: 8px;
        }

        #heroblog .btn-watch-video:hover i {
            color: #47b2e4;
        }

        #heroblog .animated {
            animation: up-down 2s ease-in-out infinite alternate-reverse both;
        }

        @media (max-width: 991px) {
            #heroblog {
                height: 100vh;
                text-align: center;
            }

            #heroblog .animated {
                animation: none;
            }

            #heroblog .hero-img {
                text-align: center;
            }

            #heroblog .hero-img img {
                width: 50%;
            }
        }

        @media (max-width: 768px) {
            #heroblog h1 {
                font-size: 28px;
                line-height: 36px;
            }

            #heroblog h2 {
                font-size: 18px;
                line-height: 24px;
                margin-bottom: 30px;
            }

            #heroblog .hero-img img {
                width: 70%;
            }
        }

        @media (max-width: 575px) {
            #heroblog .hero-img img {
                width: 80%;
            }

            #heroblog .btn-get-started {
                font-size: 16px;
                padding: 10px 24px 11px 24px;
            }
        }
    </style>
    <main id="main" style="background-color: #f3f5fa !important">
        <!-- ======= Hero Section ======= -->
        <section id="heroblog" class="d-flex align-items-center">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                        data-aos="fade-up" data-aos-delay="200">
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    </div>
                </div>
            </div>

        </section><!-- End Hero -->
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">

            <div class="container">
                <span><i class="bi bi-book"></i> {{ $blog->by }}</span> <br> <br>
                <h1>{{ $blog->title }}</h1>
                {!! $blog->text !!}
            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page">
            <div class="container">
                <p class="btn btn-link">
                    {{ $blog->created_at }}
                </p>
                <p class="tex  t-dark">
                    {{ $blog->by }}
                </p>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
