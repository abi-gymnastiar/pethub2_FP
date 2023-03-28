@extends('master')

@section('content')
    <div class="container">
        <h1>{{ Auth::user()->name }}</h1>
        <p>{{ Auth::user()->email }}</p>
        <p>{{ Auth::user()->bio }}</p>

        <h2>Adoption Plans</h2>
        <ul>
            @foreach ($adoptionPlans as $adoptionPlan)
                <li>Animal Name: {{ $adoptionPlan->animal->name }}</li>
            @endforeach
        </ul>
    </div>
@endsection
