$(document).ready(function() {
    const $signUpButton = $('#signUpButton');
    const $signInButton = $('#signInButton');
    const $signInForm = $('#signIn');
    const $signUpForm = $('#signup');
    const $nologin = $('#nologin');
    const $nosignup = $('#nosignup');
    const $yessignup = $('#yessignup');

    $signUpButton.click(function() {
        $signInForm.hide();
        $signUpForm.show();
        $nologin.hide();
        $nosignup.hide();
        $yessignup.hide();
    });

    $signInButton.click(function() {
        $signInForm.show();
        $signUpForm.hide();
        $nologin.hide();
        $nosignup.hide();
        $yessignup.hide();
    });
});
