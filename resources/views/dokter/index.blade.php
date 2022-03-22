@foreach ($layanan as $d)
    <h2>{{ $d->nama_layanan }}</h2>
    <table>
        <tr>
            <th>Nama Dokter</th>
        </tr>
        @foreach ($d->dokter as $dokter)
        <tr>
            <td>{{ $dokter->nama_dokter }}</td>
        </tr>
        @endforeach
    </table>
@endforeach
