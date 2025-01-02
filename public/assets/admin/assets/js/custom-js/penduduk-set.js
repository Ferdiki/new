const btnE = document.querySelector("#btnEdit");
btnE.addEventListener("click", () => {
    document.querySelector("#nik").removeAttribute("disabled");
    document.querySelector("#nama").removeAttribute("disabled");
    document.querySelector("#status").removeAttribute("disabled");
    document.querySelector("#pekerjaan").removeAttribute("disabled");
    document.querySelector("#pendidikan_akhir").removeAttribute("disabled");
    document.querySelector("#nama_ibu").removeAttribute("disabled");
    document.querySelector("#nama_ayah").removeAttribute("disabled");
    document.querySelector("#no_kk").removeAttribute("disabled");
    document.querySelector("#nm_kepala_kel").removeAttribute("disabled");
    document.querySelector("#alamat").removeAttribute("disabled");
    btnE.setAttribute("disabled", "");
    btnE.classList.remove("btn-primary");
    btnE.classList.add("btn-dark");
    document.querySelector("#btnS").classList.remove("d-none");
});
