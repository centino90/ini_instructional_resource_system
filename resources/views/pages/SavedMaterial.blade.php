@extends('layouts.app')
@section('content')

<br>

<img class="card-img-top" src="image/acd.jpg" style="width: 14rem;">

<br>
<div class="card" style="width: 60rem;">
    <br>
    <i class='fas fa-archive' style='font-size:48px;color:#800000'></i>
    <div class="card-body">


        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Read More for Special Announcement
        </button>
        <div class="collapse" id="collapseExample">
            <div class="card card-body" id="myP" onmousedown="mouseDown()" onmouseup="mouseUp()">
                Financial Assistance · Grants · CHED Memorandum Orders (CMOs) · Public Consultations / Orientations · Statistics ·
                List of Authorized Undergraduate Programs
                Financial Assistance · Grants · CHED Memorandum Orders (CMOs) · Public Consultations / Orientations · Statistics ·
                List of Authorized Undergraduate Programs
                Financial Assistance · Grants · CHED Memorandum Orders (CMOs) · Public Consultations / Orientations · Statistics ·
                List of Authorized Undergraduate Programs
            </div>
        </div>
        <br>
        <br>

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
            <section class="mt-4" onclick="return confirm('ARE YOU SURE YOU WANT TO CONTINUE?');">
                <div class="card-body" id="card" style="width:55rem;">
                    <h5 class="card-title">BSIT School Year 2020-2021</h5>
                    <p class="card-text">Materials are Provided in this System are the content or information conveyed within a course. These include the lectures, readings, textbooks, multimedia components, and other resources in a course.</p>
                    <a href="#" class="btn btn-info">Go to Save Materials</a>
                    <a href="#" class="btn btn-info">Materials Instruction</a>

                </div>

                <br>
                <section class="mt-4" onclick="return confirm('ARE YOU SURE YOU WANT TO CONTINUE?');">
                    <div class="card-body" id="card1" style="width:55rem;">
                        <h5 class="card-title">BSHM School Year 2020-2021</h5>
                        <p class="card-text">Materials are Provided in this System are the content or information conveyed within a course. These include the lectures, readings, textbooks, multimedia components, and other resources in a course.</p>
                        <a href="#" class="btn btn-info">Go to Save Materials</a>
                        <a href="#" class="btn btn-info">Materials Instruction</a>
                    </div>

                    <br>
                    <section class="mt-4" onclick="return confirm('ARE YOU SURE YOU WANT TO CONTINUE?');">
                        <div class="card-body" id="card2" style="width:55rem;">
                            <h5 class="card-title">BSED School Year 2020-2021</h5>
                            <p class="card-text">Materials are Provided in this System are the content or information conveyed within a course. These include the lectures, readings, textbooks, multimedia components, and other resources in a course.</p>
                            <a href="#" class="btn btn-info">Go to Save Materials</a>
                            <a href="#" class="btn btn-info">Materials Instruction</a>
                        </div>

                        <br>
                        <section class="mt-4" onclick="return confirm('ARE YOU SURE YOU WANT TO CONTINUE?');">
                            <div class="card-body" id="card3" style="width:55rem;">
                                <h5 class="card-title">BSSW School Year 2020-2021</h5>
                                <p class="card-text">Materials are Provided in this System are the content or information conveyed within a course. These include the lectures, readings, textbooks, multimedia components, and other resources in a course.</p>
                                <a href="#" class="btn btn-info">Go to Save Materials</a>
                                <a href="#" class="btn btn-info">Materials Instruction</a>
                            </div>

        </div>

        <br>
        <div class="btn-group">
            <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                FILE MATERIALS
            </button>
            <ul class="dropdown-menu">
                <center><button style="color:#9ACD32;">
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
                <center><button style="color:#8B4513;">
                        <h5>SAVE FILE BSIT</h5>
                    </button></center>
                <br>
                <center><button style="color:#00FF00;">
                        <h5> SAVE FILE BSHM</h5>
                    </button></center>
                <br>
                <center><button style="color:#FFD700;">
                        <h5> SAVE FILE BSED</h5>
                    </button></center>
                <br>
                <center><button style="color:#800080;">
                        <h5> SAVE FILE BSSW</h5>
                    </button></center>
            </ul>
        </div>

        <br>
        <br>
        <br>


        <div class=" card text-center">
            <div class="card-header">
                <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">BSIT</a>
                        <i class='far fa-folder-open' style='font-size:48px;color:#90EE90'></i>
                        <p>File saved</p>
                    </li>
                    <br>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">BSHM</a>
                        <i class='far fa-folder-open' style='font-size:48px;color:#FFFF00'></i>
                        <p>File saved</p>
                    </li>
                    <br>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">BSSW</a>
                        <i class='far fa-folder-open' style='font-size:48px;color:#FA8072'></i>
                        <p>File Saved</p>
                    </li>
                    <br>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">BSED</a>
                        <i class='far fa-folder-open' style='font-size:48px;color:#228B22'></i>
                        <p>File Saved</p>
                    </li>

                </ul>
            </div>

            <br>
            <div class="card text-center" class="mt-4">
                <div class="card-header">
                    <ul class="nav nav-pills card-header-pills">
                        <div class="card-body" id="card" style="width:10rem;">
                            <li class="nav-item" id="rcorners1">
                                <a class="nav-link active" href="#">BSIT</a>
                                <br>
                                <button onclick="return confirm('ARE YOU SURE YOU WANT TO CONTINUE IN BSIT PROGRAM?');">BSIT RECORDS</button>
                                <p id=" bsit"></p>
                                <br>
                                <br>
                                <i class="fa fa-save" style="font-size:48px;color:#90EE90"></i>
                                <p>Saved Materials</p>
                            </li>
                        </div>

                        <div class="card-body" id="card1" style="width:10rem;">
                            <li class="nav-item" id="rcorners2">
                                <a class="nav-link active" href="#">BSHM</a>
                                <br>
                                <button onclick="return confirm('ARE YOU SURE YOU WANT TO CONTINUE IN BSHM PROGRAM?');" style="color:#228B22">BSHM RECORDS</button>
                                <p id="bshm"></p>
                                <br>
                                <br>
                                <i class="fa fa-save" style="font-size:48px;color:#FFFF00"></i>
                                <p>Saved Materials</p>
                            </li>
                        </div>

                        <div class="card-body" id="card2" style="width:10rem;">
                            <li class="nav-item" id="rcorners3">
                                <a class="nav-link active" href="#">BSSW</a>
                                <br>
                                <button onclick="return confirm('ARE YOU SURE YOU WANT TO CONTINUE IN BSSW PROGRAM?');" style="color:#FA8072">BSSW RECORDS</button>
                                <p id=" bssw"></p>
                                <br>
                                <br>
                                <i class="fa fa-save" style="font-size:48px;color:#FA8072"></i>
                                <p>Saved Materials</p>
                            </li>
                        </div>

                        <div class="card-body" id="card3" style="width:10rem;">
                            <li class="nav-item" id="rcorners4">
                                <a class="nav-link active" href="#">BSED</a>
                                <br>
                                <button onclick="return confirm('ARE YOU SURE YOU WANT TO CONTINUE IN BSED PROGRAM?');" style="color:#228B22">BSED RECORDS</button>
                                <p id=" bsed"></p>
                                <br>
                                <br>
                                <i class="fa fa-save" style="font-size:48px;color:#228B22"></i>
                                <p>Saved Materials</p>
                            </li>
                        </div>
                    </ul>
                </div>
                <br>
                <br>
                <br>
                <br>
                <div>
                    <li class="nav-item" id="rcorners5" style="width:20rem;">
                        <a class="nav-link active" style="color:#FFFF00;" href="#">COLLEGE RECORDS</a>
                        <button onclick="myFunction()" style="color:#FF1493;">REGISTER RECORDS. A</button>
                        <p id="demo"></p>

                        <br>
                        <a class="nav-link active" style="color:#FFFF00;" href="#">COLLEGE RECORDS</a>
                        <button onclick="myFunction()" style="color:#FF1493;">REGISTER RECORDS. B</button>
                        <p id="demo"></p>

                    </li>
                </div>


                @endsection
                @section('script')
                <script>
                    let card = document.getElementById("card")
                    card.addEventListener("click", () => {
                        alert("You've clicked BSIT PROGRAM")
                    })

                    let card1 = document.getElementById("card1")
                    card1.addEventListener("click", () => {
                        alert("You've clicked BSHM PROGRAM ")
                    })

                    let card2 = document.getElementById("card2")
                    card2.addEventListener("click", () => {
                        alert("You've clicked BS ED PROGRAM")
                    })

                    let card3 = document.getElementById("card3")
                    card3.addEventListener("click", () => {
                        alert("You've clicked BS SSW PROGRAM")
                    })

                    /* announcement color  */
                    function mouseDown() {
                        document.getElementById("myP").style.color = "red";
                    }

                    function mouseUp() {
                        document.getElementById("myP").style.color = "green";
                    } /*END of announcement color  */
                </script>

            </div>
        </div>

        @endsection