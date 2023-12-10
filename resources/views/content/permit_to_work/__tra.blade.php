<div class="col">
    {{-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Permit to Work</h4> --}}
    <!-- Basic Layout -->
    <div class="card mb-4">
        <div class="card-header">
            <div class="text-center">
                <h3>Permit To Work Request</h3>
                <h5>TRA</h5>
            </div>
            {{-- <div class="d-flex flex-row-reverse bd-highlight">
                <div class="p-2 bd-highlight">Flex item 1</div>
            </div> --}}
            <form id="formAccountSettings" method="POST" action="{{ route('permit_to_work.store_header') }}">
                @csrf
                <div class="mt-2 d-flex justify-content-end">
                    <button type="submit" class="btn btn-outline-secondary me-2">Save</button>
                    <button id="submit_permit_to_work" class="btn btn-primary me-2 disabled">Submit</button>
                </div>
        </div>
        <div class="card-body">

            <div class="form-check mb-3">

                <input class="form-check-input-inline" type="checkbox" name="accountActivation"
                    id="accountActivation" />
                <label class="form-check-label" for="accountActivation">TRA Level 1</label>
                <input class="form-check-input-inline" type="checkbox" name="accountActivation"
                    id="accountActivation" />
                <label class="form-check-label" for="accountActivation">TRA Level 2</label>
                <label class="form-check-label d-flex justify-content-left mt-2" for="accountActivation">Reference
                    Number</label>
                <div class="mb-3 col-md-12">
                    <input class="form-control" type="text" id="tools" name="tools" placeholder="N-123" />
                </div>
            </div>

            <!-- Basic with Icons -->
            <form>

                <!-- Responsive Table 1 -->
                <div class="card">
                    <h5 class="card-header" style="text-align: left">A. Hazards / Bahaya-bahaya</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered">

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
                                        <div class="p-10">1. Slipping Hazard <br><i>Bahaya
                                                Tergelincir</i></div>
                                    </td>
                                    <td>
                                        <input class="form-check-input-inline" type="checkbox" name="accountActivation"
                                            id="accountActivation">
                                    </td>
                                    <td>
                                        <div class="p-10">10. High Temperature <br><i>Suhu Tinggi</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox" name="accountActivation"
                                            id="accountActivation"></td>
                                    <td>
                                        <div class="p-10">19. Hazardous Material <br><i>Bahan Beracun
                                                Berbahaya</i></div>
                                    </td>
                                </tr>

                                <!-- Row 2 -->
                                <tr>
                                    <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                            name="accountActivation" id="accountActivation"></th>
                                    <td>
                                        <div class="p-10">2. Awkward Access <br><i>Akses Sulit</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox" name="accountActivation"
                                            id="accountActivation"></td>
                                    <td>
                                        <div class="p-10">11. Working at Height with Scafford
                                            <br><i>Bekerja di
                                                ketinggian dengan perancah</i>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox" name="accountActivation"
                                            id="accountActivation"></td>
                                    <td>
                                        <div class="p-10">20. Pyrophoric Material <br><i>Scale mudah
                                                terbakar</i>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Row 3 -->
                                <tr>
                                    <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                            name="accountActivation" id="accountActivation"></th>
                                    <td>
                                        <div class="p-10">3. Flammable Material <br><i>Bahan Mudah
                                                Terbakar</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox" name="accountActivation"
                                            id="accountActivation"></td>
                                    <td>
                                        <div class="p-10">12. Overside Work <br><i>Bekerja di pinggir
                                                area kerja
                                                yang berbahaya</i></div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox" name="accountActivation"
                                            id="accountActivation"></td>
                                    <td>
                                        <div class="p-10">21. Vibration <br><i>Getaran</i></div>
                                    </td>
                                </tr>

                                <!-- Row 4 -->
                                <tr>
                                    <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                            name="accountActivation" id="accountActivation"></th>
                                    <td>
                                        <div class="p-10">4. Unguarded Opening <br><i>Lubang Tanpa
                                                Penghalang</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox" name="accountActivation"
                                            id="accountActivation"></td>
                                    <td>
                                        <div class="p-10">13. Low/High Voltage <br><i>Listrik
                                                Tegangan
                                                Rendah/Tinggi</i></div>
                                    </td>

                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="accountActivation" id="accountActivation"></td>
                                    <td>
                                        <div class="p-10">22. Noise <br><i>Kebisingan</i></div>
                                    </td>
                                </tr>

                                <!-- Row 5 -->
                                <tr>
                                    <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                            name="accountActivation" id="accountActivation"></th>
                                    <td>
                                        <div class="p-10">5. Heavy Object <br><i>Benda berat</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="accountActivation" id="accountActivation"></td>
                                    <td>
                                        <div class="p-10">14. Radiation
                                            (Electromagnet&NORM)<i><br>Radiasi
                                                (electromagnet&NORM)</i></div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="accountActivation" id="accountActivation"></td>
                                    <td>
                                        <div class="p-10">23. Toxic Gas <br><i>Gas Beracun</i></div>
                                    </td>
                                </tr>
                                {{-- Step 6 --}}
                                <tr>
                                    <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                            name="accountActivation" id="accountActivation"></th>
                                    <td>
                                        <div class="p-10">6. Tripping Hazard <br><i>Bahaya
                                                Tersandung</i></div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="accountActivation" id="accountActivation"></td>
                                    <td>
                                        <div class="p-10">15. Stored Mechanical Energy <br><i>Energi
                                                mekanik
                                                tersimpan</i></div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="accountActivation" id="accountActivation"></td>
                                    <td>
                                        <div class="p-10">24. Smoke <br><i>Asap</i></div>
                                    </td>
                                </tr>

                                {{-- Step 7 --}}
                                <tr>
                                    <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                            name="accountActivation" id="accountActivation"></th>
                                    <td>
                                        <div class="p-10">7. Lifting > 10 tons <br><i>Pengangkatan >
                                                10 ton</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="accountActivation" id="accountActivation"></td>
                                    <td>
                                        <div class="p-10">16. Stored Electrical Charge <br><i>Tenaga
                                                Listrik
                                                Tersimpan</i></div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="accountActivation" id="accountActivation"></td>
                                    <td>
                                        <div class="p-10">25. Bad Weather <br><i>Cuaca Buruk</i>
                                        </div>
                                    </td>
                                </tr>

                                {{-- Step 8 --}}
                                <tr>
                                    <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                            name="accountActivation" id="accountActivation"></th>
                                    <td>
                                        <div class="p-10">8. Dropped Object <br><i>Benda Jatuh</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="accountActivation" id="accountActivation"></td>

                                    <td>
                                        <div class="p-10">17. Pressurized Hose Failure
                                            <br><i>Kegagalan Selang
                                                Bertekanan</i>
                                        </div>
                                    </td>
                                </tr>

                                {{-- Step 9 --}}
                                <tr>
                                    <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                            name="accountActivation" id="accountActivation"></th>
                                    <td>
                                        <div class="p-10">9. Low Level Lighting <br><i>Kurang
                                                Penerangan</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="accountActivation" id="accountActivation"></td>
                                    <td>
                                        <div class="p-10">18. Mechanical Spark <br><i>Percikan
                                                Mekanikal</i>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--/ Responsive Table 1 -->

                {{-- Hazard input --}}
                <div class="form-check mb-3">
                    <label class="form-check-label d-flex justify-content-left mt-3" for="Hazards">Hazards (Other) /
                        Bahaya - bahaya Lain</label>
                    <div class="mb-3 col-md-12" id="dynamicInputContainer">
                        <div class="input-group mb-3">
                            <input class="form-control" type="text" name="Hazards[]"
                                placeholder="Air Laut Pasang" />
                            <button class="btn btn-primary" type="button" onclick="addInputFieldHazard()">+</button>
                        </div>
                    </div>
                </div>

                <br>
                <!-- Responsive Table 2 -->
                <div class="card">
                    <h5 class="card-header" style="text-align: left">B. Controls / Pengendalian</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered">
                            <tbody>
                                {{-- Step 1 --}}
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
                                        <div class="p-10">Continuous gas monitoring in use at
                                            worksite<br>
                                            <i>Monitor gas secara kontinyu di area kerja</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="accountActivation" id="accountActivation"></td>
                                    <td>
                                        <div class="p-10">Additional lighting required<br>
                                            <i>Gunakan penerangan tambahan</i>
                                        </div>
                                    </td>

                                </tr>

                                {{-- Step 2 --}}

                                <tr>
                                    <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                            name="accountActivation" id="accountActivation"></th>
                                    <td>
                                        <div class="p-10">Keep worksite free of trip/slip hazards<br>
                                            <i>Jaga tempat kerja terhadap resiko
                                                tersandung/tergelincir</i>
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
                                        <div class="p-10">Waste to be disposed correctly<br>
                                            <i>Buang sampah pada tempatnya</i>
                                        </div>
                                    </td>
                                </tr>

                                {{-- Step 3 --}}

                                <tr>
                                    <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                            name="accountActivation" id="accountActivation"></th>
                                    <td>
                                        <div class="p-10">Initial gas test and repeat test at
                                            specific
                                            intervals<br>
                                            <i>Lakukan tes gas pada awal dan interval tertentu</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="accountActivation" id="accountActivation"></td>
                                    <td>
                                        <div class="p-10">A safe means of access worksite must always
                                            used<br>
                                            <i>Selalu gunakan sarana aman untuk akases ke tempat
                                                kerja</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="accountActivation" id="accountActivation"></td>
                                    <td>
                                        <div class="p-10">Safety harness/inertia reel to be worn<br>
                                            <i>Gunakan harness pengaman dan peralatan lainnya</i>
                                        </div>
                                    </td>
                                </tr>

                                {{-- Step 4 --}}

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
                                        <div class="p-10">Communication with adjacent Performing
                                            Authorities<br>
                                            <i>Berhubungan dengan Penanggung Jawab Pelaksana</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="accountActivation" id="accountActivation"></td>
                                    <td>
                                        <div class="p-10">Oxygen check required before Work
                                            commences<br>
                                            <i>Cek kadar oksigen sebelum mulai bekerja</i>
                                        </div>
                                    </td>

                                </tr>

                                {{-- Step 5 --}}

                                <tr>
                                    <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                            name="accountActivation" id="accountActivation"></th>
                                    <td>
                                        <div class="p-10">No electrical enclosure containing live
                                            connection to
                                            be left open and unattended<br>
                                            <i>Jangan meninggalkan peralatan yang masih beraliran
                                                listrik begitu
                                                saja</i>
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
                                        <div class="p-10">Adhere lifting plan<br>
                                            <i>Ikuti prosedur pengangkatan</i>
                                        </div>
                                    </td>
                                </tr>

                                {{-- Step 6 --}}

                                <tr>
                                    <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                            name="accountActivation" id="accountActivation"></th>
                                    <td>
                                        <div class="p-10">Ensure lifting equipment certified for
                                            specific
                                            load<br>
                                            <i>Pastikan peralatan telah disertifikasi sesuai berat yang
                                                diangkat</i>
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
                                        <div class="p-10">Isolation Sheet<br>
                                            <i>Lembar Isolasi</i>
                                        </div>
                                    </td>
                                </tr>
                                {{-- Step 7 --}}
                                <tr>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="accountActivation" id="accountActivation"></td>
                                    <td>
                                        <div class="p-10">Check worksite for potential dropped
                                            objects<br>
                                            <i>Cek tempat kerja dari resiko barang jatuh</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="accountActivation" id="accountActivation"></td>
                                    <td>
                                        <div class="p-10">Rubber gloves for appropriate voltage
                                            provided<br>
                                            <i>Gunakan sarung tangan karet sesuai dengan tegangan
                                                listrik yang
                                                ditangani</i>
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
                                {{-- Step 8 --}}
                                <tr>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="accountActivation" id="accountActivation"></td>

                                    <td>
                                        <div class="p-10">Maintain radio contact with Control
                                            Room<br>
                                            <i>Selalu berhubungan radio dengan ruang control</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="accountActivation" id="accountActivation"></td>
                                    <td>
                                        <div class="p-10">Equipment to be isolated when left
                                            unattended<br>
                                            <i>Pastikan peralatan diisolasi sebelum ditinggalkan</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="accountActivation" id="accountActivation"></td>
                                    <td>
                                        <div class="p-10">Job Safety Analysis<br>
                                            <i>(JSA)</i>
                                        </div>
                                    </td>
                                </tr>

                                {{-- Step 9 --}}
                                <tr>
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
                                        <div class="p-10">Review and implement MSDS requirement<br>
                                            <i>Periksa dan lakukan sesuai persyaratan MSDS</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="accountActivation" id="accountActivation"></td>
                                    <td>
                                        <div class="p-10">Temporary Deviate<br>
                                            <b><i>Bypass sementara</i></b>
                                        </div>
                                    </td>



                                </tr>

                                {{-- Step 10 --}}
                                <tr>
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
                                        <div class="p-10">Sun protection/dringking fluid to be
                                            available<br>
                                            <i>Sediakan pelindung sinar matahari dan air minum</i>
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
                    </div>
                </div>
            </form>

            <!--/ Responsive Table 2-->
            {{-- Control and Additional ppe input --}}
            <div class="form-check mb-3">
                <label class="form-check-label d-flex justify-content-left mt-3" for="ControlOther">Control (Other) /
                    Pengendalian (Lain-lain)</label>
                <div class="mb-3 col-md-12" id="dynamicInputContainerControlOther">
                    <div class="input-group mb-3">
                        <input class="form-control" type="text" name="ControlOther[]" placeholder="Value" />
                        <button class="btn btn-primary" type="button"
                            onclick="addInputFieldControlOther()">+</button>
                    </div>
                </div>
            </div>
            <div class="form-check mb-3">
                <label class="form-check-label d-flex justify-content-left mt-3" for="AdditionalPPE">Additional PPE /
                    APD Tambahan</label>
                <div class="mb-3 col-md-12" id="dynamicInputContainerAdditionalPPE">
                    <div class="input-group mb-3">
                        <input class="form-control" type="text" name="AdditionalPPE[]" placeholder="PPE" />
                        <button class="btn btn-primary" type="button"
                            onclick="addInputFieldAdditionalPPE()">+</button>
                    </div>
                </div>
            </div>

            <!-- Responsive Table 3 -->
            <div class="card">
                <h5 class="card-header" style="text-align: left">Specific Control Requirements for the job</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">

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
                                    <div class="p-10">Equipment Depressurised <br><i>Pengosongan tekanan pada
                                            alat</i></div>
                                </td>
                                <td>
                                    <input class="form-check-input-inline" type="checkbox" name="accountActivation"
                                        id="accountActivation">
                                </td>
                                <td>
                                    <div class="p-10">Equipment Isolated <br><i>Alat diisolasi</i>
                                    </div>
                                </td>
                            </tr>

                            <!-- Row 2 -->
                            <tr>
                                <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                        name="accountActivation" id="accountActivation"></th>
                                <td>
                                    <div class="p-10">Equipment Drained <br><i>Pengosongan limbah</i>
                                    </div>
                                </td>
                                <td><input class="form-check-input-inline" type="checkbox" name="accountActivation"
                                        id="accountActivation"></td>
                                <td>
                                    <div class="p-10">Closed Valves
                                        <br><i>Katup - katup ditutup</i>
                                </td>
                            </tr>

                            <!-- Row 3 -->
                            <tr>
                                <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                        name="accountActivation" id="accountActivation"></th>
                                <td>
                                    <div class="p-10">Equipment Purged <br><i>Alat dipurging</i>
                                    </div>
                                </td>
                                <td><input class="form-check-input-inline" type="checkbox" name="accountActivation"
                                        id="accountActivation"></td>
                                <td>
                                    <div class="p-10">Double Block & bleed</div>
                                </td>
                            </tr>

                            <!-- Row 4 -->
                            <tr>
                                <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                        name="accountActivation" id="accountActivation"></th>
                                <td>
                                    <div class="p-10">Equipment Vented <br><i>Alat diventilasi</i>
                                    </div>
                                </td>
                                <td><input class="form-check-input-inline" type="checkbox" name="accountActivation"
                                        id="accountActivation"></td>
                                <td>
                                    <div class="p-10">Blind<br><i>Blank</i></div>
                                </td>
                            </tr>

                            <!-- Row 5 -->
                            <tr>
                                <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                        name="accountActivation" id="accountActivation"></th>
                                <td>
                                    <div class="p-10">Blind List Attached<br><i>Ada lampiran daftar blind</i>
                                    </div>
                                </td>
                                <td><input class="form-check-input-inline" type="checkbox" name="accountActivation"
                                        id="accountActivation"></td>
                                <td>
                                    <div class="p-10">Electrical Isolation<i><br>Pengisolasian listrik</i></div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--/ Responsive Table 3 -->
            <div class="mt-2 d-flex justify-content-end">
                <button class="btn btn-primary me-2" onclick="stepper1.previous()">Previous</button>
                <button class="btn btn-primary me-2" onclick="stepper1.next()">Next</button>
            </div>
        </div>
    </div>
</div>
</div>
