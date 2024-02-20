<div class="col">
    {{-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Permit to Work</h4> --}}
    <!-- Basic Layout -->
    <div class="card mb-4">
        <div class="card-header">
            <div class="text-center">
                <h3>Permit To Work Request</h3>
                <h5>Approval 3</h5>
            </div>

            <form id="formAccountSettingsAppThree" method="POST" action="{{ route('permit_to_work.store_header_app_three') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="mt-2 d-flex justify-content-end">
                    <button type="submit" class="btn btn-outline-secondary me-2">Save</button>
                    <button id="submit_permit_to_work" class="btn btn-primary me-2 disabled">Submit</button>
                </div>
        </div>
        <div class="card-body">
            <div class="row">
                {{-- Closed Out PA --}}
                <h3 class="form-header">Closed Out PA</h3>
                <div class="mb-3 col-md-12">
                    {{-- <input type="text" class="form-control" id="directspv" name="directspv" /> --}}
                    <select id="closed_out_pa" class="form-select permit_to_work" name="closed_out_pa"
                        aria-label="closed_out_pa" data-placeholder="Select Name">
                    </select>
                </div>
                {{-- Closed Out AA --}}
                <h3 class="form-header mt-5">Closed Out AA</h3>
                <div class="mb-3 col-md-12">
                    {{-- <input type="text" class="form-control" id="directspv" name="directspv" /> --}}
                    <select id="closed_out_aa" class="form-select permit_to_work" name="closed_out_aa"
                        aria-label="closed_out_aa" data-placeholder="Select Name">
                    </select>
                </div>
                </form>
                <div class="mt-2 d-flex justify-content-end">
                    <button class="btn btn-primary me-2" onclick="stepper1.previous()">Previous</button>
                    <button id="next-6" class="btn btn-primary" type="button" onclick="stepper1.next()">Next</button>
                </div>
            </div>

        </div>
        <!-- /Account -->
    </div>
</div>
@push('scripts')
    <script>
        dynamicSelect2('closed_out_pa', '{!! route('permit_to_work.get_data_closed_out_pa') !!}');
        dynamicSelect2('closed_out_aa', '{!! route('permit_to_work.get_data_closed_out_aa') !!}');
        submitWithAjax('formAccountSettingsAppThree', function() {
            location.reload();
        })
        getDataWithAjax('{{ route('permit_to_work.get_data_header_cold_work_app_three') }}').done(function(data) {
            if (data != '') {
                $("#closed_out_pa").val(data.closed_out_pa);
                $("#closed_out_aa").val(data.closed_out_aa);
                // approval 3
                getDataWithAjax(
                    "{!! route('permit_to_work.find_data_closed_out_pa', '') !!}" + "/" + data.closed_out_pa).done(function(data) {
                    let closed_out_pa_option = new Option(data.first_name + " " + data.last_name, data.id,
                        true, true);
                    $('#closed_out_pa').append(closed_out_pa_option).trigger('change');
                });
                getDataWithAjax(
                    "{!! route('permit_to_work.find_data_closed_out_aa', '') !!}" + "/" + data.closed_out_aa).done(function(data) {
                    let closed_out_aa_option = new Option(data.first_name + " " + data.last_name, data.id,
                        true, true);
                    $('#closed_out_aa').append(closed_out_aa_option).trigger('change');
                });
            } else {

                // $("#next-6").attr('disabled','disabled');
            }
        });

    </script>
@endpush
