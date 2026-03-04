<?php

$location = "вулиця Вишиванка, 35, Рівне, Рівненська область, 33027";
$aboutText = "Freelance is a free to use, MIT licensed Tailwindcss theme created by ";
$authorName = "Francesco Mansi";
$copyrightText = "full Copyright © Website " . date("Y"); 


$socialLinks = [
    "twitter" => "https://twitter.com",
    "facebook" => "https://facebook.com",
    "instagram" => "https://instagram.com",
    "linkedin" => "https://linkedin.com"
];
?>

<section class="bg-gray-800 -mt-12 py-16">
    <div class="flex flex-col md:flex-row text-white text-center">
      
        <div class="p-6 md:w-1/3">
            <h1 class="uppercase text-2xl font-bold leading-none tracking-normal pb-5">Location</h1>
            <p><?php echo $location; ?></p>
        </div>

        <div class="p-6 md:w-1/3">
            <h1 class="uppercase text-2xl font-bold leading-none tracking-normal">Around the web</h1>
            <div class="flex justify-center py-5">
                <?php
                foreach ($socialLinks as $platform => $link) {
                    echo '<span class="items-center rounded-full border-2 p-3 hover:bg-white mx-1">
                            <a href="' . $link . '" target="_blank">
                                <svg class="fill-current w-5 h-5 hover:text-blue-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <title>' . ucfirst($platform) . '</title>
                                </svg>
                            </a>
                          </span>';
                }
                ?>
            </div>
        </div>
    </div>
</section>

<footer class="bg-gray-900 h-16">
    <p class="pt-5 text-center text-white"><?php echo $copyrightText; ?></p>
    <p class="pt-2 text-center text-white">Location: <?php echo $location; ?></p> 
</footer>

</body>
</html>
