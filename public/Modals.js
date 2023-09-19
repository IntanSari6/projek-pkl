// Tambahkan event listener untuk membuka modal saat tombol "Launch demo modal" diklik
const launchButton = document.getElementById("launchButton");
const myModal = new bootstrap.Modal(document.getElementById("myModal"));

launchButton.addEventListener("click", () => {
    myModal.show();
});

$(document).ready(function () {
    $("#myModal").on("input", ".email", function () {
        if ($(this).val() !== "") {
            $("#login-button").css("background-color", "rgb(0, 151, 50)");
        } else {
            $("#login-button").css("background-color", "rgb(221, 212, 212)");
        }
    });
});
