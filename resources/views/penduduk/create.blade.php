@extends('app')

@section('content')

<h3>Tambah Data Penduduk</h3>

<table>

	{!! Form::open(['url' => route('penduduk.store')]) !!}
		<tr>
			<td>{!! Form::label('Nama') !!}</td>
			<td>{!! Form::text('_name') !!}</td>
			<td>{!! $errors->first('_name') !!}</td>
		</tr>

		<tr>
			<td>{!! Form::label('Jenis Kelamin') !!}</td>
			<td>
				<input type="radio" name="_gender" value="L"> Laki - laki
				<input type="radio" name="_gender" value="P"> Perempuan
			</td>
			<td>{!! $errors->first('_gender') !!}</td>
		</tr>

		<tr>
			<td>{!! Form::label('Alamat') !!}</td>
			<td>{!! Form::textarea('_address') !!}</td>
			<td>{!! $errors->first('_address') !!}</td>
		</tr>

		<tr>
			<td>{!! Form::label('Kota') !!}</td>
			<td>{!! Form::select('_city',$kotas,null,['placeholder' => 'Pilih kota']) !!}</td>
			<td>{!! $errors->first('_city') !!}</td>
		</tr>

		<tr>
			<td colspan="2">{!! Form::submit('Simpan') !!}</td>
		</tr>
	{!! Form::close() !!}

</table>	

@endsection