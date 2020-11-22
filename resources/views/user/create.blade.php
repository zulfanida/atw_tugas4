@extends('template.admin')

@section('content')
	<div class="container"> 
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Tambah Data User
					</div>
					<div class="card-body">
						<form action="{{url('admin/user')}}" method="post">
							@csrf
						<div class="form-group">
						<label for="" class="control-label">Username</label>
						<input type="text" class="form-control" name="username">
						</div>
						<div class="form-group">
						<label for="" class="control-label">Email</label>
						<input type="text" class="form-control" name="email">
						</div>
						<div class="form-group">
						<label for="" class="control-label">Nama</label>
						<input type="text" class="form-control" name="nama">
						</div>
						<div class="form-group">
						<label for="" class="control-label">Password</label>
						<input type="text" class="form-control" name="Password">
						</div>	
						<button class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
						</form>
						<table>
							
						</table>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection