 @extends('admin.dashboard')
 @section('title', 'Website Manager')

 @section('main-content')
 @if (session('pesan'))
 <div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <h5><i class="icon fas fa-check"></i> Success!</h5>
  {{session('pesan')}}
</div>
 @endif
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Websites</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Websites</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Lists</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        {{-- {{dd($websites)}} --}}
        <div class="card-body">
          <button onclick="location.href='{{route('create-website')}}'" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Add data
          </button>
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>No.</th>
                <th>Website Name</th>
                <th>Link</th>
                <th>Category</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
                @php $no=1;@endphp
                @foreach ($websites as $item)
                <tr>
                  <td>{{$no}}</td>
                  <td>{{$item->name}}</td>
                  <td>{{$item->link}}</td>
                  <td>{{$item->category->name}}</td>
                  <td>
                    <a href="" data-toggle="tooltip" data-placement="top" title="Detail" class="btn btn-primary btn-sm"><i class="fas fa-book"></i></a>
                    <a href="" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-success btn-sm"><i class="nav-icons fas fa-edit"></i></a>
                    <a href="" data-toggle="tooltip" data-placement="top" title="Hapus" class="btn btn-danger btn-sm"><i class="nav-icons fas fa-trash"></i></a>
                  </td>
                </tr>
                @php $no+=1;@endphp
                @endforeach
              </tbody>
            </table>
          </div>
         <!-- /.card-body -->
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
     
 @endsection
