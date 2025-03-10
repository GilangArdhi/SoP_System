

//menggunakan ajax
function payWithCash() {
    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    console.log("Cart before checking:", cart);

    if (cart.length === 0) {
        alert("Keranjang kosong!");
        return;
    }

    const payButton = $("#pay-button");
    payButton.prop("disabled", true);

    $.ajax({
        url: "/cash-payment",
        method: "POST",
        data: JSON.stringify({ cart: cart, payment_method: "cash" }),
        contentType: "application/json",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        },
        success: function(data) {
            console.log("Cash Payment Response:", data);
            if (data.success) {
                alert("Pembayaran berhasil! Silakan serahkan uang tunai ke kasir.");
                localStorage.removeItem("cart");
                // window.location.href = "/receipt/" + data.order_id;
                window.location.href = "/";
            } else {
                alert("Terjadi kesalahan: " + (data.message || "Coba lagi!"));
            }
        },
        error: function(xhr, status, error) {
            console.error("AJAX Error:", xhr.responseText);
            alert("Terjadi kesalahan saat memproses pembayaran.");
        },
        complete: function() {
            payButton.prop("disabled", false);
        }
    });
}

//menggunakan ajax
function checkout(){
    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    console.log("Cart before checkout:", cart); // Debugging

    if (cart.length === 0){
        alert("Keranjang Kosong!!");
        return;
    }

    const checkoutBtn = $("#cash-button");
    checkoutBtn.prop("disabled", true); // Nonaktifkan tombol untuk mencegah double submit

    $.ajax({
        url: "/midtrans/transaction",
        method: "POST",
        data: JSON.stringify({ cart: cart }),
        contentType: "application/json",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        },
        success: function(data) {
            console.log("Midtrans Response:", data); // Debugging
            snap.pay(data.snap_token, {
                onSuccess: function (result) {
                    console.log(result);
                    localStorage.removeItem("cart");
                    console.log("Cart after checkout:", cart);
                    
                    // location.reload();
                    window.location.href = "/";
                },
                onPending: function (result) {
                    console.log(result);
                    alert("Gagal: " + (data.message || "Terjadi kesalahan"));
                  // location.reload();
                },
                onError: function (result) {
                    console.log(result);
                  // location.reload();
                }
            });
            // if (data.success) {
            //     alert("Pembayaran berhasil!");
            //     localStorage.removeItem("cart");
            //     window.location.href = "/receipt/" + data.order_id;
            // } else {
            //     alert("Gagal: " + (data.message || "Terjadi kesalahan"));
            // }
        },
        error: function(xhr, status, error) {
            console.error("AJAX Error:", xhr.responseText); // Debugging
            alert("Terjadi kesalahan saat memproses transaksi.");
        },
        complete: function() {
            checkoutBtn.prop("disabled", false); // Aktifkan kembali tombol setelah request selesai
        }
    });
}


//menggunakan fetch *masih error
// function payWithCash() {
//     let cart = JSON.parse(localStorage.getItem("cart")) || [];
//     console.log("Cart before checking:", cart);

//     if (cart.length === 0) {
//         alert("Keranjang kosong!");
//         return;
//     }

//     // Nonaktifkan tombol agar tidak bisa double submit
//     const payButton = document.getElementById("pay-button");
//     if (payButton) payButton.disabled = true;

//     const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;
//     console.log("CSRF Token:", csrfToken); // Debugging

//     fetch('/cash-payment', {
//         method: "POST",
//         headers: {
//             "Content-Type": "application/json",
//             "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
//         },
//         body: JSON.stringify({ cart, payment_method: "cash" })
//     })
//     .then(response => response.json())
//     .then(data => {
//         if (data.success) {
//             alert("Pembayaran berhasil! Silakan serahkan uang tunai ke kasir.");

//             // Bersihkan localStorage dan array cart
//             localStorage.removeItem("cart");
//             // cart = [];

//             // Perbarui tampilan cart
//             renderCart();

//             // Arahkan ke halaman struk
//             // window.location.href = "/receipt/" + data.order_id;
//         } else {
//             alert("Terjadi kesalahan, coba lagi!");
//         }
//     })
//     .catch(error => {
//         console.error("Error processing payment:", error);
//         alert("Terjadi kesalahan jaringan. Coba lagi nanti.");
//     })
//     .finally(() => {
//         // Aktifkan kembali tombol pembayaran setelah request selesai
//         if (payButton) payButton.disabled = false;
//     });
// }

//menggunakan fetch *masih error
// function checkout(){
//     let cart = JSON.parse(localStorage.getItem("cart")) || [];
//     console.log("Cart before checkout:", cart); // debugging
//     if (cart.length === 0){
//         alert("Keranjang Kosong!!");
//         return;
//     }

//     // Nonaktifkan button agar tidak bisa double submit
//     const checkoutBtn = document.getElementById("cash-button");
//     if (checkoutBtn) checkoutBtn.disabled = true;

//     const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;
//     console.log("CSRF Token:", csrfToken); // Debugging

//     fetch('/midtrans/transaction', {
//         method: "POST",
//         headers: {
//             "Content-Type": "application/json",
//             "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
//         },
//         body: JSON.stringify({ cart })
//     })
//     .then(response => {
//         if (!response.ok) {
//             throw new Error("Server returned an error: " + response.status);
//         }
//         return response.json(); // Hanya parse JSON jika tidak error
//     })
//     .then(data => {
//         if (data.success) {
//             alert("Pembayaran berhasil!");
//             localStorage.removeItem("cart");
//             // window.location.href = "/receipt/" + data.order_id;
//         } else {
//             alert("Gagal: " + data.message);
//         }
//     })
//     .catch(error => {
//         console.error("Error processing payment:", error);
//         alert("Terjadi kesalahan. Silakan coba lagi.");
//     })
//     .finally(() => {
//         // Aktifkan kembali tombol pembayaran setelah request selesai
//         if (checkoutBtn) checkoutBtn.disabled = false;
//     });
// }