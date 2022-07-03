@extends('layout.app')

@section('content')
    <h2>New Polling Unit Results Storage Page</h2>
    <br>
    <form action="/NewPollingUnit" method="post">
        @csrf
        <select name="party_abbreviation">
            <option value="PDP">PDP</option>
            <option value="DPP">DPP</option>
            <option value="ACN">ACN</option>
            <option value="PPA">PPA</option>
            <option value="CDC">CDC</option>
            <option value="JP">JP</option>
            <option value="ANPP">ANPP</option>
            <option value="LABOUR">LABOUR</option>
            <option value="CPP">CPP</option>
        </select><br><br>
        <input type="number" name="party_score" placeholder="Input score"><br><br>
    @if (isset($msg))
        {{$msg}} <br><br>
    @endif 
        <input type="submit" value="Store Results">
    </form>
@endsection