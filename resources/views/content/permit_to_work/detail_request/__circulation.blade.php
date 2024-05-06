<div class="card mt-5">
    <div class="card-header bg-primary py-3" style="color: white;">
        Circulation
    </div>
    <div class="table-responsive">
        <table class="table table-bordered task_description">
            <tr>
                <td>Authorization SC : </td>
                <td>{{ $detail_request->get_authorisation_name }}
                    @if ($statusAssignmentApprove['authorisation'] == 'success')
                        <button class="btn btn-icon btn-success btn-xs"><i class="bx bx-check"></i></button>
                    @elseif ($statusAssignmentApprove['authorisation'] == 'draft')
                        <button class="btn btn-icon btn-secondary btn-xs"><i class="bx bx-pause"></i></button>
                    @else
                        <button class="btn btn-icon btn-danger btn-xs"><i class="bx bx-x"></i></button>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Designation : </td>
                <td>{{ $detail_request->authorisation->designation }}</td>
            </tr>
            <tr>
                <td>Permit Registry PC : </td>
                <td>{{ $detail_request->get_permit_registry_name }}
                    @if ($statusAssignmentApprove['permit_registry'] == 'success')
                        <button class="btn btn-icon btn-success btn-xs"><i class="bx bx-check"></i></button>
                    @elseif ($statusAssignmentApprove['permit_registry'] == 'draft')
                        <button class="btn btn-icon btn-secondary btn-xs"><i class="bx bx-pause"></i></button>
                    @else
                        <button class="btn btn-icon btn-danger btn-xs"><i class="bx bx-x"></i></button>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Site Gas Test (Where Applicable) </td>
                <td>{{ $detail_request->get_site_gas_test_name }}
                    @if ($statusAssignmentApprove['site_gas_test'] == 'success')
                        <button class="btn btn-icon btn-success btn-xs"><i class="bx bx-check"></i></button>
                    @elseif ($statusAssignmentApprove['site_gas_test'] == 'draft')
                        <button class="btn btn-icon btn-secondary btn-xs"><i class="bx bx-pause"></i></button>
                    @else
                        <button class="btn btn-icon btn-danger btn-xs"><i class="bx bx-x"></i></button>
                    @endif
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
                <td>{{ $detail_request->get_issue_name }}
                    @if ($statusAssignmentApprove['issue'] == 'ready_to_execute')
                        <button class="btn btn-icon btn-success btn-xs"><i class="bx bx-right-arrow"></i></button>
                    @elseif ($statusAssignmentApprove['issue'] == 'draft')
                        <button class="btn btn-icon btn-secondary btn-xs"><i class="bx bx-pause"></i></button>
                    @else
                        <button class="btn btn-icon btn-danger btn-xs"><i class="bx bx-x"></i></button>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Acceptance AA </td>
                <td>{{ $detail_request->get_acceptance_name }}
                    @if ($statusAssignmentApprove['acceptance'] == 'working_on_progress')
                        <button class="btn btn-icon btn-success btn-xs"><i class="bx bx-wrench"></i></button>
                    @elseif ($statusAssignmentApprove['acceptance'] == 'draft')
                        <button class="btn btn-icon btn-secondary btn-xs"><i class="bx bx-pause"></i></button>
                    @else
                        <button class="btn btn-icon btn-danger btn-xs"><i class="bx bx-x"></i></button>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Closed Out PA </td>
                <td>{{ $detail_request->get_close_out_pa_name }}
                    @if ($statusAssignmentApprove['close_out_pa'] == 'success')
                        <button class="btn btn-icon btn-success btn-xs"><i class="bx bx-check"></i></button>
                    @elseif ($statusAssignmentApprove['close_out_pa'] == 'draft')
                        <button class="btn btn-icon btn-secondary btn-xs"><i class="bx bx-pause"></i></button>
                    @else
                        <button class="btn btn-icon btn-danger btn-xs"><i class="bx bx-x"></i></button>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Closed Out AA </td>
                <td>{{ $detail_request->get_close_out_aa_name }}
                    @if ($statusAssignmentApprove['close_out_aa'] == 'close_out')
                        <button class="btn btn-icon btn-success btn-xs"><i class="bx bx-lock-alt"></i></button>
                    @elseif ($statusAssignmentApprove['close_out_aa'] == 'draft')
                        <button class="btn btn-icon btn-secondary btn-xs"><i class="bx bx-pause"></i></button>
                    @else
                        <button class="btn btn-icon btn-danger btn-xs"><i class="bx bx-x"></i></button>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Registry of Work Completion PA </td>
                <td>{{ $detail_request->get_registry_name }}
                    @if ($statusAssignmentApprove['registry_of_work_completion'] == 'success')
                    <button class="btn btn-icon btn-success btn-xs"><i class="bx bx-check"></i></button>
                    @elseif ($statusAssignmentApprove['registry_of_work_completion'] == 'draft')
                    <button class="btn btn-icon btn-secondary btn-xs"><i class="bx bx-pause"></i></button>
                    @else
                    <button class="btn btn-icon btn-danger btn-xs"><i class="bx bx-x"></i></button>
                    @endif
                </td>
            </tr>
        </table>
    </div>
</div>
