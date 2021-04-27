@extends('layouts.app')
@section('content')

<br>

<img class="card-img-top" src="image/acd.jpg" style="width: 14rem;">

<br>
<div class="card" style="width: 60rem;">
    <br>
    <i class='fas fa-archive' style='font-size:48px;color:#800000'></i>
    <div class="card-body">

     
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Save Materials BSIT</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link  active" href="#">Save Materials BSHM</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Save Materials BSSW</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Save Materials BSED</a>
                    </li>
                    </li>
                  
                </ul>
            </div>
        
            <br>
            <div class="card-body" id="card" style="width:55rem;">
                <h5 class="card-title">BSIT School Year 2020-2021</h5>
                <p class="card-text">Materials are Provided in this System are the content or information conveyed within a course. These include the lectures, readings, textbooks, multimedia components, and other resources in a course.</p>
                <a href="#" class="btn btn-info">Go to Save Materials</a>

            </div>

            <br>
            <div class="card-body" id="card1" style="width:55rem;">
                <h5 class="card-title">BSHM School Year 2020-2021</h5>
                <p class="card-text">Materials are Provided in this System are the content or information conveyed within a course. These include the lectures, readings, textbooks, multimedia components, and other resources in a course.</p>
                <a href="#" class="btn btn-info">Go to Save Materials</a>
            </div>

            <br>
            <div class="card-body" id="card2" style="width:55rem;">
                <h5 class="card-title">BSED School Year 2020-2021</h5>
                <p class="card-text">Materials are Provided in this System are the content or information conveyed within a course. These include the lectures, readings, textbooks, multimedia components, and other resources in a course.</p>
                <a href="#" class="btn btn-info">Go to Save Materials</a>
            </div>

            <br>
            <div class="card-body" id="card3" style="width:55rem;">
                <h5 class="card-title">BSSW School Year 2020-2021</h5>
                <p class="card-text">Materials are Provided in this System are the content or information conveyed within a course. These include the lectures, readings, textbooks, multimedia components, and other resources in a course.</p>
                <a href="#" class="btn btn-info">Go to Save Materials</a>
            </div>

        </div>

        <br>
        <div class="btn-group">
            <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                FILE MATERIALS
            </button>
            <ul class="dropdown-menu">
                <center><button>
                        <h5>FILE RECORDS</h5>
                    </button></center>
            </ul>
        </div>
        <div class="btn-group">
            <button class="btn btn-secondary btn-lg" type="button">
                SAVE RECORDS
            </button>
            <button type="button" class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu">
                <center><button>
                        <h5>SAVE FILE BSIT</h5>
                    </button></center>
                <br>
                <center><button>
                        <h5> SAVE FILE BSHM</h5>
                    </button></center>
                <br>
                <center><button>
                        <h5> SAVE FILE BSED</h5>
                    </button></center>
                <br>
                <center><button>
                        <h5> SAVE FILE BSSW</h5>
                    </button></center>
            </ul>
        </div>

        <br>
        <br>
        <br>
        <div class="card" style="width: 12rem;">
            <div class="card-body">


                <div class="card text-center">
                    <div class="card-header">
                        <ul class="nav nav-pills card-header-pills">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">BSIT</a>
                                <i class='far fa-folder-open' style='font-size:48px;color:#90EE90'></i>
                                <p>File saved</p>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">BSHM</a>
                                <i class='far fa-folder-open' style='font-size:48px;color:#FFFF00'></i>
                                <p>File saved</p>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">BSSW</a>
                                <i class='far fa-folder-open' style='font-size:48px;color:#FA8072'></i>
                                <p>File Saved</p>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">BSED</a>
                                <i class='far fa-folder-open' style='font-size:48px;color:#228B22'></i>
                                <p>File Saved</p>
                            </li>

                        </ul>
                    </div>

                    <br>
                    <div class="card text-center">
                        <div class="card-header">
                            <ul class="nav nav-pills card-header-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">BSIT</a>
                                    <i class="fa fa-save" style="font-size:48px;color:#90EE90"></i>
                                    <p>Saved Materials</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">BSHM</a>
                                    <i class="fa fa-save" style="font-size:48px;color:#FFFF00"></i>
                                    <p>Saved Materials</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">BSSW</a>
                                    <i class="fa fa-save" style="font-size:48px;color:#FA8072"></i>
                                    <p>Saved Materials</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">BSED</a>
                                    <i class="fa fa-save" style="font-size:48px;color:#228B22"></i>
                                    <p>Saved Materials</p>
                                </li>

                            </ul>
                        </div>


                        @endsection
                        @section('script')
                        <script>
                            let card = document.getElementById("card")
                            card.addEventListener("click", () => {
                                alert("You've clicked BS EDUC PROGRAM")
                            })
                        </script>


                        <script>
                            let card1 = document.getElementById("card1")
                            card1.addEventListener("click", () => {
                                alert("You've clicked BSHM PROGRAM ")
                            })
                        </script>

                        <script>
                            let card2 = document.getElementById("card2")
                            card2.addEventListener("click", () => {
                                alert("You've clicked BS EDUC SECONDARY PROGRAM")
                            })
                        </script>

                        <script>
                            let card3 = document.getElementById("card3")
                            card3.addEventListener("click", () => {
                                alert("You've clicked BS SSW PROGRAM")
                            })
                        </script>


                        @endsection