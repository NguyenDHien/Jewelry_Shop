@extends('layouts.main')
@section('title', 'Checkout')
@section('body')
<div id="content-wrapper-parent">
    <div id="content-wrapper">  
        <!-- Content -->
        <div id="content" class="clearfix">        
            <div id="breadcrumb" class="breadcrumb">
                <div itemprop="breadcrumb" class="container">
                    <div class="row">
                        <div class="col-md-24">
                            <a href="index.html" class="homepage-link" title="Back to the frontpage">Home</a>
                            <span>/</span>
                            <span class="page-title">Create Account</span>
                        </div>
                    </div>
                </div>
            </div>              
            <section class="content">
                <div class="container">
                    <div class="row">
                        <div id="page-header" class="col-md-12">
                            <h1 id="page-title">Info</h1> 
                        </div>
                        <div id="page-header" class="col-md-12">
                            <h1 id="page-title">Cart</h1> 
                        </div>
                        <div id="col-main" class="col-md-12 register-page clearfix">
                            <form method="post" id="create_customer" accept-charset="UTF-8">
                                @csrf
                                <input value="create_customer" name="form_type" type="hidden"><input name="utf8" value="✓" type="hidden">
                                <ul id="register-form" class="row list-unstyled">
                                    <li class="clearfix"></li>
                                    <li id="first_namef">
                                    <label class="control-label" for="first_name">Name <span class="req">*</span></label>
                                    <input name="name" id="first_name" class="form-control" type="text" oninvalid="this.setCustomValidity('Enter Name Here')"
                                    oninput="this.setCustomValidity('')" required>
                                    </li>
                                    <li class="clearfix"></li>
                                    <li id="last_namef">
                                    <label class="control-label" for="last_name">Phone Number <span class="req">*</span></label>
                                    <input name="phone" id="last_name" class="form-control " type="number" required>
                                    </li>
                                    <li class="clearfix"></li>
                                    <li id="emailf" class="">
                                    <label class="control-label" for="email">Your Email <span class="req">*</span></label>
                                    <input name="email" id="email" class="form-control " type="email" required>
                                    </li>
                                    
                                    <li class="clearfix"></li>
                                    <li id="addressff">
                                    <label class="control-label" for="first_name">Address <span class="req">*</span></label>
                                    <input name="address" id="addressff" class="form-control" type="text" required>
                                    </li>

                                    <li class="clearfix"></li>
                                    <li id="addressff">
                                    <label class="control-label" for="first_name">Phường xã</label>
                                    <input name="address2" id="addressff" class="form-control" type="text">
                                    </li>

                                    <li class="clearfix"></li>
                                    <li id="addressff">
                                    <label class="control-label" for="first_name">Tỉnh/TP <span class="req">*</span></label>
                                    <input name="address3" id="addressff" class="form-control" type="text" required>
                                    </li>

                                    <li class="clearfix"></li>
                                    <li class="unpadding-top action-last">
                                    <button class="btn" type="submit">Checkout</button>
                                    </li>
                                </ul>
                            </form>
                        </div>   
                        <div id="col-main" class="col-md-12 checkout-page clearfix">
                            <div id="cart-content">
                                <div  class="cart-mini-overflow">
                                @foreach ($cart->items as $item)
                                <div class="items control-container">
                                    <div class="row items-wrapper">
                                        <a class="cart-close" title="Remove" href="{{ route('cart.delete', [$id = $item['id']]) }}"><i class="fa fa-times"></i></a>
                                        <div class="col-md-8 cart-left">
                                            <a class="cart-image" href="{{ route('getListView', [$id = $item['id'],$slug = Str::slug($item['name'])]) }}"><img width="100px" src="{{ url('public') }}/uploads/prods/{{ $item['image'] }}" alt="" title=""></a>
                                        </div>
                                        <div class="col-md-16 cart-right">
                                            <div class="cart-title">
                                                <a href="{{ route('getListView', [$id = $item['id'],$slug = Str::slug($item['name'])]) }}">{{ $item['name'] }}</a>
                                            </div>
                                            <div class="cart-price">
                                                ${{ number_format($item['price']) }}<span class="x"> x </span>{{ ($item['quantity']) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                @endforeach
                            </div>
                        </div>   
                    </div>
                </div>
            </section>        
        </div>
    </div>
</div>
@endsection