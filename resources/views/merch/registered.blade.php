@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
            <div class="page-header center-block">
                <h1>Register new merchant: Success</h1>
                <div class="alert alert-success" role="alert">
                <p>Please check your email and click verification link to activate your merchant account.</p>
<!--                <a class="btn btn-primary" href="{{ url('/merchant/unibutton') }}">Create buybutton now</a> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('add-js')
@endsection