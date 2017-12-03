<!DOCTYPE html>
<html>
<head>
	<title> Download</title>
</head>
<style type="text/css">
	.paragraf{

		text-align: center;
	}

	.kotak{
		margin-left: 100px;
	}
	.tdbanget{
		padding-right:150px;padding-left: 50px
	}

</style>
<body>
	@if($laporan && $user)

	<p class="paragraf"><b>Surat Pernyataan {{$laporan->kejadian->nama_kejadian}}</b></p>
	<br>
	<br>
	<br>
<p>yang bertanda tangan di bawah ini :</p>

<table>
	<tr>
		<td class="tdbanget">Nama </td>
		<td >:    {{$user->name}}</td>
	</tr>
	<tr>
		<td class="tdbanget">NIK </td>
			
		<td>: {{$user->nomor_ktp}}</td>

	</tr>
	<tr>
		<td class="tdbanget">Alamat </td>
		<td>: {{$user->alamat}}</td>
	</tr>
	<tr>
		<td class="tdbanget">Tempat Lahir </td>
		<td>: {{$user->tempat_lahir}}</td>
	</tr>
	<tr>
		<td class="tdbanget">Tanggal Lahir </td>
		<td>: {{$user->tanggal_lahir}}</td>
	</tr>
</table>
<p style="margin-top: 100px"><b>Menyatakan:</b>{{$laporan->deskripsi}}</p>


	<div class=" col-md-5 col-md-offset-4" style="margin-top: 600">
	<p style="margin-left: 500px;margin-top: 470px">{{$user->kantorpolisi->kota}}, {{date('d-m-Y', strtotime($laporan->created_at))}}</p>
	<p style="margin-left: 450px;margin-top: 80px;text-align: center"> {{$user->name}}</p>
	</div>

@endif	
</body>

	
	

</html>