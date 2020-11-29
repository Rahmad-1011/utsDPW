@extends ('Admin.Template.base')

@section ('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Detail Konten
				<div class="card-body">
					<h2>{{$konten -> judul}}</h2>
					<hr>
					<p>
						Penulis : {{($konten->penulis->nama)}}  |

						Tag : {{($konten->tag->nama)}}  |

						Tanggal Rilis : {{($konten->tanggal)}}
						<hr>
				
						{!! nl2br ($konten->isi) !!}
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection