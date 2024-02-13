<!DOCTYPE html>
<html lang="en">

<head>
    {{-- <meta charset="UTF-8"> --}}
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Document</title>
    <style>
        .bdr-bot {
            border-bottom: 1px solid black;
        }

        .border-tr td {
            border: 1px solid black;
            padding: 0.5rem;
        }

        .border-tr-normal td {
            border: 1px solid black;
            padding: 0.5rem;
        }

        .tr-padding td {
            padding: .5rem;
        }

        .border-tr td:nth-child(odd) {
            width: 5%;
        }

        @page {
            size: 51cm 88.1cm landscape;
            margin: 0;
        }
    </style>
</head>

<body style="font-family: 'Open Sans', sans-serif; font-size : .9rem;">
    <table cellspacing="0"
        style="float:left; width:50%; background-color: #1747a6; color:white; padding:1rem; table-layout:auto;">
        <tr>
            <td>
                <table>
                    <tr>
                        <td style="width: 30%">
                            <span style="font-weight: bold;font-size:3.5rem">
                                HCML
                            </span>
                        </td>
                        <td style="width:20%">
                            <span style="font-size: 0.9rem">
                                Permit To Work
                                <br>
                                Cold Work
                            </span>
                        </td>
                        <td style="width:20%">
                            Number :
                            <br><br>
                            Work Order No :
                        </td>
                        <td style="width:10%">
                            12
                            {{-- <input type="text" style="width: 50%" value="asadaasdasds"> --}}
                            <br><br>
                            12a
                            {{-- <input type="text" style="width: 50%" value="asdsa"> --}}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="padding: .5rem">
                1. Task Description
            </td>
        </tr>
        <tr>
            <td>
                <table style="background-color: white;color:black; width:100%; border-collapse: collapse;">
                    <tr>
                        <td class="bdr-bot" style="padding: 0.5rem;width:35%">Date Application : </td>
                        <td class="bdr-bot" style="padding: 0.5rem">Requested by PA : </td>
                        <td class="bdr-bot" style="padding: 0.5rem">Signed : </td>
                    </tr>
                    <tr>
                        <td class="bdr-bot"></td>
                        <td class="bdr-bot" style="padding: 0.5rem">Direct Supervisor : </td>
                        <td class="bdr-bot" style="padding: 0.5rem">Signed : </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="bdr-bot" style="padding: 0.5rem">
                            Equipment ID / Tag Number :
                        </td>
                        <td class="bdr-bot" style="padding: 0.5rem">
                            Location :
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" style="padding: 0.5rem">
                            Task Description :
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" style="padding: 0.5rem">
                            Tools / Equipment :
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding: 0.5rem">
                            Trades / Keahlian :
                        </td>
                        <td style="width: 20%" style="padding: 0.5rem">
                            No. of personel involved : 10
                            {{-- <input type="text" style="width:10%;" value="10"> --}}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="padding: .5rem">
                <table style="border-collapse: collapse;width:100%">
                    <tr>
                        <td style="width: 5%">
                            2.
                        </td>
                        <td style="width: 10.8%">
                            TRA Level 1
                        </td>
                        <td><input type="checkbox" checked="1"></td>
                        <td style="width: 17%">TRA Level 2 (HiPo)</td>
                        <td><input type="checkbox" checked="1"></td>
                        <td>Reference No : </td>
                        <td>1212</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table
                    style="width: 100%; border : 1px solid black; background-color: white; color: black;border-collapse: collapse">
                    <tbody>
                        <tr>
                            <td colspan="10" style="font-weight:bold;border:1px solid black;padding:.5rem">A. Hazards
                                /
                                <i>Bahaya-bahaya</i>
                            </td>
                        </tr>
                        <tr class="border-tr">
                            <td></td>
                            <td>1. Slipping Hazard<br><i>Bahaya Tergelincir</i></td>
                            <td></td>
                            <td>6. Tripping Hazard<br><i>Bahaya Tersandung</i></td>
                            <td></td>
                            <td>11. Working at Height witd Scaffold<br><i>Bekerja di ketinggian
                                    menggunakan perancah</i></td>
                            <td></td>
                            <td>16. Stored Electrical Charge<br><i>Tenaga listrik tersimpan</i></td>
                            <td></td>
                            <td>21. Vibration<br><i>Getaran</i></td>
                        </tr>
                        <tr class="border-tr">
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
                        <tr class="border-tr">
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
                        <tr class="border-tr">
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
                        <tr class="border-tr">
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
                            <td colspan="10" style="padding: .5rem">
                                <h4 style="color: black">Hazards (Other) / <i>Bahaya - bahaya (Lain - lain)</i>
                                </h4>
                                <br>
                                <br>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table
                    style="width: 100%; border : 1px solid black; background-color: white; color: black;border-collapse: collapse">
                    <tbody>
                        <tr>
                            <td colspan="10" style="font-weight: bold;padding:.5rem">B. Controls / <i>Pengendalian</i>
                            </td>
                        </tr>
                        <tr class="border-tr">
                            <td></td>
                            <td>Erect signs and barriers<br><i>Memasang tanda dan penghalang</i></td>
                            <td></td>
                            <td>Check worksite for potential dropped objects<br><i>Cek tempat kerja dari resiko
                                    barang jatuh</i></td>
                            <td></td>
                            <td>A Safe means of access
                                worksite must always be used<br><i>Selalu gunakan sarana aman
                                    untuk akses ke tempat kerja</i></td>
                            <td></td>
                            <td>Review and implement MSDS
                                requirements<br><i>Periksa dan lakukan sesuai
                                    persyaratan MSDS</i></td>
                            <td></td>
                            <td>Adhere to lifting plan<br><i>Ikuti prosedur pengangkatan</i></td>
                        </tr>
                        <tr class="border-tr">
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
                        <tr class="border-tr">
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
                        <tr class="border-tr">
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
                        <tr class="border-tr">
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
                        <tr class="border-tr">
                            <td></td>
                            <td>Temporary Deviate /<br><i>By Pass sementara</i></td>
                        </tr>
                        <tr class="border-tr">
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
                        <tr class="border-tr">
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="border-tr">
                            <td colspan="10" style="font-weight: bold">
                                <h4 style="color: black">Controls (Other) / <i>Pengendalian (Lain - lain)</i>
                                </h4>
                                <br>
                            </td>
                        </tr>
                        <tr class="border-tr">
                            <td colspan="10" style="font-weight: bold">
                                <h4 style="color: black">Additional PPE / <i>APD Tambahan</i></h4>
                                <br>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <h3>Specific Safety Control Requirements for the job</h3>
            </td>
        </tr>
        <tr>
            <td>
                <table
                    style="width: 100%;background-color: white;color:black;border-collapse:collapse;border:1px solid black">
                    <tr class="tr-padding">
                        <td></td>
                        <td>Yes</td>
                        <td>No</td>
                        <td></td>
                        <td>Yes</td>
                        <td>No</td>
                    </tr>
                    <tr class="tr-padding">
                        <td>Equipment Depressurised / <i>Pengosongan tekanan pada alat</i></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td>Equipment Isolated / <i>Alat diisolasi</i></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                    </tr>
                    <tr class="tr-padding">
                        <td>Equipment Drained / <i>Pengosongan limbah pada alat</i></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td>Closed Valves / <i>Katup - katup ditutup</i></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                    </tr>
                    <tr class="tr-padding">
                        <td>Equipment Purged / <i>Alat dipurging</i></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td>Double Block & Bleed</td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                    </tr>
                    <tr class="tr-padding">
                        <td>Equipment Vented / <i>Alat diventilasi</i></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td>Blind / <i>Blank</i></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                    </tr>
                    <tr class="tr-padding">
                        <td>Blind List Attached / <i>Ada lampiran daftar blind</i></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td>Electrical Isolation / <i>Pengisolasian listrik</i></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="height: 1.5%"></td>
        </tr>
        <tr>
            <td>
                <table style="width: 100%">
                    <tr>
                        <td style="direction: rtl;text-align: right">
                            HCML.HSE.FRM.040 2015
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table cellspacing="0"
        style="float:left; width:50%; background-color: #1747a6; color:white; padding:1rem; table-layout:auto;">
        <tr>
            <td>
                <table style="width:100%">
                    <tr>
                        <td>3. Cross Referenced Certificates</td>
                        <td>PA & AA</td>
                        <td>PA & AA</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table
                    style="width: 100%; border-collapse:collapse; border: 1px solid black; color:black; background-color: white;">
                    <tr class="border-tr-normal">
                        <td style="width: 20%">
                            Permit / <i>Ijin</i> : <br><br><br><br>
                        </td>
                        <td>
                            Isolation / <i>Isolasi</i> : <br><br><br><br>
                        </td>
                        <td style="width: 30%">
                            Procedures/MSDS/Lift Plan/SOPs/JSAs/Others: <br><br><br><br>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="height : 3.43%"></td>
        </tr>
        <tr>
            <td>
                <table style="width:100%">
                    <tr>
                        <td>4. Authorisation</td>
                        <td>SC</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table
                    style="width: 100%; border-collapse:collapse; border: 1px solid black; color:black; background-color: white;">
                    <tr class="border-tr-normal">
                        <td>
                            Name / <i>Nama</i> :
                        </td>
                        <td>
                            Signed / <i>Paraf</i> :
                        </td>
                        <td>
                            Designation :
                        </td>
                        <td>
                            Date :
                        </td>
                        <td>
                            Time :
                        </td>
                    </tr>
                    <tr class="border-tr-normal">
                        <td>
                            Name :
                        </td>
                        <td>
                            Signed :
                        </td>
                        <td>
                            Site Controller
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="height : 3.43%"></td>
        </tr>
        <tr>
            <td>
                <table style="width: 100%">
                    <tr>
                        <td>5. Permit Registry</td>
                        <td>PC</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table
                    style="width: 100%;border-collapse:collapse;border : 1px solid black;background: white;color: black;">
                    <tr class="tr-padding">
                        <td colspan="4">
                            This permit is Registered in Permit Register, this permit is automatically suspended on
                            activation of the site general alarm and must be returned to its point
                            of issue prior to recommencement <br>
                            <i>Ijin ini dicatat di Administrator, dan akan otomatis dibatalkan bila tanda bahaya
                                dinyalakan dan harus dikembalikan pada tempat penerbitan sebelum memulai
                                kembali pekerjaan.</i>
                        </td>
                    </tr>
                    <tr class="tr-padding">
                        <td>Name : </td>
                        <td>Signed : </td>
                        <td>Date : </td>
                        <td>Time : </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="height : 3.43%"></td>
        </tr>
        <tr>
            <td>
                <table style="width: 100%">
                    <tr>
                        <td>6. Site Gas Test (where applicable)</td>
                        <td>AGT</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table style="width: 100%; background-color: white; color: black; border-collapse: collapse;">
                    <tr class="tr-padding">
                        <td>Flammable</td>
                        <td>5</td>
                        <td>%LEL</td>
                        <td>H2S</td>
                        <td>5</td>
                        <td>PPM</td>
                        <td>Oxygen</td>
                        <td>5</td>
                        <td>%</td>
                    </tr>
                    <tr class="tr-padding">
                        <td colspan="9">I, Authorised Gas Tester, confirm all gas tests are within acceptable
                            limits: <br>
                            <i>Saya, Authorised Gas Tester, menyatakan hasil pemeriksaan ada dalam batas yang
                                diijinkan:</i>
                        </td>
                    </tr>
                    <tr class="tr-padding">
                        <td colspan="3">
                            Name :
                        </td>
                        <td colspan="2">
                            Signed :
                        </td>
                        <td colspan="2">
                            Date :
                        </td>
                        <td colspan="2">
                            Time :
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="height : 3.43%"></td>
        </tr>
        <tr>
            <td>
                <table style="width: 100%">
                    <tr>
                        <td>
                            7a. Issue
                        </td>
                        <td>AA</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table
                    style="width: 100%; background-color: white; color: black;border-collapse: collapse;border:1px solid black">
                    <tr class="tr-padding">
                        <td colspan="4">
                            I, Area Authority, declare that all hazards have been identified and all specific control
                            measures are in place and it is now safe for the work specified on the
                            permit to be performed <br>
                            <i>Saya, Penanggung jawab Lapangan, menyatakan bahwa semua resiko telah diperiksa dan semua
                                pengendalian sudah dilaksanakan dan pekerjaan
                                sesuai spesifikasi pada persetujuan dapat dilaksanakan dengan aman.</i>
                        </td>
                    </tr>
                    <tr class="tr-padding">
                        <td>
                            Name :
                        </td>
                        <td>
                            Signed :
                        </td>
                        <td>
                            Date :
                        </td>
                        <td>
                            Time :
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="height : 3.43%"></td>
        </tr>
        <tr>
            <td>
                <table style="width: 100%">
                    <tr>
                        <td>7b. Acceptance</td>
                        <td>PA</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table style="background-color: white;color:black;border-collapse: collapse;border:1px solid black">
                    <tr class="tr-padding">
                        <td colspan="4">
                            I, Performing Authority, have read and understand the above conditions and precautions. I
                            accept responsibility for carrying out work as specified. I will
                            ensure the persons under my control read, understand and comply with these conditions and
                            precautions. I will notify the Area Authority on completion or
                            interruption of this work. <br>
                            <i>
                                Saya, Penanggung jawab Pelaksana, telah membaca dan mengerti semua kondisi dan resiko.
                                Saya menerima tanggung jawab untuk mengerjakan tugas
                                sesuai spesifikasi. Saya akan memastikan semua pekerja mengerti akan hal ini. Saya akan
                                memberitahu Penanggung jawab Lapangan pada akhir atau
                                penghentian pekerjaan
                            </i>
                        </td>
                    </tr>
                    <tr class="tr-padding">
                        <td>
                            Name :
                        </td>
                        <td>
                            Signed :
                        </td>
                        <td>
                            Date :
                        </td>
                        <td>
                            Time :
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="height : 3.43%"></td>
        </tr>
        <tr>
            <td>
                <table style="width: 100%">
                    <tr>
                        <td>8a. Close Out</td>
                        <td>PA</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table style="background-color: white;color: black;border-collapse: collapse;border: 1px solid black;">
                    <tr class="tr-padding">
                        <td colspan="4">
                            I, Performing Authority, declare that the work for which this Permit was issued has been
                            promptly performed, that all personnel have been withdrawn, and that
                            the equipment, plant and electrical apparatus affected by the work have been left in a
                            safe,clean condition. <br>
                            <i>Saya, Penanggung jawab Pelaksana, menyatakan bahwa pekerjaan yang dilandasi ijin ini
                                telah dilaksanakan, bahwa semua pekerja telah ditarik kembali,
                                dan bahwa peralatan, mesin dan peralatan listrik yang berhubungan dengan pekerjaan
                                tersebut telah diamankan dan dalam keadaan bersih.</i>
                        </td>
                    </tr>
                    <tr class="tr-padding">
                        <td>
                            <input type="checkbox" checked="true">
                        </td>
                        <td>The work is COMPLETE <br>
                            <i>Pekerjaan sudah SELESAI</i>
                        </td>
                        <td>
                            <input type="checkbox">
                        </td>
                        <td>The work is INCOMPLETE and in the following condition <br>
                            <i>Pekerjaan BELUM SELESAI dan dalam keadaan berikut</i>
                        </td>
                    </tr>
                    <tr class="tr-padding">
                        <td colspan="4" style="direction: rtl;text-align: right">..........................</td>
                    </tr>
                    <tr class="tr-padding">
                        <td>Name : </td>
                        <td>Signed : </td>
                        <td>Date : </td>
                        <td>Time : </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="height : 3.43%"></td>
        </tr>
        <tr>
            <td>
                <table style="width: 100%">
                    <tr>
                        <td>8b. Close out</td>
                        <td>AA</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table style="background-color: white;color: black;border-collapse: collapse;border: 1px solid black;">
                    <tr class="tr-padding">
                        <td colspan="4">
                            I, Area Authority/my delegate, have inspected the equipment/work area and declare that the
                            work for which this Permit was issued has been properly
                            performed, that all the tools and apparatus have been removed, and that the equipment, plant
                            and electrical apparatus affected by the work have been left
                            in a safe, clean condition. <br>
                            <i>Saya, Penanggung jawab Lapangan, telah memeriksa peralatan/tempat kerja dan menyatakan
                                bahwa pekerjaan yang dilandasi ijin ini telah dilaksanakan,
                                bahwa peralatan telah dipindahkan, dan bahwa peralatan, mesin dan peralatan listrik yang
                                berhubungan dengan pekerjaan tersebut telah diamankan dan
                                dalam keadaan bersih.</i>
                        </td>
                    </tr>
                    <tr class="tr-padding">
                        <td>
                            <input type="checkbox" checked="true">
                        </td>
                        <td>The work is INCOMPLETE <br>
                            <i>Pekerjaan BELUM SELESAI</i>
                        </td>
                        <td>
                            <input type="checkbox">
                        </td>
                        <td>The work is COMPLETE and normal operations may be resumed subject to the removal
                            of isolations and any remaining controls. <br>
                            <i>Pekerjaan sudah selesai dan pekerjaan seperti biasanya dapat dilanjutkan, dengan catatan
                                isolasi dan kontrol lainnya telah dilepaskan.</i>
                        </td>
                    </tr>
                    <tr class="tr-padding">
                        <td>Name : </td>
                        <td>Signed : </td>
                        <td>Date : </td>
                        <td>Time : </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="height : 3.43%"></td>
        </tr>
        <tr>
            <td>
                <table style="width: 100%">
                    <tr>
                        <td>9. Registry of Work Completion</td>
                        <td>PC</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table
                    style="width: 100%; background-color: white; color: black;border-collapse: collapse;border:1px solid black">
                    <tr class="tr-padding">
                        <td colspan="4">
                            All copies of this Permit and any supplementary certificates have been collected. Notation
                            of Work status has been made in the Permit Register.
                            The control measures put in place for this Permit have been removed. <br>
                            <i>Semua duplikat dari ijin ini dan sertifikat tambahan telah disatukan. Catatan tentang
                                status pekerjaan telah dilakukan di Administrator.
                                Semua pengendalian yang dibuat untuk persetujuan ini telah dipindahkan.</i>
                        </td>
                    </tr>
                    <tr class="tr-padding">
                        <td>
                            Name :
                        </td>
                        <td>
                            Signed :
                        </td>
                        <td>
                            Date :
                        </td>
                        <td>
                            Time :
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="height : 3.43%"></td>
        </tr>
        <tr>
            <td>
                <table style="width: 100%">
                    <tr>
                        <td>
                            DISTRIBUTION LIST
                        </td>
                        <td>
                            ORIGINAL WORKSITE
                        </td>
                        <td>
                            COPY 1 AA
                        </td>
                        <td>
                            COPY 2 PERMIT OFFICE
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
