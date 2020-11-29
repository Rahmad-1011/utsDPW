<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> GO - Blog </title>

  @include('Client.Template.css')

</head>

<body>

  <!-- Navigation -->
  
  @include('Client.Template.navigation')
  <!-- Page Header -->
  
  @include('Client.Template.header')
  <!-- Main Content --> 
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <form action="{{url('Client/index/filter')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="" class="control-label"> Tags </label>
                <select name="id_kategori" class="form-control">
                  @foreach($list_tag as $tag)
                    <option>{{$tag->nama}}</option>
                  @endforeach
                </select>
            </div>
            <button class="btn btn-primary"><i class="fa fa-search"></i>Filter</button>
        </form>
      </div>
      <div class="col-lg-8 col-md-9 mx-auto">
        @foreach($list_konten as $konten)
        <div class="post-preview">
          <a href="{{url('Client/post', $konten->id)}}">
            <h2 class="post-title">
              {{$konten->judul}}
            </h2>
            <h3 class="post-subtitle">
              {{$konten->sub_isi}}
            </h3>
            <h5 class="post-subtitle">
              {{$konten->tag->nama}}
            </h5>
          </a>
          <p class="post-meta">Posted by
            <a href="#"> {{$konten->penulis->nama}} </a>
            on {{$konten->created_at}}</p>
        </div>
        <hr>
        @endforeach
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
  </div>

  <hr>

  <!-- Footer -->
  @include('Client.Template.footer')

 

</body>

</html>
