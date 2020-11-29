@extends ('Admin/Template.base')
@section('content')

<h3> Selamat Datang </h3>
<br>

<h1>
	{{request()-> user()-> nama}}
</h1>


@endsection