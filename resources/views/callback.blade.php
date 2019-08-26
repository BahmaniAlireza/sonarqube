@extends('headers.layout')
@section('content')
    <div class="profile_fa">
        <strong class="title">ننیجه پرداخت</strong>
        <div class="callback">
            <strong class="title @if ($status) color-green @else color-red @endif ">{{$text}}</strong>
            <div>
                <strong>شناسه پرداخت : </strong><span>{{$autotrain}}</span>
            </div>
            <div>
                @if ($status)  @else <a href="{{route('repay',['order_id' => $order_id ])}}" class="back-profile re-pay">تکرار پرداخت</a> @endif
                <a href="#" class="back-profile">بازگشت به صفحه پروفایل</a>

            </div>
        </div>
    </div>
@endsection