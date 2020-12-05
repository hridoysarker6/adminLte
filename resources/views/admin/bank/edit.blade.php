
@extends('admin.layout.master')
@section('title', '-Teacher')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Teacher</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Teacher</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      {{-- <div class="card"> --}}
          @include('admin.notification')
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Teacher</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                {!! Form::open(['route' => ['teacher.update',$teacher->id],'files' => true]) !!}
                @method('put')
                @csrf

                <div class="form-row">
                    <div class="form-group col-md-12">
                        {!! Form::label('madrasaId', 'Madrasa Name') !!}
                        {!! Form::select('madrasa_id',$madrasas,$teacher->madrasa_id, ['class'=>'select2 select2-purple form-control','id'=>'madrasaId','placeholder'=>'Select Madrasa']) !!}

                        @if ($errors->has('madrasa_id'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $errors->first('madrasa_id') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        {!! Form::label('name', 'Teacher Name (En)') !!}
                        {!! Form::text('name',$teacher->name, ['class'=>'form-control','id'=>'name']) !!}

                        @if ($errors->has('name'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::label('nameBN', 'Teacher Name(বাংলা)') !!}
                        {!! Form::text('name_bn',$teacher->name_bn, ['class'=>'form-control','id'=>'nameBn']) !!}

                        @if ($errors->has('name_bn'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $errors->first('name_bn') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group col-md-4">
                        {!! Form::label('designation', 'Designation') !!}
                        {!! Form::text('designation',$teacher->designation, ['class'=>'form-control','id','designation']) !!}

                        @if ($errors->has('designation'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $errors->first('designation') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::email('email',$teacher->email, ['class'=>'form-control','id','email']) !!}

                        @if ($errors->has('email'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group col-md-3">
                        {!! Form::label('mobile', 'Mobile') !!}
                        {!! Form::tel('mobile',$teacher->mobile, ['class'=>'form-control','id','mobile']) !!}

                        @if ($errors->has('mobile'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $errors->first('mobile') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-md-3">
                        {!! Form::label('dateOfBirth', 'Date of Birth') !!}

                        {{-- <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            {!! Form::text('phone',$teacher->phone, ['class'=>'form-control  datetimepicker-input','id'=>'dateOfBirth','data-target'=>'#reservationdate']) !!}
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div> --}}

                        {!! Form::text('date_of_birth',dateFormat($teacher->date_of_birth), ['class'=>'form-control  datepicker','id'=>'dateOfBirth']) !!}

                        @if ($errors->has('date_of_birth'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $errors->first('date_of_birth') }}</strong>
                        </span>
                        @endif



                    </div>
                    <div class="form-group col-md-3">
                        {!! Form::label('nid_number', 'NID Number') !!}
                        {!! Form::text('nid_number',$teacher->nid_number, ['class'=>'form-control','id'=>'nid_number']) !!}

                        @if ($errors->has('nid_number'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $errors->first('nid_number') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>


                {{-- <p>Educational Qualification</p> --}}
                <div class="form-row">
                    <div class="form-group col-md-4">
                        {!! Form::label('latest_exam', 'Latest Examination Name') !!}
                        {{-- {!! Form::select('district_id',$districts,$teacher->district_id, ['class'=>'form-control','id'=>'districtId','placeholder'=>'Select District']) !!} --}}
                        {!! Form::text('latest_exam',$teacher->latest_exam, ['class'=>'form-control','id','latest_exam']) !!}
                        @if ($errors->has('latest_exam'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $errors->first('latest_exam') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-md-4 police-station">
                        {!! Form::label('division', 'Division') !!}
                        {!! Form::text('division',$teacher->division, ['class'=>'form-control','id','division']) !!}
                        @if ($errors->has('division'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $errors->first('division') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-md-4 ">
                        {!! Form::label('year', 'Year') !!}
                        {!! Form::text('year',$teacher->year, ['class'=>'form-control','id','year']) !!}

                        @if ($errors->has('year'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $errors->first('year') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        {!! Form::label('joining', 'Joining Date') !!}
                        {!! Form::text('joining_date',dateFormat($teacher->joining_date), ['class'=>'form-control datepicker','id'=>'joining']) !!}

                        @if ($errors->has('joining_date'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $errors->first('joining_date') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-md-3">
                        {!! Form::label('permanentJoiningDate', 'Permanent Joining Date') !!}
                        {!! Form::text('permanent_joining_date',dateFormat($teacher->permanent_joining_date), ['class'=>'form-control datepicker','id'=>'permanentJoiningDate']) !!}

                        @if ($errors->has('permanent_joining_date'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $errors->first('permanent_joining_date') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-md-3">
                        {!! Form::label('teacherCode', 'Teacher Code') !!}
                        {!! Form::text('teacher_code',$teacher->teacher_code, ['class'=>'form-control','id','teacherCode']) !!}

                        @if ($errors->has('teacher_code'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $errors->first('teacher_code') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-md-3">
                        {!! Form::label('status', 'Status') !!}
                        {!! Form::select('status',status(),$teacher->status, ['class'=>'form-control','id'=>'status','placeholder'=>'Select Status']) !!}

                        @if ($errors->has('status'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $errors->first('status') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        {!! Form::label('comment', 'Comment') !!}
                        {!! Form::textarea('comment',$teacher->comment, ['class'=>'form-control','id'=>'comment','rows'=>'3']) !!}

                        @if ($errors->has('comment'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $errors->first('comment') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        {!! Form::label('signature', 'Signature') !!}
                        <div class="input-group">
                            <div class="custom-file">
                                {!! Form::file('signature', ['class'=>'custom-file-input','id','signature']) !!}
                                {!! Form::label('signature', 'Signature',['class'=>'custom-file-label' ,'id'=>'signature']) !!}
                            </div>
                        </div>
                        <img src="{{ asset($teacher->signature) }}" width="50px " class="mt-2">
                        @if ($errors->has('signature'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $errors->first('signature') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group col-md-3">
                        {!! Form::label('exampleInputFile', 'Profile Picture') !!}

                        <div class="input-group">
                          <div class="custom-file">
                            {!! Form::file('profile_picture', ['class'=>'custom-file-input','id'=>'exampleInputFile']) !!}
                            {{-- <input type="file" class="custom-fi    le-input" id="exampleInputFile" name="p"> --}}
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>

                        </div>
                        <img src="{{ asset($teacher->profile_picture) }}" width="50px " class="mt-2">
                      </div>

                </div>
                <div class="form-row">
                    <div class="from-group col-md-6">
                        <a href="{{ url('/teacher') }}" class="btn btn-danger">Cancel</a>
                        {!! Form::submit('Submit', ['class'=>'btn btn-primary ']) !!}
                    </div>
                </div>



                {!! Form::close() !!}
            </div>
            <!-- /.card-body -->
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


	// on change district get thana
$('#districtId').on('change', function () {
    var districtId = $('#districtId').val();
    console.log(districtId);

    loading();

    $.ajax({

        url: "{{url('get-police-station') }}",
        type: 'POST',
        dataType: "JSON",
        data: {
            districtId: districtId
        },
        success: function (response) {
            Swal.close();
            $('.police-station').html(response.body);

            console.log(response);
        },
        error: function (xhr) {
            Swal.close();

            console.log(xhr.responseText);
        }
    });

});
// thana data
    // on change police station get union
    $( document ).ready(function(){
$('#policeStationId').on('change', function () {
    var policeStationId = $('#policeStationId').val();
    console.log(policeStationId);

    // loading();

    // $.ajax({

    //     url: "{{url('get-union') }}",
    //     type: 'POST',
    //     dataType: "JSON",
    //     data: {
    //         policeStationId: policeStationId
    //     },
    //     success: function (response) {
    //         Swal.close();
    //         $('.union').html(response.body);

    //         console.log(response);
    //     },
    //     error: function (xhr) {
    //         Swal.close();

    //         console.log(xhr.responseText);
    //     }
    // });

});
});
// thana data




// left sidebar active
    $( document ).ready(function(){
        $('#teacher').addClass('active');
    });

</script>
@endsection
