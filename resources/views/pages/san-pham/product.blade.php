@foreach($products as $product)
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{$product->image}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{$product->name}}</h5>
            <p class="card-text">{{$product->description}}</p>
            <p class="card-text">{{$product->price}}</p>
            <button class="btn btn-outline-info buy-button" data-id="{{$product->id}}"></button>
        </div>
    </div>
@endforeach

{{--<script>--}}
{{--    $(document).ready(function() {--}}
{{--        $('.buy-button').click(function() {--}}
{{--            let productId = $(this).data('id');--}}
{{--            let csrfToken = $('meta[name="csrf-token"]').attr('content');--}}
{{--            $.ajax({--}}
{{--                url: '/buy-action',--}}
{{--                method: 'POST',--}}
{{--                data: {--}}
{{--                    product: productId,--}}
{{--                    _token: csrfToken,--}}
{{--                },--}}
{{--                success: function(response) {--}}
{{--                    if (response.status === undefined) {--}}
{{--                        $('.cart-product-list').append(response);--}}
{{--                    } else if (response.status === 'exist_cart') {--}}
{{--                        let quantity = response.quantity;--}}
{{--                        let cart = response.cart;--}}
{{--                        $("#" + cart).find(".quantity").text(quantity);--}}
{{--                    }--}}
{{--                },--}}
{{--                error: function(xhr, status, error) {--}}
{{--                    // Xử lý khi có lỗi xảy ra--}}
{{--                    console.error(error);--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}

{{--        $(document).on('click', '.plus', function() {--}}
{{--            let cartID = $(this).data('id');--}}
{{--            let csrfToken = $('meta[name="csrf-token"]').attr('content');--}}
{{--            $.ajax({--}}
{{--                url: '/plus',--}}
{{--                method: 'POST',--}}
{{--                data: {--}}
{{--                    cart: cartID,--}}
{{--                    _token: csrfToken,--}}
{{--                },--}}
{{--                success: function(response) {--}}
{{--                    if (response.status === "ok") {--}}
{{--                        let quantity = response.quantity;--}}
{{--                        let cart = response.cart;--}}
{{--                        $("#" + cart).find(".quantity").text(quantity);--}}
{{--                    }--}}
{{--                },--}}
{{--                error: function(xhr, status, error) {--}}
{{--                    // Xử lý khi có lỗi xảy ra--}}
{{--                    console.error(error);--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}

{{--        $(document).on('click', '.subtraction', function() {--}}
{{--            let cartID = $(this).data('id');--}}
{{--            console.log(cartID);--}}
{{--            let csrfToken = $('meta[name="csrf-token"]').attr('content');--}}
{{--            $.ajax({--}}
{{--                url: '/subtraction',--}}
{{--                method: 'POST',--}}
{{--                data: {--}}
{{--                    cart: cartID,--}}
{{--                    _token: csrfToken,--}}
{{--                },--}}
{{--                success: function(response) {--}}
{{--                    if (response.status === "ok") {--}}
{{--                        let quantity = response.quantity;--}}
{{--                        let cart = response.cart;--}}
{{--                        $("#" + cart).find(".quantity").text(quantity);--}}
{{--                    }else if(response.status === "delete"){--}}
{{--                        let cart = response.cart;--}}
{{--                        $("#" + cart).fadeOut();--}}
{{--                    }--}}
{{--                },--}}
{{--                error: function(xhr, status, error) {--}}
{{--                    // Xử lý khi có lỗi xảy ra--}}
{{--                    console.error(error);--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}

{{--        $(document).on('click', '.cancel-item', function() {--}}
{{--            let cartID = $(this).data('id');--}}
{{--            let csrfToken = $('meta[name="csrf-token"]').attr('content');--}}
{{--            $.ajax({--}}
{{--                url: '/delete_cart',--}}
{{--                method: 'POST',--}}
{{--                data: {--}}
{{--                    cart: cartID,--}}
{{--                    _token: csrfToken,--}}
{{--                },--}}
{{--                success: function(response) {--}}
{{--                    if (response.status === "ok") {--}}
{{--                        let quantity = response.quantity;--}}
{{--                        let cart = response.cart;--}}
{{--                        $("#" + cart).find(".quantity").text(quantity);--}}
{{--                    }else if(response.status === "delete"){--}}
{{--                        let cart = response.cart;--}}
{{--                        $("#" + cart).fadeOut();--}}
{{--                    }--}}
{{--                },--}}
{{--                error: function(xhr, status, error) {--}}
{{--                    // Xử lý khi có lỗi xảy ra--}}
{{--                    console.error(error);--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
