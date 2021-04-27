@extends('layouts.app')
@section('content')



<br>
<body>

    <center>
        <div id="myDIV" onclick="myFunction()">SPECIAL ANNOUNCEMENT
            <p>In this school year we have new etc... - from CHED</p>
            <br>
            <p>Click this announcement to continue Reading.</p>
        </div>
    </center>

</body>



<i class='fas fa-file-alt' style='font-size:48px;color:#4169E1'></i>

<body>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn"  onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Instructor</a>
    <a href="#">Instruction</a>
  </div>
</div>

<h2>LEARNING EDUCATIONAL CENTER</h2>
<p>Welcome to the Learning and Educational Instructional System Center .</p>
<p>Promoting quality continuous improvement of student learning.</p>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
  


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
                    <a href="#" class="text-link">View More</a>
                    <br>
                </div>
                <section class="mt-4">
                    <div class="row-cols-1 row-cols-sm-2 row-cols-lg-1 g-2">
                        <div class="card" id="card">
                            <div class="card-body">
                                <div class="alert alert-info" role="alert">
                                    Go to Instruction
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <a href="#" class="text-link">View More</a>
                    <section class="mt-4">
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
                    <a href="#" class="text-link">View More</a>
                    <section class="mt-4">
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
                        <p class="card-text"><small class="text-muted">10 mins ago</small></p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <section class="mt-4">
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
    // start for announcement 
    var x = document.getElementById("myDIV");

    // Start the animation with JavaScript
    function myFunction() {
        x.style.WebkitAnimation = "mymove 10s 2"; // code for announcement on top
        x.style.animation = "mymove 10s 2"; // code for announcement on top
    }

    // code for announcement on top
    x.addEventListener("webkitAnimationStart", myStartFunction);
    x.addEventListener("webkitAnimationIteration", myRepeatFunction);
    x.addEventListener("webkitAnimationEnd", myEndFunction);

    // code for announcement on top
    x.addEventListener("animationstart", myStartFunction);
    x.addEventListener("animationiteration", myRepeatFunction);
    x.addEventListener("animationend", myEndFunction);

    function myStartFunction() {
        this.innerHTML = "Krn Umaabot na Pasokan kami nag pa hinumdum - From CHED";
        this.style.backgroundColor = "#7FFFD4";
    }

    function myRepeatFunction() {
        this.innerHTML = "Adunay libre na Edukasyon Gikan sa Pang Gamhanan - From CHED";
        this.style.backgroundColor = "#FFE4C4";
    }
    
    function myEndFunction() {
        this.innerHTML = "Daghang Salamat! Madayaw - From CHED";
        this.style.backgroundColor = "#7FFFD4";
    }
</script>

<script>
// navbar na hamburger line sa ta as
function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}

// end of navbar
</script>
     

@endsection