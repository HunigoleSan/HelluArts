window.document.addEventListener("DOMContentLoaded", () => {
    let $icon_main_user = document.getElementById("icon-main-user");
    let $access_active = document.getElementById("access-active");
    let $modal_main_user = document.getElementById("modal-main-user");

    $icon_main_user.addEventListener("click", () => {
        $modal_main_user.classList.toggle("show-main-user");
        $modal_main_user.classList.remove("main-user-active");
    });

    if ($access_active) {
        $access_active.addEventListener("click", () => {
            $modal_main_user.classList.toggle("main-user-active");
        });
    }
});
