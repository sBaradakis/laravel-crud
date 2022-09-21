@extends('layouts.app')

@section('content')

<p>id: {{$customer->id}}</p>
<p>name: {{$customer->name}}</p>
<p>email: {{$customer->email}}</p>
<p>created at: {{$customer->created_at}}</p>
<p>updated at: {{$customer->updated_at}}</p>


<a href="{{route('customers.index')}}">Back to index</a>

@endsection