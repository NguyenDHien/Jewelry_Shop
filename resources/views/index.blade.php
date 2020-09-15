@extends('layouts.main')
@section('title', 'Jewelry')

@section('body')
<div id="content-wrapper-parent">
    <div id="content-wrapper">  
        <!-- Main Slideshow -->
        <div class="home-slider-wrapper clearfix">
            <div class="camera_wrap" id="home-slider">
                <div data-src="{{ url('resources') }}/assets/images/slide-image-1.jpg">
                    <div class="camera_caption camera_title_1 fadeIn">
                      <a href="{{ route('collection') }}" style="color:#010101;">Live the moment</a>
                    </div>
                    <div class="camera_caption camera_caption_1 fadeIn" style="color: rgb(1, 1, 1);">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    </div>
                    <div class="camera_caption camera_image-caption_1 moveFromLeft">
                        <img src="{{ url('resources') }}/assets/images/slide-image-caption-1.png" alt="image_caption">
                    </div>
                    <div class="camera_cta_1">
                        <a href="{{ route('collection') }}" class="btn">See Collection</a>
                    </div>
                </div>
                <div data-src="{{ url('resources') }}/assets/images/slide-image-2.jpg">
                    <div class="camera_caption camera_title_2 moveFromLeft">
                      <a href="{{ route('collection') }}" style="color:#666666;">Love’s embrace</a>
                    </div>
                    <div class="camera_caption camera_image-caption_2 moveFromLeft" style="visibility: hidden;">
                        <img src="{{ url('resources') }}/assets/images/slide-image-caption-2.png" alt="image_caption">
                    </div>
                </div>
                <div data-src="{{ url('resources') }}/assets/images/slide-image-3.jpg">
                    <div class="camera_caption camera_image-caption_3 moveFromLeft">
                        <img src="{{ url('resources') }}/assets/images/slide-image-caption-3.png" alt="image_caption">
                    </div>
                </div>
            </div>
        </div> 
        <!-- Content -->
        <div id="content" class="clearfix">                       
            <section class="content">  
                <div id="col-main" class="clearfix">
                    <div class="home-popular-collections">
                        <div class="container">
                            <div class="group_home_collections row">
                                <div class="col-md-24">
                                    <div class="home_collections">
                                        <h6 class="general-title">Popular Collections</h6>
                                        <div class="home_collections_wrapper">												
                                            <div id="home_collections">
                                                @foreach ($cateList as $item)
                                                <div class="home_collections_item">
                                                    <div class="home_collections_item_inner">
                                                        <div class="collection-details">
                                                            <a href="{{ route('getListView', [$id = $item['id'],$slug = $item['slug']]) }}" title="Browse our Bracelets">
                                                                <img src="{{ url('resources') }}/assets/images/3_large.png" alt="Bracelets">
                                                            </a>
                                                        </div>
                                                        <div class="hover-overlay">
                                                            <span class="col-name"><a href="collection.html">Bracelets</a></span>
                                                            <div class="collection-action">
                                                                <a href="collection.html">See the Collection</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                            
                                                            {{-- <div class="home_collections_item">
                                                                <div class="home_collections_item_inner">
                                                                    <div class="collection-details">
                                                                        <a href="collection.html" title="Browse our Earrings">
                                                                        <img src="{{ url('resources') }}/assets/images/2_large.png" alt="Earrings">
                                                                        </a>
                                                                    </div>
                                                                    <div class="hover-overlay">
                                                                        <span class="col-name"><a href="collection.html">Earrings</a></span>
                                                                        <div class="collection-action">
                                                                            <a href="collection.html">See the Collection</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="home_collections_item">
                                                                <div class="home_collections_item_inner">
                                                                    <div class="collection-details">
                                                                        <a href="collection.html" title="Browse our Necklaces">
                                                                        <img src="{{ url('resources') }}/assets/images/1_79ec3305-7c83-4daa-804c-fac19b2d1b7b_large.png" alt="Necklaces">
                                                                        </a>
                                                                    </div>
                                                                    <div class="hover-overlay">
                                                                        <span class="col-name"><a href="collection.html">Necklaces</a></span>
                                                                        <div class="collection-action">
                                                                            <a href="collection.html">See the Collection</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="home_collections_item">
                                                                <div class="home_collections_item_inner">
                                                                    <div class="collection-details">
                                                                        <a href="collection.html" title="Browse our Rings">
                                                                        <img src="{{ url('resources') }}/assets/images/4_large.png" alt="Rings">
                                                                        </a>
                                                                    </div>
                                                                    <div class="hover-overlay">
                                                                        <span class="col-name"><a href="collection.html">Rings</a></span>
                                                                        <div class="collection-action">
                                                                            <a href="collection.html">See the Collection</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="home_collections_item">
                                                                <div class="home_collections_item_inner">
                                                                    <div class="collection-details">
                                                                        <a href="collection.html" title="Browse our Bracelets">
                                                                            <img src="{{ url('resources') }}/assets/images/3_large.png" alt="Bracelets">
                                                                        </a>
                                                                    </div>
                                                                    <div class="hover-overlay">
                                                                        <span class="col-name"><a href="collection.html">Bracelets</a></span>
                                                                        <div class="collection-action">
                                                                            <a href="collection.html">See the Collection</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> --}}
                                                </div>													
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                      $(document).ready(function() {
                                        $('.collection-details').hover(
                                          function() {
                                            $(this).parent().addClass("collection-hovered");
                                          },
                                          function() {
                                          $(this).parent().removeClass("collection-hovered");
                                          });
                                      });
                                    </script>
                                </div>
                            </div>
                    </div>
                    <div class="home-newproduct">
                        <div class="container">
                            <div class="group_home_products row">
                                <div class="col-md-24">
                                    <div class="home_products">
                                        <h6 class="general-title">New Products</h6>
                                        <div class="home_products_wrapper">
                                            <div id="home_products">
                                                @foreach ($prod as $item)
                                                <div class="element no_full_width col-md-8 col-sm-8 not-animated" data-animate="fadeInUp" data-delay="0">
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
                                                </div> 
                                                @endforeach
                                                               
                                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home-banner-wrapper">
                        <div class="container">
                            <div id="home-banner" class="text-center clearfix">
                                <img class="pulse img-banner-caption" src="{{ url('resources') }}/assets/images/home_banner_image_text.png" alt="">
                                <div class="home-banner-caption">
                                    <p>
                                        Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
                                         Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                </div>
                                <div class="home-banner-action">
                                    <a href="collection.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home-blog">
                        <div class="container">
                            <div class="home-promotion-blog row">
                                <h6 class="general-title">Latest News</h6>
                                <div class="home-bottom_banner_wrapper col-md-12">
                                    <div id="home-bottom_banner" class="home-bottom_banner">
                                        <a href="collection.html"><img src="{{ url('resources') }}/assets/images/home_bottom_banner.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="home-blog-wrapper col-md-12">
                                    <div id="home_blog" class="home-blog">
                                        <div class="home-blog-item row">
                                            <div class="date col-md-4">
                                                <div class="date_inner">
                                                    <p>
                                                        <small>July</small><span>08</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="home-blog-content col-md-20">
                                                <h4><a href="article-left.html">sample blog post with left slidebar</a></h4>
                                                <ul class="list-inline">
                                                    <li class="author"><i class="fa fa-user"></i> Jin Alkaid</li>
                                                    <li>/</li>
                                                    <li class="comment">
                                                    <a href="article-left-2.html">
                                                    <span><i class="fa fa-pencil-square-o"></i> 0</span> Comments </a>
                                                    </li>
                                                </ul>
                                                <div class="intro">
                                                    Shoe street style leather tote oversized sweatshirt A.P.C. Prada Saffiano crop slipper denim shorts spearmint....
                                                </div>
                                            </div>
                                        </div>
                                        <div class="home-blog-item row">
                                            <div class="date col-md-4">
                                                <div class="date_inner">
                                                    <p>
                                                        <small>June</small><span>30</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="home-blog-content col-md-20">
                                                <h4><a href="article.html">vel illum qui dolorem eum fugiat</a></h4>
                                                <ul class="list-inline">
                                                    <li class="author"><i class="fa fa-user"></i> Jin Alkaid</li>
                                                    <li>/</li>
                                                    <li class="comment">
                                                    <a href="article.html">
                                                    <span><i class="fa fa-pencil-square-o"></i> 1</span> Comment </a>
                                                    </li>
                                                </ul>
                                                <div class="intro">
                                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem...
                                                </div>
                                            </div>
                                        </div>
                                        <div class="home-blog-item row">
                                            <div class="date col-md-4">
                                                <div class="date_inner">
                                                    <p>
                                                        <small>June</small><span>30</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="home-blog-content col-md-20">
                                                <h4><a href="article-right.html">sample blog post full width</a></h4>
                                                <ul class="list-inline">
                                                    <li class="author"><i class="fa fa-user"></i> Jin Alkaid</li>
                                                    <li>/</li>
                                                    <li class="comment">
                                                    <a href="article-right.html">
                                                    <span><i class="fa fa-pencil-square-o"></i> 0</span> Comments </a>
                                                    </li>
                                                </ul>
                                                <div class="intro">
                                                    Shoe street style leather tote oversized sweatshirt A.P.C. Prada Saffiano crop slipper denim shorts spearmint....
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home-feature">
                        <div class="container">
                            <div class="group_featured_products row">
                                <div class="col-md-24">
                                    <div class="home_fp">
                                        <h6 class="general-title">Featured Products</h6>
                                        <div class="home_fp_wrapper">
                                            <div id="home_fp">
                                                @foreach ($prod_est as $item)
                                                <div class="element no_full_width not-animated" data-animate="fadeInUp" data-delay="0">
                                                    {{-- <ul class="row-container list-unstyled clearfix">
                                                        <li class="row-left">
                                                        <a href="product.html" class="container_item">
                                                        <img src="{{ url('public') }}/uploads/prods/1_grande.jpg" class="img-responsive" alt="Curabitur cursus dignis">
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
                                                            <a class="title-5" href="product.html">{{ $item['name'] }}</a>
                                                            <span class="spr-badge" id="spr_badge_1293238211" data-rating="0.0">
                                                            <span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span>
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
                                                        
                                                        <div class="hover-appear">
                                                            <form action="http://demo.themeforshop.com/html_jewelry/product.html" method="post">
                                                                <div class="effect-ajax-cart">
                                                                    <input type="hidden" name="quantity" value="1">
                                                                    <button class="select-option" type="button" onclick="window.location.href='product.html'"><i class="fa fa-th-list" title="Select Options"></i><span class="list-mode">Select Option</span></button>
                                                                </div>
                                                            </form>
                                                            <div class="product-ajax-qs hidden-xs hidden-sm">
                                                                <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="quick_shop quick-view-handle" data-toggle="modal">
                                                                    <i class="fa fa-eye" title="Quick view"></i><span class="list-mode">Quick View</span>																		
                                                                </div>
                                                            </div>
                                                            <a class="wish-list" href="account.html" title="wish list"><i class="fa fa-heart"></i><span class="list-mode">Add to Wishlist</span></a>
                                                        </div>
                                                        </li>
                                                    </ul> --}}
                                                <ul class="row-container list-unstyled clearfix">
                                                    <li class="row-left">
                                                        <a href="product.html" class="container_item">
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
                                                </div>
                                                @endforeach

                                                														  			  			
			                          
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home-partners">
                        <div class="container">
                            <div class="partners-logo row">
                                <div class="col-md-24">
                                    <div id="partners-container" class="clearfix">
                                        <h6 class="general-title">Popular Brands</h6>
                                        <div id="partners">
                                                        <div class="logo text-center not-animated" data-animate="bounceIn" data-delay="150">
                                                            <a class="animated" href="collection.html">
                                                            <img class="pulse" src="{{ url('resources') }}/assets/images/partners_logo_1.png" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="logo text-center not-animated" data-animate="bounceIn" data-delay="300">
                                                            <a class="animated" href="collection.html">
                                                            <img class="pulse" src="{{ url('resources') }}/assets/images/partners_logo_2.png" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="logo text-center not-animated" data-animate="bounceIn" data-delay="450">
                                                            <a class="animated" href="collection.html">
                                                            <img class="pulse" src="{{ url('resources') }}/assets/images/partners_logo_3.png" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="logo text-center not-animated" data-animate="bounceIn" data-delay="600">
                                                            <a class="animated" href="collection.html">
                                                            <img class="pulse" src="{{ url('resources') }}/assets/images/partners_logo_4.png" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="logo text-center not-animated" data-animate="bounceIn" data-delay="750">
                                                            <a class="animated" href="collection.html">
                                                            <img class="pulse" src="{{ url('resources') }}/assets/images/partners_logo_5.png" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="logo text-center not-animated" data-animate="bounceIn" data-delay="900">
                                                            <a class="animated" href="collection.html">
                                                            <img class="pulse" src="{{ url('resources') }}/assets/images/partners_logo_6.png" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="logo text-center not-animated" data-animate="bounceIn" data-delay="1050">
                                                            <a class="animated" href="collection.html">
                                                            <img class="pulse" src="{{ url('resources') }}/assets/images/partners_logo_7.png" alt="">
                                                            </a>
                                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>  				            
                </div>
            </section>        
        </div>
    </div>
</div>
@endsection
@section('popupIndex')
<div class="newsletter-popup" style="display: none;">
    <form action="http://codespot.us5.list-manage.com/subscribe/post?u=ed73bc2d2f8ae97778246702e&amp;id=c63b4d644d" method="post" name="mc-embedded-subscribe-form" target="_blank">
        <h4>-50% Deal</h4>
        <p class="tagline">
            subscribe for newsletter and get the item for 50% off
        </p>
        <div class="group_input">
            <input class="form-control" type="email" name="EMAIL" placeholder="YOUR EMAIL">
            <button class="btn" type="submit"><i class="fa fa-paper-plane"></i></button>
        </div>
    </form>
    <div id="popup-hide">
        <input type="checkbox" id="mc-popup-hide" value="1" checked="checked"><label for="mc-popup-hide">Never show this message again</label>
    </div>
</div>

<script src="{{ url('resources') }}/assets/javascripts/cs.global.js" type="text/javascript"></script>


<!--Androll-->
<script type="text/javascript">
adroll_adv_id = "HTF7KIWJRBHHXL46WLUDBC";
adroll_pix_id = "IE5CHDRTR5ABXH2P6QXAVM";
(function () {
var oldonload = window.onload;
window.onload = function(){
   __adroll_loaded=true;
   var scr = document.createElement("script");
   var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
   scr.setAttribute('async', 'true');
   scr.type = "text/javascript";
   scr.src = host + "/j/roundtrip.js";
   ((document.getElementsByTagName('head') || [null])[0] ||
    document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
   if(oldonload){oldonload()}};
}());
</script>

<!-- Google Code -->
<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');



  ga('create', 'UA-55571446-8', 'auto');

  ga('require', 'displayfeatures');
  
  ga('set', 'dimension1', 'html_jewelry');
     
  ga('set', 'dimension2', 'html_jewelry');

  ga('send', 'pageview');

</script>
@endsection