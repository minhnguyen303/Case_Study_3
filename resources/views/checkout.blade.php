@extends('layout.page')
@section('title') Thanh toán @endsection
@section('body')
    @include('layout.core.header')
    <section id="cart_items">
        @csrf
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Check out</li>
                </ol>
            </div><!--/breadcrums-->

            {{--<div class="shopper-informations">
                <div class="row">
                    <div class="col-sm">
                        <div class="order-message">
                            <p>Shipping Order</p>
                            <form action="{{route('order.create')}}" method="post" id="order">
                                @csrf
                                <textarea name="message" placeholder="Ghi chú về đơn hàng của bạn" rows="10" style="height: auto"></textarea>
                                --}}{{--<label><input type="checkbox"> Shipping to bill address</label>--}}{{--
                            </form>
                        </div>
                    </div>
                </div>
            </div>--}}
            <div class="review-payment">
                <h2>Review & Payment</h2>
            </div>

            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                    <tr>
                        <td colspan="4">&nbsp;</td>
                        <td colspan="2">
                            <table class="table table-condensed total-result">
                                <tr>
                                    <td>Tổng giá giỏ hàng</td>
                                    <td>${{isset($cart->totalPrice) ? $cart->totalPrice : 0}}</td>
                                </tr>
                                <tr>
                                    <td>Tổng số sản phẩm</td>
                                    <td>{{isset($cart->totalQty) ? $cart->totalQty : 0}}</td>
                                </tr>
                                <tr class="shipping-cost">
                                    <td>Phí ship</td>
                                    <td>Free</td>
                                </tr>
                                <tr>
                                    <td>Tổng</td>
                                    <td><span>${{isset($cart->totalPrice) ? $cart->totalPrice : 0}}</span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="payment-options">
                <div class="alert alert-success" role="alert" id="order_success" hidden><h3 class="text-center">Đặt hàng thành công!</h3><h4 class="text-center">Bây giờ bạn có thể kiếm tra lịch sử đặt hàng của mình</h4><h5 class="text-warning text-center">Về trang chủ sau 3s</h5></div>
                <button type="button" {{--form="order"--}} class="btn btn-default check_out" id="btn_order" style="float: right;margin-bottom: 50px;"><h3>Mua hàng</h3></button>
                {{--<a class="btn btn-default check_out" style="float: right;margin-bottom: 50px;" href="{{route('cart.showCheckout')}}"><h3>Xác nhận mua hàng</h3></a>--}}
            </div>
        </div>
    </section> <!--/#cart_items-->
    <script>
        $(document).ready(function () {
            $('#btn_order').click(function () {
                $.ajax({
                    url: window.origin + "/cart/checkout/order",
                    method: 'GET',
                    success: function (res) {
                        if (res === "OK"){
                            $('#btn_order').hide();
                            $('#order_success').show();
                            setTimeout(function () {
                                window.location.href = window.origin;
                            }, 3000)
                        }
                    }
                });
            });
        });
    </script>
    @include('layout.core.footer')
@endsection
