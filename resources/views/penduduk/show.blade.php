@extends('app')

@section('content')
	
	<table border="1">
		
		<tr>
			<td>Nama  </td>
			<td>{{ $penduduk->nama }}</td>
		</tr>

		<tr>
			<td>Jenis Kelamin  </td>
			<td>{{ $penduduk->jenis_kelamin=='L' ? 'Laki - laki' : 'Perempuan' }}</td>
		</tr>

		<tr>
			<td>Alamat  </td>
			<td>{{ $penduduk->alamat }}</td>
		</tr>

		<tr>
			<td>Kota</td>
			<td>{{ $penduduk->kota->kota }}</td>
		</tr>

	</table>

@endsection