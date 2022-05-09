@extends('admin.layouts.app')

@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Text Editors</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Text Editors</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
    
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-outline card-info">
                <div class="card-header">
                  <h3 class="card-title">
                    Ajouter un article
                    <small>Simple and fast</small>
                  </h3>
                  <!-- tools box -->
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                      <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                            title="Remove">
                      <i class="fas fa-times"></i></button>
                  </div>
                  <!-- /. tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body pad">
                        <form role="form" method="POST" id="quickForm" enctype="multipart/form-data" action="{{ route('post.update',['post_id'=>$post->id]) }}" >
                                @method('put')
                                @csrf
                        <div class="row">
                                <div class="col-md-8">
                                        <div class="form-group">
                                        <input type="text" name="title" value="{{ $post->title }}" class="form-control" id="exampleInputPassword1" placeholder="Entrer le nom">
                                              </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image" id="image" placeholder="ajouter une image" >
                                            <label for="image" class="custom-file-label">ajouter une image</label>
                                        </div>
                                    </div>
                                </div>
                        </div>
                  <div class="mb-3">
                  <textarea class="textarea" placeholder="Place some text here" name="content"
                              style="width: 100%; height: 700px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $post->content }}</textarea>
                  </div>
                  <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                      </div>
                        </form>
                  <p class="text-sm mb-0">
                    Editor <a href="https://github.com/bootstrap-wysiwyg/bootstrap3-wysiwyg">Documentation and license
                    information.</a>
                  </p>
                </div>
              </div>
            </div>
            <!-- /.col-->
          </div>
          <!-- ./row -->
        </section>
      @endsection
