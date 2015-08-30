@extends('dashboard')

@section('left-links')
	@include('dashboard.account.left-links')
@endsection

@section('tab-section')
	@include('dashboard.account.settings.tab-section')
@endsection

@section('tab-content')
	@include('dashboard.account.settings.tab-content')
@endsection