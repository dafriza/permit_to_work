<div class="btn-group">
    <a href="{{ route('permit_to_work.show', ['id' => $value->id]) }}" class="btn btn-sm btn-icon btn-primary"
        target="_blank"><i class="bx bx-pencil bx-xs"></i></a>
    <a href="{{ route('permit_to_work.detail', ['id' => $value->id]) }}" class="btn btn-sm btn-icon btn-secondary"
        target="_blank"><i class="bx bx-file-blank bx-xs"></i></a>
    <form action="{{ route('permit_to_work.management.delete_permit_to_work') }}" class="btn btn-sm btn-icon btn-danger"
        method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $value->id }}">
        <button id="deletePTW{{ $value->id }}" class="btn btn-sm btn-icon btn-danger"><i
                class="bx bx-trash-alt bx-xs"></i></button>
    </form>
</div>
<script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
<script src="{{ asset('assets/js/http_ajax.js') }}"></script>
<script>
    deleteWithAjax("deletePTW" + "{{ $value->id }}", function() {
        window.LaravelDataTables["ptw-management"].ajax.reload();
    })
</script>
