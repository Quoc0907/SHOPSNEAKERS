@extends("layout.default")
@section("main")
    <!-- breadcrumb -->
    <div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
        <a href="{{ url('/') }}" class="s-text16">
            Home
            <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
        </a>

        <a href="#" class="s-text16">
            Category
            <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
        </a>

        <span class="s-text17">
			{{ $product_data->TENSP }}
		</span>
    </div>

    <!-- Product Detail -->
    <div class="container bgwhite p-t-35 p-b-80">
        <div class="flex-w flex-sb">
            <div class="w-size13 p-t-30 respon5">
                <div class="wrap-slick3 flex-sb flex-w">
                    <div class="wrap-slick3-dots"></div>

                    <div class="slick3">
                        <div class="item-slick3" data-thumb="{{ $product_data->HINHANH }}">
                            <div class="wrap-pic-w">
                                <img src="{{ $product_data->HINHANH }}" alt="{{ $product_data->TENSP }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-size14 p-t-30 respon5">
                <h4 class="product-detail-name m-text16 p-b-13">
                    {{ $product_data->TENSP }}
                </h4>

                <span class="m-text17">
					{{ number_format($product_data->GIA) }} &#8363;
				</span>

                <p class="s-text8 p-t-10">
                    {{ $product_data->MOTA }}
                </p>

                <!--  -->
                <div class="p-t-33 p-b-60">
                    <div class="flex-m flex-w p-b-10">
                        <div class="s-text15 w-size15 t-center">
                            Size
                        </div>

                        <div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
                            <select class="selection-2" name="size">
                                <option>Choose an option</option>
                                <option>Size S</option>
                                <option>Size M</option>
                                <option>Size L</option>
                                <option>Size XL</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex-m flex-w">
                        <div class="s-text15 w-size15 t-center">
                            Color
                        </div>

                        <div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
                            <select class="selection-2" name="color">
                                <option>Choose an option</option>
                                <option>Gray</option>
                                <option>Red</option>
                                <option>Black</option>
                                <option>Blue</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex-r-m flex-w p-t-10">
                        <div class="w-size16 flex-m flex-w">
                            <div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
                                <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                                    <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                                </button>

                                <input class="size8 m-text18 t-center num-product" type="number" name="num-product" value="1">

                                <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                                    <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                                </button>
                            </div>

                            <div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
                                <!-- Button -->
                                <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-b-45">
                    <span class="s-text8 m-r-35">SKU: {{ $product_data->MASP }}</span>
                    <span class="s-text8">Categories: Mug, Design</span>
                </div>

                <!-- Description -->
                <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
                    <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                        Description
                        <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                        <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                    </h5>

                    <div class="dropdown-content dis-none p-t-15 p-b-23">
                        <p class="s-text8">{{ $product_data->MOTA }}</p>
                    </div>
                </div>

                <!-- Reviews -->
                <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
                    <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                        Reviews ({{ count($reviews ?? []) }})
                        <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                        <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                    </h5>

                    <div class="dropdown-content dis-none p-t-15 p-b-23">
                        @if(Auth::check())
                        <form action="{{ url('review/'.$product_data->MASP) }}" method="POST">
                            @csrf
                            <div class="rating-stars mb-3">
                                <input type="radio" name="rating" id="star5" value="5"><label for="star5">★</label>
                                <input type="radio" name="rating" id="star4" value="4"><label for="star4">★</label>
                                <input type="radio" name="rating" id="star3" value="3" checked><label for="star3">★</label>
                                <input type="radio" name="rating" id="star2" value="2"><label for="star2">★</label>
                                <input type="radio" name="rating" id="star1" value="1"><label for="star1">★</label>
                            </div>

                            <textarea name="comment" class="form-control" rows="3" placeholder="Viết nhận xét của bạn..."></textarea>

                            <button type="submit" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4 mt-2">
                                Gửi đánh giá
                            </button>
                        </form>
                        @else
                            <p class="s-text8">Vui lòng <a href="{{ url('login') }}">đăng nhập</a> để đánh giá sản phẩm.</p>
                        @endif

                        <hr>

                        @forelse($reviews ?? [] as $review)
                            <div class="p-t-10">
                                <strong>{{ $review->user->TEN ?? 'Người dùng ẩn danh' }}</strong>
                                <div class="text-warning">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <i class="fa fa-star{{ $i <= $review->rating ? '' : '-o' }}"></i>
                                    @endfor
                                </div>
                                <p>{{ $review->comment }}</p>
                                <small class="text-muted">{{ $review->created_at->format('d/m/Y') }}</small>
                            </div>
                        @empty
                            <p class="s-text8">Chưa có đánh giá nào cho sản phẩm này.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .rating-stars {
            direction: rtl;
            display: inline-flex;
            gap: 5px;
        }
        .rating-stars input {
            display: none;
        }
        .rating-stars label {
            font-size: 25px;
            color: #ccc;
            cursor: pointer;
            transition: color 0.2s;
        }
        .rating-stars input:checked ~ label,
        .rating-stars label:hover,
        .rating-stars label:hover ~ label {
            color: #f5a623;
        }
    </style>
@endsection
