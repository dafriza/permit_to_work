@push('styles')
    <style>
        .controls tbody tr th div input {
            width: auto;
        }

        .controls tbody tr td input {
            width: auto;
        }
    </style>
@endpush
<div class="card">
    <div class="card-header">
        <div class="text-center">
            <h3>Permit To Work Request</h3>
            <h5>Permit To Work Progress and Approval</h5>
            <form id="formPTWProgress" method="POST" action="{!! route('permit_to_work.store_ptw_progress') !!}" enctype="multipart/form-data">
                @csrf
                <div class="d-flex flex-row-reverse bd-highlight">
                    <div class="p-2 bd-highlight">
                        <button class="btn btn-secondary" type="submit"
                            @if ($if_complete) disabled @endif>Save</button>
                    </div>
                </div>
        </div>
    </div>
    <div class="card-body">
        <input type="hidden" name="id" value="{{ $id }}">
        @include('content.permit_to_work.ptw_new.__tra')
        @include('content.permit_to_work.ptw_new.__crc')
        @include('content.permit_to_work.ptw_new.__approval')
        </form>
        <div class="mt-2 d-flex justify-content-end">
            <button class="btn btn-primary me-2" onclick="stepper1.previous()" type="button">Previous</button>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        dynamicSelect2('approver_authorisation', '{!! route('permit_to_work.get_data_sc') !!}');
        dynamicSelect2('approver_permit_registry', '{!! route('permit_to_work.get_data_pc') !!}');
        dynamicSelect2('approver_site_gas_test', '{!! route('permit_to_work.get_data_proc') !!}');
        dynamicSelect2('issue', '{!! route('permit_to_work.get_data_issue_aa') !!}');
        dynamicSelect2('acceptance', '{!! route('permit_to_work.get_data_acceptance_pa') !!}');
        dynamicSelect2('closed_out_pa', '{!! route('permit_to_work.get_data_closed_out_pa') !!}');
        dynamicSelect2('closed_out_aa', '{!! route('permit_to_work.get_data_closed_out_aa') !!}');
        dynamicSelect2('regis_work_pa', '{!! route('permit_to_work.get_data_regis_work_pa') !!}');
        submitWithAjax('formPTWProgress', function() {
            setTimeout(() => {
                location.reload();
            }, 1500);
        })
    </script>
@endpush
