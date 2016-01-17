@extends('app')

@section('content')

<h3>Tambah Data Penduduk</h3>

<table>

	{!! Form::open(['url' => route('penduduk.update',$penduduk->id),'method' => 'put']) !!}
		<tr>
			<td>{!! Form::label('Nama') !!}</td>
			<td>{!! Form::text('_name',$penduduk->nama) !!}</td>
			<td>{!! $errors->first('_name') !!}</td>
		</tr>

		<tr>
			<td>{!! Form::label('Jenis Kelamin') !!}</td>
			<td>
				<input type="radio" name="_gender" <?php echo $penduduk->jenis_kelamin == 'L' ? 'checked' : '' ?> value="L"> Laki - laki
				<input type="radio" name="_gender" <?php echo $penduduk->jenis_kelamin == 'P' ? 'checked' : '' ?> value="P"> Perempuan
			</td>
			<td>{!! $errors->first('_gender') !!}</td>
		</tr>

		<tr>
			<td>{!! Form::label('Alamat') !!}</td>
			<td>{!! Form::textarea('_address',$penduduk->alamat) !!}</td>
			<td>{!! $errors->first('_address') !!}</td>
		</tr>

		<tr>
			<td>{!! Form::label('Kota') !!}</td>
			<td>{!! Form::select('_city',$kotas,$penduduk->id_kota) !!}</td>
			<td>{!! $errors->first('_city') !!}</td>
		</tr>
		<tr>
			<td colspan="2">{!! Form::submit('Simpan') !!}</td>
		</tr>
	{!! Form::close() !!}

</table>	

@endsection