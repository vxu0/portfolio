<?php require 'partials/header.php'; ?>
<?php require 'partials/nav.php'; ?>

<main class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <p class="pb-6 text-lg text-gray-600 font-medium">creative space</p>
    <div class="leading-loose text-base text-gray-600 italic font-normal">
        <div class='grid gap-4 grid-cols-3 justify-items-center items-center'>

            <div>
                <img src='creative/images/corner.jpeg' alt='Corner' class='max-h-96 border-2 border-blue-100 shadow-lg'
                    style='pointer-events:none' />
                <p class='font-bold text-center'>Corner</p>
            </div>

            <div class='max-h-96 max-w-96 bg-blue-200 bg-opacity-25 border-2 border-blue-100 shadow-lg p-6'
                style="overflow-y:scroll;">
                <p class='font-bold text-center'>Lost</p>
                <p class='font-normal font-serif'>
                    <?= nl2br(file_get_contents('creative/lost.txt')) ?>
                </p>
            </div>

            <div>
                <img src='creative/images/construction.jpeg' alt='Construction'
                    class='max-h-96 border-2 border-blue-100 shadow-lg' style='pointer-events:none' />
                <p class='font-bold text-center'>Construction</p>
            </div>

            <div class='max-h-96 max-w-96 bg-blue-200 bg-opacity-25 border-2 border-blue-100 shadow-lg p-6'
                style="overflow-y:scroll;">
                <p class='font-bold text-center'>Summer in Shanghai</p>
                <p class='font-normal font-serif'>
                    <?= nl2br(file_get_contents('creative/summer-in-shanghai.txt')) ?>
                </p>
            </div>

            <div>
                <img src='creative/images/kitchen.jpeg' alt='Kitchen'
                    class='max-h-96 border-2 border-blue-100 shadow-lg' style='pointer-events:none' />
                <p class='font-bold text-center'>Kitchen</p>
            </div>

            <div class='max-h-96 max-w-96 bg-blue-200 bg-opacity-25 border-2 border-blue-100 shadow-lg p-6'
                style="overflow-y:scroll;">
                <p class='font-bold text-center'>Thoughts after hiking in Vermont</p>
                <p class='font-normal font-serif'>
                    <?= nl2br(file_get_contents('creative/thoughts-hiking.txt')) ?>
                </p>
            </div>

            <div>
                <img src='creative/images/sprawl.jpeg' alt='Sprawl' class='max-h-96 border-2 border-blue-100 shadow-lg'
                    style='pointer-events:none' />
                <p class='font-bold text-center'>Sprawl</p>
            </div>

            <p class='text-xl not-italic font-medium'>more otw...</p>

        </div>
</main>

<?php require 'partials/footer.php'; ?>