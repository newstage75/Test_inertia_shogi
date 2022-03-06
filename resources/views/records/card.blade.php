<div class="mt-3 col-4">
  <div class="card mr-1">
    <div class="card-body d-flex flex-row">
      <a class="text-dark" href="{{ route('records.show', ['record' => $record]) }}">
        <i class="fas fa-user-circle fa-3x mr-1"></i>
        <div>
          <div class="font-weight-bold">
            ☗先手：{{$record->sente}}
          </div>
          <div class="font-weight-bold">
            ☖後手：{{$record->gote}}
          </div>
        </div>
      </a>
    </div>
    <div class="pl-5 m-0 d-flex">
      <p class=>{{$record->place}}</p>
      {{-- 管理人（更新削除画面） --}}
      @if( Auth::id() === $record->user_id )
        <!-- dropdown -->
        <div class="ml-auto card-text">
          <div class="dropdown">
            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <button type="button" class="btn btn-link text-muted m-0 p-2">
                <i class="fas fa-ellipsis-v"></i>
              </button>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="{{ route("records.edit", ['record' => $record]) }}">
                <i class="fas fa-pen mr-1"></i>記事を更新する
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-{{ $record->id }}">
                <i class="fas fa-trash-alt mr-1"></i>記事を削除する
              </a>
            </div>
          </div>
        </div>
        <!-- dropdown -->

        <!-- modal -->
        <div id="modal-delete-{{ $record->id }}" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form method="POST" action="{{ route('records.destroy', ['record' => $record]) }}">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                  {{ $record->id }}を削除します。よろしいですか？
                </div>
                <div class="modal-footer justify-content-between">
                  <a class="btn btn-outline-grey" data-dismiss="modal">キャンセル</a>
                  <button type="submit" class="btn btn-danger">削除する</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- modal -->
      @endif
      {{-- ここまで更新削除画面 --}}
    </div>
    <div class="card-body pt-0 pb-2">
      <img class="kyokumen-image" src="{{ asset('/storage/kyokumen/'.$record->thumbnail) }}">
    </div>
  </div>
</div>

<style media="screen">
  .kyokumen-image{
    width: 100%;
  }
</style>