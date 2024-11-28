<x-layout>

    <div class="container-fluid">
        <div class="row justify-content-evenly align-items-center">
            @foreach($houses as $house)
                @foreach($imgCasate as $img)
        
                    @if($house['house'] == $img['name'])

                            <div class="col-3">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{$img['img']}}" class="imgCard">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$house['house']}}</h5>
                                        <p class="card-text"> {{$house['founder']}}</p>
                                        <div class="d-flex justify-content-center">
                                        @foreach($house['colors'] as $color)
                                            <div class="colorCasate d-flex" style="background-color: {{$color}};"></div>
                                        @endforeach
                                        </div>
                                        <a href="{{route('house-detail', ['hogwartsHouse'=>$house['house']])}}" class="btn btn-primary">apri</a>
                                    </div>
                                </div>
                            </div>

                        @endif
                @endforeach
            @endforeach

        </div>
    </div>




</x-layout>