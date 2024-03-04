<a href="{{ route('permit_to_work.show', ['id' => $value->id]) }}" class="badge bg-label-primary" target="_blank"><i
        class="bx bx-pencil bx-xs"></i></a>
<a href="{{ route('permit_to_work.detail', ['id' => $value->id]) }}" class="badge bg-label-primary" target="_blank"><i
        class="bx bx-file-blank bx-xs"></i></a>
<a href="javascript:void(0)" onclick="deletePTW( {{ $value->id }})" class="badge bg-label-primary"><i
        class="bx bx-trash-alt bx-xs"></i></a>
