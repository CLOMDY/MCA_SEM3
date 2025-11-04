// Goal: Write JavaScript code to filter and sort an array of objects based on specific conditions.
// Steps:
// 1.	Create an array of objects, where each object represents a student with the following properties:
// o	name (string)
// o	age (number)
// o	score (number)
// 2.	Filter the students who are older than 21.
// 3 Sort the filtered students by score in descending order.
// 4 Print the sorted and filtered array to the console.
// Expected Outcome:
// •	The students who are older than 21 should be displayed in the order of their scores, starting from the highest score.


const students = [
    {name: "Aadarsh", age: 24, score: 90},
    {name: "Aditya", age: 24, score: 5},
    {name: "Bhavya", age: 20, score: 80},
];

console.log("Original Array:", students);
const filteredStudents = students.filter(student => student.age > 21);
const sortedStudents = filteredStudents.sort((a, b) => b.score - a.score);

console.log("Array after applying filter and sort:", sortedStudents);