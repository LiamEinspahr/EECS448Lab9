function rstFields () {
  document.getElementById("appleQuantity").value = "0";
  document.getElementById("pearQuantity").value = "0";
  document.getElementById("peachQuantity").value = "0";

  document.getElementById("free").checked = "false";
  document.getElementById("fifty").checked = "false";
  document.getElementById("five").checked = "false";


}

function checkValues () {

  let selectionMade = false;
  let usernameCorrect = false;

  let findEmail = document.getElementById("Username").value;
  let chkPass = document.getElementById("Password").value;

  let appleQ = document.getElementById("appleQuantity").value;
  let pearQ = document.getElementById("pearQuantity").value;
  let peachQ = document.getElementById("peachQuantity").value;

  let r1 = document.getElementById("free");
  let r2 = document.getElementById("fifty");
  let r3 = document.getElementById("five");
  console.log(r1.checked);

  if((appleQ >= 0) && (pearQ >= 0) && (peachQ >= 0) && ((r1.checked == true ) || (r2.checked == true) || (r3.checked == true))){
    selectionMade = true;
  }
  else {
    selectionMade = false;
    alert("Error, input not correct, please check all fields\n");
  }

  if(findEmail.includes("@") != true || findEmail.includes(".") != true || findEmail.includes("default") || chkPass == "") {
    usernameCorrect = false;
    alert("Error, email not correct, please check it over\n");
  }
  else {
    usernameCorrect = true;
  }


  if(selectionMade == false || usernameCorrect == false)
  {
    return false
  }
  else {
    return true;
  }
}
