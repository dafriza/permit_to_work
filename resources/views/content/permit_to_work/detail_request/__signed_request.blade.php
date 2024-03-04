@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.signature.css') }}">
@endpush
<div class="col-auto">
    @php
        $typeButton = 'primary';
        $idModal = 'signed_ptw_modal';
    @endphp
    <button type="button" class="btn btn-{{ $typeButton }} {{ $if_success == 'draft' ? '' : 'disabled' }}"
        data-bs-toggle="modal" data-bs-target="#{{ $idModal }}">
        Signed
    </button>
    <x-modal-bootstrap-form :id="$idModal" :title="'Signed Request'" :formId="'signed_request'" :formMethod="'POST'" :formAction="route('permit_to_work.management.signed_request')">
        <input type="hidden" name="id" value="{{ $detail_request->id }}">
        <input type="hidden" name="work_order" value="{{$detail_request->work_order}}">
        <input type="hidden" name="date_application" value="{{$detail_request->date_application}}">
        <x-signature-default idSignature="signature_signed" signatureShow="signature_show_signed" />
        <x-slot:buttonSubmit>
            <x-button-default type="success" condition="{{ $if_success == 'draft' ? '' : 'disabled' }}">
                Signed
            </x-button-default>
        </x-slot>
    </x-modal-bootstrap-form>
</div>
@push('scripts')
    <script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/js/http_ajax.js') }}"></script>
    <script>
        let sigSigned = $("#signature_signed").signature({
            syncField: "#signature_show_signed",
            syncFormat: 'PNG'
        });
        $('#clearsignature_signed').click(function(e) {
            e.preventDefault();
            sigSigned.signature('clear');
            $("#signature64").val('');
        });
        submitWithAjax("signed_request", function() {
            setTimeout(function() {
                location.reload();
            }, 1500);
            let signedModal = $("#{{ $idModal }}");
            signedModal.toggle()
            $(document.body).removeClass("modal-open");
            $(".modal-backdrop").remove();
        })
    </script>
@endpush
