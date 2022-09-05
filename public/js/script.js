function voltar() {
  window.location.href = "http://localhost/php/HelpDask/public/views/home.php";
}

function abrirChamado() {
  window.location.href =
    "http://localhost/php/HelpDask/public/views/abrir_chamado.php";
}

function consultarChamado() {
  window.location.href =
    "http://localhost/php/HelpDask/public/views/consultar_chamado.php";
}

function salvar(event) {
  const title = document.getElementById("title");
  const categoria = document.getElementById("categoria");
  const descricao = document.getElementById("descricao");

  if (!title.value) {
    title.classList.add("is-invalid");
    event.preventDefault();
    return;
  } else {
    title.classList.remove("is-invalid");
    title.classList.add("is-valid");
  }

  if (!categoria.value) {
    categoria.classList.add("is-invalid");
    event.preventDefault();
    return;
  } else {
    categoria.classList.remove("is-invalid");
    categoria.classList.add("is-valid");
  }

  if (!descricao.value) {
    descricao.classList.add("is-invalid");
    event.preventDefault();
    return;
  } else {
    descricao.classList.remove("is-invalid");
    descricao.classList.add("is-valid");
  }
}
