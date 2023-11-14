@extends('layouts/contentNavbarLayout')

@section('title', ' H2S Form ')

@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span><span class="text-muted fw-light">/</span>H2S
    </h4>
    <div class="row">
        <div class="card mb-4" style="background-color: gold">
            <div class="card-body">
                <form id="h2sForm" method="POST" onsubmit="return false">
                    <div class="row">
                        <div class="container text-center">
                            <div class="row" style="background-color: white">
                                <div class="col" style="border: 1px solid">
                                    <h1>
                                        <p></p>HCML
                                    </h1>
                                </div>
                                <div class="col-6" style="border: 1px solid">
                                    <p><br><b>HEALTH, SAFETY AND ENVIRONMENT MANAGEMENT SYSTEM<br>H2S ENTRY PERMIT</b></p>
                                </div>
                                <div class="col" style="border: 1px solid">
                                    <p><br>Doc No : HCML.HSE.FRM.028 Level : 4</p>
                                </div>
                            </div>
                        </div>
                        <P></P>
                        <div class="mb-3 col-md-3">
                        </div>
                        <div class="mb-3 col-md-3">
                        </div>
                        <div class="mb-3 col-md-3">
                            <p style="text-align:right"><b>Number</b></p>
                        </div>
                        <div class="mb-3 col-md-3">
                            <input type="text" class="form-control" id="directspv" name="directspv" />
                        </div>
                        <div class="mb-3 col-md-3">
                        </div>
                        <div class="mb-3 col-md-3">
                        </div>
                        <div class="mb-3 col-md-3">
                            <p style="text-align: end"><b>Work Order No</b></p>
                        </div>
                        <div class="mb-3 col-md-3">
                            <input type="text" class="form-control" id="directspv" name="directspv" />
                        </div>

                        <p></p>

                        <div class="container">

                            <!-- 1 - 4 -->
                            <div class="row" style="background-color: white">

                                <!-- Left Box -->

                                <div class="col" style="border: 1px solid">
                                    <div class="mb-3">
                                        <h5><b>1. Task Description</b></h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>Performing Authority Name : </p>
                                            <input type="text" style="align-content: flex-start">
                                        </div>
                                        <div class="col-6">
                                            <p>Department : </p>
                                            <input type="text">
                                        </div>
                                        <div class="col-6">
                                            <p>Date Issued : </p>
                                            <input type="text">
                                        </div>
                                        <div class="col-6">
                                            <p>Time Issued : </p>
                                            <input type="text">
                                        </div>
                                        <div class="col-6">
                                            <p>Location : </p>
                                            <input type="text">
                                        </div>
                                        <div class="col-12">
                                            <p>Work to Be Performed : </p>
                                            <input type="text">
                                        </div>
                                        <div class="col-12">
                                            <p>Permit Entrants (List Name)</p>
                                            <textarea></textarea>
                                        </div>
                                    </div>

                                    <!-- 2. Additional Permits of Forms -->
                                    <p></p>
                                    <div class="row">
                                        <h5><b>2. Additional Permits of Forms (Please Attach if required)</b></h5>
                                        <div class="col-4">
                                            <p>Confined Space Entry Permit</p>
                                        </div>
                                        <div class="col-4">
                                            <input type="checkbox">
                                            Yes
                                        </div>
                                        <div class="col-4">
                                            <input type="checkbox">
                                            No
                                        </div>
                                        <div class="col-4">
                                            <p>Hot Work Permit</p>
                                        </div>
                                        <div class="col-4">
                                            <input type="checkbox">
                                            Yes
                                        </div>
                                        <div class="col-4">
                                            <input type="checkbox">
                                            No
                                        </div>
                                        <div class="col-4">
                                            <p>Cold Work Permit</p>
                                        </div>
                                        <div class="col-4">
                                            <input type="checkbox">
                                            Yes
                                        </div>
                                        <div class="col-4">
                                            <input type="checkbox">
                                            No
                                        </div>
                                    </div>

                                    <!-- 3. Preparation required for Entry & Work (Check box when complete) -->
                                    <p></p>
                                    <div class="row">
                                        <h5><b>3. Preparation required for Entry & Work (Check box when complete)</b></h5>
                                        <div class="col-4">
                                            <p><b>1. Personal Protective Equipment (For All Permit Entrants)</b></p>
                                        </div>
                                        <div class="col-4">
                                            <input type="checkbox">
                                            Yes
                                        </div>
                                        <div class="col-4">
                                            <input type="checkbox">
                                            No
                                        </div>
                                        <p><b>2. H2S Monitoring Equipment<br>(For all Permit Entrants)</b></p>
                                        <div class="col-4">
                                            <p>a. Gas Detector</p>
                                        </div>
                                        <div class="col-4">
                                            <input type="checkbox">
                                            Yes
                                        </div>
                                        <div class="col-4">
                                            <input type="checkbox">
                                            No
                                        </div>
                                    </div>

                                </div>

                                <!-- Right Box -->

                                <div class="col" style="border: 1px solid">
                                    <div class="row">
                                        <p></p>
                                        <p></p>
                                        <div class="col-4">
                                            <p>b. Have Gas Detectors been calibrated?</p>
                                        </div>
                                        <div class="col-4">
                                            <input type="checkbox">
                                            Yes
                                        </div>
                                        <div class="col-4">
                                            <input type="checkbox">
                                            No
                                        </div>
                                        <div class="col-4">
                                            <p>c. Have Gas Detectors been bumped tested </p>
                                        </div>
                                        <div class="col-4">
                                            <input type="checkbox">
                                            Yes
                                        </div>
                                        <div class="col-4">
                                            <input type="checkbox">
                                            No
                                        </div>

                                        <p><b>3. Respiratory Equipment (For all Permit Entrants)</b></p>
                                        <div class="col-12">
                                            <input type="checkbox">
                                            Self-Contained Breathing Apparatus (SCBA)
                                        </div>
                                        <div class="col-12">
                                            <input type="checkbox">
                                            Supplied Air Breathing Apparatus (SABA)
                                        </div>
                                        <div class="col-12">
                                            <input type="checkbox">
                                            Emergency Escape Breathing Apparatus (EEBA)
                                        </div>
                                        <div class="col-12">
                                            <input type="checkbox">
                                            Gas Mask
                                        </div>

                                        <p></p>
                                        <div class="col-4">
                                            <p><b>4. H2S Training Certification (For all Permit Entrants) </b></p>
                                        </div>
                                        <div class="col-4">
                                            <input type="checkbox">
                                            Yes
                                        </div>
                                        <div class="col-4">
                                            <input type="checkbox">
                                            No
                                        </div>

                                        <p></p>
                                        <div class="col-4">
                                            <p><b>5. Safety Induction (For all permit entrants)</b></p>
                                        </div>
                                        <div class="col-4">
                                            <input type="checkbox">
                                            Yes
                                        </div>
                                        <div class="col-4">
                                            <input type="checkbox">
                                            No
                                        </div>

                                        <p></p>
                                        <div class="col-4">
                                            <p><b>6. Buddy System (For all Permit Entrants) </b></p>
                                        </div>
                                        <div class="col-4">
                                            <input type="checkbox">
                                            Yes
                                        </div>
                                        <div class="col-4">
                                            <input type="checkbox">
                                            No
                                        </div>

                                        <p></p>
                                        <div class="col-4">
                                            <p><b>7. Performing Authority Notify to respective Area Authority</b></p>
                                        </div>
                                        <div class="col-4">
                                            <input type="checkbox">
                                            Yes
                                        </div>
                                        <div class="col-4">
                                            <input type="checkbox">
                                            No
                                        </div>
                                    </div>

                                    <!-- 4. Communication Method -->
                                    <p></p>
                                    <h5><b>4. Communication Method</b></h5>
                                    <div class="row">
                                        <div class="col-12">
                                            <input type="checkbox">
                                            Radio
                                        </div>
                                        <div class="col-12">
                                            <input type="checkbox">
                                            Voice
                                        </div>
                                        <div class="col-12">
                                            <input type="checkbox">
                                            Other (Please Specify)
                                            <p></p>
                                            <textarea></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p></p>

                            <!-- 5 - 8 -->
                            <div class="row" style="background-color: white">
                                <div class="card">

                                    <!-- 5. H2S Initial Gas Testing -->
                                    <h5 class="card-header" style="text-align: left"><b>5. H2S Initial Gas Testing</b>
                                    </h5>
                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr class="text-nowrap">
                                                    <th>Date</th>
                                                    <th>Time</th>
                                                    <th>Tester No.</th>
                                                    <th>H2S (ppm)</th>
                                                    <th>AGT Name</th>
                                                    <th>AGT Signature</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <!-- Row 1 -->
                                                <tr>
                                                    <th scope="row">
                                                        <div class="p-10">
                                                            <input class="form-check-input-inline" type="text">
                                                        </div>
                                                    </th>
                                                    <th scope="row">
                                                        <div class="p-10">
                                                            <input class="form-check-input-inline" type="text">
                                                        </div>
                                                    </th>
                                                    <th scope="row">
                                                        <div class="p-10">
                                                            <input class="form-check-input-inline" type="text">
                                                        </div>
                                                    </th>
                                                    <th scope="row">
                                                        <div class="p-10">
                                                            <input class="form-check-input-inline" type="text">
                                                        </div>
                                                    </th>
                                                    <th scope="row">
                                                        <div class="p-10">
                                                            <input class="form-check-input-inline" type="text">
                                                        </div>
                                                    </th>
                                                    <th scope="row">
                                                        <div class="p-10">
                                                            <input class="form-check-input-inline" type="text">
                                                        </div>
                                                    </th>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p></p>
                                        <p></p>
                                    </div>

                                    <!-- 6. Regular Gas Testing (Every 2 Hours) -->
                                    <h5 class="card-header" style="text-align: left"><b>6. Regular Gas Testing (Every 2
                                            Hours)</b></h5>
                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr class="text-nowrap">
                                                    <th>Date</th>
                                                    <th>Time</th>
                                                    <th>Tester No.</th>
                                                    <th>H2S (ppm)</th>
                                                    <th>AGT Name</th>
                                                    <th>AGT Signature</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <!-- Row 1 -->
                                                <tr>
                                                    <th scope="row">
                                                        <div class="p-10">
                                                            <input class="form-check-input-inline" type="text">
                                                        </div>
                                                    </th>
                                                    <th scope="row">
                                                        <div class="p-10">
                                                            <input class="form-check-input-inline" type="text">
                                                        </div>
                                                    </th>
                                                    <th scope="row">
                                                        <div class="p-10">
                                                            <input class="form-check-input-inline" type="text">
                                                        </div>
                                                    </th>
                                                    <th scope="row">
                                                        <div class="p-10">
                                                            <input class="form-check-input-inline" type="text">
                                                        </div>
                                                    </th>
                                                    <th scope="row">
                                                        <div class="p-10">
                                                            <input class="form-check-input-inline" type="text">
                                                        </div>
                                                    </th>
                                                    <th scope="row">
                                                        <div class="p-10">
                                                            <input class="form-check-input-inline" type="text">
                                                        </div>
                                                    </th>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p></p>
                                        <p></p>
                                    </div>

                                    <!-- 7. Authorization by Site Controller (SC) and Area Authorizer (AA) -->
                                    <h5 class="card-header" style="text-align: left"><b>7. Authorization by Site
                                            Controller (SC) and Area Authorizer (AA)</b></h5>
                                    <p>I certify that all required precautions have been taken and necessary equipments is
                                        provided for safe entry and work in this H2S area.</p>
                                    <div class="row">
                                        <div class="col-3">
                                            <p>Printed Name (SC)</p>
                                            <input type="text">
                                        </div>
                                        <div class="col-3">
                                            <p>Signature</p>
                                            <input type="text">
                                        </div>
                                        <div class="col-3">
                                            <p>Date</p>
                                            <input type="text">
                                        </div>
                                        <div class="col-3">
                                            <p>Time</p>
                                            <input type="text">
                                        </div>
                                        <div class="col-3">
                                            <p>Printed Name (AA)</p>
                                            <input type="text">
                                        </div>
                                        <div class="col-3">
                                            <p>Signature</p>
                                            <input type="text">
                                        </div>
                                        <div class="col-3">
                                            <p>Date</p>
                                            <input type="text">
                                        </div>
                                        <div class="col-3">
                                            <p>Time</p>
                                            <input type="text">
                                        </div>
                                    </div>

                                    <!-- 8. Permit Cancellation (Complete at the end of job not exceed 12 hours) -->
                                    <h5 class="card-header" style="text-align: left"><b>8. Permit Cancellation (Complete
                                            at the end of job not exceed 12 hours)</b></h5>
                                    <div class="row">
                                        <div class="col-3">
                                            <p>Performing Authority Name</p>
                                            <input type="text">
                                        </div>
                                        <div class="col-3">
                                            <p>Signature</p>
                                            <input type="text">
                                        </div>
                                        <div class="col-3">
                                            <p>Date</p>
                                            <input type="text">
                                        </div>
                                        <div class="col-3">
                                            <p>Time</p>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <p></p>

                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
