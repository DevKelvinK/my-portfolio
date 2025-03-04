<?php

use Core\Database;

$database = new Database(config('database'));

$projectStacks = explode(', ', $project->stacks);
?>

<article class="group relative h-[400px] w-full sm:h-[300px] md:h-[500px] md:w-[400px] lg:h-[300px] lg:w-[508px] cursor-pointer outline-none overflow-hidden rounded-xl hover:shadow-blueBorderHover focus-within:shadow-blueBorderHover outline-none duration-[300ms]" tabindex="0">

  <!-- Border -->
  <div class="absolute inset-0 z-[2] w-full h-full border border-blueCustom rounded-xl overflow-hidden group-hover:z-[-1]"></div>

  <!-- Conteúdo -->
  <div class="absolute inset-0 z-[1]">
    <div class="absolute inset-0 w-full h-full py-3 px-5 opacity-100 group-hover:opacity-0 group-focus-within:opacity-0 transition-all duration-[700ms]">
      <!-- Infos  -->
      <div class="relative z-[2] flex flex-col justify-between gap-2 h-full justify-between px-1 py-2">
        <div class="flex gap-2 self-end bg-black-07 py-0.5 px-3 rounded-md font-inconsolata leading-120 font-bold text-xs text-white">
          <?php foreach ($projectStacks as $projectStack): ?>
            <img src="/assets/icons/<?= strtolower($projectStack) ?>.svg" alt="icon <?= $projectStack ?>" title="<?= $projectStack ?>" class="w-6">
          <?php endforeach; ?>
        </div>

        <div>
          <h3 class="font-asap leading-120 font-bold text-2xl text-white mb-2">
            <?= $project->title ?>
          </h3>

          <p class="description font-maven text-base leading-140 text-white">
            <?= $project->description ?>
          </p>
        </div>
      </div>

      <!-- Shadding -->
      <div class="shadingCards absolute z-[1] inset-[0] w-full h-full"></div>
    </div>

    <div class="flex flex-col gap-2 justify-between absolute inset-0 w-full h-full p-3 pt-6 bg-black-08 opacity-0 group-hover:opacity-100 group-focus-within:opacity-100 transition-all duration-[1s]">
      <div class="flex flex-col gap-2 items-center">
        <h3 class="font-asap leading-120 font-bold text-center text-2xl text-white">
          <?= $project->title ?>
        </h3>

        <p class="font-maven text-base text-center leading-140 text-white w-[90%]">
          <?= $project->description ?>
        </p>

        <div class="flex gap-2">
          <?php foreach ($projectStacks as $projectStack): ?>
            <img src="/assets/icons/<?= strtolower($projectStack) ?>.svg" alt="icon <?= $projectStack ?>" title="<?= $projectStack ?>" class="w-6">
          <?php endforeach; ?>
        </div>
      </div>


      <div class="flex gap-4 mb-3 justify-center">
        <a href="<?= $project->page ?>" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 rounded-md bg-blueCustom py-1 px-4 text-white font-maven outline-none hover:bg-white hover:text-blueCustom focus:bg-white focus:text-blueCustom transition-all duration-[500ms]">
        <i class="ph ph-globe"></i>
          WEBSITE
        </a>

        <a href="<?= $project->repository ?>" target="_blank" rel="noopener noreferrer" class="rounded-md bg-blueCustom py-1 px-4 text-white font-maven outline-none hover:bg-white hover:text-blueCustom focus:bg-white focus:text-blueCustom transition-all duration-[500ms]">
          <i class="ph ph-github-logo"></i>  
          REPOSITÓRIO
        </a>
      </div>
    </div>
  </div>

  <!-- Image -->
  <div class="w-full h-full bg-[url('/assets/images/covers/<?= $project->cover ?>')] bg-cover bg-top group-focus-within:scale-[1.1] group-hover:scale-[1.1] group-hover:bg-bottom group-focus-within:bg-bottom transition-all duration-[6s]"></div>
</article>