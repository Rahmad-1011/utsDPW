@extends ('Admin.Template.base')

@section ('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Detail Produk
				<div class="card-body">
					<h2>{{$tag -> nama}}</h2>
					<br>
					<table class="table table-datatable">
						<thead>
							<th> No </th>
							<th> Judul </th>
							<th> Penulis </th>
						<tbody>
							@foreach($tag->konten as $konten)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>{{$konten->judul}}</td>
								<td>{{$konten->penulis->nama}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection