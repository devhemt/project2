<div>
    <div class="sidebar-widget sidebar-search">
        <input type="text" placeholder="Search Product...." wire:model="autoSearch" value="{{ $searching }}">
        <button type="submit" wire:click="search()"><i class="fas fa-search"></i></button>
    </div>
    <div class="sidebar-widget category-widget">
        <h6>PRODUCT CATEGORIES</h6>
        <ul>
            <li><a wire:click="find(2)">Woman Clothing </a> <span>(19)</span></li>
            <li><a wire:click="find(1)">Man Clothing </a> <span>(15)</span></li>
            <li><a wire:click="find(3)">kid Clothing </a> <span>(59)</span></li>
            <li><a wire:click="find(4)">Accessories </a> <span>(29)</span></li>
            <li><a wire:click="find(5)">Others Clothing </a> <span>(56)</span></li>
        </ul>
    </div>
</div>
