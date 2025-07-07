@extends('layouts.app')
@section('content')
@include('commons.errors')
       <form action="{{ route('coffee_records.store') }}" method="post">
            @include('coffee_records.form')
            <button type="submit">登録する</button>
            <a href="{{ route('coffee_records.index') }}">キャンセル</a>
        </form>
@endsection()