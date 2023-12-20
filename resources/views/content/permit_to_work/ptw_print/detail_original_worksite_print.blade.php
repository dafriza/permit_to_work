<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .tr-border td {
            border: 1px solid black;
            padding: .5rem;
            text-align: center;
        }

        @page {
            size: 51cm 88.1cm landscape;
            margin: 0;
        }
    </style>
</head>

<body style="font-family: 'Open Sans', sans-serif; font-size : .9rem">
    <table cellspacing="0" cellspacing="0"
        style="float:left; width:50%;padding:1rem; table-layout:auto;border:1px solid black">
        <tr>
            <td>
                <table style="width: 100%;border: 1px solid black;border-collapse: collapse">
                    <tr class="tr-border">
                        <td>
                            DATE
                        </td>
                        <td>
                            TIME
                        </td>
                        <td>
                            FLAMMABLE
                            <br>%LEL
                        </td>
                        <td>
                            TOXIC
                            <br>Ppm
                        </td>
                        <td>
                            OXYGEN
                            <br>%
                        </td>
                        <td>
                            NAME
                        </td>
                        <td>
                            SIGNATURE
                        </td>
                    </tr>
                    @for ($i = 0; $i < 5; $i++)
                        <tr class="tr-border">
                            <td>_</td>
                            <td>_</td>
                            <td>_</td>
                            <td>_</td>
                            <td>_</td>
                            <td>_</td>
                            <td>_</td>
                        </tr>
                    @endfor
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table style="width: 100%;border:1px solid black;border-collapse: collapse">
                    <tr class="tr-border">
                        <td colspan="3">TOOLBOX MEETING MINUTES</td>
                    </tr>
                    <tr class="tr-border">
                        <td rowspan="7" style="width: 70%">_</td>
                        <td colspan="2">AGENDA</td>
                    </tr>
                    <tr class="tr-border">
                        <td>_</td>
                        <td>Work Hazard <br><i>Bahaya Kerja</i></td>
                    </tr>
                    <tr class="tr-border">
                        <td>_</td>
                        <td>Risk Assessment <br><i>Penilaian Resiko</i></td>
                    </tr>
                    <tr class="tr-border">
                        <td>_</td>
                        <td>Safe Working Procedure <br><i>Prosedur Kerja yang Aman</i></td>
                    </tr>
                    <tr class="tr-border">
                        <td>_</td>
                        <td>Equipment Pre-Check <br><i>Pengecekan Peralatan Pra-Kerja</i></td>
                    </tr>
                    <tr class="tr-border">
                        <td>_</td>
                        <td>Safety Act / Behavior <br><i>Tindakan / Prilaku Aman</i></td>
                    </tr>
                    <tr class="tr-border">
                        <td>_</td>
                        <td>Safety Suggestion / Advice<br><i>Saran / Masukan Keselamatan</i></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table style="width: 100%; border:1px solid black; border-collapse: collapse">
                    <tr class="tr-border">
                        <td>Jelaskan gambaran bahaya yang terdapat di area pekerjaan (menggunakan tulisan atau sketsa
                            gambar)
                            <br><i>Describe the hazard condition at working area (in writing and/or sketch, drawing)</i>
                        </td>
                    </tr>
                    <tr>
                        <td><br><br><br><br><br></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table cellspacing="0" style="float:left; width:50%;padding:1rem; table-layout:auto;">
        <tr>
            <td>
                <table style="width: 100%;border:1px solid black;border-collapse: collapse">
                    <tr>
                        <td style="padding: .5rem">
                            Declaration:
                            <br><br>
                            All persons working on this permit must sign before commencing work for the first time to
                            show that they understand the task and have had its associated
                            hazard explained. They must understand the control measures which have been put in place and
                            the actions they must follow to work safety
                            <br>
                            <i>
                                Semua orang yang bekerja dengan ijin kerja ini harus memberikan tanda tangan sebelum
                                pelaksanaan pekerjaan untuk menunjukkan bahwa mereka
                                mengerti tentang tugasnya dan telah dijelaskan tentang semua bahaya yang berkaitan
                                dengannya. Mereka harus mengerti tentang pengendalian yang
                                telah disetujui dan apa yang harus dilakukan untukkeselamatan kerja.
                            </i>
                            <br><br>
                            Should any person working in this permit consider that conditions such as that it is unsafe
                            to continue, they should immediately inform his colleagues, stop
                            work, make the worksite safe and then inform Performing Authority and/or the Area Authority.
                            <br>
                            <i>Bila ada orang yang bekerja berdasarkan ijin ini merasa bahwa suatu kondisi telah terjadi
                                sehingga berbahaya untuk meneruskan pekerjaan, mereka
                                harus memberitahukan rekan kerja nya, berhenti bekerja, memastikan tempat kerja aman dan
                                memberitahu Penanggung jawab Pelaksana dan/atau
                                Penanggung jawab Lapangan.</i>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="height: 3%"></td>
        </tr>
        <tr>
            <td>
                <table style="width: 100%;border:1px solid black;border-collapse: collapse;">
                    <tr class="tr-border">
                        <td>
                            DATE
                        </td>
                        <td>
                            TIME
                        </td>
                        <td>
                            NAME / NAMA
                        </td>
                        <td>
                            SIGNATURE / PARAF
                        </td>
                    </tr>
                    @for ($i = 0; $i < 5; $i++)
                        <tr class="tr-border">
                            <td>_</td>
                            <td>_</td>
                            <td>_</td>
                            <td>_</td>
                        </tr>
                    @endfor
                    <tr class="tr-border">
                        <td colspan="4">CLOSING MEETING MINUTES</td>
                    </tr>
                    <tr class="tr-border">
                        <td colspan="4" style="height: 5%">_</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
