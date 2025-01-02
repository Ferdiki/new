@extends('layouts.main-user')

@section('content')
    <x-navbar />

    <x-header :title="$title" />


    <!-- Contact Start -->
    <div class="container-fluid contact py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                <h4 class="text-primary mb-4 judul">Kontak kami</h4>
                <h1 class="display-5 mb-4">Our Contact Form</h1>
            </div>
            <div class="row g-5 align-items-start">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <form>
                        <div class="row g-3">
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Nama anda</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Email anda</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <div class="form-floating">
                                    <input type="phone" class="form-control" id="phone" placeholder="Phone">
                                    <label for="phone">Subjek</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 160px"></textarea>
                                    <label for="message">Pesan</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-light d-flex align-items-center justify-content-center mb-3"
                            style="width: 90px; height: 90px; border-radius: 50px;"><i
                                class="fa fa-map-marker-alt fa-2x text-primary"></i></div>
                        <div class="ms-4">
                            <h4>Addresses</h4>
                            <p class="mb-0">
                            Jl. Patriot II  H 231 Semarang Kode Pos 50172.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-light d-flex align-items-center justify-content-center mb-3"
                            style="width: 90px; height: 90px; border-radius: 50px;"><i
                                class="fa fa-phone-alt fa-2x text-primary"></i></div>
                        <div class="ms-4">
                            <h4>Mobile</h4>
                            <p class="mb-0">(024) 3519398</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-light d-flex align-items-center justify-content-center mb-3"
                            style="width: 90px; height: 90px; border-radius: 50px;"><i
                                class="fa fa-envelope-open fa-2x text-primary"></i></div>
                        <div class="ms-4">
                            <h4>Email</h4>
                            <p class="mb-0"> purwosari@gmail.com</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="me-4">
                            <div class="bg-light d-flex align-items-center justify-content-center"
                                style="width: 90px; height: 90px; border-radius: 50px;"><i
                                    class="fas fa-share fa-2x text-primary"></i></div>
                        </div>
                        <div class="d-flex">
                            <a class="btn btn-lg-square btn-primary rounded-circle me-2" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href="#"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                </div><br><br>
                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s"> <div class="rounded h-100"> <iframe class="rounded w-100" style="height: 500px;" 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.2150042528463!2d110.41455271477056!3d-6.99508989497982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4a0e6ddf2b%3A0x449c5da5bf5d5d38!2sKelurahan%20Purwosari%2C%20Kec.%20Semarang%20Utara%2C%20Kota%20Semarang%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1727718026194!5m2!1sid!2sid" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe> 
                </div> 
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
