@extends('master')
@section('content')
    <h1>Daftar Animals 2023</h1>
    <div class="row mx-5 justify-content-center">
        @foreach ($animals as $item)
            <div class="card mx-3 bg-dark text-white" style="width: 20rem;">
                <div class="card-body d-flex flex-column align-items-center">
                    <h4 class="my-3">Animal {{$item->id}}</h4>
                    @if ($item->image)
                        <style>
                            .resize{
                                width:60%;
                                height:180px;
                            }
                            img {
                                width:100%;
                                height:100%;
                                object-fit:cover;
                            }
                        </style>
                        <div class = "resize">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="animal photo">
                        </div>
                    @else
                        <i class='fas fa-id-badge' style='font-size:180px'></i>
                    @endif
                    {{-- <i class='fas fa-id-badge' style='font-size:180px'></i> --}}
                    <div class="data my-3">
                        <h5>Name: {{$item->name}}</h5>
                        <h5>Center: {{$item->center->name}}</h5>
                    </div>
                    <a href="/animals/{{$item->id}}" class="btn btn-orange btn-info">Details</a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex mx-5 my-5 justify-content-center">
        <a href="/animals/create" class="btn btn-orange btn-info mx-5" style="max-width: 18rem;">+Add Animals</a>
    </div>
@endsection