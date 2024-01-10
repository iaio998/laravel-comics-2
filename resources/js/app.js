import "./bootstrap";
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**"]);
const buttonDelete = document.querySelectorAll(".my-btn-dlt");

// Funzione Delete
buttonDelete.forEach((button) => {
    button.addEventListener("click", (event) => {
        // impedisco invio form
        event.preventDefault();
        // prendo valore
        const dataTitle = button.getAttribute("data-item-title");
        // prendo elemento per titolo
        const title = document.querySelector("#modal-item-title");
        // inserisco il titolo
        title.textContent = dataTitle;

        // mostro modal
        const modal = document.getElementById("deleteModal");
        const bootstrapModal = new bootstrap.Modal(modal);
        bootstrapModal.show();
        // prendo il button per confermare l'eliminazione
        const confirmDelete = modal.querySelector("button.btn-primary");

        confirmDelete.addEventListener("click", (event) => {
            button.parentElement.submit();
        });
    });
});
