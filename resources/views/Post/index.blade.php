@extends('Post.layout')
@section('content')


    <h2>Welcome {{auth()->user()->first_name.auth()->user()->last_name}}</h2>




    <a href="{{url('/user-logout')}}">Logout</a>
    <!-- Showing records in the table-->



<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div id="success_message"></div>
            <div class="card">
                <div class="header">
                    <h4>User data
                        <a href="{{url('/create-user-contact')}}" title="Add user_contact"><button class="btn tn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Add new contact</button></a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">first_Name</th>
                            <th scope="col">last_Name</th>
                            <th scope="col">Company</th>
                            <th scope="col">Mail-id</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Age</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody id="post_table_body">

                        @foreach($registers as $item)
                            <tr>


                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $item->first_name}}</td>
                                <td>{{$item->last_name}}</td>
                                <td>{{$item->company}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->phone}}</td>
                                <td>{{$item->age}}</td>
                                <td>


                                    <a href="{{url('/edit-contact/' . $item->id)}}" title="Edit employee"><button class="btn tn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>
                                </td>

                                <td>
                                    <form method="GET" action="{{url('/delete-contact/'.$item->id)}}" accept-charset ="UTF-8" style="display:inline">

                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete employee" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</button>

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
</div>





@endsection
@section('scripts')




@endsection
