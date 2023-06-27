<div class="card card-cart shadow-effect mb-3" style="height: 7rem" id="{{$cart->id}}">
            <div class="row no-gutters p-1">
                <div class="col-3" style="overflow: hidden">
                    <img src="{{$cart->Product->image}} " class="card-img cart-img" alt="Ảnh">
                </div>
                <div class="col-7">
                    <div class="card-body" style="padding: 0 0 0 0">
                        <h5 class="card-title" style="margin-bottom: 1px">{{\Illuminate\Support\Str::limit($cart->Product->name,24)}}</h5>
                        <p class="card-text">{{preg_replace('/<[^>]*>/', '', \Illuminate\Support\Str::limit(strip_tags($cart->Product->description),30))}}</p>
                    </div>
                </div>
                <div class="col-2">
                    <div class="green-bg h-100 text-white text-center mitr-medium">
                        <div class="row">
                            <div >
                                <i class="fas fa-times cancel-item" data-id="{{$cart->id}}"></i>
                            </div>
                            <div class="col-12 plus d-flex align-content-center justify-content-center" data-id="{{$cart->id}}">
                                <div class="cart-circle plus">
                                </div>
                            </div>

                            <div class="col-12 quantity">
                                {{$cart->quantity}}
                            </div>

                            <div class="col-12 subtraction d-flex align-content-center justify-content-center" data-id="{{$cart->id}}">
                                <div class="cart-circle minus">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
