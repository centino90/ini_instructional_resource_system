@extends('layouts.app')

@section('content')
    <!-- Subjects -->
    <div class="options d-flex">
        <div class="d-flex align-items-end border-right pr-2 mr-2">
            <h6 class="heading m-0">MY SUBJECTS</h6>
        </div>
        <button class="options__btn btn btn-light active" title="list view">
            <i class="options__icon fas fa-list"></i>
        </button>
    </div>

    <hr class="mt-2">

    <div class="table-responsive">
        <table class="folders table collapse">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>File Count</th>
                    <th>Size</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="tbody">
                @foreach ($subjects as $subject)
                    <tr class="context-menu">
                        <td>{{ $subject->title }}</td>
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
    <div class="folders card-deck collapse show">
        @foreach ($subjects as $subject)
            <div class="folders__folder card border mb-3">
                <div class="card-body px-2 pt-3 pb-0">
                    <a href="#" class="d-flex nav-link p-0">
                        <i class="fa fa-folder h1 p-0 m-0 text-primary"></i>
                        <div class="card-text ml-3">
                            <h6 class="card-title m-0 p-0 text-dark">{{ $subject->title }}</h6>
                            <small class="text-muted m-0 p-0">2 files. 14.05mb</small>
                        </div>
                    </a>
                    <button class="card-option btn btn-muted" id="folder_{{ $subject->title }}" data-toggle="dropdown">
                        <i class="fas fa-ellipsis-h text-muted"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="folder_{{ $subject->title }}">
                        <a class="dropdown-item" href="#">View</a>
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Remove</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

@endsection

@section('script')
    <script>
        let subjectsClickCount = 0;
        $('.options__btn').click(function() {
            if (subjectsClickCount % 2 === 0) {
                $('.folders.collapse.table').toggleClass('show');
                $('.folders.collapse.card-deck').toggleClass('show')
                $(this).find('.options__icon')
                    .toggleClass('fa-list')
                    .toggleClass('fa-th-large')
                    .attr('title', 'grid view')


            } else {
                $('.folders.collapse.card-deck').toggleClass('show')
                $('.folders.collapse.table').toggleClass('show')
                $(this).find('.options__icon')
                    .toggleClass('fa-list')
                    .toggleClass('fa-th-large')
                    .attr('title', 'list view')
            }

            subjectsClickCount++
        })

        /* contextmenu */
        $(function() {
            $.contextMenu({
                selector: '.context-menu',
                callback: function(key, options) {
                    var m = "clicked: " + key;
                    window.console && console.log(m) || alert(m);
                },
                items: {
                    "view": {
                        name: "View",
                    }
                }
            });

            $('.context-menu').on('click', function(e) {
                console.log('clicked', this);
            })
        });

    </script>
@endsection
