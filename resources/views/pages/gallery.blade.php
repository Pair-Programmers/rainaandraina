@extends('layouts.master')

@section('title-meta')
<title>Gallery | Raina & Raina - Law & Attorney Firm</title>
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
                    <h2>Events</h2>
                    <ul>
                        <li><a href="{{route('home')}}">Home <i class="las la-angle-right"></i></a></li>
                        <li>Events</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page banner Area -->

<!-- Gallery Area -->
<div class="gallery-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Events Images</h2>
        </div>
        <div class="row">
            @foreach ($folders as $folder)
            <div class="col-lg-4 col-md-6">
                <a href="{{route('gallery.show', $folder)}}" >
                <div class="atorn-gallery" style="text-align: center">
                    @forelse ($folder->galleryImages as $galleryImage)
                        <img src="{{asset('storage/images/gallery')}}/{{$galleryImage->image}}" alt="image">
                    @empty
                        <img src="assets/img/gallery/gpic1.jpg" alt="image">
                    @endforelse

                        {{$folder->name}} Images
                </div>
            </a>
            </div>
            @endforeach

            @foreach ($galleryImages as $galleryImage)
            <div class="col-lg-4 col-md-6">
                <div class="atorn-gallery">
                    <img src="{{asset('storage/images/gallery')}}/{{$galleryImage->image}}" alt="image">
                    <div class="caption">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <a href="{{asset('storage/images/gallery')}}/{{$galleryImage->image}}">
                                    <i class="las la-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- End Gallery Area -->
@endsection

@section('custom-script')
@endsection
