@extends('master')
@section('content')

<main class="form-registration w-100 m-auto">
    <form>
      <center><img class="mb-4" src="/img/pethub-logo-dark.png" alt="" width="100" height="100"></center>
      <h1 class="h3 mb-3 fw-normal">Registration Form</h1>
        
      <div class="form-floating">
        <input type="text" name="name" class="form-control" id="name" placeholder="Saha Manh?">
        <label for="name">Name</label>
      </div>

      <div class="form-floating">
        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
        <label for="email">Email address</label>
      </div>

      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        <label for="password">Password</label>
      </div>
  
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    </form>
    <small> <a href="/register">Register Now!</a> </small>
  </main>

@endsection