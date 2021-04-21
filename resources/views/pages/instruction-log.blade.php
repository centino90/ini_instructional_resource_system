@extends('layouts.app')
@section('content')
    <section class="mt-4">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-2">
            <div class="card" id="card">
                <div class="card-body">
                    This is card
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
