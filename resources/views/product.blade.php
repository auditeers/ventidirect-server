<!DOCTYPE html>
<html lang="nl">

<x-doc.head/>

<body>

    <x-header/>


    <!-- =================== CATEGORIE AREA START ===================== -->
    <section class="categorie__area">
        <div class="container">
            <div class="categoti__top__link__text none_link_mobile">
                <a href="#" class="active">VentiDirect.nl</a> <span><i class="fas fa-angle-right"></i></span> <a href="#" class="active">Categorieën</a> 
                <span><i class="fas fa-angle-right"></i></span> 
                <a href="/producten/{{ $product->category->slug ?? 'Overig' }}" class="active">{{ $product->category->name ?? 'Overig' }}</a> 
                <span><i class="fas fa-angle-right"></i>
                <a href="#">{{ $product->name }}</a>
            </div>
            <div class="categoti__top__link__text mb-0 blue__ico black_link_mobile mb-15">
                <span><i class="far fa-angle-left"></i></i></span> <a href="#" class="active">{{ $product->category->name ?? 'Overig' }}</a>
            </div>
            <div class="similar__main__title">
                <h3>{{ $product->name }}</h3>
                {{--
                <div class="five__star">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <small>241 reviews</small>
                </div>
                --}}
            </div>
            
            <div class="product__info__slide__area">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="product__info__slide__blk">
                            <div class="product__info__for__slide slider-for">
                                <div class="single__info__for__slide">
                                    <img src="/storage/{{ $product->image ?? "/placeholder.jpg"}}" alt="{{ $product->seo_title ?? '' }}">
                                </div>
                                {{--
                                <div class="single__info__for__slide">
                                    <img src="/assets/img/slick_2.png" alt="">
                                </div>
                                --}}
                            </div>
                            {{--
                            <div class="product__info__nav__slide slider-nav">
                                <div class="single__info__nav__slide">
                                    <img src="/storage/{{ $product->image ?? "/placeholder.jpg"}}" alt="{{ $product->seo_title ?? '' }}">
                                </div>
                                <div class="single__info__nav__slide">
                                    <img src="/assets/img/slick_2.png" alt="">
                                </div>
                            </div>
                            --}}
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="market__content__area">
                            
                            @if(!empty($product->pros))
                            <div class="like__blk">
                                <a href="/product/{{ $product->slug }}"><img src="/assets/img/LIKE.png" alt="">{{ $product->pros[0]['value'] }}</a>
                            </div>
                            @endif

                            <div class="ventilation__list">
                                @if(!empty($product->pros) && count($product->pros) > 1)
                                <ul>
                                    @for ($i = 1; $i < 4; $i++)
                                        @if(!empty($product->pros[$i]))
                                        <li>{{ $product->pros[$i]['value'] }}</li>
                                        @endif
                                    @endfor
                                </ul>
                                @endif
                            </div>

                            {{--
                            <div class="variant_blk mt-20">
                                <h4>Kies je variant</h4>
                                <div class="page__filter__select">
                                    <select>
                                        <option data-display="">DucoBox Silent All in One (set)</option>
                                        <option value="1">Some option</option>
                                        <option value="2">Another option</option>
                                        <option value="3" disabled>A disabled option</option>
                                        <option value="4">Potato</option>
                                    </select>
                                </div>
                            </div>
                            --}}

                            <div class="main__price flex-column align-items-start">
                                <div class="price__content">
                                    @if(!empty($product->price_from))
                                    <span>Adviesprijs &euro; {{ $product->price_from }}</span>
                                    @endif

                                    <h4>&euro; {{ $product->price }}</h4>
                                    <span>&euro; {{ $product->price - $product->vat }} excl. BTW</span>
                                </div>
                                <div class="cart__top__content">
                                    <h5>Voor 23:59 besteld, morgen gratis bezorgd</h5>
                                </div>
                                <div class="buy__item">
                                    <div class="page__filter__select">
                                        <select>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="cart__wrap">
                                        <a href="/cart/add/{{ $product->id }}"><img src="/assets/img/cart_ico.svg" alt=""> In mijn winkelwagen</a>
                                    </div>
                                </div>
                                <div class="check__listing__blk mt-20">
                                    <ul>
                                        <li><i class="far fa-check"></i> Snelle bezorging, gratis vanaf 25 euro</li>
                                        <li><i class="far fa-check"></i> Hoogste kwaliteit producten</li>
                                        <li><i class="far fa-check"></i> Altijd de laagste prijs</li>
                                    </ul>
                                </div>
                                <div class="price__bottom__text">
                                    <span>Artikelnr.: {{ $product->ean }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =================== CATEGORIE AREA END ===================== -->


    <!-- =================== PROS AND CONS ACCORDION AREA START ===================== -->
    <div class="pros__and__cons__accordion__area d-none">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pros__and__cons__inner__accordion__blk">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Productinformatie
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="minpunten__list">
                                            <div class="similar__listing__title">
                                                <h5>Plus en minpunten</h5>
                                            </div>
                                            <div class="pros_and_cons_listing">
                                                <ul>
                                                    <li><img src="/assets/img/plus__icon.svg" alt="">Stilste en krachtigste mechanische ventilatiebox in de markt</li>
                                                    <li><img src="/assets/img/plus__icon.svg" alt="">Maximale lucht opbrengst van 400 m3/h bij 150 Pa</li>
                                                    <li><img src="/assets/img/plus__icon.svg" alt="">Energiezuinige gelijkstroom motor 230V (maar 10W verbruik in de laagste stand) piekvermogen 84W</li>
                                                    <li><img src="/assets/img/minus__icon.svg" alt="">Heeft maar 7 aansluitingen Ø 125 voor afzuiging en 1 afvoerkanaal 125mm</li>
                                                    <li><img src="/assets/img/minus__icon.svg" alt="">Breedte x Hoogte x Diepte : 480 x 480 x 194 mm</li>
                                                </ul>
                                            </div>
                                        </div>
                    
                                        <div class="similar__pros_and_cons__content mt-20">
                                            <div class="similar__listing__title">
                                                <h5>Omschrijving</h5>
                                            </div>
                                            <p class="m-0">De DucoBox is niet alleen de motor, maar ook de belangrijkste unit van het kwaliteitsmerk DUCO uit Belgie. Deze compacte, krachtige en uiterst..</p>
                                            <a href="#" class="second_similar_btn">Toon volledige omschrijving</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Specificaties
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="specificaties mt-20">
                                            <div class="single__specificaties bg__gray">
                                                <span>Garantie</span>
                                                <span>3 jaar</span>
                                            </div>
                                            <div class="single__specificaties">
                                                <span>Diameter</span>
                                                <span>125 mm</span>
                                            </div>
                                            <div class="single__specificaties bg__gray">
                                                <span>Stekker</span>
                                                <span>Randaarde</span>
                                            </div>
                                            <div class="single__specificaties">
                                                <span>Merk</span>
                                                <span>Duco</span>
                                            </div>
                                            <div class="single__specificaties bg__gray">
                                                <span>Functionaliteit</span>
                                                <span>Vochtsensor <br> Met afstandbediening RF <br> Radiografisch ontvanger</span>
                                            </div>
                                            <div class="single__specificaties">
                                                <span>Producttype</span>
                                                <span>3 jaar</span>
                                            </div>
                                            <div class="single__specificaties bg__gray">
                                                <span>Capaciteit m3/h</span>
                                                <span>3 jaar</span>
                                            </div>
                                            <a href="#" class="second_similar_btn">Toon meer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =================== PROS AND CONS ACCORDION AREA END ===================== -->

    
    <!-- =================== Pros and cons start ===================== -->
    <section class="pros_and_cons_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="similar__title">
                        <h5>Productinformatie</h5>
                    </div>
                    <div class="minpunten__list">
                        <div class="similar__listing__title">
                            <h5>Plus en minpunten</h5>
                        </div>
                        <div class="pros_and_cons_listing">
                            <ul>
                                @foreach($product->pros as $pro)
                                <li><img src="/assets/img/plus__icon.svg" alt="">{{ $pro['value'] }}</li>
                                @endforeach
                                @foreach($product->cons as $con)
                                <li><img src="/assets/img/minus__icon.svg" alt="">{{ $con['value']}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="similar__pros_and_cons__content mt-20">
                        <div class="similar__listing__title">
                            <h5>Omschrijving</h5>
                        </div>
                        {!! $product->description !!}
                    </div>

                </div>
                <div class="col-lg-5">
                    <div class="product__specificaties__blk">
                        <div class="product__viceo">
                            <div class="similar__title">
                                <h5>Productvideo</h5>
                            </div>
                            
                            <div class="youtube__video">
                                <div class="ratio ratio-16x9">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/WnzM5iOYoTE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <a class="second_similar_btn" href="#">Alle productvideo’s (3)</a>
                            </div>
                        </div>

                        <div class="specificaties mt-30">
                            <div class="similar__title">
                                <h5>Specificaties</h5>
                            </div>
                           
                            <div class="single__specificaties bg__gray">
                                <span>Garantie</span>
                                <span>3 jaar</span>
                            </div>
                            <div class="single__specificaties">
                                <span>Diameter</span>
                                <span>125 mm</span>
                            </div>
                            <div class="single__specificaties bg__gray">
                                <span>Stekker</span>
                                <span>Randaarde</span>
                            </div>
                            <div class="single__specificaties">
                                <span>Merk</span>
                                <span>Duco</span>
                            </div>
                            <div class="single__specificaties bg__gray">
                                <span>Functionaliteit</span>
                                <span>Vochtsensor <br> Met afstandbediening RF <br> Radiografisch ontvanger</span>
                            </div>
                            <div class="single__specificaties">
                                <span>Producttype</span>
                                <span>3 jaar</span>
                            </div>
                            <div class="single__specificaties bg__gray">
                                <span>Capaciteit m3/h</span>
                                <span>3 jaar</span>
                            </div>
                            <a href="#" class="second_similar_btn">Toon alle specificaties</a>
                        </div>

                        <div class="download__blk mt-40">
                            <div class="similar__title">
                                <h5>Downloads</h5>
                            </div>
                            <ul>
                                <li class="bg__gray"><a href="#"><img src="/assets/img/pdf__ico.svg" alt="">Filename.pdf</a></li>
                                <li><a href="#"><img src="/assets/img/pdf__ico.svg" alt="">Filename.pdf</a></li>
                                <li class="bg__gray"><a href="#"><img src="/assets/img/pdf__ico.svg" alt="">Filename.pdf</a></li>
                                <li><a href="#"><img src="/assets/img/pdf__ico.svg" alt="">Filename.pdf</a></li>
                            </ul>
                            <a class="second_similar_btn" href="#">Alle productvideo’s (10)</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =================== Pros and cons END ===================== -->


    <!-- =================== REVIEWS AREA START ===================== -->
    <section class="reviews__area mt-25">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="reviews__inner__blk">
                        <div class="similar__title">
                            <h5>Reviews</h5>
                        </div>
                        <div class="based__review__blk mb-20">
                            <h5>5/5</h5>
                            <div class="based__star">
                                <div class="five__star">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <p>Gebaseerd op 24 reviews</p>
                            </div>
                        </div>

                        <div class="based__reviews__slide__blk">
                            <div class="based__reviews__slide owl-carousel">
                                <div class="single__based__reviews__slide">
                                    <div class="based__star">
                                        <div class="five__star">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <h6>5/5</h6>
                                        </div>
                                    </div>
                                    <div class="based__sllide__content mt-10">
                                        <div class="product__details__content">
                                            <h4>Ventilatiebox die stil is en goede zuigkracht heeft. Makkelijk te installeren.</h4>
                                            <p>Deze ventilatie is echt een top aankoop, heel eenvoudig te installeren en te personaliseren door de afzonderlijke sensoren. Zo kan je vraaggestuurd alles laten draaien...</p>
                                            <a class="second_similar_btn" href="#">Alle productvideo’s (10)</a>
                                        </div>
                                    </div>
                                    <div class="based__bottom__content">
                                        <p>Peter | 12-08-2022</p>
                                    </div>
                                </div>
                                <div class="single__based__reviews__slide">
                                    <div class="based__star">
                                        <div class="five__star">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <h6>5/5</h6>
                                        </div>
                                    </div>
                                    <div class="based__sllide__content mt-10">
                                        <div class="product__details__content">
                                            <h4>Ventilatiebox die stil is en goede zuigkracht heeft. Makkelijk te installeren.</h4>
                                            <p>Deze ventilatie is echt een top aankoop, heel eenvoudig te installeren en te personaliseren door de afzonderlijke sensoren. Zo kan je vraaggestuurd alles laten draaien...</p>
                                            <a class="second_similar_btn" href="#">Alle productvideo’s (10)</a>
                                        </div>
                                    </div>
                                    <div class="based__bottom__content">
                                        <p>Peter | 12-08-2022</p>
                                    </div>
                                </div>
                                <div class="single__based__reviews__slide">
                                    <div class="based__star">
                                        <div class="five__star">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <h6>5/5</h6>
                                        </div>
                                    </div>
                                    <div class="based__sllide__content mt-10">
                                        <div class="product__details__content">
                                            <h4>Ventilatiebox die stil is en goede zuigkracht heeft. Makkelijk te installeren.</h4>
                                            <p>Deze ventilatie is echt een top aankoop, heel eenvoudig te installeren en te personaliseren door de afzonderlijke sensoren. Zo kan je vraaggestuurd alles laten draaien...</p>
                                            <a class="second_similar_btn" href="#">Alle productvideo’s (10)</a>
                                        </div>
                                    </div>
                                    <div class="based__bottom__content">
                                        <p>Peter | 12-08-2022</p>
                                    </div>
                                </div>
                            </div>

                            <div class="post__review__btn d-flex align-items-center">
                                <span class="open__review">Plaats review</span>
                                <div class="open__allreview">Bekijk alle 24 reviews</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =================== REVIEWS AREA END ===================== -->


    <!-- ------------------- choose offcanvas start -->
    <div class="choose__offcanvas__area">
        <div class="choose__offcanvas__top__blk">
            <h4>Schrijf een review</h4>
            <div class="off__menu">
                <img src="/assets/img/cros.png" alt="">
            </div>
        </div>
        <div class="choose__inner__offcanvas__blk">
            <div class="post__review__in__offcanvas">
                <div class="similar__listing__title">
                    <h5>Hoeveel sterren geef je dit product?</h5>
                </div>
                <div class="post__review__star">
                    <span class="active__star"><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                </div>
            </div>
            <form action="#">

                <div class="single__delivery__details mt-15">
                    <label for="#">Naam</label>
                    <input type="text" placeholder="Jouw naam">
                </div>

                <div class="single__delivery__details mt-15">
                    <label for="#">E-mailadres <span>Blijft geheim</span></label>
                    <input type="email" placeholder="Jouw e-mailadres">
                </div>

                <div class="single__delivery__details mt-15">
                    <label for="#">Titel van je review</label>
                    <input type="text" placeholder="Wat vond je er van in 1 zin?">
                </div>

                <div class="single__delivery__details mt-15 post__review_inner_btn">
                    <label for="#">Je review</label>
                    <textarea name="" id="" cols="30" rows="10" placeholder="Omschrijf je ervaring met dit product"></textarea>
                    <button type="button" class="third__btn open__main__revirw">Plaats review</button>
                </div>
            </form>
        </div>
    </div>
    <!-- ------------------- choose offcanvas end -->


    <!-- ------------------- choose offcanvas start -->
    <div class="allreview__offcanvas__area">
        <div class="choose__offcanvas__top__blk">
            <h4>Reviews</h4>
            <div class="off__menu">
                <img src="/assets/img/cros.png" alt="">
            </div>
        </div>
        <div class="choose__inner__offcanvas__blk mt-0">
            <div class="based__review__blk mb-20">
                <h5>5/5</h5>
                <div class="based__star">
                    <div class="five__star">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                    </div>
                    <p>Gebaseerd op 24 reviews</p>
                </div>
            </div>

            <button type="button" class="third__btn open__main__revirw width_full">Plaats review</button>

            <div class="single__based__reviews__slide none_padding mt-20 border-0">
                <div class="based__star">
                    <div class="five__star">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <h6>5/5</h6>
                    </div>
                </div>
                <div class="based__sllide__content mt-10">
                    <div class="product__details__content">
                        <h4>Ventilatiebox die stil is en goede zuigkracht heeft. Makkelijk te installeren.</h4>
                        <p>Deze ventilatie is echt een top aankoop, heel eenvoudig te installeren en te personaliseren door de afzonderlijke sensoren. Zo kan je vraaggestuurd alles laten draaien...</p>
                        <a class="second_similar_btn" href="#">Alle productvideo’s (10)</a>
                    </div>
                </div>
                <div class="based__bottom__content">
                    <p>Peter | 12-08-2022</p>
                </div>
            </div>

            <div class="single__based__reviews__slide none_padding border-0">
                <div class="based__star">
                    <div class="five__star">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <h6>5/5</h6>
                    </div>
                </div>
                <div class="based__sllide__content mt-10">
                    <div class="product__details__content">
                        <h4>Ventilatiebox die stil is en goede zuigkracht heeft. Makkelijk te installeren.</h4>
                        <p>Deze ventilatie is echt een top aankoop, heel eenvoudig te installeren en te personaliseren door de afzonderlijke sensoren. Zo kan je vraaggestuurd alles laten draaien...</p>
                        <a class="second_similar_btn" href="#">Alle productvideo’s (10)</a>
                    </div>
                </div>
                <div class="based__bottom__content">
                    <p>Peter | 12-08-2022</p>
                </div>
            </div>

            <div class="single__based__reviews__slide none_padding border-0">
                <div class="based__star">
                    <div class="five__star">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <h6>5/5</h6>
                    </div>
                </div>
                <div class="based__sllide__content mt-10">
                    <div class="product__details__content">
                        <h4>Ventilatiebox die stil is en goede zuigkracht heeft. Makkelijk te installeren.</h4>
                        <p>Deze ventilatie is echt een top aankoop, heel eenvoudig te installeren en te personaliseren door de afzonderlijke sensoren. Zo kan je vraaggestuurd alles laten draaien...</p>
                        <a class="second_similar_btn" href="#">Alle productvideo’s (10)</a>
                    </div>
                </div>
                <div class="based__bottom__content">
                    <p>Peter | 12-08-2022</p>
                </div>
            </div>

        </div>
    </div>
    <div class="overlay"></div>
    <!-- ------------------- choose offcanvas end -->


    <!-- =================== PRICING AREA START ===================== -->
    <section class="pricing__area">
        <div class="container">
            <div class="similar__title">
                <h5>Alternatieve opties</h5>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="pricing__slide__blk owl-carousel">
                        <div class="single__pricing__slide__blk">
                            <div class="pricing__slide__thumb">
                                <img src="/assets/img/pricing_1.png" alt="">
                            </div>

                            <div class="pricing__content">
                                <p>Stork Woonhuisventilator ComfoFan SRP (perilex) - incl. RFZ zender..</p>
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
                                    <h4>344,00</h4>
                                    <span>284,30 excl. BTW</span>
                                </div>
                                <div class="cart__wrap">
                                    <a href="#"><img src="/assets/img/cart_ico.svg" alt=""></a>
                                </div>
                            </div>
                            <div class="price__bottom__text">
                                <span>Artikelnr.: 0000-4639</span>
                            </div>
                        </div>

                        <div class="single__pricing__slide__blk">
                            <div class="pricing__slide__thumb">
                                <img src="/assets/img/pricing_2.png" alt="">
                            </div>

                            <div class="pricing__content">
                                <p>DucoBox Silent All-In-One RH & BD - vocht boxsensor +  RF batterij..</p>
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
                                    <h4>344,00</h4>
                                    <span>284,30 excl. BTW</span>
                                </div>
                                <div class="cart__wrap">
                                    <a href="#"><img src="/assets/img/cart_ico.svg" alt=""></a>
                                </div>
                            </div>
                            <div class="price__bottom__text">
                                <span>Artikelnr.: 0000-4639</span>
                            </div>
                        </div>

                        <div class="single__pricing__slide__blk">
                            <div class="pricing__slide__thumb">
                                <img src="/assets/img/pricing_3.png" alt="">
                            </div>

                            <div class="pricing__content">
                                <p>Orcon woonhuisventilator MVS-15R - 600 m3/h - met afstandsbediening RF</p>
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
                                    <h4>344,00</h4>
                                    <span>284,30 excl. BTW</span>
                                </div>
                                <div class="cart__wrap">
                                    <a href="#"><img src="/assets/img/cart_ico.svg" alt=""></a>
                                </div>
                            </div>
                            <div class="price__bottom__text">
                                <span>Artikelnr.: 0000-4639</span>
                            </div>
                        </div>

                        <div class="single__pricing__slide__blk">
                            <div class="pricing__slide__thumb">
                                <img src="/assets/img/pricing_4.png" alt="">
                            </div>

                            <div class="pricing__content">
                                <p>Itho woonhuisventilator met vochtsensor CVE-S ECO RFT SE - ..</p>
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
                                    <h4>344,00</h4>
                                    <span>284,30 excl. BTW</span>
                                </div>
                                <div class="cart__wrap">
                                    <a href="#"><img src="/assets/img/cart_ico.svg" alt=""></a>
                                </div>
                            </div>
                            <div class="price__bottom__text">
                                <span>Artikelnr.: 0000-4639</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="finish__ventilation__blk">
                        <div class="single__geid__view__slide mt-25">
                            <div class="finish__ventilation__slide__blk owl-carousel">
                                <div class="single__pricing__slide__blk">
                                    <div class="pricing__slide__thumb">
                                        <img src="/assets/img/grid_1.png" alt="">
                                    </div>
        
                                    <div class="pricing__content">
                                        <p>Design ventilatierooster vierkant (afvoer & toevoer) Ø125mm - RVS..</p>
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
                                            <h4>344,00</h4>
                                            <span>284,30 excl. BTW</span>
                                        </div>
                                        <div class="cart__wrap">
                                            <a href="#"><img src="/assets/img/cart_ico.svg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="price__bottom__text">
                                        <span>Artikelnr.: 0000-4639</span>
                                    </div>
                                </div>
        
                                <div class="single__pricing__slide__blk">
                                    <div class="pricing__slide__thumb">
                                        <img src="/assets/img/grid_2.png" alt="">
                                    </div>
        
                                    <div class="pricing__content">
                                        <p>Design ventilatierooster vierkant (afvoer & toevoer) Ø100mm - vlak..</p>
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
                                            <h4>344,00</h4>
                                            <span>284,30 excl. BTW</span>
                                        </div>
                                        <div class="cart__wrap">
                                            <a href="#"><img src="/assets/img/cart_ico.svg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="price__bottom__text">
                                        <span>Artikelnr.: 0000-4639</span>
                                    </div>
                                </div>
        
                                <div class="single__pricing__slide__blk">
                                    <div class="pricing__slide__thumb">
                                        <img src="/assets/img/grid_3.png" alt="">
                                    </div>
        
                                    <div class="pricing__content">
                                        <p>Ventilatiestrip aluminium LxH 400 x 60mm (G61-4006B) BRUIN RAL8022</p>
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
                                            <h4>344,00</h4>
                                            <span>284,30 excl. BTW</span>
                                        </div>
                                        <div class="cart__wrap">
                                            <a href="#"><img src="/assets/img/cart_ico.svg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="price__bottom__text">
                                        <span>Artikelnr.: 0000-4639</span>
                                    </div>
                                </div>
        
                                <div class="single__pricing__slide__blk">
                                    <div class="pricing__slide__thumb">
                                        <img src="/assets/img/grid_4.png" alt="">
                                    </div>
        
                                    <div class="pricing__content">
                                        <p>Vasco - Design ventiel dubbel rond - 
                                            Ø 125mm</p>
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
                                            <h4>344,00</h4>
                                            <span>284,30 excl. BTW</span>
                                        </div>
                                        <div class="cart__wrap">
                                            <a href="#"><img src="/assets/img/cart_ico.svg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="price__bottom__text">
                                        <span>Artikelnr.: 0000-4639</span>
                                    </div>
                                </div>
        
                                <div class="single__pricing__slide__blk">
                                    <div class="pricing__slide__thumb">
                                        <img src="/assets/img/grid_5.png" alt="">
                                    </div>
        
                                    <div class="pricing__content">
                                        <p>Itho woonhuisventilator met vochtsensor CVE-S ECO RFT SE - ..</p>
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
                                            <h4>344,00</h4>
                                            <span>284,30 excl. BTW</span>
                                        </div>
                                        <div class="cart__wrap">
                                            <a href="#"><img src="/assets/img/cart_ico.svg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="price__bottom__text">
                                        <span>Artikelnr.: 0000-4639</span>
                                    </div>
                                </div>
    
                                <div class="single__pricing__slide__blk">
                                    <div class="pricing__slide__thumb">
                                        <img src="/assets/img/grid_6.png" alt="">
                                    </div>
        
                                    <div class="pricing__content">
                                        <p>Itho woonhuisventilator met vochtsensor CVE-S ECO RFT SE - ..</p>
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
                                            <h4>344,00</h4>
                                            <span>284,30 excl. BTW</span>
                                        </div>
                                        <div class="cart__wrap">
                                            <a href="#"><img src="/assets/img/cart_ico.svg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="price__bottom__text">
                                        <span>Artikelnr.: 0000-4639</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =================== PRICING AREA END ===================== -->


    <x-footer/>

    <x-doc.script/>

</body>

</html>