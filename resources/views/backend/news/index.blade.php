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
                <strong style="color: #04336b">News</strong>
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
                                <a  href="{{ url('admin/news/create') }}"  class="btn btn-primary w-100">Add New</a>
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
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $count=0 ?>
                                    @foreach( $data as $data)
                                    <?php $count++ ?>
                                        <tr>
                                            <td>{{ $count }} </td>
                                            <td>{{ $data->title }}</td>
                                            <td>{{ $data->date }}</td>
                                            <td>{!! str_limit(html_entity_decode(strip_tags($data->description)), 190, '...') !!}</td>
                                            <td><img height="50" width="50" src="/backend/img/NewsImages/{{ $data->image }}"></td>
                                            <td style="width: 11%">
                                                <a class="btn btn-primary btn-sm" href="{{ url('admin/news/edit', $data->id) }}"><i class="fa fa-edit" ></i></a>
                                                <a data-toggle="modal" data-target="#delete{{ $data->id }}" class="btn btn-danger btn-sm text-white"><i class="fa fa-trash"></i></a>
                                            </td>

                                                 <!-- Delete Modal -->
                                                 <div class="modal fade" id="delete{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <form role="form" action="{{ url('admin/news/delete', $data->id) }}" method="GET">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Delete</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Are you Sure you want to delete the record?</h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-danger">Yes Delete</button>
                                                        </div>
                                                    </form>
                                                    </div>
                                                    </div>
                                                </div>
                                        </tr>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


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