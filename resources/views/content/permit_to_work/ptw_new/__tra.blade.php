<div class="col">
    <div class="card mb-4">
        <div class="card-header">
            <div class="text-center">
                <h3>TRA</h3>
            </div>
        </div>
        <div class="card-body">
            <div class="form-check mb-3">
                <input class="form-check-input-inline tra_level" type="radio" name="tra_level" value="1" />
                <label class="form-check-label" for="tra_level_1">TRA Level 1</label>
                <input class="form-check-input-inline tra_level" type="radio" name="tra_level" value="2" />
                <label class="form-check-label" for="tra_level_2">TRA Level 2</label>
                <label class="form-check-label d-flex justify-content-left mt-2" for="reference_number">Reference
                    Number</label>
                <div class="mb-3 col-md-12">
                    <input class="form-control" type="text" id="reference_number" name="reference_no"
                        placeholder="N-123" />
                </div>
            </div>
            @include('content.permit_to_work.tra.hazards')
            @include('content.permit_to_work.tra.controls')
            @include('content.permit_to_work.tra.sscr')
        </div>
    </div>
</div>
