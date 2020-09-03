@extends('...common.layout')

@section('owner_index')
    // 表示方法を記載

    @foreach ($items as $item)
        名前：{{ $item -> name }}---車番：{{ $item -> car_number }}<br>
    @endforeach

@endsection
