<div class="visitor-form-container" style="top:{{$top}};">

    <i wire:click="close" class="fas fa-times" id="form-close"></i>

    <form action="">
        <h3>Your information</h3>
        <input name="name" type="text" class="box" placeholder="enter your name">
        <input name="email" type="email" class="box" placeholder="enter your email">
        <input name="phone" type="tel" class="box" placeholder="enter your phone">
        <input name="address" type="text" class="box" placeholder="enter your address">
        <input type="submit" value="buy now" class="btn">
        <p for="remember">Because you don't have an account, we need you to provide your personal information in order to confirm the order.</p>
    </form>

</div>
