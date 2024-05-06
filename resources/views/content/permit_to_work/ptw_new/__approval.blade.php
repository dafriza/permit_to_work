<div class="col">
    <div class="card mb-4">
        <div class="card-header">
            <div class="text-center">
                <h3>Approval</h3>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                {{-- Authorization --}}
                <h3 class="form-header">Authorization SC</h3>
                <div class="mb-3 col-md-12">
                    {{-- <input type="text" class="form-control" id="directspv" name="directspv" /> --}}
                    <select id="approver_authorisation" class="form-select permit_to_work" name="approver_authorisation"
                        aria-label="approver_authorisation" data-placeholder="Select Approver Name">
                    </select>
                </div>
                <div class="mb-3 col-md-12">
                    <label for="designation" class="form-label required">Designation</label>
                    <input type="text" class="form-control permit_to_work" readonly value="Site Controller"
                        id="designation" name="designation" placeholder="Site Controller" />
                </div>
                {{-- Registry PC --}}
                <h3 class="form-header mt-5">Permit Registry PC</h3>
                <div class="mb-3 col-md-12">
                    {{-- <input type="text" class="form-control" id="directspv" name="directspv" /> --}}
                    <select id="approver_permit_registry" class="form-select permit_to_work"
                        name="approver_permit_registry" aria-label="approver_permit_registry"
                        data-placeholder="Select Approver Name">
                    </select>
                </div>
                {{-- Procedures --}}
                <h3 class="form-header mt-5">Site Gas Test (Where aplicable) AGT</h3>
                <div class="mb-3 col-md-12">
                    {{-- <input type="text" class="form-control" id="directspv" name="directspv" /> --}}
                    <select id="approver_site_gas_test" class="form-select permit_to_work" name="approver_site_gas_test"
                        aria-label="approver_site_gas_test" data-placeholder="Select Approver Name">
                    </select>
                </div>
                <div class="mb-3 col-md-12">
                    <label for="flammable" class="form-label required">Flammable</label>
                    <div class="mb-3 col-md-12 d-flex align-items-center">
                        <input type="number" class="form-control permit_to_work" id="flammable" name="flammable"
                            placeholder="Enter Flammable Percentage" onkeypress="return isNumberKeyWithMinus(event)" />
                        <span class="ps-2">%</span>
                        <span>LEL</span>
                    </div>
                </div>
                <div class="mb-3 col-md-12">
                    <label for="h2s" class="form-label required">H2S</label>
                    <div class="mb-3 col-md-12 d-flex align-items-center">
                        <input type="number" class="form-control permit_to_work" id="h2s" name="h2s"
                            placeholder="Enter H2S PPM" onkeypress="return isNumberKeyWithMinus(event)" />
                        <span class="ps-2"></span>
                        <span>PPM</span>
                    </div>
                </div>
                <div class="mb-3 col-md-12">
                    <label for="oxygen" class="form-label required">Oxygen</label>
                    <div class="mb-3 col-md-12 d-flex align-items-center">
                        <input type="number" class="form-control permit_to_work" id="oxygen" name="oxygen"
                            placeholder="Enter Oxygen Percentage" onkeypress="return isNumberKeyWithMinus(event)" />
                        <span class="ps-2"></span>
                        <span class="mr-5"> % </span>
                    </div>
                </div>
                {{-- Issue AA --}}
                <h3 class="form-header">Issue AA</h3>
                <div class="mb-3 col-md-12">
                    {{-- <input type="text" class="form-control" id="directspv" name="directspv" /> --}}
                    <select id="issue" class="form-select" name="issue" aria-label="issue"
                        data-placeholder="Select Isssuer Name">
                    </select>
                </div>
                {{-- Acceptance PA --}}
                <h3 class="form-header mt-5">Acceptance PA</h3>
                <div class="mb-3 col-md-12">
                    {{-- <input type="text" class="form-control" id="directspv" name="directspv" /> --}}
                    <select id="acceptance" class="form-select" name="acceptance" aria-label="acceptance"
                        data-placeholder="Select Acceptance Name">
                    </select>
                </div>
                {{-- Closed Out PA --}}
                <h3 class="form-header">Closed Out PA</h3>
                <div class="row mb-3">
                    <div class="col-auto">
                        <div class="btn-group" role="group" aria-label="work status pa toggle button group">
                            <input type="radio" class="btn-check work_status_pa" id="complete_pa"
                                name="work_status_pa" value="complete" autocomplete="off">
                            <label class="btn btn-outline-primary" for="complete_pa">Complete Work</label>
                            <input type="radio" class="btn-check work_status_pa" id="incomplete_pa"
                                name="work_status_pa" value="incomplete" autocomplete="off">
                            <label class="btn btn-outline-primary" for="incomplete_pa">Incomplete Work</label>
                        </div>
                    </div>
                    <div class="col">
                        <input id="incomplete_description" class="form-control" name="work_description_pa"
                            type="text" placeholder="Alasan tidak selesai">
                    </div>
                </div>
                <div class="mb-3 col-md-12">
                    <select id="closed_out_pa" class="form-select permit_to_work" name="closed_out_pa"
                        aria-label="closed_out_pa" data-placeholder="Select Name">
                    </select>
                </div>
                {{-- Closed Out AA --}}
                <h3 class="form-header mt-5">Closed Out AA</h3>
                <div class="row mb-3">
                    <div class="col-auto">
                        <div class="btn-group" role="group" aria-label="work status aa toggle button group">
                            <input type="radio" class="btn-check work_status_aa" id="complete_aa"
                                name="work_status_aa" value="complete" autocomplete="off">
                            <label class="btn btn-outline-primary" for="complete_aa">Complete Work</label>
                            <input type="radio" class="btn-check work_status_aa" id="incomplete_aa"
                                name="work_status_aa" value="incomplete" autocomplete="off">
                            <label class="btn btn-outline-primary" for="incomplete_aa">Incomplete Work</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3 col-md-12">
                    <select id="closed_out_aa" class="form-select permit_to_work" name="closed_out_aa"
                        aria-label="closed_out_aa" data-placeholder="Select Name">
                    </select>
                </div>
                {{-- Registry of Work Completion PA --}}
                <h3 class="form-header">Registry of Work Completion PA</h3>
                <div class="mb-3 col-md-12">
                    {{-- <input type="text" class="form-control" id="directspv" name="directspv" /> --}}
                    <select id="regis_work_pa" class="form-select permit_to_work" name="regis_work_pa"
                        aria-label="regis_work_pa" data-placeholder="Select Name">
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
