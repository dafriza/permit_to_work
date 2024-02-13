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
