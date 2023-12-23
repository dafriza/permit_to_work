<div class="col">
    {{-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Permit to Work</h4> --}}
    <!-- Basic Layout -->
    <div class="card mb-4">
        <div class="card-header">
            <div class="text-center">
                <h3>Permit To Work Request</h3>
                <h5>Approval 1</h5>
            </div>
            
            <form id="formAccountSettingsAppOne" method="POST" action="{{ route('permit_to_work.store_header_app_one') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="mt-2 d-flex justify-content-end">
                    <button type="submit" class="btn btn-outline-secondary me-2">Save</button>
                    <button id="submit_permit_to_work" class="btn btn-primary me-2 disabled">Submit</button>
                </div>
        </div>
        <div class="card-body">
            <div class="row">
                {{-- Authorization --}}
                <h3 class="form-header">Authorization SC</h3>
                <div class="mb-3 col-md-12">
                    {{-- <input type="text" class="form-control" id="directspv" name="directspv" /> --}}
                    <select id="approver_name_sc" class="form-select permit_to_work" name="approver_name_sc"
                        aria-label="approver_name_sc" data-placeholder="Select Approver Name">
                    </select>
                </div>
                <div class="mb-3 col-md-12">
                    <label for="designation" class="form-label required">Designation</label>
                    <input type="text" class="form-control permit_to_work" readonly  value="Site Controller" id="designation"
                        name="designation" placeholder="Site Controller" />
                </div>

                {{-- Registry PC --}}
                <h3 class="form-header mt-5">Permit Registry PC</h3>
                <div class="mb-3 col-md-12">
                    {{-- <input type="text" class="form-control" id="directspv" name="directspv" /> --}}
                    <select id="approver_name_pc" class="form-select permit_to_work" name="approver_name_pc"
                        aria-label="approver_name_pc" data-placeholder="Select Approver Name">
                    </select>
                </div>

                {{-- Procedures --}}
                <h3 class="form-header mt-5">Procedures/MSDS/Lift Plan/SOPs/JSAs/Others:</h3>
                <div class="mb-3 col-md-12">
                    {{-- <input type="text" class="form-control" id="directspv" name="directspv" /> --}}
                    <select id="approver_name_procedures" class="form-select permit_to_work"
                        name="approver_name_procedures" aria-label="approver_name_procedures"
                        data-placeholder="Select Approver Name">
                    </select>
                </div>

                <div class="mb-3 col-md-12">
                    <label for="flammable" class="form-label required">Flammable</label>
                    <div class="mb-3 col-md-12 d-flex align-items-center">
                        <input type="number" class="form-control permit_to_work" id="flammable" name="flammable"
                            placeholder="Enter Flammable Percentage" />
                        <span class="ps-2">%</span>
                        <span>LEL</span>
                    </div>
                </div>

                <div class="mb-3 col-md-12">
                    <label for="h2s" class="form-label required">H2S</label>
                    <div class="mb-3 col-md-12 d-flex align-items-center">
                        <input type="number" class="form-control permit_to_work" id="h2s" name="h2s"
                            placeholder="Enter H2S PPM" />
                        <span class="ps-2"></span>
                        <span>PPM</span>
                    </div>
                </div>

                <div class="mb-3 col-md-12">
                    <label for="oxygen" class="form-label required">Oxygen</label>
                    <div class="mb-3 col-md-12 d-flex align-items-center">
                        <input type="number" class="form-control permit_to_work" id="oxygen" name="oxygen"
                            placeholder="Enter Oxygen Percentage" />
                        <span class="ps-2"></span>
                        <span class="mr-5"> % </span>
                    </div>
                </div>

                </form>
                <div class="mt-2 d-flex justify-content-end">
                    <button class="btn btn-primary me-2" onclick="stepper1.previous()">Previous</button>
                    <button id="next-4" class="btn btn-primary" type="button" onclick="stepper1.next()">Next</button>
                </div>
            </div>

        </div>
        <!-- /Account -->
    </div>
</div>
@push('scripts')
    <script>
        dynamicSelect2('approver_name_sc', '{!! route('permit_to_work.get_data_sc') !!}');
        dynamicSelect2('approver_name_pc', '{!! route('permit_to_work.get_data_pc') !!}');
        dynamicSelect2('approver_name_procedures', '{!! route('permit_to_work.get_data_proc') !!}');
        submitWithAjax('formAccountSettingsAppOne', function() {
            location.reload();
        })
        getDataWithAjax('{{ route('permit_to_work.get_data_header_cold_work_app_one') }}').done(function(data) {
            if (data != '') {
                $("#designation").val(data.designation);
                $("#flammable").val(data.flammable);
                $("#h2s").val(data.h2s);
                $("#oxygen").val(data.oxygen);
                $("#approver_name_sc").val(data.approver_name_sc);
                $("#approver_name_pc").val(data.approver_name_pc);
                $("#approver_name_procedures").val(data.approver_name_procedures);

                // ap[]roval sc,pc,procedure
                getDataWithAjax(
                    "{!! route('permit_to_work.find_data_approve_sc', '') !!}" + "/" + data.approver_name_sc).done(function(data) {
                    let approver_sc_option = new Option(data.first_name + " " + data.last_name, data.id,
                        true, true);
                    $('#approver_name_sc').append(approver_sc_option).trigger('change');
                });
                getDataWithAjax(
                    "{!! route('permit_to_work.find_data_approve_pc', '') !!}" + "/" + data.approver_name_pc).done(function(data) {
                    let approver_pc_option = new Option(data.first_name + " " + data.last_name, data.id,
                        true, true);
                    $('#approver_name_pc').append(approver_pc_option).trigger('change');
                });
                getDataWithAjax(
                    "{!! route('permit_to_work.find_data_approve_proc', '') !!}" + "/" + data.approver_name_procedures).done(function(data) {
                    let approve_proc_option = new Option(data.first_name + " " + data.last_name, data.id,
                        true, true);
                    $('#approver_name_procedures').append(approve_proc_option).trigger('change');
                });
            } else {

                $("#next-4").attr('disabled','disabled');
            }
        });

    </script>
@endpush
