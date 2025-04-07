@foreach($cleanedData as $row)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>
            <a href="{{ route('export.cv.word', ['id' => $row['ID']]) }}" class="btn btn-sm btn-success">
                <i class="fa fa-download"></i> Download CV
            </a>                                                
        </td>
        @foreach($row as $key => $cell)
            @if ($key !== 'ID')
                <td>{{ $cell }}</td>
            @endif
        @endforeach
    </tr>
@endforeach