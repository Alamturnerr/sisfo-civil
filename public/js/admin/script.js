// Custom File Input
$(document).ready(function () {
    bsCustomFileInput.init()
})

// Button can only clicked once
$(function () {
    $("form button").click(function () {
      $("form button").prop("disabled", true);
      $("form").not('form#logout-form').submit();
    });
});

function disableButton(btn) {
    setTimeout( () => {
        btn.disabled = true;
    }) // No need to set a duration for the timeout
}