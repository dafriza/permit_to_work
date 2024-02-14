@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.signature.css') }}">
@endpush
<div class="col-auto">
    @php
        $typeButton = 'danger';
        $idModal = 'reject_ptw_modal';
    @endphp
    <button type="button" class="btn btn-{{ $typeButton }} {{ $if_success == 'draft' ? '' : 'disabled' }}"
        data-bs-toggle="modal" data-bs-target="#{{ $idModal }}">
        Reject
    </button>
    <x-modal-bootstrap-form :id="$idModal" :title="'Reject Request'" :formId="'reject_request'" :formMethod="'POST'" :formAction="route('permit_to_work.management.approval_request')">
        <input type="hidden" name="id" value="{{ $detail_request->id }}">
        <input type="hidden" name="status" value="failure">
        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Reject reason ..." id="rejectTextArea" name="comment"></textarea>
            <label for="rejectTextArea">Comments</label>
        </div>
        <x-signature-default idSignature="signature_reject" signatureShow="signature_show_reject" />
        <x-slot:buttonSubmit>
            <x-button-default type="danger" condition="{{ $if_success == 'draft' ? '' : 'disabled' }}">
                Reject
            </x-button-default>
        </x-slot>
    </x-modal-bootstrap-form>
</div>
@push('scripts')
    <script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/js/http_ajax.js') }}"></script>
    <script>
        let sigReject = $("#signature_reject").signature({
            syncField: "#signature_show_reject",
            syncFormat: 'PNG'
        });
        $("#clearsignature_reject").click(function(e) {
            e.preventDefault();
            sigReject.signature('clear');
            $("#signature64").val('');
        });
        submitWithAjax("reject_request", function() {
            setTimeout(function() {
                location.reload();
            }, 1500);
            let rejectModal = $("#{{ $idModal }}");
            rejectModal.toggle()
            $(document.body).removeClass("modal-open");
            $(".modal-backdrop").remove();
        })
    </script>
@endpush
