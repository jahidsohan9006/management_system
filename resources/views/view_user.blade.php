@extends('dashboard_layout')

@section('title')
    {{ $users->name }} - Details
@endsection
@section('content')
    <main>



        <div class="container mt-4">

            <div class="mb-4 d-flex  justify-content-between align-items-center">
                <h1>View Details</h1>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-hover p-4 border">

                    <tr>
                        <th width="100px">Name</th>
                        <td>{{ $users->name }}</td>
                    </tr>
                    <tr>
                        <th width="100px">Email</th>
                        <td>{{ $users->email }}</td>

                    </tr>
                    <tr>

                        <th width="100px">Phone</th>
                        <td>{{ $users->phone }}</td>
                    </tr>

                </table>

                <p><a href="{{ route('user.index') }}" class="btn btn-warning"><i
                            class="fa-solid fa-arrow-left me-2"></i>Back</a> <a href="{{ route('user.edit', $users->id) }}"
                        class="btn btn-info">Update</a></p>

            </div>
        </div>




    </main>
@endsection
