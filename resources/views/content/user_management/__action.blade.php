@php
    $modalName = 'userManagement' . $user->id;
@endphp
<button type="button" class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#{{ $modalName }}"
    data-bs-modal-name="{{ $modalName }}">
    <i class="bx bx-pencil bx-xs"></i>
</button>
{{-- "{!! route('permit_to_work.management.delete_permit_to_work', '') !!}" + "/" + id --}}
<form action="{{ route('user_management.delete_user') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $user->id }}">
    <button id="deleteDataUser{{ $user->id }}" type="button" class="btn btn-danger btn-md">
        <i class="bx bx-trash bx-xs"></i>
    </button>
</form>
<x-modal-bootstrap-form :id="$modalName" :title="'User Management'" :formId="'formUserManagement' . $user->id" :formMethod="'POST'" :formAction="route('user_management.update_user')"
    :typeModal="'modal-lg'">
    <ul class="nav nav-tabs" id="userManagement" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="user{{ $user->id }}-tab" data-bs-toggle="tab"
                data-bs-target="#user{{ $user->id }}" type="button" role="tab"
                aria-controls="user{{ $user->id }}" aria-selected="true">User Data</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="role{{ $user->id }}-tab" data-bs-toggle="tab"
                data-bs-target="#role{{ $user->id }}" type="button" role="tab"
                aria-controls="role{{ $user->id }}" aria-selected="false">User Role</button>
        </li>
    </ul>
    <div class="tab-content" id="userManagementContent">
        <div class="tab-pane fade show active" id="user{{ $user->id }}" role="tabpanel"
            aria-labelledby="user{{ $user->id }}-tab">
            @include('content.user_management.__user_data')
        </div>
        <div class="tab-pane fade" id="role{{ $user->id }}" role="tabpanel"
            aria-labelledby="role{{ $user->id }}-tab">
            @include('content.user_management.__user_role')
        </div>
    </div>
    <x-slot:buttonSubmit>
        <button class="btn btn-success" type="submit">Submit</button>
    </x-slot:buttonSubmit>
</x-modal-bootstrap-form>
<script src="{{ asset('assets/js/http_ajax.js') }}"></script>
<script>
    function selectAll(permission) {
        let checkAllPermission = $("input[type='checkbox'][data-access='" + permission + "']")
        if (checkAllPermission.prop('checked') == true) {
            checkAllPermission.prop('checked', false)
        } else {
            checkAllPermission.prop('checked', true)
        }
    }
    // "{!! route('permit_to_work.management.delete_permit_to_work', '') !!}" + "/" + id
    $("button[data-bs-modal-name={!! $modalName !!}]").on('click', function() {
        $("input[type='checkbox']").prop('checked', false);
        getDataWithAjax("{!! route('user_management.get_permissions_user', '') !!}" + "/" + "{{ $user->id }}").done(function(data) {
            data.forEach(element => {
                $("input[value='" + element.name + "']").prop('checked', true);
                // console.log(element);
            });
        })
    })
    submitWithAjax("formUserManagement" + "{{ $user->id }}", function() {
        let userModal = $("#{{ $modalName }}");
        userModal.modal('hide')
        // $(document.body).removeClass("modal-open");
        // $(".modal-backdrop").remove();
        window.LaravelDataTables["user_management"].ajax.reload();
    })
    deleteWithAjax("deleteDataUser" + "{{ $user->id }}", function() {
        window.LaravelDataTables["user_management"].ajax.reload();
    })
</script>
