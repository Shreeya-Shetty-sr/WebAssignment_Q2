document.addEventListener("DOMContentLoaded", function() {
  const form = document.getElementById("registrationForm");
  const result = document.getElementById("result");

  form.addEventListener("submit", function(e) {
    e.preventDefault(); // stop normal form submission

    const formData = new FormData(form);

    fetch("submit.php", {
      method: "POST",
      body: formData
    })
    .then(response => response.text())
    .then(data => {
      result.innerHTML = data;
      result.style.display = "block";
      form.reset();
    })
    .catch(error => {
      result.innerHTML = "<p style='color:red;'>❌ Something went wrong!</p>";
      result.style.display = "block";
      console.error("Error:", error);
    });
  });
});