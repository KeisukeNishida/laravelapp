@extends('layouts.helloapp')
@section('title','Index')
@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    <p>必須なだけ記述できます。</p>
@endsection
@section('footer')
copyright 2021 nishida
@endsection


