@extends('layouts.app')

@section('title', '棋譜詳細')

<!-- kifPlayerより必要ファイルの取り込み (適宜ファイルパスの変更)-->
<meta name="viewport" content="width=device-width, initial-scale=1" "user-scalable=no">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="{{ asset('/js/kifPlayer.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.4.1/snap.svg.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="{{ asset('/css/shogistyle.css') }}" rel="stylesheet">
<!-- 引用終わり -->

@section('content')
  @include('layouts.nav')
  <div>
    <div class="font-weight-bold">
      ☗先手：{{$record->sente}}
    </div>
    <div class="font-weight-bold">
      ☖後手：{{$record->gote}}
    </div>
  </div>
  <hr>
  <div class="kifPlayer_block">
    <data class="shogiboard" id="kif" value="ryu3001">
    <svg id="board" xmlns="http://www.w3.org/2000/svg" width="450" height="570" viewBox="0, 0, 450, 570"></svg>
    <script type="kif">
      {{$record->kifu_uri}}
    </script>
  </div>

@endsection
