<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>GIRAFFE OIL</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="{{ url('backend/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('backend/css/font-awesome.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <!-- Toastr style -->
        <link href="{{ url('backend/css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">

        <!-- Gritter -->
        <link href="{{ url('backend/js/plugins/gritter/jquery.gritter.css') }}" rel="stylesheet">

        <link href="{{ url('backend/css/animate.css') }}" rel="stylesheet">
        <link href="{{ url('backend/css/style.css') }}" rel="stylesheet">

        <link href="{{ url('backend/css/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">


        <!-- Datatable -->
        <link href="{{ url('backend/css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
        <link href="{{ url('backend/css/plugins/dataTables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
        <link href="{{ url('backend/css/plugins/dataTables/responsive.bootstrap4.min.css') }}" rel="stylesheet">

        <!-- Add your additional styles within the each module if you have -->
        @yield('sample_styles')
       
        <!-- Scripts -->
        <script src="{{ url('backend/js/jquery-3.1.1.min.js') }}"></script>
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        
        <script src="{{ url('backend/js/custom/sidebar_control.js') }}"></script>


        <link href="{{ url('backend/css/chosen.css') }}" rel="stylesheet">
        <script src="{{ url('backend/js/chosen.jquery.js') }}"></script>
    <style>
        .buto {
             transition: 1s;
             width: 50%;

         }
         .buto:hover {
            width: 100%;
            transform: scale(1.01);
         }
         .tox-tinymce-aux {
               position: relative !important;
               z-index: 10055;
           }
           .top-barner{
            margin-bottom: 0;
            background-color: #04336b !important;
           
        }
        .top-barner-text {
            color: white;
            font-size: 18px;
        }
           #wrapper{
            background-color: #04336b !important;
           }
    </style>
    </head>
    <body class="font-sans antialiased">
        <div id="wrapper">
            @include('backend/layouts/sidebar')
            <div id="page-wrapper" class="gray-bg dashbard-1">
                <div class="row border-bottom" >
                    <nav class="navbar navbar-static-top top-barner" role="navigation">
                        <div class="navbar-header ">
                            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                        </div>
                        <ul class="nav navbar-top-links  navbar-left">
                            <li style="padding: 20px; margin-right: 300px">
                                <span class="m-r.-sm  welcome-message top-barner-text"><strong>GIRAFFE OIL ADMIN DASHBOARD</strong></span>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <x-app-layout>
                                </x-app-layout>
                           </li>
                        </ul>
                    </nav>
                </div>
               
                @yield('content')
                            
            </div>
        </div>

        <!-- Mainly scripts -->
        <script src="{{ url('backend/js/popper.min.js') }}"></script>
        <script src="{{ url('backend/js/bootstrap.js') }}"></script>
        <script src="{{ url('backend/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
        <script src="{{ url('backend/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
        <!-- Custom and plugin javascript -->
        <script src="{{ url('backend/js/inspinia.js') }}"></script>
        <script src="{{ url('backend/js/plugins/pace/pace.min.js') }}"></script>

        <!-- jQuery UI -->
        <script src="{{ url('backend/js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

        <!-- GITTER -->
        <script src="{{ url('backend/js/plugins/gritter/jquery.gritter.min.js') }}"></script>

        <!-- Sparkline -->
        <script src="{{ url('backend/js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>


        <!-- Toastr -->
        <script src="{{ url('backend/js/plugins/toastr/toastr.min.js') }}"></script>
        <!-- Sweet alert -->
        <script src="{{ url('backend/js/plugins/sweetalert/sweetalert.min.js') }}"></script>

        <!-- DataTable -->
        <script src="{{ url('backend/js/plugins/dataTables/datatables.min.js') }}"></script>
        <script src="{{ url('backend/js/plugins/dataTables/dataTables.bootstrap4.min.js') }}"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.5/js/responsive.bootstrap4.min.js"></script>


        <!-- tagsinput -->
        <link href="{{ url('backend/css/bootstrap-tagsinput.css') }}" rel="stylesheet">
        <script src="{{ url('backend/js/bootstrap-tagsinput.js') }}"></script>
       
        <script>
            $(document).ready(function(){
                $('.dataTables-example').DataTable({
                    pageLength: 25,
                    responsive: true,
                    dom: '<"html5buttons">lTfgitp',
                    buttons: [
                        { extend: 'copy'},
                        {extend: 'csv'},
                        {extend: 'excel', title: 'ExampleFile'},
                        {extend: 'pdf', title: 'ExampleFile'},

                        {extend: 'print',
                        customize: function (win){
                                $(win.document.body).addClass('white-bg');
                                $(win.document.body).css('font-size', '10px');

                                $(win.document.body).find('table')
                                        .addClass('compact')
                                        .css('font-size', 'inherit');
                        }
                        }
                    ]

                });

            });
            $(document).ready(function(){
                $('.dtb').DataTable({
                    pageLength: 25,
                    responsive: true,
                    dom: '<"html5buttons">lTfgitp',

                });

            });

        </script>

        <!-- Add your additional styles within the each module if you have -->
        @yield('sample_script')
       
      
    </body>
</html>
