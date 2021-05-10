<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" /> --}}

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body class="font-sans antialiased">
    <!-- Base Header -->
    @include('layouts.shared.baseheader')

    <div class="d-flex">
        @empty($title)
            {{ $title = null }}
        @endempty
        <!-- Left Sidebar Navigation -->
        @include('layouts.shared.left-sidebar-nav')

        <!-- Page Content -->
        <main class="app__content container-fluid mt-4 pt-2">
            <div class="app__content-main px-2">
                <div class=" m-0 p-0">
                    <!-- Title -->
                    <h1 id="app__title" class="app__content-main__heading mb-4">
                        {{ ucwords($title ?? 'default title') }}
                    </h1>

                    <!-- Main Content -->
                    @yield('content')

                    <!-- Footer -->
                    <div class="app__content-footer bg-white mt-5">Footer</div>
                </div>
            </div>
        </main>
    </div>

    <!-- Offscreens -->

    <button class="scroller border shadow-lg collapse" title="Scroll Up">
        <i class="fa fa-arrow-up"></i>
    </button>

    <!-- Modals -->
    <div class="modal" id="base__modal-create" tabindex="-1" role="dialog" aria-labelledby="base__modal-create"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Subject Name</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('script')
    <script>
        $(document).ready(function() {
            /* root */
            $('html').contextmenu(function(event) {
                event.preventDefault();
            })

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

        /* Scroller */
        $(document).scroll(function(event) {
            if ($(this).scrollTop() >= 200) {
                $('.scroller').addClass('show')
            } else {
                $('.scroller').removeClass('show')
            }
        })
        $('.scroller').click(function() {
            window.scrollTo(0, 0);
        })

        /* Modal */
        $('#base__modal-create').on('show.bs.modal', function(event) {
            let button = $(event.relatedTarget)
            let title = button.attr('modal-title')
            let type = button.attr('modal-type')

            let modal = $(this)
            modal.find('.modal-title').text(title)
            modal.find('.modal-body input').val(type)

            $(this).find('input').attr('autofocus');
        })

    </script>
</body>

</html>
