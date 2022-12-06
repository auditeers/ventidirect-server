<!DOCTYPE html>
<html lang="nl">

<x-doc.head/>

<body>

    <x-header/>

    
    <!-- ====================== STAPE AREA START ============================ -->
    <section class="stape__area">
        <div class="container">
            <div class="stape__wrap">
                <div class="stape__blk third__stape__blk__after">
                    <div class="single__stape__wrap active active__check">
                        <span>Gegevens <i class="far fa-check"></i></span>
                    </div>
                    <div class="single__stape__wrap active active__check">
                        <span>Bezorging <i class="far fa-check"></i></span>
                    </div>
                    <div class="single__stape__wrap active">
                        <span>Overzicht <i class="far fa-check"></i></span>
                    </div>
                    <div class="single__stape__wrap">
                        <span>Betalen <i class="far fa-check"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====================== STAPE AREA END ============================ -->

    
    <!-- ====================== DELIVERY AREA START ============================ -->
    <section class="delivery__area similar__border pb-60 mb-30">
        <form method="POST" id="order_form">
            @csrf
            <div class="container">
                <div class="similar__main__title">
                    <h3>Overzicht</h3>
                </div>
                <input type="hidden" name="order_id" value="{{ $order->id }}">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="summary__blk similar__border mb-30">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="summary__top_hidden_blk">
                                        <div class="similar__listing__title mt-15">
                                            <h5>Dit zit in je bestelling</h5>
                                        </div>
                                        <div class="shopping__cart__details">
                                            @foreach($order->products as $product)
                                            <div class="single__shopping__cart__details">
                                                <div class="shopping__cart__details__thumb">
                                                    <img src="/storage/{{ $product->image ?? "/placeholder.jpg"}}" alt="{{ $product->seo_title ?? '' }}"></a>
                                                </div>
                                                <div class="shopping__cart__details__text">
                                                    <p>{{ $product->name }}</p>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="similar__pros_and_cons__content mt-15">
                                                <div class="similar__listing__title">
                                                    <h5>Bezorgadres</h5>
                                                </div>

                                                <p>
                                                    {{ $order->customer->firstname }} {{ $order->customer->lastname }}<br> 
                                                    {{ $order->customer->street }} {{ $order->customer->streetnr }} {{ $order->customer->streetaddition ?? '' }} <br> 
                                                    {{ $order->customer->zip }} {{ $order->customer->city }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="similar__pros_and_cons__content mt-15">
                                                <div class="similar__listing__title">
                                                    <h5>Bezorging</h5>
                                                </div>
                                                <p>Morgen, met PostNL (gratis bezorgd)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="similar__title">
                            <h5>Kies je betaalmethode</h5>
                        </div>
                        <div id="accordionExample" class="delivery__wrap">
                            <div class="delivary__radio__btn shopping__option d-inline">
                                <div class="form-check mb-15">
                                    <div class="delivary__inner__checked">
                                        <div class="delivery_ckbox collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <label class="container-ck">
                                                <div class="pick__up__content">
                                                    <p><img src="/assets/img/p_1.svg" alt=""> iDeal</p>
                                                </div>
                                                <input type="checkbox" checked class="radio" value="ideal" name="payment_type" >
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        {{-- 
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="card card-body">
                                                <div class="delivery__pick__up__inner__contet">
                                                    <h4>Kies je bank</h4>
                                                    <div class="page__filter__select">
                                                        <select>
                                                            <option data-display="">Rabobank</option>
                                                            <option value="1">Gratis</option>
                                                            <option value="2">Gratis</option>
                                                            <option value="3" disabled>Gratis</option>
                                                            <option value="4">Gratis</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        --}}
                                    </div>
                                </div>

                                {{--
                                <div class="form-check mb-15">
                                    <div class="delivary__inner__checked">
                                        <div class="delivery_ckbox collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <label class="container-ck">
                                                <div class="pick__up__content">
                                                    <p><img src="/assets/img/p_2.svg" alt="">Klarna - achteraf betalen</p>
                                                </div>
                                                <input type="checkbox"  class="radio" value="1" name="fooby[1][]" >
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="delivery__pick__up__inner__contet">
                                                <h4>Bezorgen of ophalen?</h4>
                                                <div class="page__filter__select">
                                                    <select>
                                                        <option data-display="">Morgen 09:15 - 11:45</option>
                                                        <option value="1">Gratis</option>
                                                        <option value="2">Gratis</option>
                                                        <option value="3" disabled>Gratis</option>
                                                        <option value="4">Gratis</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-check mb-15">
                                    <div class="delivary__inner__checked">
                                        <div class="delivery_ckbox collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            <label class="container-ck">
                                                <div class="pick__up__content">
                                                    <p><img src="/assets/img/p_3.svg" alt=""> PayPal</p>
                                                </div>
                                                <input type="checkbox"  class="radio" value="1" name="fooby[1][]" >
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                            <button type="button" class="third__btn open__choose__box  mt-15">Kies pakketpunt</button>
                                        </div>
                                    </div>
                                </div>
                                --}}
                            </div>
                            <div class="summary__bottom__hidden__blk mb-10">
                                <div class="subtotal__light__content mt-10 pb-10">
                                    <p>Subtotaal <span>€ {{ $number_format($order->subtotal, 2, ",", ".") }}</span></p>
                                    <p>Verzending <span class="free">gratis</span></p>
                                </div>
                                <div class="subtotal__bold__content total__excl p-0 mt-10 ">
                                    <h4>Totaal excl. btw <span>€ {{ number_format(($order->subtotal - ($order->subtotal)), 2, ",", ".") }}</span></h4>
                                    <h3>BTW <span>€ 86</span></h3>
                                    <h4>Totaal excl. btw <span>€ {{ $number_format($order->subtotal, 2, ",", ".") }}</span></h4>
                                </div>
                            </div>
                            <div class="grt__on">
                                <p class="none_link_mobile">Door verder te gaan ga je akkoord met onze <a class="second_similar_btn" href="#">algemene voorwaarden.</a></p>
                                <a href="#" onclick="document.getElementById('order_form').submit();" class="global__btn">Afrekenen</a>
                                <p class="text-center mt-10 none__desk">Door verder te gaan ga je akkoord met onze algemene voorwaarden.</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="similar__listing__title">
                            <h5>Jouw bestelling</h5>
                        </div>
                        <div class="shopping__cart__details">
                            @foreach($order->products as $product)
                            <div class="single__shopping__cart__details">
                                <div class="shopping__cart__details__thumb">
                                    <img src="/storage/{{ $product->image ?? "/placeholder.jpg"}}" alt="{{ $product->seo_title ?? '' }}"></a>
                                </div>
                                <div class="shopping__cart__details__text">
                                    <p>{{ $product->name }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="subtotal__light__content mt-10 pb-10">
                            <p>Subtotaal <span>€ 425,00</span></p>
                            <p>Verzending <span class="free">gratis</span></p>
                        </div>
                        <div class="subtotal__bold__content total__excl p-0 mt-10 ">
                            <h4>Totaal excl. btw <span>€ 325,00</span></h4>
                            <h3>BTW <span>€ 86</span></h3>
                            <h4>Totaal excl. btw <span>€ 325,00</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <!-- ====================== DELIVERY AREA END ============================ -->



    <x-doc.script/>

</body>

</html>