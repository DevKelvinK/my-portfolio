<div class="mx-auto flex flex-col">
  <?php
  $sessions = [
    'Full Stack' => 'border-t border-r border-blueCustom rounded-tr-lg pb-8 sm:pr-8 sm:pl-4 pr-5 pl-3',
    'Front-end' => 'border-t border-l border-blueCustom rounded-tl-lg pb-8 sm:pr-4 sm:pl-8 pr-3 pl-5',
    'Mentor' => 'border-t border-r border-blueCustom rounded-tr-lg pb-10 sm:pr-8 sm:pl-4 pr-5 pl-3'
  ];

  foreach ($sessions as $session => $classes): ?>
    <div class="<?php echo $classes; ?>">
        <h2 class="text-center font-inconsolata font-bold leading-120 text-2xl py-4 capitalize">
          <span class="text-blueCustom font-normal">//</span> <?php echo ($session == "Mentor") ? "Desafios Frontend Mentor" : $session;  ?>
        </h2>
        
        <div id="<?php echo ($session == "Full Stack") ? "Full-stack" : $session;  ?>" class=" pt-3">
          <div class="mx-auto grid grid-cols-1 md:grid-cols-2 gap-6">
            <?php foreach ($projects as $project): ?>
              <?php if ($project->session == $session): ?>
                <?php include(base_path('/views/partials/_cardProject.php')); ?>
              <?php endif; ?>
            <?php endforeach; ?>
          </div>
        </div>

        <?php if ($session == "Full Stack"): ?>
          <p class="text-center font-inconsolata leading-120 text-white mt-6"><span class="text-blueCustom">* OBS:</span> Este portfólio também foi totalmente desenvolvido por mim.</p>
  
          <div class="flex items-center justify-center mt-1">
            
            <a href="https://github.com/DevKelvinK/my-portfolio" target="_blank" rel="noopener noreferrer" class="font-maven mt-1 px-2 text-white rounded-md outline-none hover:text-blueCustom hover:underline focus:underline focus:text-blueCustom focus:outline-blueCustom duration-[300ms]">
              <i class="ph ph-github-logo text-blueCustom text-lg"></i> 
              Repositório do portfólio
            </a>
          </div>
        <?php endif; ?>
    </div>
  <?php endforeach; ?>

  <!-- Colocar reticências no texto da descrição -->
  <script>
    const descriptions = document.querySelectorAll(".description");

    descriptions.forEach((text) => {
      // console.log(text.innerHTML.length);
      if (text.innerHTML.length > 185) {
        text.innerHTML = text.innerHTML.substring(0, 185) + "...";
      }
    });
  </script>
</div>