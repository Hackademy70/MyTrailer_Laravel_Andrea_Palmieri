<x-layout>

    <div class="container">
        <div class="row my-5">
            <div class="col-6">
                <h1 class="text-danger"><i class="fa-regular fa-user text-white"></i> Profilo di: {{Auth::user()->name}}</h1>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
                
            <div class="col-12 col-md-12 my-5">
                
                <table class="table">
                    <thead>
                      <tr class="text-danger">
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Director</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($trailers as $trailer)
                      <tr class="text-white">
                        <th scope="row">{{$trailer->id}}</th>
                        <td>{{$trailer->title}}</td>
                        <td>{{$trailer->genre}}</td>
                        <td>{{$trailer->director}}</td>
                        <td>{{$trailer->created_at}}</td>
                        <td>
                            <a href="{{route('trailers.show', $trailer)}}" class="my-1 mx-3 btn btn-sm btn-success text-center text-white"><i class="fa-solid fa-video text-white"></i></a>
                            <a href="{{route('trailers.edit', $trailer)}}" class="my-1 btn btn-sm btn-warning text-center text-white"><i class="fa-solid fa-pen-to-square text-white"></i></a>
                            <a href="{{route('trailers.delete', $trailer)}}" class="my-1 mx-3 btn btn-sm btn-danger text-center"><i class="fa-solid fa-trash-can text-white mt-1"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
    
            </div>
    
                
        </div>
    </div>
    
    </x-layout>