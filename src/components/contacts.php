<?php 
  $contacts = [
    [ 'href' => 'https://www.linkedin.com/in/kelvin-kesley/', 'icon' => 'linkedin-logo', 'text' => 'LinkedIn'],
    [ 'href' => 'https://github.com/DevKelvinK', 'icon' => 'github-logo', 'text' => 'GitHub'],
    [ 'href' => 'https://www.youtube.com/@KK-DoZeroAoSenior', 'icon' => 'youtube-logo', 'text' => 'Youtube'],
    [ 'href' => '/src/assets/curriculo-programacao.pdf', 'icon' => 'read-cv-logo', 'text' => 'Download CV'],
  ]
?>

<style>
  a:hover i:first-child,
  a:focus i:first-child {
    color: #3996DB;
  }
</style>

<nav class="mt-12">
  <ul class="flex flex-col gap-4">
    <?php foreach($contacts as $contact): ?>
      <li>
        <a href="<?=$contact['href'] ?>" target="_blank" class="py-5 px-5 inline-block flex items-center gap-3 w-[400px] bg-gray-300Custom rounded-lg hover:shadow-blueBorderHover focus:shadow-blueBorderHover outline-none duration-[300ms]">
          <i class="ph ph-<?=$contact['icon'] ?> text-gray-400Custom text-[28px] duration-[300ms]"></i>
          <span class="flex-1 font-maven leading-140">
            <?=$contact['text'] ?>
          </span>
          <i class="ph ph-arrow-up-right text-blueCustom text-[20px]"></i>
        </a>
      </li>
    <?php endforeach ?>
  </ul>
</nav>