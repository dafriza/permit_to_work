<div class="card mt-5">
    <div class="card-header bg-primary py-3" style="color: white;">
        Task Description
    </div>
    <div class="table-responsive">
        <table class="table table-bordered task_description">
            <tr>
                <td>Number : </td>
                <td>{{ $detail_request->number }}</td>
            </tr>
            <tr>
                <td>Work Order : </td>
                <td>{{ $detail_request->work_order }}</td>
            </tr>
            <tr>
                <td>Date Application : </td>
                <td>{{ $detail_request->date_detail_request }}</td>
            </tr>
            <tr>
                <td>Request By PA : </td>
                <td>{{ $detail_request->get_pa_name }}</td>
            </tr>
            <tr>
                <td>Direct Supervisor : </td>
                <td>{{ $detail_request->get_spv_name }}</td>
            </tr>
            <tr>
                <td>Equipment ID / Tag Number : </td>
                <td>{{ $detail_request->get_tools_equipment }}</td>
            </tr>
            <tr>
                <td>Location : </td>
                <td>{{ $detail_request->location }}</td>
            </tr>
            <tr>
                <td>Task Description : </td>
                <td>{{ $detail_request->task_description }}</td>
            </tr>
            {{-- <tr>
                <td>Tools / Requirements : </td>
                <td>balbla</td>
            </tr> --}}
            <tr>
                <td>Trades : </td>
                <td>{{ $detail_request->get_trades }}</td>
            </tr>
            <tr>
                <td>Number of Personal Involved : </td>
                <td>{{ $detail_request->personel_involved }}</td>
            </tr>
        </table>
    </div>
</div>
