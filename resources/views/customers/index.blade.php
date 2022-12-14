@extends('layouts.app')

@section('content')

<a href="{{route('customers.create')}}">Create new</a>

<table>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>email</th>
    <th>created at</th>
    <th>updated at</th>
    <th>actions</th>
  </tr>
  @foreach($customers as $customer)
  <tr>
    <td>{{$customer->id}}</td>
    <td>{{$customer->name}}</td>
    <td>{{$customer->email}}</td>
    <td>{{$customer->created_at}}</td>
    <td>{{$customer->updated_at}}</td>
    <td>
      <a href="{{route('customers.show', [ "id" => $customer->id  ])}}">Show</a> 
      <a href="{{route('customers.edit', [ "id" => $customer->id  ])}}">Edit</a> 
    </td>
  </tr>
  @endforeach
</table>
@endsection