<div class="row">
    @if (isset($product))
    @foreach ($product as $p)
        <div class="col-sm-6 col-xl-3">
            <div class="sin-product style-two">
                <div class="pro-img">
                    <img src="{{ asset('images/'.$p->demoimage) }}" alt="">
                </div>
                @if ($p->created_at=='true')
                    <span class="new-tag">NEW!</span>
                @endif

                <div class="mid-wrapper">
                    <h5 class="pro-title"><a href="{{url('product/'.$p->prd_id)}}">{{$p->name}}</a></h5>
                    <div class="color-variation">
                        <ul>
                            <li><i class="fas fa-circle"></i></li>
                            <li><i class="fas fa-circle"></i></li>
                            <li><i class="fas fa-circle"></i></li>
                            <li><i class="fas fa-circle"></i></li>
                        </ul>
                    </div>
                    <p>
                        @if($p->categories == 1)
                        Men
                        @elseif($p->categories == 2)
                        Women
                        @elseif($p->categories == 3)
                        Kid
                        @elseif($p->categories == 4)
                        Accessories
                        @endif
                        / <span>${{$p->price}}</span></p>
                </div>
                <div class="icon-wrapper">
                    <div class="pro-icon">
                        <ul>
{{--                            <li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>--}}
                            <li><a href="{{url('cart')}}"><i class="flaticon-compare"></i></a></li>
                            <li><a href="#{{ $p->name }}" class="trigger" wire:click.prefetch="showQuickView({{ $p->prd_id }})"><i class="flaticon-eye"></i></a></li>
                        </ul>
                    </div>
{{--                    <div class="add-to-cart">--}}
{{--                        <a href="#">add to cart</a>--}}
{{--                    </div>--}}
                </div>
            </div>

        </div>
    @endforeach
    @endif
</div>
