@extends('layouts.app')

@section('content')
    {{-- <div class="d-flex align-items-end border-right mb-2">
        <h6 class="heading m-0">UPLOADED FILES</h6>
        <h6 class="file-count heading ml-1 m-0 text-muted">(10 out of<span class="ml-1">{{ $rowCount }})</span></h6>
    </div> --}}

    <div class="options d-flex">
        <div class="d-flex align-items-end border-right pr-2 mr-2">
            <h6 class="heading m-0">UPLOADED FILES</h6>
            @if ($view === 'grid')
                <h6 class="file-count heading ml-1 m-0 text-muted collapse show">
                    (10 out of<span class="ml-1">{{ $rowCount }})</span>
                </h6>
            @endif
        </div>

        @if ($view === 'list')
            <a href="{{ route('allFiles.index') }}" class="options__btn btn btn-light active" title="list view">
                <i class="options__icon fas fa-list"></i>
            </a>
        @elseif($view === 'grid')
            <a href="{{ route('allFiles.index', ['view' => 'list']) }}" class="options__btn btn btn-light active"
                title="list view">
                <i class="options__icon fas fa-th-large"></i>
            </a>
        @endif
    </div>

    <hr class="mt-2">

    @if ($view === 'list')
        <div class="table-responsive">
            <table class="files table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>File Count</th>
                        <th>Size</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class=" tbody">
                    @foreach ($instructionals as $instructional)
                        <tr class="context-menu">
                            <td>{{ $instructional->name }}</td>
                            <td>w</td>
                            <td>w</td>
                            <td>
                                <div class="table__options-hidden btn-group m-0 p-0">
                                    <button class="btn btn-primary" title="preview">
                                        {{-- <i class="fa fa-eye"></i> --}}
                                        VIEW
                                    </button>
                                    {{-- <button class="btn btn-black" title="download">
                                    <i class="fa fa-download"></i>
                                </button> --}}
                                    {{-- <button class="btn">
                                    <i class="fa fa-trash"></i>
                                </button> --}}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    @elseif($view === 'grid')

        <div class="files card-deck mb-4 collapse show">
            @foreach ($instructionals as $instructional)
                <div class="col mb-3">
                    <div class="files__card card border" filetype='doc'>
                        <div class="card-body p-2">
                            <div class="card-img"></div>
                            <div class="card-text my-2">
                                <span class="text-dark d-block">{{ $instructional->name }}</span>
                                <small class="text-muted">10.45kb</small>
                            </div>
                            <small class="text-muted">Last accessed 3 mins ago</small>
                            <div class="options-wrapper">
                                <a href="#we" class="preview-btn btn">
                                </a>
                                <div class="more-options">
                                    <a href="#qwe" class="download-btn btn btn-muted">
                                        <i class="fa fa-download"></i>
                                    </a>
                                    <a href="#qwe2" class="important-btn btn btn-muted">
                                        <i class="fa fa-star"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col mb-3">
                <div class="files__card files__card-more card border shadow" filetype='load-more'>
                    <div class="card-body p-2">
                        <div class="card-img"></div>
                        <div class="card-text my-2">
                            <span class="text-primary d-block text-center">Click to load more</span>

                            <small class="file-count text-muted text-center d-block">(10 out of<span
                                    class="ml-1">{{ $rowCount }})</span></small>

                        </div>
                        <small class="text-muted"></small>
                        <div class="options-wrapper-active">
                            <a href="#" class="load-more preview-btn btn">
                                <form action="{{ route('allFiles.loadMoreFiles') }}" method="post">
                                    @csrf
                                    <button type="submit" class="invisible"></button>
                                </form>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endif


@endsection

@section('script')
    <script>
        $('.files__card').hover(
            function() {
                $(this).find('.options-wrapper').css('display', 'flex');
            },
            function() {
                $(this).find('.options-wrapper').css('display', 'none')
            }
        );

        let loadCount = 0;
        let currentRows = 20;

        function loadMoreAjax() {
            $('.load-more').click(function(event) {
                event.preventDefault();
                let form = $(this).find('form');

                $.ajax({
                        method: "POST",
                        url: $(this).find('form').attr('action'),
                        data: {
                            amount: currentRows,
                            _token: "{{ csrf_token() }}",
                            _route: $(this).find('form').attr('action')
                        },
                        beforeSend: function(xhr) {
                            xhr.overrideMimeType("text/plain; charset=x-user-defined");
                            form.closest('.files__card').toggleClass('loading')
                        }
                    })
                    .done(function(data) {
                        if (data) {
                            let html = jQuery.parseJSON(data).html
                            loadCount = jQuery.parseJSON(data).amount

                            // console.log(jQuery.parseJSON(data).rowCount)
                            $('.files.card-deck').html(html);

                            loadMoreAjax();

                            $('.files__card').hover(
                                function() {
                                    $(this).find('.options-wrapper').css('display', 'flex');
                                },
                                function() {
                                    $(this).find('.options-wrapper').css('display', 'none')
                                }
                            );

                            $('.file-count').html('(' + loadCount +
                                ' out of <span class="ml-1">{{ $rowCount }})</span>')

                            currentRows += 10;
                        }
                    })
                    .fail(function() {
                        alert("error");
                    })
                    .always(function() {
                        form.closest('.files__card').toggleClass('loading')
                    });

            })
        }
        loadMoreAjax()


        $(document).ready(function() {
            $('.table').DataTable({
                autoFill: true,
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'excel', 'pdf'
                ]
            });
        });

    </script>
@endsection
