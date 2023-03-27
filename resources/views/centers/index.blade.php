@extends('master')
@section('content')
    <h1>Pethub Centers</h1>
    <div class="row mx-5 justify-content-center">
        @foreach ($centers as $item)
            <div class="card mx-3 bg-dark text-white" style="width: 20rem;">
                <div class="card-body d-flex flex-column align-items-center">
                    <h4 class="my-3">Center {{$item->id}}</h4>
                    <i class='fas fa-id-badge' style='font-size:180px'></i>
                    <div class="data my-3">
                        <h5>Name: {{$item->name}}</h5>
                        <h5>Location: {{$item->location}}</h5>
                    </div>
                    <a href="/camin/{{$item->id}}" class="btn btn-sm btn-info">Details</a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex mx-5 my-5 justify-content-center">
        <a href="/center/create" class="btn btn-primary mx-5" style="max-width: 18rem;">+Add Center</a>
    </div>
@endsection