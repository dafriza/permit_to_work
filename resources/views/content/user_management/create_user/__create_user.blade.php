<x-modal-bootstrap-form :id="'createUser'" :title="'Create User'" :formId="'createUserForm'" :formMethod="'POST'" :formAction="route('user_management.create_user')"
    :typeModal="'modal-lg'">
    @include('content.user_management.create_user.navstabs_user')
    <x-slot:buttonSubmit>
        <button class="btn btn-success" type="submit">Submit</button>
    </x-slot:buttonSubmit>
</x-modal-bootstrap-form>
<script src="{{ asset('assets/js/http_ajax.js') }}"></script>
<script src="{{ asset(mix('assets/vendor/libs/jquery/jquery.js')) }}"></script>
<script>
    submitWithAjax("createUserForm", function() {
        let createUserModal = $("#createUser");
        createUserModal.modal('hide')
        window.LaravelDataTables["user_management"].ajax.reload();
    }, function() {
        let createUserModal = $("#createUser");
        createUserModal.modal('hide')
        window.LaravelDataTables["user_management"].ajax.reload();
    })
</script>
