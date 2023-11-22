dynamicSelect2('tools_equipment', '{!! route('permit_to_work.get_data_tools_equipment') !!}');
dynamicSelect2('direct_supervisor', '{!! route('permit_to_work.get_data_spv') !!}');
dynamicSelect2('trades', '{!! route('permit_to_work.get_data_trades') !!}');
submitWithAjax('formAccountSettings')
getDataWithAjax('{{ route('permit_to_work.get_data_header_cold_work') }}').done(function (data) {
  if (data != '') {
    let date = new Date(data.date_application);
    let date_format = date.getFullYear() + '-' + (date.getMonth() + 1) + '-' + date.getDate();
    $("#dateapplication").val(date_format);
    getDataWithAjax(
      "{!! route('permit_to_work.find_data_direct_spv', '') !!}" + "/" + data.direct_spv).done(function (data) {
        let direct_spv_option = new Option(data.first_name + " " + data.last_name, data.id, true, true);
        $('#direct_supervisor').append(direct_spv_option).trigger('change');
      });
    $("#equipmentid").val(data.equipment_id);
    $("#location").val(data.location);
    $("#task_description").val(data.task_description);
    getDataWithAjax("{!! route('permit_to_work.find_data_tools_equipment', '') !!}" + "/" + data.tools_equipment).done(function (data) {
      $.map(data, function (tools_equipment) {
        let tools_equipment_data = new Option(tools_equipment.name,
          tools_equipment.id, true, true);
        $('#tools_equipment').append(tools_equipment_data).trigger('change');
      })
    })
    getDataWithAjax("{!! route('permit_to_work.find_data_trades', '') !!}" + "/" + data.trades).done(function (data) {
      $.map(data, function (trades) {
        let trades_data = new Option(trades.name,
          trades.id, true, true);
        $('#trades').append(trades_data).trigger('change');
      })
    })
    $("#personel_involved").val(data.personel_involved);
  }
});
