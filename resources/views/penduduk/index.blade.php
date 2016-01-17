@extends('app')

@section('content')

<div style="width:80%">

	<a href="{{ route('penduduk.create') }}"><button>Tambah data</button></a>

	<div align="right">
		{!! Form::open(['method'=>'get']) !!}
			{!! Form::label('Pencarian berdasarkan nama kota') !!}
			{!! Form::text('q') !!}
			{!! Form::submit('Cari') !!}
		{!! Form::close() !!}
	</div>
	<br>
	<table border="1" style="width:100%">
		<thead>
			<td>Nama</td>
			<td>Jenis Kelamin</td>
			<td>Alamat</td>
			<td>Kota</td>
			<td colspan="3">Aksi</td>
		</thead>

		@foreach($penduduks as $penduduk)
			<tbody>
				<td>{{ $penduduk->nama }}</td>
				<td>{{ $penduduk->jenis_kelamin == 'L' ? 'Laki - laki' : 'Perempuan' }}</td>
				<td>{{ $penduduk->alamat }}</td>
				<td>{{ $penduduk->kota->kota }}</td>
				<td>
					<a href="{{ route('penduduk.edit',$penduduk->id) }}">
						<button>Ubah</button>
					</a>
				</td>	
				
				<td>	
					{!! Form::open([
						'url' 		=> route('penduduk.destroy',$penduduk->id),
						'method'	=> 'delete'
					]) !!}
						{!! Form::submit('Hapus') !!}
					{!! Form::close() !!}
				</td>	
				
				<td>
					<a href="{{ route('penduduk.show',$penduduk->id) }}">
						<button>Detail</button>
					</a>
				</td>
			</tbody>
		@endforeach

	</table>

</div>

@endsection