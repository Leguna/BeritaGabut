@extends('public.layouts.app')
@section('content')

    @include('public.layouts.navigation')

    <!-- Page Header-->
    <header class="masthead" style="background-image: url('assets/img/about-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>About Me</h1>
                        <span class="subheading">This is what I do.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <h2>Experience</h2>
                    <ul>
                        <li>Get Android Associate Developer Certificate Kotlin | 2019-2022.</li>
                        <li>Create Flutter App for inventory management using QR and Label Printer.</li>
                        <li>VR Web for Virtual Event using A-Frame Library.</li>
                    </ul>
                    <br>
                    <h2>Skill</h2>
                    <ul>
                        <li>Write Clean code and Documentation.</li>
                        <li>Backend using Node.JS, AWS DynamoDB, and Laravel.</li>
                        <li>Android Frontend Programming using Flutter and Kotlin.</li>
                    </ul>
                    <br>
                    <h2>Career</h2>
                    <ul>
                        <li>Internship at IT Agency CV. Ultima Solusi Digital</li>
                        <li>Web and Mobile App House, CV. Idekite Indonesia</li>
                    </ul>

                </div>
            </div>
        </div>
    </main>

    @include('public.layouts.footer')

@endsection
