@extends('layout.default')
@section('content')

<main id="main">
    <section class="h-100 h-custom cart" id="cart">
        <!-- login form container  -->

        <div class="container">
            @livewire('takeinfor')
        </div>

            @livewire('truecart')

      </section>


</main>

@endsection
