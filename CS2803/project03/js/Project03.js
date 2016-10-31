var questionAnswer;
var score = 0;
flag = 1;

document.getElementById("score").innerText = "Score: " + score;

function generateQuestion() {
    if(flag) {
		var questionsNum = questions.length;
		var questionDiv = document.getElementById("Questions");
		var index = Math.floor( Math.random() * questionsNum);
		questionDiv.innerText = index;
		questionDiv.innerText = questions[index].question;
		questionAnswer = questions[index].answer;
		candidates.forEach(function(id) {
			document.getElementById(id).style.display = "block";
		});
		document.getElementById("success").style.display = "none";
		document.getElementById("error").style.display = "none";
	}
    // questions.splice( index, 1 );
}

function checkAnswer(i) {
    var chosenAnswer = document.getElementById(i);
    var scoreAnswer = document.getElementById("score");

    if(flag) {
		if ( i == questionAnswer) {
			flag = 0;
			score += 20;
			scoreAnswer.innerText = "Score: " + score;
			document.getElementById("error").style.display = "none";
			document.getElementById("success").style.display = "block";
			setInterval(function() {
				$("#success").fadeOut();
			},2000);
			if(score == 100) {
				document.getElementById("Content").style.display= "none";
				document.getElementById("winner").style.display= "block";
			}
			setTimeout(function() {
				if(score != 100) {
					generateQuestion();
					candidates.forEach(function(id) {
						document.getElementById(id).style.display = "block";
					});
					document.getElementById("success").style.display = "none";
					flag = 1;
				}
			},3000);	
		} else {
			document.getElementById("error").style.display = "block";
			document.getElementById("success").style.display = "none";
			$(document).ready(function() {
				$(chosenAnswer).fadeOut(300);
			});
		}
	}
}

