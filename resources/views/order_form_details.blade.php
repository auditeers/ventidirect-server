<!DOCTYPE html>
<html lang="nl">

<x-doc.head/>

<body>

    <x-header/>

    <!-- ====================== STAPE AREA START ============================ -->
    <section class="stape__area">
        <div class="container">
            <div class="stape__wrap">
                <div class="stape__blk">
                    <div class="single__stape__wrap active">
                        <span>Gegevens <i class="far fa-check"></i></span>
                    </div>
                    <div class="single__stape__wrap">
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
    <section class="delivery__area">
        <form method="post" id="order_form">
            @csrf
            <div class="container">
                <div class="similar__main__title">
                    <h3>Bezorggegevens</h3>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="delivery__wrap">

                            <div class="delivery__details__form">
                                <div class="delivery__details__inner__blk mt-15">
                                    <div class="row g-2">
                                        <div class="col-6">
                                            <div class="single__delivery__details">
                                                <label for="#">Voornaam</label>
                                                <input type="text" name="firstname" value="{{ old('firstname') }}" placeholder="Voornaam">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="single__delivery__details">
                                                <label for="#">Achternaam</label>
                                                <input type="text" name="achternaam"  value="{{ old('achternaam') }}"  placeholder="Achternaam">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="delivery__details__inner__blk mt-15">
                                    <div class="row g-2">
                                        <div class="col-4">
                                            <div class="single__delivery__details">
                                                <label for="#">Postcode</label>
                                                <input type="text" placeholder="1111AA">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="single__delivery__details">
                                                <label for="#">Huisnummer</label>
                                                <input type="text" placeholder="Nr.">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="single__delivery__details">
                                                <label for="#">Toevoeging</label>
                                                <input type="text" placeholder="Toev.">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="delivery__single__item mt-15">
                                <div class="delivery__similar__title">
                                    <p>Factuuradres <span>Optioneel</span></p>
                                </div>
                                <div class="delivary__radio__btn">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Hetzelfde als bezorgadres
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="delivery__details__form">
                                <div class="delivery__details__inner__blk mt-15">
                                    <div class="col-lg-6">
                                        <div class="row g-2">
                                            <div class="col-12">
                                                <div class="single__delivery__details">
                                                    <label for="#">Telefoonnummer</label>
                                                    <input type="text" placeholder="0625505587">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="single__delivery__details">
                                                    <label for="#">E-mailadres</label>
                                                    <input type="email" placeholder="Jouw e-mailadres">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{--
                            <div class="delivery__single__item mt-15">
                                <div class="delivery__similar__title">
                                    <p>E-mailopties <span>Optioneel</span></p>
                                </div>
                                <div class="delivary__radio__btn d-inline">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                        <label class="form-check-label" for="flexCheckDefault2">
                                            Ik wil een account aanmaken
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Ik wil graag de nieuwsbrief ontvangen
                                        </label>
                                    </div>
                                </div>
                            </div>
                            --}}

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="similar__listing__title">
                            <h5>Winkelwagen</h5>
                        </div>
                        <div class="shopping__cart__details">

                            @foreach($cart_items as $cart_item)
                            <div class="single__shopping__cart__details">
                                <div class="shopping__cart__details__thumb">
                                    <img 
                                        src="/storage/{{  $cart_item->attributes["image"] ?? 'placeholder.jpg' }}" 
                                        alt="{{ $cart_item->name }}">
                                </div>
                                <div class="shopping__cart__details__text">
                                    <p>{{ $cart_item->name }}</p>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <!-- ====================== DELIVERY AREA END ============================ -->

    
    <!-- ====================== SHOPPINGCART BOTTOM AREA START ============================ -->
    <section class="shopping__cart__bottom__area">
        <div class="container">
            <div class="delivery__shopping__cart__btn">
                <div class="categoti__top__link__text mb-0 blue__ico">
                    <span><i class="fas fa-angle-left"></i></span> <a href="/" class="active">Verder winkelen</a>
                </div>
                <a href="#" onclick="document.getElementById('order_form').submit();" class="global__btn">Doorgaan</a>
            </div>
        </div>
    </section>
    <!-- ====================== SHOPPINGCART BOTTOM AREA END ============================ -->
    


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