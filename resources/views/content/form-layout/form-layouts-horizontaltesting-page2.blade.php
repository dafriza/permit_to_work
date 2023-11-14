@extends('layouts/contentNavbarLayout')

@section('title', ' HCML V2 Testing Page 2')

@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span><span class="text-muted fw-light">Permit To Work/</span>Page 2</h4>

    <div class="col-xxl">
        <div class="card mb-4">
            <div class="hstack gap-3">
                <div class="p-2"><h1>HCML</h1></div>
                <div class="p-2 ms-auto"><h4 style="text-align: center">PERMIT TO WORK <br> COLD WORK</h4></div>
                <div class="p-2 ms-auto"><pre>Number     <input type="text"><br>Work Order <input type="text"></pre></div>
              </div>
        </div>
    </div>

    <div class="row">
        <div class="card">
            <h5 class="card-header" style="text-align: left">3. Cross Referenced Certificates</h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-nowrap">
                            <th>Permit/Ijin</th>
                            <th>Isolation/Isolasi</th>
                            <th>PROCEDURES/MSDS/LIFTING PLAN/JSA/OTHERS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><textarea></textarea></td>
                            <td><textarea></textarea></td>
                            <td><textarea></textarea></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p></p>
            <h5 class="card-header" style="text-align: left">4. Submission</h5>
            <div class="table-responsive text-nowrap">
                <p>*by completing this permit to work form please generate approvable format by using this button. 
                    Click on submit with notification button <br>will open an Outlook app with template
                    body email and required to be sent</p>
                <p>*please select designated approval</p>
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-nowrap">
                            <th>Site Controller</th>
                            <td>Suprianto K</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Area Authority</th>
                            <td>Elkana Rudy</td>
                        </tr>
                        <tr>
                            <th>Permit Controller</th>
                            <td>Jeffray Gultam</td>
                        </tr>
                    </tbody>
                </table>
                <div class="mt-2 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary me-2" style="background-color: greenyellow">Submit With Notification</button>
                </div>
                <br>
            </div>
            <hr style="border: 5px solid">
            <p></p>
            <h5 class="card-header" style="text-align: left">5. Authorization and Issuing</h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-nowrap">
                            <th>Authorization</th>
                            <td>Site Controller</td>
                            <td>Sign</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Permit Registry</th>
                            <td>Permit Controller</td>
                            <td>Sign</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Site Gas Test</th>
                            <td>Authorized Gas Tester</td>
                            <td>Sign</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Issue</th>
                            <td>Area Authority</td>
                            <td>Sign</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Acceptance</th>
                            <td>Performing Authority</td>
                            <td>Sign</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p></p>
            <h5 class="card-header" style="text-align: left">6. Completion</h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-nowrap">
                            <th>Close Out</th>
                            <td>Performing Authority</td>
                            <td>Sign</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Close Out</th>
                            <td>Area Authority</td>
                            <td>Sign</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Registry Work Completion</th>
                            <td>Permit Controller</td>
                            <td>Sign</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <hr style="border: 5px solid">
            <p></p>
        </div>
    </div>

    </div>

@endsection