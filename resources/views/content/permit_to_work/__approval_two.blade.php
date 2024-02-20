<div class="col">
    {{-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Permit to Work</h4> --}}
    <!-- Basic Layout -->
    <div class="card mb-4">
        <div class="card-header">
            <div class="text-center">
                <h3>Permit To Work Request</h3>
                <h5>Approval 2</h5>
            </div>

            <form id="formAccountSettingsAppTwo" method="POST" action="{{ route('permit_to_work.store_header_app_two') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="mt-2 d-flex justify-content-end">
                    <button type="submit" class="btn btn-outline-secondary me-2">Save</button>
                    <button id="submit_permit_to_work" class="btn btn-primary me-2 disabled">Submit</button>
                </div>
        </div>
        <div class="card-body">
            <div class="row">
                {{-- Issue AA --}}
                <h3 class="form-header">Issue AA</h3>
                <div class="mb-3 col-md-12">
                    {{-- <input type="text" class="form-control" id="directspv" name="directspv" /> --}}
                    <select id="issue_aa" class="form-select permit_to_work" name="issue_aa"
                        aria-label="issue_aa" data-placeholder="Select Isssuer Name">
                    </select>
                </div>
                {{-- Acceptance PA --}}
                <h3 class="form-header mt-5">Acceptance PA</h3>
                <div class="mb-3 col-md-12">
                    {{-- <input type="text" class="form-control" id="directspv" name="directspv" /> --}}
                    <select id="acceptance_pa" class="form-select permit_to_work" name="acceptance_pa"
                        aria-label="acceptance_pa" data-placeholder="Select Acceptance Name">
                    </select>
                </div>
                </form>
                <div class="mt-2 d-flex justify-content-end">
                    <button class="btn btn-primary me-2" onclick="stepper1.previous()">Previous</button>
                    <button id="next-5" class="btn btn-primary" type="button" onclick="stepper1.next()">Next</button>
                </div>
            </div>

        </div>
        <!-- /Account -->
    </div>
</div>
@push('scripts')
    <script>
        dynamicSelect2('issue_aa', '{!! route('permit_to_work.get_data_issue_aa') !!}');
        dynamicSelect2('acceptance_pa', '{!! route('permit_to_work.get_data_acceptance_pa') !!}');
        submitWithAjax('formAccountSettingsAppTwo', function() {
            location.reload();
        })
        getDataWithAjax('{{ route('permit_to_work.get_data_header_cold_work_app_two') }}').done(function(data) {
            if (data != '') {
                $("#issue_aa").val(data.issue_aa);
                $("#acceptance_pa").val(data.acceptance_pa);
                // app[]roval sc,pc,procedure
                getDataWithAjax(
                    "{!! route('permit_to_work.find_data_issue_aa', '') !!}" + "/" + data.issue_aa).done(function(data) {
                    let issue_aa_option = new Option(data.first_name + " " + data.last_name, data.id,
                        true, true);
                    $('#issue_aa').append(issue_aa_option).trigger('change');
                });
                getDataWithAjax(
                    "{!! route('permit_to_work.find_data_acceptance_pa', '') !!}" + "/" + data.acceptance_pa).done(function(data) {
                    let acceptance_pa_option = new Option(data.first_name + " " + data.last_name, data.id,
                        true, true);
                    $('#acceptance_pa').append(acceptance_pa_option).trigger('change');
                });
            } else {

                // $("#next-5").attr('disabled','disabled');
            }
        });

    </script>
@endpush
