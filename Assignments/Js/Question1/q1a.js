function obj() {
  let person = {
    name: "Name",
    age: 34
  }
  return person;
}
// Returns an object

function getSmallestDivisor(xVal) {    

    if (xVal % 2 === 0) {
        return 2;
    } else if (xVal % 3 === 0) {
        return 3;
    } else {
        var xSqrt = Math.sqrt(xVal);

        if (xSqrt % 1 === 0) {
            getSmallestDivisor(xSqrt);
        } else { 
            return xVal;
        }
    }
}
// Returns undefined

function ids() {
    let id1 = Symbol("id");
    let id2 = Symbol("id");
    return id1
}
// Returns symbol