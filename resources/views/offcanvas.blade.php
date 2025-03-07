<!-- <head> -->
<link rel="stylesheet" href="{{asset('assets/css/floating_button.css')}}" />
<script src="{{ asset('assets/js/checkout.js')}}"></script>
<!-- </head> -->
<!-- <body> -->
<div class="floating-button">
    <!-- <button type="button" class="btn btn-warning" data-bs-toggle=""> </button> -->
    <div class="offcanvas offcanvas-end" id="demo">
        <div class="offcanvas-header">
            <h1 class="offcanvas-title">Cart</h1>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <div id="cart-items">
                <p>No items in the cart.</p>
            </div>
            <button id="pay-button" class="btn btn-success" onclick="checkout()">Checkout</button>
            <button id="cash-button" class="btn btn-success" onclick="payWithCash()">Bayar dengan Cash</button>
        </div>
    </div>

    <!-- Button to open the offcanvas sidebar -->
    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
    Open Offcanvas Sidebar
    </button>
</div>

<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>

<!-- </body> -->