@extends('master')
@section('title')
Home
@endsection

@section('navbar_logo')
Home
@endsection

@section('content')

<div class="container my-3 mb-5">

    <div class="row align-items-center text-center">
        <div class="col-md-6">
            <h2 class="display-2">Sheikh Abdullah</h2>
            <h4 class="display-4">Your Web Developer</h4>
        </div>
        <div class="col-md-6">
            <div class="box">
                <img src="images/person.jpg" alt="" class="img-fluid banner_image">
            </div>
        </div>
    </div>


    <div class="row text-center my-5">
        <h2 class="display-1">Services</h2>
        <hr>
    </div>

    <div class="row ">
        <div class="col-md-4 d-flex justify-content-center my-2">
            <div class="card  bg-dark text-light" style="width: 25rem; height: auto" >
                <img src="images/full stack.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="display-6">Full Stack Development</h5>
                  <p class="card-text">Full stack development refers to the development of both the front-end and back-end portions of a web application. A full stack developer has the skills to work on the entire stack of technology, from the user interface to the database and server-side logic.</p>
                 <hr>
                </div>
                <div class="row">
                    <div class="col-md-12 my-1 d-flex justify-content-center mb-2">
                        <a href='{{route('contact')}}' class="btn btn-outline-info w-50">Contact Us</a>
                    </div>
                 </div>
              </div>
        </div>

        <div class="col-md-4 d-flex justify-content-center my-2">
            <div class="card bg-dark text-light" style="width: 25rem; height: auto" >
                <img src="images/figma.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="display-6">Ui & Ux</h5>
                  <p class="card-text">UI/UX design focuses on the user interface and user experience of digital products. UI (User Interface) design is about creating visually appealing and intuitive interfaces, while UX (User Experience) design is about enhancing user satisfaction by improving the usability and accessibility of a product. </p>
                <hr>
               
                </div>
                <div class="row ">
                    <div class="col-md-12 d-flex justify-content-center mb-2">
                        <a href='{{route('contact')}}' class="btn btn-outline-info w-50">Contact Us</a>
                    </div>
                </div>
              </div>
        </div>

        <div class="col-md-4 d-flex justify-content-center my-2">
            <div class="card  bg-dark text-light" style="width: 25rem; height: auto" >
                <img src="images/web development.jpg" class="card-img-top" alt="..." height="180px">
                <div class="card-body">
                  <h5 class="display-6">Web Development</h5>
                  <p class="card-text">Web development is the process of creating and maintaining websites. It involves a range of tasks including web design, web content creation, client-side/server-side scripting, and network security configuration. Web developers use various programming languages and frameworks to build responsive, The field is constantly evolving with new technologies and tools</p>
               <hr>
                </div>
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center mb-2 ">
                        <a href='{{route('contact')}}' class="btn btn-outline-info w-50">Contact Us</a>
                    </div>
                   </div>
              </div>
        </div>

    </div>

    <hr>

    <div class="row text-center my-5">
        <h2 class="display-1">Want to Contact..?</h2>
    </div>

    <div class="row align-items-center">

        <div class="col-md-6">
            <div class="box">
                <img src="images/contact-person.jpg" alt="Image" class="img-fluid contact_image">
            </div>
        </div>
        <div class="col-md-6 text-center ">
            <h1 class="display-4"> Contact Us For Any Kind Of Work Or Any Issue </h1>
          <div class="row my-4">
            <div class="col-md-12 text-center contact"> 
                 <a href="{{route('contact')}}" class="btn btn-outline-info w-50 ">Contact-Us</a>
                 </div>
          </div>
        </div>
    </div>
</div>

@endsection


