@extends('layouts.app')

@section('content')
<section id="home">
    <div class="slider">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="gambar" data-aos="fade-up" data-aos-duration="1000">
                        <img src="assets/slider/4.png" class="img-fluid">
                        <div class="cover"></div>
                        <div class="text" data-aos="fade-down" data-aos-duration="1000">
                            <h1>
                                <strong>
                                    Hi, Aku Laksana Iqbal Utama
                                    <br>
                                    <h5 align=center>
                                        Web Develope & Freelance
                                    </h5>
                                </strong>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="biodata">
    <div class="biodata">
        <div class="container">
            <div class="row">
                <div class="col" data-aos="fade-right" data-aos-duration="1000">
                    <img src="assets/logo/about2.png" class="img-fluid">
                </div>
                <div class="col" data-aos="fade-left" data-aos-duration="1000">
                    <h1>About Me</h1>
                    <h5>
                        Halo, Saya Laksana Iqbal Utama yang sekarang adalah seorang Fresh Graduate dari Prodi S1 Teknik Komputer di Universitas Diponegoro. Saya memiliki keilmuan pada bidang Website Develope dalam pembangunan sebuah sistem informasi berupa Website
                    </h5>
                    <h5><strong>HTML</strong></h5>
                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-danger" style="width: 90%">90%</div>
                    </div>
                    <h5><strong>CSS</strong></h5>
                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-danger" style="width: 80%">80%</div>
                    </div>
                    <h5><strong>LARAVEL</strong></h5>
                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-danger" style="width: 95%">95%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="resume">
    <div class="resume">
        <div class="container" data-aos="flip-down" data-aos-duration="1000">
            <div class="row">
                <h1>View My CV/Resume</h1>
            </div>
            <div class="row">
                <h5 style="text-align: center;">Berikut merupakan Curiculum Vitae diri saya</h5>
            </div>
            <div class="row" style="justify-content: center;margin-top:50px">
                <a href="https://drive.google.com/file/d/1BIllp3rRDvVX-QP0Lav3CJf7OjZw4nye/view?usp=share_link" target="_blank" style="width: 100px;" type="button" class="btn btn-light" terget="_blank"><i class="fa-solid fa-download"></i><strong>&nbsp;&nbsp;CV</strong></a>
            </div>
        </div>
    </div>
</section>

<section id="layanan">
    <div class="layanan">
        <div class="container" data-aos="zoom-out" data-aos-duration="1000">
            <div class="row">
                <h1>
                    <strong>
                        Portofolio
                    </strong>
                </h1>
                <h5 style="text-align: center; margin-bottom:100px">Berikut beberapa project yang pernah saya buat</h5>
            </div>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/porto/web 1.png" class="d-block w-100" alt="...">
                        <div class="cover"></div>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/porto/web 1 2.png" class="d-block w-100" alt="...">
                        <div class="cover"></div>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/porto/web 1 3.png" class="d-block w-100" alt="...">
                        <div class="cover"></div>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</section>

@endsection