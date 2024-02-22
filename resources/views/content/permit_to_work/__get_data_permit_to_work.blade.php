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
            $("#designation").val(data.authorisation.designation);
            $("#flammable").val(data.site_gas_test.flammable);
            $("#h2s").val(data.site_gas_test.h2s);
            $("#oxygen").val(data.site_gas_test.oxygen);
            $("#approver_authorisation").val(data.authorisation.approver);
            $("#approver_permit_registry").val(data.permit_registry.approver);
            $("#approver_site_gas_test").val(data.site_gas_test.approver);
            // approval sc,pc,procedure
            getDataWithAjax(
                "{!! route('permit_to_work.find_data_approve_sc', '') !!}" + "/" + data.authorisation.approver).done(function(data) {
                let approver_sc_option = new Option(data.first_name + " " + data.last_name, data.id,
                    true, true);
                $('#approver_authorisation').append(approver_sc_option).trigger('change');
            });
            getDataWithAjax(
                "{!! route('permit_to_work.find_data_approve_pc', '') !!}" + "/" + data.permit_registry.approver).done(function(data) {
                let approver_pc_option = new Option(data.first_name + " " + data.last_name, data.id,
                    true, true);
                $('#approver_permit_registry').append(approver_pc_option).trigger('change');
            });
            getDataWithAjax(
                "{!! route('permit_to_work.find_data_approve_proc', '') !!}" + "/" + data.site_gas_test.approver).done(function(data) {
                let approve_proc_option = new Option(data.first_name + " " + data.last_name, data.id,
                    true, true);
                $('#approver_site_gas_test').append(approve_proc_option).trigger('change');
            });
        } else {
            // $("#next-4").attr('disabled', 'disabled');
        }
        // 5 PTW
        if (data.issue != '') {
            $("#issue").val(data.issue.approver);
            $("#acceptance").val(data.acceptance.approver);
            // app[]roval sc,pc,procedure
            getDataWithAjax(
                "{!! route('permit_to_work.find_data_issue_aa', '') !!}" + "/" + data.issue.approver).done(function(data) {
                let issue_option = new Option(data.first_name + " " + data.last_name, data.id,
                    true, true);
                $('#issue').append(issue_option).trigger('change');
            });
            getDataWithAjax(
                "{!! route('permit_to_work.find_data_acceptance_pa', '') !!}" + "/" + data.acceptance.approver).done(function(data) {
                let acceptance_option = new Option(data.first_name + " " + data.last_name, data.id,
                    true, true);
                $('#acceptance').append(acceptance_option).trigger('change');
            });
        } else {
            $("#next-5").attr('disabled', 'disabled');
        }
        // 6 PTW
        if (data.close_out_pa != '') {
            $("#closed_out_pa").val(data.close_out_pa.approver);
            $("#closed_out_aa").val(data.close_out_aa.approver);
            $.each($('.work_status_pa'), function(key, value) {
                if (value.attributes[4].nodeValue == data.close_out_pa.status_work) {
                    console.log();
                    value.checked = true;
                }
            });
            $.each($('.work_status_aa'), function(key, value) {
                if (value.attributes[4].nodeValue == data.close_out_aa.status_work) {
                    value.checked = true;
                }
            });
            // approval 3
            getDataWithAjax(
                "{!! route('permit_to_work.find_data_closed_out_pa', '') !!}" + "/" + data.close_out_pa.approver).done(function(data) {
                let closed_out_pa_option = new Option(data.first_name + " " + data.last_name, data.id,
                    true, true);
                $('#closed_out_pa').append(closed_out_pa_option).trigger('change');
            });
            getDataWithAjax(
                "{!! route('permit_to_work.find_data_closed_out_aa', '') !!}" + "/" + data.close_out_aa.approver).done(function(data) {
                let closed_out_aa_option = new Option(data.first_name + " " + data.last_name, data.id,
                    true, true);
                $('#closed_out_aa').append(closed_out_aa_option).trigger('change');
            });
        } else {
            $("#next-6").attr('disabled', 'disabled');
        }
        // 7 PTW
        if (data.regis_work_pa != '') {
            $("#regis_work_pa").val(data.regis_work_pa.approver);
            // approval 3
            getDataWithAjax(
                "{!! route('permit_to_work.find_data_regis_work_pa', '') !!}" + "/" + data.regis_work_pa.approver).done(function(data) {
                let regis_work_pa_option = new Option(data.first_name + " " + data.last_name, data.id,
                    true, true);
                $('#regis_work_pa').append(regis_work_pa_option).trigger('change');
            });
        } else {
            // $("#next-7").attr('disabled','disabled');
        }
    });
</script>
