@foreach($coffee_records as $coffee_record)
<article class="coffee_record-item">
    <div class="coffee_record-bean_name">
        <a href="{{ route('coffee_records.show', $coffee_record) }}">{{ $coffee_record->bean_name }}</a>
    </div>
    <div class="coffee_record-flavor">味わい：{{ $coffee_record->flavor }}</div>
    <div class="coffee_record-rating">5段階評価：{{ $coffee_record->rating }}</div>
    <div class="coffee_record-info">
        {{ $coffee_record->created_at }} | {{ $coffee_record->user->name }}
    </div>
</article>
@endforeach