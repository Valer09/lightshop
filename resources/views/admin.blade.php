@extends('layout.defaultLayoutAdmin')
@section('title', 'Visca s.n.c.')

@section('head')
  
@endsection

@section('content')

@php
$prodEsaurimento = App\Element::where('availability', '<=', 10)->get();
@endphp

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px;margin-top:43px;">

        <!-- Header -->
        <header class="w3-container" style="padding-top:22px">
            <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
        </header>

        <div class="w3-row-padding w3-margin-bottom">
            <div class="w3-quarter">
                <div class="w3-container w3-red w3-padding-16">
                    <a target="_blank" href="{{ url('https://mail.google.com/mail/u/0/#inbox') }}">
                        <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
                        <div class="w3-right">
                            <h3>52</h3>
                        </div>
                        <div class="w3-clear"></div>
                        <h4>Email</h4>
                    </a>
                </div>
            </div>
            <div class="w3-quarter">
                <div class="w3-container w3-blue w3-padding-16">
                    <a href="{{url('admin/orders')}}">
                        <div class="w3-left"><i class="fa fa-diamond w3-xxxlarge"></i></div>
                        <div class="w3-right">
                            <h3>{{ App\Order::where('state', 1)->count() }}</h3>
                        </div>
                        <div class="w3-clear"></div>
                        <h4>Ordini</h4>
                    </a>
                </div>
            </div>
            <div class="w3-quarter">
                <div class="w3-container w3-teal w3-padding-16">
                    <a href="#" onclick="openModalList('ProdEsauriti')">
                        <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
                        <div class="w3-right">
                            <h3>{{count($prodEsaurimento)}}</h3>
                        </div>
                        <div class="w3-clear"></div>
                        <h4>Prodotti in esaurimento</h4>
                    </a>
                </div>
            </div>
            <div class="w3-quarter">
                <div class="w3-container w3-orange w3-text-white w3-padding-16">
                    <a href="{{ url('admin/users') }}">
                        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
                        <div class="w3-right">
                            <h3>{{ App\User::all()->count() }}</h3>
                        </div>
                        <div class="w3-clear"></div>
                        <h4>Users</h4>
                    </a>
                </div>
            </div>
        </div>

        <div class="w3-panel">
            <div class="w3-row-padding" style="margin:0 -16px">
                <div class="w3-col w3-right w3-container" style="width:600px">
                    <iframe src="https://calendar.google.com/calendar/b/1/embed?mode=WEEK&height=450&wkst=2&hl=it&bgcolor=%23FFFFFF&src=viscasnc%40gmail.com&color=%231B887A&src=it.italian%23holiday%40group.v.calendar.google.com&color=%23125A12&ctz=Europe%2FRome" style="border: 0" width="600" height="450" frameborder="0" scrolling="no"></iframe>
                </div>
                <div class="w3-rest w3-container">
                    <h5>Feeds</h5>
                    <table class="w3-table w3-striped w3-white">
                        {{!$orders=\App\Order::where('order_shipped', null)->orderBy('created_at','asc')->get()}}
                        @for($i=0; $i < count($orders) && $i <= 10 ; $i++)
                        @php
                            $order = $orders[$i];
                            $user = \App\User::where('id', $order->user_id)->first();
                            $address = \App\Address::where('id', $order->address_id)->first();
                        @endphp
                        <tr>
                            <td><i class="fa fa-user w3-text-blue w3-large"></i></td>
                            <td>Nuovo ordine: {{$user->surname}}, di €{{ number_format($order->total, 2, ',', '.')  }} - {{$address->city}}.</td>
                            <td><i>{{ date($order->created_at) }}</i></td>
                        </tr>
                        @endfor
                    </table>
                </div>
            </div>
        </div>
        <hr>
        <div class="w3-container">
            <h5>General Stats</h5>
            <p>New Visitors</p>
            <div class="w3-grey">
                <div class="w3-container w3-center w3-padding w3-green" style="width:25%">+25%</div>
            </div>

            <p>New Users</p>
            <div class="w3-grey">
                <div class="w3-container w3-center w3-padding w3-orange" style="width:50%">50%</div>
            </div>

            <p>Bounce Rate</p>
            <div class="w3-grey">
                <div class="w3-container w3-center w3-padding w3-red" style="width:75%">75%</div>
            </div>
        </div>
        <hr>


        <!--Modale Nuova categoria-->
<div id="ProdEsauriti" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4" style="max-width: 700px">
        <header class="w3-container w3-teal">
            <span onclick="closeModal('ProdEsauriti');" class="w3-button w3-display-topright">&times;</span>
            <h2>Prodotti in esaurimento minori di 10 pezzi</h2>
        </header>
        
        <div class="w3-padding">
            <ul id="listProd" class="w3-ul">
                @foreach($prodEsaurimento as $prod)
                <li><a href="{{url('element').$prod->id}}">{{$prod->name}}</a>.<b> Pezzi disponibili: {{$prod->availability}}</b></li>
                @endforeach
            </ul>
        </div>
    
    </div>
</div>
@endsection