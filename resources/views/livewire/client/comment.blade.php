<div class="raing-form">
    @error('cmt') <span class="text-danger">{{ $message }}</span> @enderror
    @error('noacc') <span class="text-danger">{{ $message }}</span> @enderror
    <textarea wire:model.debounce.500ms="cmt" name="rating-form" placeholder="Your comment"></textarea>
    <input wire:click="addCmt" type="submit">
</div>
