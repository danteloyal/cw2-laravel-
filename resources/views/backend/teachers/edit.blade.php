@extends('backend.layouts.main')

@section('content')
    <div class="container-scroller">
        @include('backend.layouts.nav') <!-- Navigation bar -->

        <div class="container-fluid page-body-wrapper">
            @include('backend.layouts.sidebar') <!-- Sidebar -->

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="message-container">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert" id="successAlert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @elseif(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert" id="errorAlert">
                                {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                    </div>

                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Teacher</h4>
                                <p class="card-description">Edit the teacher details below</p>
                                <form action="{{ route('teachers.update', $teacher->id) }}" method="POST" class="forms-sample">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="name">Teacher Name</label>
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter teacher name" value="{{ $teacher->name }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="specialization">Specialization</label>
                                        <input type="text" name="specialization" id="specialization" class="form-control" placeholder="Enter specialization" value="{{ $teacher->specialization }}" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Save Changes</button>
                                    <a href="{{ route('teachers.index') }}" class="btn btn-light">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>

                    @include('backend.layouts.footer') <!-- Footer -->
                </div>
            </div>
        </div>
    </div>
@endsection
