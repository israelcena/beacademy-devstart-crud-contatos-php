<form action="" method="post">
  <div class="container col-xl-3 mt-5">
    <!-- Name input -->
    <div class="form-outline mb-4">
      <input type="text" id="name" name="name" class="form-control" placeholder="ex: Fulano da Silva" required />
      <label class="form-label" for="name">Nome completo</label>
    </div>

    <!-- Email input -->
    <div class="form-outline mb-4">
      <input type="email" id="email" name="email" class="form-control" placeholder="ex: fulano@email.com.br" required />
      <label class="form-label" for="email">Endereço de E-mail</label>
    </div>

    <!-- Phone input -->
    <div class="form-outline mb-4">
      <input type="tel" id="phone" name="phone" class="form-control" placeholder="ex: 21-65465555" pattern="[0-9]{2}-[0-9]{8}" required />
      <label class="form-label" for="phone">Telefone com DDD</label>
    </div>

    <!-- Accept input -->
    <div class="form-check d-flex justify-content-center mb-4">
      <input class="form-check-input me-2" type="checkbox" id="checkbox" checked />
      <label class="form-check-label" for="checkbox">
        Confirmo que todos os dados estão corretos
      </label>
    </div>
  </div>
  <!-- Submit button -->
  <div class="text-center">
    <button class=" btn btn-primary btn-block mb-4 ">Cadastrar</button>
  </div>
</form>