<x-layout>

    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h1 class="text-danger text-center"><i class="fa-solid fa-trash-can text-white"></i> Vuoi davvero eliminare il Trailer {!! $trailers->title !!} ?</h1>
                <h4 class="text-danger text-center">Non visualizzera più il Trailer nella lista</h4>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row my-5">
            <div class="col-6 mx-5 d-flex justify-content-center">
                <img class="card-delete rounded border border-3 border-danger" src="{{ Storage::url($trailers->img)}}" alt="">
            </div>

            <div class="col-5 d-flex justify-content-evenly align-items-center my-5">
                <form method="post" action="{{route('trailers.canc', $trailers)}}">
                    @method('DELETE')
                    @csrf
                    <button class="w-100 btn btn-danger my-3 d-flex flex-column align-items-center">
                      Elimina Trailer
                    </button>
                </form>
                <a href="{{route('trailers.index')}}" class="btn btn-success my-3 p-2">Torna indietro </a>
            </div>

        </div>
    </div>
       
</x-layout>