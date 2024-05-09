@extends('dashboard_layout')

@section('title')
    All Users
@endsection
@section('content')
    <!-- Main Content -->
    <main>

        <!-- New Users Section -->
        {{-- <div class="new-users">

            <div class="user-list">
                <div class="user">
                    <img src="/assets/dashboard/images/profile-2.jpg">
                    <h2>Jack</h2>
                    <p>54 Min Ago</p>
                </div>
                <div class="user">
                    <img src="/assets/dashboard/images/profile-3.jpg">
                    <h2>Amir</h2>
                    <p>3 Hours Ago</p>
                </div>
                <div class="user">
                    <img src="/assets/dashboard/images/profile-4.jpg">
                    <h2>Ember</h2>
                    <p>6 Hours Ago</p>
                </div>
                <div class="user">
                    <img src="/assets/dashboard/images/plus.png">
                    <h2>More</h2>
                    <p>New User</p>
                </div>
            </div>
        </div> --}}
        <!-- End of New Users Section -->

        {{-- ------users-form----------- --}}

        <div class="container mt-4">

            <div class="mb-4 d-flex  justify-content-between align-items-center">
                <h1>All Users</h1>
                <a href="{{ route('user.create') }}" class="btn btn-secondary  bg-danger text-white">Add New User</a>
            </div>
            <div class="row">
                <div class="col-12">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="table-responsive">
                <table class=" table table-striped table-hover p-4">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Details</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    @foreach ($users as $user)
                        <tbody>
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <th>{{ $user->phone }}</th>
                                <td><a href="{{ route('user.show', $user->id) }}"
                                        class="btn btn-primary bg-info text-white">view</a>
                                </td>

                                <td>
                                    <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-primary bg-danger text-white" type="submit">delete</button>
                                    </form>
                                </td>
                                <td><a href="{{ route('user.edit', $user->id) }}"
                                        class="btn btn-primary bg-success text-white">update</a>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach

                </table>
                <div class="mt-4">
                    {{ $users->links() }}
                </div>



            </div>
        </div>




    </main>
@endsection
