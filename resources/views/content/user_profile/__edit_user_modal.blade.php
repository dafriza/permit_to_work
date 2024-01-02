<div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-edit-user">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3>Edit User Information</h3>
                    <p>Updating user details will receive a privacy audit.</p>
                </div>
                <form id="editUserForm" class="row g-3" method="POST" action="{{ route('user_profile.update') }}">
                    @csrf
                    <input type="hidden" value="{{ $auth->id }}" name="id">
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="first_name">First Name</label>
                        <input type="text" id="first_name" name="first_name" class="form-control" />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="last_name">Last Name</label>
                        <input type="text" id="last_name" name="last_name" class="form-control" />
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
                        <input type="text" id="address" name="address" class="form-control modal-edit-address"
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
