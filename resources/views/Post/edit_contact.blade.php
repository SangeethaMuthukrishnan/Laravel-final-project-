@extends('Post.layout')
@section('content')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">

            <form action="{{url('/update-contact/'.$registers->id)}}" method="POST">

                @csrf

                @method("PUT")

                <input type="hidden" name="id" id="id" value="{{$registers->id}}" id="id" />
                <label>First_name</label></br>
                <input type="text" name="first_name" id="first_name" value="{{$registers->first_name}}" class="form-control"></br>
                <label>Last_name</label></br>
                <input type="text" name="last_name" id="last_name" value="{{$registers->last_name}}" class="form-control"></br>
                <label>Company</label></br>
                <input type="text" name="company" id="company" value="{{$registers->company}}" class="form-control"></br>
                <label>Email</label></br>
                <input type="email" name="email" id="email" value="{{$registers->email}}" class="form-control"></br>
                <label>Phone</label></br>
                <input type="number" name="phone" id="phone" value="{{$registers->phone}}" class="form-control"></br>
                <label>Age</label></br>
                <input type="number" name="age" id="age" value="{{$registers->age}}" class="form-control"></br>


                <input type="submit" value="Update" class="btn btn-success"></br>




            </form>
        </div>
    </div>
@endsection
