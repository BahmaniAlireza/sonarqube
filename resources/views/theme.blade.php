@extends('headers.layout')
@section('content')
    <script src="/js/modernizr.js"></script>
    <script src="/js/jquery.mixitup.min.js"></script>
    <script src="/js/main.js"></script>
    <div class="page_one" style="display:block">
        <main class="cd-main-content">
            <div class="cd-tab-filter-wrapper">
                <div class="cd-tab-filter">
                    <ul class="cd-filters">
                        <li class="placeholder"> <a data-type="all" href="#0">همه</a> <!-- selected option on mobile -->
                        </li>
                        <li class="filter"><a class="selected" href="#" data-type="all">همه</a></li>
                        @foreach($tags as $value)
                            <li class="filter" data-filter=".{{$value->tag}}"><a href="#" data-type="{{$value->tag}}">{{$value->tag}}</a></li>


                        @endforeach

                    </ul>
                    <!-- cd-filters -->
                </div>
                <!-- cd-tab-filter -->
            </div>
            <!-- cd-tab-filter-wrapper -->
            <section class="cd-gallery">
                <ul>
                    @foreach($data as $value)

                        <li class="theme_item mix {{$value->tag}}"><a href="{{route('option',$value->id)}}" class="imgbox"><img src="themes/wp-themes/{{$value->src}}/{{$value->img}}" alt=""></a>
                                <div class="grid_dt">
                                    <div class="title"><span>{{$value->title}}</span><span>{{$value->rate}} امتیاز  </span><span>۵۰۰۰۰ تومان</span></div>
                                    <div class="dir">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.</div>
                                    <div class="tags"><span>فروشگاه ، تک صفحه ای</span></div>
                                </div>
                            <div class="grid_link">
                                <a href="#" class="demo_l" >مشاهده نمونه</a>
                                <a href="{{route('option',$value->id)}}" class="select_l">انتخاب</a>
                            </div>
                        </li>
                        @endforeach

                    <li class="gap"></li>
                    <li class="gap"></li>
                    <li class="gap"></li>
                </ul>
                <div class="cd-fail-message">موردی یافت نشد</div>
            </section>
        </main>
    </div>

@endsection