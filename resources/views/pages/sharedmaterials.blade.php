@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="header">
            <h2>List of Learning Resources</h2>    
        </div>

        <div class="row pt-5" >

            <div class="col-sm" id="card-1">
                <div class="card text-white bg-primary" style="width: 18rem;">
                    <div class="card-body">

                        <div class="card">
                            <h5 div class="card-header text-dark ">
                                PRINT RESOURCES
                            </h5>
                        </div>
                        <p class="card-text text-white">
                            Shows processes and compilations of learning. The books that are not used during the dicussion and field properly.
                        </p>
                        <a href="#" class="card-link text-dark">Read More</a>
                        
                  
                    </div>
                </div>
            </div>
                
            

            <div class="col-sm" id="card-2">
                <div class="card text-white bg-success" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card">
                            <h5 div class="card-header text-dark ">
                               AUDIO RESOURCES
                            </h5>
                        </div>
                        <p class="card-text text-white">
                            Helps students familiarize themselves on the process or topic and understand it better.Shows processes and connections.
                        </p>
                        <a href="#" class="card-link text-dark">Read More</a>
                            
                    </div>
                </div>
            </div>
         

            <div class="col-sm" id="card-3">
                <div class="card text-white bg-info" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card">
                            <h5 div class="card-header text-dark ">
                                VISUAL RESOURCES
                            </h5>
                        </div>
                        <p class="card-text text-white">
                            According to categories. Guides students for their curiosity and imagination. Shows charts, flashcards and diagrams.
                        </p>
                        <a href="#" class="card-link text-dark">Read More</a>
                            
                    </div>
                </div>
            </div>
        
        </div>

        <div class="row pt-5" >
            <div class="col-sm" id="card-4">
                    <div class="card text-white bg-danger" style="width: 18rem;">
                        <div class="card-body">
                            <div class="card">
                            <h5 div class="card-header text-dark ">
                                TECHNOLOGY RESOURCES
                            </h5>
                            </div>
                            <p class="card-text text-white">
                                Used for operating stuffs to be projected. Gives learners a bigger view of what is supposed to be seen. Used projectors and computers.
                            </p>
                            <a href="#" class="card-link text-dark">Read More</a>
                                
                        </div>
                    </div>
                </div>
                
            

            <div class="col-sm" id="card-5">
                <div class="card text-white bg-secondary" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card">
                            <h5 div class="card-header text-dark ">
                                RESOURCE MANAGEMENT
                            </h5>
                        </div>
                        <p class="card-text text-white">Resource management is planning, organizing and allocating the resource to your business to ensure maximum efficiency.</p>
                        <a href="#" class="card-link text-dark">Read More</a>
                            
                    </div>
                </div>
            </div>
         

            <div class="col-sm" id="card-6">
                <div class="card text-white bg-warning" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card">
                            <h5 div class="card-header text-dark ">
                                COLLECTIVE RESOURCE
                            </h5>
                        </div>
                        <p class="card-text text-white">Personal development collaborative culture by more and better resources enjoy better health than other groups living elsewhere.</p>
                        <a href="#" class="card-link text-dark">Read More</a>
                            
                    </div>
                </div>
            </div>
        
        </div>

        

        
            
           
    </div>
@endsection
@section('script')
    <script>
        let card1 = document.getElementById("card-1")
            card1.addEventListener("click", () => {
            alert("You've clicked the print resources!")
        })
        let card2 = document.getElementById("card-2")
            card2.addEventListener("click", () => {
            alert("You've clicked the audio resources!")
        })
        let card3 = document.getElementById("card-3")
            card3.addEventListener("click", () => {
            alert("You've clicked the visual resources!")
        })
        let card4 = document.getElementById("card-4")
            card4.addEventListener("click", () => {
            alert("You've clicked the technology resources!")
        })
        let card5 = document.getElementById("card-5")
            card5.addEventListener("click", () => {
            alert("You've clicked the resouce management!")
        })
        let card6 = document.getElementById("card-6")
            card6.addEventListener("click", () => {
            alert("You've clicked the collective resource!")
        })
      


    </script>
@endsection
