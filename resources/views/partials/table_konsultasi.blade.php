@foreach($cleanedData as $row)
    <tr>
        <td>{{ $loop->iteration }}</td>    
        <td>
            {{-- Tombol WhatsApp --}}
            @if (!empty($row['WhatsApp']))
                @php
                    $phone = preg_replace('/[^0-9]/', '', $row['WhatsApp']);
                    if (substr($phone, 0, 1) === '0') {
                        $phone = '62' . substr($phone, 1);
                    }
                @endphp
                <a href="https://api.whatsapp.com/send?phone={{ $phone }}"
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