@extends('layouts/contentNavbarLayout')

@section('title', 'User - Profile')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}">
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
@endsection

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
                                    <span class="bio">{{ $auth->full_name }}</span>
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
                                <a href="javascript:;" class="btn btn-primary me-3" data-bs-target="#editUser"
                                    data-bs-toggle="modal">Edit</a>
                                <a href="javascript:;" class="btn btn-danger {{ $if_delete != null ? 'disabled' : '' }}"
                                    data-bs-target="#deleteUser" data-bs-toggle="modal">Delete this Account</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /User Card -->

                <!-- Edit User Modal -->
                <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                        <div class="modal-content p-3 p-md-5">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                <div class="text-center mb-4">
                                    <h3>Edit User Information</h3>
                                    <p>Updating user details will receive a privacy audit.</p>
                                </div>
                                <form id="editUserForm" class="row g-3" method="POST"
                                    action="{{ route('user_profile.update') }}">
                                    @csrf
                                    <input type="hidden" value="{{ $auth->id }}" name="id">
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="first_name">First Name</label>
                                        <input type="text" id="first_name" name="first_name" class="form-control"
                                            placeholder="John" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="last_name">Last Name</label>
                                        <input type="text" id="last_name" name="last_name" class="form-control"
                                            placeholder="Doe" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="text" id="email" name="email" class="form-control"
                                            placeholder="example@domain.com" />
                                    </div>
                                    {{-- <div class="col-12 col-md-6">
                                        <label class="form-label" for="role">Role</label>
                                        <select id="role" name="role" class="form-select">
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->name }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div> --}}
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="job_pos">Job Position</label>
                                        <select id="job_pos" name="job_id" class="form-select">
                                            @foreach ($job_pos as $job)
                                                <option value="{{ $job->id }}">{{ $job->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="phone_number">Phone Number</label>
                                        <div class="input-group input-group-merge">
                                            {{-- <span class="input-group-text">+1</span> --}}
                                            <input type="text" id="phone_number" name="phone_number"
                                                class="form-control phone-number-mask" placeholder="202 555 0111" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="address">Address</label>
                                        <input type="text" id="address" name="address"
                                            class="form-control modal-edit-address"
                                            placeholder="State Route 46, Australia" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                                        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                            aria-label="Close">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Edit User Modal -->

                <!-- Delete User Modal -->
                <div class="modal fade" id="deleteUser" tabindex="-1">
                    <div class="modal-dialog">
                        <form id="deleteUserForm" class="modal-content" method="post"
                            action="{{ route('user_profile.delete') }}">
                            @csrf
                            <input type="hidden" value="{{ $auth->id }}" name="id">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalTopTitle">Delete Account Validation</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="nameSlideTop" class="form-label">Are You Sure To Delete This
                                            Account Permanently?</label>
                                        <h6>Delete Account {{ $auth->full_name }} (by system)</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-label-secondary"
                                    data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">OK</button>
                            </div>
                        </form>
                    </div>
                </div>
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
        let fullname = selector[0].innerHTML.split(' ');
        let email = selector[1].innerHTML;
        // let role = selector[2].innerHTML.split(' ')[0];
        let job = selector[2].innerHTML.split(' ')[0];
        // console.log(job);
        let phone_number = selector[3].innerHTML;
        let address = selector[4].innerHTML;

        $("#first_name").val(fullname[0]);
        $("#last_name").val(fullname[1]);
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
            location.reload();
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
                    data: 'equipment_id'
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
