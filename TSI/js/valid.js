
//поле ввода, а также элемент span, в который мы поместим сообщение об ошибке.
var form  = document.getElementsByTagName('form')[0];
var email = document.getElementById('mail');
var error = document.querySelector('.error');

email.addEventListener("input", function (event) {
 // Каждый раз, когда пользователь вводит что-либо, мы проверяем,
  // является ли корректным поле электронной почты.
  if (email.validity.valid) {
    // В случае появления сообщения об ошибке, если поле
    // является корректным, мы удаляем сообщение об ошибке.
    error.innerHTML = ""; // Сбросить содержимое сообщения
    error.className = "error"; // Сбросить визуальное состояние сообщения
  }
}, false);
form.addEventListener("submit", function (event) {
  // Каждый раз, когда пользователь пытается отправить данные, мы проверяем
   // валидность поля электронной почты.
  if (!email.validity.valid) {
    
    // Если поле невалидно, отображается пользовательское
    // сообщение об ошибке.
    error.innerHTML = "I expect an e-mail, darling!";
    error.className = "error active";
    // И мы предотвращаем отправку формы путем отмены события
    event.preventDefault();
  }
}, false);
