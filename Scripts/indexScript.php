<script>

  //Functionality for Panels of Signup and Signin 
    const showSignUp = document.getElementById('showSignUp');
    const showSignIn = document.getElementById('showSignIn');
    const SignInForm = document.getElementById('SignInForm');
    const SignUpForm = document.getElementById('SignUpForm');

    showSignUp?.addEventListener('click', () => {
        SignInForm.classList.add('hidden');
        SignUpForm.classList.remove('hidden');
    });

    showSignIn?.addEventListener('click', () => {
        SignUpForm.classList.add('hidden');
        SignInForm.classList.remove('hidden');
    });

    document.getElementById('SignUpFormElement').addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent normal form submission
        window.location.href = 'Homepage.php'; // Redirect
    });

    document.getElementById('SignInFormElement').addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent normal form submission
        window.location.href = 'Homepage.php'; // Redirect
    });
</script>
