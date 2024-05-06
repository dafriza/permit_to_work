<div class="col">
    {{-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Permit to Work</h4> --}}
    <!-- Basic Layout -->
    <div class="card mb-4">
        <div class="card-header">
            <div class="text-center">
                <h3>Cross Referenced Certificates PA & AA</h3>
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
            </div>
        </div>
    </div>
</div>
