<?php
$title = 'About';
$sectionClass = 'bg-green-500 -mt-12 py-16';
$buttonText = 'Free Download!';
$buttonLink = '#'; 
?>

<section class="<?php echo $sectionClass; ?>">
    <h1 class="text-center uppercase text-white text-4xl font-bold leading-none tracking-normal">
      <?php echo $title; ?>
    </h1>
    <div class="flex flex-col lg:flex-row max-w-lg md:max-w-2xl lg:max-w-3xl mx-auto">
      <div class="mx-6 text-white text-xl py-4">
        Freelancer is a free tailwind css theme created from Freelancer theme by Start Bootstrap.
        The entire template was written using only the default configuration file.
      </div>
      <div class="mx-6 text-white text-xl py-4">
        You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email
        address to the contact form to make it fully functional!
      </div>
    </div>
    <div class="flex justify-center py-8">
      <a href="<?php echo $buttonLink; ?>" class="bg-transparent hover:bg-white hover:text-black text-white border-2 border-white font-normal py-3 px-5 rounded-lg inline-flex items-center">
        <span><?php echo $buttonText; ?></span>
      </a>
    </div>
</section>
