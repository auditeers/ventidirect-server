<!DOCTYPE html>
<html lang="nl">

<x-doc.head/>

<body>

    <x-header/>


    <!-- =================== SUMMER SALE AREA START ===================== -->
    <section class="summer__sale__area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="summer__sale__blk">
                        <div class="summer__sale__title">
                            <h3>Summer<b>Sale</b></h3>
                            <h4><b>Bespaar tot €100</b> op een mobiele airco</h4>
                        </div>
                        <div class="summer__sale__offer__thumb">
                            <span class="offer__back__shape"><img src="assets/img/summer_sale__frame.png" alt=""></span>
                            <div class="summer__offer__thumb">
                                <img src="assets/img/offer__thumb.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="finish__project__area">
                        <div class="finish__project__inner__area">
                            <div class="finish__project__title">
                                <h4>Maak je project af met nieuwe <b>design roosters</b></h4>
                            </div>
                            <div class="finish__project__product__blk">
                                <h4>Nu 2+1 gratis</h4>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="single__finish__product">
                                            <img src="assets/img/finish_1.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="single__finish__product">
                                            <img src="assets/img/finish_2.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="single__finish__product">
                                            <img src="assets/img/finish_3.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="single__finish__product">
                                            <img src="assets/img/finish_4.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =================== SUMMER SALE AREA END ===================== -->


    <!-- ===================PRODUCT DETAILS AREA START ===================== -->
    <section class="product__details__area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__details__slide owl-carousel">
                        <div class="single__product__details__slide">
                            <div class="product__details__inner__blk">
                                <div class="product__details__content">
                                    <h4>Ventilatoren</h4>
                                    <p>Nu 25% korting op alles in de categorie ventilatoren</p>
                                </div>
                                <div class="details__product__thumb">
                                    <img src="assets/img/details_1.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="single__product__details__slide">
                            <div class="product__details__inner__blk">
                                <div class="product__details__content">
                                    <h4>Montage</h4>
                                    <p>Werk met het beste materiaal die professionals gebruiken</p>
                                </div>
                                <div class="details__product__thumb">
                                    <img src="assets/img/details_2.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="single__product__details__slide">
                            <div class="product__details__inner__blk">
                                <div class="product__details__content">
                                    <h4>Kluslijsten</h4>
                                    <p>Alles voor jouw ventilatieklus samengesteld als pakket</p>
                                </div>
                                <div class="details__product__thumb">
                                    <img src="assets/img/details_3.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="single__product__details__slide">
                            <div class="product__details__inner__blk">
                                <div class="product__details__content">
                                    <h4>Ventilatoren</h4>
                                    <p>Nu 25% korting op alles in de categorie ventilatoren</p>
                                </div>
                                <div class="details__product__thumb">
                                    <img src="assets/img/details_1.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===================PRODUCT DETAILS AREA END ===================== -->


    <!-- =================== CATEGORIE AREA START ===================== -->
    <section class="categorie__area mt-20">
        <div class="container">
            <div class="similar__title">
                <h5>Categorieën</h5>
            </div>

            <div class="row g-3">


                @foreach($cats as $cat)

                <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                    <a href="/producten/{{ $cat->slug }}">
                        <div class="categorie__inner__blk">
                            <div class="categorie__body">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active">
                                        <div class="categorie__big__thumb">
                                            <img src="/storage/{{ $cat->image ?? "/placeholder.jpg"}}" alt="{{ $cat->seo_title }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="categorie__btn">
                                <div class="nav nav-tabs" id="nav-tab">
                                    <button class="nav-link"><img src="assets/img/categorie__small_1.png" alt=""></button>
                                    <button class="nav-link"><img src="assets/img/categorie__small_2.png" alt=""></button>
                                    <button class="nav-link"><img src="assets/img/categorie__small_3.png" alt=""></button>
                                </div>
                            </div>
                            <div class="categorie__content">
                                <p>{{ $cat->name }}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

                

            <div class="category__bottom__area">
                <div class="main__menu__bottom__area">
                    <div class="main__menu__bottom__inner__blk">
                        <div class="main__menu__bottom__left__item">
                            <p><i class="far fa-check"></i> Snelle bezorging, gratis vanaf 25 euro</p>
                            <p><i class="far fa-check"></i> Hoogste kwaliteit producten</p>
                            <p><i class="far fa-check"></i> Altijd de laagste prijs</p>
                        </div>
                        <div class="main__menu__bottom__right__item">
                            <p><img src="assets/img/divaided.svg" alt=""> <span>Zakelijk bestellen?</span> Krijg 5% Cashcack p.m.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =================== CATEGORIE AREA END ===================== -->


    <!-- =================== PRICING AREA START ===================== -->
    <section class="pricing__area">
        <div class="container">
            <div class="similar__title">
                <h5>Populaire producten</h5>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="pricing__slide__blk owl-carousel">
                        
                        @foreach($popular as $item)

                        <div class="single__pricing__slide__blk">
                            <div class="pricing__slide__thumb">
                                <a href="/product/{{ $product->slug }}">
                                    <img src="/storage/{{ $product->image ?? "/placeholder.jpg"}}" alt="{{ $cproduct->seo_title ?? '' }}">
                                </a>
                            </div>

                            <div class="pricing__content">
                                <a href="/product/{{ $product->slug }}">
                                    <p>{{ $product->name }}</p>
                                </a>
                                <div class="five__star">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <small>241 reviews</small>
                                </div>
                            </div>

                            <div class="main__price">
                                <div class="price__content">
                                    <span>Adviesprijs 454,97</span>
                                    <h4>{{ $product->price }}</h4>
                                    <span>284,30 excl. BTW</span>
                                </div>
                                <div class="cart__wrap">
                                    <a href="#"><img src="assets/img/cart_ico.svg" alt=""></a>
                                </div>
                            </div>
                            <div class="price__bottom__text">
                                <span>Artikelnr.: 0000-4639</span>
                            </div>
                        </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =================== PRICING AREA END ===================== -->


    <!-- =================== SERVICE AREA START ===================== -->
    <section class="service__area mb-3">
        <div class="container">
            <div class="similar__title">
                <h5>Handig om te weten</h5>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="service__inner__blk owl-carousel">
                        <div class="service__single__blk">
                            <div class="service__thumb">
                                <img src="assets/img/service_1.png" alt="">
                            </div>
                            <div class="service___content">
                                <h4>5% Cashback met VentiDirect Zakelijk</h4>
                                <p>Bij VentiDirect bieden wij onze zakelijke klanten gebruik te maken van VentiDirect Zakelijk.</p>
                            </div>
                        </div>
                        <div class="service__single__blk">
                            <div class="service__thumb">
                                <img src="assets/img/service_2.png" alt="">
                            </div>
                            <div class="service___content">
                                <h4>Meer over VentiDirect</h4>
                                <p>Wij zijn uw betrouwbare en voordelige adres voor alles wat te maken heeft met luchttechniek en ventilatie.</p>
                            </div>
                        </div>
                        <div class="service__single__blk">
                            <div class="service__thumb">
                                <img src="assets/img/service_3.png" alt="">
                            </div>
                            <div class="service___content">
                                <h4>Afzuiging badkamer regelen?</h4>
                                <p>Wij zijn uw betrouwbare en voordelige adres voor alles wat te maken heeft met luchttechniek en ventilatie.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =================== SERVICE AREA END ===================== -->


    <x-brands/>

    <x-footer/>


   <x-doc.script/>


</body>

</html>