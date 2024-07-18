@extends('backend.layouts.base')

@section('content')

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-edit"></i>Add Contact</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Contact</li>
            <li class="breadcrumb-item"><a href="#">Add Contact</a></li>
        </ul>
    </div>

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <div>
        <a class="btn btn-primary back-btn" href="{{ url('admin/contact') }}"><i class="fa-solid fa-reply-all"></i>   Back</a>
    </div>
    <div class="row mt-2">

        <div class="clearix"></div>
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Add New Contact</h3>
                <div class="tile-body">
                    <form method="POST" action=""  enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label class="control-label">Address</label>
                                <textarea name="address" class="form-control @error('address') is-invalid @enderror" type="text"></textarea>
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="control-label">Phone</label>
                                <input name="phone" class="form-control @error('phone') is-invalid @enderror" type="text" placeholder="Enter phone">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Email</label>
                                <input style="height: 39px" name="email" class="form-control @error('Email') is-invalid @enderror" type="email">
                                @error('email')
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