@extends('master')
@section('content')
    <h1>Search Results</h1>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Breed</th>
                                <th>Age</th>
                                <th>Center</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($animals as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->breed}}</td>
                                <td>{{$item->age}}</td>
                                <td>{{$item->center->name}}</td>
                                <td>
                                    <a href="/animals/{{$item->id}}" class="btn btn-primary">Detail</a>
                                    <a href="/animals/{{$item->id}}/edit" class="btn btn-warning">Edit</a>
                                    <form action="/animals/{{$item->id}}" method="POST" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>