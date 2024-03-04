<div class="card mt-5">
    <div class="card-header bg-primary py-3" style="color: white;">
        Circulation
    </div>
    <div class="table-responsive">
        <table class="table table-bordered task_description">
            <tr>
                <td>Authorization SC : </td>
                <td>{{ $detail_request->get_authorisation_name }}</td>
            </tr>
            <tr>
                <td>Designation : </td>
                <td>{{ $detail_request->authorisation->designation }}</td>
            </tr>
            <tr>
                <td>Permit Registry PC : </td>
                <td>{{ $detail_request->get_permit_registry_name }}</td>
            </tr>
            <tr>
                <td>Site Gas Test (Where Applicable) </td>
                <td>{{ $detail_request->get_site_gas_test_name }}
                    <br>
                    <table class="table table-bordered">
                        <tr>
                            <td>Flammable : {{ $detail_request->site_gas_test->flammable }} % LEL
                            </td>
                        </tr>
                        <tr>
                            <td>H2S : {{ $detail_request->site_gas_test->h2s }} PPM</td>
                        </tr>
                        <tr>
                            <td>Oxygen : {{ $detail_request->site_gas_test->oxygen }} %</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>Issue AA </td>
                <td>{{ $detail_request->get_issue_name }}</td>
            </tr>
            <tr>
                <td>Acceptance AA </td>
                <td>{{ $detail_request->get_acceptance_name }}</td>
            </tr>
            <tr>
                <td>Closed Out PA </td>
                <td>{{ $detail_request->get_close_out_pa_name }}</td>
            </tr>
            <tr>
                <td>Closed Out AA </td>
                <td>{{ $detail_request->get_close_out_aa_name }}</td>
            </tr>
            <tr>
                <td>Registry of Work Completion PA </td>
                <td>{{ $detail_request->get_registry_name }}</td>
            </tr>
        </table>
    </div>
</div>
