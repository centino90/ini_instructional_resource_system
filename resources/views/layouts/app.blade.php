<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body class="font-sans antialiased">
    <!-- Base Header -->
    @include('layouts.shared.baseheader')

    <div class="d-flex">
        <!-- Left Sidebar Navigation -->
        @include('layouts.shared.left-sidebar-nav')

        <!-- Page Content -->
        <main class="app__content container-fluid my-4 py-2">
            <div class="app__content-main px-2">
                <div class="container m-0 p-0">
                    <!-- Title -->
                    <h1 class="app__content-main__heading mb-4">@yield('title')</h1>

                    <!-- Main Content -->
                    @yield('content')
                </div>
            </div>
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('script')
    <script>
        $(document).ready(function() {
            $('.toggler__sidebar-left').click(function() {
                $('html').toggleClass('sideber-left-toggled')
            });

            $('#base-search').keyup(function() {
                if (this.value == "") {
                    $('.app__subheader__searchresults').removeClass('show')
                    $('.app__subheader__searchresults .list-group').hide()
                    return
                }
                if ($('.app__subheader__searchresults .card:hidden')) {
                    $('.app__subheader__searchresults .spinner').remove()
                }

                $('.app__subheader__searchresults').addClass('show')
                $('.app__subheader__searchresults .list-group').hide()
                $('.app__subheader__searchresults .card-body')
                    .append(`<div class="spinner list-group">
                                <span class="text-muted">Searching: ${this.value}
                                </span>
                                <div class="spinner-grow text-primary" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                    `)

                setTimeout(() => {
                    $('.app__subheader__searchresults .spinner').remove()
                    $('.app__subheader__searchresults .list-group').show()
                }, 2000);
            })
        })

    </script>
</body>

</html>
