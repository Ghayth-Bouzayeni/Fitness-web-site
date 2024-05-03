// Fonction pour démarrer le quiz
function startQuiz() {
    const introSection = document.querySelector('.quiz-intro');
    const questionsForm = document.querySelector('.quiz-questions');

    // Masquer l'introduction
    introSection.style.display = 'none';
    // Afficher la première question en utilisant son ID
    showQuestion('question1');
    // Afficher le formulaire de questions
    questionsForm.style.display = 'block';
}

// Fonction pour afficher une question spécifique par son ID
function showQuestion(questionId) {
    const question = document.getElementById(questionId);

    // Masquer toutes les questions
    const allQuestions = document.querySelectorAll('.question');
    allQuestions.forEach(q => q.style.display = 'none');

    // Afficher la question spécifique
    question.style.display = 'block';
}

// Fonction pour passer à la question suivante
function nextQuestion() {
    


    const currentQuestionId = getCurrentQuestionId(); // Obtenir l'ID de la question actuelle
    saveAnswer(currentQuestionId); // Enregistrer la réponse de la question actuelle

    hideQuestion(currentQuestionId); // Masquer la question actuelle

    const nextQuestionId = findNextQuestionId(currentQuestionId); // Trouver l'ID de la prochaine question
    showQuestion(nextQuestionId); // Afficher la prochaine question

    updateButtonVisibility(nextQuestionId); // Mettre à jour l'affichage des boutons (Next et Submit)
}

// Fonction pour enregistrer la réponse de la question actuelle
function saveAnswer(questionId) {
    const selectedOption = document.querySelector(`#${questionId} input[type="radio"]:checked`);
    if (selectedOption) {
        const answer = selectedOption.value;
        // Vous pouvez implémenter la logique de sauvegarde de la réponse ici
    }
}

// Fonction pour masquer une question par son ID
function hideQuestion(questionId) {
    const question = document.getElementById(questionId);
    if (question) {
        question.style.display = 'none';
    }
}

// Fonction pour trouver l'ID de la prochaine question
function findNextQuestionId(currentQuestionId) {
    const allQuestions = document.querySelectorAll('.question');
    let foundCurrent = false;
    let nextQuestionId = null;

    allQuestions.forEach(question => {
        if (foundCurrent && !nextQuestionId) {
            nextQuestionId = question.id;
        }
        if (question.id === currentQuestionId) {
            foundCurrent = true;
        }
    });

    return nextQuestionId;
}

// Fonction pour obtenir l'ID de la question actuellement affichée
function getCurrentQuestionId() {
    const visibleQuestion = document.querySelector('.question[style="display: block;"]');
    return visibleQuestion ? visibleQuestion.id : null;
}

// Fonction pour mettre à jour la visibilité des boutons (Next et Submit)
function updateButtonVisibility(questionId) {
    const nextButton = document.querySelector('button[type="button"][onclick="nextQuestion()"]');
    const submitButton = document.querySelector('button[type="button"][onclick="submitQuiz()"]');

    if (questionId && questionId !== 'question4') {
        nextButton.style.display = 'block';
        submitButton.style.display = 'none';
    } else {
        nextButton.style.display = 'none';
        submitButton.style.display = 'block';
    }
}

// Fonction pour soumettre le quiz
function submitQuiz() {
    const recommendation = generateRecommendation();
    const resultMessage = document.getElementById('quizResultMessage');
    resultMessage.textContent = recommendation;

    const questionsForm = document.querySelector('.quiz-questions');
    questionsForm.style.display = 'none';

    const resultsSection = document.querySelector('.quiz-results');
    resultsSection.style.display = 'block';
}

// Fonction pour générer la recommandation en fonction des réponses
function generateRecommendation() {
    // Implémentez votre logique de recommandation en fonction des réponses enregistrées
    return "thank you for taking the test, you should try our recommended class in the classes section";
}

