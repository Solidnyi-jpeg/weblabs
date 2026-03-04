<?php

$siteTitle = "Start Tailwind";
$portfolioLink = "#";
$aboutLink = "#";
$contactLink = "#";
$heroImage = "https://static.wikia.nocookie.net/dota2_gamepedia/images/c/c3/Cosmetic_icon_Immortal_Treasure_II_2015.png/revision/latest?cb=20150528233228";
$heroHeading = "Start Tailwind";
$heroSubHeading = "Graphic Artist - Web Designer - Illustrator";
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title><?php echo $siteTitle; ?></title>
</head>
<body class="subpixel-antialiased font-Montserrat">


<nav class="sticky top-0 h-20 bg-[#243c5a] p-5 sm:px-24 xl:px-64">
  <div class="mx-auto flex justify-between items-center">
    <a href="<?php echo $portfolioLink; ?>"
       class="uppercase text-white text-xl xl:text-3xl font-bold whitespace-no-wrap font-Montserrat leading-normal tracking-tighter">
      <?php echo $siteTitle; ?>
    </a>
    <button class="block md:hidden uppercase inline-flex items-center bg-green-500 px-3 py-2 rounded-lg text-white">
      Menu 
      <svg class="h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
      </svg>
    </button>
    <div class="hidden md:block">
      <a href="<?php echo $portfolioLink; ?>" class="px-4 uppercase text-white text-base font-bold whitespace-no-wrap font-Montserrat leading-normal tracking-tighter hover:text-green-500">Portfolio</a>
      <a href="<?php echo $aboutLink; ?>" class="px-4 uppercase text-white text-base font-bold whitespace-no-wrap font-Montserrat leading-normal tracking-tighter hover:text-green-500">About</a>
      <a href="<?php echo $contactLink; ?>" class="px-4 uppercase text-white text-base font-bold whitespace-no-wrap font-Montserrat leading-normal tracking-tighter hover:text-green-500">Contact</a>
    </div>
  </div>
</nav>


<main>
  <section class="bg-green-500 py-32">
    <figure class="container px-16 pt-12 mx-auto">
      <img class="mb-12 h-64 mx-auto" src="<?php echo $heroImage; ?>" alt="Hero Image">
    </figure>
    <h1 class="text-center uppercase text-white text-5xl lg:text-6xl font-bold leading-none tracking-normal">
      <?php echo $heroHeading; ?>
    </h1>
    <div class="flex flex-row items-center justify-center py-4">
      <span class="h-1 w-24 bg-white rounded-full mx-2"></span>
      <span class="h-1 w-24 bg-white rounded-full mx-2"></span>
    </div>
    <p class="px-12 text-center text-white text-xl font-normal font-sans">
      <?php echo $heroSubHeading; ?>
    </p>
  </section>
</main>

</body>
</html>
