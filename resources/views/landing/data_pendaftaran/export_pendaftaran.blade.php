<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Data Konsultasi</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 10px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #000; padding: 5px; text-align: left; }
        th { background: #f2f2f2; }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Data Pendaftaran Online</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal Daftar</th>
                <th>Nama Lengkap</th>
                <th>Tanggal Lahir</th>
                <th>Usia</th>
                <th>Kelamin</th>
                <th>Alamat Lengkap</th>
                <th>Pilihan Kelas</th>
                <th>Pilihan Program</th>
                <th>Pendidikan Terakhir</th>
                <th>Nomor Aktif (WA)</th>
                <th>Nama Mentor</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $i => $row)
                <tr>
                    <td>{{ $i+1 }}</td>
                    <td>{{ $row['Timestamp'] ?? '' }}</td>
                    <td>{{ $row['NAMA (INDONESIA)'] ?? '' }}</td>
                    <td>{{ $row['TANGGAL LAHIR'] ?? '' }}</td>
                    <td>{{ $row['USIA'] ?? '' }}</td>
                    <td>{{ $row['KELAMIN'] ?? '' }}</td>
                    <td>{{ $row['ALAMAT'] ?? '' }}</td>
                    <td>{{ $row['PILIH KELAS'] ?? '' }}</td>
                    <td>{{ $row['PILIH PROGRAM'] ?? '' }}</td>
                    <td>{{ $row['SEKOLAH MENENGAH ATAS/KEJURUAN'] ?? '' }}</td>
                    <td>{{ $row['NO HP AKTIF'] ?? '' }}</td>
                    <td>{{ $row['NAMA MENTOR'] ?? '' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
