function validateForm() {
    const firstName = document.getElementById('firstName').value.trim();
    const lastName = document.getElementById('lastName').value.trim();
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;

    if (!firstName || !lastName || !email || !password || !confirmPassword) {
       showAlert('Please fill in all fields',"red");
        return false;
    }

    if (password !== confirmPassword) {
       showAlert('Password n est pas confirme',"red");
        return false;
    }
    
    function showAlert(message, color) {
        const alertBox = document.createElement('div');
        alertBox.textContent = message;
        alertBox.style.backgroundColor = color;
        alertBox.style.color = 'white';
        alertBox.style.padding = '20px';
        alertBox.style.borderRadius = '5px';
        alertBox.style.position = 'fixed';
        alertBox.style.top = '30%';
        alertBox.style.left = '50%';
        alertBox.style.transform = 'translate(-50%, -50%)';
        alertBox.style.zIndex = '9999';
        alertBox.style.textAlign = 'center';

        document.body.appendChild(alertBox);

        setTimeout(() => {
            document.body.removeChild(alertBox);
        }, 3000); // Disparaît après 3 secondes
    }

    

    return true;
}
// Fonction pour générer la recommandation en fonction des réponses
function generateRecommendation() {
    var intensity = quizAnswers["What is your preferred workout intensity?"];
    var exerciseFrequency = quizAnswers["How often do you exercise?"];
    var exerciseType = quizAnswers["Would you prefer cardio or strength training?"];

    // Logique de recommandation en fonction des réponses
    var recommendation = "We recommend: ";
    if (intensity === "Low" && exerciseFrequency === "Daily" && exerciseType === "Cardio") {
        recommendation += "Starting with light cardio exercises on a daily basis.";
    } else if (intensity === "Moderate" && exerciseFrequency === "Weekly" && exerciseType === "Strength training") {
        recommendation += "Engaging in weekly strength training sessions to build muscle.";
    } else if (intensity === "High" && exerciseFrequency === "Occasionally" && exerciseType === "Both") {
        recommendation += "Incorporating high-intensity interval training (HIIT) workouts for variety.";
    } else {
        recommendation += "Consulting with a fitness professional for personalized recommendations.";
    }

    return recommendation;
}
// Fonction pour démarrer le quiz
function startQuiz() {
    document.getElementById('quizIntro').style.display = 'none'; // Masquer l'introduction
    document.getElementById('quizQuestions').style.display = 'block'; // Afficher les questions
}

// Fonction pour soumettre le quiz et afficher les résultats
function submitQuiz() {
    // Obtenir les réponses sélectionnées
    const intensity = document.querySelector('input[name="intensity"]:checked');
    const frequency = document.querySelector('input[name="frequency"]:checked');
    const goals = document.querySelector('input[name="goals"]:checked');
    const exercisePartner = document.querySelector('input[name="exercise-partner"]:checked');

    // Vérifier si toutes les questions ont été répondues
    if (intensity && frequency && goals && exercisePartner) {
        // Calculer les recommandations en fonction des réponses
        let recommendations = '';

        if (intensity.value === 'low' && frequency.value === 'daily') {
            recommendations = 'We recommend incorporating light daily exercises like walking or yoga.';
        } else if (intensity.value === 'moderate' && frequency.value === 'weekly') {
            recommendations = 'You might benefit from regular moderate workouts like swimming or cycling.';
        } else if (intensity.value === 'high' && goals.value === 'muscle-gain') {
            recommendations = 'Consider high-intensity strength training to build muscle mass.';
        } else {
            recommendations = 'Based on your preferences, consult a fitness expert for personalized recommendations.';
        }

        // Afficher les résultats du quiz
        const resultMessage = document.getElementById('resultMessage');
        resultMessage.textContent = recommendations;

        document.getElementById('quizQuestions').style.display = 'none'; // Masquer les questions
        document.getElementById('quizResult').style.display = 'block'; // Afficher les résultats
    } else {
        alert('Please answer all questions.'); // Alerte si toutes les questions n'ont pas été répondues
    }
}

