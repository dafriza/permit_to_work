@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.signature.css') }}">
@endpush
<div class="col-auto">
    @php
        $typeButton = 'success';
        $idModal = 'approve_ptw_modal';
    @endphp
    {{-- <button type="button" id="approveRequest"
        class="btn btn-{{ $typeButton }} {{ $if_success == 'draft' ? '' : 'disabled' }}" data-bs-toggle="modal"
        data-bs-target="#{{ $idModal }}">
        Approve
    </button> --}}
    <button type="button" id="approveRequest"
        class="btn btn-{{ $typeButton }} {{ $if_success == 'draft' ? '' : 'disabled' }}">
        Approve
    </button>
    {{-- <x-modal-bootstrap-form :id="$idModal" :title="'Approve Request'" :formId="'approve_request'" :formMethod="'POST'" :formAction="route('permit_to_work.management.approval_request')">
        <input type="hidden" name="id" value="{{ $detail_request->id }}">
        <input type="hidden" name="work_order" value="{{$detail_request->work_order}}">
        <input type="hidden" name="status" value="success">
        <input type="hidden" name="comment" value="done!">
        <x-signature-default idSignature="signature_approve" signatureShow="signature_show_approve" />
        <x-slot:buttonSubmit>
            <x-button-default type="success" condition="{{ $if_success == 'draft' ? '' : 'disabled' }}">
                Approve
            </x-button-default>
        </x-slot>
    </x-modal-bootstrap-form> --}}
</div>
@push('scripts')
    <script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/js/http_ajax.js') }}"></script>
    <script>
        swalPostWithAjax("approveRequest", "approveRequestForm", "submit", {
            html: `<form id="approveRequestForm" method="POST" action="{{ route('permit_to_work.management.approval_request') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{ $detail_request->id }}">
                        <input type="hidden" name="work_order" value="{{ $detail_request->work_order }}">
                        <input type="hidden" name="status" value="success">
                        <input type="hidden" name="comment" value="done!">
                    </form>`
        }, function() {
            setTimeout(() => {
                location.reload();
            }, 1500);
        })
        // let sigApprove = $("#signature_approve").signature({
        //     syncField: "#signature_show_approve",
        //     syncFormat: 'PNG'
        // });
        // $('#clearsignature_approve').click(function(e) {
        //     e.preventDefault();
        //     sigApprove.signature('clear');
        //     $("#signature64").val('');
        // });
        // submitWithAjax("approve_request", function() {
        //     setTimeout(function() {
        //         location.reload();
        //     }, 1500);
        //     let approveModal = $("#{{ $idModal }}");
        //     approveModal.toggle()
        //     $(document.body).removeClass("modal-open");
        //     $(".modal-backdrop").remove();
        // })
    </script>
@endpush
