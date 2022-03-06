@extends('layouts.app')

@section('title', '棋譜レコード一覧')

@section('content')
  @include('layouts.nav')
  <div class="container mb-5">
    <div class="row">
    @foreach($records as $record)
      @include("records.card")
    @endforeach
    </div>
  </div>
  @include('layouts.footer')
@endsection