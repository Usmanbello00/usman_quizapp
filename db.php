<script>
  const form = document.getElementById("signup-form");
  form.addEventListener("submit", function(event) {
    event.preventDefault();
    const formData = new FormData(form);
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "signup.php");
    xhr.onload = function() {
      console.log(xhr.responseText);
    };
    xhr.send(formData);
  });
</script>
