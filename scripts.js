// ZivahowyServer Wordpress template
// v. 1.003
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

const getData = async (url) => await fetch(url).then(r => r.json());

const serverData = async () => {
  const data = await getData("https://mcapi.us/server/status?ip=147.135.160.192&port=25598");
  document.getElementById("subtitle").innerText = data['motd'];
  document.getElementById("serverStatus").innerText = data['online'] ? "online" : "offline";
  document.getElementById("serverMaxPlayers").innerText = data['players']['max'];
  document.getElementById("serverCurrentPlayers").innerText = data['players']['now'];
  if(data['players']['now']>0){
    document.getElementById("serverCurrentPlayerList").innerText = data['players']['sample'].map(e=>e['name']).join(', ');

  }
  setTimeout(serverData, 30000);
}

window.onload = () => {
  serverData();
  const data = new Date();
  document.getElementById("currentYear").innerText = data.getFullYear();
};
