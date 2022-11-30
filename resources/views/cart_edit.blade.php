<!DOCTYPE html>
<html lang="nl">

<x-doc.head/>

<body>

    <x-header/>


    <!-- =================== PRODUCT ADDED AREA START ===================== -->
    <section class="categorie__area pt-30">
        <div class="container">
            <div class="categoti__top__link__text mb-10 blue__ico">
                <span><i class="fas fa-angle-left"></i></span> <a href="{{ url()->previous() }}" class="active">Verder winkelen</a>
            </div>
            
            <div class="similar__main__title">
                <h3>Winkelwagen</h3>
            </div>

            @if(empty(count($cart_items)))
            <p class="mt-5 mb-5">Er zitten geen items in uw winkelmandje.</p>
            @else
        
            <div class="shopping__cart__area">
                <div class="row">
                    <div class="col-lg-8">

                        @foreach($cart_items as $cart_item)
                        <div class="product__added__top__area similar__border">
                            <div class="product__added__top__inner__blk">
                                <div class="product__added__left__blk">
                                    <div class="product__added__thumb">
                                        <img 
                                            src="/storage/{{  $cart_item->attributes["image"] ?? 'placeholder.jpg' }}" 
                                            alt="{{ $cart_item->name }}">
                                    </div>
                                    <div class="product__added__text">
                                        <div class="pricing__content">
                                            <p>{{ $cart_item->name }}</p>
                                            <div class="price__bottom__text mt-0">
                                                <span>Artikelnr.: {{ $cart_item->model->ean ?? '' }}</span>
                                            </div>
                                            <div class="product__added__select__blk">
                                                <div class="product__added__select">
                                                    <div class="page__filter__select">
                                                        <select>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                    <div class="delete__product">
                                                        <a href="/cart/delete/{{ $cart_item->id }}">
                                                            <span><img src="assets/img/delete.svg" alt=""></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="shopping__cart__price d-none">
                                                    <div class="price__content small__price__content">
                                                        {{--
                                                        <span class="discount">454,97</span>
                                                        --}}
                                                        <h4> {{ $cart_item->price }}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shopping__cart__price">
                                    <div class="price__content small__price__content">
                                        {{--
                                        <span class="discount">454,97</span>
                                        --}}
                                        <h4> {{ $cart_item->price }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        
                    </div>
                    <div class="col-lg-4">
                        <div class="subtotal__area">
                            <div class="subtotal__content">
                                <div class="subtotal__light__content">
                                    <p>Subtotaal <span>€ {{ \Cart::getTotal() }}</span></p>
                                    <p>Verzending <span class="free">gratis</span></p>
                                </div>
                                <div class="subtotal__bold__content">
                                    <h4>Totaal excl. btw <span>€ {{ (float)\Cart::getTotal() - ((float)\Cart::getTotal() * 0.21) }}</span></h4>
                                    <h3>BTW <span>€ {{ (float)\Cart::getTotal() * 0.21 }}</span></h3>
                                    <h4>Totaal incl. btw <span>€ {{ \Cart::getTotal() }}</span></h4>
                                </div>
                                <div class="subtotal__btn">
                                    <a href="/cart/order/details" class="global__btn">Bestelling afronden</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endif
        </div>
    </section>
    <!-- =================== PRODUCT ADDED AREA END ===================== -->


    <!-- =================== ORDER TOGRTHER AREA START ===================== -->
    <section class="order__together__area mb-70">
        <div class="order__together__inner__wrapper">
            <div class="container">
                <div class="similar__listing__title">
                    <h5>Vaak samen besteld met:</h5>
                </div>
                <div class="row g-3">
                    <div class="col-lg-4">
                        <div class="single__order__together__box">
                            <div class="order__togrther__thumb">
                                <img src="assets/img/order_1.png" alt="">
                            </div>
                            <div class="order__togrther__content">
                                <div class="pricing__content">
                                    <p>Nitto PVC Tape - Grijs - Afdichtingstape voor luchtkanalen - 50mm (10 meter)</p>
                                    <div class="price__bottom__text mt-0">
                                        <span>Artikelnr.: 0000-4639</span>
                                    </div>
                                </div>
                                <div class="main__price">
                                    <div class="price__content small__price__content">
                                        <h4>3,29</h4>
                                        <span>2,84 excl. BTW</span>
                                    </div>
                                    <div class="cart__wrap">
                                        <a href="#"><img src="assets/img/cart_ico.svg" alt=""> <i class="far fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single__order__together__box">
                            <div class="order__togrther__thumb">
                                <img src="assets/img/order_2.png" alt="">
                            </div>
                            <div class="order__togrther__content">
                                <div class="pricing__content">
                                    <p>Slangklem voor montage van Ø 60mm tot Ø 135mm</p>
                                    <div class="price__bottom__text mt-0">
                                        <span>Artikelnr.: 0000-4639</span>
                                    </div>
                                </div>
                                <div class="main__price">
                                    <div class="price__content small__price__content">
                                        <h4>3,29</h4>
                                        <span>2,84 excl. BTW</span>
                                    </div>
                                    <div class="cart__wrap">
                                        <a href="#"><img src="assets/img/cart_ico.svg" alt=""> <i class="far fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single__order__together__box">
                            <div class="order__togrther__thumb">
                                <img src="assets/img/order_3.png" alt="">
                            </div>
                            <div class="order__togrther__content">
                                <div class="pricing__content">
                                    <p>Kunststof luchtventiel (toevoer & retour) Ø125mm - wit MET BUS & VEER</p>
                                    <div class="price__bottom__text mt-0">
                                        <span>Artikelnr.: 0000-4639</span>
                                    </div>
                                </div>
                                <div class="main__price">
                                    <div class="price__content small__price__content">
                                        <h4>3,29</h4>
                                        <span>2,84 excl. BTW</span>
                                    </div>
                                    <div class="cart__wrap">
                                        <a href="#"><img src="assets/img/cart_ico.svg" alt=""> <i class="far fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =================== ORDER TOGRTHER AREA END ===================== -->


    <x-footer/>

    <x-doc.script/>
</body>

</html>