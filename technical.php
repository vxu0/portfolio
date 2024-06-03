<?php require 'partials/header.php'; ?>
<?php require 'partials/nav.php'; ?>

<main class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <p class="pb-6 text-lg text-gray-600 font-medium">technical projects</p>
    <div class="leading-loose text-base text-gray-600 font-normal space-y-4">

        <li>
            <span class='font-bold'>personal website (2024-04)</span>
            <span class="text-gray-400 italic"> — PHP, HTML, Tailwind CSS</span>
            <p class='pl-8'>you're here right now!</p>
        </li>

        <li>
            <a href='https://cravie.netlify.app' target='_blank' rel='noopener noreferrer'
                class='font-bold bg-blue-100 underline decoration-wavy decoration-gray-400 hover:bg-blue-200 hover:decoration-gray-500'>
                Cravie</a>
            <span class="text-gray-400 italic"> — React, Vite, TypeScript, Mantine, HTML, CSS</span>
            <p class='pl-8'>web application to help users decide what to eat</p>
        </li>

        <li>
            <span class='font-bold'>Single-Image Haze Removal (2023-03)</span>
            <span class="text-gray-400 italic"> — Python, Jupyter Notebook, Git</span>
            <p class='pl-8'>implementation of two image haze removal algorithms from research papers</p>
        </li>

        <li>
            <span class='font-bold'>Pixel Generators (2022-11)</span>
            <span class="text-gray-400 italic"> — Python, Flask, Docker, Git</span>
            <p class='pl-8'>microservices to generate pixelated images on a server in real time</p>
        </li>

    </div>
</main>

<?php require 'partials/footer.php'; ?>