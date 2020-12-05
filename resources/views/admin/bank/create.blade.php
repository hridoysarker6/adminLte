
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
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Bank</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                {!! Form::open(['route' => 'bank.store','files' => true]) !!}
                @csrf


                <div class="form-row">
                    <div class="form-group col-md-4">
                        {!! Form::label('bankName', 'Bank Name') !!}
                        {!! Form::text('bank_name',old('bank_name'), ['class'=>'form-control','id'=>'bankName']) !!}

                        @if ($errors->has('bank_name'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $errors->first('bank_name') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::label('accountName', 'Account Name') !!}
                        {!! Form::text('account_name',old('account_name'), ['class'=>'form-control','id'=>'accountName']) !!}

                        @if ($errors->has('account_name'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $errors->first('account_name') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::label('accountNo', 'Account No') !!}
                        {!! Form::text('account_no',old('account_no'), ['class'=>'form-control','id','accountNo']) !!}

                        @if ($errors->has('account_no'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $errors->first('account_no') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        {!! Form::label('currentAmount', 'Current Amount') !!}
                        {!! Form::number('current_amount',old('current_amount'), ['class'=>'form-control','id','currentAmount']) !!}

                        @if ($errors->has('current_amount'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $errors->first('current_amount') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group col-md-3">
                        {!! Form::label('status', 'Status') !!}
                        {!! Form::select('status',status(),old('status'), ['class'=>'form-control','id'=>'status','placeholder'=>'Select Status']) !!}

                        @if ($errors->has('status'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $errors->first('status') }}</strong>
                        </span>
                        @endif
                    </div>

                </div>
                <div class="form-row">
                    <div class="from-group col-md-6">
                        <a href="{{ url('/bank') }}" class="btn btn-danger">Cancel</a>
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
        $('#Bank').addClass('active');
    });

</script>
@endsection
