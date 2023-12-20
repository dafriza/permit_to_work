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
                        <br>
                        <div class="row justify-content-end">
                            <div class="col-auto">
                                <button class="btn btn-secondary">Print</button>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-primary">Download</button>
                            </div>
                        </div>
                        {{-- task description --}}
                        <div class="card mt-5">
                            <div class="card-header bg-primary py-3" style="color: white;">
                                Task Description
                            </div>
                            <div class="table-responsive text-nowrap">
                                <table class="table table-bordered task_description">
                                    <tr>
                                        <td>Number : </td>
                                        <td>balbla</td>
                                    </tr>
                                    <tr>
                                        <td>Work Order : </td>
                                        <td>balbla</td>
                                    </tr>
                                    <tr>
                                        <td>Date Application : </td>
                                        <td>balbla</td>
                                    </tr>
                                    <tr>
                                        <td>Request By PA : </td>
                                        <td>balbla</td>
                                    </tr>
                                    <tr>
                                        <td>Direct Supervisor : </td>
                                        <td>balbla</td>
                                    </tr>
                                    <tr>
                                        <td>Equipment ID / Tag Number : </td>
                                        <td>balbla</td>
                                    </tr>
                                    <tr>
                                        <td>Location : </td>
                                        <td>balbla</td>
                                    </tr>
                                    <tr>
                                        <td>Task Description : </td>
                                        <td>balbla</td>
                                    </tr>
                                    <tr>
                                        <td>Tools / Requirements : </td>
                                        <td>balbla</td>
                                    </tr>
                                    <tr>
                                        <td>Trades : </td>
                                        <td>balbla</td>
                                    </tr>
                                    <tr>
                                        <td>Number of Personal Involved : </td>
                                        <td>balbla</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        {{-- tra --}}
                        <div class="card mt-5">
                            <div class="card-header bg-primary py-3" style="color: white;">
                                TRA
                            </div>
                            <div class="table-responsive text-nowrap">
                                <table class="table table-bordered task_description">
                                    <tr>
                                        <td>Reference Number : </td>
                                        <td>balbla</td>
                                    </tr>
                                    <tr>
                                        <td>Hazard : </td>
                                        <td>balbla</td>
                                    </tr>
                                    <tr>
                                        <td>Hazard Others : </td>
                                        <td>balbla</td>
                                    </tr>
                                    <tr>
                                        <td>Control : </td>
                                        <td>balbla</td>
                                    </tr>
                                    <tr>
                                        <td>Control Others : </td>
                                        <td>balbla</td>
                                    </tr>
                                    <tr>
                                        <td>Specific Control Requirements for the job : </td>
                                        <td>balbla</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        {{-- crc --}}
                        <div class="card mt-5">
                            <div class="card-header bg-primary py-3" style="color: white;">
                                Cross Referenced Certificates PA & AA
                            </div>
                            <div class="table-responsive text-nowrap">
                                <table class="table table-bordered task_description">
                                    <tr>
                                        <td>Permit Description : </td>
                                        <td>balbla</td>
                                    </tr>
                                    <tr>
                                        <td>Isolation : </td>
                                        <td>balbla</td>
                                    </tr>
                                    <tr>
                                        <td>Procedures/MSDS/LIFTING PLAN/JSA/Others : </td>
                                        <td>balbla</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        {{-- circulation --}}
                        <div class="card mt-5">
                            <div class="card-header bg-primary py-3" style="color: white;">
                                Circulation
                            </div>
                            <div class="table-responsive text-nowrap">
                                <table class="table table-bordered task_description">
                                    <tr>
                                        <td>Authorization SC : </td>
                                        <td>balbla</td>
                                    </tr>
                                    <tr>
                                        <td>Designation : </td>
                                        <td>balbla</td>
                                    </tr>
                                    <tr>
                                        <td>Permit Registry PC : </td>
                                        <td>balbla</td>
                                    </tr>
                                    <tr>
                                        <td>Site Gas Test (Where Applicable) </td>
                                        <td>balbla</td>
                                    </tr>
                                    <tr>
                                        <td>Issue AA </td>
                                        <td>balbla</td>
                                    </tr>
                                    <tr>
                                        <td>Acceptance AA </td>
                                        <td>balbla</td>
                                    </tr>
                                    <tr>
                                        <td>Closed Out PA </td>
                                        <td>balbla</td>
                                    </tr>
                                    <tr>
                                        <td>Closed Out AA </td>
                                        <td>balbla</td>
                                    </tr>
                                    <tr>
                                        <td>Registry of Work Completion PA </td>
                                        <td>balbla</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
