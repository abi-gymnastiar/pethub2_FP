@extends('master')
@section('content')
    <h1>Edit Animal {{$animals->id}}</h1>
    <form action="/animals/{{$animals->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{$animals->name}}" placeholder="Enter Name">
                            @error('name')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Breed</label>
                            <input type="text" class="form-control" name="breed" value="{{$animals->breed}}" placeholder="Enter Breed">
                            @error('breed')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Age</label>
                            <input type="text" class="form-control" name="age" value="{{$animals->age}}" placeholder="Enter Age">
                            @error('age')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
        
                        <div class="form-group">
                            <label>Center</label>
                            <select class="form-select form-control" name="center_id">
                                <option value="">-</option>
                                @foreach ($centers as $temp)
                                <option value="{{$temp-> id}}"
                                    @if($temp->id == $animals->center->id)
                                    selected
                                    @endif
                                >{{$temp->name}}</option>    
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload Image</label>
                            <input class="form-control" type="file" id="formFile">
                          </div>

                        <div class="d-flex justify-content-between">
                            <a href="./" class="btn btn-light"><< Back</a>
                            <button type="submit" class="btn btn-primary" style="border-radius: 3px">
                                <i class="nav-icon fas fa-save"></i>
                                Update
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection