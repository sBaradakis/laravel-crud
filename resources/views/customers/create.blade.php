@extends('layouts.app')

@section('content')

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{route('customers.store')}}">
    @csrf
    <input type="text" name="name" id="input-name" value="{{old('name')}}">
    <input type="text" name="email" id="input-email" value="{{old('email')}}">
    <button type="submit">Save</button>

</form>
@endsection