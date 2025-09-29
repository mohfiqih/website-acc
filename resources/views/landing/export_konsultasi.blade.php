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
    <h2 style="text-align: center;">Data Konsultasi</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal Konsultasi</th>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>WhatsApp</th>
                <th>Usia</th>
                <th>Pendidikan Terakhir</th>
                <th>Alamat Lengkap</th>
                <th>Kecamatan</th>
                <th>Kabupaten</th>
                <th>Provinsi</th>
                <th>Nomor Aktif (WA)</th>
                <th>Informasi dari mana?</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $i => $row)
                <tr>
                    <td>{{ $i+1 }}</td>
                    <td>{{ $row['Tanggal Konsultasi'] ?? '' }}</td>
                    <td>{{ $row['Nama Lengkap'] ?? '' }}</td>
                    <td>{{ $row['Email Address'] ?? '' }}</td>
                    <td>{{ $row['WhatsApp'] ?? '' }}</td>
                    <td>{{ $row['Usia'] ?? '' }}</td>
                    <td>{{ $row['Pendidikan Terakhir'] ?? '' }}</td>
                    <td>{{ $row['Alamat Lengkap'] ?? '' }}</td>
                    <td>{{ $row['Kecamatan'] ?? '' }}</td>
                    <td>{{ $row['Kabupaten'] ?? '' }}</td>
                    <td>{{ $row['Provinsi'] ?? '' }}</td>
                    <td>{{ $row['WhatsApp'] ?? '' }}</td>
                    <td>{{ $row['Dapat informasi dari mana?'] ?? '' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
