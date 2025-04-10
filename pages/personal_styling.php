<?php include '../includes/header.php'; ?>


<div class="flex justify-center flex-col items-center min-h-screenbg-[#d4e1de] pt-[20px]">

    <div class="w-full h-auto bg-gray-100 mt-5 text-center  py-10 overflow-hidden">

        <h2 class="text-2xl font-semibold text-gray-800">
            Sustainable Clothes—picked just for you by our Stylists
        </h2><br>
        <p class="text-gray-600 mt-2">
            Save time with personal shopping recommendations based on your
            <span class="font-semibold">size, style, & location.</span>
            All from certified sustainable brands.
        </p><br>

        <!-- Image Container that Shrinks But Never Goes Down -->
        <div class="flex justify-center items-center gap-2 mt-6 overflow-hidden">
            <img src="../assets/images/presonal3.jpg" alt="Sustainable Fashion" class="flex-shrink-0  max-w-[15vw] h-[40vh]  shadow-md">
            <img src="../assets/images/presonal1.webp" alt="Sustainable Fashion" class="flex-shrink-0  max-w-[15vw] h-[40vh]  shadow-md">
            <img src="../assets/images/india4.jpg" alt="Sustainable Fashion" class="flex-shrink-0  max-w-[15vw] h-[40vh]  shadow-md">
            <img src="../assets/images/india5.jpg" alt="Sustainable Fashion" class="flex-shrink-0  max-w-[15vw] h-[40vh]  shadow-md">
        </div>
        <br>
        <button class="mt-6 px-6 py-3 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700 transition">
            Take Your Style Quiz
        </button>

    </div>
    <div class="w-full auto bg-gray-400  py-10 text-center   overflow-hidden">
        <h2 class="text-3xl font-semibold mb-6 pb-10">How It Works</h2>

        <!-- Steps Section -->
        <div class="flex justify-evenly mx-[10vw] items-start gap-[13vw]">
            <div class="text-center">
                <div class="w-12 h-12 bg-green-500 text-white font-bold rounded-full flex items-center justify-center text-lg mx-auto">1</div>
                <p class="mt-2">Sign up.</p>
            </div>
            <div class="text-center">
                <div class="w-12 h-12 bg-green-500 text-white font-bold rounded-full flex items-center justify-center text-lg mx-auto">2</div>
                <p class="mt-2">Complete your style quiz.</p>
            </div>
            <div class="text-center">
                <div class="w-12 h-12 bg-green-500 text-white font-bold rounded-full flex items-center justify-center text-lg mx-auto">3</div>
                <p class="mt-2">Receive your personal <br>shopping recommendations via email.</p>
            </div>
        </div>

        <!-- Image Section -->
        <div class="flex justify-evenly mt-10">
            <img src="../assets/images/presonal5.jpg" alt="Style Quiz Results" class="w-[25vw] h-[60vh] max-w-md   shadow-lg">
        </div>

    </div>

    <div class="w-full h-auto bg-gray-100 mt-5 text-center px-[20vw] py-10 overflow-hidden">

        <h2 class="text-3xl font-semibold mb-4">The Results</h2><br>

        <p class="text-lg text-gray-700 mb-6">
            Your stylist will curate ethical and sustainable shopping suggestions for you based on your unique style profile.
            There’s never a commitment to purchase clothes—only buy what you love!
        </p><br>

        <!-- Image Section -->
        <div class="flex justify-center">
            <img src="../assets/images/presonal6.jpg" alt="Sustainable Fashion Result" class="w-[25vw]  h-[60vh] max-w-lg shadow-lg">
        </div>

    </div>
    <div class="w-full h-[30vh] bg-gray-400 mt- text-center  py-20 mb-10 overflow-hidden">

        <h2 class="text-3xl font-semibold mb-4">Stop searching for sustainable clothing. We'll do the shopping for you.</h2><br>

        <button class="mt-6 px-6 py-3 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700 transition">
            Take Your Style Quiz
        </button>

    </div>

    <div class="w-full max-w-5xl p-8">
        <h2 class="text-3xl font-semibold text-center mb-10">Stylists Who Know Sustainable Fashion</h2>


        <div class="flex flex-col md:flex-row items-center gap-8">
            <!-- Image Section -->
            <div class="flex justify-center">
                <img src="../assets/images/presonal7.webp" alt="Sustainable Fashion Result" class="w-[20vw]  h-[60vh] max-w-lg shadow-lg">
            </div>

            <!-- Text Section -->
            <div class="w-full md:w-1/2 text-left text-gray-800">
                <p class="text-lg">
                    “I’ve been working in sustainable fashion for the last 6 years, I know the best and worst brands in fashion.
                    I want to help anybody ditch fast fashion and look their best, all while supporting brands better for people and the planet.
                    I can help you dress like you give a damn.”
                </p>
                <p class="mt-4 font-semibold">- Garik</p>
                <p class="text-gray-600">Founder, Eco-Stylist</p>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>