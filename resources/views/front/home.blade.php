@extends('front.layout.app')

@section('main_content')
    @include('front._components.slider')
    <div class="intro">
        <img src="{{ asset('img/about-image.svg') }}" />
        <div class="intro-section">
            <div class="intro-section-header">
                <h1 class="intro-section-title">
                    HAKKIMIZDA
                </h1>
                <h6 class="intro-section-description">
                    SEREL SERAMİK
                </h6>
            </div>
            <div>
                <div class="intro-section-content">
                    30 yılı aşkın süredir SEREL markası ile
                </div>
                <div class="intro-section-content">
                    semarik sağlık gereçleri üretimi yapan firmamız
                </div>
                <div class="intro-section-content">
                    <span class="fw-bold">ELGİNKAN Topluluğuna</span> bağlıdır.
                </div>
            </div>
            <div class="intro-section-footer">
                <div class="d-flex align-items-center gap-2">
                    <div class="icon-box-circle">
                        <img src="{{ asset('img/star.svg') }}" />
                    </div>
                    <div class="w-75">
                        Kaliteden ödün vermeyen SEREL, yılların deneyimini, profesyonel yönetim anlayışı ile dünya
                        pazarlarında; tasarruf, sağlık, estetik ve konfor özellikli ürünlerle sunan lider markalardandır.
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <div class="icon-box-circle">
                        <img src="{{ asset('img/crone.svg') }}" />
                    </div>
                    <div class="w-75">
                        Ürün geliştirme faaliyetlerinde; titiz, yenilikçi ve öncü bir yaklaşım sahibi olan SEREL, ürün
                        geliştirme çalışmalarında kullanıcı ihtiyaçlarının tüm detaylarını gözetmekte ve özgün tasarımlara
                        hayat vermektedir.
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    @include('front._components.single')
    @include('front._components.detail')
    @include('front._components.service')
    @include('front._components.banner')
@endsection
