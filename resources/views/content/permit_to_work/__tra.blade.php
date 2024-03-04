@push('styles')
    <style>
        .controls tbody tr th div input {
            width: auto;
        }

        .controls tbody tr td input {
            width: auto;
        }
    </style>
@endpush
<div class="col">
    <div class="card mb-4">
        <div class="card-header">
            <div class="text-center">
                <h3>Permit To Work Request</h3>
                <h5>TRA</h5>
            </div>
            <form id="formAccountSettingsTRA" method="POST" action="{{ route('permit_to_work.store_header_tra') }}"
                enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{ $id }}" name="id">
                @include('content.permit_to_work.component.__submit_and_save')
        </div>
        <div class="card-body">

            <div class="form-check mb-3">
                <input class="form-check-input-inline tra_level" type="checkbox" name="tra_level[]" value="1" />
                <label class="form-check-label" for="tra_level_1">TRA Level 1</label>
                <input class="form-check-input-inline tra_level" type="checkbox" name="tra_level[]" value="2" />
                <label class="form-check-label" for="tra_level_2">TRA Level 2</label>
                <label class="form-check-label d-flex justify-content-left mt-2" for="reference_number">Reference
                    Number</label>
                <div class="mb-3 col-md-12">
                    <input class="form-control" type="text" id="reference_number" name="reference_no"
                        placeholder="N-123" />
                </div>
            </div>

            <!-- Basic with Icons -->
            <form>
                @include('content.permit_to_work.tra.hazards')
                @include('content.permit_to_work.tra.controls')
                @include('content.permit_to_work.tra.sscr')
                <div class="mt-2 d-flex justify-content-end">
                    <button class="btn btn-primary me-2" onclick="stepper1.previous()" type="button">Previous</button>
                    <button id="next-2" class="btn btn-primary" type="button"
                        onclick="stepper1.next()">Next</button>
                </div>
        </div>
        </form>
    </div>
</div>
</div>
@push('scripts')
    <script>
        submitWithAjax('formAccountSettingsTRA', function() {
            setTimeout(() => {
                location.reload();
            }, 1500);
        })
    </script>
@endpush
