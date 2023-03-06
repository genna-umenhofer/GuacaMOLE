let url = location.href;
let currentPage = url.substring(url.lastIndexOf('/')+1);

// add or remove "active" class for topic buttons

const buttonsContainer = document.querySelector("#button-container");

function setActive(button) {
  button.classList.add('active');
}

function removeActive(button) {
  button.classList.remove('active');
}

buttonsContainer.addEventListener("click", function (event) {
  if (event.target.tagName === 'BUTTON') {
    const button = event.target;
    const buttons = buttonsContainer.querySelectorAll('button');
    buttons.forEach(button => removeActive(button));
    setActive(button);
  }
});

// next question generator button click

if (currentPage === 'practice.php') {
  const newQuestionButton = document.getElementById('new-question-button');

  newQuestionButton.addEventListener("click", function (event) {
    const buttonsContainer = document.querySelector("#button-container");
    let currentTopic = buttonsContainer.getElementsByClassName("active")[0].value;
    if (currentTopic) {
      //close details if it is open before displaying new question
      const detailsElement = document.getElementById('details');
      if (detailsElement.open) {
        detailsElement.open = false;
      }
      getNextQuestion(currentTopic);
    } else {
      displayPrompt();
    }
  });

  buttonsContainer.addEventListener("click", function (event) {
    if (event.target.tagName === 'BUTTON') {
      const buttonsContainer = document.querySelector("#button-container");
    let currentTopic = buttonsContainer.getElementsByClassName("active")[0].value;
    if (currentTopic) {
      //close details if it is open before displaying new question
      const detailsElement = document.getElementById('details');
      if (detailsElement.open) {
        detailsElement.open = false;
      }
      getNextQuestion(currentTopic);
    } else {
      displayPrompt();
    }
    }
  });
}

//AJAX Request for questions
let currentRandomKey = 1;

function getNextQuestion(topic) {
  let maxKeyNumber = 3; //total number of questions in DB for each topic
  let randomKey = Math.floor(Math.random() * maxKeyNumber + 1); // adding one prevents the function from returning 0 because there are no questions with the number zero in the DB
  // if statement prevents duplicate question generation
  if (randomKey === currentRandomKey && randomKey > 1) {
    randomKey -= 1;
  } else if (randomKey === currentRandomKey && randomKey <= 1) {
    randomKey += 1;
  }
  currentRandomKey = randomKey;
  let currentTopic = topic;
  let send = "id=" + randomKey + "&topic=" + currentTopic;

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "../includes/getquestion.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function () {
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
      let data = JSON.parse(this.responseText);
      displayQuestion(data);
    }
  }

  xhr.send(send);
}

function displayQuestion(data) {
  let jsonData = data;

  //get DOM elements
  let question = document.getElementById("question");
  let answer = document.getElementById("answer");
  let explanation = document.getElementById("explanation");

  //assign HTML to DOM
  question.innerHTML = jsonData["question"];
  answer.innerHTML = jsonData["answer"];
  explanation.innerHTML = jsonData["explanation"];
}

function displayPrompt() {
  //get DOM elements
  let question = document.getElementById("question");
  let answer = document.getElementById("answer");
  let explanation = document.getElementById("explanation");

  //assign text to DOM
  question.innerText = "Please select a topic to see a question.";
  answer.innerText = "Please select a topic to see an answer.";
  explanation.innerText = "Please select a topic to see an explanation.";
}

// Display information when user selects a topic on the learn page
if (currentPage === 'learn.php') {
  const buttonsContainer = document.querySelector("#button-container");
  buttonsContainer.addEventListener("click", function (event) {
    let currentTopic = buttonsContainer.getElementsByClassName("active")[0].value;
    getInfoFromDB(currentTopic);
  });
}

function getInfoFromDB(topic) {
  let currentTopic = topic;
  let send = "topic=" + currentTopic;

  console.log(send);

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "../includes/getinfo.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function () {
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
      console.log(this.responseText);
      let data = JSON.parse(this.responseText);
      console.log(data);
      displayInfo(data);
    }
  }

  xhr.send(send);
}

function displayInfo(data) {
  let jsonData = data;

  // get DOM elements
  let title = document.getElementById("info-title");
  let container = document.getElementById("info-container");

  // assign data to DOM elements
  title.innerText = jsonData["title"];
  container.innerHTML = jsonData["sections"];
}