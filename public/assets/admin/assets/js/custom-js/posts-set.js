// edit article
const btnE = document.querySelector("#btnEdit");
btnE.addEventListener("click", () => {
    document.querySelector("#title").removeAttribute("disabled");
    document.querySelector("#category_id").removeAttribute("disabled");
    document.querySelector("#penulis").removeAttribute("disabled");
    document.querySelector("#isi").removeAttribute("disabled");
    document.querySelector("#image").removeAttribute("disabled");
    const { ClassicEditor, Essentials, Bold, Italic, Font, Paragraph } =
        CKEDITOR;

    ClassicEditor.create(document.querySelector("#isi"), {
        plugins: [Essentials, Bold, Italic, Font, Paragraph],
        toolbar: [
            "undo",
            "redo",
            "|",
            "bold",
            "italic",
            "|",
            "fontSize",
            "fontFamily",
            "fontColor",
            "fontBackgroundColor",
        ],
    })
        .then(/* ... */)
        .catch(/* ... */);
    btnE.setAttribute("disabled", "");
    btnE.classList.remove("btn-primary");
    btnE.classList.add("btn-dark");
    document.querySelector("#btnS").classList.remove("d-none");
});
