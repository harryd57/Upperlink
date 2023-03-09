function generate() {
  let person = prompt("Please enter your name");
  let age = prompt("Enter your age");
  let birthMonth = prompt("Enter your birthMonth");
  if (person && age && birthMonth) {
    document.getElementById("message").innerHTML =
    `Success!!!, Password Generated: ${age + person + birthMonth}`;
  }
}
