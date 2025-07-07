@extends('layouts.app')
@section('content')
@include('commons.errors')
<form action="{{ route('coffee_records.update', $coffee_record) }}" method="post">
    @method('patch')
    @include('coffee_records.form')
    <button type="submit">更新する</button>
    <a href="{{ route('coffee_records.show', $coffee_record) }}">キャンセル</a>
</form>
@endsection()