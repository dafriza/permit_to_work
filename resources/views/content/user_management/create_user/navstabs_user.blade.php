<div class="nav-align-top mb-4">
    <ul class="nav nav-tabs" id="userManagement" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="user-create-tab" data-bs-toggle="tab" data-bs-target="#user-create"
                type="button" role="tab" aria-controls="user-create" aria-selected="true">User Data</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="role-create-tab" data-bs-toggle="tab" data-bs-target="#role-create"
                type="button" role="tab" aria-controls="role-create" aria-selected="false">User Role</button>
        </li>
    </ul>
    <div class="tab-content" id="userManagementContent">
        <div class="tab-pane fade show active" id="user-create" role="tabpanel" aria-labelledby="user-create-tab">
            @include('content.user_management.create_user.__user_data')
        </div>
        <div class="tab-pane fade" id="role-create" role="tabpanel" aria-labelledby="role-create-tab">
            @include('content.user_management.__user_role')
        </div>
    </div>
</div>
