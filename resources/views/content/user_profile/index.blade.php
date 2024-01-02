@extends('layouts/contentNavbarLayout')

@section('title', 'User - Profile')


@section('content')

    @push('styles')
        <link href="{{ asset('assets/css/select2-bootstrap-5-theme.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('assets/css/sweetalert2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/datatables.bootstrap5.min.css') }}">
    @endpush
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard / </span><span
                    class="text-muted fw-light"></span> My Profile
            </h4>

            <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
                <!-- User Card -->
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="user-avatar-section">
                            <div class=" d-flex align-items-center flex-column">
                                <img class="img-fluid rounded my-4"
                                    src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/10.png"
                                    height="110" width="110" alt="User avatar" />
                                <div class="user-info text-center">
                                    <h4 class="mb-2">{{ $auth->full_name }}</h4>
                                    <span class="badge bg-label-secondary">{{ $auth->getRoleNames()->first() }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-around flex-wrap my-4 py-3">
                            <div class="d-flex align-items-start me-4 mt-3 gap-3">
                                <span class="bg-label-primary p-2 px-3 rounded">{{ $auth->request_pa->count() }}</span>
                                <div>
                                    <h5 class="mb-0">Permit To Work</h5>
                                    <span>Approved</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-start me-5 mt-3 gap-3">
                                <span class="bg-label-primary p-2 px-3 rounded">{{ $auth->entry_permit->count() }}</span>
                                <div>
                                    <h5 class="mb-0">Entry Permit</h5>
                                    <span>Approved</span>
                                </div>
                            </div>
                        </div>
                        <h5 class="pb-2 border-bottom mb-4">Details</h5>
                        <div class="info-container">
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Full Name: </span>
                                    <span class="bio" data-first-name="{{ $auth->first_name }}"
                                        data-last-name="{{ $auth->last_name }}">{{ $auth->full_name }}</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Email:</span>
                                    <span class="bio">{{ $auth->email }}</span>
                                </li>
                                {{-- <li class="mb-3">
                                    <span class="fw-medium me-2">Role:</span>
                                    <span
                                        class="bio">{{ $auth->getRoleNames()->first() . ' ' . $auth->role_assignment }}</span>
                                </li> --}}
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Job Position:</span>
                                    <span class="bio">{{ $auth->job->name }}</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Contact:</span>
                                    <span class="bio">{{ $auth->phone_number }}</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Address</span>
                                    <span class="bio">{{ $auth->address }}</span>
                                </li>
                            </ul>
                            <div class="d-flex justify-content-center pt-3">
                                <a href="javascript:;"
                                    class="btn btn-primary me-3 {{ $if_delete != null ? 'disabled' : '' }}"
                                    data-bs-target="#editUser" data-bs-toggle="modal">Edit</a>
                                <a href="javascript:;" class="btn btn-danger {{ $if_delete != null ? 'disabled' : '' }}"
                                    data-bs-target="#deleteUser" data-bs-toggle="modal">Delete this Account</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /User Card -->

                <!-- Edit User Modal -->
                @include('content.user_profile.__edit_user_modal')
                <!--/ Edit User Modal -->

                <!-- Delete User Modal -->
                @include('content.user_profile.__delete_user_modal')
                <!--/ Delete User Modal -->
            </div>
            <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
                <!-- Project table -->
                <div class="card">
                    <h5 class="card-header">Permit To Work</h5>
                    <div class="card-body">
                        <table class="table" id="table-ptw">
                            <thead class="table-light">
                                <tr>
                                    <th>No</th>
                                    <th>Project</th>
                                    <th>Start Date</th>
                                    <th>Progress</th>
                                    {{-- <th>Status</th> --}}
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /Project table -->
            </div>
            <!-- /Project table -->
        </div>
    </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2_usage.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/js/http_ajax.js') }}"></script>
    <script src="{{ asset('assets/js/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatables.bootstrap5.min.js') }}"></script>
    <script>
        // Integration edit
        let selector = $(".bio");
        // let fullname = selector[0].innerHTML.split(' ');
        let first_name = $(".bio")[0].attributes[1].nodeValue;
        let last_name = $(".bio")[0].attributes[2].nodeValue;
        let email = selector[1].innerHTML;
        // let role = selector[2].innerHTML.split(' ')[0];
        let job = selector[2].innerHTML.split(' ')[0];
        // console.log(job);
        let phone_number = selector[3].innerHTML;
        let address = selector[4].innerHTML;

        $("#first_name").val(first_name);
        $("#last_name").val(last_name);
        $("#email").val(email);
        // $("#role option[value=" + role + "]").attr('selected', 'selected');
        $("#job_pos option[value=" + job + "]").attr('selected', 'selected');
        $("#phone_number").val(phone_number);
        $("#address").val(address);

        submitWithAjax("editUserForm", function() {
            let userModal = $('#editUser');
            userModal.toggle()
            $(document.body).removeClass("modal-open");
            $(".modal-backdrop").remove();
            setTimeout(function() {
                location.reload();
            }, 1500);
            // userModal.hide()
        })

        // datatable
        $("#table-ptw").DataTable({
            serverSide: true,
            processing: true,
            ajax: '{{ route('user_profile.get_data_permit_to_works') }}',
            columns: [{
                    data: 'DT_RowIndex'
                },
                {
                    data: 'number'
                },
                {
                    data: 'created_at'
                },
                {
                    data: 'personel_involved'
                }
            ],
            deferRender: true,
        })

        // delete profile
        submitWithAjax("deleteUserForm", function() {
            let userModal = $('#deleteUser');
            userModal.toggle()
            $(document.body).removeClass("modal-open");
            $(".modal-backdrop").remove();
            location.reload();
        })
    </script>
@endpush
