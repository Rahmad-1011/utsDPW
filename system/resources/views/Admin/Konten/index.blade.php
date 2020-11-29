@extends ('Admin.Template.base')

@section ('content')
	
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Filter
				</div>
				<div class="card-body">
					<form action="{{url('Admin/konten/filter')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="" class="control-label"> Tags </label>
							<select name="id_tag" class="form-control">
							@foreach($list_tag as $tag)
								<option value="{{$tag->id}}">{{$tag->nama}}</option>
							@endforeach
							</select>
						</div>
						<button class="btn btn-primary"><i class="fa fa-search"></i>Filter</button>
					</form>
				</div>
			</div>
			<hr>
			<div class="card">
				<div class="card-header">
					<h3>
					Data Konten
					</h3>
					<hr>
					<a href="{{ url('Admin/konten/create') }}">
					<button class="btn btn-primary"> Tambah Konten
					</button></a>
				</div>
				<div class="card-body">
					<table class="table table-datatable">
						<thead>
							<th> No </th>
							<th width="250px"> Aksi </th>
							<th> Tags </th>
							<th> Judul </th>
							<th> Sub Isi </th>
							<th> Tanggal Rilis </th>
						</thead>
						<tbody>
							@foreach($list_konten as $konten)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>
									<div class="btn btn-group">

										<a href="{{ url('Admin/konten', $konten->id) }}" class="btn btn-primary"><i class="fa fa-info"></i></a>

										<a href="{{ url('Admin/konten', $konten->id) }}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>

										@include ('Admin.Template.utils.delete', ['url' => url('Admin/konten', $konten->id)])
									</div>	

								</td>
								<td>{{$konten->tag->nama}}</td>
								<td>{{$konten->judul}}</td>
								<td>{{$konten->sub_isi}}</td>
								<td>{{$konten->created_at}}</td>
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