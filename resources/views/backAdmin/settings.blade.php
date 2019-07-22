@extends('layout.defaultLayoutAdmin')
@section('title', 'Visca s.n.c.')

@section('head')
  
@endsection

@section('content')
<div class="w3-main" style="margin-left:300px;margin-top:43px;">
    <!--TITOLO DELLA PAGINE-->
    <div class="w3-container w3-blue-grey">
        <h1>Informazioni sito</h1>
        <p>Utilizza questa form per aggingere Le informazioni.</p>
        <form class="w3-container" method="post" action="{{URL::to('/setting_site')}}?ref={{$_SERVER['REQUEST_URI']}}" enctype="multipart/form-data" >
            @csrf
            <div class="w3-row w3-container">
                <div class="w3-col w3-light-grey w3-center">
                {{!$impostazioni = App\Setting::all()}}
                    <table style="width: 100%">
                        <tr>
                            <th style="width:40%"><p><strong>Impostazioni</strong></p></th>
                            <th style="width:60%"><p><strong>Attuali</strong></p></th>
                        </tr>
                        <tr>
                            <td><span>Telefono</span></td>
                            <td><input class="w3-input" name="impostazioni[telefono]" type="text" value="{{ $impostazioni->where('key', 'telefono')->first()->value}}" required></td>
                        </tr>
                        <tr>
                            <td><span>Fax</span></td>
                            <td><input class="w3-input" name="impostazioni[fax]" type="text" value="{{ $impostazioni->where('key', 'fax')->first()->value}}" required></td>
                        </tr>
                        <tr>
                            <td><span>Email</span></td>
                            <td><input class="w3-input" name="impostazioni[email]" type="text" value="{{ $impostazioni->where('key', 'email')->first()->value}}" required></td>
                        </tr>
                        <tr>
                            <td><span>Indirizzo</span></td>
                            <td><input class="w3-input" name="impostazioni[indirizzo]" type="text" value="{{ $impostazioni->where('key', 'indirizzo')->first()->value}}" required></td>
                        </tr>
                        <tr>
                            <td><span>Città</span></td>
                            <td><input class="w3-input" name="impostazioni[citta]" type="text" value="{{ $impostazioni->where('key', 'citta')->first()->value}}" required></td>
                        </tr>
                        <tr>
                            <td><span>CAP</span></td>
                            <td><input class="w3-input" name="impostazioni[cap]" type="text" value="{{ $impostazioni->where('key', 'cap')->first()->value}}" required></td>
                        </tr>
                    </table>
                </div>

            </div>
            
            <div class="w3-col w3-center">
                <button class="w3-button w3-ripple w3-green" type="submit" style="width:50%">Salva</button>
            </div>

        </form>
    </div>
    <hr>
    
    <!--TITOLO DELLA PAGINE-->
    <div class="w3-container w3-blue-grey">
        <h1>Banner principale</h1>
        <p>Utilizza questa form per aggingere il banner superiore.</p>
        <form class="w3-container" method="post" action="{{URL::to('/new_banner')}}?ref={{$_SERVER['REQUEST_URI']}}" enctype="multipart/form-data" >
            @csrf
            <div class="w3-row w3-container">
                <div class="w3-col m6 w3-light-grey w3-center">
                    <p>Testo banner</p>
                    <textarea class="w3-input" name="description" type="text" placeholder="Descrizione"></textarea>

                </div>


                <div class="w3-col m6 w3-light-grey w3-center">
                    <p>Link cliccabile</p>
                    <input class="w3-input" name="link" type="text" placeholder="Inserisci un link per il click del banner" required>
                </div>
            </div>
            
            <div class="w3-col m6 w3-center">
                <button class="w3-button w3-ripple w3-green" type="submit" value="inserimentoProdotto" name="actionAd" style="width:50%">Salva</button>
            </div>
            <div class="w3-col m6 w3-center">
                <button class="w3-button w3-ripple w3-red" style="width:50%">Annulla</button>
            </div>

        </form>
    </div>
    <hr>
    <!--TITOLO DELLA PAGINE-->
    <div class="w3-container w3-blue-grey" style="padding-bottom: 16px;">
        <h1>Banner attuale</h1>
        
        <div class="w3-white" id="divLocationMain" style="margin-top: 2%;">
            <table class="w3-table-all w3-margin-top" id="myTable">
                <tr>
                    <th style="width:60%;">Descrizione</th>
                    <th style="width:15%;">Link</th>
                    <th style="width:15%;">Data di creazione</th>

                </tr>
                {{!$banners = App\Banner::whereNotNull('description')->orderBy('created_at','desc')->get()}}
                @foreach($banners as $ban)
                <tr>
                    <td style="width:10%;">{{ $ban->description }}</td>
                    <td style="width:25%;">{{ $ban->link }}</td>
                    <td style="width:10%;">{{ $ban->created_at }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection