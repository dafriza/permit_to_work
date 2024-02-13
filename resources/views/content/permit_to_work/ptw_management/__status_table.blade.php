@if ($value->status == 1)
    <span class="badge bg-label-warning me-1">On going</span>
@elseif ($value->status == 2)
    <span class="badge bg-label-success me-1">Success</span>
@elseif ($value->status == 3)
    <span class="badge bg-label-danger me-1">Rejected</span>
@elseif ($value->status == 4)
    <span class="badge bg-label-secondary me-1">Draft</span>
@endif
