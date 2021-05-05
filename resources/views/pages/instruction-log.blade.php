@extends('layouts.app')
@section('content')



<br>
<h2>LEARNING EDUCATIONAL CENTER</h2>
<p>Welcome to the Learning and Educational Instructional System Center .</p>
<p>Promoting quality continuous improvement of student learning.</p>


<button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="CLICK TO READ ME!">
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

<section class="mt-4">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-2">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <img class="card-img-top" src="image/acd.jpg">
                    <h1 class="form-text">

                        <h5>BS EDUC PROGRAM</h5>
                        <i class='far fa-address-book' style='font-size:48px;color:#228B22'></i>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <span class="badge rounded-pill bg-danger ms-2"></span>
                    </h1>
                    <p class="card-text"><small class="text-muted">3 mins ago</small></p>
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:70%">87% Activty</div>
                    <br>
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:73%">10% Attendance</div>
                    <br>
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:63%">40% Final Exam</div>
                    <br>
                    <a href="#" class="text-link">View More</a>
                    <br>
                </div>
                <section class="mt-4" onclick="return confirm('ARE YOU SURE YOU WANT TO CONTINUE?');">
                    <div class="row-cols-1 row-cols-sm-2 row-cols-lg-1 g-2">
                        <div class="card" id="card">
                            <div class="card-body">
                                <div class="alert alert-info" role="alert">
                                    Go to Instruction
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>


        <div class="col">
            <div class="card">
                <div class="card-body">
                    <img class="card-img-top" src="image/acd.jpg">
                    <h5>BSHM PROGRAM</h5>
                    <i class='far fa-address-book' style='font-size:48px;color:#FFFF00'></i>
                    <p class="card-text">New Added Material Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <span class="badge rounded-pill bg-danger ms-2"></span>
                    </h1>
                    <p class="card-text"><small class="text-muted">10 mins ago</small></p>
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:70%">87% Activty</div>
                    <br>
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:79%">40% Attendance</div>
                    <br>
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:70%">87% Final Exam</div>
                    <br>
                    <a href="#" class="text-link">View More</a>
                    <section class="mt-4" onclick="return confirm('ARE YOU SURE YOU WANT TO CONTINUE?');">
                        <div class="row-cols-1 row-cols-sm-2 row-cols-lg-1 g-2">
                            <div class="card1" id="card1">
                                <div class="card-body">
                                    <div class="alert alert-info" role="alert">
                                        Go to Instruction
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <img class="card-img-top" src="image/acd.jpg">
                    <h5>BS EDUC SECONDARY PROGRAM </h5>
                    <i class='far fa-address-book' style='font-size:48px;color:#9400D3'></i>
                    <p class="card-text">New Added Material Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <span class="badge rounded-pill bg-danger ms-2"></span>
                    </h1>
                    <p class="card-text"><small class="text-muted">10 mins ago</small></p>
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:70%">87% Activty</div>
                    <br>
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:70%">87% Attendance</div>
                    <br>
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:90%">90% Final exam</div>
                    <br>
                    <a href="#" class="text-link">View More</a>
                    <section class="mt-4" onclick="return confirm('ARE YOU SURE YOU WANT TO CONTINUE?');">
                        <div class="row-cols-1 row-cols-sm-2 row-cols-lg-1 g-2">
                            <div class="card2" id="card2">
                                <div class="card-body">
                                    <div class="alert alert-info" role="alert">
                                        Go to Instruction
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>

<br>

<section class="mt-4">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-2">
        <div class="col">
            <div class="col">
                <div class="card" style="width: 14rem;">
                    <div class="card-body">
                        <img class="card-img-top" src="image/acd.jpg">
                        <h5>BS SSW PROGRAM</h5>
                        <i class='far fa-address-book' style='font-size:48px;color:#1E90FF'></i>
                        <br>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="card-text"><small class="text-muted">10 mins ago</small></p>
                        <br>
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:50%">70% Activity</div>
                        <br>
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:70%">87% Attendance</div>
                        <br>
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:70%">87% Final Exam</div>
                        <br>
                        <a href="#" class="text-link">View More</a>
                        <section class="mt-4" onclick="return confirm('ARE YOU SURE YOU WANT TO CONTINUE?');">
                            <div class="row-cols-1 row-cols-sm-2 row-cols-lg-1 g-2">
                                <div class="card3" id="card3">
                                    <div class="card-body">
                                        <div class="alert alert-info" role="alert">
                                            Go to Instruction
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
        alert("You've clicked BS SSW PROGRAM") //onclick sa button
    })
</script>

<script>
    /* announcement color  */
    function mouseDown() {
        document.getElementById("myP").style.color = "red";
    }

    function mouseUp() {
        document.getElementById("myP").style.color = "green";
    }
</script>


@endsection