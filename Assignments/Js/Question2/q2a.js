// 2a. write at least 10 js functions of your choice that can do arrays manipulation.

// i. concat(): This function combines two or more arrays into a single array.

const array1 = [1, 2, 3];
const array2 = [4, 5, 6];
const combinedArray = array1.concat(array2);
console.log(combinedArray); // Output: [1, 2, 3, 4, 5, 6]

// 2. push(): This function adds one or more elements to the end of an array and returns the new length of the array.

const push_array = [1, 2, 3];
push_array.push(4);
console.log(push_array); // Output: [1, 2, 3, 4]

// 3. pop(): This function removes the last element from an array and returns that element.

const pop_array = [1, 2, 3];
const lastElement = pop_array.pop();
console.log(lastElement); // Output: 3
console.log(pop_array); // Output: [1, 2]

// 4. shift(): This function removes the first element from an array and returns that element.

const shift_array = [1, 2, 3];
const firstElement = shift_array.shift();
console.log(firstElement); // Output: 1
console.log(shift_array); // Output: [2, 3]

// 5. unshift(): This function adds one or more elements to the beginning of an array and returns the new length of the array.

const unshift_array = [1, 2, 3];
unshift_array.unshift(4);
console.log(unshift_array); // Output: [4, 1, 2, 3]

// 6. slice(): This function returns a new array that contains a portion of the original array.

const slice_array = [1, 2, 3, 4, 5];
const slicedArray = slice_array.slice(2, 4);
console.log(slicedArray); // Output: [3, 4]

// 7. splice(): This function adds or removes elements from an array.

const splice_array = [1, 2, 3, 4, 5];
splice_array.splice(2, 2, 6, 7);
console.log(splice_array); // Output: [1, 2, 6, 7, 5]

// 8. reverse(): This function reverses the order of the elements in an array.

const reverse_array = [1, 2, 3, 4, 5];
array.reverse();
console.log(reverse_array); // Output: [5, 4, 3, 2, 1]

// 9. sort(): This function sorts the elements of an array in ascending or descending order.

const sort_array = [3, 1, 4, 1, 5, 9, 2, 6, 5];
array.sort();
console.log(sort_array); // Output: [1, 1, 2, 3, 4, 5, 5, 6, 9]

// 10. filter(): This function creates a new array with all elements that pass a certain condition.

const filter_array = [1, 2, 3, 4, 5];
const filteredArray = filter_array.filter(element => element % 2 === 0);
console.log(filteredArray); // Output: [2, 4]