<div class="row">
    <div class="col-12" wire:ignore>
        <span class="close-qv">
        <i class="flaticon-close"></i>
        </span>
    </div>
@if (isset($prdQV))
@foreach ($prdQV as $p)
    <div class="col-md-6">
        @php
            $image = explode(" ",$p->images);
        @endphp
        <img src="images/{{ $image[0] }}" href="">
    </div>
    

    <div class="col-md-6">
        <div class="product-details">
            <h5 class="pro-title"><a href="#">
                {{ $p->name }}
            </a></h5>
            <span class="price">Price : ${{ $p->price }}</span>
            <div class="size-variation">
                <span>size :</span>
                <select name="size-value">
                @php
                    $trim = trim($p->size);
                    $size = explode(" ",$trim);
                @endphp
                @foreach ($size as $s)
                    <option value="{{ $s }}">{{ $s }}</option>
                @endforeach
                </select>
            </div>
            <div class="color-variation">
                <span>color :</span>
                <ul>
                @php
                    $trim = trim($p->color);
                    $color = explode(" ",$trim);
                @endphp
                @foreach ($color as $s)
                    <li><i class="fas fa-circle" style="color:{{ $s }}"></i></li>
                @endforeach
                </ul>
            </div>

            <div class="add-tocart-wrap" wire:ignore>
                
                <input class="quantityQV" min="1" name="quantity" value="1" type="number"/>
                <a href="#" wire:click="addcart" class="add-to-cart"><i class="flaticon-shopping-purse-icon"></i>Add to Cart</a>
                
            </div>


            <p>
                @if (isset($prdQV))
                    @foreach ($prdQV as $p)
                        {{ $p->description }}
                    @endforeach
                @endif
            </p>

            <div class="product-social">
                <span>Share :</span>
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>

        </div>
        
    </div>
@endforeach
@endif
</div>