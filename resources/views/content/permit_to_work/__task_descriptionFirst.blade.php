@push('styles')
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/select2-bootstrap-5-theme.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bs-stepper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.signature.css') }}">
@endpush
<div class="col">
    {{-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Permit to Work</h4> --}}
    <!-- Basic Layout -->
    <div class="card mb-4">
        <div class="card-header">
            <div class="text-center">
                <h3>Permit To Work Request</h3>
                <h5>Task Description</h5>
            </div>
            {{-- <form id="formColdHeader" method="POST" action="{{ route('permit_to_work.store_header') }}"
                enctype="multipart/form-data"> --}}
            <form id="formColdHeader" method="POST" action="{{ route('permit_to_work.store_header') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="d-flex flex-row-reverse bd-highlight">
                    <div class="p-2 bd-highlight"><button class="btn btn-primary" type="button"
                            disabled>Submit</button></div>
                    <div class="p-2 bd-highlight"><button class="btn btn-secondary" type="submit">Save</button></div>
                </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="number" class="form-label">Number</label>
                    <input class="form-control number" type="text" disabled />
                    <input class="form-control permit_to_work number" type="hidden" id="number" name="number"
                        value="" />
                </div>
                <div class="mb-3 col-md-6">
                    <label for="work_order" class="form-label">Work Order</label>
                    <input class="form-control permit_to_work work_order" type="text" name="work_order" />
                    {{-- <input class="form-control permit_to_work work_order" type="hidden" id="work_order" value=""
                        name="work_order" /> --}}
                </div>
                <div class="mb-3 col-md-6">
                    <div class="form-group required">
                        <label for="dateapplication" class="form-label control-label">Date Application</label>
                        <input class="form-control permit_to_work" type="date" id="dateapplication"
                            name="date_application" onchange="return isDateNow(event)" autofocus />
                    </div>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="reqbypa" class="form-label">Request by PA</label>
                    <input type="hidden" name="request_pa" value="{{ Auth::id() }}">
                    <input class="form-control permit_to_work" type="text" id="reqbypa"
                        value="{{ Auth::user()->full_name }}" disabled />
                </div>
                <div class="mb-3 col-md-6">
                    <div class="form-group required">
                        <label for="directspv" class="form-label control-label">Direct Supervisor</label>
                        {{-- <input type="text" class="form-control" id="directspv" name="directspv" /> --}}
                        <select id="direct_supervisor" class="form-select permit_to_work" name="direct_spv"
                            aria-label="direct_supervisor" data-placeholder="Pilih Supervisor">
                            {{-- <option>Harold Carter</option> --}}
                        </select>
                    </div>
                </div>
                <div class="mb-3 col-md-6">
                    <div class="form-group required">
                        <label class="form-label control-label" for="equipmentid">EQUIPMENT ID / TAG NUMBER </label>
                    </div>
                    <div class="input-group">
                        {{-- <input type="text" class="form-control permit_to_work" id="equipmentid"
                            name="equipment_id" /> --}}
                        <input type="text" id="equipment_id" class="form-control" placeholder="equipment_id"
                            aria-label="equipment_id" name="equipment_id">
                        <span class="input-group-text">/</span>
                        <input type="text" id="tag_number" class="form-control" placeholder="tag_number"
                            aria-label="tag_number" name="tag_number">
                    </div>
                </div>
                <div class="mb-3 col-md-12">
                    <div class="form-group required">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" class="form-control permit_to_work" id="location" name="location"
                            placeholder="Location ..." />
                    </div>
                </div>
                <div class="mb-3 col-md-12">
                    <div class="form-group required">
                        <label for="task_description" class="form-label control-label">TASK DESCRIPTION</label>
                        <textarea class="form-control permit_to_work" type="text" id="task_description" name="task_description"
                            placeholder="Perbaikan pada ..."></textarea>
                    </div>
                </div>

                <div class="mb-3 col-md-12">
                    <div class="form-group required">
                        <label class="form-label control-label" for="tools_equipment">TOOLS/EQUIPMENT</label>
                        <select class="form-control permit_to_work" type="text" id="tools_equipment"
                            name="tools_equipment[]" multiple="multiple" data-placeholder="Pilih Tools">
                        </select>
                    </div>
                </div>
                <div class="mb-3 col-md-6">
                    <div class="form-group required">
                        <label for="trades" class="form-label control-label">TRADES/KEAHLIAN</label>
                        <select class="form-control permit_to_work" id="trades" name="trades[]"
                            data-placeholder="Pilih Trade" multiple="multiple">
                        </select>
                    </div>

                </div>
                <div class="mb-3 col-md-6">
                    <div class="form-group required">
                        <label for="personel_involved" class="form-label control-label">Number of personnel
                            involved</label>
                        <input type="text" id="personel_involved" class="form-control permit_to_work"
                            name="personel_involved" onkeypress="return isNumberKey(event)">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-auto me-auto form-group required mb-3">
                    <label class="control-label">Signature:</label>
                    <br />
                    <div id="sig" style="border-style: dashed;"></div>
                    <br /><br />
                    <button id="clear" class="btn btn-danger btn-sm">Clear</button>
                    <span id="show"></span>
                    <textarea id="sign_pa" name="sign_pa" style="display: none"></textarea>
                </div>
                </form>
                <div class="col-auto align-self-end ">
                    <button id="next-1" class="btn btn-primary" type="button"
                        onclick="stepper1.next()">Next</button>
                </div>
            </div>
        </div>
        <!-- /Account -->
    </div>
</div>
@push('scripts')
    <script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2_usage.js') }}"></script>
    <script src="{{ asset('assets/js/http_ajax.js') }}"></script>
    <script src="{{ asset('assets/js/helperJs.js') }}"></script>
    <script src="{{ asset('assets/js/bs-stepper.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.signature.min.js') }}"></script>
    <script>
        dynamicSelect2('tools_equipment', '{!! route('permit_to_work.get_data_tools_equipment') !!}');
        dynamicSelect2('direct_supervisor', '{!! route('permit_to_work.get_data_spv') !!}');
        dynamicSelect2('trades', '{!! route('permit_to_work.get_data_trades') !!}');
        getDataWithAjax('{{ route('permit_to_work.get_total_permits') }}').done(function(data) {
                    console.log("jumlah " + data);
                    let date_now = new Date();
                    let month_romanize = romanize(date_now.getMonth() + 1);
                    $(".number").val("HCML/" + month_romanize + "/" + date_now.getFullYear() + "/" + data);
                    $(".work_order").val(data);
                })
                $("#next-1").attr('disabled', 'disabled');

        let sig = $('#sig').signature({
            syncField: '#sign_pa',
            syncFormat: 'PNG'
        });
        $('#clear').click(function(e) {
            e.preventDefault();
            sig.signature('clear');
            $("#sign_pa").val('');
        });
    </script>
@endpush
