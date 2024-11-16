@extends('backend.layouts.main')
@section('content')
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('backend.layouts.nav')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            @include('backend.layouts.settings')
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->

            @include('backend.layouts.sidebar')

            <!-- partial -->

            <div class="main-panel">
                <div class="content-wrapper">

                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Basic form elements</h4>
                                <p class="card-description">Basic form elements</p>

                                <div class="message-container">
                                    @if (session('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert"
                                            id="successAlert">
                                            {{ session('success') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @elseif(session('error'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert"
                                            id="errorAlert">
                                            {{ session('error') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                </div>
                                <div class="container">
                                    <h2>Student Details</h2>
                                    <p><strong>Full Name:</strong> {{ $student->full_name }}</p>
                                    <p><strong>Email:</strong> {{ $student->email }}</p>
                                    <p><strong>Gender:</strong> {{ $student->gender }}</p>
                                    <p><strong>Level:</strong> {{ $student->level->name }}</p>
                                    <p><strong>Age:</strong> {{ $student->age }}</p>
                                    <p><strong>Subjects:</strong>
                                        @foreach ($student->subjects as $subject)
                                            <span>{{ $subject->name }}</span>@if (!$loop->last), @endif
                                        @endforeach
                                    </p>
                                    <p><strong>Notes:</strong> {{ $student->textarea }}</p>
                                    <a href="{{ route('students.index') }}" class="btn btn-primary">Back to List</a>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->

                @include('backend.layouts.footer')

                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
@endsection
