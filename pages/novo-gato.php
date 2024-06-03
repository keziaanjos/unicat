<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>Novo gato</h1>
<form action="?page=salvar" method="POST">
  <input type="hidden" name="acao" value="cadastrar">
  <div class="mb-3">
    <label>Nome</label>
    <input type="text" name="nome" id="" class="form-control" required maxlength="45">
  </div>
  <div class="mb-3">
    <label>Idade</label>
    <input type="number" name="idade" id="" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Sexo</label>
    <select name="sexo" id="" class="form-select" required>
      <option value="macho">Macho</option>
      <option value="fêmea">Fêmea</option>
    </select>
  </div>
  <div class="mb-3">
    <label>Peso</label>
    <input type="number" name="peso" id="" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Porte</label>
    <select name="porte" id="" class="form-select">
      <option value="pequeno">Pequeno</option>
      <option value="médio">Médio</option>
      <option value="grande">Grande</option>
    </select>
  </div>
  <div class="mb-3">
    <label>Personalidade</label>
    <select name="personalidade" id="" class="form-select" required>
      <option value="dócil">Dócil</option>
      <option value="tranquilo">tranquilo</option>
      <option value="raivoso">raivoso</option>
    </select>
  </div>
  <div class="mb-3">
    <label>Imagem URL</label>
    <input type="text" name="imagem" id="" class="form-control" required>
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>
</body>
</html>