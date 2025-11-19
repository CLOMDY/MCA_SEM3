
let questions = [
    {
        question: "What is A",
        options: ["a", "b", "c", "d"],
        correct: 0,
        userAnswer: null
    },
    {
        question: "What is B",
        options: ["a", "b", "c", "d"],
        correct: 1,
        userAnswer: null
    },
    {
        question: "What is C",
        options: ["a", "b", "c", "d"],
        correct: 2,
        userAnswer: null
    }
];

function shuffleArray(arr) {
    for (let i = arr.length - 1; i > 0; i--) {
        let j = Math.floor(Math.random() * (i + 1));
        let temp = arr[i];
        arr[i] = arr[j];
        arr[j] = temp;
    }
    return arr;
}

questions = shuffleArray(questions);


let index = 0;
let score = 0;
let timeLeft = 10;
let timer;


let questionText = document.getElementById("questionText");
let optionsBox = document.getElementById("options");
let timerText = document.getElementById("timer");
let nextBtn = document.getElementById("nextBtn");
let quizBox = document.getElementById("quizBox");
let resultBox = document.getElementById("resultBox");
let scoreText = document.getElementById("scoreText");
let summary = document.getElementById("summary");


function startTimer() {
    timer = setInterval(() => {
        timeLeft--;
        timerText.innerText = "Time Left: " + timeLeft;
        if (timeLeft <= 0) {
            finishQuiz();
        }
    }, 1000);
}


function loadQuestion() {
    let q = questions[index];
    questionText.innerText = q.question;
    optionsBox.innerHTML = "";

    q.options.forEach((opt, i) => {
        let div = document.createElement("div");
        div.className = "option";
        div.innerText = opt;

        div.onclick = function () {
            q.userAnswer = i;
            nextBtn.style.display = "block";
        }

        optionsBox.appendChild(div);
    });

    nextBtn.style.display = "none";
}


nextBtn.onclick = function() {
    let q = questions[index];
    if (q.userAnswer === q.correct) {
        score++;
    }

    index++;
    if (index < questions.length) {
        loadQuestion();
    } else {
        finishQuiz();
    }
}

function finishQuiz() {
    clearInterval(timer);
    quizBox.style.display = "none";
    resultBox.style.display = "block";

    scoreText.innerText = `Your Score: ${score} / ${questions.length}`;

    summary.innerHTML = "";
    questions.forEach((q, i) => {
        let div = document.createElement("div");
        div.innerHTML = `
            <p><strong>Q${i+1}: ${q.question}</strong></p>
            <p>Your Answer: <span class="${q.userAnswer === q.correct ? 'correct':'incorrect'}">${q.userAnswer !== null ? q.options[q.userAnswer] : "No Answer"}</span></p>
            <p>Correct Answer: <strong>${q.options[q.correct]}</strong></p>
            <hr>
        `;
        summary.appendChild(div);
    });
}

loadQuestion();
startTimer();
