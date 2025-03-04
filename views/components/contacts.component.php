<nav>
  <ul class="flex flex-col gap-4">
    <?php foreach($contacts as $contact): ?>
      <li class="w-[340px] sm:w-[400px]">
        <a id="<?php echo ($contact->text == "Download CV") ? "cv": "$contact->text" ?>" href="<?=$contact->href ?>" rel="noopener noreferrer" target="_blank" class="group py-5 px-5 flex items-center gap-3 bg-gray-300Custom rounded-lg hover:shadow-blueBorderHover focus:shadow-blueBorderHover outline-none duration-[300ms]">
          <i class="ph ph-<?=$contact->icon ?> text-gray-400Custom text-[28px] duration-[300ms] group-hover:text-[#3996DB] group-focus:text-[#3996DB]"></i>
          <span class="flex-1 font-maven leading-140">
            <?=$contact->text ?>
          </span>
          <i class="ph ph-arrow-up-right text-blueCustom text-[20px]"></i>
        </a>
      </li>
    <?php endforeach ?>
  </ul>
</nav>