<footer class="bg-[rgb(34,34,34)] text-gray-300 py-6 text-center">
    <div class="container mx-auto">
        <div class="mt-6">
            <h3 class="text-lg font-semibold">Subscribe to our Newsletter</h3>

            <?php if (!$isLoggedIn): ?>

                <div class="flex justify-center mt-2">
                    <input type="text" placeholder="Your Email Address" class="px-4 py-2 rounded-l bg-gray-700 border border-gray-600">
                    <button id="signup-main" onclick="openPopup('signup-popup')" class="px-4 py-2 ml-2 bg-gray-500 text-white rounded hover:bg-gray-400">Sign Up</button>
                </div>
            <?php endif; ?>
        </div>
        <div class="mt-4 text-sm">
            <a href="<?php echo $base_url; ?>/pages/about.php" class="hover:text-white">About</a> |
            <a href="<?php echo $base_url; ?>/pages/contact.php" class="hover:text-white">Contact</a> |
            <a href="<?php echo $base_url; ?>/pages/blog.php" class="hover:text-white">Blog</a>
        </div>
        <div class="mt-6 text-sm">
            <p>Sustainable Fashion Advisor. All Rights Reserved.</p>
        </div>
        <p class="mt-4 text-sm">Copyright &copy; <?php echo date("Y"); ?> WearWise</p>
    </div>
</footer>
</body>

</html>