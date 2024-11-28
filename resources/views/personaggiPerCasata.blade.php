<x-layout>

    <div class="container-fluid">
        <div class="row">


            @foreach($personaggiCasata as $personaggio)
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{$personaggio['image']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$personaggio['fullName']}}</h5>
                        <a href="{{route('detail', ['nickname'=>$personaggio['nickname']])}}" class="btn btn-primary">apri</a>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>

</x-layout>