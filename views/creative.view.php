<?php require 'partials/header.php'; ?>
<?php require 'partials/nav.php'; ?>
<?php require 'partials/title.php'; ?>

<main class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <div class="leading-loose text-base text-gray-600 italic font-normal">
        <div class='grid gap-4 grid-cols-3 justify-items-center items-center'>
        
            <div>
                <img src='images/corner.jpeg' alt='Corner (2020)' class='max-h-96 border-2 border-blue-100 shadow-lg' style='pointer-events:none'/>
                <p class='font-bold text-center'>Corner (2020)</p>
            </div>
            
            <div class='max-h-96 max-w-96 bg-blue-200 bg-opacity-25 border-2 border-blue-100 shadow-lg p-6' style="overflow-y:scroll;">
                <p class='font-bold text-center'>Lost</p>
                <p class='font-normal font-serif'><?= nl2br(file_get_contents('notes/lost.txt')) ?></p>
            </div>

            <div>
                <img src='images/construction.jpeg' alt='Construction (2021)' class='max-h-96 border-2 border-blue-100 shadow-lg' style='pointer-events:none'/>
                <p class='font-bold text-center'>Construction (2021)</p>
            </div>

            <div class='max-h-96 max-w-96 bg-blue-200 bg-opacity-25 border-2 border-blue-100 shadow-lg p-6' style="overflow-y:scroll;">
                <p class='font-bold text-center'>Summer in Shanghai</p>
                <p class='font-normal font-serif'><?= nl2br(file_get_contents('notes/summer-in-shanghai.txt')) ?></p>
            </div>

            <div>
                <img src='images/kitchen.jpeg' alt='Kitchen (2020)' class='max-h-96 border-2 border-blue-100 shadow-lg' style='pointer-events:none'/>
                <p class='font-bold text-center'>Kitchen (2020)</p>
            </div>

            <div class='max-h-96 max-w-96 bg-blue-200 bg-opacity-25 border-2 border-blue-100 shadow-lg p-6' style="overflow-y:scroll;">
                <p class='font-bold text-center'>Thoughts after hiking in Vermont</p>
                <p class='font-normal font-serif'><?= nl2br(file_get_contents('notes/thoughts-after-hiking-in-vermont.txt')) ?></p>
            </div>

            <div>
                <img src='images/sprawl.jpeg' alt='Sprawl (2021)' class='max-h-96 border-2 border-blue-100 shadow-lg' style='pointer-events:none'/>
                <p class='font-bold text-center'>Sprawl (2021)</p>
            </div>

        <p class='text-xl not-italic font-medium'>more otw</p>

    </div>
</main>

<?php require 'partials/footer.php'; ?>