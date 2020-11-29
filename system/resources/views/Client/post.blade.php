<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>GO - Blog</title>

  <!-- Bootstrap core CSS -->
  @include('Client.Template.css')

</head>

<body>

  <!-- Navigation -->
  @include('Client.Template.navigation')

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/post-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>{{$konten->judul}}</h1>
            <h2 class="subheading">{{$konten->sub_isi}}</h2>
            <span class="meta">Posted by
              <a href="#">{{$konten->penulis->nama}}</a>
              on {{$konten->created_at}}</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          
          {!! nl2br ($konten->isi) !!}
          
        </div>
      </div>
    </div>
  </article>
  <hr>

  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1" id="">
          <div class="page-header mt-5">
              <h3 class="reviews">Komentar</h3>
          </div>
          <div class="comment-tabs mt-5">            
              <div class="tab-content">
                  <div class="tab-pane active" id="comments-logout">                
                      <ul class="media-list">
                        <li class="media">
                          <!-- komentar tampil -->
                          <div class="media-body">
                            <div class="well well-lg">
                                <h6 class="media-heading text-uppercase reviews">
                                  y
                                </h6>
                                <p class="media-comment">
                                  y
                                </p>
                                <a class="btn btn-primary btn-circle text-uppercase mb-5" data-toggle="collapse" href="#balas"><span class="glyphicon glyphicon-comment"></span>Balas</a>
                                <a class="btn btn-warning btn-circle text-uppercase mb-5" data-toggle="collapse" href="#replyOne"><span class="glyphicon glyphicon-comment"></span>Balasan</a>
                            </div>              
                          </div>
                          <!-- balas komentar -->
                          <div class="collapse" id="balas">
                            <form action="{{url('Client/post/balas'), $konten->id}}" method="post">
                              @csrf
                              <ul class="media-list">
                                  <li class="media media-replied">
                                      <div class="media-body">
                                        <div class="well well-lg">
                                            <div class="form-group">
                                              <label for="" class="control-label"> Nama </label>
                                              <input type="text" class="form-control" name="nama">
                                            </div>
                                            <div class="form-group">
                                              <label for="" class="control-label"> Email </label>
                                              <input type="text" class="form-control" name="email">
                                            </div>
                                            <div class="form-group">
                                              <label for="" class="control-label"> Balas </label>
                                              <textarea name="balas" class="form-control"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary float-right"><i class="fa fa-save"> Kirim </i></button>
                                        </div>              
                                      </div>
                                  </li>
                              </ul>
                            </form> 
                          </div>
                          <!-- /balas komentar -->
                          <!-- balasan Tampil -->
                          <div class="collapse" id="replyOne">
                              <ul class="media-list">
                                  <li class="media media-replied">
                                      <div class="media-body">
                                        <div class="well well-lg">
                                            <h6 class="media-heading text-uppercase reviews"><span class="glyphicon glyphicon-share-alt"></span> y</h6>
                                            <p class="media-comment">
                                              y
                                            </p>
                                        </div>              
                                      </div>
                                  </li>
                              </ul>  
                          </div>
                        </li>
                    </ul>
                  </div>          
              </div>
          </div>
      </div>
    </div>
  </div>

  <!--KolomKomentar-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 mt-5">
        <div class="card">
          <div class="card-header">
            Komentar
          </div>
          <div class="card-body">
            <form action="" method="post">
              @csrf

              <input type="hidden" name="id_konten" value="{{$konten->id}}">
              <div class="form-group">
                <label for="" class="control-label"> Nama </label>
                <input type="text" class="form-control" name="nama">
              </div>
              <div class="form-group">
                <label for="" class="control-label"> Email </label>
                <input type="text" class="form-control" name="email">
              </div>
                <div class="form-group">
                  <label for="" class="control-label"> Komentar </label>
                  <textarea name="komentar" class="form-control"></textarea>
                </div>
          
              <button type="submit" class="btn btn-primary float-right"><i class="fa fa-save"> Kirim </i></button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  @include('Client.Template.footer')

  <!-- Bootstrap core JavaScript -->
  @include('Client.Template.js')

</body>

</html>
