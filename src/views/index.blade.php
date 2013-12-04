@extends('laravel-simple-faqs::layouts.master')

@section('title')
	{{ Config::get('laravel-simple-faqs::page_title') }}
@endsection

@section('meta_description')
	{{ Config::get('laravel-simple-faqs::meta_description') }}
@endsection

@section('meta_keywords')
	{{ Config::get('laravel-simple-faqs::meta_keywords') }}
@endsection

@section('content')
	@include ('laravel-simple-faqs::partials.faqs_list')
@stop