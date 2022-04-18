@extends('layouts.master')

@section('title-meta')
<title>Article | Raina & Raina - Law & Attorney Firm</title>
<meta name="description" content="We are distinctive law firm providing superior legal services to domestic and international clients in broad array of areas enlisted in the succeeding pages. Our law firm is an enterprise of outstanding capabilities, unmatched enthusiasms, keen intellects, unyielding integrity and an extraordinary desire to understand and serve the clients.">
<meta name="keywords" content="advocate, attorney, business, consult, consultant, consulting, corporate, government, justice, law, lawyer, lawyers, legal, political">
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
                    <h2>Article</h2>
                    <ul>
                        <li><a href="index.html">Home <i class="las la-angle-right"></i></a></li>
                        <li>Articles</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- End Page banner Area -->

<!-- News & Blog Area -->
<div class="blog-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="blog-card">
                    <a href="{{route('article.blues-of-trust')}}">
                        <img src="{{asset('assets')}}/img/news&blog/article1-express.jpg" alt="Image">
                    </a>
                    <div class="blog-card-text">
                        <h3><a href="{{route('article.blues-of-trust')}}">Blues of Trust for Higher Tax Revenues in the Dwarf Countries</a></h3>
                        <ul>
                            <li>
                                <i class="las la-calendar"></i>
                                16 March 2022
                            </li>
                            <li>
                                <i class="las la-user-alt"></i>
                               MS Zunaira Khan
                            </li>
                        </ul>

                        <p>The outbreak of the Global Pandemic has unveiled the existing traditional mores in the institutional framework of developing countries. In many Dwarf countries, the tax collection system has remained in the grey zones despite several efforts</p>

                        <a href="{{route('article.blues-of-trust')}}" class="read-more">
                            Read More <i class="las la-angle-double-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="blog-card">
                    <a href="{{route('article.birth-of-world')}}">
                        <img src="{{asset('assets')}}/img/news&blog/article2-express.jpg" alt="Image">
                    </a>
                    <div class="blog-card-text">
                        <h3><a href="{{route('article.birth-of-world')}}">Birth of World Order 2.0</a></h3>
                        <ul>
                            <li>
                                <i class="las la-calendar"></i>
                                16 March 2022
                            </li>
                            <li>
                                <i class="las la-user-alt"></i>
                                MS Zunaira Khan
                            </li>
                        </ul>

                        <p>While geo-economy and geo-strategy have been dictating the world affairs for last few decades, “geo-politics” has taken over global stage by transforming the previous trends. International relations are witnessing preferable geo-political considerations, based on prior national interests as directed by classical </p>

                        <a href="{{route('article.birth-of-world')}}" class="read-more">
                            Read More <i class="las la-angle-double-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="blog-card">
                    <a href="{{route('article.pak-china')}}">
                        <img src="{{asset('assets')}}/img/news&blog/article3-express.jpg" alt="Image">
                    </a>
                    <div class="blog-card-text">
                        <h3><a href="{{route('article.pak-china')}}">Pak-China Civil Nuclear Cooperation; New Narrative of Peaceful Co-existence </a></h3>
                        <ul>
                            <li>
                                <i class="las la-calendar"></i>
                                16 March 2022
                            </li>
                            <li>
                                <i class="las la-user-alt"></i>
                                MS Zunaira Khan
                            </li>
                        </ul>

                        <p>The song of Pak-China Friendship is being heard in the halls of energy sector in recent times. While the year 2021 was coughing its last, Pakistan and China have entered into a new phase of bilateral ties. The Pakistan  </p>

                        <a href="{{route('article.pak-china')}}" class="read-more">
                            Read More <i class="las la-angle-double-right"></i>
                        </a>
                    </div>
                </div>
            </div>


        </div>
        <!-- Pagination -->
        <!-- <div class="col-lg-12 col-md-12">
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
        </div> -->
    </div>
</div>
<!-- End News & Blog Area -->

@endsection

@section('custom-script')
@endsection
