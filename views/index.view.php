<header class="bg-intro bg-cover bg-no-repeat bg-top py-32">
  <?php include(base_path('/views/components/hero.component.php')); ?>
</header>

<main class="pt-[4.5rem] pb-36 flex flex-col gap-8">
  <div class="text-center">
    <h2 class="font-inconsolata leading-120 text-xl text-blueCustom mb-2">Meu trabalho</h2>
    <h3 class="font-asap leading-120 font-bold text-2xl text-gray-600Custom">Veja os projetos em destaque</h3>
  </div>

  <?php include(base_path('views/components/projects.component.php')); ?>
</main>

<footer class="bg-contacts bg-cover bg-no-repeat bg-bottom flex flex-col items-center px-[7.5rem] pt-32 pb-[12.5rem]">
  <div class="flex flex-col gap-2 text-center">
    <h2 class="font-inconsolata text-xl text-blueCustom leading-120">Contato</h2>
    <h3 class="font-asap text-2xl text-gray-600Custom leading-120 font-bold">Gostou do meu trabalho? </h3>
    <p class="font-maven leading-140">
      Entre em contato ou acompanhe as minhas redes sociais!
    </p>
  </div>

  <?php include(base_path('/views/components/contacts.component.php')); ?>
</footer>