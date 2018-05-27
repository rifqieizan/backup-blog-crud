@extends('templates.layout')

@section ('content')

<p> Form Edit </p>

<form action="{{url('update/'.$id)}}" method="post">
	{{ csrf_field() }}
	<input type="text" name="nama" value="{{ $data->nama}}" placeholder="nama">
	<input type="text" name="alamat" value="{{ $data->alamat}}" placeholder="alamat">
	<input type="text" name="ipk" value="{{ $data->ipk}}" placeholder="ipk">
	<input type="text" name="jurusan" value="{{ $data->jurusan}}" placeholder="jurusan">

	<button type="submit">Submit</button>
</form>
@endsection