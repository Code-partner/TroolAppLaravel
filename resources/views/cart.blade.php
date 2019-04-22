@extends('layouts.main')

@section('content')
<!-- cart section end -->
<section class="cart-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="cart-table">
                    <h3>Your Cart</h3>
                    <div class="cart-table-warp">
                        <table>
                            <thead>
                            <tr>
                                <th class="product-th">Product</th>
                                <th class="quy-th">Quantity</th>
                                <th class="size-th">SizeSize</th>
                                <th class="total-th">Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{$sum=0}}
                            @foreach($carts as $cart)
                            <tr>
                                <td class="product-col">
                                    <img src="{{$cart->product->product_img}}" alt="">
                                    <div class="pc-title">
                                        <h4>{{$cart->product->name}}</h4>
                                        <p>&#8377;{{$cart->product->price}}</p>
                                    </div>
                                </td>
                                <td class="quy-col">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="{{$cart->qty}}">
                                        </div>
                                    </div>
                                </td>
                                <td class="size-col"><h4>Size {{$cart->sku->size->name}}</h4></td>
                                <td class="total-col"><h4>&#8377;{{$cart->product->price * $cart->qty}}</h4></td>
                                {{$sum+=$cart->product->price * $cart->qty}}
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="total-cost">
                        <h6>Total <span>&#8377;{{$sum}}</span></h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 card-right">
                <form class="promo-code-form">
                    <input type="text" placeholder="Enter promo code">
                    <button>Submit</button>
                </form>
                <a href="" class="site-btn">Proceed to checkout</a>
                <a href="" class="site-btn sb-dark">Continue shopping</a>
            </div>
        </div>
    </div>
</section>
<!-- cart section end -->


@endsection