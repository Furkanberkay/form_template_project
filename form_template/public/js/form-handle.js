document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contactForm");
    
    if (!form) return;

    form.addEventListener("submit", function (e) {
        e.preventDefault(); // Formun kendi kendine sayfa yenilemesini engeller

        const formData = new FormData(form); // Tüm input, textarea verilerini alır

        // Veriyi fetch ile PHP'ye gönderiyoruz
        fetch("public/php/process-form.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.json()) // PHP'den JSON dönerse yakalarız
        .then(data => {
            if (data.success) {
                Swal.fire("Başarılı!", data.message, "success");
                form.reset(); // Formu temizle
            } else {
                Swal.fire("Hata!", data.message, "error");
            }
        })
        .catch(error => {
            console.error("Hata oluştu:", error);
            Swal.fire("Hata!", "Bir hata oluştu, lütfen tekrar deneyin.", "error");
        });
    });
});
