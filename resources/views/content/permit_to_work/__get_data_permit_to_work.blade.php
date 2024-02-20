<script>
    getDataWithAjax("{!! route('permit_to_work.get_data_header_cold_work', '') !!}" + "/" + "{{ $id }}").done(function(data) {
        // console.log(data);
        // 1 PTW
        if (data.date_application != null) {
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
            getDataWithAjax("{!! route('permit_to_work.get_signature', '') !!}" + "/" + data.sign_pa).done(function(data) {
                $("#sign_pa").val("data:image/png;base64," + data);
                // console.log(data);
            });
            $("#personel_involved").val(data.personel_involved);

            // signature
            $("#show").html(`<button id="show-signature" class="btn btn-success btn-sm">Show</button>`)
            $("#show-signature").click(function(e) {
                e.preventDefault();
                getDataWithAjax("{!! route('permit_to_work.get_signature', '') !!}" + "/" + data.sign_pa).done(function(data) {
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
            $("#next-1").attr('disabled', 'disabled');
        }
        // 2 PTW
        if (data.tra_level != null) {
            console.log(data);
            checkboxChecked($('.tra_level'), 3, data.tra_level);
            $("#reference_number").val(data.reference_no);
            checkboxCheckedMulti($('.hazard'), 4, data.hazard.hazard);
            $("#hazard_other").val(data.hazard.hazard_other);
            $.each(data.controls.controls, function(key, val) {
                if (val != null) {
                    $("#b" + (key + 1)).val(val);
                }
            });
            $("#control_other").val(data.controls.control_other);
            $("#additional_ppe").val(data.controls.additional_ppe);
            checkboxCheckedMulti($('.sscr'), 4, data.sscr);
        } else {
            $("#next-2").attr('disabled', 'disabled');
        }
        // 3 PTW
        if (data.cross_referenced_certificates.permit_description != '') {
            $("#permitDesc").val(data.cross_referenced_certificates.permit_description);
            $("#isolationDesc").val(data.cross_referenced_certificates.isolation_description);
            $("#procedureDesc").val(data.cross_referenced_certificates.procedure_description);
        } else {
            $("#next-3").attr('disabled', 'disabled');
        }
        // 4 PTW
        if (data.authorisation != null) {
            console.log(data.authorisation);
            $("#designation").val(data.designation);
            $("#flammable").val(data.flammable);
            $("#h2s").val(data.h2s);
            $("#oxygen").val(data.oxygen);
            $("#approver_name_sc").val(data.approver_name_sc);
            $("#approver_name_pc").val(data.approver_name_pc);
            $("#approver_name_procedures").val(data.approver_name_procedures);
            // approval sc,pc,procedure
            getDataWithAjax(
                "{!! route('permit_to_work.find_data_approve_sc', '') !!}" + "/" + data.approver_name_sc).done(function(data) {
                let approver_sc_option = new Option(data.first_name + " " + data.last_name, data.id,
                    true, true);
                $('#approver_name_sc').append(approver_sc_option).trigger('change');
            });
            getDataWithAjax(
                "{!! route('permit_to_work.find_data_approve_pc', '') !!}" + "/" + data.approver_name_pc).done(function(data) {
                let approver_pc_option = new Option(data.first_name + " " + data.last_name, data.id,
                    true, true);
                $('#approver_name_pc').append(approver_pc_option).trigger('change');
            });
            getDataWithAjax(
                "{!! route('permit_to_work.find_data_approve_proc', '') !!}" + "/" + data.approver_name_procedures).done(function(data) {
                let approve_proc_option = new Option(data.first_name + " " + data.last_name, data.id,
                    true, true);
                $('#approver_name_procedures').append(approve_proc_option).trigger('change');
            });
        } else {
            // $("#next-4").attr('disabled', 'disabled');
        }
    });
</script>
