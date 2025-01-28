<?php
$profiles = [
  [
    'avatar' => '/src/assets/avatar/foto-avatar.jpeg',

    'name' => 'Kelvin Kesley',

    'role' => 'Desenvolvedor Full Stack',

    'about' => 'Minha missão é transformar desafios em soluções digitais inovadoras e funcionais. Com paixão pela tecnologia, desenvolvo sistemas que solucionam problemas complexos de maneira eficiente e criativa.',

    'stack' => [
      'PHP' => 'purpleCustom',
      'Javascript' => 'yellowCustom ',
      'React' => 'cyan-400',
      'TailwindCSS' => 'sky-500',
      'CSS' => 'blueCustom',
      'HTML' => 'redCustom ',
      'GitHub' => 'greenCustom',

    ],
  ],
]
?>

<?php foreach ($profiles as $profile): ?>
  <div class="flex flex-col items-center">
    <div class="border-2 border-redCustom rounded-full mb-10">
      <img src="<?= $profile['avatar'] ?>" alt="Avatar" class="w-[150px] rounded-full p-1.5">
    </div>

    <section class="text-center">
      <h2 class="font-inconsolata text-xl leading-120">
        <p class="pb-3">&lt; Hello World! /&gt; </p>
        Meu nome é <span class="text-redCustom"><?= $profile['name'] ?></span> e sou
      </h2>

      <h1 class="font-asap font-bold text-[3.5rem] text-gray-600Custom leading-120 mt-2">
        <?= $profile['role'] ?>
      </h1>

      <p class="max-w-[600px] mt-5 font-maven text-base mx-auto text-gray-400Custom leading-140">
        <?= $profile['about'] ?>
      </p>
    </section>

    <div class="max-w-xl mt-20 flex gap-3 flex-wrap justify-center font-inconsolata leading-120 font-bold text-gray-200Custom">
      <?php foreach ($profile['stack'] as $language => $color): ?>
        <span class="px-3 py-1 bg-<?= $color ?> rounded-full">
          <?=
          $language
          ?>
        </span>
      <?php endforeach; ?>
    </div>
  </div>
<?php endforeach; ?>