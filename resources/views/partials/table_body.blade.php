@foreach($cleanedData as $row)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>
            <button class="btn btn-sm btn-success btn-download-cv" data-id="{{ $row['ID'] }}" data-nama="{{ $row['NAMA (INDONESIA)'] }}">
                <i class="fa fa-download"></i> Download CV
            </button>
        </td>        
        @foreach($row as $key => $cell)
            @if ($key !== 'ID')
                <td>{{ $cell }}</td>
            @endif
        @endforeach
    </tr>
@endforeach