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
            <form id="formAccountSettings" method="POST" action="{{ route('permit_to_work.store_header') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="d-flex flex-row-reverse bd-highlight">
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
                    <input class="form-control permit_to_work work_order" type="text" disabled />
                    <input class="form-control permit_to_work work_order" type="hidden" id="work_order" value=""
                        name="work_order" />
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
                    <input type="hidden" name="request_pa" value="{{ Auth::id() ?? 1 }}">
                    <input class="form-control permit_to_work" type="text" id="reqbypa"
                        value="{{ Auth::user()->name ?? 'John Doe' }}" disabled />
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
                    <textarea id="signature" name="signature" style="display: none"></textarea>
                </div>
            </form>
                <div class="col-auto align-self-end ">
                    <button id="next-1" class="btn btn-primary" type="button" onclick="stepper1.next()">Next</button>
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
        submitWithAjax('formAccountSettings', function() {
            location.reload();
        })
        getDataWithAjax('{{ route('permit_to_work.get_data_header_cold_work') }}').done(function(data) {
            if (data != '') {
                $(".number").val(data.number);
                $(".work_order").val(data.work_order);
                $("#equipment_id").val(data.equipment_id.split('/')[0]);
                $("#tag_number").val(data.equipment_id.split('/')[1]);
                // date
                let date = new Date(data.date_application);
                // let date_format = date.getFullYear() + '-' + (date.getMonth() + 1) + '-' + date.getDate();
                let date_format = date.getFullYear() + "-" + ("0" + (date.getMonth() + 1)).slice(-2) + '-' + ("0" +
                    date.getDate()).slice(-2);
                $("#dateapplication").val(date_format);
                // direct_spv
                getDataWithAjax(
                    "{!! route('permit_to_work.find_data_direct_spv', '') !!}" + "/" + data.direct_spv).done(function(data) {
                    let direct_spv_option = new Option(data.first_name + " " + data.last_name, data.id,
                        true, true);
                    $('#direct_supervisor').append(direct_spv_option).trigger('change');
                });
                $("#equipmentid").val(data.equipment_id);
                $("#location").val(data.location);
                $("#task_description").val(data.task_description);
                // tools_equipment
                getDataWithAjax("{!! route('permit_to_work.find_data_tools_equipment', '') !!}" + "/" + data.tools_equipment).done(function(data) {
                    $.map(data, function(tools_equipment) {
                        let tools_equipment_data = new Option(tools_equipment.name,
                            tools_equipment.id, true, true);
                        $('#tools_equipment').append(tools_equipment_data).trigger('change');
                    })
                })
                // data_trades
                getDataWithAjax("{!! route('permit_to_work.find_data_trades', '') !!}" + "/" + data.trades).done(function(data) {
                    $.map(data, function(trades) {
                        let trades_data = new Option(trades.name,
                            trades.id, true, true);
                        $('#trades').append(trades_data).trigger('change');
                    })
                })
                getDataWithAjax("{!! route('permit_to_work.get_signature', '') !!}" + "/" + data.signature).done(function(data) {
                    $("#signature").val("data:image/png;base64,"+data);
                    // console.log(data);
                });
                $("#personel_involved").val(data.personel_involved);

                // signature
                $("#show").html(`<button id="show-signature" class="btn btn-success btn-sm">Show</button>`)
                $("#show-signature").click(function(e) {
                    e.preventDefault();
                    getDataWithAjax("{!! route('permit_to_work.get_signature', '') !!}" + "/" + data.signature).done(function(data) {
                        swal_usage_img('Signature', 'John Doe', data)
                        // console.log(data);
                    });
                })
            } else {
                getDataWithAjax('{{ route('permit_to_work.get_total_permits') }}').done(function(data) {
                    console.log("jumlah " + data);
                    let date_now = new Date();
                    let month_romanize = romanize(date_now.getMonth() + 1);
                    $(".number").val("HCML/" + month_romanize + "/" + date_now.getFullYear() + "/" + data);
                    $(".work_order").val(data);
                })
                $("#next-1").attr('disabled','disabled');
            }
        });

        let sig = $('#sig').signature({
            syncField: '#signature',
            syncFormat: 'PNG'
        });
        $('#clear').click(function(e) {
            e.preventDefault();
            sig.signature('clear');
            $("#signature64").val('');
        });
    </script>
@endpush
