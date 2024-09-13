@extends('layout')

@section('title')
    <h1 style="font-family: Raleway;">Add New Employee</h1>
@endsection

@section('content')
{{-- <div class="container mt-5">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-8">
            <form id="regForm">
                <h1 id="register">Registration Form</h1>
                <div class="all-steps" id="all-steps"> 
                  <span class="step"><i class="fa fa-user"></i></span> 
                  <span class="step"><i class="fa fa-map-marker"></i></span>
                  <span class="step"><i class="fa fa-shopping-bag"></i></span>
                  <span class="step"><i class="fa fa-car"></i></span>
                  <span class="step"><i class="fa fa-spotify"></i></span>
                  <span class="step"><i class="fa fa-mobile-phone"></i></span>
                </div>

                <div class="tab">
                  <h6>What's your name?</h6>
                    <p>
                      <input placeholder="Name..." oninput="this.className = ''" name="fname"></p>
                    
                </div>
                <div class="tab">
                  <h6>What's your city?</h6>
                    <p><input placeholder="City" oninput="this.className = ''" name="dd"></p>
                    
                </div>
                <div class="tab">
                    <h6>What's your Favourite Shopping site?</h6>
                    <p><input placeholder="Favourite Shopping site" oninput="this.className = ''" name="email"></p>
                 
                </div>
                <div class="tab">
                    <h6>What's your Favourite car?</h6>
                    <p><input placeholder="Favourite car" oninput="this.className = ''" name="uname"></p>
                </div>

                <div class="tab">
                    <h6>What's your Favourite Song?</h6>
                    <p><input placeholder="Favourite Song" oninput="this.className = ''" name="uname"></p>
                </div>


                <div class="tab">
                    <h6>What's your Favourite Mobile brand?</h6>
                    <p><input placeholder="Favourite Mobile Brand" oninput="this.className = ''" name="uname"></p>
                </div>
                <div class="thanks-message text-center" id="text-message"> <img src="https://i.imgur.com/O18mJ1K.png" width="100" class="mb-4">
                    <h3>Thankyou for your feedback!</h3> <span>Thanks for your valuable information. It helps us to improve our services!</span>
                </div>
                <div style="overflow:auto;" id="nextprevious">
                    <div style="float:right;">
                      <button type="button" id="prevBtn" onclick="nextPrev(-1)"><i class="fa fa-angle-double-left"></i></button> 
                      <button type="button" id="nextBtn" onclick="nextPrev(1)"><i class="fa fa-angle-double-right"></i></button> </div>
                </div>
            </form>
        </div>
    </div>
</div> --}}
<div class="container" style="width: 700px">
<form action="{{ route('employee.store')}}" method="POST">
    @csrf
    <div class="mb-3 mt-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
      </div>

      <div class="mb-3 mt-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>

      <div class="mb-3 mt-3">
        <label for="salary" class="form-label">Salary:</label>
        <input type="text" class="form-control" id="salary" placeholder="Enter salary" name="salary">
      </div>

      <div class="mb-3 mt-3">
        <label for="age" class="form-label">Age:</label>
        <input type="text" class="form-control" id="age" placeholder="Enter age" name="age">
      </div>
      <div class="mb-3 mt-3">
        <label for="city" class="form-label">City:</label>
        <input type="text" class="form-control" id="city" placeholder="Enter city" name="city">
      </div>
    <button type="submit" class="btn btn-outline-success">Submit</button>
  </form>
</div>

@endsection