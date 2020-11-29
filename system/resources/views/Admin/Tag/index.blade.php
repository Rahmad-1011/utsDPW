@extends ('Admin.Template.base')

@section ('content')
	
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					<h3>
					Tags
					</h3>
					<hr>
					<a href="{{ url('Admin/tag/create') }}">
					<button class="btn btn-primary"> Tambah Tag
					</button></a>
				</div>
				<div class="card-body">
					<table class="table table-datatable">
						<thead>
							<th> No </th>
							<th width="250px"> Aksi </th>
							<th> Nama </th>
							<th> Jumlah Konten </th>
						</thead>
						<tbody>
							@foreach($list_tag as $tag)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>
									<div class="btn btn-group">

										<a href="{{ url('Admin/tag', $tag->id) }}" class="btn btn-primary"><i class="fa fa-info"></i></a>

										<a href="{{ url('Admin/tag', $tag->id) }}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>

										@include ('Admin.Template.utils.delete', ['url' => url('Admin/tag', $tag->id)])
									</div>	

								</td>
								<td>{{$tag->nama}}</td>
								<td>{{$tag->konten_count}}</td>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection