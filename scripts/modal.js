const infosGatos = document.querySelectorAll('.infos-cat-2');
const fecharModal = document.querySelectorAll('.close-dialog')

Array.from(infosGatos).forEach((i) => {
  i.addEventListener('click', (event) => {
    const idBotao = event.target.id
    const acharDialog = document.querySelector(`dialog[id="${idBotao}"]`)
    if(acharDialog) {
      acharDialog.showModal()
    }
    
  })
})

Array.from(fecharModal).forEach((i) => {
  i.addEventListener("click", (event) => {
    event.target.parentElement.parentElement.close();
  })
})