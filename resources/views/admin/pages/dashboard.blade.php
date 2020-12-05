@extends('admin.layout.master')
@section('title', 'Dashboard')

@section('content')

<h1>Dashboard</h1>





@endsection
@section('footer_script')
<script>
    $( document ).ready(function(){
        $('#dashboard').addClass('active');
    });

</script>
@endsection
