@extends('layouts.app')

@section('content')
<form action="{{ route('create.character') }}" method="POST">
    @csrf

    <p>
        <label for="name">名前</label>
        <input type="text" name="name" id="name">
    </p>
    <p>
        <label for="system">系統</label>
        <input type="text" name="system" id="system">
    </p>
    <button type="submit">保存する</button>
</form>
@endsection
