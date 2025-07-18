<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agendamento de Exame Ocupacional</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="funcao.js"></script>
  </head>
  <body class="bg-light py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
          <div class="card shadow-sm">
            <div class="card-body">
             <h2 class="card-title text-center mb-4">Agendamento para perícia médica - Segurança do trabalho</h2>
              <h2 class="card-title text-center mb-4">Formulário de Agendamento</h2>

              <form action="processar_agendamento.php" name="formAgenda" id="formAgenda" 
                            method="POST" onsubmit="return validarCampos(document.formAgenda)";>
                <div class="mb-3">
                  <label for="nome_servidor" class="form-label">Nome do Servidor</label>
                  <input type="text" class="form-control" id="nome_servidor" name="nome_servidor" maxlength="100" required>
                </div>
                <div class="mb-3">
                  <label for="tipo" class="form-label">Tipo de Usuário</label>
                  <select id="tipo" name="tipo_de_usuario" class="form-select" required>
                    <option value="">-- Selecione --</option>
                    <option value="consulta">Servidor público</option>
                    <option value="atestado">Acompanhante</option>
                  </select>
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label">E-mail</label>
                  <input type="email" class="form-control" id="email" name="email" maxlength="100" required>
                </div>

                <div class="mb-3">
                  <label for="tipo" class="form-label">Tipo de Atendimento</label>
                  <select id="tipo" name="tipo" class="form-select" required>
                    <option value="">-- Selecione --</option>
                    <option value="consulta">Consulta</option>
                    <option value="atestado">Atestado</option>
                  </select>
                </div>

                <div class="mb-3">
                  <label for="data_agendamento" class="form-label">Data do Agendamento</label>
                  <input type="date" class="form-control" id="data_agendamento" name="data_agendamento" required>
                </div>

                <div class="mb-3">
                  <label for="turno" class="form-label">Turno</label>
                  <select id="turno" name="turno" class="form-select" required>
                    <option value="">-- Selecione --</option>
                    <option value="manhã">Manhã</option>
                    <option value="tarde">Tarde</option>
                  </select>
                </div>

                
                <div class="mb-3">
                  <label for="horario" class="form-label">Horário</label>
                  <input type="time" class="form-control" id="horario" name="horario" step="600" required>
                </div>

                <div class="mb-4">
                  <label for="status" class="form-label">Status</label>
                  <select id="status" name="status" class="form-select" required>
                    <option value="confirmado" selected>Confirmado</option>
                    <option value="cancelado">Cancelado</option>
                    <option value="alterado">Alterado</option>
                  </select>
                </div>

                <div class="d-flex justify-content-between">
                  <button type="submit" class="btn btn-primary">Agendar</button>
                  <button type="reset" class="btn btn-secondary">Limpar</button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>
