<!DOCTYPE html>
<html lang="nl">

<x-doc.head/>

<body>

    <x-header/>


    <!-- =================== PRODUCT LISTING AREA START ===================== -->
    <section class="product__listing__area">
        <div class="container">
            <div class="row">
                <div class="col-xxl-3 col-xl-4">
                    <div class="listing__product__wrapper">
                        <div class="listing__product__wrap">
                            <div class="listing__product__tab__top__blk">
                                <h4>Filteren</h4>
                                <div class="filter__close__blk">
                                    <span>Wis filters <img src="/assets/img/cros.png" alt=""></span>
                                </div>
                            </div>

                            {{--
                            <div class="filter__store__link">
                                <div class="similar__listing__title">
                                    <h5>Sorteer op</h5>
                                </div>

                                <div class="filter__store__btn">
                                    <div class="filter__store__btn__scroll">
                                        <a href="#">Prijs (laag)</a>
                                        <a href="#">Best verkocht</a>
                                        <a href="#">Populair</a>
                                    </div>
                                </div>
                            </div>
                            --}}
                            {{--
                            <div class="product__listing__top__blk">
                                <div class="product__listing__accordion__blk">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <i class="fas fa-angle-left"></i>  VentiDirect.nl
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="main__product__list">
                                                        <ul>
                                                            <li><a href="#">Duco ventilatiebox</a></li>
                                                            <li><a href="#">Orcon Ventilatieboxen</a></li>
                                                            <li><a href="#">Zehnder (Stork) Ventilatiebox</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <i class="fas fa-angle-left"></i>  Ventilatiesystemen en ventilatieboxen
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="main__categorie__inner__text">
                                                        <h5>Mechanische ventilatieboxen</h5>
                                                        <div class="main__product__list">
                                                            <ul>
                                                                <li><a href="#">Duco ventilatiebox</a></li>
                                                                <li><a href="#">Orcon Ventilatieboxen</a></li>
                                                                <li><a href="#">Zehnder (Stork) Ventilatiebox</a></li>
                                                            </ul>
                                                        </div>

                                                        <div class="collapse" id="collapseExample">
                                                            <div class="main__product__list">
                                                                <ul>
                                                                    <li><a href="#">Extra subcategory here</a></li>
                                                                    <li><a href="#">Extra subcategory here</a></li>
                                                                    <li><a href="#">Extra subcategory here</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <a class="similar__view__btn mt-10" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fas fa-angle-down"></i> Bekijk meer</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product__list__bottom__content">
                                    <p>Montagemateriaal</p>
                                    <p>Montageservice nodig?</p>
                                    <p>Hulp met je keuze</p>
                                </div>
                            </div>

                            <div class="product__type__blk mt-25">
                                <div class="similar__listing__title">
                                    <h5>Product type</h5>
                                </div>

                                <div class="product__type__check">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Woonhuisventilator <span>(7)</span>
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
                                        <label class="form-check-label" for="flexCheckChecked1">
                                            Sensoren <span>(4)</span>
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2">
                                        <label class="form-check-label" for="flexCheckChecked2">
                                            Afstandbedieningen <span>(4)</span>
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked3">
                                        <label class="form-check-label" for="flexCheckChecked3">
                                            Regelaars <span>(4)</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="collapse product__type__check" id="collapseExample2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked12">
                                        <label class="form-check-label" for="flexCheckChecked12">
                                            Extra Filter Option here <span>(4)</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked13">
                                        <label class="form-check-label" for="flexCheckChecked13">
                                            Extra Filter Option here <span>(4)</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked14">
                                        <label class="form-check-label" for="flexCheckChecked14">
                                            Extra Filter Option here <span>(4)</span>
                                        </label>
                                    </div>
                                </div>

                                <a class="similar__view__btn mt-10" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2"><i class="fas fa-angle-down"></i> Bekijk meer</a>
                            </div>
                            --}}
                            {{--
                            <div class="product__type__blk mt-25">
                                <div class="similar__listing__title">
                                    <h5>Merk</h5>
                                </div>
                                <div class="product__type__check">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                                        <label class="form-check-label" for="flexCheckDefault4">
                                            Duco <span>(7)</span>
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked5">
                                        <label class="form-check-label" for="flexCheckChecked5">
                                            Orcon <span>(4)</span>
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked6">
                                        <label class="form-check-label" for="flexCheckChecked6">
                                            Stork <span>(4)</span>
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked7">
                                        <label class="form-check-label" for="flexCheckChecked7">
                                            Itho <span>(4)</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="collapse product__type__check" id="collapseExample3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked15">
                                        <label class="form-check-label" for="flexCheckChecked15">
                                            Extra Filter Option here <span>(4)</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked16">
                                        <label class="form-check-label" for="flexCheckChecked16">
                                            Extra Filter Option here <span>(4)</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked17">
                                        <label class="form-check-label" for="flexCheckChecked17">
                                            Extra Filter Option here <span>(4)</span>
                                        </label>
                                    </div>
                                </div>

                                <a class="similar__view__btn mt-10" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3"><i class="fas fa-angle-down"></i> Bekijk meer</a>
                            </div>
                        
                            --}}


                            {{--

                            <div class="product__type__blk mt-25">
                                <div class="similar__listing__title">
                                    <h5>Functionaliteit</h5>
                                </div>

                                <div class="product__type__check">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault8">
                                        <label class="form-check-label" for="flexCheckDefault8">
                                            Nalooptimer <span>(7)</span>
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked9">
                                        <label class="form-check-label" for="flexCheckChecked9">
                                            Vochtsensor <span>(4)</span>
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked10">
                                        <label class="form-check-label" for="flexCheckChecked10">
                                            Met afstandbedieningen RF <span>(4)</span>
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked11">
                                        <label class="form-check-label" for="flexCheckChecked11">
                                            CO2 gestuurd <span>(4)</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="collapse product__type__check" id="collapseExample4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked18">
                                        <label class="form-check-label" for="flexCheckChecked18">
                                            Extra Filter Option here <span>(4)</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked19">
                                        <label class="form-check-label" for="flexCheckChecked19">
                                            Extra Filter Option here <span>(4)</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked20">
                                        <label class="form-check-label" for="flexCheckChecked20">
                                            Extra Filter Option here <span>(4)</span>
                                        </label>
                                    </div>
                                </div>

                                <a class="similar__view__btn mt-10" data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4"><i class="fas fa-angle-down"></i> Bekijk meer</a>
                            </div>
                            --}}

                            <div class="price__filter mt-25">
                                <div class="similar__listing__title">
                                    <h5>Prijs</h5>
                                </div>
                                <form method="GET" id="filter_form">
                                    <div class="single__price__blk">
                                        <label for="#">€</label>
                                        <input type="number" placeholder="" name="price_min" value="{{  floor($category->products()->min('price')) }}">
                                    </div>
                                    <div class="single__price__blk">
                                        <label for="#">tot</label>
                                        <input  type="number"  placeholder="" name="price_max" value="{{  ceil($category->products()->max('price')) }}">
                                    </div>
                                    <button type="button" onclick="document.getElementById('filter_form').submit();"><i class="far fa-angle-right"></i></button>
                                </form>
                            </div>
                        </div>

                        <div class="listing__product__bottom__btn">
                            <a href="#">Toon 12 producten</a>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-9 col-xl-8">
                    <div class="ventilation__area">
                        <div class="ventilation__inner__blk">
                            <div class="categoti__top__link__text">
                                <a href="/" class="active">VentiDirect.nl</a> 
                                <span><i class="fas fa-angle-right"></i></span> 
                                <a href="/" class="active">Categorieën</a> 
                                <span><i class="fas fa-angle-right"></i></span> 
                                <a href="/producten/{{ $category->slug }}">{{ $category->name }}</a>
                            </div>

                            <div class="similar__main__title">
                                <h3>{{ $category->name }}</h3>
                                <p></p>
                                <p>{{ $category->intro }}.. <a href="#description">Lees meer</a></p>
                            </div>

                            <x-brands/>

                            <div class="page__filter__area">
                                <div class="page__filter__blk">
                                    <div class="result__blk">
                                        <div class="filter__open__btn">
                                            <span><img src="/assets/img/open__filter.png" alt=""> Filter</span>
                                        </div>
                                        <span>{{ $category->products->count() }} resultaten</span>
                                    </div>
                                    <div class="page__filter__right__blk">
                                        <span>Sorteer op</span>
                                        <div class="page__filter__select extra__width__filter__select">
                                            <select name="sort">
                                                <option data-display="">Populairiteit</option>
                                                <option value="price_asc">Prijs Oplopend</option>
                                                 <option value="price_desc">Prijs Aflopend</option>
                                            </select>
                                        </div>
                                        <div class="filter__btn">
                                            <span><img src="/assets/img/filter_1.png" alt="sorteer"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @foreach($category->products()->orderBy('image', 'DESC')->paginate(10) as $product)

                            <div class="ventilation__product__area">
                                <div class="single__pricing__slide__blk">                                   

                                    <div class="single__pricing__slide__blk ventilation__pricing__slide__blk">
                                        <div class="pricing__slide__thumb">
                                            <a href="/product/{{ $product->slug }}"><img src="/storage/{{ $product->image ?? "/placeholder.jpg"}}" alt="{{ $product->seo_title ?? '' }}"></a>
                                        </div>

                                        <div class="pricing__content">
                                            <a href="/product/{{ $product->slug }}">
                                                <p>{{ $product->name }}</p>
                                            </a>
                                            {{--
                                            <!-- PRODUCT REVIEW START -->
                                            <div class="five__star">
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <small>241 reviews</small>
                                            </div>
                                            --}}
                                            <div class="ventilation__product__like__blk none__phone">
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
                                                    <span>Artikelnr.: {{ $product->ean }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="ventilation__product__like__blk phone__blk">
                                        
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

                                            <span>Artikelnr.: {{ $product->ean }}</span>
                                        </div>
                                    </div>

                                    <div class="ventilation__main__price__blk">
                                        <div class="main__price">
                                            <div class="price__content tab__none">

                                                @if(!empty($product->price_from))
                                                <span>Adviesprijs &euro; {{ $product->price_from }}</span>
                                                @endif

                                                <h4>&euro; {{ $product->price }}</h4>
                                                <span>&euro; {{ $product->price - $product->vat }} excl. BTW</span>
                                            </div>
                                            <div class="cart__top__content">
                                                <h5>Voor 23:59 besteld, morgen gratis bezorgd</h5>
                                            </div>
                                            <div class="price__content tab__blk">
                                                
                                                @if(!empty($product->price_from))
                                                <span>Adviesprijs &euro; {{ $product->price_from }}</span>
                                                @endif
                                                
                                                <h4>&euro;  {{ $product->price }}</h4>
                                                <span>&euro; {{ $product->price - $product->vat }} excl. BTW</span>
                                            </div>
                                            <div class="cart__wrap none__phone">
                                                <a href="/cart/add/{{ $product->id }}"><img src="/assets/img/cart_ico.svg" alt=""></a>
                                            </div>
                                            <div class="price__bottom__text">
                                                <span>Artikelnr.: {{ $product->ean }}</span>
                                            </div>
                                        </div>

                                        <div class="cart__wrap phone__blk">
                                            <a href="/cart/add/{{ $product->id }}">
                                                <img src="/assets/img/cart_ico.svg" alt="In Winkelmandje">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>

                    {{ $category->products()->orderBy('image', 'DESC')->paginate(10)->links() }}


                    <div class="similar__main__title">
                        <p id="description">{!! $category->description !!}</p>
                    </div>
                
                </div>
            </div>
        </div>
    </section>
    <!-- =================== PRODUCT LISTING AREA END ===================== -->

    <x-footer/>
    
    <div class="overlay"></div>


    <x-doc.script/>

</body>

</html>