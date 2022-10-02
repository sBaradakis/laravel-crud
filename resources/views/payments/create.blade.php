@extends('layouts.app')

@section('content')

<form method="POST" action="{{route('payments.store')}}">
    @csrf
    <table>
        <tr>
            <th>Customer</th>
            <th>Amount</th>
            <th>Date</th>
        </tr>
        <tr>
            <th>
                <select id="email" name="email">
                    @foreach($customers as $customer)
                    <option value="{{$customer->email}}">{{$customer->email}}</option>
                    @endforeach
                </select>
            </th>
            <th><input type="text" name="amount" id="input-amount"></th>
            <th><input type="date" name="date" id="input-date"></th>
            <th><button type="submit">Save</button></th>
        <tr> 
    <table>
</form>

@endsection