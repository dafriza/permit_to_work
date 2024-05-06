<div class="btn-group">
    <a href="{{ route('permit_to_work.show', ['id' => $value->id]) }}" class="btn btn-sm btn-icon btn-primary"
        target="_blank"><i class="bx bx-pencil bx-xs"></i></a>
    <a href="{{ route('permit_to_work.detail', ['id' => $value->id]) }}" class="btn btn-sm btn-icon btn-secondary"
        target="_blank"><i class="bx bx-file-blank bx-xs"></i></a>
    <button id="deletePTW{{ $value->id }}" type="button" class="btn btn-icon btn-danger btn-sm">
        <i class="bx bx-trash bx-xs"></i></button>
</div>
<script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
<script src="{{ asset('assets/js/http_ajax.js') }}"></script>
<script>
    // deleteWithAjax("deletePTW" + "{{ $value->id }}", function() {
    //     window.LaravelDataTables["ptw-management"].ajax.reload();
    // })
    swalPostWithAjax("deletePTW" + "{{ $value->id }}", "deletePTWForm", "delete", {
        html: `<form id="deletePTWForm" action="{{ route('permit_to_work.management.delete_permit_to_work') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $value->id }}">
        </form>
        `
    }, function() {
        window.LaravelDataTables["ptw-management"].ajax.reload();
    })
</script>
