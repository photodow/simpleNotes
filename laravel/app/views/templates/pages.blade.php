@extends('templates.master')

@section('pageTitle')
	<?php echo $pageTitle; ?>
@stop

@section('content')
	<?php echo $contentView; ?>
@stop

@section('navigation')
	<?php echo $navigationView; ?>
@stop