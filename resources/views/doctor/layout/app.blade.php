<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - Doctor Panel</title>

    @include('doctor.layout.css')

    @stack('style')

</head>

<body id="page-top">

    <div id="wrapper">
        @include('doctor.layout.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('doctor.layout.header')
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="row mb-3">
                        <div class="col-md-8">
                            <h1 class="h3 mb-2 text-gray-800">@yield('title')</h1>
                        </div>
                        <div class="col-md-4">
                            @yield('title-right')
                        </div>
                    </div>
                    @yield('content')
                </div>
            </div>
        </div>

    </div>

    @include('doctor.layout.script')

    @stack('script')
</body>

</html>