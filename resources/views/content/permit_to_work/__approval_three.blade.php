<div class="col">
    {{-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Permit to Work</h4> --}}
    <!-- Basic Layout -->
    <div class="card mb-4">
        <div class="card-header">
            <div class="text-center">
                <h3>Permit To Work Request</h3>
                <h5>Approval 3</h5>
            </div>
            <form id="formAccountSettingsAppThree" method="POST"
                action="{{ route('permit_to_work.store_header_app_three') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $id }}">
                @include('content.permit_to_work.component.__submit_and_save')
        </div>
        <div class="card-body">
            <div class="row">
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
                </form>
                <div class="mt-2 d-flex justify-content-end">
                    <button class="btn btn-primary me-2" onclick="stepper1.previous()" type="button">Previous</button>
                    <button id="next-6" class="btn btn-primary" type="button"
                        onclick="stepper1.next()">Next</button>
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
            setTimeout(() => {
                location.reload();
            }, 1500);
        })
    </script>
@endpush
