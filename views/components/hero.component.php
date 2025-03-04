  <div class="flex flex-col items-center">
    <div class="border-2 border-blueCustom rounded-full mb-10">
      <img src="/assets/avatar/foto-avatar.png" alt="Avatar" class="w-[150px] rounded-full p-1.5">
    </div>

    <section class="text-center">
      <h2 class="font-inconsolata text-xl leading-120">
        <p class="pb-3">&lt; Hello World! /&gt; </p>
        Meu nome é <span class="text-blueCustom"><?= $user->name ?></span> e sou
      </h2>

      <h1 class="font-asap font-bold text-[3rem] sm:text-[3.5rem] text-gray-600Custom leading-120 mt-2">
        Desenvolvedor
        <span class="whitespace-nowrap"><?= $user->role ?></span>
      </h1>

      <p class="max-w-[600px] mt-5 px-3 font-maven text-base mx-auto text-gray-400Custom leading-140">
        <?= $user->about ?>
      </p>
    </section>

    <div class="max-w-2xl mt-20 px-3 flex gap-3 flex-wrap justify-center font-inconsolata leading-120 font-bold text-gray-200Custom">
      <?php foreach ($stacks as $stack): ?>
        <span class="px-3 py-1 bg-<?= $stack->color ?> rounded-full">
          <?=
          $stack->stack
          ?>
        </span>
      <?php endforeach; ?>
    </div>
  </div>