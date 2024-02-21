<nav class="navbar">
    <div class="container">
        <img src="{{ asset('img/serel-white.svg') }}" />
        <div class="menu-items">
            <div class="menu menu-left">
                <a href="#" class="menu-divider">ÜRÜNLER</a>
                <a href="#" class="menu-divider">KURUMSAL</a>
                <a href="#" class="menu-divider">SOSYAL SORUMLULUK</a>
                <a href="#" class="menu-divider">MEDYA</a>
                <a href="#">İLETİŞİM</a>
            </div>
        </div>
        <img onclick="document.body.classList.toggle('open')" class="burger" src="{{ asset('img/burger.svg') }}" />
    </div>
</nav>
<script>
    const toggleMenu = () => document.body.classList.toggle("open");
</script>
