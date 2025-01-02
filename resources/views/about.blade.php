@extends('layouts.main-user')

@section('content')
    <x-navbar />
    <x-header :title="$title" />

    <!-- About Start -->
    <div class="container-fluid overflow-hidden py-4 mt-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="RotateMoveRight">
                        <img src="{{ asset('assets/user/img/sources/struktur_organisasi.png') }}" class="img-fluid w-70"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="display-5 mb-4">Deskripsi tentang kami</h1>
                    <p class="mb-2" style="text-align: justify"> Kelurahan Purwosari merupakan sebuah nama kelurahan di wilayah Kecamatan Semarang Utara, Kota Semarang, Provinsi Jawa Tengah. DiKelurahan Purwosari memiliki jumah penduduk sekitar 9.511 jiwa dengan jumlah RT sebanyak 48 dan jumlah RW sebanyak 6. 
                    Kelurahan Purwosari meliliki batas wilayah di bagian Utara Kelurahan Kuningan, bagian Selatan Kelurahan Pandansari, bagian Barat Kelularan Plombokan, dan di bagian Timur Kelurahan Dadapsari. 
                    </p>
                    <p class="mb-4" style="text-align: justify"> Nama kelurahan ini dikenal karena adanya stasiun Semarang Poncol, salah satu dari dua stasuin yang melayani transportasi di kota Semarang.  Kelurahan Purwosari, yang terletak di Kecamatan Semarang Utara, Kota Semarang, merupakan kawasan bersejarah yang dahulu berperan penting sebagai pintu masuk kapal-kapal dagang dari berbagai penjuru dunia, menjadikannya pusat aktivitas ekonomi dan persinggungan budaya. Pada masa kolonial Belanda, wilayah ini berkembang dengan infrastruktur modern yang mendukung kepentingan ekonomi dan administrasi kolonial. Setelah kemerdekaan, Purwosari berubah menjadi kawasan permukiman padat dengan aktivitas ekonomi masyarakat yang beragam, mulai dari perdagangan kecil, industri rumah tangga, hingga sektor jasa. Dalam beberapa dekade terakhir, modernisasi dan urbanisasi membawa perubahan besar melalui pembangunan fasilitas publik dan kawasan permukiman, meskipun wilayah ini juga menghadapi tantangan seperti banjir rob akibat penurunan muka tanah dan kenaikan air laut. Kini, Purwosari menjadi cerminan kehidupan masyarakat multikultural yang religius dan dinamis, dengan dominasi budaya Jawa yang kuat serta pengaruh etnis Tionghoa dan Arab, menjadikannya salah satu bagian penting dalam sejarah dan perkembangan Kota Semarang.
                    </p>
                    <div class="row g-4">
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid feature overflow-hidden py-3">
        <div class="container py-5">
            <div class="row g-5 pt-5" style="margin-top: 6rem;">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="feature-img RotateMoveLeft h-100" style="object-fit: cover;">
                        <img src="{{ asset('assets/user/img/sources/14.jpg') }}"
                            class="img-fluid w-80 h-80" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.1s">
                    <h4 class="text-primary">Visi</h4>
                    <h1 class="display-6 mb-4">"Terwujudnya pelayanan prima kepada masyarakat dan peningkatan ekonomi melalui UMKM menuju Purwosari sejahtera."</h1>
                    <h4 class="text-primary">Misi</h4>
                    <ul>
                        <li class="mb-3">Meningkatkan kualitas sumber daya manusia aparatur pemerintah kelurahan</li>
                        <li class="mb-3">Meningkatkan hubungan semitraan dan kerjasama dengan lembaga kemasyarakatan dan pemerintah baik vertikal maupun horizontal</li>
                        <li class="mb-3">Membina dan menggerakkan partisipasi masyarakat dalam bidang pemerintahan, pembangunan dan kemasyarakatan</li>
                        <li class="mb-3">Meningkatkan tata kehidupan masyarakat berdasarkan peraturan dan norma yang benar</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->
@endsection
