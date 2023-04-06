// 2b. any 5 data types of your choice, write a function to convert one data type to another (type conversion)

// Convert a string to a number
function stringToNumber(str) {
  return Number(str);
}

// Convert a number to a string
function numberToString(num) {
  return String(num);
}

// Convert a boolean to a string
function booleanToString(bool) {
  return String(bool);
}

// Convert an array to a string
function arrayToString(arr) {
  return arr.join(","); // Join array elements with a comma separator
}

// Convert an object to a string
function objectToString(obj) {
  return JSON.stringify(obj); // Convert object to a JSON string
}