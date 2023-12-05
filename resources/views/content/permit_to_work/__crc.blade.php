<div class="col">
    {{-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Permit to Work</h4> --}}
    <!-- Basic Layout -->
    <div class="card mb-4">
        <div class="card-header">
            <div class="text-center">
                <h3>Permit To Work Request</h3>
                <h5>Cross Referenced Certificates PA & AA</h5>
            </div>

            <form id="formAccountSettings" method="POST" action="{{ route('permit_to_work.store_header') }}">
                @csrf
                <div class="mt-2 d-flex justify-content-end">
                    <button type="submit" class="btn btn-outline-secondary me-2">Save</button>
                    <button id="submit_permit_to_work" class="btn btn-primary me-2 disabled">Submit</button>
                </div>
        </div>
        <div class="card-body">
            <div class="row">
                {{-- Permit --}}
                <h3 class="form-header">PERMIT</h3>
                <div class="mb-3 col-md-12">
                    <label for="permitDesc" class="form-label required">Permit Description</label>
                    <input type="text" class="form-control permit_to_work" id="permitDesc" name="permitDesc"
                        placeholder="Enter Permit Description" />
                </div>

                {{-- Isolations --}}
                <h3 class="form-header mt-5">ISOLATIONS</h3>
                <div class="mb-3 col-md-12">
                    <label for="isolationDesc" class="form-label required">Isolations Description</label>
                    <input type="text" class="form-control permit_to_work" id="isolationDesc" name="isolationDesc"
                        placeholder="Enter Isolation Description" />
                </div>

                <h3 class="form-header mt-5">PROCEDURS/ MSDS/ LIFTING PLAN/ JSA/ OTHERS</h3>
                <div class="mb-3 col-md-12">
                    <label for="procedureDesc" class="form-label required">Procedures/ MSDS/ LIFTING PLAN/ JSA/ Others Description</label>
                    <input type="text" class="form-control permit_to_work" id="procedureDesc" name="procedureDesc"
                        placeholder="Enter Procedure Description" />
                </div>
                </form>
                <div class="mt-2 d-flex justify-content-end">
                            <button class="btn btn-primary me-2" onclick="stepper1.previous()">Previous</button>
                            <button class="btn btn-primary me-2" onclick="stepper1.next()">Next</button>
                </div>
            </div>
            
        </div>
        <!-- /Account -->
    </div>
</div>
