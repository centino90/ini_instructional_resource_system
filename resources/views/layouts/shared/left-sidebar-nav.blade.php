<aside class="col-md-2 bg-white app__sidebar-left">
    <nav class="app__sidebar-left-sticky">
        <h6 class="heading px-3 mt-4 mb-1">
            <span class="form-text">MY DRIVE</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ $title === 'home' ? 'active' : '' }}" href="{{ route('dashboard') }}">
                    <div class="app__sidebar-left__link">
                        <i class="fa fa-home"></i>
                        <span>Home</span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $title === 'all files' ? 'active' : '' }}"
                    href="{{ route('allFiles.index') }}">
                    <div class="app__sidebar-left__link">
                        <i class="far fa-file-alt"></i>
                        <span>All files</span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $title === 'subjects' ? 'active' : '' }}"
                    href="{{ route('subjects.index') }}">
                    <div class="app__sidebar-left__link">
                        <i class="fas fa-folder"></i>
                        <span>Subjects</span>
                    </div>
                </a>
            </li>
        </ul>

        <h6 class="heading px-3 mt-4 mb-1">
            <span>INSTRUCTIONAL</span>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <div class="app__sidebar-left__link">
                        <i class="fa fa-file"></i>
                        <span>Syllabus</span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <div class="app__sidebar-left__link">
                        <i class="far fa-file"></i>
                        <span>Exams</span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <div class="app__sidebar-left__link">
                        <i class="far fa-file"></i>
                        <span>Activities</span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <div class="app__sidebar-left__link">
                        <i class="far fa-file"></i>
                        <span>Quizzes</span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <div class="app__sidebar-left__link">
                        <i class="far fa-file"></i>
                        <span>Assignments</span>
                    </div>
                </a>
            </li>
        </ul>

        <h6 class="heading px-3 mt-4 mb-1">
            <span>FILE LIBRARY</span>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <div class="app__sidebar-left__link">
                        <i class="fa fa-file-alt"></i>
                        <span>Documents</span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <div class="app__sidebar-left__link">
                        <i class="far fa-image"></i>
                        <span>Images</span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <div class="app__sidebar-left__link">
                        <i class="fa fa-video"></i>
                        <span>Videos</span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <div class="app__sidebar-left__link">
                        <i class="fa fa-volume-up"></i>
                        <span>Audio</span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <div class="app__sidebar-left__link">
                        <i class="fa fa-box-open"></i>
                        <span>Zip Files</span>
                    </div>
                </a>
            </li>
        </ul>
    </nav>
</aside>
