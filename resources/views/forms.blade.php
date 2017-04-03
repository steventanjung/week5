<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<form action="" method="POST" class="form-horizontal">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" name="nama" @if(isset($nama)) value="{{$nama}}" @endif >
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" class="form-control" name="email" @if(isset($email)) value="{{$email}}" @endif>
					</div>
					<div class="form-group">
						<label for="gender">Jenis Kelamin</label>
						<div class="radio">
							<label>
								<input type="radio" name="gender" value="m" @if(isset($gender) && $gender="m") checked @endif>Laki
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gender" value="f" @if(isset($gender) && $gender="f") checked @endif>Perempuan
							</label>
						</div>
					</div>
					<div class="form-group">
						<label for="weapon">Senjata Pilihan<br><small>Bisa pilih lebih dari satu</small></label>
						<div class="checkbox">
							<label><input type="checkbox" name="weapon[]" value="Muramasa" @if(isset($weapon) && in_array("Muramasa", $weapon)) checked @endif>Muramasa</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="weapon[]" value="Excalibur" @if(isset($weapon) && in_array("Excalibur", $weapon)) checked @endif>Excalibur</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="weapon[]" value="Sange & Yasha" @if(isset($weapon) && in_array("Sange & Yasha", $weapon)) checked @endif>Sange & Yasha</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="weapon[]" value="ChunChunMaru" @if(isset($weapon) && in_array("ChunChunMaru", $weapon)) checked @endif>ChunChunMaru</label>
						</div>
					</div>
					</div>
					<button type="submit" class="btn btn-warning">Submit</button>
				</form>
				<br>
				<br>
				@if(isset($nama))
					Halo, {{$nama}}
				@endif
				<br>
				@if(isset($email))
					Email kamu {{$email}}
				@endif
				<br>
				@if(isset($gender))
					Gender kamu
					@if($gender=="m") Laki
					@elseif($gender=="f") Perempuan 
					@endif
				@endif
				<br>
				@if(isset($weapon))
					@foreach ($weapon as $senjata)
			            -> {{$senjata}} <br>
			        @endforeach
				@endif
			</div>
		</div>
	</div>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>