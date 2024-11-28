<x-layout>

    <div class="container-fluid">
        <div class="row">
            <div class="col-4">

                <div class="card bg-success" style="width: 50rem;">
                    <div class="row">
                        <div class="col-4">
                            <img src="{{$personaggio['image']}}" class="card-img-top" alt="...">
                        </div>
                        <div class="col-6 card-body">
                            <h5 class="card-title">{{$personaggio['fullName']}}</h5>
                            <p class="card-text"> {{$personaggio['hogwartsHouse']}}</p>
                            
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

</x-layout>