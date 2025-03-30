<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download CV Siswa Baru</title>
    <link href="https://www.amanahcitracemerlang.id/storage/images/1738849208_WhatsApp_Image_2025-02-06_at_20.04.03-removebg-preview.png" rel="icon">

    <style>
        @page {
            size: 210mm 330mm;
            margin: 5px 5px;
        }
        body {
            width: 210mm;
            height: 330mm;
            margin: 0 auto;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }
        td, th {
            border: 1px solid black;
            padding: 5px;
            text-align: left;
        }
        .merged {
            background-color: #b0e2fb;
            padding-left: 5px;
            font-weight: bold;
        }
        .katakana {
            text-align: center;
            background-color: #b0e2fb;
            font-weight: bold;
            width: 20px;
        }
        .title {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
        }
        .photo {
            text-align: center;
            vertical-align: middle;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }
        .header img {
            height: 50px;
        }
    </style>
</head>
<body>
    <div>
        <table style="width: 100%;">
            <tr>
                <td style="width: 20%; text-align: left;border: none;">
                    <img src="https://www.amanahcitracemerlang.id/storage/images/1738849208_WhatsApp_Image_2025-02-06_at_20.04.03-removebg-preview.png" alt="Logo" style="height: 50px;">
                </td>
                <td style="width: 60%; text-align: center; font-weight: bold;border: none;">
                    LPK ACC JAPAN CENTRE
                </td>
                <td style="width: 20%; text-align: right;border: none;">
                    TEGAL, {{ date('d-m-Y', strtotime($rowData['Timestamp'] ?? '0000-00-00')) }}
                </td>
            </tr>
        </table>        

        <table class="table">
            <tr>
                <td class="katakana" rowspan="2">フ<br/>フ</td>
                <td class="merged">NAMA <br/> KATAKANA</td>
                <td colspan="10"><?= htmlspecialchars($nama_katakana, ENT_QUOTES, 'UTF-8') ?></td>
                <td class="photo" rowspan="3" colspan="6">Photo</td>
            </tr>
            <tr>
                <td class="merged">NAMA <br/> INDONESIA</td>
                <td colspan="10">{{ $rowData['NAMA (INDONESIA)'] ?? '-' }}</td>
            </tr>

            <tr>
                <td class="merged" colspan="2">ALAMAT</td>
                <td colspan="10">{{ $rowData['ALAMAT'] ?? '-' }}</td>
            </tr>

            <tr>
                <td class="merged" colspan="2">TANGGAL LAHIR</td>
                <td colspan="4">
                    {{ date('d-m-Y', strtotime($rowData['TANGGAL LAHIR'] ?? '0000-00-00')) }}
                </td>
                <td class="merged" colspan="1">USIA</td>
                <td colspan="4">{{ $rowData['USIA'] ?? '-' }} tahun</td>
                <td class="merged" colspan="1">JENIS KELAMIN</td>
                <td colspan="5">{{ $rowData['JENIS KELAMIN'] ?? '-' }}</td>
            </tr>

            <tr>
                <td class="merged" colspan="2">NO HP AKTIF</td>
                <td colspan="4">{{ $rowData['NO HP'] ?? '-' }}</td>
                <td class="merged" colspan="1">AGAMA</td>
                <td colspan="4">{{ $rowData['AGAMA'] ?? '-' }}</td>
                <td class="merged" colspan="1">TINGGI</td>
                <td colspan="1">{{ $rowData['TINGGI'] ?? '-' }}</td>
                <td colspan="1">cm</td>
                <td class="merged" colspan="1">BERAT</td>
                <td colspan="1">{{ $rowData['BERAT'] ?? '-' }}</td>
                <td colspan="1">kg</td>
            </tr>

            <tr>
                <td class="merged" colspan="2">GOL DARAH</td>
                <td colspan="4">{{ $rowData['GOL DARAH'] ?? '-' }}</td>
                <td class="merged" colspan="1">BUTA WARNA</td>
                <td colspan="4">{{ $rowData['BUTA WARNA'] ?? '-' }}</td>
                <td class="merged" colspan="1">MATA KIRI</td>
                <td colspan="2">{{ $rowData['MATA KIRI'] ?? '-' }}</td>
                <td class="merged" colspan="1">MATA KANAN</td>
                <td colspan="2">{{ $rowData['MATA KANAN'] ?? '-' }}</td>
            </tr>

            <tr>
                <td class="merged" colspan="2">PERNAH OPERASI</td>
                <td colspan="5">{{ $rowData['PERNAH OPERASI'] ?? '-' }}</td>
                <td class="merged" colspan="2">APAKAH SEDANG MINUM</td>
                <td colspan="4">{{ $rowData['APAKAH SEDANG MINUM'] ?? '-' }}</td>
                <td class="merged" colspan="2">TANGAN</td>
                <td colspan="2">{{ $rowData['TANGAN'] ?? '-' }}</td>
            </tr>
        </table>
    </div>
</body>
</html>