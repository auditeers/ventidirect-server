<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K6WXRQV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<!-- =================== HEADER AREA START ===================== -->
    <header class="header__area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heder__inner__blk">
                        <div class="header__left__blk">
                            <div class="open__menu">
                                <img src="/assets/img/bar_ico.svg" alt="">
                            </div>
                            <div class="logo">
                                <a href="/"><img src="/assets/img/logo.svg" alt=""></a>
                            </div>
                        </div>
                        <div class="header__mid__blk">
                            <div class="header__searct__form">
                                <form action="#">
                                    <input type="text" id="search-input" placeholder="Zoeken naar..">
                                    <button type="button"><i class="far fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="headaer__right__blk">
                            <div class="header__right__single__item user__blk">
                                <div class="user__icon"><i class="fas fa-user"></i></div> <span class="user__ico">Account</span> <i class="far fa-angle-down"></i>
                                <div class="account__user__offcanvas">
                                    <div class="account__offcanvas__title">
                                        <div class="similar__listing__title">
                                            <h5>Account</h5>
                                        </div>
                                        <div class="close__account__ntm d-none">
                                            <img src="/assets/img/cros.png" alt="">
                                        </div>
                                    </div>
                                    <div class="account__user__inner__blk">
                                        <div class="account__user__menu">
                                            <ul>
                                                <li><a href="#">Mijn VentiDirect</a></li>
                                                <li><a href="#">Bestellingen</a></li>
                                                <li><a href="#">Facturen</a></li>
                                                <li><a href="#">Retouren</a></li>
                                                <li><a href="#">Mijn gegevens</a></li>
                                                <li><a href="#">Adresboek</a></li>
                                            </ul>
                                            <a href="#" class="global__btn">Inloggen</a>
                                            <p>Nog geen account? <a href="#" class="second_similar_btn m-0">Meld je aan</a></p>
                                        </div>
                                        <div class="account__user__switch">
                                            <div class="header__switch__blk">
                                                <p>Prijzen Incl. BTW</p>
                                                <div class="switch">
                                                    <input type="checkbox" id="switch"><label for="switch">Toggle</label>
                                                </div>
                                                <p>Excl. BTW</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay d-none"></div>
                            </div>
                            
                            <x-cart />

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- =================== HEADER AREA END ===================== -->

    {{--}}
    <!-- =================== HEADER MENU AREA START ===================== -->
    <section class="menu__area__blk">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu__inner__blk">
                        <div class="header__main__menu">
                            <div class="header__select">
                                <select>
                                    <option data-display="">Categorieën</option>
                                    @foreach($cats as $cat)
                                    <option value="{{ $cat->slug }}" onclick="document.location='/producten/{{ $cat->slug }}';return false;">
                                        {{ $cat->name }}
                                    </option>
                                    @endforeach
                                    

                                </select>
                            </div>
                            <nav>
                                <ul>
                                    <li><a href="#">Klantenservice</a></li>
                                    <li><a href="#">Bestsellers</a></li>
                                    <li><a href="#">Aanbiedingen</a></li>
                                    <li><a href="#">Top 10 Ventilatoren</a></li>
                                    <li><a href="#">Design ventilatieroosters</a></li>
                                    <li><a href="#">Advies</a></li>
                                </ul>
                            </nav>
                        </div>

                        <div class="header__switch__blk">
                            <p>Prijzen Incl. BTW</p>
                            <div class="switch">
                                <input type="checkbox" id="switch" /><label for="switch">Toggle</label>
                            </div>
                            <p>Excl. BTW</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =================== HEADER MENU AREA END ===================== -->
    --}}

    <!-- =================== HEADER MENU AREA START ===================== -->
    <section class="menu__area__blk">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu__inner__blk">
                        <div class="header__main__menu">
                            <div class="header__select">
                                <div class="open__megamenu">
                                    <button>Categorieën <i class="far fa-angle-down"></i></button>
                                </div>
                                <div class="megamenu">
                                    <div class="megamenu__inner__blk">
                                        <div class="ventidirect__list megamenu__list">
                                            <nav>
                                                <ul>

                                                    @foreach($cats as $cat)

                                                    <li class="">
                                                        <a href="/producten/{{ $cat->slug }}">
                                                           {{ $cat->name }} <i class="far fa-angle-right"></i>
                                                        </a>
                                                    </li>

                                                    @endforeach

                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <nav>
                                <ul>
                                    <li><a href="/service/klantenservice">Klantenservice</a></li>
                                    <li><a href="">Bestsellers</a></li>
                                    <li><a href="#">Aanbiedingen</a></li>
                                    <li><a href="#">Top 10 Ventilatoren</a></li>
                                    <li><a href="/service/over-ventidirect">Over VentiDirect</a></li>
                                    <li><a href="/service/klantenservice">Advies</a></li>
                                </ul>
                            </nav>
                        </div>

                        <div class="header__switch__blk">
                            <p>Prijzen Incl. BTW</p>
                            <div class="switch">
                                <input type="checkbox" id="switch" /><label for="switch">Toggle</label>
                            </div>
                            <p>Excl. BTW</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =================== HEADER MENU AREA END ===================== -->

    <!-- =================== MAIN MENU BOTTOM AREA START ===================== -->
    <section class="main__menu__bottom__area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main__menu__bottom__inner__blk">
                        <div class="main__menu__bottom__left__item">
                            <p><i class="far fa-check"></i> Snelle bezorging, gratis vanaf 25 euro</p>
                            <p><i class="far fa-check"></i> Hoogste kwaliteit producten</p>
                            <p><i class="far fa-check"></i> Altijd de laagste prijs</p>
                        </div>
                        <div class="main__menu__bottom__right__item">
                            <p><img src="/assets/img/divaided.svg" alt=""> <span>Zakelijk bestellen?</span> <b>Krijg 5% Cashcack p.m.</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =================== MAIN MENU BOTTOM AREA END ===================== -->