@extends('layouts/contentNavbarLayout')
@push('styles')
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/select2-bootstrap-5-theme.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/sweetalert2.min.css') }}">
@endpush
@section('title', ' Horizontal Form ')

@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">PTW Management/</span>PTW Request</h4>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="card mb-4">
            <div class="hstack gap-3">
                <div class="bs-stepper-header">
                    <div class="step crossed" data-target="#account-details-validation">
                      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
                        <span class="bs-stepper-circle">1</span>
                        <span class="bs-stepper-label mt-1">
                          <span class="bs-stepper-title">Account Details</span>
                          <span class="bs-stepper-subtitle">Setup Account Details</span>
                        </span>
                      </button>
                    </div>
                    <div class="line">
                      <i class="bx bx-chevron-right"></i>
                    </div>
                    <div class="step active" data-target="#personal-info-validation">
                      <button type="button" class="step-trigger" aria-selected="true">
                        <span class="bs-stepper-circle">2</span>
                        <span class="bs-stepper-label mt-1">
                          <span class="bs-stepper-title">Personal Info</span>
                          <span class="bs-stepper-subtitle">Add personal info</span>
                        </span>
                      </button>
                    </div>
                    <div class="line">
                      <i class="bx bx-chevron-right"></i>
                    </div>
                    <div class="step" data-target="#social-links-validation">
                      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
                        <span class="bs-stepper-circle">3</span>
                        <span class="bs-stepper-label mt-1">
                          <span class="bs-stepper-title">Social Links</span>
                          <span class="bs-stepper-subtitle">Add social links</span>
                        </span>
                      </button>
                    </div>
                  </div>
                <div class="p-2 ms-auto">
                    <h4 style="text-align: center">PERMIT TO WORK <br><h5 style="text-align: center">TRA</h5></h4>
                </div>
                <div class="p-2 ms-auto">
                </div>
            </div>
            <form id="formAccountSettings" method="POST" action="{{ route('permit_to_work.store_header') }}">
                @csrf
            <div class="mt-2 d-flex justify-content-end">
                <button type="reset" class="btn btn-outline-secondary me-2">Save</button>
                <button id="submit_permit_to_work" type="submit" class="btn btn-primary me-2">Submit</button>
            </div>
            <div class="card-body">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="dateapplication" class="form-label">Date Application</label>
                            <input class="form-control permit_to_work" type="date" id="dateapplication"
                                name="date_application" onchange="return isDateNow(event)" autofocus />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="reqbypa" class="form-label">Request by PA</label>
                            <input type="hidden" name="request_pa" value="{{ Auth::id() ?? 1 }}">
                            <input class="form-control permit_to_work" type="text" id="reqbypa"
                                value="{{ Auth::user()->name ?? 'John Doe' }}" disabled />
                        </div>
                        <div class="mb-3 col-md-6">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="directspv" class="form-label">Direct Supervisor</label>
                            {{-- <input type="text" class="form-control" id="directspv" name="directspv" /> --}}
                            <select id="direct_supervisor" class="form-select permit_to_work" name="direct_spv"
                                aria-label="direct_supervisor" data-placeholder="Pilih Supervisor">
                                {{-- <option>Harold Carter</option> --}}
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="equipmentid">EQUIPMENT ID / TAG NUMBER </label>
                            <input type="text" class="form-control permit_to_work" id="equipmentid"
                                name="equipment_id" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" class="form-control permit_to_work" id="location" name="location"
                                placeholder="Location ..." />
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="task_description" class="form-label">TASK DESCRIPTION</label>
                            <textarea class="form-control permit_to_work" type="text" id="task_description" name="task_description"
                                placeholder="Perbaikan pada ..."></textarea>
                        </div>

                        <div class="mb-3 col-md-12">
                            <label class="form-label" for="tools_equipment">TOOLS/EQUIPMENT</label>
                            <select class="form-control permit_to_work" type="text" id="tools_equipment"
                                name="tools_equipment[]" multiple="multiple" data-placeholder="Pilih Tools">
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="trades" class="form-label">TRADES/KEAHLIAN</label>
                            <select class="form-control permit_to_work" id="trades" name="trades[]"
                                data-placeholder="Pilih Trade" multiple="multiple">
                            </select>

                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="personel_involved" class="form-label">No. of personnel involved</label>
                            <input type="text" id="personel_involved" class="form-control permit_to_work"
                                name="personel_involved" onkeypress="return isNumberKey(event)">
                        </div>
                    </div>
                    <div class="mt-2 d-flex justify-content-end">
                        <button type="reset" class="btn btn-outline-secondary me-2">Back</button>
                        <button id="submit_permit_to_work" type="submit" class="btn btn-primary me-2">Next (SETELAH
                            CHECKBOX)</button>
                    </div>
                </form>
            </div>
            <!-- /Account -->
        </div>
    </div>

    <div class="form-check mb-3">
        <form>

            <input class="form-check-input-inline" type="checkbox" name="accountActivation" id="accountActivation" />
            <label class="form-check-label" for="accountActivation">TRA Level 1</label>
            <input class="form-check-input-inline" type="checkbox" name="accountActivation" id="accountActivation" />
            <label class="form-check-label" for="accountActivation">TRA Level 2</label>
            <label class="form-check-label d-flex justify-content-left mt-2" for="accountActivation">Reference
                Number</label>
            <div class="mb-3 col-md-12">
                <input class="form-control" type="text" id="tools" name="tools" placeholder="N-123" />

            </div>
        </form>

        {{-- <div class="hstack gap-3">
          <div class="p-2" style="color: white">
            <a style="margin: 10px">TRA Level 1</a>
            <input class="form-check-input mt-0" type="checkbox" value="" style="border: 2px solid">
          </div>
          <div class="p-2" style="color: white">
            <a style="margin: 10px">TRA Level 2</a>
            <input class="form-check-input mt-0" type="checkbox" value="" style="border: 2px solid">
          </div>
          <div class="p-2 ms-auto">
            <a style="color: white; margin: 5px">Reference No</a>
            <input type="text" style="background-color: darkgray">
          </div>
        </div> --}}

    </div>


    <!-- Basic with Icons -->
    <div class="row">
        <div class="card mb-4">

            <div class="card-body">
                <form>
                    <div class="container text-center">

                        <!-- Responsive Table 1 -->
                        <div class="card">
                            <h5 class="card-header" style="text-align: left">A. Hazards / Bahaya-bahaya</h5>
                            <div class="table-responsive text-nowrap">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="text-nowrap">
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <!-- Row 1 -->
                                        <tr>
                                            <th scope="row">
                                                <div class="p-10">
                                                    <input class="form-check-input-inline" type="checkbox"
                                                        name="accountActivation" id="accountActivation">
                                                </div>
                                            </th>
                                            <td>
                                                <div class="p-10">1. Slipping Hazard <br><i>Bahaya Tergelincir</i></div>
                                            </td>
                                            <td>
                                                <input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation">
                                            </td>
                                            <td>
                                                <div class="p-10">6. Tripping Hazard <br><i>Bahaya Tersandung</i></div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">11. Working at Height with Scafford <br><i>Bekerja di
                                                        ketinggian dengan perancah</i>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">16. Stored Electrical Charge <br><i>Tenaga Listrik
                                                        Tersimpan</i></div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">21. Vibration <br><i>Getaran</i></div>
                                            </td>
                                        </tr>

                                        <!-- Row 2 -->
                                        <tr>
                                            <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></th>
                                            <td>
                                                <div class="p-10">2. Awkward Access <br><i>Akses Sulit</i></div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">7. Lifting > 10 tons <br><i>Pengangkatan > 10 ton</i>
                                                </div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">12. Overside Work <br><i>Bekerja di pinggir area kerja
                                                        yang berbahaya</i></div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">17. Pressurized Hose Failure <br><i>Kegagalan Selang
                                                        Bertekanan</i></div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">22. Noise <br><i>Kebisingan</i></div>
                                            </td>
                                        </tr>

                                        <!-- Row 3 -->
                                        <tr>
                                            <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></th>
                                            <td>
                                                <div class="p-10">3. Flammable Material <br><i>Bahan Mudah Terbakar</i>
                                                </div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">8. Dropped Object <br><i>Benda Jatuh</i></div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">13. Low/High Voltage <br><i>Listrik Tegangan
                                                        Rendah/Tinggi</i></div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">18. Mechanical Spark <br><i>Percikan Mekanikal</i>
                                                </div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">23. Toxic Gas <br><i>Gas Beracun</i></div>
                                            </td>
                                        </tr>

                                        <!-- Row 4 -->
                                        <tr>
                                            <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></th>
                                            <td>
                                                <div class="p-10">4. Unguarded Opening <br><i>Lubang Tanpa Penghalang</i>
                                                </div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">9. Low Level Lighting <br><i>Kurang Penerangan</i>
                                                </div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">14. Radiation (Electromagnet&NORM)<i><br>Radiasi
                                                        (electromagnet&NORM)</i></div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">19. Hazardous Material <br><i>Bahan Beracun
                                                        Berbahaya</i></div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">24. Smoke <br><i>Asap</i></div>
                                            </td>
                                        </tr>

                                        <!-- Row 5 -->
                                        <tr>
                                            <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></th>
                                            <td>
                                                <div class="p-10">5. Heavy Object <br><i>Benda berat</i></div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">10. High Temperature <br><i>Suhu Tinggi</i></div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">15. Stored Mechanical Energy <br><i>Energi mekanik
                                                        tersimpan</i></div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">20. Pyrophoric Material <br><i>Scale mudah terbakar</i>
                                                </div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-3">25. Bad Weather <br><i>Cuaca Buruk</i></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p></p>
                                <div class="row g-0 text-center">
                                    <div class="col-6 col-md-4" style="padding-top: 15px">Hazards(Other)/Bahaya - bahaya
                                        Lain </div>
                                    <!-- Text Area bisa diisi pake Select kalau Memungkinkan -->
                                    <textarea class="col-sm-6 col-md-8"></textarea>
                                </div>
                                <p></p>
                            </div>
                        </div>
                        <!--/ Responsive Table 1 -->

                        <p></p>

                        <!-- Responsive Table 2 -->
                        <div class="card">
                            <h5 class="card-header" style="text-align: left">B. Controls / Pengendalian</h5>
                            <div class="table-responsive text-nowrap">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="text-nowrap">
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <div class="p-10">
                                                    <input class="form-check-input-inline" type="checkbox"
                                                        name="accountActivation" id="accountActivation">
                                                </div>
                                            </th>
                                            <td>
                                                <div class="p-10">Erect sign and barriers<br>
                                                    <i>Memasang tanda dan penghalang</i>
                                                </div>
                                            </td>
                                            <td>
                                                <input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation">
                                            </td>
                                            <td>
                                                <div class="p-10">Check worksite for potential dropped objects<br>
                                                    <i>Cek tempat kerja dari resiko barang jatuh</i>
                                                </div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">A safe means of access worksite must always used<br>
                                                    <i>Selalu gunakan sarana aman untuk akases ke tempat kerja</i>
                                                </div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">A safe means of access worksite must always used<br>
                                                    <i>Selalu gunakan sarana aman untuk akases ke tempat kerja</i>
                                                </div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">Adhere lifting plan<br>
                                                    <i>Ikuti prosedur pengangkatan</i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></th>
                                            <td>
                                                <div class="p-10">Keep worksite free of trip/slip hazards<br>
                                                    <i>Jaga tempat kerja terhadap resiko tersandung/tergelincir</i>
                                                </div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">Maintain radio contact with Control Room<br>
                                                    <i>Selalu berhubungan radio dengan ruang control</i>
                                                </div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">Communication with adjacent Performing Authorities<br>
                                                    <i>Berhubungan dengan Penanggung Jawab Pelaksana</i>
                                                </div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">Sun protection/dringking fluid to be available<br>
                                                    <i>Sediakan pelindung sinar matahari dan air minum</i>
                                                </div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">Isolation Sheet<br>
                                                    <i>Lembar Isolasi</i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></th>
                                            <td>
                                                <div class="p-10">Initial gas test and repeat test at specific
                                                    intervals<br>
                                                    <i>Lakukan tes gas pada awal dan interval tertentu</i>
                                                </div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">Use safe maual handling techniques<br>
                                                    <i>Gunakan teknik pengangkatan yang aman</i>
                                                </div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">Make Public Announcements<br>
                                                    <i>Menyampaikan pengumuman melalui Public Announcements</i>
                                                </div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">Additional lighting required<br>
                                                    <i>Gunakan penerangan tambahan</i>
                                                </div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">Isolation required<br>
                                                    <i>Diperlukan Isolasi</i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></th>
                                            <td>
                                                <div class="p-10">Adhere to Specific Procedure<br>
                                                    <i>Ikuti prosedur yang spesifik</i>
                                                </div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">Standby man to be in attendance<br>
                                                    <i>Pengawasa harus selalu waspada</i>
                                                </div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">Secure loose objects<br>
                                                    <i>Amankan material lepas</i>
                                                </div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">Waste to be disposed correctly<br>
                                                    <i>Buang sampah pada tempatnya</i>
                                                </div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">Standard Operating Procedure<br>
                                                    <i>(SOP)</i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></th>
                                            <td>
                                                <div class="p-10">No electrical enclosure containing live connection to
                                                    be left open and unattended<br>
                                                    <i>Jangan meninggalkan peralatan yang masih beraliran listrik begitu
                                                        saja</i>
                                                </div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">Continuous gas monitoring in use at worksite<br>
                                                    <i>Monitor gas secara kontinyu di area kerja</i>
                                                </div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">Rubber gloves for appropriate voltage provided<br>
                                                    <i>Gunakan sarung tangan karet sesuai dengan tegangan listrik yang
                                                        ditangani</i>
                                                </div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">Safety harness/inertia reel to be worn<br>
                                                    <i>Gunakan harness pengaman dan peralatan lainnya</i>
                                                </div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">Job Safety Analysis<br>
                                                    <i>(JSA)</i>
                                                </div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">Temporary Deviate<br>
                                                    <i>Bypass sementara</i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></th>
                                            <td>
                                                <div class="p-10">Ensure lifting equipment certified for specific
                                                    load<br>
                                                    <i>Pastikan peralatan telah disertifikasi sesuai berat yang diangkat</i>
                                                </div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">Only insulated tools to be used<br>
                                                    <i>Hanya gunakan peralatan dengan pelindung</i>
                                                </div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">Equipment to be isolated when left unattended<br>
                                                    <i>Pastikan peralatan diisolasi sebelum ditinggalkan</i>
                                                </div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">Oxygen check required before Work commences<br>
                                                    <i>Cek kadar oksigen sebelum mulai bekerja</i>
                                                </div>
                                            </td>
                                            <td><input class="form-check-input-inline" type="checkbox"
                                                    name="accountActivation" id="accountActivation"></td>
                                            <td>
                                                <div class="p-10">Lock Out Tag Out<br>
                                                    <i>(LOTO)</i>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p></p>
                                <div class="row g-0 text-center">
                                    <div class="col-6 col-md-4" style="padding-top: 15px">Controls (Other) / Pengendalian
                                        (Lain-lain) </div>
                                    <!-- Text Area bisa diisi pake Select kalau Memungkinkan -->
                                    <textarea class="col-sm-6 col-md-8"></textarea>
                                </div>
                                <p></p>
                                <p></p>
                                <div class="row g-0 text-center">
                                    <div class="col-6 col-md-4" style="padding-top: 15px">Additional PPE / APD Tambahan
                                    </div>
                                    <!-- Text Area bisa diisi pake Select kalau Memungkinkan -->
                                    <textarea class="col-sm-6 col-md-8"></textarea>
                                </div>
                                <p></p>
                            </div>
                        </div>
                        <!--/ Responsive Table 2-->

                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2_usage.js') }}"></script>
    <script src="{{ asset('assets/js/http_ajax.js') }}"></script>
    <script src="{{ asset('assets/js/helperJs.js') }}"></script>
    <script>
        dynamicSelect2('tools_equipment', '{!! route('permit_to_work.get_data_tools_equipment') !!}');
        dynamicSelect2('direct_supervisor', '{!! route('permit_to_work.get_data_spv') !!}');
        dynamicSelect2('trades', '{!! route('permit_to_work.get_data_trades') !!}');
        submitWithAjax('formAccountSettings')
        getDataWithAjax('{{ route('permit_to_work.get_data_header_cold_work') }}').done(function(data) {
            if (data != '') {
                let date = new Date(data.date_application);
                let date_format = date.getFullYear() + '-' + (date.getMonth() + 1) + '-' + date.getDate();
                $("#dateapplication").val(date_format);
                getDataWithAjax(
                    "{!! route('permit_to_work.find_data_direct_spv', '') !!}" + "/" + data.direct_spv).done(function(data) {
                    let direct_spv_option = new Option(data.first_name + " " + data.last_name, data.id,
                        true, true);
                    $('#direct_supervisor').append(direct_spv_option).trigger('change');
                });
                $("#equipmentid").val(data.equipment_id);
                $("#location").val(data.location);
                $("#task_description").val(data.task_description);
                getDataWithAjax("{!! route('permit_to_work.find_data_tools_equipment', '') !!}" + "/" + data.tools_equipment).done(function(data) {
                    $.map(data, function(tools_equipment) {
                        let tools_equipment_data = new Option(tools_equipment.name,
                            tools_equipment.id, true, true);
                        $('#tools_equipment').append(tools_equipment_data).trigger('change');
                    })
                })
                getDataWithAjax("{!! route('permit_to_work.find_data_trades', '') !!}" + "/" + data.trades).done(function(data) {
                    $.map(data, function(trades) {
                        let trades_data = new Option(trades.name,
                            trades.id, true, true);
                        $('#trades').append(trades_data).trigger('change');
                    })
                })
                $("#personel_involved").val(data.personel_involved);
            }
        });
        getDataWithAjax('{{ route('permit_to_work.get_total_permits') }}').done(function(data) {
            let date_now = new Date();
            let month_romanize = romanize(date_now.getMonth()+1);
            $("#number_hcml").val("HCML/" + month_romanize + "/" + date_now.getFullYear() + "/" + data);
        })
    </script>
@endpush
