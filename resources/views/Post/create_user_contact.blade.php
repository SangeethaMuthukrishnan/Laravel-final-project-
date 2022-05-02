@extends('Post.layout')
@section('content')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">

            <form action="{{url('/user-contact-store/')}}" method="POST">

                @csrf



                <label>First_name</label></br>
                <input type="text" name="first_name" id="first_name"  class="form-control"></br>
                <label>Last_name</label></br>
                <input type="text" name="last_name" id="last_name"  class="form-control"></br>
                <label>Company</label></br>
                <input type="text" name="company" id="company"  class="form-control"></br>
                <label>Email</label></br>
                <input type="email" name="email" id="email"  class="form-control"></br>
                <label>Phone</label></br>
                <input type="number" name="phone" id="phone"  class="form-control"></br>
                <label>Age</label></br>
                <input type="number" name="age" id="age"  class="form-control"></br>


                <input type="submit" value="Submit" class="btn btn-success"></br>




            </form>
        </div>
    </div>
@endsection
