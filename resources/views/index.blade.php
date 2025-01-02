@extends('layouts.main-user')

@section('content')
    <!-- Navbar & Hero Start -->
    <div class="container-fluid header position-relative overflow-hidden p-0">

        <x-navbar />

        <x-hero />
    </div>
    <!-- Navbar & Hero End -->

    <!-- About Start -->
    <div class="container-fluid overflow-hidden py-5" style="margin-top: 6rem;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="RotateMoveLeft">
                        <img src="{{ asset('assets/user') }}/img/sources/12.jpg" class="img-fluid w-100"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h4 class="mb-1 text-primary">Sambutan Kepala Desa</h4>
                    <p class="mb-4">Assalamu'alaikum Wr. Wb Kami panjatkan puji syukur kehadirat Allah SWT atas limpahan rahmat-NYA web Kelurahan Purwosari dapat terwujud, tentunya atas bantuan dan dukungan dari semua pihak khususnya Diskominfo Kota Semarang yg telah banyak berkontribusi baik berupa tenaga, pemikiran dan dorongan semangat web ini dapat terselesaikan dengan baik. Dalam portal web Kelurahan Purwosari ini, dihadirkan untuk mengikuti perkembangan teknologi informasi yang kian pesat dan dapat mendekatkan diri dengan masyarakat melalui informasi-informasi yg disampaikan. Semoga website kelurahan Purwosari ini dapat memberikan manfaat dan kontribusi informasi yang seluas-luasnya bagi masyarakat. Namun kami menyadari bahwa website kami ini jauh dari kesempurnaan, untuk itu kami mohon saran, kritik dan masukan yang sifatnya membangun, untuk menjadikan Kelurahan Purwosari lebih baik dan lebih hebat. Salam guyub rukun. Wassalamu'alaikum Wr. Wb
                    </p>
                    <div class="d-flex mb-4">
                    </div>
                    <a href="{{ route('about') }}" class="btn btn-primary rounded-pill py-3 px-5">About More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection
