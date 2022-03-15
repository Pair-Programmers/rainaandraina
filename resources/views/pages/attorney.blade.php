@extends('layouts.master')

@section('title-meta')
    <title>{{ env('APP_NAME', 'Admin') }} | Product Create</title>
    <meta name="description" content="this is description">
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
                        <h2>Attorney</h2>
                        <ul>
                            <li><a href="index.html">Home <i class="las la-angle-right"></i></a></li>
                            <li>Attorney</li>
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
            <div class="section-title">
                <span>Experienced Attorney</span>
                <h2>Our Experienced Attorney Are Ready To answer any questions</h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="attorney-card">
                        <a href="">
                            <img src="assets/img/attorney/faisal.jpg" alt="Image">
                        </a>
                        <div class="attorney-card-text">
                            <h3><a href="">Faisal Naseer Rana</a></h3>
                            <p>Senior Attorney & Founder of Raina & Raina</p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="attorney-card">
                        <a href="">
                            <img src="assets/img/attorney/yasir.jpg" alt="Image">
                        </a>
                        <div class="attorney-card-text">
                            <h3><a href="">Yasir Naseer Rana</a></h3>
                            <p>Corporate Lawyer</p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="attorney-card">
                        <a href="">
                            <img src="assets/img/attorney/attorney1.jpg" alt="Image">
                        </a>
                        <div class="attorney-card-text">
                            <h3><a href="">Azeem Danyal</a></h3>
                            <p>Corporate Attorney</p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="attorney-card">
                        <a href="">
                            <img src="assets/img/attorney/attorney4.jpg" alt="Image">
                        </a>
                        <div class="attorney-card-text">
                            <h3><a href="">Mujahid Arshad</a></h3>
                            <p>Corporate Attorney</p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="attorney-card">
                        <a href="">
                            <img src="assets/img/attorney/sardar.jpg" alt="Image">
                        </a>
                        <div class="attorney-card-text">
                            <h3><a href="">Sardar Ali Bhatti</a></h3>
                            <p>Corporate Attorney</p>

                        </div>
                    </div>
                </div>


            </div>
            <!-- Pagination -->
            <div class="col-lg-12 col-md-12">
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
            </div>
        </div>
    </div>
    <!-- End Attorney Area -->
@endsection

@section('custom-script')
@endsection
