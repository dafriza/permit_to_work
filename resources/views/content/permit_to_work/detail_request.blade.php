@extends('layouts/contentNavbarLayout')
@section('title', ' Horizontal Form ')
@push('styles')
    <style>
        .task_description tr td:nth-child(odd) {
            width: 30%;
        }
    </style>
@endpush
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col ">
                <h4><span class="text-muted">PTW Management /</span> Detail PTW Request</h4>
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center">PERMIT TO WORK <br> DETAIL</h4>
                        {{-- <br>
                        <div class="row justify-content-end">
                            <div class="col-auto">
                                <button class="btn btn-secondary">Print</button>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-primary">Download</button>
                            </div>
                        </div> --}}
                        {{-- task description --}}
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
                        {{-- tra --}}
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
                        {{-- crc --}}
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
                        {{-- circulation --}}
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
                                        <td>{{ ucfirst(Auth::user()->role_assignment) }}</td>
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
                    </div>
                    <div class="row justify-content-end mb-3" style="margin-right:1rem !important">
                        <div class="col-auto">
                            <form id="approve_request" action="{{ route('permit_to_work.management.approve_request') }}"
                                method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $detail_request->id }}">
                                <button class="btn btn-success {{ $if_success == 'draft' ? '' : 'disabled' }}"
                                    type="submit">Approve</button>
                                {{-- <button class="btn btn-success" type="submit">Approve</button> --}}
                            </form>
                        </div>
                        <div class="col-auto">
                            <form id="reject_request" action="{{ route('permit_to_work.management.reject_request') }}"
                                method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $detail_request->id }}">
                                <button class="btn btn-danger {{ $if_success == 'draft' ? '' : 'disabled' }}"
                                    type="submit">Reject</button>
                                {{-- <button class="btn btn-danger" type="submit">Reject</button> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('assets/js/http_ajax.js') }}"></script>
        <script>
            submitWithAjax("approve_request", function() {
                setTimeout(function() {
                    location.reload();
                }, 1500);
            })
            submitWithAjax("reject_request", function() {
                setTimeout(function() {
                    location.reload();
                }, 1500);
            })
        </script>
    @endpush
@endsection
