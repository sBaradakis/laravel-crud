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

<form method="POST" action="{{route('customers.update', ['id' => $customer->id ])}}">
    @csrf
    @method('PUT')

    <input type="text" name="name" id="input-name" value="{{old('name', $customer->name)}}">
    <input type="text" name="email" id="input-email" value="{{old('email', $customer->email)}}">
    
    <button type="submit">Update</button>

</form>
@endsection