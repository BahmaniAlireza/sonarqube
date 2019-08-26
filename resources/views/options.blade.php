@extends('headers.layout')

@section('content')
    <div class="timelin_fa">
        <div class="timeline" id="timeline">
            <a href="#"  class="contine"><strong>پرداخت</strong> <span>( <i>{{$theme->price}}</i> تومان )</span>
            </a>
        </div>
    </div>


<form method="post" action="{{route('newOrder')}}" id="form">
{{csrf_field()}}


    <div class="page_two">
        <div class="navbar_theme">
            <div class="title_nav"><span> {{$theme->tag}} /</span> <strong> {{$theme->title}} </strong></div>
            <img src="/themes/wp-themes/{{$theme->src}}/{{$theme->img}}" class="thu">
            <div class="nav_dir">
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
                <div class="tags"><span>فروشگاه ، تک صفحه ای</span></div>
            </div>
            <div class="dt_theme">
                <span>۱۲ امکان</span>
                <span>۵۰ هزار تومان</span>
                <span>زمان ۱۵ دقیقه</span>
            </div>

        </div>
<div class="col-lg-12 tab" style="float: left">

    <div class="tabs col-lg-12"><span class="tab1 active_tab domain_than_us">دامنه از ارسین</span><span class="tab2 want_dns">دامنه اختصاصی</span></div>
    <div class="tabs_box">
        <div class="col-lg-12 tab1 tabs_div subdomain">
            <strong class="title">ساب دامین مورد نظر خود را وارد نمایید</strong>
        <span class="d_input"><input type="text"  name="site_subdomain" value="samsung"> </span><span class="d_dot"></span><span class="d_dom">Arsesn.co</span>
            <strong class="dir">در هر زمان بعد از خرید میتوانید سایت خود را به دامین اختصاصی خود رایگان انتقال دهید</strong>
        </div>
        <div class="col-lg-12 tab2 tabs_div tab_dns">
            <div> <span>DNS 1 :</span><input type="text" name="site_dns1" value=""></div>
            <div> <span>DNS 2 :</span><input type="text" name="site_dns2" value=""></div>
        </div>
    </div>
</div>
<input type="hidden" name="theme_id" value="{{$theme->id}}">
        <input type="hidden" name="host_id" class="host_id" value="">
        <input type="hidden" name="plugins_id" value="" class="site_plugins">



    <div class="options col-lg-6 box-shodaw" >
        <strong class="box_title">اطلاعات اولیه سایت</strong>
        <label>نام سایت ( به فارسی )</label>
        <input type="text" placeholder="" name="siteName_fa" class="" value="سایت فروشگاه سامسونگ">
        <label>نام سایت ( به انگلیسی )</label>
        <input type="text" placeholder="" name="siteName_en" class="" value="samsung shop" >
        <label>فعالیت سایت خود را به صورت خلاصه توضیح دهید</label>
        <textarea name="dir" value="این یک سایت فروشگاهی است"></textarea>
        <label>نام کاربری</label>
        <input type="text" placeholder="" name="site_username" class="" value="admin">
        <label>رمز عبور</label>
        <input type="password" placeholder="" name="site_password" class="" value="1234">
        <label> ایمیل </label>
        <input type="text" placeholder="" name="site_email" class="" value="yaraghi77@gmail.com">


    </div>
        <div class="options col-lg-6" >
            <strong class="box_title">اطلاعات هاست سایت</strong>
            @foreach($hosts as $host)
            <div class="host_item host_item_active col-lg-4" id="{{$host->id}}" >
                <strong style="border-bottom-color: {{$host->color}}">{{$host->title}}</strong>
                <span>{{$host->storage}} گیگ فضا</span>
                <span>{{$host->traffic}} گیگ پهنای باند</span>
                <span class="price"> <i>{{$host->price}}</i> تومان</span>
            </div>
            @endforeach
            <strong class="box_title">افزونه های مورد نیاز</strong>
            @foreach($plugins as $plugin)
                <div class="plugin col-lg-6 plugin_item_active " id="{{$plugin->id}}">
                    <span class="icon fa fa-{{$plugin->icon}}"></span>
                    <strong>{{$plugin->title}}</strong>
                    <span class="price"><i>{{$plugin->price}}</i>تومان</span>
                </div>
            @endforeach

            <input type="hidden" name="domain_state" class="domain_state" value="1">


        </div>



    </div>

</form>
@endsection