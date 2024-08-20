@extends('layouts.master')
@section('title')
    Datatables
@endsection
@push('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('build/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('build/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{ URL::asset('build/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endpush
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">{{$table}}</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <a href="{{ route('add', ['table' => $table , 'view' => 'create.create']) }}" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-account-plus"></i> &nbsp;Add New</a>
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

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                @foreach($columns as $key => $value)
                                    <th>{{ $value }}</th>
                                @endforeach
                                <th>Control</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach ($data as $row)
                                <tr>
                                    @foreach($columns as $key => $label)

                                    @php

                                    // Fetch employee by emp_code value
                                    $employee = \App\Models\Employee::where('id', $row['emp_code'])->first();
                                    // dd($employee->personal_photo);

                                    @endphp 

                                        @if($key === 'employee_type')
                                            <td class="align-middle">
                                                @if($row['employee_type'] == 1)
                                                    <span class="badge badge-soft-success font-size-12">Active</span>
                                                @else
                                                    <span class="badge badge-soft-danger font-size-12">Not Active</span>
                                                @endif
                                            </td>
                        
                                        @elseif($key === 'personal_photo')
                                            <td class="align-middle">
                                                @if(isset($row['personal_photo']))
                                                    <img src="{{ asset($row['personal_photo']) }}" alt="Personal Photo" class="rounded-circle" width="60" height="60">
                                                @else
                                                    <img src="{{ asset('build/images/users/user2.jpg') }}" alt="No Image" class="rounded-circle" width="60" height="60">
                                                @endif
                                            </td>

                        
                                        @elseif($table == 'users' && $key === 'user_photo')

                                        <td class="align-middle">
                                            @if(isset($employee->personal_photo))
                                                <img src="{{ asset($employee->personal_photo) }}" alt="Personal Photo" class="rounded-circle" width="60" height="60">
                                            @else
                                                <img src="{{ asset('build/images/users/user2.jpg') }}" alt="No Image" class="rounded-circle" width="60" height="60">
                                            @endif
                                        </td>

                                        
                                        @elseif($table == 'users' && $label === 'Employee')

                                            <td class="align-middle">{{ $employee->employee ?? 'No employee found' }}</td>

                                        @elseif($key === 'role_id_fk')
                                            <td class="align-middle">
                                                @isset($row[$key])
                                                    @if($row[$key] == 1)
                                                        admin
                                                    @elseif($row[$key] == 2)
                                                        manager
                                                    @else
                                                        employee
                                                    @endif
                                                @else
                                                    {{-- Handle cases where $row[$key] is not set --}}
                                                @endisset
                                            </td>
                                        @else
                                            <td class="align-middle">{{ $row[$key] ?? '' }}</td>
                                        @endif
                        
                                    @endforeach
                                    <td class="align-middle">
                                        <a href="{{ route('edit', ['table' => $table , 'view' => 'create.create' , 'id' => $table == 'users' ? $row['user_id'] : $row['id']]) }}" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                        
                                        <a href="javascript:void(0);" class="btn btn-outline-secondary btn-sm delete" 
                                        data-id="{{ $table == 'users' ? $row['user_id'] : $row['id'] }}" title="Delete">
                                        <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                                              
                    </table>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->







    <!-- Message Container -->
    <div id="messages" class="mt-3"></div>

    <!-- Delete Confirmation Modal -->
    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this record?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" id="confirmDelete" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>



@endsection
@push('script')
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- Required datatable js -->
    <script src="{{ URL::asset('build/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ URL::asset('build/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ URL::asset('build/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ URL::asset('build/js/pages/datatables.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>

    <script>
        $(document).ready(function() {
            let deleteId;
            let rowToDelete;
    
            // Use event delegation to handle dynamically loaded elements
            $(document).on('click', '.delete', function() {
                deleteId = $(this).data('id');
                rowToDelete = $(this).closest('tr'); // Store the row to delete
                $('#deleteModal').modal('show');
            });
    
            // Handle confirm delete
            $('#confirmDelete').on('click', function() {
                $.ajax({
                    url: "{{ route('delete') }}",  // Define the delete route in your web.php
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: deleteId,
                        table: '{{ $table }}'  // Pass the table name if needed
                    },
                    success: function(response) {
                        showSuccessMessage(response.message);  // Show success message
                        rowToDelete.hide(); // Hide the row after successful deletion
                    },
                    error: function(xhr, status, error) {
                        showErrorMessage('Something went wrong.');  // Show error message
                        console.error(xhr.responseText);
                    }
                });
                $('#deleteModal').modal('hide'); // Hide the modal after deletion
            });
    
            // Optional: Handle cancel button in case it's not dismissing the modal
            $(document).on('click', '.btn-secondary', function() {
                $('#deleteModal').modal('hide');
            });
    
            // Function to display success messages
            function showSuccessMessage(message) {
                let successAlert = `
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        ${message}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                `;
                $('#messages').html(successAlert);  // Assuming you have a div with id="messages" to display alerts
            }
    
            // Function to display error messages
            function showErrorMessage(message) {
                let errorAlert = `
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        ${message}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                `;
                $('#messages').html(errorAlert);  // Assuming you have a div with id="messages" to display alerts
            }
        });
    </script>
    
@endpush
