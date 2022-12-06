<!DOCTYPE html>
<html lang="nl">

<x-doc.head/>

<body>

    <x-header/>

    
    <!-- ====================== STAPE AREA START ============================ -->
    <section class="stape__area">
        <div class="container">
            <div class="stape__wrap">
                <div class="stape__blk second__stape__blk__after">
                    <div class="single__stape__wrap active active__check">
                        <span>Gegevens <i class="far fa-check"></i></span>
                    </div>
                    <div class="single__stape__wrap active">
                        <span>Bezorging <i class="far fa-check"></i></span>
                    </div>
                    <div class="single__stape__wrap">
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
                    <h3>Bezorgen of ophalen?</h3>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div id="accordionExample" class="delivery__wrap">
                            <div class="delivary__radio__btn shopping__option d-inline">
                                <div class="form-check mb-15">
                                    <div class="delivary__inner__checked">
                                        <div class="delivery_ckbox collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <label class="container-ck">
                                                <div class="pick__up__content">
                                                    <p><img src="/assets/img/Carrier_Logo.svg" alt=""> Verzenden via PostNL</p>
                                                    <span class="free">Gratis</span>
                                                </div>
                                                <input type="checkbox" checked class="radio" value="postnl" name="delivery" >
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        {{--
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="card card-body">
                                                <div class="delivery__pick__up__inner__contet">
                                                    <h4>Bezorgen of ophalen?</h4>
                                                    <div class="page__filter__select">
                                                        <select>
                                                            <option data-display="">Morgenavond 17:30 - 19:30</option>
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
                                                    <p><img src="/assets/img/Carrier_Logo.svg" alt="">Avondbezorging op <br> weekdagen tussen <br>
                                                        17:30 en 22:00 uur</p>
                                                    <span class="black__price">2,99</span>
                                                </div>
                                                <input type="checkbox"  class="radio" value="1" name="delivery" >
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
                                                    <p><img src="/assets/img/Carrier_Logo.svg" alt=""> Morgen ophalen bij PostNL- <br> ophaalpunt vanaf 15:00</p>
                                                    <span class="free">Gratis</span>
                                                </div>
                                                <input type="checkbox"  class="radio" value="1" name="delivery" >
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                            <button type="button" class="third__btn open__choose__box mt-15">Kies pakketpunt</button>
                                        </div>
                                    </div>
                                </div>

                                --}}
                            </div>
                            <div class="grt__on">
                                <a href="#" onclick="document.getElementById('order_form').submit();" class="global__btn">Doorgaan</a>
                            </div>
                        </div>
                    </div>

                    <!-- ------------------- choose offcanvas start -->
                    <div class="choose__offcanvas__area">
                        <div class="choose__offcanvas__top__blk">
                            <h4>Kies een PostNL-ophaalpunt</h4>
                            <div class="off__menu">
                                <img src="/assets/img/cros.png" alt="">
                            </div>
                        </div>
                        <div class="choose__inner__offcanvas__blk">
                            <form action="#">
                                <div class="address__blk">
                                    <div class="single__delivery__details">
                                        <label for="#">Adres</label>
                                        <input type="text" placeholder="">
                                    </div>
                                </div>

                                <div class="similar__choose__text similar__border mt-20">
                                    <h4>Spar Zeldenrust <span>(0,5 km) <br> Ijsselkade 45, Leiden</span></h4>
                                    <a class="second_similar_btn mt-0" href="#">Morgen open tot 17:00</a>
                                    <button type="button" class="third__btn  mt-15">Kies pakketpunt</button>
                                </div>
                                <div class="similar__choose__text similar__border mt-20">
                                    <h4>Stomerij Jeanette <span>(0,5 km) <br> Kastanjelaan 1, Leiden</span></h4>
                                    <a class="second_similar_btn mt-0" href="#">Morgen open tot 17:00</a>
                                    <button type="button" class="third__btn  mt-15">Kies pakketpunt</button>
                                </div>
                                <div class="similar__choose__text similar__border mt-20">
                                    <h4>Pakket- en briefautomaat <span>(0,5 km) <br> Hoge Rijndijk 5 PBA, Leiden</span></h4>
                                    <a class="second_similar_btn mt-0" href="#">Morgen open tot 17:00</a>
                                    <button type="button" class="third__btn  mt-15">Kies pakketpunt</button>
                                </div>
                                <div class="similar__choose__text similar__border mt-20">
                                    <h4>KARWEI Leiderdorp <span>(0,5 km) <br> Vlasbaan 17, Leiden</span></h4>
                                    <a class="second_similar_btn mt-0" href="#">Morgen open tot 17:00</a>
                                    <button type="button" class="third__btn  mt-15">Kies pakketpunt</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="overlay"></div>
                    <!-- ------------------- choose offcanvas end -->

                    <div class="col-lg-4">
                        <div class="similar__listing__title">
                            <h5>Winkelwagen</h5>
                        </div>
                        <div class="shopping__cart__details">
                            <div class="single__shopping__cart__details">
                                <div class="shopping__cart__details__thumb">
                                    <img src="/assets/img/pricing_2.png" alt="">
                                </div>
                                <div class="shopping__cart__details__text">
                                    <p>DucoBox Silent All-In-One RH & BD
                                        vocht boxsensor + bedienings-schakelaar RF batterij</p>
                                </div>
                            </div>
                            <div class="single__shopping__cart__details">
                                <div class="shopping__cart__details__thumb">
                                    <img src="/assets/img/product__added__img_2.png" alt="">
                                </div>
                                <div class="shopping__cart__details__text">
                                    <p>Korte bocht 90º met afdichtingsrubber
                                        geperst - Ø 100mm</p>
                                </div>
                            </div>
                            <div class="single__shopping__cart__details border-0">
                                <div class="shopping__cart__details__thumb">
                                    <img src="/assets/img/product__added__img_3.png" alt="">
                                </div>
                                <div class="shopping__cart__details__text">
                                    <p>Duco Ducovent Design afgerond vierkant XL ventilatieventiel Ø125mm
                                        WIT RAL9016</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <!-- ====================== DELIVERY AREA END ============================ -->

    


    <!-- =========================== SECONDARY FOOTER AREA STATR ============================== -->
    <section class="secondary__footer__area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="secondary__footer__inner__bok">
                        <div class="secondary__footer__top__content">
                            <h4>Hulp nodig met bestellen? <br> <span>Bel ons op 020 2225546</span></h4>
                            <a href="#" class="second_similar_btn m-0">Klantenservice</a>
                        </div>
                        <div class="secondary__footer__menu">
                            <nav>
                                <ul>
                                    <li><a href="#">Algemene voorwaarden</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Cookies</a></li>
                                    <li><a href="#">Sitemap</a></li>
                                </ul>
                                <p>© Opgericht in 2022 - VentiDirect B.V.</p>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =========================== SECONDARY FOOTER AREA END ============================== -->

    <x-doc.script/>

</body>

</html>