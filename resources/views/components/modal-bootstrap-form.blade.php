@props(['id', 'title', 'formId', 'formMethod', 'formAction'])
<!-- Modal -->
<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-labelledby="{{ $id }}Label"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="{{ $id }}Label"> {{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form id="{{ $formId }}" method="{{ $formMethod }}" action="{{ $formAction }}">
                <div class="modal-body">
                    @csrf
                    {{ $slot }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    {{ $buttonSubmit }}
                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
            </form>
        </div>
    </div>
</div>
