<?php include_once __DIR__ . '/../../partials/head.php';  ?>


<div class="w-full h-dvh flex items-center justify-center ">
  <div class="bg-white p-8 rounded-lg max-w-sm mx-auto shadow-lg w-full">
    <form action="/register" method="POST" class="flex flex-col gap-4 w-full">
      <h1 class="text-2xl font-bold text-center text-primary">Nova Agência</h1>
      <p class="text-slate-500 text-center">Crie sua Agência</p>

      <input type="text" id="agency-name" placeholder="Nome da Agência" class="input w-full input-primary" />
      <hr class="border-primary">
      <input type="text" id="name" placeholder="Seu Nome" class="input w-full input-primary" />
      <input type="email" id="email" placeholder="Seu Email" class="input w-full input-primary" />
      <input type="password" id="password" placeholder="Sua Senha" class="input w-full input-primary" />
      <button type="submit" class="btn btn-primary">Login</button>

    </form>
    <div class="mt-4 w-full text-center">
      <a href="/login">
        <p class="text-primary">Acessar Agência</p>
      </a>
    </div>

  </div>
</div>

<?php include_once __DIR__ . '/../../partials/end.php';  ?>