@extends('layouts.app')
@section('title')
    All Files
@endsection
@section('content')

    <h6 class="heading">RECENTLY UPLOADED FILES</h6>
    <div class="files row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 mb-4">
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
            <div class="files__card files__card-more card border shadow" filetype='more'>
                <div class="card-body p-2">
                    <div class="card-img"></div>
                    <div class="card-text my-2">
                        <span class="text-primary d-block text-center">Click to view more</span>
                        <small class="text-muted"></small>
                    </div>
                    <small class="text-muted"></small>
                    <div class="options-wrapper-active">
                        <a href="{{ route('allFiles.index') }}" class="preview-btn btn">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Subjects -->
    <h6 class="heading">MY SUBJECTS</h6>
    <div class="folders card-deck">
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
                    <button class="btn btn-muted card-option" id="folder1" data-toggle="dropdown">
                        <i class="fas fa-ellipsis-h text-muted"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="folder1">
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
        $('.files__card').hover(
            function() {
                $(this).find('.options-wrapper').css('display', 'flex');
            },
            function() {
                $(this).find('.options-wrapper').css('display', 'none')
            }
        );

    </script>
@endsection
