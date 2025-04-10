<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<style></style>
</head>

<body class="bg-gray-200">

    <div class="w-full h-screen bg-gray-200  relative">

        <div class=" top-[10vh] w-full h-[15vw] fixed px-30    absolute overflow-hidden">

            <img src="..\assets\images\india_main.jpg" alt="gfjk" class="w-full object-fit  ">
        </div>

        <div class="w-[400px] h-[60vh]  bg-white absolute top-[30vh] left-[10vh] rounded-xl">
            <div class="w-full h-full   relative ">

                <div class="h-[20vh]  w-full   flex flex-col justify-center items-center ">

                    <div class=" h-[10vh] w-[100px] rounded-full bg-gray-500 overflow-hidden mb-[5px] ">
                    <img src="..\assets\images\otherindiaimage.png" alt="gfjk" class="w-full object-fit  ">


                    </div>
                    <h2 class="mb-[8px] text-2xl  font-bold">chaandan kumar gupta</h2>
                    <div class="w-[50px] h-[5px] bg-gray-500 "></div>
                </div>
                <div class="h-[40vh]  w-full  ">
            
                <h3>Chandan Kumar Gupta</h3>
                <p><strong>Registration Number:</strong> 12314959</p>
                <p><strong>Email:</strong> 12314959@neocol...</p>
                <p><strong>Phone:</strong> +91 - 8409469490</p>
                <!-- Button to Open Modal -->
<button onclick="openModal()" class="bg-blue-500 text-white px-4 py-2 rounded-md">Edit Profile</button>

<!-- Modal -->
<div id="profileModal" class="fixed inset-0 flex items-center justify-center   bg-opacity-30 shadow-lg hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-3/5 h-3/5 relative">
        <button onclick="closeModal()" class="absolute top-3 right-4 text-gray-500 hover:text-gray-700">&times;</button>
        <h2 class="text-xl font-semibold mb-4">Personal Information</h2>
        
        <div class="flex flex-col items-center">
            <img src="..\assets\images\otherindiaimage.png" alt="Profile Picture" class="w-20 h-20 rounded-full object-cover mb-2">
            <button class="bg-blue-500 text-white px-3 py-1 rounded-md">Upload</button>
        </div>

        <div class="mt-4 grid grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-600">First Name</label>
                <input type="text" class="w-full border border-gray-300 rounded-md p-2" value="Chandan Kumar Gupta">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-600">Last Name</label>
                <input type="text" class="w-full border border-gray-300 rounded-md p-2">
            </div>
        </div>

        <div class="mt-4">
            <label class="block text-sm font-medium text-gray-600">Phone No</label>
            <input type="text" class="w-full border border-gray-300 rounded-md p-2" value="+91 8409469490">
        </div>

        <div class="mt-4">
            <label class="block text-sm font-medium text-gray-600">Registration Number</label>
            <input type="text" class="w-full border border-gray-300 rounded-md p-2" value="12314959">
        </div>

        <div class="mt-6 flex justify-end">
            <button onclick="closeModal()" class="bg-gray-300 px-4 py-2 rounded-md mr-2">Cancel</button>
            <button class="bg-blue-500 text-white px-4 py-2 rounded-md">Save Changes</button>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script>
    function openModal() {
        document.getElementById("profileModal").classList.remove("hidden");
    }

    function closeModal() {
        document.getElementById("profileModal").classList.add("hidden");
    }
</script>

<!-- Tailwind CSS -->
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

           
                </div>



            </div>

        </div>

    </div>

</body>

</html>