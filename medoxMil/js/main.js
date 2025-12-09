console.log("Mon ficher Main *******************************");

 document.addEventListener("DOMContentLoaded", () => {

  document
    .querySelectorAll(
      ".comment-respond form input[type='text'], .comment-respond form textarea, .comment-respond form input[type='submit']"
    )
    .forEach((inpt) => {
      
      if (inpt.type === "submit") {
        inpt.classList.add("btn", "btn-primary","btn-block");
        inpt.value = "Envoyer";
      } else {
        inpt.classList.add("form-control");
      }
      
    });

});

