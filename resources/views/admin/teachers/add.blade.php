@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Teacher</div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                          <ul>
                            @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                          </ul>
                        </div>
                    @endif
                <div class="card-body">
                  <form method="post" action="{{Route('create_teachers')}}"> @csrf
                    <div class="form-group">
                      <label for="name">Teacher Name</label>
                      <input class="form-control" id="name" type="text" placeholder="Enter The Full Name" name="full_name" value="{{old('full_name')}}">
                    </div>
                    <div class="form-group">
                      <label for="email">E-mail</label>
                      <input class="form-control" id="email" type="text" placeholder="Enter The E-mail" name="email" value="{{old('email')}}">
                    </div>
                    <div class="form-group">
                      <label for="phone">Phone Number</label>
                      <input class="form-control" id="phone" type="text" placeholder="Enter Phone Number" name="phone" value="{{old('phone')}}">
                    </div>
                    <div class="form-group">
                      <label for="address">Address</label>
                      <input class="form-control" id="address" type="text" placeholder="Enter The Address" name="address" value="{{old('address')}}">
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="exp">Years Of Experience</label>
                        <input class="form-control" id="exp" type="number" min="4" placeholder="Enter Years Of Experience" name="year_of_exp" value="{{old('year_of_exp')}}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="gender">Gender</label>
                        <select class="form-control" id="gender" name="gender">
                           <option value="">Select a Gender</option>
                           <option value="male">Male</option>
                           <option value="female">Female</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="birth">Birth Day</label>
                        <input class="form-control" id="birth" type="date" name="birth_day" value="{{old('birth_day')}}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="Join">Join Date</label>
                        <input class="form-control" id="Join" type="date" name="join_date" value="{{old('join_date')}}">
                      </div>
                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary float-right" value="Create">
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
