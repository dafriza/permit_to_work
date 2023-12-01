<div class="col">
    {{-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Permit to Work</h4> --}}
    <!-- Basic Layout -->
    <div class="card mb-4">
        <div class="card-header">
            <div class="text-center">
                <h3>Permit To Work Request</h3>
                <h5>Task Description</h5>
            </div>
            <div class="d-flex flex-row-reverse bd-highlight">
                <div class="p-2 bd-highlight">Flex item 1</div>
            </div>
        </div>
        <div class="card-body">
            <form id="formAccountSettings" method="POST" action="{{ route('permit_to_work.store_header') }}">
                @csrf
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <div class="form-group required">
                            <label for="dateapplication" class="form-label control-label">Date Application</label>
                            <input class="form-control permit_to_work" type="date" id="dateapplication"
                                name="date_application" onchange="return isDateNow(event)" autofocus />
                        </div>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="reqbypa" class="form-label">Request by PA</label>
                        <input type="hidden" name="request_pa" value="{{ Auth::id() ?? 1 }}">
                        <input class="form-control permit_to_work" type="text" id="reqbypa"
                            value="{{ Auth::user()->name ?? 'John Doe' }}" disabled />
                    </div>
                    <div class="mb-3 col-md-6">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="directspv" class="form-label">Direct Supervisor</label>
                        {{-- <input type="text" class="form-control" id="directspv" name="directspv" /> --}}
                        <select id="direct_supervisor" class="form-select permit_to_work" name="direct_spv"
                            aria-label="direct_supervisor" data-placeholder="Pilih Supervisor">
                            {{-- <option>Harold Carter</option> --}}
                        </select>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="equipmentid">EQUIPMENT ID / TAG NUMBER </label>
                        <input type="text" class="form-control permit_to_work" id="equipmentid"
                            name="equipment_id" />
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" class="form-control permit_to_work" id="location" name="location"
                            placeholder="Location ..." />
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="task_description" class="form-label">TASK DESCRIPTION</label>
                        <textarea class="form-control permit_to_work" type="text" id="task_description" name="task_description"
                            placeholder="Perbaikan pada ..."></textarea>
                    </div>

                    <div class="mb-3 col-md-12">
                        <label class="form-label" for="tools_equipment">TOOLS/EQUIPMENT</label>
                        <select class="form-control permit_to_work" type="text" id="tools_equipment"
                            name="tools_equipment[]" multiple="multiple" data-placeholder="Pilih Tools">
                        </select>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="trades" class="form-label">TRADES/KEAHLIAN</label>
                        <select class="form-control permit_to_work" id="trades" name="trades[]"
                            data-placeholder="Pilih Trade" multiple="multiple">
                        </select>

                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="personel_involved" class="form-label">No. of personnel involved</label>
                        <input type="text" id="personel_involved" class="form-control permit_to_work"
                            name="personel_involved" onkeypress="return isNumberKey(event)">
                    </div>
                </div>
                <div class="mt-2 d-flex justify-content-end">
                    <button type="reset" class="btn btn-outline-secondary me-2">Back</button>
                    <button id="submit_permit_to_work" type="submit" class="btn btn-primary me-2">Next
                        (SETELAH
                        CHECKBOX)</button>
                </div>
            </form>
        </div>
        <!-- /Account -->
    </div>
</div>
