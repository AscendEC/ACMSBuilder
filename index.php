<body class="bg-gray-100">
    <!-- Important import files -->
    <?php
        include "./Inclusions/Head.php";
    ?>

    <!-- Main Body for Sign In Page -->
    <div id="BodyDiv" class="w-full min-h-screen flex flex-col md:flex-row">
        <!-- Image panel -->
        <div class="w-full md:w-1/2 flex justify-center items-center p-8">
            <img class="w-full max-w-lg h-auto object-cover rounded-lg shadow-md" src="./Assets/Images/Banner2.jpg" alt="Banner Image">
        </div>

        <!-- SignIn and SignUp panel -->
        <div class="w-full md:w-1/2 flex items-center justify-center p-8 bg-gradient-to-br from-blue-200 to-blue-400">
            <!-- SignIn form -->
            <div id="SignInForm" class="w-full max-w-md rounded-lg shadow-md bg-white flex flex-col items-center text-center p-8">
                <h1 class="text-3xl font-bold text-gray-800 mb-8">Inventory Manager Sign-In</h1>
                <form class="w-full space-y-4" id="SignInFormElement">
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="email">Email</label>
                        <input class="border rounded-md w-full p-3 focus:ring-2 focus:ring-blue-600 text-gray-700" type="email" id="email" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="password">Password</label>
                        <input class="border rounded-md w-full p-3 focus:ring-2 focus:ring-blue-600 text-gray-700" type="password" id="password" required>
                    </div>
                    <button type="submit" class="w-full p-3 bg-blue-700 text-white rounded-md hover:bg-blue-800 transition-colors">Sign In</button>
                </form>
                <div class="mt-4 w-full">
                    <button id="showForgotPassword" class="text-blue-600 hover:text-blue-800 hover:underline">Forgot Password?</button>
                </div>
                <div class="mt-4 w-full">
                    <p class="text-gray-600">Don't have an account? <button id="showSignUp" class="text-blue-600 hover:text-blue-800 hover:underline">Create Now!</button></p>
                </div>
            </div>

            <!-- SignUp form -->
            <div id="SignUpForm" class="hidden w-full max-w-md rounded-lg shadow-md bg-white flex flex-col items-center text-center p-8">
                <h1 class="text-3xl font-bold text-gray-800 mb-8">Inventory Manager Registration</h1>
                <form class="w-full space-y-4" id="SignUpFormElement">
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="signupFirstName">First Name</label>
                        <input class="border rounded-md w-full p-3 focus:ring-2 focus:ring-blue-600 text-gray-700" type="text" id="signupFirstName" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="signupLastName">Last Name</label>
                        <input class="border rounded-md w-full p-3 focus:ring-2 focus:ring-blue-600 text-gray-700" type="text" id="signupLastName" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="signupEmail">Email</label>
                        <input class="border rounded-md w-full p-3 focus:ring-2 focus:ring-blue-600 text-gray-700" type="email" id="signupEmail" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="signupPassword">Password</label>
                        <input class="border rounded-md w-full p-3 focus:ring-2 focus:ring-blue-600 text-gray-700" type="password" id="signupPassword" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="confirmPassword">Confirm Password</label>
                        <input class="border rounded-md w-full p-3 focus:ring-2 focus:ring-blue-600 text-gray-700" type="password" id="confirmPassword" required>
                    </div>
                    <button type="submit" class="w-full p-3 bg-blue-700 text-white rounded-md hover:bg-blue-800 transition-colors">Sign Up</button>
                </form>
                <div class="mt-4 w-full">
                    <p class="text-gray-600">Already have an account? <button id="showSignIn" class="text-blue-600 hover:text-blue-800 hover:underline">Sign In!</button></p>
                </div>
            </div>

            <!-- Forgot Password Modal -->
            <div id="forgotPasswordModal" class="fixed inset-0 flex items-center justify-center hidden z-50 bg-black bg-opacity-50">
                <div class="bg-white rounded-lg p-8 w-full max-w-md shadow-xl">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Reset Password</h2>
                    <form id="forgotPasswordForm" class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="resetEmail">Enter your email address</label>
                            <input class="border rounded-md w-full p-3 focus:ring-2 focus:ring-blue-600 text-gray-700" type="email" id="resetEmail" required>
                        </div>
                        <div class="flex justify-end gap-3 mt-6">
                            <button type="button" onclick="closeForgotPasswordModal()" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">Cancel</button>
                            <button type="submit" class="px-4 py-2 bg-blue-700 text-white rounded-md hover:bg-blue-800">Send Reset Link</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Script for form toggling, validation, and redirection -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const signInForm = document.getElementById('SignInForm');
            const signUpForm = document.getElementById('SignUpForm');
            const forgotPasswordModal = document.getElementById('forgotPasswordModal');
            const showSignUp = document.getElementById('showSignUp');
            const showSignIn = document.getElementById('showSignIn');
            const showForgotPassword = document.getElementById('showForgotPassword');

            // Toggle between Sign-In and Sign-Up forms
            showSignUp.addEventListener('click', function () {
                signInForm.classList.add('hidden');
                signUpForm.classList.remove('hidden');
            });

            showSignIn.addEventListener('click', function () {
                signUpForm.classList.add('hidden');
                signInForm.classList.remove('hidden');
            });

            // Forgot Password Modal
            showForgotPassword.addEventListener('click', function () {
                forgotPasswordModal.classList.remove('hidden');
            });

            function closeForgotPasswordModal() {
                forgotPasswordModal.classList.add('hidden');
                document.getElementById('forgotPasswordForm').reset();
            }

            // Sign-In form submission
            document.getElementById('SignInFormElement').addEventListener('submit', function (e) {
                e.preventDefault();
                const email = document.getElementById('email').value;
                const password = document.getElementById('password').value;

                if (!email || !password) {
                    alert('Please fill in all fields.');
                    return;
                }
                // Add your sign-in logic here (e.g., API call)
                // On successful sign-in, redirect to Homepage.php
                alert('Sign-In successful for: ' + email);
                this.reset();
                window.location.href = 'Homepage.php';
            });

            // Sign-Up form submission with password confirmation
            document.getElementById('SignUpFormElement').addEventListener('submit', function (e) {
                e.preventDefault();
                const firstName = document.getElementById('signupFirstName').value;
                const lastName = document.getElementById('signupLastName').value;
                const email = document.getElementById('signupEmail').value;
                const password = document.getElementById('signupPassword').value;
                const confirmPassword = document.getElementById('confirmPassword').value;

                if (!firstName || !lastName || !email || !password || !confirmPassword) {
                    alert('Please fill in all fields.');
                    return;
                }

                if (password !== confirmPassword) {
                    alert('Passwords do not match.');
                    return;
                }

                // Add your sign-up logic here (e.g., API call)
                // On successful sign-up, redirect to Homepage.php
                alert(`Sign-Up successful for: ${firstName} ${lastName} (${email})`);
                this.reset();
                signUpForm.classList.add('hidden');
                signInForm.classList.remove('hidden');
                window.location.href = 'Homepage.php';
            });

            // Forgot Password form submission
            document.getElementById('forgotPasswordForm').addEventListener('submit', function (e) {
                e.preventDefault();
                const email = document.getElementById('resetEmail').value;

                if (!email) {
                    alert('Please enter an email address.');
                    return;
                }

                // Add your password reset logic here (e.g., API call to send reset link)
                alert('Password reset link sent to: ' + email);
                closeForgotPasswordModal();
            });
        });
    </script>
</body>