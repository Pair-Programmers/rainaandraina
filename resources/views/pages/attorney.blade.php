@extends('layouts.master')

@section('title-meta')
    <title>Our People | Raina & Raina - Law & Attorney Firm</title>
    <meta name="description"
        content="We are distinctive law firm providing superior legal services to domestic and international clients in broad array of areas enlisted in the succeeding pages. Our law firm is an enterprise of outstanding capabilities, unmatched enthusiasms, keen intellects, unyielding integrity and an extraordinary desire to understand and serve the clients.">
    <meta name="keywords"
        content="advocate, attorney, business, consult, consultant, consulting, corporate, government, justice, law, lawyer, lawyers, legal, political">
@endsection

@section('custom-css')
@endsection

@section('content')
    <!-- Page banner Area -->
    <div class="page-banner bg-1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-content">
                        <h2>Our People</h2>
                        <ul>
                            <li><a href="{{ route('home') }}">Home <i class="las la-angle-right"></i></a></li>
                            <li>Our People</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page banner Area -->

    <!-- Attorney Area -->
    <div class="attorney-area ptb-100">
        <div class="container">
            <div class="section-title" style="background-color: #9c232c;">
                <h2 style="color: white;">Senior Attorney & Founder</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="attorney-card">
                        <a href="">
                            <img src="assets/img/attorney/faisal.jpg" alt="Image">
                        </a>
                        <div class="attorney-card-text">
                            <h3><a href="">Faisal Naseer Rana</a></h3>

                        </div>
                    </div>
                </div>
            </div>


            <div class="section-title" style="background-color: #9c232c;">
                <h2 style="color: white;">Senior Associates</h2>
            </div>


            <div class="row justify-content-center">

                <div class="col-lg-3 col-sm-6">
                    <div class="attorney-card">
                        <a href="">
                            <img src="assets/img/attorney/attorney1.jpg" alt="Image">
                        </a>
                        <div class="attorney-card-text">
                            <h3><a href="">Azeem Danyal</a></h3>

                        </div>
                    </div>
                </div>

                <div class="col-lg-1"></div>
                <div class="col-lg-3 col-sm-6">
                    <div class="attorney-card">
                        <a href="">
                            <img src="assets/img/attorney/yasir.jpg" alt="Image">
                        </a>
                        <div class="attorney-card-text">
                            <h3><a href="">Yasir Naseer Rana</a></h3>

                        </div>
                    </div>
                </div>

                <div class="col-lg-1"></div>
                <div class="col-lg-3 col-sm-6">
                    <div class="attorney-card">
                        <a href="">
                            <img src="assets/img/attorney/4.JPG" alt="Image">
                        </a>
                        <div class="attorney-card-text">
                            <h3><a href="">Mujahid Arshad</a></h3>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">


                <div class="col-lg-3 col-sm-6">
                    <div class="attorney-card">
                        <a href="">
                            <img src="assets/img/attorney/2.jpg" alt="Image">
                        </a>
                        <div class="attorney-card-text">
                            <h3><a href="">Sardar Ali Bhatti</a></h3>

                        </div>
                    </div>
                </div>
            </div>



            <div class="section-title" style="background-color: #9c232c;">
                <h2 style="color: white;">Senior Consultants</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="attorney-card">
                        <a href="">
                            <img src="assets/img/attorney/shaheen.jpg" alt="Image">
                        </a>
                        <div class="attorney-card-text">
                            <h3><a href="">Dr Shaheen Naseer Rana</a></h3>
                            <p>Senior Researcher Fellow in Economics at Oxford University. UK</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-1"></div>
                <div class="col-lg-3 col-sm-6">
                    <div class="attorney-card">
                        <a href="">
                            <img src="assets/img/attorney/sultan.jpg" alt="Image">
                        </a>
                        <div class="attorney-card-text">
                            <h3><a href="">Dr Sultan Mehmood</a></h3>
                            <p>Lead Researcher at the World Bank's DE JURE Program</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-title" style="background-color: #9c232c;">
                <h2 style="color: white;">Litigation Managers</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="attorney-card">
                        <a href="">
                            <img src="assets/img/attorney/11.JPG" alt="Image">
                        </a>
                        <div class="attorney-card-text">
                            <h3><a href="">Rana Mohsin</a></h3>

                        </div>
                    </div>
                </div>

                <div class="col-lg-1"></div>
                <div class="col-lg-3 col-sm-6">
                    <div class="attorney-card">
                        <a href="">
                            <img src="assets/img/attorney/22.jpg" alt="Image">
                        </a>
                        <div class="attorney-card-text">
                            <h3><a href="">Ayaz Sheikh</a></h3>

                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 col-sm-6">
                    <div class="attorney-card">
                        <a href="">
                            <img src="assets/img/attorney/33.jpg" alt="Image">
                        </a>
                        <div class="attorney-card-text">
                            <h3><a href="">Zohaib Hassan</a></h3>

                        </div>
                    </div>
                </div>
            </div>



            <!-- Pagination -->
            {{-- <div class="col-lg-12 col-md-12">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </div> --}}
        </div>
    </div>
    <!-- End Attorney Area -->
@endsection

@section('custom-script')
@endsection
