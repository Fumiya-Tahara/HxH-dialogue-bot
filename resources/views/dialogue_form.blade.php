@extends('layouts.app')

@section('content')
@if(isset($errorMessage))
<p>{{$errorMessage}}</p>
@endif
<form action="{{ route('create.dialogue') }}" method="POST">
    @csrf

    <h3 class="mb-5">セリフを作成</h3>
    <p>
        <label for="name">キャラクター</label>
        <select class="form-select" name="character_id" id="character_id">
            <option selected value="---">---</option>
            @foreach($characters as $character)
            <option value="{{$character->id}}">{{$character->name}}</option>
            @endforeach
        </select>
    </p>
    <p>
        <label for="system">セリフ</label>
        <textarea class="form-control" name="dialogue" id="dialogue" cols="100" rows="5"></textarea>
    </p>
    <button type="submit" class="btn btn-secondary">保存する</button>
</form>
@endsection
