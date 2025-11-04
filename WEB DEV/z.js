// Step 1: Create an array of student objects
const students = [
  { name: "Alice", age: 22, score: 85 },
  { name: "Bob", age: 20, score: 90 },
  { name: "Charlie", age: 23, score: 78 },
  { name: "Diana", age: 25, score: 92 },
  { name: "Ethan", age: 21, score: 88 },
  { name: "Fiona", age: 24, score: 95 }
];

// Step 2: Filter students older than 21
const filteredStudents = students.filter(student => student.age > 21);

// Step 3: Sort filtered students by score (descending order)
const sortedStudents = filteredStudents.sort((a, b) => b.score - a.score);

// Step 4: Print the sorted and filtered array
console.log(sortedStudents);
