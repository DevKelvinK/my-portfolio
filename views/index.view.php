<header class="sticky top-0 bg-gray-200Custom z-[99]">
  <div class="flex justify-center sm:justify-between items-center w-full py-8 px-[8%]">
    <a href="#aboutMe"><img src="/assets/icons/logo-BGP.jpg" alt="Logo KK" class="w-[50px] hidden sm:block" /></a>

    <nav class="flex justify-center items-center gap-6 font-inconsolata text-xl text-white">
      <a href="#aboutMe" class="anchor activeAnchor">Sobre mim</a>
      <a href="#projects" class="anchor">Projetos</a>
      <a href="#contacts" class="anchor">Contatos</a>
    </nav>
  </div>
</header>

<section id="aboutMe" class="sections bg-intro bg-cover bg-no-repeat bg-top pt-28 sm:py-32">
  <?php include(base_path('/views/components/hero.component.php')); ?>
</section>

<main id="projects" class="sections flex flex-col gap-8 px-4 pt-28 pb-36 flex flex-col gap-8">
  <div class="text-center leading-120 mt-6">
    <h2 class="font-inconsolata text-xl text-blueCustom mb-2">Meu trabalho</h2>
    <h3 class="font-asap font-bold text-2xl text-gray-600Custom">Veja os projetos em destaque</h3>
  </div>

  <?php include(base_path('views/components/projects.component.php')); ?>
</main>

<footer id="contacts" class="sections flex flex-col items-center bg-contacts bg-cover bg-no-repeat bg-bottom px-4 pt-32 pb-[12.5rem]">
  <div class="flex flex-col gap-2 text-center mb-12">
    <h2 class="font-inconsolata text-xl text-blueCustom leading-120">Contato</h2>
    <h3 class="font-asap text-2xl text-gray-600Custom leading-120 font-bold">Gostou do meu trabalho? </h3>
    <p class="font-maven leading-140">
      Entre em contato ou acompanhe as minhas redes sociais!
    </p>
  </div>

  <?php include(base_path('/views/components/contacts.component.php')); ?>
</footer>