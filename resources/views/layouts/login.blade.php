<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') {{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/material-dashboard.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/demo.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/fresh-bootstrap-table.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/plugins/toastr/toastr.min.css') }}" rel="stylesheet"/>

    <link href="{{ asset('css/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet"/>

</head>

<body>
    @yield('content')
    
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('js/jquery-jvectormap.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/material.min.js') }}"></script>
    <script src="{{ asset('js/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('js/core.js') }}"></script>
    <script src="{{ asset('js/arrive.min.js') }}"></script>
    <script src="{{ asset('js/es6-promise-auto.min.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/chartist.min.js') }}"></script>
    <script src="{{ asset('js/jquery.bootstrap-wizard.js') }}"></script>
    <script src="{{ asset('js/bootstrap-notify.js') }}"></script>
    <script src="{{ asset('js/jquery.sharrre.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datetimepicker.js') }}"></script>
    <script src="{{ asset('js/nouislider.min.js') }}"></script>
    <script src="{{ asset('js/jquery.select-bootstrap.js') }}"></script>
    <script src="{{ asset('js/jquery.datatables.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.js') }}"></script>
    <script src="{{ asset('js/jasny-bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('js/locale-all.js') }}"></script>
    <script src="{{ asset('js/jquery.tagsinput.js') }}"></script>
    <script src="{{ asset('js/material-dashboard.js') }}"></script>
    <script src="{{ asset('js/bootstrap-table.js') }}"></script>
    <script src="{{ asset('js/bootstrap-table-pt-BR.js') }}"></script>
    <script src="{{ asset('js/jquery.email-autocomplete.min.js') }}"></script>
    <script src="{{ asset('js/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('js/demo.js') }}"></script>


    <!-- Skin config script - only for demo purpose-->
    <script src="{{ asset('js/app/skin.config.min.js') }}"></script>


    <script>
        $(document).ready(function(){
            toastr.options = {
                closeButton: true,
                progressBar: true,
                positionClass: "toast-bottom-right",
                showMethod: 'slideDown',
                timeOut: 8000
            };

            carregaNotificacoes();
        });
    </script>

</body>

</html>
