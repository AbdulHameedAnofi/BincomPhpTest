@extends('layout.app')

@section('content')
    <h2>Polling Unit Results</h2><br>
    <form action="/pollingUnitResults" method="post">
        @csrf
        <input type="text" name="polling_unit" list="value" placeholder="Select or Input Polling Unit">
        <datalist id="value">
            <option value="Sapele Ward 8 PU _">Sapele Ward 8 PU _</option>
            <option value="Primary School in Aghara">Primary School in Aghara</option>
            <option value="Ishere Primary School  Aghara">Ishere Primary School  Aghara</option>
            <option value="Igini Primary School">Igini Primary School</option>
            <option value="Umukwapa poll unit 1">Umukwapa poll unit 1</option>
            <option value="Church in Effurun1 Ovie">Church in Effurun1 Ovie</option>
            <option value="Effurun 2 in Uvwie">Effurun 2 in Uvwie</option>
            <option value="school in ethiope west">school in ethiope west</option>
            <option value="agbasa 1">agbasa 1</option>
            <option value="Customary Court P.t.i Road">Customary Court P.t.i Road</option>
            <option value="effurun 2">effurun 2</option>
            <option value="asumbo town hall1">asumbo town hall1</option>
            <option value="eki-otoi">eki-otoi</option>
            <option value="pollling 3 in agbara">pollling 3 in agbara</option>
            <option value="aghara ii">aghara ii</option>
            <option value="New Polling Unit">New Polling Unit</option>
            
        </datalist><br><br>
    @if (!empty($_POST['polling_unit']))
    The result for "{{$_POST['polling_unit']}}" polling unit is <b>{{$result}}</b><br><br>
    @endif
        <input type="submit" value="Check votes">
    </form>
@endsection