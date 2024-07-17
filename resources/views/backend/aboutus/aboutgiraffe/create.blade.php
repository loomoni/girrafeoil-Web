@extends('backend.layouts.base')

@section('content')

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-edit"></i>Add About us</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">About Us</li>
            <li class="breadcrumb-item"><a href="#">Add About Us</a></li>
        </ul>
    </div>

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <div>
        <a class="btn btn-primary back-btn" href="{{ url('admin/about-us') }}"><i class="fa-solid fa-reply-all"></i>   Back</a>
    </div>
    <div class="row mt-2">

        <div class="clearix"></div>
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Add New</h3>
                <div class="tile-body">
                    <form method="POST" action=""  enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="control-label">Title</label>
                                <input name="title" class="form-control @error('title') is-invalid @enderror" type="text" placeholder="Enter Title">
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Description</label>
                                <input name="description" class="form-control @error('description') is-invalid @enderror" type="text" placeholder="Enter Description">
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="control-label">Video Link</label>
                                <input name="link" class="form-control @error('link') is-invalid @enderror" type="text" placeholder="YouTube Link">
                                @error('link')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Image</label>
                                <input style="height: 39px" name="image" class="form-control @error('image') is-invalid @enderror" type="file">
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4 align-self-end">
                                <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection