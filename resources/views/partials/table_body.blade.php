@foreach($cleanedData as $row)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>
            <button class="btn btn-sm btn-success btn-download-cv" data-id="{{ $row['ID'] }}" data-nama="{{ $row['NAMA (INDONESIA)'] }}">
                <i class="fa fa-download"></i> Download CV
            </button>
        </td>       
        <td>
            {{-- Tombol WhatsApp --}}
            @if (!empty($row['NO HP AKTIF']))
                @php
                    $phone = preg_replace('/[^0-9]/', '', $row['NO HP AKTIF']);
                    if (substr($phone, 0, 1) === '0') {
                        $phone = '62' . substr($phone, 1);
                    }
                @endphp
                <a href="https://api.whatsapp.com/send?phone={{ $phone }}&text=Halo kak%20{{ urlencode($row['NAMA (INDONESIA)']) }},%20Data Pendaftaran Online%20sudah%20masuk%20ya."
                    target="_blank"
                    class="btn btn-sm btn-success"
                    style="background-color:#25D366;border-color:#25D366;">
                        <i class="fa fa-whatsapp"></i> WhatsApp
                </a>
            @endif
        </td> 
        @foreach($row as $key => $cell)
            @if ($key !== 'ID')
                <td>{{ $cell }}</td>
            @endif
        @endforeach
    </tr>
@endforeach