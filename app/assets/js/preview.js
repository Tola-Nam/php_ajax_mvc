$(document).ready(function () {
  $("#image").on("change", function (event) {
    const file = event.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function (e) {
        $("#previewimage").html(
          `<img src="${e.target.result}" alt="Image Preview" style="max-width: 100%; max-height: 300px;">`
        );
      };
      reader.readAsDataURL(file);
    } else {
      $("#previewimage").empty();
    }
  });
});
