<div class="col">
    {{-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Permit to Work</h4> --}}
    <!-- Basic Layout -->
    <div class="card mb-4">
        <div class="card-header">
            <div class="text-center">
                <h3>Permit To Work Request</h3>
                <h5>Cross Referenced Certificates PA & AA</h5>
            </div>

            <form id="formAccountSettingsCrc" method="POST" action="{{ route('permit_to_work.store_header_crc') }}"
                enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $id }}">
                <input type="hidden" name="cross_referenced_certificates">
                <div class="d-flex flex-row-reverse bd-highlight">
                    <div class="p-2 bd-highlight"><button class="btn btn-secondary" type="submit">Save</button>
                        <button id="submit_permit_to_work" class="btn btn-primary me-2 disabled">Submit</button>
                    </div>
                </div>
        </div>
        <div class="card-body">
            <div class="row">
                {{-- Permit --}}
                <h3 class="form-header">PERMIT</h3>
                <div class="mb-3 col-md-12">
                    <label for="permitDesc" class="form-label required">Permit Description</label>
                    <input type="text" class="form-control permit_to_work" id="permitDesc" name="permit_description"
                        placeholder="Enter Permit Description" />
                </div>

                {{-- Isolations --}}
                <h3 class="form-header mt-5">ISOLATIONS</h3>
                <div class="mb-3 col-md-12">
                    <label for="isolationDesc" class="form-label required">Isolations Description</label>
                    <input type="text" class="form-control permit_to_work" id="isolationDesc"
                        name="isolation_description" placeholder="Enter Isolation Description" />
                </div>

                <h3 class="form-header mt-5">PROCEDURS/ MSDS/ LIFTING PLAN/ JSA/ OTHERS</h3>
                <div class="mb-3 col-md-12">
                    <label for="procedureDesc" class="form-label required">Procedures/ MSDS/ LIFTING PLAN/ JSA/ Others
                        Description</label>
                    <input type="text" class="form-control permit_to_work" id="procedureDesc"
                        name="procedure_description" placeholder="Enter Procedure Description" />
                </div>
                </form>
                <div class="mt-2 d-flex justify-content-end">
                    <button class="btn btn-primary me-2" onclick="stepper1.previous()">Previous</button>
                    <button id="next-3" class="btn btn-primary" type="button"
                        onclick="stepper1.next()">Next</button>
                </div>
            </div>

        </div>
        <!-- /Account -->
    </div>
</div>
@push('scripts')
    <script>
        submitWithAjax('formAccountSettingsCrc', function() {
            setTimeout(() => {
                location.reload();
            }, 1500);
        })
    </script>
@endpush
