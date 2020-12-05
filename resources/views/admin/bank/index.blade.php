
@extends('admin.layout.master')
@section('title', '-Bank')
@section('meta_description', '-Bank')
@section('meta_keywords', '-Bank')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Bank</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Bank</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
      <div class="card">

        <div class="card-header">
          <h3 class="card-title float-left">Bank</h3>

          {{-- <span class="oi" data-glyph="plus"></span> --}}
          <a href="{{ route('bank.create') }}" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add</a>
          <div class="clearfix"> </div>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="card-body pl-0">
                {{-- {!! Form::open(['route'=>'bank.index','method'=>'get']) !!}
                <div class="form-row">
                    <div class="col-md-3">
                        {!! Form::select('madrasa_id', $madrasas,isset($_GET['madrasa_id']) ? $_GET['madrasa_id'] : '', ['class'=>'select2 select2-purple form-control','placeholder'=>'Select Madrasa']) !!}
                    </div>
                    <div class="col-md-2">
                        {!! Form::submit('Find', ['class'=>'btn btn-primary']) !!}
                    </div>
                </div>
                {!! Form::close() !!} --}}
            </div>
          <div class="table-responsive">
              <table class="table">
                  <tr>
                      <th width="40px">Sn</th>
                      <th>Picture</th>
                      <th>T. Name</th>
                      <th>M. Name</th>
                      <th>T. Code</th>
                      <th>Designation</th>
                      {{-- <th>Email</th> --}}
                      <th>Mobile</th>
                      <th>Status</th>
                      <th>Action</th>
                  </tr>
                  {{-- @foreach($teachers as $key => $teacher)
                  <tr>
                      <td>{{ ++$key }}</td>
                    <td><img src="{{ asset($teacher->profile_picture) }}" width="50px"></td>
                    <td>{{ $teacher->name_bn }}</td>
                    <td>{{ $teacher->madrasa->name_bn ?? '' }}</td>
                    <td>{{ $teacher->teacher_code }}</td>
                    <td>{{ $teacher->designation }}</td>
                    <td>{{ $teacher->mobile }}</td>
                    <td> @if($teacher->status == 1) Active @else Inactive @endif </td>
                    <td>


                          <form action="{{ route('teacher.destroy',$teacher->id) }}" method="POST">

                            <div class="btn-group btn-group-toggle" >
                                <a href="{{ route('teacher.edit',$teacher->id) }}" class="btn btn-success btn-sm">Edit</a>


                                <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</button>

                            </div>


                            @csrf
                            @method('DELETE')


                        </form>
                    </td>
                </tr>
                  @endforeach
                  @if($teachers->isEmpty())
                    <tr>
                        <td colspan="9">No Data Found</td>
                    </tr>
                  @endif

              </table>
          </div>
          {{ $teachers->links('admin.layout.includes.paginator') }} --}}
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@section('footer_script')
<script>
    $( document ).ready(function(){
        $('#teacher').addClass('active');
    });

</script>
@endsection
