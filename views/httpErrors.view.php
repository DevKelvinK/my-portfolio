<div class="flex flex-col items-center mt-72 text-center text-white overflow-hidden">
  <h1 class="text-9xl">
    Error <span class="text-redCustom"><?= $code ?></span>
  </h1>

  <p class="text-xl mt-8 text-gray-6">
    Página não encontrada.
  </p>

  <button
    type="button"
    class="bg-[#E3646E] uppercase font-medium text-xl mt-6 px-4 py-2 rounded outline-none focus:bg-[#e0707a] hover:bg-[#e0707a]"
    onclick="window.history.back()">
    Voltar
  </button>
</div>