@extends('front.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Page title')
@section('content')

<!-- Home Section Start -->
<section class="home-section pt-2">
    <div class="container-fluid-lg">
        <div class="row g-4">
            <div class="col-xl-8 ratio_65">
                <div class="home-contain h-100 ">
                    <div class="h-100">
                        <img src="/front/images/home-banner-1.png" class="bg-img blur-up lazyload" alt>
                    </div>
                    <div class="home-detail p-center-left w-75">
                        <div>
                            <h1 class="text-uppercase">Stay home &
                                delivered your <span class="daily">Daily
                                    Needs</span></h1>
                            <p class="w-75 d-none d-sm-block">Justo
                                placerat habitant vitae mollis rhoncus
                                ut
                                bibendum vivamus penatibus pretium dis
                                duis dictumst elementum cum felis.</p>
                            <button onclick="location.href = 'javascript:void(0)';"
                                class="btn btn-animation mt-xxl-4 mt-2 home-button mend-auto">Shop
                                Now <i class="fa fa-arrow-right icon"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 ratio_65">
                <div class="row g-4">
                    <div class="col-xl-12 col-md-6">
                        <div class="home-contain">
                            <img src="/front/images/home-banner-2.png" class="bg-img blur-up lazyload" alt>
                            <div class="home-detail p-center-left home-p-sm w-75">
                                <div>
                                    <h2 class="mt-0 banner-label-color">BEST
                                        <span class="discount text-title">On</span>
                                    </h2>
                                    <h3 class="theme-color">Electronics
                                        Equipment</h3>
                                    <p class="w-75">Feugiat augue porta
                                        netus cubilia litora pulvinar
                                        habitasse</p>
                                    <a href="javascript:void(0)" class="shop-button">Shop Now <i
                                            class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12 col-md-6">
                        <div class="home-contain">
                            <img src="/front/images/home-banner-3.png" class="bg-img blur-up lazyload" alt>
                            <div class="home-detail p-center-left home-p-sm w-75">
                                <div>
                                    <h3 class="mt-0 theme-color fw-bold">Clothing
                                        & Accessories</h3>
                                    <h4 class="banner-label-color">Gravida
                                        congue</h4>
                                    <p class="organic">Hac fermentum
                                        phasellus neque sed faucibus</p>
                                    <a href="javascript:void(0)" class="shop-button">Shop Now <i
                                            class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home Section End -->

 <!-- Product Section Start -->
 <section class="product-section">
    <div class="container-fluid-lg">
        <div class="row g-sm-4 g-3">
            <div class="col-xxl-3 col-xl-4 d-none d-xl-block">
                <div class="p-sticky">
                    <div class="category-menu">
                        <h3>Category</h3>
                        @if ( count(get_categories()) > 0 )
                            
                       
                        <ul>
                            @foreach (get_categories() as $category)
                                
                           
                            <li>
                                <div class="category-list">
                                    <img src="/images/categories/{{ $category->category_image }}" class="blur-up lazyload" alt>
                                    <h5>
                                        <a href="javascript:void(0)">{{ $category->category_name }}</a>
                                    </h5>
                                </div>
                            </li>
                            @endforeach
                        </ul>

                        @endif

                    </div>

                    <div class="section-t-space">
                        <div class="category-menu">
                            <h3>Treanding Products</h3>

                            <ul class="product-list border-0 p-0 d-block">
                                <li>
                                    <div class="offer-product">
                                        <a href="product-detail.html" class="offer-image">
                                            <img src="/front/images/product img place holder 1.png"
                                                class="blur-up lazyload" alt>
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-detail.html" class="text-title">
                                                    <h6 class="name">Rutrum
                                                        neque cursus
                                                        class erat vitae
                                                        himenaeos
                                                        fusce est purus
                                                        arcu pulvinar
                                                        sociosqu
                                                        turpis</h6>
                                                </a>
                                                <span>BLACK</span>
                                                <h6 class="price theme-color">$
                                                    124.99</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="offer-product">
                                        <a href="product-detail.html" class="offer-image">
                                            <img src="/front/images/product img place holder 1.png"
                                                class="blur-up lazyload" alt>
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-detail.html" class="text-title">
                                                    <h6 class="name">Himenaeos
                                                        eget viverra
                                                        elementum nisl
                                                        ligula in
                                                        lectus diam</h6>
                                                </a>
                                                <span>450 G</span>
                                                <h6 class="price theme-color">$
                                                    89.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="offer-product">
                                        <a href="product-detail.html" class="offer-image">
                                            <img src="/front/images/product img place holder 1.png"
                                                class="blur-up lazyload" alt>
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-detail.html" class="text-title">
                                                    <h6 class="name">Penatibus
                                                        ac pellentesque
                                                        luctus senectus
                                                        fermentum</h6>
                                                </a>
                                                <span>NEW</span>
                                                <h6 class="price theme-color">$
                                                    789.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="mb-0">
                                    <div class="offer-product">
                                        <a href="product-detail.html" class="offer-image">
                                            <img src="/front/images/product img place holder 1.png"
                                                class="blur-up lazyload" alt>
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-detail.html" class="text-title">
                                                    <h6 class="name">Eu
                                                        quisque blandit
                                                        malesuada
                                                        inceptos lacus
                                                        sociis
                                                        rhoncus</h6>
                                                </a>
                                                <span>1 KG</span>
                                                <h6 class="price theme-color">$
                                                    133.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-9 col-xl-8">
                <div class="title title-flex">
                    <div>
                        <h2>New Arrivals</h2>
                        <p>Ignissimos reprehenderit repellendus nobis
                            error quibusdam? Atque animi sint unde quis
                            reprehenderi</p>
                    </div>
                </div>

                <div class="section-b-space">
                    <div class="product-border border-row overflow-hidden">
                        <div class="product-box-slider no-arrow">
                            <div>
                                <div class="row m-0">
                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-detail.html">
                                                    <img src="/front/images/product img place holder 1.png"
                                                        class="img-fluid blur-up lazyload" alt>
                                                </a>
                                                <ul class="product-option">
                                                    <li title="View">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#view">
                                                            <i class="ijaboIcon sx-1 dw dw-eye"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Compare">
                                                        <a href="compare.html">
                                                            <i class="icon-copy dw dw-exchange"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Wishlist">
                                                        <a href="wishlist.html" class="notifi-wishlist">
                                                            <i class="ijaboIcon sx-1 dw dw-heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-detail.html">
                                                    <h6 class="name">
                                                        Gravida massa
                                                        volutpat aenean
                                                        odio erat nullam
                                                        fringilla</h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">$30.69</span>
                                                    <del>38.56</del>
                                                </h5>

                                                <div class="product-rating mt-2">
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star no-rating-color"></i>
                                                        </li>
                                                    </ul>

                                                    <h6 class="theme-color outstock">Out
                                                        of Stock</h6>
                                                </div>

                                                <div class="add-to-cart-box mt-2">
                                                    <a href="cart.html"
                                                        class="btn btn-md bg-dark cart-button text-white w-100 btn-bg-color"><i
                                                            class="icon-copy bi bi-cart-plus-fill"></i>
                                                        Add
                                                        To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-detail.html">
                                                    <img src="/front/images/product img place holder 1.png"
                                                        class="img-fluid blur-up lazyload" alt>
                                                </a>
                                                <ul class="product-option">
                                                    <li title="View">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#view">
                                                            <i class="ijaboIcon sx-1 dw dw-eye"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Compare">
                                                        <a href="compare.html">
                                                            <i class="icon-copy dw dw-exchange"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Wishlist">
                                                        <a href="wishlist.html" class="notifi-wishlist">
                                                            <i class="ijaboIcon sx-1 dw dw-heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-detail.html">
                                                    <h6 class="name">
                                                        Tempor
                                                        suspendisse
                                                        iaculis tellus
                                                        tortor
                                                        senectus
                                                        risus</h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">$11.03</span>
                                                    <del>17.46</del>
                                                </h5>

                                                <div class="product-rating mt-2">
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star no-rating-color"></i>
                                                        </li>
                                                    </ul>

                                                    <h6 class="theme-color">In
                                                        Stock</h6>
                                                </div>

                                                <div class="add-to-cart-box mt-2">
                                                    <a href="cart.html"
                                                        class="btn btn-md bg-dark cart-button text-white w-100 btn-bg-color"><i
                                                            class="icon-copy bi bi-cart-plus-fill"></i>
                                                        Add
                                                        To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="row m-0">
                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-detail.html">
                                                    <img src="/front/images/product img place holder 1.png"
                                                        class="img-fluid blur-up lazyload" alt>
                                                </a>
                                                <ul class="product-option">
                                                    <li title="View">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#view">
                                                            <i class="ijaboIcon sx-1 dw dw-eye"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Compare">
                                                        <a href="compare.html">
                                                            <i class="icon-copy dw dw-exchange"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Wishlist">
                                                        <a href="wishlist.html" class="notifi-wishlist">
                                                            <i class="ijaboIcon sx-1 dw dw-heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-detail.html">
                                                    <h6 class="name">
                                                        Odio nullam
                                                        sociosqu
                                                        condimentum nibh
                                                        accumsan
                                                        rhoncus
                                                    </h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">$28.11</span>
                                                    <del>38.56</del>
                                                </h5>

                                                <div class="product-rating mt-2">
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star no-rating-color"></i>
                                                        </li>
                                                    </ul>

                                                    <h6 class="theme-color">In
                                                        Stock</h6>
                                                </div>

                                                <div class="add-to-cart-box mt-2">
                                                    <a href="cart.html"
                                                        class="btn btn-md bg-dark cart-button text-white w-100 btn-bg-color"><i
                                                            class="icon-copy bi bi-cart-plus-fill"></i>
                                                        Add
                                                        To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-detail.html">
                                                    <img src="/front/images/product img place holder 1.png"
                                                        class="img-fluid blur-up lazyload" alt>
                                                </a>
                                                <ul class="product-option">
                                                    <li title="View">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#view">
                                                            <i class="ijaboIcon sx-1 dw dw-eye"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Compare">
                                                        <a href="compare.html">
                                                            <i class="icon-copy dw dw-exchange"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Wishlist">
                                                        <a href="wishlist.html" class="notifi-wishlist">
                                                            <i class="ijaboIcon sx-1 dw dw-heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-detail.html">
                                                    <h6 class="name">Aenean
                                                        varius senectus
                                                        proin eros
                                                        vehicula
                                                        tempus
                                                        condimentum
                                                        etiam
                                                    </h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">$35.12</span>
                                                    <del>45.77</del>
                                                </h5>

                                                <div class="product-rating mt-2">
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                    </ul>

                                                    <h6 class="theme-color">In
                                                        Stock</h6>
                                                </div>

                                                <div class="add-to-cart-box mt-2">
                                                    <a href="cart.html"
                                                        class="btn btn-md bg-dark cart-button text-white w-100 btn-bg-color"><i
                                                            class="icon-copy bi bi-cart-plus-fill"></i>
                                                        Add
                                                        To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="row m-0">
                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-detail.html">
                                                    <img src="/front/images/product img place holder 1.png"
                                                        class="img-fluid blur-up lazyload" alt>
                                                </a>
                                                <ul class="product-option">
                                                    <li title="View">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#view">
                                                            <i class="ijaboIcon sx-1 dw dw-eye"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Compare">
                                                        <a href="compare.html">
                                                            <i class="icon-copy dw dw-exchange"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Wishlist">
                                                        <a href="wishlist.html" class="notifi-wishlist">
                                                            <i class="ijaboIcon sx-1 dw dw-heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-detail.html">
                                                    <h6 class="name">Tristique
                                                        pulvinar ligula
                                                        arcu netus
                                                        conubia
                                                        aliquet euismod
                                                        bibendum
                                                    </h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">$100</span>
                                                    <del>115.32</del>
                                                </h5>

                                                <div class="product-rating mt-2">
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star no-rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star no-rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star no-rating-color"></i>
                                                        </li>
                                                    </ul>

                                                    <h6 class="theme-color">In
                                                        Stock</h6>
                                                </div>

                                                <div class="add-to-cart-box mt-2">
                                                    <a href="cart.html"
                                                        class="btn btn-md bg-dark cart-button text-white w-100 btn-bg-color"><i
                                                            class="icon-copy bi bi-cart-plus-fill"></i>
                                                        Add
                                                        To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-detail.html">
                                                    <img src="/front/images/product img place holder 1.png"
                                                        class="img-fluid blur-up lazyload" alt>
                                                </a>
                                                <ul class="product-option">
                                                    <li title="View">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#view">
                                                            <i class="ijaboIcon sx-1 dw dw-eye"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Compare">
                                                        <a href="compare.html">
                                                            <i class="icon-copy dw dw-exchange"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Wishlist">
                                                        <a href="wishlist.html" class="notifi-wishlist">
                                                            <i class="ijaboIcon sx-1 dw dw-heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-detail.html">
                                                    <h6 class="name">Ornare
                                                        nisl at
                                                        consequat sed
                                                        senectus lacinia
                                                        accumsan dapibus
                                                        venenatis</h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">$26.69</span>
                                                    <del>28.56</del>
                                                </h5>

                                                <div class="product-rating mt-2">
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star no-rating-color"></i>
                                                        </li>
                                                    </ul>

                                                    <h6 class="theme-color">In
                                                        Stock</h6>
                                                </div>

                                                <div class="add-to-cart-box mt-2">
                                                    <a href="cart.html"
                                                        class="btn btn-md bg-dark cart-button text-white w-100 btn-bg-color"><i
                                                            class="icon-copy bi bi-cart-plus-fill"></i>
                                                        Add
                                                        To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="row m-0">
                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-detail.html">
                                                    <img src="/front/images/product img place holder 1.png"
                                                        class="img-fluid blur-up lazyload" alt>
                                                </a>
                                                <ul class="product-option">
                                                    <li title="View">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#view">
                                                            <i class="ijaboIcon sx-1 dw dw-eye"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Compare">
                                                        <a href="compare.html">
                                                            <i class="icon-copy dw dw-exchange"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Wishlist">
                                                        <a href="wishlist.html" class="notifi-wishlist">
                                                            <i class="ijaboIcon sx-1 dw dw-heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-detail.html">
                                                    <h6 class="name">Arcu
                                                        consequat
                                                        integer
                                                        vulputate
                                                        sodales erat
                                                        varius et</h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">$11.19</span>
                                                    <del>19.05</del>
                                                </h5>

                                                <div class="product-rating mt-2">
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star no-rating-color"></i>
                                                        </li>
                                                    </ul>

                                                    <h6 class="theme-color">In
                                                        Stock</h6>
                                                </div>

                                                <div class="add-to-cart-box mt-2">
                                                    <a href="cart.html"
                                                        class="btn btn-md bg-dark cart-button text-white w-100 btn-bg-color"><i
                                                            class="icon-copy bi bi-cart-plus-fill"></i>
                                                        Add
                                                        To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-detail.html">
                                                    <img src="/front/images/product img place holder 1.png"
                                                        class="img-fluid blur-up lazyload" alt>
                                                </a>
                                                <ul class="product-option">
                                                    <li title="View">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#view">
                                                            <i class="ijaboIcon sx-1 dw dw-eye"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Compare">
                                                        <a href="compare.html">
                                                            <i class="icon-copy dw dw-exchange"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Wishlist">
                                                        <a href="wishlist.html" class="notifi-wishlist">
                                                            <i class="ijaboIcon sx-1 dw dw-heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-detail.html">
                                                    <h6 class="name">Nunc
                                                        in aliquam quam
                                                        urna ac tempor
                                                        inceptos
                                                        platea</h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">$116.69</span>
                                                    <del>124.76</del>
                                                </h5>

                                                <div class="product-rating mt-2">
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star no-rating-color"></i>
                                                        </li>
                                                    </ul>

                                                    <h6 class="theme-color">In
                                                        Stock</h6>
                                                </div>

                                                <div class="add-to-cart-box mt-2">
                                                    <a href="cart.html"
                                                        class="btn btn-md bg-dark cart-button text-white w-100 btn-bg-color"><i
                                                            class="icon-copy bi bi-cart-plus-fill"></i>
                                                        Add
                                                        To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="row m-0">
                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-detail.html">
                                                    <img src="/front/images/product img place holder 1.png"
                                                        class="img-fluid blur-up lazyload" alt>
                                                </a>
                                                <ul class="product-option">
                                                    <li title="View">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#view">
                                                            <i class="ijaboIcon sx-1 dw dw-eye"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Compare">
                                                        <a href="compare.html">
                                                            <i class="icon-copy dw dw-exchange"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Wishlist">
                                                        <a href="wishlist.html" class="notifi-wishlist">
                                                            <i class="ijaboIcon sx-1 dw dw-heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-detail.html">
                                                    <h6 class="name">Dictum
                                                        fames habitant
                                                        curabitur primis
                                                        turpis
                                                        odio laoreet
                                                        lobortis</h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">$77.11</span>
                                                    <del>86.75</del>
                                                </h5>

                                                <div class="product-rating mt-2">
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star no-rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star no-rating-color"></i>
                                                        </li>
                                                    </ul>

                                                    <h6 class="theme-color">In
                                                        Stock</h6>
                                                </div>

                                                <div class="add-to-cart-box mt-2">
                                                    <a href="cart.html"
                                                        class="btn btn-md bg-dark cart-button text-white w-100 btn-bg-color"><i
                                                            class="icon-copy bi bi-cart-plus-fill"></i>
                                                        Add
                                                        To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-detail.html">
                                                    <img src="/front/images/product img place holder 1.png"
                                                        class="img-fluid blur-up lazyload" alt>
                                                </a>
                                                <ul class="product-option">
                                                    <li title="View">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#view">
                                                            <i class="ijaboIcon sx-1 dw dw-eye"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Compare">
                                                        <a href="compare.html">
                                                            <i class="icon-copy dw dw-exchange"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Wishlist">
                                                        <a href="wishlist.html" class="notifi-wishlist">
                                                            <i class="ijaboIcon sx-1 dw dw-heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-detail.html">
                                                    <h6 class="name">Pellentesque
                                                        sagittis magnis
                                                        torquent potenti
                                                        dui facilisis
                                                    </h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">$22.69</span>
                                                    <del>28.56</del>
                                                </h5>

                                                <div class="product-rating mt-2">
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star no-rating-color"></i>
                                                        </li>
                                                    </ul>

                                                    <h6 class="theme-color">In
                                                        Stock</h6>
                                                </div>

                                                <div class="add-to-cart-box mt-2">
                                                    <a href="cart.html"
                                                        class="btn btn-md bg-dark cart-button text-white w-100 btn-bg-color"><i
                                                            class="icon-copy bi bi-cart-plus-fill"></i>
                                                        Add
                                                        To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="row m-0">
                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-detail.html">
                                                    <img src="/front/images/product img place holder 1.png"
                                                        class="img-fluid blur-up lazyload" alt>
                                                </a>
                                                <ul class="product-option">
                                                    <li title="View">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#view">
                                                            <i class="ijaboIcon sx-1 dw dw-eye"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Compare">
                                                        <a href="compare.html">
                                                            <i class="icon-copy dw dw-exchange"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Wishlist">
                                                        <a href="wishlist.html" class="notifi-wishlist">
                                                            <i class="ijaboIcon sx-1 dw dw-heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-detail.html">
                                                    <h6 class="name">Condimentum
                                                        magna sociis
                                                        lacinia quisque
                                                        porta
                                                        eros nulla
                                                        suspendisse
                                                        sollicitudin
                                                    </h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">$88.45</span>
                                                    <del>97.26</del>
                                                </h5>

                                                <div class="product-rating mt-2">
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star no-rating-color"></i>
                                                        </li>
                                                    </ul>

                                                    <h6 class="theme-color">In
                                                        Stock</h6>
                                                </div>

                                                <div class="add-to-cart-box mt-2">
                                                    <a href="cart.html"
                                                        class="btn btn-md bg-dark cart-button text-white w-100 btn-bg-color"><i
                                                            class="icon-copy bi bi-cart-plus-fill"></i>
                                                        Add
                                                        To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-detail.html">
                                                    <img src="/front/images/product img place holder 1.png"
                                                        class="img-fluid blur-up lazyload" alt>
                                                </a>
                                                <ul class="product-option">
                                                    <li title="View">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#view">
                                                            <i class="ijaboIcon sx-1 dw dw-eye"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Compare">
                                                        <a href="compare.html">
                                                            <i class="icon-copy dw dw-exchange"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Wishlist">
                                                        <a href="wishlist.html" class="notifi-wishlist">
                                                            <i class="ijaboIcon sx-1 dw dw-heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-detail.html">
                                                    <h6 class="name">Aliquet
                                                        vehicula
                                                        accumsan justo
                                                        rhoncus erat
                                                        venenatis varius
                                                    </h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">$16.69</span>
                                                    <del>28.56</del>
                                                </h5>

                                                <div class="product-rating mt-2">
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star no-rating-color"></i>
                                                        </li>
                                                    </ul>

                                                    <h6 class="theme-color">In
                                                        Stock</h6>
                                                </div>

                                                <div class="add-to-cart-box mt-2">
                                                    <a href="cart.html"
                                                        class="btn btn-md bg-dark cart-button text-white w-100 btn-bg-color"><i
                                                            class="icon-copy bi bi-cart-plus-fill"></i>
                                                        Add
                                                        To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="title">
                    <h2>Shop by Categories</h2>
                    <p>Condimentum magna sociis lacinia quisque porta
                        eros nulla suspendisse sollicitudin eu,
                        aliquet vehicula accumsan justo rhoncus erat
                        venenatis varius</p>
                </div>

                @if ( count(get_categories()) > 0 )
                    
               
                <div class="category-slider-2 product-wrapper no-arrow">
                    @foreach (get_categories() as $category)
                        
                    
                    <div>
                        <a href="javascript:void(0)" class="category-box">
                            <div>
                                <img src="/images/categories/{{ $category->category_image }}" class="blur-up lazyload" alt>
                                <h5>{{ $category->category_name }}</h5>
                            </div>
                        </a>
                    </div>

                    @endforeach
                </div>

                @endif

                <div class="title d-block">
                    <h2>Our Best Seller</h2>
                    <p>Fusce natoque scelerisque luctus arcu lobortis
                        ultricies ullamcorper ante dictumst, cum eros
                        vitae curabitur hendrerit habitant rhoncus id
                        tellus in</p>
                </div>

                <div class="product-border overflow-hidden wow fadeInUp">
                    <div class="product-box-slider no-arrow">
                        <div>
                            <div class="row m-0">
                                <div class="col-12 px-0">
                                    <div class="product-box">
                                        <div class="product-image">
                                            <a href="product-detail.html">
                                                <img src="/front/images/product img place holder 1.png"
                                                    class="img-fluid blur-up lazyload" alt>
                                            </a>
                                            <ul class="product-option">
                                                <li title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#view">
                                                        <i class="ijaboIcon sx-1 dw dw-eye"></i>
                                                    </a>
                                                </li>

                                                <li title="Compare">
                                                    <a href="compare.html">
                                                        <i class="icon-copy dw dw-exchange"></i>
                                                    </a>
                                                </li>

                                                <li title="Wishlist">
                                                    <a href="wishlist.html" class="notifi-wishlist">
                                                        <i class="ijaboIcon sx-1 dw dw-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-detail">
                                            <a href="product-detail.html">
                                                <h6 class="name h-100">Condimentum
                                                    magna sociis lacinia
                                                    quisque
                                                    porta eros
                                                    nulla</h6>
                                            </a>

                                            <h5 class="sold text-content">
                                                <span class="theme-color price">$33.19</span>
                                                <del>46.66</del>
                                            </h5>

                                            <div class="product-rating mt-2">
                                                <ul class="rating">
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star no-rating-color"></i>
                                                    </li>
                                                </ul>

                                                <h6 class="theme-color">In
                                                    Stock</h6>
                                            </div>

                                            <div class="add-to-cart-box mt-2">
                                                <a href="cart.html"
                                                    class="btn btn-md bg-dark cart-button text-white w-100 btn-bg-color"><i
                                                        class="icon-copy bi bi-cart-plus-fill"></i>
                                                    Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="row m-0">
                                <div class="col-12 px-0">
                                    <div class="product-box">
                                        <div class="product-image">
                                            <a href="product-detail.html">
                                                <img src="/front/images/product img place holder 1.png"
                                                    class="img-fluid blur-up lazyload" alt>
                                            </a>
                                            <ul class="product-option">
                                                <li title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#view">
                                                        <i class="ijaboIcon sx-1 dw dw-eye"></i>
                                                    </a>
                                                </li>

                                                <li title="Compare">
                                                    <a href="compare.html">
                                                        <i class="icon-copy dw dw-exchange"></i>
                                                    </a>
                                                </li>

                                                <li title="Wishlist">
                                                    <a href="wishlist.html" class="notifi-wishlist">
                                                        <i class="ijaboIcon sx-1 dw dw-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-detail">
                                            <a href="product-detail.html">
                                                <h6 class="name h-100">Fusce
                                                    natoque scelerisque
                                                    luctus arcu
                                                    lobortis ultricies
                                                    ullamcorper</h6>
                                            </a>

                                            <h5 class="sold text-content">
                                                <span class="theme-color price">$26.69</span>
                                                <del>28.56</del>
                                            </h5>

                                            <div class="product-rating mt-2">
                                                <ul class="rating">
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star no-rating-color"></i>
                                                    </li>
                                                </ul>

                                                <h6 class="theme-color">In
                                                    Stock</h6>
                                            </div>

                                            <div class="add-to-cart-box mt-2">
                                                <a href="cart.html"
                                                    class="btn btn-md bg-dark cart-button text-white w-100 btn-bg-color"><i
                                                        class="icon-copy bi bi-cart-plus-fill"></i>
                                                    Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="row m-0">
                                <div class="col-12 px-0">
                                    <div class="product-box">
                                        <div class="product-image">
                                            <a href="product-detail.html">
                                                <img src="/front/images/product img place holder 1.png"
                                                    class="img-fluid blur-up lazyload" alt>
                                            </a>
                                            <ul class="product-option">
                                                <li title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#view">
                                                        <i class="ijaboIcon sx-1 dw dw-eye"></i>
                                                    </a>
                                                </li>

                                                <li title="Compare">
                                                    <a href="compare.html">
                                                        <i class="icon-copy dw dw-exchange"></i>
                                                    </a>
                                                </li>

                                                <li title="Wishlist">
                                                    <a href="wishlist.html" class="notifi-wishlist">
                                                        <i class="ijaboIcon sx-1 dw dw-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-detail">
                                            <a href="product-detail.html">
                                                <h6 class="name h-100">Inceptos
                                                    urna maecenas tempus
                                                    praesent tempor
                                                    porta tellus dui
                                                    fermentum</h6>
                                            </a>

                                            <h5 class="sold text-content">
                                                <span class="theme-color price">$116.69</span>
                                                <del>228.56</del>
                                            </h5>

                                            <div class="product-rating mt-2">
                                                <ul class="rating">
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star no-rating-color"></i>
                                                    </li>
                                                </ul>

                                                <h6 class="theme-color">In
                                                    Stock</h6>
                                            </div>

                                            <div class="add-to-cart-box mt-2">
                                                <a href="cart.html"
                                                    class="btn btn-md bg-dark cart-button text-white w-100 btn-bg-color"><i
                                                        class="icon-copy bi bi-cart-plus-fill"></i>
                                                    Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="row m-0">
                                <div class="col-12 px-0">
                                    <div class="product-box">
                                        <div class="product-image">
                                            <a href="product-detail.html">
                                                <img src="/front/images/product img place holder 1.png"
                                                    class="img-fluid blur-up lazyload" alt>
                                            </a>
                                            <ul class="product-option">
                                                <li title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#view">
                                                        <i class="ijaboIcon sx-1 dw dw-eye"></i>
                                                    </a>
                                                </li>

                                                <li title="Compare">
                                                    <a href="compare.html">
                                                        <i class="icon-copy dw dw-exchange"></i>
                                                    </a>
                                                </li>

                                                <li title="Wishlist">
                                                    <a href="wishlist.html" class="notifi-wishlist">
                                                        <i class="ijaboIcon sx-1 dw dw-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-detail">
                                            <a href="product-detail.html">
                                                <h6 class="name h-100">Nullam
                                                    tincidunt vitae per
                                                    malesuada dapibus
                                                    hendrerit odio.</h6>
                                            </a>

                                            <h5 class="sold text-content">
                                                <span class="theme-color price">$76.79</span>
                                                <del>87.56</del>
                                            </h5>

                                            <div class="product-rating mt-2">
                                                <ul class="rating">
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star no-rating-color"></i>
                                                    </li>
                                                </ul>

                                                <h6 class="theme-color">In
                                                    Stock</h6>
                                            </div>

                                            <div class="add-to-cart-box mt-2">
                                                <a href="cart.html"
                                                    class="btn btn-md bg-dark cart-button text-white w-100 btn-bg-color"><i
                                                        class="icon-copy bi bi-cart-plus-fill"></i>
                                                    Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="row m-0">
                                <div class="col-12 px-0">
                                    <div class="product-box">
                                        <div class="product-image">
                                            <a href="product-detail.html">
                                                <img src="/front/images/product img place holder 1.png"
                                                    class="img-fluid blur-up lazyload" alt>
                                            </a>
                                            <ul class="product-option">
                                                <li title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#view">
                                                        <i class="ijaboIcon sx-1 dw dw-eye"></i>
                                                    </a>
                                                </li>

                                                <li title="Compare">
                                                    <a href="compare.html">
                                                        <i class="icon-copy dw dw-exchange"></i>
                                                    </a>
                                                </li>

                                                <li title="Wishlist">
                                                    <a href="wishlist.html" class="notifi-wishlist">
                                                        <i class="ijaboIcon sx-1 dw dw-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-detail">
                                            <a href="product-detail.html">
                                                <h6 class="name h-100">Nibh
                                                    pretium fringilla
                                                    vulputate gravida
                                                    dictumst mi</h6>
                                            </a>

                                            <h5 class="sold text-content">
                                                <span class="theme-color price">$36.69</span>
                                                <del>68.56</del>
                                            </h5>

                                            <div class="product-rating mt-2">
                                                <ul class="rating">
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star no-rating-color"></i>
                                                    </li>
                                                </ul>

                                                <h6 class="theme-color">In
                                                    Stock</h6>
                                            </div>

                                            <div class="add-to-cart-box mt-2">
                                                <a href="cart.html"
                                                    class="btn btn-md bg-dark cart-button text-white w-100 btn-bg-color"><i
                                                        class="icon-copy bi bi-cart-plus-fill"></i>
                                                    Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="row m-0">
                                <div class="col-12 px-0">
                                    <div class="product-box">
                                        <div class="product-image">
                                            <a href="product-detail.html">
                                                <img src="/front/images/product img place holder 1.png"
                                                    class="img-fluid blur-up lazyload" alt>
                                            </a>
                                            <ul class="product-option">
                                                <li title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#view">
                                                        <i class="ijaboIcon sx-1 dw dw-eye"></i>
                                                    </a>
                                                </li>

                                                <li title="Compare">
                                                    <a href="compare.html">
                                                        <i class="icon-copy dw dw-exchange"></i>
                                                    </a>
                                                </li>

                                                <li title="Wishlist">
                                                    <a href="wishlist.html" class="notifi-wishlist">
                                                        <i class="ijaboIcon sx-1 dw dw-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-detail">
                                            <a href="product-detail.html">
                                                <h6 class="name h-100">Quam
                                                    mus habitant congue
                                                    rhoncus tristique
                                                </h6>
                                            </a>

                                            <h5 class="sold text-content">
                                                <span class="theme-color price">$26.69</span>
                                                <del>28.56</del>
                                            </h5>

                                            <div class="product-rating mt-2">
                                                <ul class="rating">
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star no-rating-color"></i>
                                                    </li>
                                                </ul>

                                                <h6 class="theme-color">In
                                                    Stock</h6>
                                            </div>

                                            <div class="add-to-cart-box mt-2">
                                                <a href="cart.html"
                                                    class="btn btn-md bg-dark cart-button text-white w-100 btn-bg-color"><i
                                                        class="icon-copy bi bi-cart-plus-fill"></i>
                                                    Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-t-space">
                    <div class="banner-contain hover-effect">
                        <img src="/front/images/b.png" class="bg-img blur-up lazyload" alt>
                        <div class="banner-details p-center banner-b-space w-100 text-center">
                            <div>
                                <h6 class="ls-expanded theme-color mb-sm-3 mb-1">OUR
                                    BEST</h6>
                                <h2 class="banner-title">ELECTRONICS</h2>
                                <h5 class="lh-sm mx-auto mt-1 text-content">SALE
                                    8% OFF</h5>
                                <button onclick="location.href = 'javascript:void(0)';"
                                    class="btn btn-animation btn-sm mx-auto mt-sm-3 mt-2">Shop
                                    Now <i class="fa fa-arrow-right icon"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="title section-t-space">
                    <h2>Latest on Blog</h2>
                    <p>Quam mus habitant congue rhoncus tristique, neque
                        cum magnis eros pretium per, inceptos eget
                        integer netus. Ante vehicula euismod etiam at
                        congue proin aenean mattis sed sociis fames
                        mauris arcu enim</p>
                </div>

                <div class="slider-3-blog ratio_65 no-arrow product-wrapper mb-4">
                    <div>
                        <div class="blog-box">
                            <div class="blog-box-image">
                                <a href="blog-detail.html" class="blog-image">
                                    <img src="/front/images/blog-image-1.png" class="bg-img blur-up lazyload" alt>
                                </a>
                            </div>

                            <a href="blog-detail.html" class="blog-detail">
                                <h6>13 Jun, 2024</h6>
                                <h5>Proin primis et phasellus nisi
                                    ultrices maecenas enim potenti
                                    vestibulum
                                    praesent vulputate</h5>
                            </a>
                        </div>
                    </div>

                    <div>
                        <div class="blog-box">
                            <div class="blog-box-image">
                                <a href="blog-detail.html" class="blog-image">
                                    <img src="/front/images/blog-image-1.png" class="bg-img blur-up lazyload" alt>
                                </a>
                            </div>

                            <a href="blog-detail.html" class="blog-detail">
                                <h6>10 March, 2024</h6>
                                <h5>Blandit consequat condimentum aenean
                                    mattis himenaeos purus venenatis
                                    auctor
                                    tellus</h5>
                            </a>
                        </div>
                    </div>

                    <div>
                        <div class="blog-box">
                            <div class="blog-box-image">
                                <a href="blog-detail.html" class="blog-image">
                                    <img src="/front/images/blog-image-1.png" class="bg-img blur-up lazyload" alt>
                                </a>
                            </div>

                            <a href="blog-detail.html" class="blog-detail">
                                <h6>10 April, 2024</h6>
                                <h5>Montes tellus turpis integer semper
                                    leo per lacinia quam euismod
                                    senectus</h5>
                            </a>
                        </div>
                    </div>

                    <div>
                        <div class="blog-box">
                            <div class="blog-box-image">
                                <a href="blog-detail.html" class="blog-image">
                                    <img src="/front/images/blog-image-1.png" class="bg-img blur-up lazyload" alt>
                                </a>
                            </div>

                            <a href="blog-detail.html" class="blog-detail">
                                <h6>20 March, 2024</h6>
                                <h5>ullamcorper ligula erat platea fusce
                                    pharetra proin volutpat a massa
                                    ac</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->

@endsection