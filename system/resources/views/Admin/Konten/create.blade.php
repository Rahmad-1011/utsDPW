@extends ('Admin.Template.base')

@section ('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Konten
				</div>
				<div class="card-body">
					<form action="{{ url('Admin/konten') }}" method="post">
						@csrf

						<div class="form-group">
							<label for="" class="control-label"> Judul </label>
							<input type="text" class="form-control" name="judul">
						</div>
						<div class="form-group">
							<label for="" class="control-label"> Sub Isi </label>
							<input type="text" class="form-control" name="sub_isi">
						</div>
						<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="" class="control-label"> Tag </label>
								<select name="id_tag" class="form-control">
									@foreach($list_tag as $tag)
										<option value="{{$tag->id}}">{{$tag->nama}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card-body">
								<div class="form-group">
									<label for="" class="control-label"> Tanggal Rilis </label>
									<input type="text" class="form-control" name="tanggal">
								</div>
							</div>
						</div>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label for="" class="control-label"> Isi Konten </label>
								<textarea name="isi" class="form-control"></textarea>
							</div>
						</div>
				
				<button type="submit" class="btn btn-primary float-right"><i class="fa fa-save"> Simpan </i></button>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection