@extends('admin.layouts.app')
@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>liste des articles</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">liste des articlesss</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
    
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title"><a href="{{ route('post.create') }}" class="btn btn-primary">ajouter un article</a></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>id</th>
                      <th>titre</th>
                      <th>date de création</th>
                      <th></th>
                      <th></th>
                      <th></th>
                    </tr>
                    </thead>
                    <tbody>
                @foreach ($posts as $item)
                    <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->title}}</td>
                    <td>{{ $item->created_at }}</td>
                    <td><a class="btn btn-app" href="{{route('post.edit',['post_id'=>$item->id ]) }}" class="btn btn-primary inline">
                        <i class="fas fa-edit"></i> Edit
                      </a></td>
                      <td> 
                        <form action="{{ route('post.destroy',['post'=>$item->id]) }}" style="display:inline;"  method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger inline"><i class="fa fa-trash" aria-hidden="true"></i>Suprimer</button>
                        </form>
                      </td>
                    </tr>

                @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>{{ $posts->links() }}</th>
                    </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>
       @endsection
