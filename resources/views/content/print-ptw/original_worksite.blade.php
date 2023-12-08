<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Original Worksite</title>
    <link rel="stylesheet" href="{{ asset(mix('assets/vendor/css/core.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('assets/css/demo.css')) }}">
    <style>
        .h2,
        .h5,
        label {
            color: white;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            font-size: .9rem;
        }

        table {
            color: black;
            border: 1px solid black;
            background-color: #fff;
            width: 100%;
        }

        tr,
        td {
            border-color: inherit;
            border-width: 0;
            border-bottom: 1px solid black;
            padding: 0.4rem;
        }

        .form-control,
        .form-control:focus {
            border-radius: 0;
            border: 1px solid black;
            color: black;
            padding: 0.2rem;
        }

        table tbody tr.kuisioner td {
            border: 1px solid black;
            font-size: 10px;
        }

        table tbody tr.kuisioner th {
            border: 1px solid black;
            font-size: 10px;
            font-weight: normal;
            padding: 0.2rem;
        }

        table tbody tr.kuisioner-checkbox th {
            font-weight: normal;
            padding: 0.2rem;
        }

        table tbody tr.kuisioner-checkbox td {
            padding: 0.2rem;
            font-size: 10px;
        }

        tr.kuisioner-checkbox {
            border-color: inherit;
            border-width: 0;
            border-bottom: 0px;
        }

        tr.kuisioner-checkbox td {
            border-color: inherit;
            border-width: 0;
            border-bottom: 0px;
        }

        .normal-table tr {
            width: 10%;
        }

        .normal-table td {
            width: 10%;
        }

        .normal-table-border tr td {
            border: 1px solid black;
        }

        .normal-table-border tr {
            border: 1px solid black;
        }

        .normal-table-without-border tr {
            border-color: inherit;
            border-width: 0;
            border-bottom: 0px;
            padding: 0.4rem;
        }

        .normal-table-without-border td {
            border-color: inherit;
            border-width: 0;
            border-bottom: 0px;
            padding: 0.4rem;
        }

        .normal-table-font-size tr * {
            font-size: 12px;
        }
    </style>
</head>

<body class="p-4" style="background-color: white;color:white">
    <div class="container-fluid p-2" style="background-color: #1747a6">
        <div class="row">
            <div class="col">
                <div class="row mb-3">
                    <div class="col-auto align-self-end">
                        <span class="h2 fw-bold display-2">HCML</span>
                    </div>
                    <div class="col-3 align-self-end pb-2 ">
                        <span class="h5">Permit To Work</span>
                        <br>
                        <span class="h5">Cold Work</span>
                    </div>
                    <div class="col">
                        <div class="form-group row mb-3">
                            <label class="col ">Number</label>
                            <div class="col">
                                <input type="text" class="form-control ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col ">Work Order No:</label>
                            <div class="col">
                                <input type="text" class="form-control ">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>1. Task Descrption</p>
                    </div>
                </div>
                <div class="row mb-3 normal-table">
                    <div class="col">
                        <table>
                            <tbody style="font-size:12px">
                                <tr>
                                    <td>Date Application : </td>
                                    <td>Requested By PA : </td>
                                    <td>Signed : </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Direct Supervisor : </td>
                                    <td>Signed : </td>
                                </tr>
                                <tr>
                                    <td>Equipment ID/Tag Number : </td>
                                    <td></td>
                                    <td>Location : </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <div class="row">
                                            <p>Task Description : </p>
                                        </div>
                                        <div class="row">
                                            <p>Tools/Equipment : </p>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <p>Trades/Keahlian : </p>
                                            </div>
                                            <div class="col">
                                                <div class="form-group row">
                                                    <label class="col-auto" style="color: black">No. of personnel
                                                        involved : </label>
                                                    <div class="col">
                                                        <input type="text" class=" form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-auto">2.</div>
                    <div class="col-3">
                        <div class="form-group row">
                            <label class="col">TRA LEVEL 1</label>
                            <div class="col-auto">
                                <input type="checkbox" class="">
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="form-group row">
                            <label class="col">TRA LEVEL 2 (HiPo)</label>
                            <div class="col-auto">
                                <input type="checkbox" class="">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group row">
                            <label class="col-auto">REFERENCE No : </label>
                            <div class="col">
                                <input type="text" class="form-control ">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col">
                        <table>
                            <tbody>
                                <tr>
                                    <td colspan="10" class="fw-bold">A. Hazards / <i>Bahaya-bahaya</i></td>
                                </tr>
                                <tr class="kuisioner">
                                    <th></th>
                                    <th>1. Slipping Hazard<br><i>Bahaya Tergelincir</i></th>
                                    <th></th>
                                    <th>6. Tripping Hazard<br><i>Bahaya Tersandung</i></th>
                                    <th></th>
                                    <th>11. Working at Height with Scaffold<br><i>Bekerja di ketinggian
                                            menggunakan perancah</i></th>
                                    <th></th>
                                    <th>16. Stored Electrical Charge<br><i>Tenaga listrik tersimpan</i></th>
                                    <th></th>
                                    <th>21. Vibration<br><i>Getaran</i></th>
                                </tr>
                                <tr class="kuisioner">
                                    <td></td>
                                    <td>2. Awkward Access<br><i>Akses Sulit</i></td>
                                    <td></td>
                                    <td>7. Lifting > 10 Tons<br><i>Mengangkat barang > 10 Ton</i></td>
                                    <td></td>
                                    <td>12. Overside Work<br><i>Bekerja di pinggir area kerja yang berbahaya</i></td>
                                    <td></td>
                                    <td>17. Pressurised Hose Failure<br><i>Kegagalan selang bertekanan</i></td>
                                    <td></td>
                                    <td>22. Noise<br><i>Kebisingan</i></td>
                                </tr>
                                <tr class="kuisioner">
                                    <td></td>
                                    <td>3. Flammable Materials<br><i>Bahan Mudah Terbakar</i></td>
                                    <td></td>
                                    <td>8. Dropped Object<br><i>Benda Jatuh</i></td>
                                    <td></td>
                                    <td>13. Low/High Voltage<br><i>Listrik tegangan rendah/tinggi</i></td>
                                    <td></td>
                                    <td>18. Mechanical Spark<br><i>Percikan mekanikal</i></td>
                                    <td></td>
                                    <td>23. Toxic Gas<br><i>Gas Beracun</i></td>
                                </tr>
                                <tr class="kuisioner">
                                    <td></td>
                                    <td>4. Unguarded Opening<br><i>Lubang tanpa penghalang/pagar</i></td>
                                    <td></td>
                                    <td>9. Low Level Lightning<br><i>Kurang penerangan</i></td>
                                    <td></td>
                                    <td>14. Radiation (Electromagnet & NORM)<br><i>Radiasi (elektromagnet & NORM)</i>
                                    </td>
                                    <td></td>
                                    <td>19. Hazardous Material<br><i>Bahan Berbahaya Beracun</i></td>
                                    <td></td>
                                    <td>24. Smoke<br><i>Asap</i></td>
                                </tr>
                                <tr class="kuisioner">
                                    <td></td>
                                    <td>5. Heavy/Awkward Object<br><i>Benda berat/sulit ditangani</i></td>
                                    <td></td>
                                    <td>10. High Temperature<br><i>Suhu Tinggi</i></td>
                                    <td></td>
                                    <td>15. Stored Mechanical Energy<br><i>Energi mekanik tersimpan</i></td>
                                    <td></td>
                                    <td>20. Pyrophoric Scale<br><i>Scale yang mudah terbakar</i></td>
                                    <td></td>
                                    <td>25. Bad Weather<br><i>Cuaca Buruk</i></td>
                                </tr>
                                <tr>
                                    <td colspan="10" class="fw-bold">
                                        <h5 style="color: black">Hazards (Other) / <i>Bahaya - bahaya (Lain - lain)</i>
                                        </h5>
                                        <br>
                                        <br>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col">
                        <table>
                            <tbody>
                                <tr>
                                    <td colspan="10" class="fw-bold">B. Controls / <i>Pengendalian</i></td>
                                </tr>
                                <tr class="kuisioner">
                                    <th></th>
                                    <th>Erect signs and barriers<br><i>Memasang tanda dan penghalang</i></th>
                                    <th></th>
                                    <th>Check worksite for potential dropped objects<br><i>Cek tempat kerja dari resiko
                                            barang jatuh</i></th>
                                    <th></th>
                                    <th>A Safe means of access
                                        worksite must always be used<br><i>Selalu gunakan sarana aman
                                            untuk akses ke tempat kerja</i></th>
                                    <th></th>
                                    <th>Review and implement MSDS
                                        requirements<br><i>Periksa dan lakukan sesuai
                                            persyaratan MSDS</i></th>
                                    <th></th>
                                    <th>Adhere to lifting plan<br><i>Ikuti prosedur pengangkatan</i></th>
                                </tr>
                                <tr class="kuisioner">
                                    <td></td>
                                    <td>Keep worksite free of trip/slip
                                        hazards<br><i>Jaga tempat kerja terhadap
                                            resiko tersandung/tergelincir</i></td>
                                    <td></td>
                                    <td>Maintain radio contact with Control
                                        Room<br><i>Selalu berhubungan radio dengan
                                            Ruang Kontrol</i></td>
                                    <td></td>
                                    <td>Communicate with adjacent
                                        Performing Authorities<br><i>Berhubungan dengan
                                            Penanggung jawab Pelaksana</i></td>
                                    <td></td>
                                    <td>Sun protection/drinking fluid
                                        to be available<br><i>Sediakan pelindung sinar
                                            matahari dan air minum</i></td>
                                    <td></td>
                                    <td>Isolation Sheet /<br><i>Lembaran Isolasi</i></td>
                                </tr>
                                <tr class="kuisioner">
                                    <td></td>
                                    <td>Initial gas test and repeat tests
                                        at specific intervals<br><i>Lakukan tes gas pada awal dan
                                            interval tertentu</i></td>
                                    <td></td>
                                    <td>Use safe manual handling
                                        techniques<br><i>Gunakan teknik pengangkatan
                                            manual yang aman</i></td>
                                    <td></td>
                                    <td>Make Public Announcements<br><i>Menyampaikan pengumuman
                                            melalui Public Announcements</i></td>
                                    <td></td>
                                    <td>Additional lighting required<br><i>Gunakan penerangan tambahan</i></td>
                                    <td></td>
                                    <td>Isolation required<br><i>Diperlukan isolasi</i></td>
                                </tr>
                                <tr class="kuisioner">
                                    <td></td>
                                    <td>Diperlukan isolasi<br><i>Ikuti prosedur yang spesifik</i></td>
                                    <td></td>
                                    <td>Standby man to be in attendance<br><i>Pengawas harus selalu waspada</i></td>
                                    <td></td>
                                    <td>Secure loose objects<br><i>Amankan material lepas</i>
                                    </td>
                                    <td></td>
                                    <td>Waste to be disposed correctly<br><i>Buang sampah pada tempatnya</i></td>
                                    <td></td>
                                    <td>Standard Operating
                                        Procedure (SOP)</td>
                                </tr>
                                <tr class="kuisioner">
                                    <td rowspan="2"></td>
                                    <td rowspan="2">No electrical enclosure,
                                        containing live connection to be
                                        left open and unattended<br><i>Jangan meninggalkan peralatan
                                            yang masih beraliran listrik
                                            begitu saja</i></td>
                                    <td rowspan="2"></td>
                                    <td rowspan="2">Continuous gas monitoring in
                                        use at worksite<br><i>Monitor gas secara kontinyu di
                                            area kerja</i></td>
                                    <td rowspan="2"></td>
                                    <td rowspan="2">Rubber gloves for appropriate
                                        voltage provided<br><i>Gunakan sarung tangan karet
                                            sesuai dengan tegangan listrik
                                            yang ditangani</i></td>
                                    <td rowspan="2"></td>
                                    <td rowspan="2">Safety harness/inertia reel
                                        to be worn<br><i>Gunakan harness pengaman
                                            dan peralatan lainnya</i></td>
                                    <td>
                                    </td>
                                    <td>Job Safety Analysis (JSA)</td>
                                </tr>
                                <tr class="kuisioner">
                                    <td></td>
                                    <td>Temporary Deviate /<br><i>By Pass sementara</i></td>
                                </tr>
                                <tr class="kuisioner">
                                    <td rowspan="2"></td>
                                    <td rowspan="2">Ensure lifting equipment certified
                                        for specific load<br><i>Pastikan peralatan
                                            pengangkatan telah disertifikasi
                                            sesuai berat beban yang diangkat</i></td>
                                    <td rowspan="2"></td>
                                    <td rowspan="2">Only insulated tools to be used<br><i>Hanya gunakan peralatan
                                            dengan
                                            pelindung</i></td>
                                    <td rowspan="2"></td>
                                    <td rowspan="2">Equipment to be isolated
                                        when left unattended<br><i>Pastikan peralatan diisolasi
                                            sebelum ditinggalkan</i></td>
                                    <td rowspan="2"></td>
                                    <td rowspan="2">Oxygen check required before
                                        work commences<br><i>Cek kadar oksigen
                                            sebelum mulai bekerja</i></td>
                                    <td>
                                    </td>
                                    <td>Lock Out Tag Out (LOTO)</td>
                                </tr>
                                <tr class="kuisioner">
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr class="kusioner">
                                    <td colspan="10" class="fw-bold">
                                        <h5 style="color: black">Controls (Other) / <i>Pengendalian (Lain - lain)</i>
                                        </h5>
                                        <br>
                                    </td>
                                </tr>
                                <tr class="kusioner">
                                    <td colspan="10" class="fw-bold">
                                        <h5 style="color: black">Additional PPE / <i>APD Tambahan</i></h5>
                                        <br>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="h5">Specific Safety Control Requirements for the job</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <table style="width: 100%">
                            <tr class="kuisioner-checkbox">
                                <th></th>
                                <th>Yes</th>
                                <th>No</th>
                                <th></th>
                                <th>Yes</th>
                                <th>No</th>
                            </tr>
                            <tr class="kuisioner-checkbox">
                                <td>Equipment Depressurised / <i>Pengosongan tekanan pada alat</i></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td>Equipment Isolated / <i>Alat diisolasi</i></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                            </tr>
                            <tr class="kuisioner-checkbox">
                                <td>Equipment Drained / <i>Pengosongan limbah pada alat</i></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td>Closed Valves / <i>Katup - katup ditutup</i></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                            </tr>
                            <tr class="kuisioner-checkbox">
                                <td>Equipment Purged / <i>Alat dipurging</i></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td>Double Block & Bleed</td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                            </tr>
                            <tr class="kuisioner-checkbox">
                                <td>Equipment Vented / <i>Alat diventilasi</i></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td>Blind / <i>Blank</i></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                            </tr>
                            <tr class="kuisioner-checkbox">
                                <td>Blind List Attached / <i>Ada lampiran daftar blind</i></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td>Electrical Isolation / <i>Pengisolasian listrik</i></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row" style="font-size : 10px">
                    <div class="col offset-8" dir="rtl">HCML.HSE.FRM.040 2015</div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-auto">3. Cross Referenced Certificates</div>
                    <div class="col">PA & PA</div>
                    <div class="col">Husky-CNOOC Madura Ltd.</div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <table class="normal-table-border normal-table-font-size">
                            <tr class="normal-table">
                                <td>Permit / <i>Ijin : </i> <br><br><br></td>
                                <td>Isolation / <i>Isolasi : </i><br><br><br></td>
                                <td>Procedures/MSDS/Lift Plan/SOPs/JSAs/Others:<br><br><br></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">4. Authorisation</div>
                    <div class="col">SC</div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <table class="normal-table-border">
                            <tr class="normal-table">
                                <td>Name / <i>Nama : </i> </td>
                                <td>Signed / <i>Paraf : </i> </td>
                                <td>Designation : </td>
                                <td>Date : </td>
                                <td>Time : </td>
                            </tr>
                            <tr style="font-size:10px">
                                <td>Name : </td>
                                <td>Signed : </td>
                                <td>Site Controller</td>
                                <td></td>
                            </tr>
                            <tr style="font-size:10px">
                                <td>Name : </td>
                                <td>Signed : </td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">5. Permit Registry</div>
                    <div class="col">PC</div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <table class="normal-table normal-table-without-border">
                            <tr style="font-size: 12px">
                                <td>
                                    This permit is Registered in Permit Register, this permit is automatically
                                    suspended on activation of the site general alarm and must be returned to its
                                    point
                                    of issue prior to recommencement<br>
                                    <i>Ijin ini dicatat di Administrator, dan akan otomatis
                                        dibatalkan bila tanda bahaya
                                        dinyalakan dan harus dikembalikan pada tempat penerbitan sebelum memulai
                                        kembali pekerjaan.</i>
                                </td>
                            </tr>
                            <tr style="font-size:12px">
                                <td>
                                    <div class="row">
                                        <div class="col">Name : <br><br></div>
                                        <div class="col">Signed : <br><br></div>
                                        <div class="col">Date : <br><br></div>
                                        <div class="col">Time : <br><br></div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">6. Site Gas Test (where applicable)</div>
                    <div class="col">AGT</div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <table class="normal-table-without-border">
                            <tr>
                                <td>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row mb-3">
                                                <label class="col-auto" style="color: black">Flammable</label>
                                                <div class="col">
                                                    <input type="text" class="form-control">
                                                </div>
                                                <label class="col" style="color: black">%LEL</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group row mb-3">
                                                <label class="col-auto" style="color: black">Flammable</label>
                                                <div class="col">
                                                    <input type="text" class="form-control">
                                                </div>
                                                <label class="col" style="color: black">%LEL</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group row mb-3">
                                                <label class="col-auto" style="color: black">Flammable</label>
                                                <div class="col">
                                                    <input type="text" class="form-control">
                                                </div>
                                                <label class="col" style="color: black">%LEL</label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr style="font-size:12px">
                                <td>
                                    <div class="row">
                                        <div class="col">Name : <br><br></div>
                                        <div class="col">Signed : <br><br></div>
                                        <div class="col">Date : <br><br></div>
                                        <div class="col">Time : <br><br></div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">7a. Issue</div>
                    <div class="col">AA</div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <table class="normal-table normal-table-without-border">
                            <tr style="font-size: 12px">
                                <td>
                                    I, Area Authority, declare that all hazards have been identified and all specific
                                    control measures are in place and it is now safe for the work specified on the
                                    permit to be performed<br>
                                    <i>Saya, Penanggung jawab Lapangan, menyatakan bahwa semua resiko telah diperiksa
                                        dan semua pengendalian sudah dilaksanakan dan pekerjaan
                                        sesuai spesifikasi pada persetujuan dapat dilaksanakan dengan aman.</i>
                                </td>
                            </tr>
                            <tr style="font-size:12px">
                                <td>
                                    <div class="row">
                                        <div class="col">Name : <br><br></div>
                                        <div class="col">Signed : <br><br></div>
                                        <div class="col">Date : <br><br></div>
                                        <div class="col">Time : <br><br></div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">7b. Acceptance</div>
                    <div class="col">PA</div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <table class="normal-table normal-table-without-border">
                            <tr style="font-size: 12px">
                                <td>
                                    I, Performing Authority, have read and understand the above conditions and
                                    precautions. I accept responsibility for carrying out work as specified. I will
                                    ensure the persons under my control read, understand and comply with these
                                    conditions and precautions. I will notify the Area Authority on completion or
                                    interruption of this work<br>
                                    <i>Saya, Penanggung jawab Pelaksana, telah membaca dan mengerti semua kondisi dan
                                        resiko. Saya menerima tanggung jawab untuk mengerjakan tugas
                                        sesuai spesifikasi. Saya akan memastikan semua pekerja mengerti akan hal ini.
                                        Saya akan memberitahu Penanggung jawab Lapangan pada akhir atau
                                        penghentian pekerjaan</i>
                                </td>
                            </tr>
                            <tr style="font-size:12px">
                                <td>
                                    <div class="row">
                                        <div class="col">Name : <br><br></div>
                                        <div class="col">Signed : <br><br></div>
                                        <div class="col">Date : <br><br></div>
                                        <div class="col">Time : <br><br></div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">8a. Close Out</div>
                    <div class="col">PA</div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <table class="normal-table normal-table-without-border">
                            <tr style="font-size: 12px">
                                <td colspan="4">
                                    I, Performing Authority, declare that the work for which this Permit was issued has
                                    been promptly performed, that all personnel have been withdrawn, and that
                                    the equipment, plant and electrical apparatus affected by the work have been left in
                                    a safe,clean condition.<br>
                                    <i>Saya, Penanggung jawab Pelaksana, menyatakan bahwa pekerjaan yang dilandasi ijin
                                        ini telah dilaksanakan, bahwa semua pekerja telah ditarik kembali,
                                        dan bahwa peralatan, mesin dan peralatan listrik yang berhubungan dengan
                                        pekerjaan tersebut telah diamankan dan dalam keadaan bersih.</i>
                                </td>
                            </tr>
                            <tr style="font-size: 12px">
                                <td>
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" style="width: 80%">
                                        </div>
                                        <div class="col-auto">
                                            The work is COMPLETE<br><i>Pekerjaan sudah SELESAI</i>
                                        </div>
                                        <div class="col">
                                            <input type="text" style="width: 80%">
                                        </div>
                                        <div class="col-auto">
                                            The work is INCOMPLETE and in the following condition<br><i>Pekerjaan BELUM
                                                SELESAI dan dalam keadaan berikut</i>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td dir="rtl">........................................</td>
                            </tr>
                            <tr style="font-size:10px">
                                <td>
                                    <div class="row">
                                        <div class="col">Name : <br><br></div>
                                        <div class="col">Signed : <br><br></div>
                                        <div class="col">Date : <br><br></div>
                                        <div class="col">Time : <br><br></div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">8b. Close Out</div>
                    <div class="col">AA</div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <table class="normal-table normal-table-without-border">
                            <tr style="font-size: 12px">
                                <td colspan="4">
                                    I, Area Authority/my delegate, have inspected the equipment/work area and declare
                                    that the work for which this Permit was issued has been properly
                                    performed, that all the tools and apparatus have been removed, and that the
                                    equipment, plant and electrical apparatus affected by the work have been left
                                    in a safe, clean condition.<br>
                                    <i>Saya, Penanggung jawab Lapangan, telah memeriksa peralatan/tempat kerja dan
                                        menyatakan bahwa pekerjaan yang dilandasi ijin ini telah dilaksanakan,
                                        bahwa peralatan telah dipindahkan, dan bahwa peralatan, mesin dan peralatan
                                        listrik yang berhubungan dengan pekerjaan tersebut telah diamankan dan
                                        dalam keadaan bersih.</i>
                                </td>
                            </tr>
                            <tr style="font-size: 12px">
                                <td>
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" style="width: 80%">
                                        </div>
                                        <div class="col-auto">
                                            The work is COMPLETE<br><i>Pekerjaan sudah SELESAI</i>
                                        </div>
                                        <div class="col">
                                            <input type="text" style="width: 80%">
                                        </div>
                                        <div class="col-auto">
                                            The work is COMPLETE and normal operations may be resumed subject to the
                                            removal
                                            of isolations and any remaining controls.<br><i>Pekerjaan sudah selesai dan
                                                pekerjaan seperti biasanya dapat dilanjutkan, dengan catatan
                                                isolasi dan kontrol lainnya telah dilepaskan.</i>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td dir="rtl">........................................</td>
                            </tr>
                            <tr style="font-size:10px">
                                <td>
                                    <div class="row">
                                        <div class="col">Name : <br><br></div>
                                        <div class="col">Signed : <br><br></div>
                                        <div class="col">Date : <br><br></div>
                                        <div class="col">Time : <br><br></div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">9. Registry of Work Completion</div>
                    <div class="col">PC</div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <table class="normal-table normal-table-without-border">
                            <tr style="font-size: 12px">
                                <td>
                                    All copies of this Permit and any supplementary certificates have been collected.
                                    Notation of Work status has been made in the Permit Register.
                                    The control measures put in place for this Permit have been removed.<br>
                                    <i>Semua duplikat dari ijin ini dan sertifikat tambahan telah disatukan. Catatan
                                        tentang status pekerjaan telah dilakukan di Administrator.
                                        Semua pengendalian yang dibuat untuk persetujuan ini telah dipindahkan.</i>
                                </td>
                            </tr>
                            <tr style="font-size:12px">
                                <td>
                                    <div class="row">
                                        <div class="col">Name : <br><br></div>
                                        <div class="col">Signed : <br><br></div>
                                        <div class="col">Date : <br><br></div>
                                        <div class="col">Time : <br><br></div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row" style="font-size : 10px">
                    <div class="col">DISTRIBUTION LIST</div>
                    <div class="col-auto">ORIGINAL WORKSITE</div>
                    <div class="col-2">COPY 1 AA</div>
                    <div class="col-auto">COPY 2 PERMIT OFFICE</div>
                    <div class="col-auto fw-bold">ORIGINAL : WORKSITE</div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>

</html>
