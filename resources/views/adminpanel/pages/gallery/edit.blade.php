@extends('adminpanel.layouts.master')

@section('title-meta')
    <title>{{ env('APP_NAME', 'Admin') }} | Category Create</title>

    <meta name="description" content="this is description">
@endsection

@section('other-css')
@endsection

@section('content')
    <div id="page-wrapper" class="gray-bg">

        <div class="row border-bottom">
            @include('adminpanel.partials.header')
        </div>

        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-4">
                <h2>Category Management</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Category</a>
                    </li>
                    <li class="active">
                        <strong>Edit</strong>
                    </li>
                </ol>
            </div>
            <div class="col-sm-8">
                <div class="title-action">
                    <a href="{{ route('admin.gallery.index') }}" class="btn btn-primary">Show List</a>
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content ">

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">

                        <div class="ibox-title">
                            <h5>Gallery Images </h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>

                        <div class="ibox-content">
                            <form method="POST" action="{{ route('admin.gallery.update', $galleryImage->id) }}" class="form-horizontal"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group"><label class="col-sm-2 control-label">Folder</label>
                                    <div class="col-sm-4 @error('gallery_folder_id') has-error @enderror">
                                        <select class="form-control" name="gallery_folder_id" required>
                                            @foreach ($folders as $key => $folder)
                                                @if ($folder->id == $galleryImage->gallery_folder_id)
                                                <option value="{{$folder->id}}" selected>{{$folder->name}}</option>
                                                @else
                                                <option value="{{$folder->id}}">{{$folder->name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('gallery_folder_id')
                                            <span class="help-block m-b-none">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group  ">

                                    <label class="col-sm-2 control-label">Images</label>
                                    <div class="col-sm-4 @error('images[]') has-error @enderror ">
                                        <input id="" name="image" type="file" accept="image/*"  class="form-control"
                                            value="{{ old('name') }}">
                                        @error('images[]')
                                            <span class="help-block m-b-none">{{$message}}</span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-group ">

                                    <label class="col-sm-2 control-label">Order Number</label>
                                    <div class="col-sm-4 @error('order_number') has-error @enderror ">
                                        <input id="" name="order_number" type="number"  class="form-control"
                                            value="{{ $galleryImage->order_number }}">
                                        @error('order_number')
                                            <span class="help-block m-b-none">{{$message}}</span>
                                        @enderror
                                    </div>

                                </div>




                                <div class="hr-line-dashed"></div>


                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-primary" type="submit">Update</button>
                                    </div>
                                </div>



                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        @include('adminpanel.partials.footer')

    </div>
@endsection


@section('custom-script')
    <script>
        $(document).ready(function() {

            $('.summernote').summernote();

        });

        var edit = function() {
            $('.click2edit').summernote({
                focus: true
            });
        };
        var save = function() {
            var aHTML = $('.click2edit').code(); //save HTML If you need(aHTML: array).
            $('.click2edit').destroy();
        };
    </script>
@endsection
