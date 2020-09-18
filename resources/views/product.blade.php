@extends('layouts.main')
@section('title', 'Product')
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
                            <a href="{{ route('getListView', [$id = $prod->cate->id,$slug = $prod->cate->slug]) }}" title="">{{ $prod->cate->name }}</a>
                            <span>/</span>
                            <span class="page-title">{{ $prod->name }}</span>
                        </div>
                    </div>
                </div>
            </div>         
            <section class="content">
                <div class="container">
                    <div class="row">  							
                        <div id="col-main" class="product-page col-xs-24 col-sm-18 no_full_width">
                            <div itemscope="" itemtype="http://schema.org/Product">
                                <meta itemprop="url" content="/products/donec-condime-fermentum">
                                <div id="product" class="content clearfix">      										
                                    <div id="product-image" class="product-image row no_full_width col-sm-12">           
                                        <div class="image featured fadeInUp not-animated" data-animate="fadeInUp"> 
                                            <img src="{{ url('public') }}/uploads/prods/{{ $prod['image'] }}" alt="Donec condime fermentum">
                                        </div>
                                        <div id="gallery_main" class="product-image-thumb thumbs mobile_full_width ">
                                            <ul style="opacity: 0; display: block;" class="slide-product-image owl-carousel owl-theme">
                                                <li class="image">
                                                    <a href="{{ url('public') }}/uploads/prods/{{ $prod['image'] }}" class="cloud-zoom-gallery active">
                                                        <img src="{{ url('public') }}/uploads/prods/{{ $prod['image'] }}" alt="Donec condime fermentum">
                                                    </a>
                                                </li>
                                                @foreach ($prod->prodDs as $item)
                                                <li class="image">
                                                    <a href="{{ url('public') }}/uploads/prods/{{ $item['image'] }}" class="cloud-zoom-gallery">
                                                        <img src="{{ url('public') }}/uploads/prods/{{ $item['image'] }}" alt="Donec condime fermentum">
                                                    </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>  											
                                    </div>
                                    <div id="product-information" class="product-information row text-center no_full_width col-sm-12">        
                                        <h2 id="page-title" class="text-left">
                                            <span itemprop="name">{{ $prod['name'] }}</span>
                                        </h2>
                                        <div id="product-header" class="clearfix">
                                            <div id="product-info-left">
                                                <div class="description">
                                                    <p>{{ $prod['description'] }}</p>
                                                </div>
                                            </div>          
                                            <div id="product-info-right">     
                                                <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="col-sm-24 group-variants">
                                                    <meta itemprop="priceCurrency" content="USD">              
                                                    <link itemprop="availability" href="http://schema.org/InStock">
                                                    <form action="" method="get" class="variants" id="product-actions">
                                                        <div id="product-actions-1293235843" class="options clearfix">													
                                                            <div class="swatch color clearfix">
                                                                <div class="header">
                                                                    Color
                                                                </div>

                                                                @foreach ($prod->prodDs as $item) 
                                                                    <div data-value="{{ $item->color->name }}" class="swatch-element color {{ $item->color->name }} available">
                                                                        <div class="tooltip">
                                                                            {{ $item->color->name }}
                                                                        </div>
                                                                        <input id="swatch-0-{{ $item->color->name }}" name="color" checked value="{{ $item->color->name }}" type="radio">
                                                                        <label for="swatch-0-{{ $item->color->name }}" style="background-color: {{ $item->color->hex_color }}">
                                                                        </label>
                                                                    </div>
                                                                @endforeach															
                                                            </div>
                                                            <div class="swatch clearfix">
                                                                <div class="header">
                                                                    Size
                                                                </div>
                                                                @foreach ($prod->prodDs as $item)
                                                                <div data-value="{{ $item->size->name }}" class="swatch-element {{ $item->size->name }} available">
                                                                    <input id="swatch-1-{{ $item->size->name }}" name="size" checked value="{{ $item->size->name }}" type="radio">
                                                                    <label for="swatch-1-{{ $item->size->name }}">
                                                                        {{ $item->size->name }} 
                                                                    </label>
                                                                </div>
                                                                @endforeach
                                                            </div>
                                                            
                                                            <div class="quantity-wrapper clearfix">
                                                                <label class="wrapper-title">Quantity</label>
                                                                <div class="wrapper">
                                                                    <input id="quantity" name="quantity" value="1" maxlength="5" size="5" class="item-quantity" type="text">
                                                                    <span class="qty-group">
                                                                    <span class="qty-wrapper">
                                                                    <span data-original-title="Increase" class="qty-up btooltip" data-toggle="tooltip" data-placement="top" title="" data-src="#quantity">
                                                                    <i class="fa fa-caret-right"></i>
                                                                    </span>
                                                                    <span data-original-title="Decrease" class="qty-down btooltip" data-toggle="tooltip" data-placement="top" title="" data-src="#quantity">
                                                                    <i class="fa fa-caret-left"></i>
                                                                    </span>
                                                                    </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div id="purchase-1293235843">
                                                                <div class="detail-price" itemprop="price">
                                                                    @if ($prod['discount'] > 0)
                                                                    <span class="price_sale">${{ (int)($prod['price']-($prod['price']*$prod['discount'])/100) }}</span>
                                                                    <del class="price_compare"> ${{ $prod['price'] }}</del>
                                                                    @else
                                                                    <span class="price">${{ $prod['price'] }}</span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="others-bottom clearfix">
                                                                <button id="add-to-cart" class="btn btn-1 add-to-cart" data-parent=".product-information" type="submit" name="add">Add to Cart</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <div class="wls">
                                                        <a class="wish-list" href="wishlist.html"><i class="fa fa-heart"></i> Wish list</a>
                                                        <span>|</span>
                                                        <a href="mailto:ndhien288@gmail.com"><i class="fa fa-envelope"></i> SEND EMAIL</a>
                                                    </div>                                          
                                                </div>                        
                                                <ul id="tabs_detail" class="tabs-panel-detail hidden-xs hidden-sm">
                                                    <li class="first">
                                                        <h5><a href="#pop-one" class="fancybox">Measurements &amp; Specs</a></h5>
                                                    </li>
                                                    <li>
                                                        <h5><a href="#pop-two" class="fancybox">Shipping &amp; Returns</a></h5>
                                                    </li>
                                                    <li>
                                                        <h5><a href="#pop-three" class="fancybox">Size Charts</a></h5>
                                                    </li>
                                                </ul>             
                                                <div id="pop-one" style="display: none;">
                                                    <img src="assets/images/mspecs_image.jpg" alt="">
                                                </div>
                                                <div id="pop-two" style="display: none;">
                                                    <h5>Returns Policy</h5>
                                                    <p>
                                                        You may return most new, unopened items within 30 days of delivery for a full refund. We'll also pay the return shipping costs if the return is a result of our error (you received an incorrect or defective item, etc.).You should expect to receive your refund within four weeks of giving your package to the return shipper, however, in many cases you will receive a refund more quickly. This time period includes the transit time for us to receive your return from the shipper (5 to 10 business days), the time it takes us to process your return once we receive it (3 to 5 business days), and the time it takes your bank to process our refund request (5 to 10 business days).If you need to return an item, simply login to your account, view the order using the 'Complete Orders' link under the My Account menu and click the Return Item(s) button. We'll notify you via e-mail of your refund once we've received and processed the returned item.
                                                    </p>
                                                    <br>
                                                    <h5>Shipping</h5>
                                                    <p>
                                                        We can ship to virtually any address in the world. Note that there are restrictions on some products, and some products cannot be shipped to international destinations.When you place an order, we will estimate shipping and delivery dates for you based on the availability of your items and the shipping options you choose. Depending on the shipping provider you choose, shipping date estimates may appear on the shipping quotes page.Please also note that the shipping rates for many items we sell are weight-based. The weight of any such item can be found on its detail page. To reflect the policies of the shipping companies we use, all weights will be rounded up to the next full pound.
                                                    </p>
                                                </div>
                                                <div id="pop-three" style="display: none;">
                                                    <img src="assets/images/size_chart_image.jpg" alt="">
                                                </div>                
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div id="shopify-product-reviews" data-id="1293236931">
                                                <style scoped="">
                                                  .spr-container {
                                                    padding: 24px;
                                                    border-color: #ECECEC;
                                                  }
                                                  .spr-review, .spr-form {
                                                    border-color: #ECECEC;
                                                  }
                                                </style>
                                                <div class="spr-container">
                                                    <div class="spr-header">
                                                        <h2 class="spr-header-title">Customer Reviews</h2>
                                                        <div class="spr-summary" itemscope="" itemtype="http://data-vocabulary.org/Review-aggregate">
                                                            <meta itemprop="itemreviewed" content="Donec aliquam ante non">
                                                            <meta itemprop="votes" content="1">
                                                            <span itemprop="rating" itemscope="" itemtype="http://data-vocabulary.org/Rating" class="spr-starrating spr-summary-starrating">
                                                            <meta itemprop="average" content="4.0">
                                                            <meta itemprop="best" content="5">
                                                            <meta itemprop="worst" content="1">
                                                            <i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i>
                                                            </span>
                                                            <span class="spr-summary-caption">
                                                            <span class="spr-summary-actions-togglereviews">Based on 1 review</span>
                                                            </span>
                                                            <span class="spr-summary-actions">
                                                            <a href="#" class="spr-summary-actions-newreview" onclick="SPR.toggleForm(1293236931);return false">Write a review</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="spr-content">
                                                        <div class="spr-form" id="form_1293236931" style="display: none">
                                                            <form method="post" action="#" id="new-review-form_1293236931" class="new-review-form">
                                                                <input type="hidden" name="review[rating]"><input type="hidden" name="product_id" value="1293236931">
                                                                <h3 class="spr-form-title">Write a review</h3>
                                                                <fieldset class="spr-form-contact">
                                                                    <div class="spr-form-contact-name">
                                                                        <label class="spr-form-label" for="review_author_1293236931">Name</label>
                                                                        <input class="spr-form-input spr-form-input-text " id="review_author_1293236931" type="text" name="review[author]" value="" placeholder="Enter your name">
                                                                    </div>
                                                                    <div class="spr-form-contact-email">
                                                                        <label class="spr-form-label" for="review_email_1293236931">Email</label>
                                                                        <input class="spr-form-input spr-form-input-email " id="review_email_1293236931" type="email" name="review[email]" value="" placeholder="john.smith@example.com">
                                                                    </div>
                                                                </fieldset>
                                                                <fieldset class="spr-form-review">
                                                                    <div class="spr-form-review-rating">
                                                                        <label class="spr-form-label">Rating</label>
                                                                        <div class="spr-form-input spr-starrating ">
                                                                            <a href="#" onclick="SPR.setRating(this);return false;" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="1">&nbsp;</a>
                                                                            <a href="#" onclick="SPR.setRating(this);return false;" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="2">&nbsp;</a>
                                                                            <a href="#" onclick="SPR.setRating(this);return false;" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="3">&nbsp;</a>
                                                                            <a href="#" onclick="SPR.setRating(this);return false;" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="4">&nbsp;</a>
                                                                            <a href="#" onclick="SPR.setRating(this);return false;" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="5">&nbsp;</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="spr-form-review-title">
                                                                        <label class="spr-form-label" for="review_title_1293236931">Review Title</label>
                                                                        <input class="spr-form-input spr-form-input-text " id="review_title_1293236931" type="text" name="review[title]" value="" placeholder="Give your review a title">
                                                                    </div>
                                                                    <div class="spr-form-review-body">
                                                                        <label class="spr-form-label" for="review_body_1293236931">Body of Review <span class="spr-form-review-body-charactersremaining">(1500)</span></label>
                                                                        <div class="spr-form-input">
                                                                            <textarea class="spr-form-input spr-form-input-textarea " id="review_body_1293236931" data-product-id="1293236931" name="review[body]" rows="10" placeholder="Write your comments here"></textarea>																				
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                                <fieldset class="spr-form-actions">
                                                                    <input type="submit" class="spr-button spr-button-primary button button-primary btn btn-primary" value="Submit Review">
                                                                </fieldset>
                                                            </form>
                                                        </div>
                                                        <div class="spr-reviews" id="reviews_1293236931">
                                                            <div class="spr-review" id="spr-review-906174">
                                                                <div class="spr-review-header">
                                                                    <span class="spr-starratings spr-review-header-starratings"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span>
                                                                    <h3 class="spr-review-header-title">test</h3>
                                                                    <span class="spr-review-header-byline"><strong>test</strong> on <strong>Aug 10, 2015</strong></span>
                                                                </div>
                                                                <div class="spr-review-content">
                                                                    <p class="spr-review-content-body">
                                                                        test
                                                                    </p>
                                                                </div>
                                                                <div class="spr-review-footer">
                                                                    <a href="#" class="spr-review-reportreview" onclick="SPR.reportReview(906174);return false" id="report_906174" data-msg="This review has been reported">Report as Inappropriate</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                    </div>				 --}}
                                </div>
                            </div>         
                            <!-- Related Products -->
                            <section class="rel-container clearfix">  
                                <h6 class="general-title text-left">You may also like the related products</h6>
                                <div id="prod-related-wrapper">
                                    <div class="prod-related clearfix">
                                        @foreach ($cateProd->prods as $item)
                                        <div class="element no_full_width bounceIn not-animated" data-animate="bounceIn" data-delay="200">
                                            <ul class="row-container list-unstyled clearfix">
                                                <li class="row-left">
                                                <a href="{{ route('getListView', [$id = $item['id'],$slug = Str::slug($item['name'])]) }}" class="container_item">
                                                <img src="{{ url('public') }}/uploads/prods/{{ $item['image'] }}" class="img-responsive" alt="Curabitur cursus dignis">
                                                </a>
                                                <div class="hbw">
                                                    <span class="hoverBorderWrapper"></span>
                                                </div>
                                                </li>
                                                <li class="row-right parent-fly animMix">
                                                <div class="product-content-left">
                                                    <a class="title-5" href="{{ route('getListView', [$id = $item['id'],$slug = Str::slug($item['name'])]) }}">
                                                        {{ $item->name }}
                                                    </a>
                                                    <span class="spr-badge" id="spr_badge_1293239619" data-rating="0.0">
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
                                                <div class="list-mode-description">
                                                    {{ $item->description }}
                                                </div>
                                                <div class="hover-appear">
                                                    <form action="#" method="post">
                                                        <div class="hide clearfix">
                                                            <select name="id">
                                                                <option selected="selected" value="5141875779">Default Title</option>
                                                            </select>
                                                        </div>
                                                        <div class="effect-ajax-cart">
                                                            <input name="quantity" value="1" type="hidden">
                                                            <button class="add-to-cart" type="submit" name="add"><i class="fa fa-shopping-cart"></i><span class="list-mode">Add to Cart</span></button>
                                                        </div>
                                                    </form>
                                                    <div onclick="getProdDetail({{ $item['id'] }})" class="product-ajax-qs hidden-xs hidden-sm">
                                                        <div data-handle="curabitur-cursus-dignis" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
                                                            <i class="fa fa-eye" title="Quick view"></i><span class="list-mode">Quick View</span>																	
                                                        </div>
                                                    </div>
                                                    <a class="wish-list" href="account.html" title="wish list"><i class="fa fa-heart"></i><span class="list-mode">Add to Wishlist</span></a>
                                                </div>
                                                </li>
                                            </ul>
                                        </div>
                                        @endforeach
                                         
                                        
                                    </div>	
                                </div>										
                            </section>
                        </div>
                        <div class="right-slidebar col-xs-24 col-sm-6">
                                    <div class="group_sidebar">											
                                        <div class="home-collection-wrapper sb-wrapper clearfix">
                                            <h6 class="sb-title">Product Categories</h6>
                                            <ul class="list-unstyled sb-content list-styled">
                                                @foreach ($cates5 as $item)
                                                <li>
                                                    <a href="collection.html"><span><i class="fa fa-circle"></i> {{ $item->name }}</span></a>
                                                </li>
                                                @endforeach

                                            </ul>
                                        </div>  
                                        <div class="deal-product-wrapper sb-wrapper clearfix">
                                            <div class="group_deal_products">
                                                <div class="">
                                                    <div class="home_deal_fp">
                                                        <h6 class="sb-title">Specials</h6>
                                                        <div class="home_deal_fp_wrapper sb-content">
                                                            <div id="home_deal_fp">
                                                                @foreach ($prodSale as $item)
                                                                <div class="element full_width fadeInUp animated" data-animate="fadeInUp" data-delay="0">
                                                                    <form action="#" method="post">
                                                                        <ul class="row-container list-unstyled clearfix">
                                                                            <li class="row-left">
                                                                            <a href="{{ route('getListView', [$id = $item['id'],$slug = Str::slug($item['name'])]) }}" class="container_item">
                                                                            <img src="{{ url('public') }}/uploads/prods/{{ $item['image'] }}" class="img-responsive" alt="Curabitur cursus dignis">
                                                                            </a>
                                                                            </li>
                                                                            <li class="row-right parent-fly animMix">
                                                                            <a class="title-5" href="{{ route('getListView', [$id = $item['id'],$slug = Str::slug($item['name'])]) }}">{{ $item->name }}</a>
                                                                            <div class="product-price">
                                                                                @if ($item['discount'] > 0)
                                                                                <span class="price_sale">${{ (int)($item['price']-($item['price']*$item['discount'])/100) }}</span>
                                                                                <del class="price_compare"> ${{ $item['price'] }}</del>
                                                                                @else
                                                                                <span class="price">${{ $item['price'] }}</span>
                                                                                @endif
                                                                            </div>
                                                                            <div class="effect-ajax-cart">
                                                                                <input name="quantity" value="1" type="hidden">
                                                                                <button class="select-option" type="button" onclick="window.location.href='{{ route('getListView', [$id = $item['id'],$slug = Str::slug($item['name'])]) }}'">Detail</button>
                                                                            </div>
                                                                            </li>
                                                                        </ul>
                                                                    </form>
                                                                </div>
                                                                @endforeach
                                                                
                                                                
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
                                                    Porro quisquam est, qui dolorem ipsum sitet dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora labore et dolore eut aliquam quaerat
                                                </p>
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
                                    </div><!--end group_sidebar-->
                        </div>
                    </div>
                </div>
            </section>	
        </div>
    </div>
</div>  
@endsection