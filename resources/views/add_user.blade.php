@extends('dashboard_layout')

@section('title')
    Add New User
@endsection
@section('content')
    <!-- Main Content -->
    <main>
        <div class="container mt-4">

            <div class="mb-4">
                <h1>Add New User</h1>
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-3">

                            <label for="username" class="form-label">Name</label>
                            <input type="text" class="form-control" id="username" name="username">

                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="useremail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="useremail" aria-describedby="emailHelp"
                            name="useremail">

                    </div>
                    <div class="col-12 mb-3">
                        <label for="userphone" class="form-label">Phone</label>
                        <input type="tel" class="form-control" id="userphone" name="userphone">
                    </div>
                    <div class="col-12 mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>



            </div>

        </div>




    </main>
@endsection
