<div class="col">
    {{-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Permit to Work</h4> --}}
    <!-- Basic Layout -->
    <div class="card mb-4">
        <div class="card-header">
            <div class="text-center">
                <h3>Permit To Work Request</h3>
                <h5>Approval 4</h5>
            </div>

            <form id="formAccountSettingsAppFour" method="POST" action="{{ route('permit_to_work.store_header_app_four') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="mt-2 d-flex justify-content-end">
                    <button type="submit" class="btn btn-outline-secondary me-2">Save</button>
                    <button id="submit_permit_to_work" class="btn btn-primary me-2 disabled">Submit</button>
                </div>        </div>
        <div class="card-body">
            <div class="row">
                {{-- Registry of Work Completion PA --}}
                <h3 class="form-header">Registry of Work Completion PA</h3>
                <div class="mb-3 col-md-12">
                    {{-- <input type="text" class="form-control" id="directspv" name="directspv" /> --}}
                    <select id="regis_work_pa" class="form-select permit_to_work" name="regis_work_pa"
                        aria-label="regis_work_pa" data-placeholder="Select Name">
                    </select>
                </div>
                </form>
                <div class="mt-2 d-flex justify-content-end">
                    <button class="btn btn-primary me-2" onclick="stepper1.previous()">Previous</button>
                    {{-- <button id="next-7" class="btn btn-primary" type="button" onclick="stepper1.next()">Next</button> --}}
                </div>
            </div>

        </div>
        <!-- /Account -->
    </div>
</div>
@push('scripts')
    <script>
        dynamicSelect2('regis_work_pa', '{!! route('permit_to_work.get_data_regis_work_pa') !!}');
        submitWithAjax('formAccountSettingsAppFour', function() {
            location.reload();
        })
        getDataWithAjax('{{ route('permit_to_work.get_data_header_cold_work_app_four') }}').done(function(data) {
            if (data != '') {
                $("#regis_work_pa").val(data.regis_work_pa);
                // approval 3
                getDataWithAjax(
                    "{!! route('permit_to_work.find_data_regis_work_pa', '') !!}" + "/" + data.regis_work_pa).done(function(data) {
                    let regis_work_pa_option = new Option(data.first_name + " " + data.last_name, data.id,
                        true, true);
                    $('#regis_work_pa').append(regis_work_pa_option).trigger('change');
                });
            } else {
                $("#next-7").attr('disabled','disabled');
            }
        });

    </script>
@endpush