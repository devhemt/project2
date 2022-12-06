<div class="modal quickview-wrapper {{$open}} ">
    <div class="quickview">
        <div class="row">
            <div class="col-12" wire:ignore>
        <span class="close-qv">
        <i class="flaticon-close"></i>
        </span>
            </div>
            @if (isset($prdQV))
                @foreach ($prdQV as $p)
                    <div class="col-md-6">
                        <img src="images/{{ $p->demoimage }}" href="">
                    </div>


                    <div class="col-md-6">
                        <div class="product-details">
                            <h5 class="pro-title"><a href="{{url('product/'.$p->prd_id)}}">
                                    {{ $p->name }}
                                </a></h5>
                            <span class="price">Price : ${{ $p->price }}</span>
                            <div class="size-variation">
                                <span>size :</span>
                                <select wire:model="getsize" name="size-value">
                                    @php
                                        $trim = trim($p->sizes);
                                        $size = explode(" ",$trim);
                                    @endphp
                                    @foreach ($size as $s)
                                        <option value="{{ $s }}">{{ $s }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div  class="color-variation">
                                <span>color :</span>
                                <ul id="blablo">
                                    @php
                                        $trim = trim($p->colors);
                                        $color = explode(" ",$trim);
                                    @endphp
                                    @foreach ($color as $s)
                                        <li class="quickcolor"><i wire:click="getColor('{{$s}}')" class="fas fa-circle
                                        @if($showchose == $s)
                                            {{$colorclass}}
                                        @endif
                                        " style="color:{{ $s }}"></i></li>
                                    @endforeach
                                </ul>
                            </div>
                            <p class="text-danger" style="height:20px;padding: 0px;">{{$checked}}</p>

                            <div class="add-tocart-wrap" wire:ignore>

                                <input wire:model="quantity" class="quantityQV" min="1" name="quantity" value="{{$quantity}}" type="number"/>
                                <a href="#{{$p->name}}" wire:click="addcart" class="add-to-cart"><i class="flaticon-shopping-purse-icon"></i>Add to Cart</a>

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
    </div>
</div>
