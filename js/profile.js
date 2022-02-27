const editnamebtnEl = document.querySelector("#edit-name");
const savenamebtnEl = document.querySelector("#save-name");
const inputnamebtnEl = document.querySelector(".input-name");

editnamebtnEl.addEventListener("click", function () {
  inputnamebtnEl.removeAttribute("readonly");
  inputnamebtnEl.style.backgroundColor = "rgba(0, 0, 0, 0.25)";
});

savenamebtnEl.addEventListener("click", function () {
  inputnamebtnEl.setAttribute("readonly", true);
  inputnamebtnEl.style.backgroundColor = "transparent";
});
