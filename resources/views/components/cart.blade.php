<div class="header__right__single__item left_card_space open__shopping__cart">
    <div class="cart__ico"><i class="fas fa-shopping-cart"></i></div> <i class="far fa-angle-down"></i>

    <div class="cart__offcanvas__blk">
        <div class="similar__listing__title">
            <h5>Winkelwagen</h5>
        </div>
        <div class="shopping__cart__details border-0">
            
            <p class="mt-5 mb-5">Er zitten geen items in uw winkelmandje.</p>

            @foreach($cart_items as $cart_item)
            
            <div class="single__shopping__cart__details__wrap">
                <div class="single__shopping__cart__details">
                    <div class="shopping__cart__details__thumb">
                        <img 
                            src="/storage/{{ $cart_item->model->image ?? 'placeholder.jpg' }}" 
                            alt="{{ $cart_item->name }}">
                    </div>
                    <div class="shopping__cart__details__text">
                        <p>{{ $cart_item->name }}</p>
                    </div>
                </div>
                <div class="cart_price">
                    <h4>€ {{ $cart_item->price }}</h4>
                </div>
            </div>
            
            @endforeach


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
                    <a class="second_similar_btn" href="#">Wijzig winkelwagen</a>
                    <a href="#" class="global__btn">Bestellen</a>
                </div>
            </div>
        </div>
    </div>
</div>