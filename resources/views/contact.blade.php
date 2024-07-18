@extends('master')

@section('title')
Contact    
@endsection

@section('navbar_logo')
Contact
@endsection

@section('content')
@if(session()->has('status'))
<div class="alert alert-primary">
    {{session('status')}}
</div>
@endif

<div class="container-fluid my-5">
    <div class="row text-center">
        <h1 class="display-3">Contact_Us</h1>
    </div>
    <div class="row align-items-center my-3 ">
        <div class="col-md-6 d-flex justify-content-center">
           
              <img src="images/contact-person-main.avif" alt="" class="img-fluid contact-img" style="width: 40rem">
           
        </div>

        <div class="col-md-6">
            <form class="w-75 m-auto" method="POST" action="{{route('addUser')}}">
                @csrf
                <div class="mb-3">
                  <input type="email" class="form-control"name='email' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email"  style="height: 6rem" >
                  <span class="text-danger">
                    @error('email')
                    {{$message}}
                    @enderror
                  </span>
                </div>

                <div class="mb-3">
                    <textarea class="form-control" name='description' id="exampleFormControlTextarea1" rows="8" placeholder="Description" ></textarea>
                    <span class="text-danger">
                        @error('description')
                        {{$message}}
                        @enderror
                    </span>
                  </div>
                
              <div class="row text-center">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-outline-info w-50">Submit</button>
                </div>
              </div>
              </form>
        </div>
    </div>
</div>
@endsection


