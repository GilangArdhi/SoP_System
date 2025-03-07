function payWithCash() {
    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    console.log("Cart before checking:", cart);

    if (cart.length === 0) {
        alert("Keranjang kosong!");
        return;
    }

    // Nonaktifkan tombol agar tidak bisa double submit
    const payButton = document.getElementById("pay-button");
    if (payButton) payButton.disabled = true;

    fetch('/cash-payment', {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({ cart, payment_method: "cash" })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert("Pembayaran berhasil! Silakan serahkan uang tunai ke kasir.");

            // Bersihkan localStorage dan array cart
            localStorage.removeItem("cart");
            // cart = [];

            // Perbarui tampilan cart
            renderCart();

            // Arahkan ke halaman struk
            window.location.href = "/receipt/" + data.order_id;
        } else {
            alert("Terjadi kesalahan, coba lagi!");
        }
    })
    .catch(error => {
        console.error("Error processing payment:", error);
        alert("Terjadi kesalahan jaringan. Coba lagi nanti.");
    })
    .finally(() => {
        // Aktifkan kembali tombol pembayaran setelah request selesai
        if (payButton) payButton.disabled = false;
    });
}


function checkout(){
    let cart = JSON.parse(localStorage.getItem("cart")) || [];

    if (cart.length === 0){
        alert("Keranjang Kosong!!");
        return;
    }

    // Nonaktifkan button agar tidak bisa double submit
    const checkoutBtn = document.getElementById("cash-button");
    if (checkoutBtn) checkoutBtn.disabled = true;

    fetch('/midtrans/transaction', {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({ cart })
    })
    .then(response => {
        if (!response.ok) {
            throw new Error("Server returned an error: " + response.status);
        }
        return response.json(); // Hanya parse JSON jika tidak error
    })
    .then(data => {
        if (data.success) {
            alert("Pembayaran berhasil!");
            localStorage.removeItem("cart");
            window.location.href = "/receipt/" + data.order_id;
        } else {
            alert("Gagal: " + data.message);
        }
    })
    .catch(error => {
        console.error("Error processing payment:", error);
        alert("Terjadi kesalahan. Silakan coba lagi.");
    })
    .finally(() => {
        // Aktifkan kembali tombol pembayaran setelah request selesai
        if (checkoutBtn) checkoutBtn.disabled = false;
    });
}