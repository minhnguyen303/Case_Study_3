@extends('layout.page')
@section('title') Giỏ hàng @endsection
@section('body')
    @include('layout.core.header')
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ol>
            </div>
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                    <tr class="cart_menu">
                        <td class="image">Sản phẩm</td>
                        <td class="description"></td>
                        <td class="price">Giá</td>
                        <td class="quantity">Số lượng</td>
                        <td class="total">Tổng</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($cart) && !empty($cart->items))
                        @foreach($cart->items as $item)
                            <tr>
                                <td class="cart_product">
                                    <a href=""><img src="images/cart/one.png" alt=""></a>
                                </td>
                                <td class="cart_description">
                                    <h4><a href="">{{$item['item']['name']}}</a></h4>
                                    <p>ID: {{$item['item']['id']}}</p>
                                </td>
                                <td class="cart_price">
                                    <p>${{$item['item']['price']}}</p>
                                </td>
                                <td class="cart_quantity">
                                    <div class="cart_quantity_button">
                                        <a class="cart_quantity_up" href="{{route('cart.add', $item['item']['id'])}}"> + </a>
                                        <input class="cart_quantity_input" type="text" name="quantity" value="{{$item['totalQty']}}" autocomplete="off" size="2">
                                        <a class="cart_quantity_down" href="{{route('cart.delete', $item['item']['id'])}}"> - </a>
                                    </div>
                                </td>
                                <td class="cart_total">
                                    <p class="cart_total_price">${{$item['totalPrice']}}</p>
                                </td>
                                <td class="cart_delete">
                                    <a class="cart_quantity_delete" href="{{route('cart.deleteAll', $item['item']['id'])}}"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <th class="cart_total" colspan="5">
                                <h3> Không có sản phẩm nào !</h3>
                            </th>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </section> <!--/#cart_items-->

    <section id="do_action">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="total_area">
                        <ul>
                            <li>Tổng giá giỏ hàng <span>$ {{isset($cart->totalPrice) ? $cart->totalPrice : 0}}</span></li>
                            <li>Tổng số sản phẩm <span>{{isset($cart->totalQty) ? $cart->totalQty : 0}}</span></li>
                            <li>Phí ship <span>Free</span></li>
                            <li>Tổng <span>$ {{isset($cart->totalPrice) ? $cart->totalPrice : 0}}</span></li>
                        </ul>
                        <a class="btn btn-default update" href="">Update</a>
                        <a class="btn btn-default check_out" href="{{route('cart.checkout')}}">Check Out</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#do_action-->
    @include('layout.core.footer')
@endsection
