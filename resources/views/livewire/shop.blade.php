<div class="row">
    @if (isset($product))
    @foreach ($product as $p)
        <div class="col-sm-6 col-xl-3">
            <div class="sin-product style-two">
                <div class="pro-img">
                    <img src="media/images/product/sp2.jpg" alt="">
                </div>
                @if ($p->created_at=='true') 
                    <span class="new-tag">NEW!</span>
                @endif
                
                <div class="mid-wrapper">
                    <h5 class="pro-title"><a href="product.html">Dark jackets</a></h5>
                    <div class="color-variation">
                        <ul>
                            <li><i class="fas fa-circle"></i></li>
                            <li><i class="fas fa-circle"></i></li>
                            <li><i class="fas fa-circle"></i></li>
                            <li><i class="fas fa-circle"></i></li>
                        </ul>
                    </div>
                    <p>Woman / <span>$387</span></p>
                </div>
                <div class="icon-wrapper">
                    <div class="pro-icon">
                        <ul>
                            <li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>
                            <li><a href="#"><i class="flaticon-compare"></i></a></li>
                            <li><a href="#" class="trigger" wire:click.prefetch="showQuickView({{ $p->prd_id }})"><i class="flaticon-eye"></i></a></li>
                        </ul>
                    </div>
                    <div class="add-to-cart">
                        <a href="#">add to cart</a>
                    </div>
                </div>
            </div>
            
        </div>
    @endforeach
    @endif
    
</div>
