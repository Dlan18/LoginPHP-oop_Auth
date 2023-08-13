$(document).ready(function () {
  $('#showPassword').click(function () {
    var passwordInput = $('#password');
    var icon = $(this).find('i');

    if (passwordInput.attr('type') === 'password') {
      passwordInput.attr('type', 'text');
      icon.removeClass('bi bi-eye').addClass('bi bi-eye-slash');
    } else {
      passwordInput.attr('type', 'password');
      icon.removeClass('bi bi-eye-slash').addClass('bi bi-eye');
    }

    $(this).toggleClass('clicked');
  });
});


setTimeout(function() {
  document.getElementById('error-message').style.display = 'none';
}, 5000);