@extends('layouts.website')
@section('title', 'All Books| Aqsa Publications')



@section('content')

    <div class="page-header border-bottom mb-8">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center py-4">
                <h1 class="page-title font-size-3 font-weight-medium m-0 text-lh-lg">Shop</h1>

            </div>
        </div>
    </div>
    <div class="site-content space-bottom-3" id="content">
        <div class="container">
            <div class="row">
                <div id="secondary" class="sidebar widget-area order-1 col-md-3" role="complementary">
                    @include('website.books.sideBar')
                </div>
                <div id="primary" class="content-area order-2 col-md-9">
                    <div
                        class="shop-control-bar d-lg-flex justify-content-between align-items-center mb-5 text-center text-md-left">
                        <div class="shop-control-bar__left mb-4 m-lg-0">
                            <p class="woocommerce-result-count m-0">Showing 1–12 of 126 results</p>
                        </div>
                        <div class="shop-control-bar__right d-md-flex align-items-center">
                            <form class="woocommerce-ordering mb-4 m-md-0" method="get">

                                <div class="dropdown bootstrap-select js-select dropdown-select orderby">
                                    <select class="js-select selectpicker dropdown-select orderby" name="orderby"
                                        data-style="border-bottom shadow-none outline-none py-2" tabindex="-98">
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="default" selected="selected">Default sorting</option>
                                        <option value="date">Sort by newness</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                    {{-- <button type="button"
                                        class="btn dropdown-toggle border-bottom shadow-none outline-none py-2"
                                        data-toggle="dropdown" role="button" title="Default sorting" aria-expanded="false">
                                        <div class="filter-option">
                                            <div class="filter-option-inner">
                                                <div class="filter-option-inner-inner">Default sorting</div>
                                            </div>
                                        </div>
                                    </button> --}}
                                    <div class="dropdown-menu" role="combobox" x-placement="bottom-start"
                                        style="max-height: 184.609px; overflow: hidden; min-height: 168px; min-width: 266px; position: absolute; transform: translate3d(0px, 42px, 0px); top: 0px; left: 0px; will-change: transform;">
                                        <div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"
                                            style="max-height: 126.609px; overflow-y: auto; min-height: 110px;">
                                            <ul class="dropdown-menu inner show">
                                                <li><a role="option" class="dropdown-item" aria-disabled="false"
                                                        tabindex="0" aria-selected="false"><span
                                                            class=" bs-ok-default check-mark"></span><span
                                                            class="text">Sort by popularity</span></a></li>
                                                <li class="selected active"><a role="option"
                                                        class="dropdown-item selected active" aria-disabled="false"
                                                        tabindex="0" aria-selected="true"><span
                                                            class=" bs-ok-default check-mark"></span><span
                                                            class="text">Default sorting</span></a></li>
                                                <li><a role="option" class="dropdown-item" aria-disabled="false"
                                                        tabindex="0" aria-selected="false"><span
                                                            class=" bs-ok-default check-mark"></span><span
                                                            class="text">Sort by newness</span></a></li>
                                                <li><a role="option" class="dropdown-item" aria-disabled="false"
                                                        tabindex="0" aria-selected="false"><span
                                                            class=" bs-ok-default check-mark"></span><span
                                                            class="text">Sort by price: low to high</span></a></li>
                                                <li><a role="option" class="dropdown-item" aria-disabled="false"
                                                        tabindex="0" aria-selected="false"><span
                                                            class=" bs-ok-default check-mark"></span><span
                                                            class="text">Sort by price: high to low</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </form>
                            <form class="number-of-items ml-md-4 mb-4 m-md-0 d-none d-xl-block" method="get">

                                <div class="dropdown bootstrap-select js-select dropdown-select orderby fit-width"><select
                                        class="js-select selectpicker dropdown-select orderby" name="orderby"
                                        data-style="border-bottom shadow-none outline-none py-2" data-width="fit"
                                        tabindex="-98">
                                        <option value="show10">Show 10</option>
                                        <option value="show15">Show 15</option>
                                        <option value="show20" selected="selected">Show 20</option>
                                        <option value="show25">Show 25</option>
                                        <option value="show30">Show 30</option>
                                    </select>
                                    {{-- <button type="button"
                                        class="btn dropdown-toggle border-bottom shadow-none outline-none py-2"
                                        data-toggle="dropdown" role="button" title="Show 20">
                                        <div class="filter-option">
                                            <div class="filter-option-inner">
                                                <div class="filter-option-inner-inner">Show 20</div>
                                            </div>
                                        </div>
                                    </button> --}}
                                    <div class="dropdown-menu " role="combobox">
                                        <div class="inner show" role="listbox" aria-expanded="false" tabindex="-1">
                                            <ul class="dropdown-menu inner show"></ul>
                                        </div>
                                    </div>
                                </div>

                            </form>
                            <ul class="nav nav-tab ml-lg-4 justify-content-center justify-content-md-start ml-md-auto"
                                id="pills-tab" role="tablist">
                                <li class="nav-item border">
                                    <a class="nav-link p-0 height-38 width-38 justify-content-center d-flex align-items-center active"
                                        id="pills-one-example1-tab" data-toggle="pill" href="#pills-one-example1"
                                        role="tab" aria-controls="pills-one-example1" aria-selected="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="17px" height="17px">
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                                                d="M-0.000,0.000 L3.000,0.000 L3.000,3.000 L-0.000,3.000 L-0.000,0.000 Z">
                                            </path>
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                                                d="M7.000,0.000 L10.000,0.000 L10.000,3.000 L7.000,3.000 L7.000,0.000 Z">
                                            </path>
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                                                d="M14.000,0.000 L17.000,0.000 L17.000,3.000 L14.000,3.000 L14.000,0.000 Z">
                                            </path>
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                                                d="M-0.000,7.000 L3.000,7.000 L3.000,10.000 L-0.000,10.000 L-0.000,7.000 Z">
                                            </path>
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                                                d="M7.000,7.000 L10.000,7.000 L10.000,10.000 L7.000,10.000 L7.000,7.000 Z">
                                            </path>
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                                                d="M14.000,7.000 L17.000,7.000 L17.000,10.000 L14.000,10.000 L14.000,7.000 Z">
                                            </path>
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                                                d="M-0.000,14.000 L3.000,14.000 L3.000,17.000 L-0.000,17.000 L-0.000,14.000 Z">
                                            </path>
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                                                d="M7.000,14.000 L10.000,14.000 L10.000,17.000 L7.000,17.000 L7.000,14.000 Z">
                                            </path>
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                                                d="M14.000,14.000 L17.000,14.000 L17.000,17.000 L14.000,17.000 L14.000,14.000 Z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li class="nav-item border">
                                    <a class="nav-link p-0 height-38 width-38 justify-content-center d-flex align-items-center"
                                        id="pills-two-example1-tab" data-toggle="pill" href="#pills-two-example1"
                                        role="tab" aria-controls="pills-two-example1" aria-selected="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="23px" height="17px">
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                                                d="M-0.000,0.000 L3.000,0.000 L3.000,3.000 L-0.000,3.000 L-0.000,0.000 Z">
                                            </path>
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                                                d="M7.000,0.000 L23.000,0.000 L23.000,3.000 L7.000,3.000 L7.000,0.000 Z">
                                            </path>
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                                                d="M-0.000,7.000 L3.000,7.000 L3.000,10.000 L-0.000,10.000 L-0.000,7.000 Z">
                                            </path>
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                                                d="M7.000,7.000 L23.000,7.000 L23.000,10.000 L7.000,10.000 L7.000,7.000 Z">
                                            </path>
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                                                d="M-0.000,14.000 L3.000,14.000 L3.000,17.000 L-0.000,17.000 L-0.000,14.000 Z">
                                            </path>
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                                                d="M7.000,14.000 L23.000,14.000 L23.000,17.000 L7.000,17.000 L7.000,14.000 Z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-one-example1" role="tabpanel"
                            aria-labelledby="pills-one-example1-tab">

                            <ul
                                class="products list-unstyled row no-gutters row-cols-2 row-cols-lg-3 row-cols-wd-4 border-top border-left mb-6">
                                @foreach ($books as $book)
                                    <li class="product col" >
                                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                            <div
                                                class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                                <div class="woocommerce-loop-product__thumbnail">
                                                    <a href="{{ url('book-detail') }}/{{ $book->id }}" class="d-block"><img
                                                            src="{{ url('storage') }}/{{ $book->thumbnail }}"
                                                            class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                            alt="image-description"></a>
                                                </div>
                                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                            href="../shop/single-product-v1.html">Paperback</a></div>
                                                    <h2
                                                        class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                        <a href="#">{{ $book->name }}</a>
                                                    </h2>
                                                    <div class="font-size-2  mb-1 text-truncate"><a
                                                            href="../others/authors-single.html" class="text-gray-700">Jay
                                                            Shetty</a></div>
                                                    <div
                                                        class="price d-flex align-items-center font-weight-medium font-size-3">
                                                        <span class="woocommerce-Price-amount amount"><span
                                                                class="woocommerce-Price-currencySymbol">RS:</span>{{ $book->prices->count() ? $book->prices[0]->net_price : '' }}</span>
                                                    </div>
                                                </div>
                                                <div class="product__hover d-flex align-items-center">
                                                    <input type="hidden" value="{{ $book->id }}" id="book_id">

                                                    <a href="#"
                                                        class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                        <i class="flaticon-switch"></i>
                                                    </a>
                                                    <a href="#"
                                                        class="h-p-bg btn btn-outline-primary border-0">
                                                        <i class="flaticon-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>

                        </div>
                        <div class="tab-pane fade" id="pills-two-example1" role="tabpanel"
                            aria-labelledby="pills-two-example1-tab">

                            <ul class="products list-unstyled mb-6">
                                <li class="product product__list">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link row position-relative">
                                            <div class="col-md-auto woocommerce-loop-product__thumbnail mb-3 mb-md-0">
                                                <a href="../shop/single-product-v1.html" class="d-block"><img
                                                        src="../../assets/img/150x226/img1.jpg"
                                                        class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                        alt="image-description"></a>
                                            </div>
                                            <div
                                                class="col-md woocommerce-loop-product__body product__body pt-3 bg-white mb-3 mb-md-0">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v1.html">Paperback</a></div>
                                                <h2
                                                    class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v1.html" tabindex="0">The Overdue
                                                        Life of Amy Byler</a>
                                                </h2>
                                                <div class="font-size-2  mb-2 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700">Jay
                                                        Shetty</a></div>
                                                <p class="font-size-2 mb-2 crop-text-2">After disappearing for three years,
                                                    Artemis Fowl has returned to a life different from the one he left. And
                                                    spends his days teaching his twin siblings the</p>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="col-md-auto d-flex align-items-center">
                                                <button type="button"
                                                    class="text-uppercase text-dark h-dark font-weight-medium mr-4"
                                                    data-toggle="tooltip" data-placement="right" title=""
                                                    data-original-title="ADD TO CART">
                                                    <span class="product__add-to-cart" id="addToCart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </button>
                                                <a href="#  "
                                                    class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="#"
                                                    class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>

                    <nav aria-label="Page navigation example">
                        <ul
                            class="pagination pagination__custom justify-content-md-center flex-nowrap flex-md-wrap overflow-auto overflow-md-visble">
                            <li class="flex-shrink-0 flex-md-shrink-1 page-item"><a class="page-link"
                                    href="#">Previous</a></li>
                            <li class="flex-shrink-0 flex-md-shrink-1 page-item"><a class="page-link"
                                    href="#">1</a></li>
                            <li class="flex-shrink-0 flex-md-shrink-1 page-item"><a class="page-link"
                                    href="#">2</a></li>
                            <li class="flex-shrink-0 flex-md-shrink-1 page-item active" aria-current="page"><a
                                    class="page-link" href="#">3</a></li>
                            <li class="flex-shrink-0 flex-md-shrink-1 page-item"><a class="page-link"
                                    href="#">4</a></li>
                            <li class="flex-shrink-0 flex-md-shrink-1 page-item"><a class="page-link"
                                    href="#">5</a></li>
                            <li class="flex-shrink-0 flex-md-shrink-1 page-item"><a class="page-link"
                                    href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>




    @include('website.books.js.index');
@endsection
