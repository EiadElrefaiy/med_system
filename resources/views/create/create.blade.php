@extends('layouts.master')
@section('title')
    Create Record
@endsection
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">Create Record</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        <li class="breadcrumb-item active">Create Record</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
    
                    <h4 class="card-title">Create New Entry</h4>
                    <p class="card-title-desc">Fill out the form below to create a new record.</p>

                    <!-- Display Success Message -->
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
    
                    <!-- Profile Picture with Circular Preview -->
    
                    <form action="{{ isset($data) ? route('update') : route('create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(array_key_exists('personal_photo', $columns))
                            <div class="mb-3 row">
                                <label for="profile_picture" class="col-md-2 col-form-label">{{ $columns['personal_photo']['label'] }}</label>
                                <div class="col-lg-12 col-md-12 d-flex align-items-center">
                                    <div>
                                        @if(isset($data->personal_photo))
                                            <img id="imagePreview" src="{{ asset($data->personal_photo) }}" alt="Profile Picture" class="rounded-circle" style="width: 150px; height: 150px; object-fit: cover; border: 2px solid #eee;">
                                        @else
                                            <img id="imagePreview" src="{{ URL::asset('build/images/users/user2.jpg') }}" alt="Profile Picture" class="rounded-circle" style="width: 150px; height: 150px; object-fit: cover; border: 2px solid #eee;">
                                        @endif
                                    </div>
                                    <div class="ms-3">
                                        <input class="form-control" type="file" name="personal_photo" id="profile_picture" accept="image/*" onchange="previewImage(event)">
                                    </div>
                                </div>
                            </div>
                        @endif
                    
                        <div class="row">
                            @php
                            $columnsWithoutPhoto = array_filter($columns, function($details, $column) {
                                return $column !== 'personal_photo';
                            }, ARRAY_FILTER_USE_BOTH);
                        
                            // Chunk the array with key preservation
                            $chunks = array_chunk($columnsWithoutPhoto, 3, true);
                            @endphp
                        
                            <input type="hidden" name="table" value="{{ $table }}">
                            @if(isset($data))
                            <input type="hidden" name="id" value="{{ $data->id}}">
                            @endif

                            @foreach($chunks as $chunk)
                                <div class="row mb-3">
                                    @foreach($chunk as $column => $details)
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="{{ $column }}" class="form-label">{{ $details['label'] }}</label>
                                                @if($details['type'] === 'select')
                                                    <select class="form-select" name="{{ $column }}" id="{{ $column }}">
                                                        @foreach($details['options'] as $option)
                                                            <option value="{{ $option['value'] }}" {{ isset($data->$column) && $data->$column == $option['value'] ? 'selected' : '' }}>
                                                                {{ $option['label'] }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                @elseif($details['type'] === 'file')
                                                    <input class="form-control" type="file" name="{{ $column }}" id="{{ $column }}">
                                                @elseif($details['type'] === 'date')
                                                    <input class="form-control" type="date" name="{{ $column }}" id="{{ $column }}" value="{{ isset($data) ? \Carbon\Carbon::parse($data->$column)->format('Y-m-d') : '' }}">
                                                @elseif($details['type'] === 'email')
                                                    <input class="form-control" type="email" name="{{ $column }}" id="{{ $column }}" placeholder="Enter {{ $details['label'] }}" value="{{ isset($data) ? $data->$column : '' }}">
                                                @else
                                                    <input class="form-control" type="{{ $details['type'] }}" name="{{ $column }}" id="{{ $column }}" placeholder="Enter {{ $details['label'] }}" value="{{ isset($data) ? $data->$column : '' }}">
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                                                                                                        
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
    
    <script>
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function(){
                const output = document.getElementById('imagePreview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
        
@endsection

@push('script')
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
