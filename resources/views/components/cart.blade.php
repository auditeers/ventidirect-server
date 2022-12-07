<div class="header__right__single__item left_card_space open__shopping__cart">
    <div class="cart__ico"><i class="fas fa-shopping-cart"></i></div> 
    <i class="far fa-angle-down"></i>

    @if(count($cart_items) > 0)
    <span class="cart__notification">{{ count($cart_items) }}</span>
    @endif
    <div class="cart__offcanvas__blk">
        <div class="similar__listing__title">
            <h5>Winkelwagen</h5>
        </div>
        <div class="shopping__cart__details border-0">
            
            @if(empty(count($cart_items)))
            <p class="mt-5 mb-5">Er zitten geen items in uw winkelmandje.</p>
            @else
            
            @foreach($cart_items as $cart_item)
            
            <div class="single__shopping__cart__details__wrap">
                <div class="single__shopping__cart__details">
                    <div class="shopping__cart__details__thumb">
                        <img 
                            src="/storage/{{ $cart_item->attributes["image"] ?? 'placeholder.jpg' }}" 
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
                    <a class="second_similar_btn" href="/cart">Wijzig winkelwagen</a>
                    <a href="/cart/order/details" class="global__btn">Bestellen</a>
                </div>
            </div>
            @endif

        </div>
    </div>
</div>



@if(session('cart') == "added")
<script>
    gtag("event", "add_to_cart", {
        currency: "EUR",
        value: {{ \Cart::getTotal() }},
        items: [
            @foreach($cart_items as $cart_item)
            {
            item_id: "{{ $cart_item->attributes['product_id'] }}",
            item_name: "{{ $cart_item->name }}",
            currency: "EUR",
            price: {{ $cart_item->price }},
            quantity: {{ {{ $cart_item->quantity }}}}
            },
            @endforeach
        ]
    });
</script>
@endif
