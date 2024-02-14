<div class="col">
    <div class="card mb-4">
        <div class="card-header">
            <div class="text-center">
                <h3>Permit To Work Request</h3>
                <h5>TRA</h5>
            </div>
            <form id="formAccountSettingsTRA" method="POST" action="{{ route('permit_to_work.store_header_tra') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="mt-2 d-flex justify-content-end">
                    <button type="submit" class="btn btn-outline-secondary me-2">Save</button>
                    <button id="submit_permit_to_work" class="btn btn-primary me-2 disabled">Submit</button>
                </div>
        </div>
        <div class="card-body">

            <div class="form-check mb-3">
                <input class="form-check-input-inline" type="radio" name="tra_level_1" id="tra_level_1" />
                <label class="form-check-label" for="tra_level_1">TRA Level 1</label>
                <input class="form-check-input-inline" type="radio" name="tra_level_2" id="tra_level_2" />
                <label class="form-check-label" for="tra_level_2">TRA Level 2</label>
                <label class="form-check-label d-flex justify-content-left mt-2" for="reference_number">Reference Number</label>
                <div class="mb-3 col-md-12">
                    <input class="form-control" type="text" id="reference_number" name="reference_number" placeholder="N-123" />
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
                                                name="a1" id="a1">
                                        </div>
                                    </th>
                                    <td>
                                        <div class="p-10">1. Slipping Hazard <br><i>Bahaya
                                                Tergelincir</i></div>
                                    </td>
                                    <td>
                                        <input class="form-check-input-inline" type="checkbox" name="a10"
                                            id="a10">
                                    </td>
                                    <td>
                                        <div class="p-10">10. High Temperature <br><i>Suhu Tinggi</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox" name="a19"
                                            id="a19"></td>
                                    <td>
                                        <div class="p-10">19. Hazardous Material <br><i>Bahan Beracun
                                                Berbahaya</i></div>
                                    </td>
                                </tr>

                                <!-- Row 2 -->
                                <tr>
                                    <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                            name="a2" id="a2"></th>
                                    <td>
                                        <div class="p-10">2. Awkward Access <br><i>Akses Sulit</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox" name="a11"
                                            id="a11"></td>
                                    <td>
                                        <div class="p-10">11. Working at Height with Scafford
                                            <br><i>Bekerja di
                                                ketinggian dengan perancah</i>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox" name="a20"
                                            id="a20"></td>
                                    <td>
                                        <div class="p-10">20. Pyrophoric Material <br><i>Scale mudah
                                                terbakar</i>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Row 3 -->
                                <tr>
                                    <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                            name="a3" id="a3"></th>
                                    <td>
                                        <div class="p-10">3. Flammable Material <br><i>Bahan Mudah
                                                Terbakar</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox" name="a12"
                                            id="a12"></td>
                                    <td>
                                        <div class="p-10">12. Overside Work <br><i>Bekerja di pinggir
                                                area kerja
                                                yang berbahaya</i></div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox" name="a21"
                                            id="a21"></td>
                                    <td>
                                        <div class="p-10">21. Vibration <br><i>Getaran</i></div>
                                    </td>
                                </tr>

                                <!-- Row 4 -->
                                <tr>
                                    <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                            name="a4" id="a4"></th>
                                    <td>
                                        <div class="p-10">4. Unguarded Opening <br><i>Lubang Tanpa
                                                Penghalang</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox" name="a13"
                                            id="a13"></td>
                                    <td>
                                        <div class="p-10">13. Low/High Voltage <br><i>Listrik
                                                Tegangan
                                                Rendah/Tinggi</i></div>
                                    </td>

                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="a22" id="a22"></td>
                                    <td>
                                        <div class="p-10">22. Noise <br><i>Kebisingan</i></div>
                                    </td>
                                </tr>

                                <!-- Row 5 -->
                                <tr>
                                    <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                            name="a5" id="a5"></th>
                                    <td>
                                        <div class="p-10">5. Heavy Object <br><i>Benda berat</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="a14" id="a14"></td>
                                    <td>
                                        <div class="p-10">14. Radiation
                                            (Electromagnet&NORM)<i><br>Radiasi
                                                (electromagnet&NORM)</i></div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="a23" id="a23"></td>
                                    <td>
                                        <div class="p-10">23. Toxic Gas <br><i>Gas Beracun</i></div>
                                    </td>
                                </tr>
                                {{-- Step 6 --}}
                                <tr>
                                    <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                            name="a6" id="a6"></th>
                                    <td>
                                        <div class="p-10">6. Tripping Hazard <br><i>Bahaya
                                                Tersandung</i></div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="a15" id="a15"></td>
                                    <td>
                                        <div class="p-10">15. Stored Mechanical Energy <br><i>Energi
                                                mekanik
                                                tersimpan</i></div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="a24" id="a24"></td>
                                    <td>
                                        <div class="p-10">24. Smoke <br><i>Asap</i></div>
                                    </td>
                                </tr>

                                {{-- Step 7 --}}
                                <tr>
                                    <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                            name="a7" id="a7"></th>
                                    <td>
                                        <div class="p-10">7. Lifting > 10 tons <br><i>Pengangkatan >
                                                10 ton</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="a16" id="a16"></td>
                                    <td>
                                        <div class="p-10">16. Stored Electrical Charge <br><i>Tenaga
                                                Listrik
                                                Tersimpan</i></div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="a25" id="a25"></td>
                                    <td>
                                        <div class="p-10">25. Bad Weather <br><i>Cuaca Buruk</i>
                                        </div>
                                    </td>
                                </tr>

                                {{-- Step 8 --}}
                                <tr>
                                    <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                            name="a8" id="a8"></th>
                                    <td>
                                        <div class="p-10">8. Dropped Object <br><i>Benda Jatuh</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="a17" id="a17"></td>

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
                                            name="a9" id="a9"></th>
                                    <td>
                                        <div class="p-10">9. Low Level Lighting <br><i>Kurang
                                                Penerangan</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="a18" id="a18"></td>
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
                                                name="b1" id="b1">
                                        </div>
                                    </th>
                                    <td>
                                        <div class="p-10">Erect sign and barriers<br>
                                            <i>Memasang tanda dan penghalang</i>
                                        </div>
                                    </td>
                                    <td>
                                        <input class="form-check-input-inline" type="checkbox"
                                            name="b11" id="b11">
                                    </td>
                                    <td>
                                        <div class="p-10">Continuous gas monitoring in use at
                                            worksite<br>
                                            <i>Monitor gas secara kontinyu di area kerja</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="b21" id="b21"></td>
                                    <td>
                                        <div class="p-10">Additional lighting required<br>
                                            <i>Gunakan penerangan tambahan</i>
                                        </div>
                                    </td>

                                </tr>

                                {{-- Step 2 --}}

                                <tr>
                                    <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                            name="b2" id="b2"></th>
                                    <td>
                                        <div class="p-10">Keep worksite free of trip/slip hazards<br>
                                            <i>Jaga tempat kerja terhadap resiko
                                                tersandung/tergelincir</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="b12" id="b12"></td>
                                    <td>
                                        <div class="p-10">Only insulated tools to be used<br>
                                            <i>Hanya gunakan peralatan dengan pelindung</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="b22" id="b22"></td>
                                    <td>
                                        <div class="p-10">Waste to be disposed correctly<br>
                                            <i>Buang sampah pada tempatnya</i>
                                        </div>
                                    </td>
                                </tr>

                                {{-- Step 3 --}}

                                <tr>
                                    <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                            name="b3" id="b3"></th>
                                    <td>
                                        <div class="p-10">Initial gas test and repeat test at
                                            specific
                                            intervals<br>
                                            <i>Lakukan tes gas pada awal dan interval tertentu</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="b13" id="b13"></td>
                                    <td>
                                        <div class="p-10">A safe means of access worksite must always
                                            used<br>
                                            <i>Selalu gunakan sarana aman untuk akases ke tempat
                                                kerja</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="b23" id="b23"></td>
                                    <td>
                                        <div class="p-10">Safety harness/inertia reel to be worn<br>
                                            <i>Gunakan harness pengaman dan peralatan lainnya</i>
                                        </div>
                                    </td>
                                </tr>

                                {{-- Step 4 --}}

                                <tr>
                                    <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                            name="b4" id="b4"></th>
                                    <td>
                                        <div class="p-10">Adhere to Specific Procedure<br>
                                            <i>Ikuti prosedur yang spesifik</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="b14" id="b14"></td>
                                    <td>
                                        <div class="p-10">Communication with adjacent Performing
                                            Authorities<br>
                                            <i>Berhubungan dengan Penanggung Jawab Pelaksana</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="b24" id="b24"></td>
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
                                            name="b5" id="b5"></th>
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
                                            name="b15" id="b15"></td>
                                    <td>
                                        <div class="p-10">Make Public Announcements<br>
                                            <i>Menyampaikan pengumuman melalui Public Announcements</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="b25" id="b25"></td>
                                    <td>
                                        <div class="p-10">Adhere lifting plan<br>
                                            <i>Ikuti prosedur pengangkatan</i>
                                        </div>
                                    </td>
                                </tr>

                                {{-- Step 6 --}}

                                <tr>
                                    <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                            name="b6" id="b6"></th>
                                    <td>
                                        <div class="p-10">Ensure lifting equipment certified for
                                            specific
                                            load<br>
                                            <i>Pastikan peralatan telah disertifikasi sesuai berat yang
                                                diangkat</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="b16" id="b16"></td>
                                    <td>
                                        <div class="p-10">Secure loose objects<br>
                                            <i>Amankan material lepas</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="b26" id="b26"></td>
                                    <td>
                                        <div class="p-10">Isolation Sheet<br>
                                            <i>Lembar Isolasi</i>
                                        </div>
                                    </td>
                                </tr>
                                {{-- Step 7 --}}
                                <tr>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="b7" id="b7"></td>
                                    <td>
                                        <div class="p-10">Check worksite for potential dropped
                                            objects<br>
                                            <i>Cek tempat kerja dari resiko barang jatuh</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="b17" id="b17"></td>
                                    <td>
                                        <div class="p-10">Rubber gloves for appropriate voltage
                                            provided<br>
                                            <i>Gunakan sarung tangan karet sesuai dengan tegangan
                                                listrik yang
                                                ditangani</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="b27" id="b27"></td>
                                    <td>
                                        <div class="p-10">Standard Operating Procedure<br>
                                            <i>(SOP)</i>
                                        </div>
                                    </td>
                                </tr>
                                {{-- Step 8 --}}
                                <tr>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="b8" id="b8"></td>

                                    <td>
                                        <div class="p-10">Maintain radio contact with Control
                                            Room<br>
                                            <i>Selalu berhubungan radio dengan ruang control</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="b18" id="b18"></td>
                                    <td>
                                        <div class="p-10">Equipment to be isolated when left
                                            unattended<br>
                                            <i>Pastikan peralatan diisolasi sebelum ditinggalkan</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="b28" id="b28"></td>
                                    <td>
                                        <div class="p-10">Job Safety Analysis<br>
                                            <i>(JSA)</i>
                                        </div>
                                    </td>
                                </tr>

                                {{-- Step 9 --}}
                                <tr>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="b9" id="b9"></td>
                                    <td>
                                        <div class="p-10">Use safe maual handling techniques<br>
                                            <i>Gunakan teknik pengangkatan yang aman</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="b19" id="b19"></td>
                                    <td>
                                        <div class="p-10">Review and implement MSDS requirement<br>
                                            <i>Periksa dan lakukan sesuai persyaratan MSDS</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="b29" id="b29"></td>
                                    <td>
                                        <div class="p-10">Temporary Deviate<br>
                                            <b><i>Bypass sementara</i></b>
                                        </div>
                                    </td>



                                </tr>

                                {{-- Step 10 --}}
                                <tr>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="b10" id="b10"></td>
                                    <td>
                                        <div class="p-10">Standby man to be in attendance<br>
                                            <i>Pengawasa harus selalu waspada</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="b20" id="b20"></td>
                                    <td>
                                        <div class="p-10">Sun protection/dringking fluid to be
                                            available<br>
                                            <i>Sediakan pelindung sinar matahari dan air minum</i>
                                        </div>
                                    </td>
                                    <td><input class="form-check-input-inline" type="checkbox"
                                            name="b30" id="b30"></td>
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
                                            name="c1" id="c1">
                                    </div>
                                </th>
                                <td>
                                    <div class="p-10">Equipment Depressurised <br><i>Pengosongan tekanan pada
                                            alat</i></div>
                                </td>
                                <td>
                                    <input class="form-check-input-inline" type="checkbox" name="c6"
                                        id="c6">
                                </td>
                                <td>
                                    <div class="p-10">Equipment Isolated <br><i>Alat diisolasi</i>
                                    </div>
                                </td>
                            </tr>

                            <!-- Row 2 -->
                            <tr>
                                <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                        name="c2" id="c2"></th>
                                <td>
                                    <div class="p-10">Equipment Drained <br><i>Pengosongan limbah</i>
                                    </div>
                                </td>
                                <td><input class="form-check-input-inline" type="checkbox" name="c7"
                                        id="c7"></td>
                                <td>
                                    <div class="p-10">Closed Valves
                                        <br><i>Katup - katup ditutup</i>
                                </td>
                            </tr>

                            <!-- Row 3 -->
                            <tr>
                                <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                        name="c3" id="c3"></th>
                                <td>
                                    <div class="p-10">Equipment Purged <br><i>Alat dipurging</i>
                                    </div>
                                </td>
                                <td><input class="form-check-input-inline" type="checkbox" name="c8"
                                        id="c8"></td>
                                <td>
                                    <div class="p-10">Double Block & bleed</div>
                                </td>
                            </tr>

                            <!-- Row 4 -->
                            <tr>
                                <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                        name="c4" id="c4"></th>
                                <td>
                                    <div class="p-10">Equipment Vented <br><i>Alat diventilasi</i>
                                    </div>
                                </td>
                                <td><input class="form-check-input-inline" type="checkbox" name="c9"
                                        id="c9"></td>
                                <td>
                                    <div class="p-10">Blind<br><i>Blank</i></div>
                                </td>
                            </tr>

                            <!-- Row 5 -->
                            <tr>
                                <th scope="row"><input class="form-check-input-inline" type="checkbox"
                                        name="c5" id="c5"></th>
                                <td>
                                    <div class="p-10">Blind List Attached<br><i>Ada lampiran daftar blind</i>
                                    </div>
                                </td>
                                <td><input class="form-check-input-inline" type="checkbox" name="c10"
                                        id="c10"></td>
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
                <button id="next-2" class="btn btn-primary" type="button" onclick="stepper1.next()">Next</button>
            </div>
        </div>
    </div>
</div>
</div>
@push('scripts')
    <script>
        dynamicSelect2('approver_name_sc', '{!! route('permit_to_work.get_data_sc') !!}');
        dynamicSelect2('approver_name_pc', '{!! route('permit_to_work.get_data_pc') !!}');
        dynamicSelect2('approver_name_procedures', '{!! route('permit_to_work.get_data_proc') !!}');
        submitWithAjax('formAccountSettingsTRA', function() {
            location.reload();
        })
        getDataWithAjax('{{ route('permit_to_work.get_data_header_cold_work_app_one') }}').done(function(data) {
            if (data != '') {
                $("#designation").val(data.designation);
                $("#flammable").val(data.flammable);
                $("#h2s").val(data.h2s);
                $("#oxygen").val(data.oxygen);
                $("#approver_name_sc").val(data.approver_name_sc);
                $("#approver_name_pc").val(data.approver_name_pc);
                $("#approver_name_procedures").val(data.approver_name_procedures);

                // ap[]roval sc,pc,procedure
                getDataWithAjax(
                    "{!! route('permit_to_work.find_data_approve_sc', '') !!}" + "/" + data.approver_name_sc).done(function(data) {
                    let approver_sc_option = new Option(data.first_name + " " + data.last_name, data.id,
                        true, true);
                    $('#approver_name_sc').append(approver_sc_option).trigger('change');
                });
                getDataWithAjax(
                    "{!! route('permit_to_work.find_data_approve_pc', '') !!}" + "/" + data.approver_name_pc).done(function(data) {
                    let approver_pc_option = new Option(data.first_name + " " + data.last_name, data.id,
                        true, true);
                    $('#approver_name_pc').append(approver_pc_option).trigger('change');
                });
                getDataWithAjax(
                    "{!! route('permit_to_work.find_data_approve_proc', '') !!}" + "/" + data.approver_name_procedures).done(function(data) {
                    let approve_proc_option = new Option(data.first_name + " " + data.last_name, data.id,
                        true, true);
                    $('#approver_name_procedures').append(approve_proc_option).trigger('change');
                });
            } else {

                $("#next-2").attr('disabled','disabled');
            }
        });

    </script>
@endpush
