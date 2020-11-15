@extends('template.base')

@section('content')
	<div class="container"> 
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Detail Data User
					</div>
					<div class="card-body">
						<h3>{{$user->username}}</h3>
						<hr>
						<p>
					
							Email : {{$user->email}} |
							Nama : {{$user->nama}} gr
						</p>
						
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection