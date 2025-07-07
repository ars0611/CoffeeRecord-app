@extends('layouts.app')
@section('content')
<article class="coffee_record-detail">
    <h1 class="coffee_record-materials">{{ $coffee_record->bean_name }}</h1>
    <div class="coffee_record-materials">焙煎度：{{ $coffee_record->roast_level }}</div>
    <div class="coffee_record-materials">挽き目：{{ $coffee_record->grind_level }}</div>
    <div class="coffee_record-materials">豆の量：{{ $coffee_record->bean_amount }}グラム</div>
    <div class="coffee_record-materials">湯量：{{ $coffee_record->water_amount }}グラム</div>
    <div class="coffee_record-methods">抽出時間：{{ $coffee_record->brew_sec }}秒</div>
    <div class="coffee_record-methods">抽出間隔：{{ $coffee_record->interval_sec }}秒</div>
    <div class="coffee_record-methods">味わい：{{ $coffee_record->flavor }}</div>
    <div class="coffee_record-rating">５段階評価：{{ $coffee_record->rating }}</div>
    <div class="coffee_record-impression">感想：{!! nl2br(e($coffee_record->impression)) !!}</div>
    <div class="coffee_record-info">登録日時：{{ $coffee_record->created_at }}</div>
    @can('updata', $coffee_record)
    <div class="coffee_record-controll">
        <a href="{{ route('coffee_records.edit', $coffee_record) }}">編集</a>
        <form onsubmit="return confirm('本当に削除しますか？')" action="{{ route('coffee_records.destroy', $coffee_record)}}" method="post">
            @csrf
            @method('delete')
            <button type="submit">削除</button>
        </form>
    </div>
    @endcan
</article>
@endsection    
