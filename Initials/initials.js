function initials(){
  let fullName = prompt("Enter your full name")
  if(fullName){
    let full_name = fullName.split(" ");
    let fName = full_name[0];
    let lName = full_name[1];
    var initials = `Your initials are: ${fName[0] + "." + lName[0]}`;
    alert(initials)
  }
}