document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contactForm");

    if (!form) return;

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        const formData = new FormData(form);

        fetch("http://localhost/form_template_project/form_template/public/php/process-form.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                Swal.fire("Başarılı!", data.message, "success");
                form.reset();
            } else {
                Swal.fire("Hata!", data.message, "error");
            }
        })
        .catch(error => {
            console.error("Hata:", error);
            Swal.fire("Hata!", "Bir sorun oluştu!", "error");
        });
    });
});
