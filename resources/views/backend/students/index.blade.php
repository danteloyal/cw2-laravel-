@extends('backend.layouts.main')

@section('content')
    <div class="container-scroller">
        <!-- Partial navbar -->
        @include('backend.layouts.nav')

        <div class="container-fluid page-body-wrapper">
            <!-- Partial sidebar -->
            @include('backend.layouts.sidebar')

            <div class="main-panel">
                <div class="content-wrapper">


                    <div class="page-header">
                        <h3 class="page-title">Data table</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Data table
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Data table</h4>
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Full Name</th>
                                                <th>Email</th>
                                                <th>Gender</th>
                                                <th>Level</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($students as $student)
                                                <tr>
                                                    <td>{{ $student->id }}</td>
                                                    <td>{{ $student->full_name }}</td>
                                                    <td>{{ $student->email }}</td>
                                                    <td>{{ $student->gender }}</td>
                                                    <td>{{ $student->level->name }}</td>
                                                    <td>
                                                        <a href="{{ route('students.show', $student->id) }}" class="btn btn-info">View</a>
                                                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit</a>
                                                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline-block;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Delete</button>
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
                <!-- Partial footer -->
                @include('backend.layouts.footer')
            </div>
        </div>
    </div>
@endsection
