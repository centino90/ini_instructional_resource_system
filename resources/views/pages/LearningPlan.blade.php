@extends('layouts.app')
@section('content')
<section class="mt-4">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-2">
        <div class="card" id="card">
            <div class="card-body">
                This is Saved Material
            </div>
        </div>
    </div>
    <br>

    <section class="mt-4">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-2">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <h1 class="form-text">
                            Latest Instruction For You
                            <span class="badge rounded-pill bg-danger ms-2">9+</span>
                        </h1>
                        <p class="card-text"><small class="text-muted">3 mins ago</small></p>
                        <a href="#" class="text-link">View More</a>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>


            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <h1 class="form-text">
                            New Added Material
                            <span class="badge rounded-pill bg-danger ms-2">9+</span>
                        </h1>
                        <p class="card-text"><small class="text-muted">10 mins ago</small></p>
                        <a href="#" class="text-link">View More</a>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>


            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <h1 class="form-text">
                            New Added Material
                            <span class="badge rounded-pill bg-danger ms-2">9+</span>
                        </h1>
                        <p class="card-text"><small class="text-muted">10 mins ago</small></p>
                        <a href="#" class="text-link">View More</a>
                        <a href="#" class="btn btn-primary">Go somewhere</a>

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
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <img class="card-img-top" src="..." alt="Card image cap">
                            <br>
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
    </section>


    @endsection
    @section('script')
    <script>
        let card = document.getElementById("card")
        card.addEventListener("click", () => {
            alert("You've clicked the card")
        })
    </script>
    @endsection