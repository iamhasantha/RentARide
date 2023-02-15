// const toggle = document.querySelector("input[type='checkbox']");
const toggle = document.getElementById("checkbox1");
const toggle2 = document.getElementById("checkbox2");
  const driverDetails = document.getElementById("add-driver");
  const needDriver = document.getElementById("need-driver");

    const addtextbox = document.getElementById("add-textbox");
    const addnote = document.getElementById("add-note");

  toggle.addEventListener("change", function() {
    if (toggle.checked) {
      driverDetails.style.display = "block";
      needDriver.classList.add("yes");
    } else {
      driverDetails.style.display = "none";
      needDriver.classList.remove("yes");
    }
  });

    toggle2.addEventListener("change", function() {
    if (toggle2.checked) {
      addtextbox.style.display = "block";
      addnote.classList.add("yes");
    } else {
      addtextbox.style.display = "none";
      addnote.classList.remove("yes");
    }
  });



  const driverNameSelect = document.querySelector('#driver-name');
  const driverDetailsSection = document.querySelector('#driver-details');
  const driverDetailsText = document.querySelector('#driver-details-text');

  driverNameSelect.addEventListener('change', function() {
    if (this.value === "") {
      driverDetailsSection.style.display = "none";
    } else {
      driverDetailsSection.style.display = "block";
      driverDetailsText.innerHTML = "Driver selected: " + this.value;
    }
  });


  const textArea = document.getElementById("text-area");
  const charLimit = document.getElementById("char-limit");
  const maxChars = parseInt(textArea.dataset.maxChars);

  textArea.addEventListener("input", function() {
    if (this.value.length > maxChars) {
      this.value = this.value.substring(0, maxChars);
    }

    const remainingChars = maxChars - this.value.length;
    charLimit.innerHTML = `Character limit: ${remainingChars}`;

    if (remainingChars < 25) {
      charLimit.classList.add("warning");
    } else {
      charLimit.classList.remove("warning");
    }

    if (remainingChars <= 0) {
      charLimit.classList.add("exceeded");
    } else {
      charLimit.classList.remove("exceeded");
    }
  });