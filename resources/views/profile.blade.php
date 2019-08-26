@extends('headers.layout')
@section('content')
    <div class="profile_fa">
        <strong class="title">سایت های من</strong>
@foreach($orders as $order)
        <div class="site">
        <div class="img_box"><img src="/img/a1.jpg" > <div><span>{{$order->theme->title}}</span> <span>{{$order->price}}</span></div></div>
            <div class="site_content">
                <div class="site_title">{{$order->theme->title}}</div>
                <div class="site_plugins">
                    @foreach($order->options as $plugin)
                        <span>{{$plugin->title}}</span>
                    @endforeach
                </div>
                <a href="http://localhost:8000/orders/{{$order->domain}}" class="site_link" target="_blank">{{$order->domain}}.arsse.co</a>
            </div>
        </div>
@endforeach
    </div>
@endsection