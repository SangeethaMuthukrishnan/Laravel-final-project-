@extends('Post.layout')
@section('content')


    <h2>Welcome {{auth()->user()->first_name.auth()->user()->last_name}}</h2>
     @if(session('success-message'))
      <div class="alert alert-success">
          {{session('success-message')}}
      </div>
     @endif
    <a href="{{url('/user-logout')}}">Logout</a>
    <!-- Showing records in the table-->



    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div id="success_message"></div>
                <div class="card">
                    <div class="header">

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


                            </tr>
                            </thead>
                            <tbody id="post_table_body">


                                <tr>



                                     <td></td>
                                    <td>{{auth()->user()->first_name}}</td>
                                    <td>{{auth()->user()->last_name}}</td>
                                    <td>{{auth()->user()->company}}</td>
                                    <td>{{auth()->user()->email}}</td>
                                    <td>{{auth()->user()->phone}}</td>

                                        </form>




                                </tr>



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

