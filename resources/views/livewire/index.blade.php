<div class="grid row">
    @foreach ($product as $p)
    <div class=" grid-item {{ $p->categories }} col-6 col-md-6  col-lg-4 col-xl-3">
        <div class="sin-product style-one">
            <div class="pro-img">
                @php
                $image = explode(" ",$p->images);
                @endphp
                <img src="{{ asset('images/'.$image[0]) }}" alt="">
            </div>
            <div class="mid-wrapper">
                <h5 class="pro-title"><a href="product.html">{{ $p->name }}</a></h5>
                <span>${{ $p->price }}</span>
            </div>

            <div class="pro-icon">
                <ul>
                    <li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>
                    <li><a href="#"><i class="flaticon-shopping-cart"></i></a></li>
                    <li><a class="trigger" id="test" href="#" wire:click.prefetch="showQuickView({{ $p->prd_id }})"><i class="flaticon-zoom-in" ></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    @endforeach
</div>