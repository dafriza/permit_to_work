<div class="card mt-5">
    <div class="card-header bg-primary py-3" style="color: white;">
        TRA
    </div>
    <div class="table-responsive">
        <table class="table table-bordered task_description">
            <tr>
                <td>Reference Number : </td>
                <td>{{ $detail_request->reference_no }}</td>
            </tr>
            <tr>
                <td>Hazard : </td>
                <td>{{ $detail_request->get_hazards }}</td>
            </tr>
            <tr>
                <td>Hazard Others : </td>
                <td>{{ $detail_request->hazard->hazard_other }}</td>
            </tr>
            <tr>
                <td>Control : </td>
                <td>{{ $detail_request->get_controls }}</td>
            </tr>
            <tr>
                <td>Control Others : </td>
                <td>{{ $detail_request->controls->controls_other }}</td>
            </tr>
            <tr>
                <td>Specific Safety Control Requirements for the job : </td>
                <td>{{ $detail_request->get_sscr }}</td>
            </tr>
        </table>
    </div>
</div>
