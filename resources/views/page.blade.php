<!DOCTYPE html>
<html lang="nl">

<x-doc.head/>

<body>

    <x-header/>


    <!-- =================== PRODUCT LISTING AREA START ===================== -->
    <section class="product__listing__area">
        <div class="container">
            <div class="row">
                <div class="col-xl-2"></div>
                <div class="col-xxl-8 col-xl-8">
                    <div class="ventilation__area">
                        <div class="ventilation__inner__blk">
                            <div class="categoti__top__link__text">
                                <a href="/" class="active">VentiDirect.nl</a> 
                                <span><i class="fas fa-angle-right"></i></span> 
                                <a href="#" class="active">Service</a> 
                                <span><i class="fas fa-angle-right"></i></span> 
                                <a href="#">{{ $page->name }}</a>
                            </div>

                            <div class="similar__main__title">
                                <h3>{{ $page->title }}</h3>
                                <p></p>
                                <p>{!! $page->content !!}</p>
                            </div>

                            <x-brands/>

                        </div>
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