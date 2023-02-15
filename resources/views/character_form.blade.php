@extends('layouts.app')

@section('content')
<form action="{{ route('create.character') }}" method="POST">
    @csrf

    <h3 class="mb-5">キャラクターを作成</h3>
    <p>
        <label for="name">名前</label>
        <input class="form-control" type="text" name="name" id="name">
    </p>
    <p>
        <label for="system">系統</label>
        <input class="form-control" type="text" name="system" id="system">
    </p>
    <button type="submit" class="btn btn-secondary">保存する</button>
</form>
@endsection
