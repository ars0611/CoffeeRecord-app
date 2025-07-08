@extends('layouts.app')
@section('content')
@include('commons.errors')
<h1 class="page-heading">マイページ</h1>
<p>ようこそ、{{ Auth::user()->name }}さん | <a href="{{ route('coffee_records.create') }}">レシピを登録する</a></p>
@include('coffee_records.coffee_records')
@endsection()