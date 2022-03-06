@csrf
<div class="md-form">
  <label>☗先手</label>
  <input type="text" name="sente" class="form-control" required value="{{ $record->sente ?? old('sente') }}">
</div>
<div class="md-form">
  <label>☖後手</label>
  <input type="text" name="gote" class="form-control" required value="{{ $record->gote ?? old('gote') }}">
</div>
<div class="md-form">
  <label>対局場所</label>
  <input type="text" name="place" class="form-control" required value="{{ $record->place ?? old('place') }}">
</div>
<div class="form-group">
  <record-tags-input
  >
  </record-tags-input>
</div>
<div class="form-group">
  <label></label>
  <textarea name="memo" required class="form-control" rows="4" placeholder="メモ">{{ $record->memo ?? old('memo') }}</textarea>
</div>
<div class="md-form">
  <label>サムネイル</label>
  <input type="text" name="thumbnail" class="form-control" required value="{{ $record->thumbnail ?? 'sho1.jpeg' }}" >
</div>
<div class="form-group">
  <label></label>
  <textarea name="kifu_uri" required class="form-control" rows="16" placeholder="棋譜">{{ $record->kifu_uri ?? old('kifu_uri') }}</textarea>
</div>

<!-- Vue連携のために追加 -->
<script src="{{ asset('js/app.js') }}"></script>