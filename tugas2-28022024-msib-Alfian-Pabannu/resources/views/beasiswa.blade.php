<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>ranking</th>
        </tr>
    </thead>
    <tbody>
        @php $i = 1; @endphp
        @foreach ($data as $item)
            <tr>
                <td>{{ $item['nama'] }}</td>
                <td>{{ $i }}</td>
            </tr>
            @php $i++; @endphp
        @endforeach
    </tbody>
</table>
