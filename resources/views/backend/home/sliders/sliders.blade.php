@extends('backend.layouts.base')
    {{-- <style>
        .tox-tinymce-aux {
               position: relative !important;
               z-index: 10055;
           }
           .tox-notification { display: none !important }
    </style> --}}
@section('content')

<div class="row wrapper border-bottom white-bg page-heading" >
    <div class="col-lg-10 py-2">
       
        <h2></h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">Home</a>
            </li>
            <li class="breadcrumb-item active">
                <strong style="color: #04336b">Sliders</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2 py-2">
        {{-- <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item active"><a href="#">Slider</a></li>
        </ul> --}}
    </div>
</div>
    @include('backend/layouts/error-success')
    <div class="row p-3">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <div>
                        <div class="row">
                            <div class="col-md-2">
                                <a  href="{{ url('admin-home/sliders/create') }}"  class="btn btn-primary w-100">Add New</a>
                            </div>
                        </div>
                    </div>

                @if(session()->has('message'))

                    <div class="alert alert-success">
                        
                    <button type="button" class="close" data-dismiss="alert">x</button>

                    {{session()->get('message')}}

                @endif

                @if(session()->has('deletemessage'))

                    <div class="alert alert-danger">
                        
                    <button type="button" class="close" data-dismiss="alert">x</button>

                    {{session()->get('deletemessage')}}

                @endif

                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
    
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example display wrap" style="width: 100%;" >
                            <thead>
                                <tr>
                                    <th width="3%">#</th>
                                    <th width="15%">Name</th>
                                    <th width="50%">Title</th>
                                    <th width="10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>1</td>
                                    <td>Sample1</td>
                                    <td>Sample 2</td>
                                    <td>
                                        <a data-toggle="modal" data-target="#edtSample" data-position="poSample" class="btn btn-primary btn-xs text-white"><i class="fa fa-pencil"></i></a>  
                                        <a data-toggle="modal" data-target="#delSample" class="btn btn-danger btn-xs text-white"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('backend/Home/sliders/modals/addSliders')


    @section('about_script')
    {{-- @yield('aboutusaddcontent') --}}
        <script>
            $(document).ready(function() {
                
                    tinymce.init({
                        selector: ".myContent",
                        // height: 300,
                        plugins: [
                            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                            "save table contextmenu directionality emoticons template paste textcolor"
                        ],
                        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
                        menubar:false,
                        ui_container: '.modal',
                    });

            });

            $(document).on('focusin', function(e) {
            if ($(e.target).closest(".tox-textfield").length)
            e.stopImmediatePropagation();
        });
        </script>
    @endsection
@endsection