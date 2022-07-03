@extends('layout.app')

@section('content')
    <h2>All Polling Unit Results In a Local Government Area</h2><br>
    <form action="/LGA" method="post">
        @csrf
        <select name="lga_name">
            <option value="Aniocha North">Aniocha North</option>
            <option value="Aniocha - South">Aniocha - South</option>
            <option value="Ethiope East">Ethiope East</option>
            <option value="Ethiope West">Ethiope West</option>
            <option value="Ika North - East">Ika North - East</option>
            <option value="Ika - South">Ika - South</option>
            <option value="Isoko North">Isoko North</option>
            <option value="Isoko South">Isoko South</option>
            <option value="Ndokwa East">Ndokwa East</option>
            <option value="Ndokwa West">Ndokwa West</option>
            <option value="Okpe">Okpe</option>
            <option value="Oshimili - North">Oshimili - North</option>
            <option value="Oshimili - South">Oshimili - South</option>
            <option value="Patani">Patani</option>
            <option value="Sapele">Sapele</option>
            <option value="Udu">Udu</option>
            <option value="Ughelli North">Ughelli North</option>
            <option value="Ughelli South">Ughelli South</option>
            <option value="Ukwuani">Ukwuani</option>
            <option value="Uvwie">Uvwie</option>
            <option value="Bomadi">Bomadi</option>
            <option value="Burutu">Burutu</option>
            <option value="Warri North">Warri North</option>
            <option value="Warri South">Warri South</option>
            <option value="Warri South West">Warri South West</option>
            
        </select><br><br>
    @if (!empty($_POST['lga_name']))
    <p>The result for "{{$_POST['lga_name']}}" LGA is <b>{{$result}}</b></p><br>
    @endif
        <input type="submit" value="Check result">
    </form>
@endsection