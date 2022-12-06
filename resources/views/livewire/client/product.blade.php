<div class="col-lg-6 col-xl-6">
    @if(isset($product))
    <div class="product-details">
        <h5 class="pro-title"><a href="#">Woman fashion dress</a></h5>
        <span class="price">Price : $387</span>
        <div class="size-variation">
            <span>size :</span>
            <select wire:model="getsize" name="size-value">
                @php
                    $trim = trim($product[0]->sizes);
                    $size = explode(" ",$trim);
                @endphp
                @foreach ($size as $s)
                    <option value="{{ $s }}">{{ $s }}</option>
                @endforeach
            </select>
        </div>
        <div class="color-checkboxes">
            <h4>Color:</h4>
            @php
                $trim = trim($product[0]->colors);
                $color = explode(" ",$trim);
            @endphp
            @foreach ($color as $s)
                <input class="color-checkbox__input" id="col-{{$s}}" name="colour" type="radio" >
                <label wire:click="getColor('{{$s}}')" class="color-checkbox" for="col-{{$s}}" id="col-{{$s}}-label" style="background: {{$s}}"></label>
                <span></span>
            @endforeach

        </div>
        <p class="text-danger" style="height:20px;padding: 0px;">{{$checked}}</p>
        <div class="add-tocart-wrap" wire:ignore>
            <input wire:model="quantity" class="quantityQV" min="1" name="quantity" value="{{$quantity}}" type="number"/>
            <a href="#{{$product[0]->name}}" wire:click="addcart" class="add-to-cart"><i class="flaticon-shopping-purse-icon"></i>Add to Cart</a>
        </div>

        <p>{{$product[0]->description}}</p>
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
    @endif
</div>
