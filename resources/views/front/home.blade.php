@extends('front.layout.app')

@section('main_content')
    @include('front._components.slider')
    @include('front._components.intro')
    <div class="special">
        <div class="d-flex flex-column">
            <div class="special-title">
                SEREL'DEN
            </div>
            <div class="special-description">
                SİZE ÖZEL SERİLER
            </div>
        </div>
        <div class="special-content">
            Çevre dostu ürünleriyle Türkiye’de bilinçli yapı oluşumunu destekleyen Serel, doğal kaynakları korumaya yönelik
            tasarlanmış, hijyeni ön planda tutan geniş ürün yelpazesi ile gelecek nesillere aydınlık bir yarın bırakmak için
            çalışıyor.
        </div>
    </div>
    @include('front._components.item')
    @include('front._components.single')
    @include('front._components.detail')
    @include('front._components.service')
    @include('front._components.banner')
@endsection
