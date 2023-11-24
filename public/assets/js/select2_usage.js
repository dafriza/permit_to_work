// $('#direct_supervisor').select2({
//   // minimumInputLength: 2,
//   ajax: {
//     url: function (params) {
//       return '{!! route('permit_to_work.get_data_spv') !!}';
//     },
//     processResults: function (data) {
//       console.log(data);
//       return {
//         results: $.map(data, function (item) {
//           return {
//             id: item.id,
//             text: item.first_name + ' ' + item.last_name,
//           }
//         })
//       };
//     },
//     cache: true,
//   },
//   theme: "bootstrap-5",
//   width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
//   placeholder: $(this).data('placeholder'),
// });

// $('#tools_equipment').select2({
//   // minimumInputLength: 2,
//   ajax: {
//     url: function (params) {
//       return '{!! route('permit_to_work.get_data_tools_equipment') !!}';
//     },
//     processResults: function (data) {
//       return {
//         results: $.map(data, function (item) {
//           return {
//             id: item.id,
//             text: item.name,
//           }
//         })
//       };
//     },
//     cache: true,
//   },
//   theme: "bootstrap-5",
//   width: 'resolve',
//   placeholder: $(this).data('placeholder'),
// });

function dynamicSelect2(target, url) {
  return $('#' + target).select2({
    // minimumInputLength: 2,
    ajax: {
      url: function (params) {
        return url;
      },
      // processResults: function (data) {
      //   return {
      //     results: $.map(data, function (item) {
      //       return {
      //         id: item.id,
      //         text: item.data_name
      //       }
      //     })
      //   };
      // },
      cache: true,
    },
    theme: "bootstrap-5",
    width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
    placeholder: $(this).data('placeholder'),
  });
}
