 @csrf
 <dl class="form-list">
    <dt>豆の名前</dt>
    <dd><input type="text" name="bean_name" value="{{ old('bean_name',$coffee_record->bean_name) }}"></dd>
    <dt>焙煎度</dt>
    <dd>
        <input type="radio" name="roast_level" value="浅煎り" {{ old('roast_level',$coffee_record->roast_level) == '浅煎り' ? 'checked' : '' }}>浅煎り
        <input type="radio" name="roast_level" value="中煎り" {{ old('roast_level',$coffee_record->roast_level) == '中煎り' ? 'checked' : '' }}>中煎り
        <input type="radio" name="roast_level" value="深煎り" {{ old('roast_level',$coffee_record->roast_level) == '深煎り' ? 'checked' : '' }}>深煎り
    </dd>
    <dt>挽き目</dt>
    <dd>
        <input type="radio" name="grind_level" value="極細挽き" {{ old('grind_level',$coffee_record->grind_level) == '極細挽き' ? 'checked' : '' }}>極細挽き
        <input type="radio" name="grind_level" value="細挽き" {{ old('grind_level',$coffee_record->grind_level) == '細挽き' ? 'checked' : '' }}>細挽き
        <input type="radio" name="grind_level" value="中細挽き" {{ old('grind_level',$coffee_record->grind_level) == '中細挽き' ? 'checked' :'' }}>中細挽き
        <input type="radio" name="grind_level" value="中挽き" {{ old('grind_level',$coffee_record->grind_level) == '中挽き' ? 'checked' :'' }}>中挽き
        <input type="radio" name="grind_level" value="粗挽き" {{ old('grind_level',$coffee_record->grind_level) == '粗挽き' ? 'checked' : '' }}>粗挽き
    </dd>
    <dt>豆の量</dt>
    <dd><input type="number" name="bean_amount" value="{{ old('coffee_record',$coffee_record->bean_amount)}}">グラム</dd>
    <dt>湯の量</dt>
    <dd><input type="number" name="water_amount" value="{{ old('water_amount',$coffee_record->water_amount) }}">グラム</dd>
    <dt>抽出時間</dt>
    <dd><input type="number" name="brew_sec" value="{{ old('brew_sec' ,$coffee_record->brew_sec)}}">秒</dd>
    <dt>抽出間隔</dt>
    <dd><input type="number" name="interval_sec" value="{{ old('interval_sec' ,$coffee_record->interval_sec)}}">秒</dd>
    <dt>味わい</dt>
    <dd>
        <input type="radio" name="flavor" value="苦みが強い" {{ old('flavor',$coffee_record->flavor) == '苦みが強い' ? 'checked' : '' }}>苦みが強い
        <input type="radio" name="flavor" value="標準的な味" {{ old('flavor',$coffee_record->flavor) == '標準的な味' ? 'checked' : '' }}>標準的な味
        <input type="radio" name="flavor" value="酸味が強い" {{ old('flavor',$coffee_record->flavor) == '酸味が強い' ? 'checked' : '' }}>酸味が強い
    </dd>    
    <dt>５段階評価</dt>
    <dd>    
        <input type="radio" name="rating" value="1" {{ old('rating',$coffee_record->rating) == '1' ? 'checked' : '' }}>１（あまり好みではない）<br>
        <input type="radio" name="rating" value="2" {{ old('rating',$coffee_record->rating) == '2' ? 'checked' : '' }}>２<br>
        <input type="radio" name="rating" value="3" {{ old('rating',$coffee_record->rating) == '3' ? 'checked' : '' }}>３<br>
        <input type="radio" name="rating" value="4" {{ old('rating',$coffee_record->rating) == '4' ? 'checked' : '' }}>４<br>
        <input type="radio" name="rating" value="5" {{ old('rating',$coffee_record->rating) == '5' ? 'checked' : '' }}>５（好みに合っている）
    </dd>
    <dt>感想</dt>
    <dd><textarea name="impression" rows="5">{{ old('impression', $coffee_record->impression)}}</textarea></dd>
</dl>