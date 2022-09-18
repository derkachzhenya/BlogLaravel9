@extends('admin.layouts.main')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        
        <div class="col-12 mt-3">
          {{ __('Категории') }}
        </div>
      </div>
      <div class="row">
        <div class="col-5 mt-3">
          <div class="card">
           
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>{{ __('Номер') }}</th>
                    <td>{{ $category->id }}</td>
                    
                  </tr>
                </thead>
                <tbody>
                 
                      
                  
                  <tr>
                    
                    <th>{{ __('Категория') }}</th>
                    <td>{{ $category->title }}</td>
                    
                  </tr>
                 
                 </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
    </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection