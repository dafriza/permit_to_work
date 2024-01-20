<div class="card mt-5">
    <div class="card-header bg-primary py-3" style="color: white;">
        Cross Referenced Certificates PA & AA
    </div>
    <div class="table-responsive">
        <table class="table table-bordered task_description">
            <tr>
                <td>Permit Description : </td>
                <td>{{ $detail_request->cross_referenced_certificates->permit }}</td>
            </tr>
            <tr>
                <td>Isolation : </td>
                <td>{{ $detail_request->cross_referenced_certificates->isolation }}</td>
            </tr>
            <tr>
                <td>Procedures/MSDS/LIFTING PLAN/JSA/Others : </td>
                <td>{{ $detail_request->cross_referenced_certificates->Others }}</td>
            </tr>
        </table>
    </div>
</div>
