@extends('layouts.main')
@section('title', 'Collection')

@section('body')
<div id="content-wrapper-parent">
    <div id="content-wrapper">
        <!-- Content -->
        <div id="content" class="clearfix">
            <div id="breadcrumb" class="breadcrumb">
                <div itemprop="breadcrumb" class="container">
                    <div class="row">
                        <div class="col-md-24">
                            <a href="{{ route('home') }}" class="homepage-link" title="Back to the frontpage">Home</a>
                            <span>/</span>
                            <span class="page-title">Collection Left Sidebar</span>
                        </div>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="container">
                    <div class="row">
                        <div id="collection-content">
                            <div id="page-header">
                                <h1 id="page-title">Collection Left Sidebar</h1>
                            </div>
                            <div class="collection-warper col-sm-24 clearfix">
                                <div class="collection-panner">
                                    <img src="{{ url('resources') }}/{{ url('resources') }}/assets/images/collection_banner.jpg" class="img-responsive" alt="">
                                </div>
                            </div>
                            <div class="collection-main-content">
                                <div id="prodcoll" class="col-sm-6 col-md-6 sidebar hidden-xs">
                                    <div class="group_sidebar">
                                        <div class="sb-wrapper">
                                            <!-- filter tags group -->
                                            <div class="filter-tag-group">
                                                <h6 class="sb-title">Filter</h6>
                                                <!-- tags groupd 1 -->
                                                <div class="tag-group" id="coll-filter-1">
                                                    <p class="title">
                                                        Size
                                                    </p>
                                                    <ul>
                                                        <li><a title="Narrow selection to products matching tag S"
                                                                href="#"><span class="fe-checkbox"></span> S</a>
                                                        </li>
                                                        <li><a title="Narrow selection to products matching tag M"
                                                                href="#"><span class="fe-checkbox"></span> M</a>
                                                        </li>
                                                        <li><a title="Narrow selection to products matching tag L"
                                                                href="#"><span class="fe-checkbox"></span> L</a>
                                                        </li>
                                                        <li><a title="Narrow selection to products matching tag XL"
                                                                href="#"><span class="fe-checkbox"></span> XL</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- tags groupd 2 -->
                                                <div class="tag-group" id="coll-filter-2">
                                                    <p class="title">
                                                        Color
                                                    </p>
                                                    <ul>
                                                        <li class="swatch-tag"><span
                                                                style="background-color: red; background-image: url({{ url('resources') }}/assets/images/red.png);"
                                                                class="btooltip" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Red"><a
                                                                    title="Narrow selection to products matching tag Red"
                                                                    href="#"></a></span></li>
                                                        <li class="swatch-tag"><span
                                                                style="background-color: green; background-image: url({{ url('resources') }}/assets/images/green.png);"
                                                                class="btooltip" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Green"><a
                                                                    title="Narrow selection to products matching tag Green"
                                                                    href="#"></a></span></li>
                                                        <li class="swatch-tag"><span
                                                                style="background-color: black; background-image: url({{ url('resources') }}/assets/images/black.png);"
                                                                class="btooltip" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Black"><a
                                                                    title="Narrow selection to products matching tag Black"
                                                                    href="#"></a></span></li>
                                                        <li class="swatch-tag"><span
                                                                style="background-color: gray; background-image: url({{ url('resources') }}/assets/images/gray.png);"
                                                                class="btooltip" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Gray"><a
                                                                    title="Narrow selection to products matching tag Gray"
                                                                    href="#"></a></span></li>
                                                        <li class="swatch-tag"><span
                                                                style="background-color: white; background-image: url({{ url('resources') }}/assets/images/white.png);"
                                                                class="btooltip" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="White"><a
                                                                    title="Narrow selection to products matching tag White"
                                                                    href="#"></a></span></li>
                                                    </ul>
                                                </div>
                                                <!-- tags groupd 3 -->
                                                <div class="tag-group" id="coll-filter-3">
                                                    <p class="title">
                                                        Price
                                                    </p>
                                                    <ul>
                                                        <li><a title="Narrow selection to products matching tag Under $100"
                                                                href="#"><span class="fe-checkbox"></span> Under
                                                                $100</a></li>
                                                        <li><a title="Narrow selection to products matching tag $100 - $200"
                                                                href="#"><span class="fe-checkbox"></span> $100 -
                                                                $200</a></li>
                                                        <li><a title="Narrow selection to products matching tag Above $200"
                                                                href="#"><span class="fe-checkbox"></span> Above
                                                                $200</a></li>
                                                    </ul>
                                                </div>
                                                <!-- tags groupd 3 -->
                                            </div>
                                        </div>
                                        <div class="home-collection-wrapper sb-wrapper clearfix">
                                            <h6 class="sb-title">Product Categories</h6>
                                            <ul class="list-unstyled sb-content list-styled">
                                                <li>
                                                    <a href="collection.html"><span><i class="fa fa-circle"></i>
                                                            Bracelets</span><span class="collection-count">
                                                            (8)</span></a>
                                                </li>
                                                <li>
                                                    <a href="collection.html"><span><i class="fa fa-circle"></i>
                                                            Earrings</span><span class="collection-count">
                                                            (8)</span></a>
                                                </li>
                                                <li>
                                                    <a href="collection.html"><span><i class="fa fa-circle"></i>
                                                            Necklaces</span><span class="collection-count">
                                                            (8)</span></a>
                                                </li>
                                                <li>
                                                    <a href="collection.html"><span><i class="fa fa-circle"></i>
                                                            Rings</span><span class="collection-count">
                                                            (8)</span></a>
                                                </li>
                                                <li>
                                                    <a href="collection-left.html"><span><i
                                                                class="fa fa-circle"></i> Sample Collection - Left
                                                            Slidebar</span><span class="collection-count">
                                                            (9)</span></a>
                                                </li>
                                                <li>
                                                    <a href="collection-right.html"><span><i
                                                                class="fa fa-circle"></i> Sample Collection - Right
                                                            Slidebar</span><span class="collection-count">
                                                            (7)</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="deal-product-wrapper sb-wrapper clearfix">
                                            <div class="group_deal_products">
                                                <div class="">
                                                    <div class="home_deal_fp">
                                                        <h6 class="sb-title">Specials</h6>
                                                        <div class="home_deal_fp_wrapper sb-content">
                                                            <div id="home_deal_fp">
                                                                <div class="element full_width fadeInUp animated"
                                                                    data-animate="fadeInUp" data-delay="0">
                                                                    <form action="#" method="post">
                                                                        <ul
                                                                            class="row-container list-unstyled clearfix">
                                                                            <li class="row-left">
                                                                                <a href="product.html"
                                                                                    class="container_item">
                                                                                    <img src="{{ url('resources') }}/assets/images/1_small.jpg"
                                                                                        class="img-responsive"
                                                                                        alt="Curabitur cursus dignis">
                                                                                </a>
                                                                            </li>
                                                                            <li
                                                                                class="row-right parent-fly animMix">
                                                                                <a class="title-5"
                                                                                    href="product.html">Curabitur
                                                                                    cursus dignis</a>
                                                                                <div class="product-price">
                                                                                    <span
                                                                                        class="price_sale">$259.00</span>
                                                                                    <span class="dash">/</span>
                                                                                    <del class="price_compare">
                                                                                        $300.00</del>
                                                                                </div>
                                                                                <div class="effect-ajax-cart">
                                                                                    <input name="quantity" value="1"
                                                                                        type="hidden">
                                                                                    <button class="select-option"
                                                                                        type="button"
                                                                                        onclick="window.location.href='product.html'">Select
                                                                                        Option</button>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </form>
                                                                </div>
                                                                <div class="element full_width fadeInUp animated"
                                                                    data-animate="fadeInUp" data-delay="200">
                                                                    <form action="#" method="post">
                                                                        <ul
                                                                            class="row-container list-unstyled clearfix">
                                                                            <li class="row-left">
                                                                                <a href="product.html"
                                                                                    class="container_item">
                                                                                    <img src="{{ url('resources') }}/assets/images/2_119a31f2-2054-4483-93a3-841310e6bdfb_small.jpg"
                                                                                        class="img-responsive"
                                                                                        alt="Curabitur cursus dignis">
                                                                                </a>
                                                                            </li>
                                                                            <li
                                                                                class="row-right parent-fly animMix">
                                                                                <a class="title-5"
                                                                                    href="product.html">Curabitur
                                                                                    cursus dignis</a>
                                                                                <div class="product-price">
                                                                                    <span class="price">
                                                                                        $200.00 </span>
                                                                                </div>

                                                                                <div class="effect-ajax-cart">
                                                                                    <input name="quantity" value="1"
                                                                                        type="hidden">
                                                                                    <button class="add-to-cart"
                                                                                        type="submit" name="add">Add
                                                                                        to Cart</button>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </form>
                                                                </div>
                                                                <div class="element full_width fadeInUp animated"
                                                                    data-animate="fadeInUp" data-delay="400">
                                                                    <form action="#" method="post">
                                                                        <ul
                                                                            class="row-container list-unstyled clearfix">
                                                                            <li class="row-left">
                                                                                <a href="product.html"
                                                                                    class="container_item">
                                                                                    <img src="{{ url('resources') }}/assets/images/6_03a522d6-f36a-4f59-a815-bbade4d87a6e_small.jpg"
                                                                                        class="img-responsive"
                                                                                        alt="Donec aliquam ante non">
                                                                                </a>
                                                                            </li>
                                                                            <li
                                                                                class="row-right parent-fly animMix">
                                                                                <a class="title-5"
                                                                                    href="product.html">Donec
                                                                                    aliquam ante non</a>
                                                                                <div class="product-price">
                                                                                    <span
                                                                                        class="price_sale">$250.00</span>
                                                                                    <span class="dash">/</span>
                                                                                    <del class="price_compare">
                                                                                        $300.00</del>
                                                                                </div>
                                                                                <div class="effect-ajax-cart">
                                                                                    <input name="quantity" value="1"
                                                                                        type="hidden">
                                                                                    <button class="select-option"
                                                                                        type="button"
                                                                                        onclick="window.location.href='product.html'">Select
                                                                                        Option</button>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </form>
                                                                </div>
                                                                <div class="element full_width fadeInUp animated"
                                                                    data-animate="fadeInUp" data-delay="600">
                                                                    <form action="#" method="post">
                                                                        <ul
                                                                            class="row-container list-unstyled clearfix">
                                                                            <li class="row-left">
                                                                                <a href="product.html"
                                                                                    class="container_item">
                                                                                    <img src="{{ url('resources') }}/assets/images/4_0fe2529b-f7ae-4ed5-a8ff-4fae623757f9_small.jpg"
                                                                                        class="img-responsive"
                                                                                        alt="Donec condime fermentum">
                                                                                </a>
                                                                            </li>
                                                                            <li
                                                                                class="row-right parent-fly animMix">
                                                                                <a class="title-5"
                                                                                    href="product.html">Donec
                                                                                    condime fermentum</a>
                                                                                <div class="product-price">
                                                                                    <span class="price">
                                                                                        $200.00 </span>
                                                                                </div>
                                                                                <div class="effect-ajax-cart">
                                                                                    <input name="quantity" value="1"
                                                                                        type="hidden">
                                                                                    <button class="select-option"
                                                                                        type="button"
                                                                                        onclick="window.location.href='product.html'">Select
                                                                                        Option</button>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sb-wrapper">
                                            <h6 class="sb-title">Welcome</h6>
                                            <ul class="list-unstyled sb-content textwidget list-styled">
                                                <li>
                                                    <p>
                                                        Porro quisquam est, qui dolorem ipsum sitet dolor sit amet,
                                                        consectetur, adipisci velit, sed quia non numquam eius modi
                                                        tempora labore et dolore eut aliquam quaerat
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="sb-wrapper left-sample-block">
                                            <h6 class="sb-title">Product Vendors</h6>
                                            <ul class="list-unstyled sb-content list-styled">
                                                <li>
                                                    <i class="fa fa-circle"></i><a href="#" title="Vendor 1">Vendor
                                                        1</a>
                                                </li>
                                                <li>
                                                    <i class="fa fa-circle"></i><a href="#" title="Vendor 2">Vendor
                                                        2</a>
                                                </li>
                                                <li>
                                                    <i class="fa fa-circle"></i><a href="#" title="Vendor 3">Vendor
                                                        3</a>
                                                </li>
                                                <li>
                                                    <i class="fa fa-circle"></i><a href="#" title="Vendor 4">Vendor
                                                        4</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="sb-wrapper left-sample-block">
                                            <h6 class="sb-title">Product Types</h6>
                                            <ul class="list-unstyled sb-content list-styled">
                                                <li>
                                                    <i class="fa fa-circle"></i><a href="#"
                                                        title="Dressing">Dressing</a>
                                                </li>
                                                <li>
                                                    <i class="fa fa-circle"></i><a href="#"
                                                        title="Hoodies Wear">Hoodies Wear</a>
                                                </li>
                                                <li>
                                                    <i class="fa fa-circle"></i><a href="#"
                                                        title="Sweaters Wear">Sweaters Wear</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="sb-item slidebar-banner">
                                            <h6 class="sb-title">Promotion</h6>
                                            <div class="">
                                                <img src="{{ url('resources') }}/assets/images/blog-slidebar-banner.jpg" alt="">
                                            </div>
                                        </div>
                                        <!--End sb-item-->
                                    </div>
                                    <!--end group_sidebar-->
                                </div>
                                <div id="col-main"
                                    class="collection collection-page col-sm-18 col-md-18 no_full_width have-left-slidebar">
                                    <div class="container-nav clearfix">
                                        <div id="options" class="container-nav clearfix">
                                            <ul class="list-inline text-right">
                                                <li class="grid_list">
                                                    <ul class="list-inline option-set hidden-xs"
                                                        data-option-key="layoutMode">
                                                        <li data-original-title="Grid" data-option-value="fitRows"
                                                            id="goGrid" class="goAction btooltip active"
                                                            data-toggle="tooltip" data-placement="top" title="">
                                                            <span></span>
                                                        </li>
                                                        <li data-original-title="List"
                                                            data-option-value="straightDown" id="goList"
                                                            class="goAction btooltip" data-toggle="tooltip"
                                                            data-placement="top" title="">
                                                            <span></span>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="sortBy">
                                                    <div id="sortButtonWarper" class="dropdown-toggle"
                                                        data-toggle="dropdown">
                                                        <strong class="title-6">View as</strong>
                                                        <button id="sortButton">
                                                            <span class="name">Featured</span><i
                                                                class="fa fa-caret-down"></i>
                                                        </button>
                                                        <i class="sub-dropdown1"></i>
                                                        <i class="sub-dropdown"></i>
                                                    </div>
                                                    <div id="sortBox" class="control-container dropdown-menu">
                                                        <ul id="sortForm"
                                                            class="list-unstyled option-set text-left list-styled"
                                                            data-option-key="sortBy">
                                                            <li class="sort" data-option-value="manual">Featured
                                                            </li>
                                                            <li class="sort" data-option-value="price-ascending"
                                                                data-order="asc">Price: Low to High</li>
                                                            <li class="sort" data-option-value="price-descending"
                                                                data-order="desc">Price: High to Low</li>
                                                            <li class="sort" data-option-value="title-ascending"
                                                                data-order="asc">A-Z</li>
                                                            <li class="sort" data-option-value="title-descending"
                                                                data-order="desc">Z-A</li>
                                                            <li class="sort" data-option-value="created-ascending"
                                                                data-order="asc">Oldest to Newest</li>
                                                            <li class="sort" data-option-value="created-descending"
                                                                data-order="desc">Newest to Oldest</li>
                                                            <li class="sort" data-option-value="best-selling">Best
                                                                Selling</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="sandBox-wrapper" class="group-product-item row collection-full">
                                        <ul id="sandBox" class="list-unstyled">
                                            @foreach ($prod as $item)
                                            <li class="element first no_full_width"
                                            data-alpha="Curabitur cursus dignis" data-price="25900">
                                                <ul class="row-container list-unstyled clearfix">
                                                    <li class="row-left">
                                                        <a href="{{ route('getListView', [$id = $item['id'],$slug = Str::slug($item['name'])]) }}" class="container_item">
                                                            <img src="{{ url('public') }}/uploads/prods/{{ $item['image'] }}"
                                                                class="img-responsive getImg"
                                                                alt="Curabitur cursus dignis">
                                                            @if ($item['discount'] > 0)
                                                            <span class="sale_banner">
                                                                <span class="sale_text">Sale</span>
                                                            </span>
                                                            @endif
                                                        </a>
                                                        <div class="hbw">
                                                            <span class="hoverBorderWrapper"></span>
                                                        </div>
                                                    </li>
                                                    <li class="row-right parent-fly animMix">
                                                        <div class="product-content-left">
                                                            <a class="title-5 getName" href="product.html">{{ $item['name'] }}</a>
                                                            <span class="spr-badge" id="spr_badge_129323821155"
                                                                data-rating="0.0">
                                                                <span class="spr-starrating spr-badge-starrating"><i
                                                                        class="spr-icon spr-icon-star-empty"
                                                                        style=""></i><i
                                                                        class="spr-icon spr-icon-star-empty"
                                                                        style=""></i><i
                                                                        class="spr-icon spr-icon-star-empty"
                                                                        style=""></i><i
                                                                        class="spr-icon spr-icon-star-empty"
                                                                        style=""></i><i
                                                                        class="spr-icon spr-icon-star-empty"
                                                                        style=""></i></span>
                                                                <span class="spr-badge-caption">
                                                                    No reviews </span>
                                                            </span>
                                                        </div>
                                                        
                                                        <div class="product-content-right">
                                                            <div class="product-price">
                                                                @if ($item['discount'] > 0)
                                                                    <span class="price_sale">${{ (int)($item['price']-($item['price']*$item['discount'])/100) }}</span>
                                                                    <del class="price_compare"> ${{ $item['price'] }}</del>
                                                                    @else
                                                                    <span class="price">${{ $item['price'] }}</span>
                                                                    @endif
                                                            </div>
                                                        </div>
                                                        <div class="list-mode-description getDes">
                                                            {{ $item['description'] }}
                                                        </div>
                                                        <div class="hover-appear">
                                                            <form action="#" method="post">
                                                                <div class="effect-ajax-cart">
                                                                    <input name="quantity" value="1" type="hidden">
                                                                    <button class="select-option" type="button"
                                                                        onclick="window.location.href='product.html'"><i
                                                                            class="fa fa-th-list"
                                                                            title="Select Options"></i><span
                                                                            class="list-mode">Select
                                                                            Option</span></button>
                                                                </div>
                                                            </form>
                                                            <div onclick="getProdDetail({{ $item['id'] }})" class="product-ajax-qs hidden-xs hidden-sm ">
                                                                <div data-handle="curabitur-cursus-dignis"
                                                                    data-target="#quick-shop-modal"
                                                                    class="quick_shop quick-view-handle" data-toggle="modal">
                                                                    <i id="quich-view-i" class="fa fa-eye"
                                                                        title="Quick view"></i><span
                                                                        class="list-mode">Quick View</span>

                                                                </div>
                                                            </div>
                                                            <a class="wish-list" href="account.html"
                                                                title="wish list"><i class="fa fa-heart"></i><span
                                                                    class="list-mode">Add to Wishlist</span></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

@endsection