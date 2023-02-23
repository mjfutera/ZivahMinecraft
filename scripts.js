// ZivahowyServer Wordpress template
// v. 1.000
// By Michal Futera
// http://linktr.ee/mjfutera

const copyToClipboard = fieldName => {
    const textToCopy = document.getElementById(fieldName).innerText;
    navigator.clipboard.writeText(textToCopy)
      .then(() => {
        alert("Skopiowano do schowka: " + textToCopy);
      })
      .catch((error) => {
        console.error("Błąd kopiowania do schowka: ", error);
      });
}