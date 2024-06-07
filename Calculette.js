function validateForm() {
    const amount = document.getElementById('amount');
    const rate = document.getElementById('rate');
    const duration = document.getElementById('duration');
    const errorMessage = document.getElementById('error-message');

    // Expression régulière pour vérifier si une entrée est un nombre (y compris décimal)
    const isNumber = /^\d+(\.\d+)?$/;

    let isValid = true;

    // Réinitialiser les bordures
    amount.style.border ='';
    rate.style.border ='';
    duration.style.boder ='';

    if (!isNumber.test(amount.value) || amount.value === '') {
        amount.style.border = '2px solid orange';
        isValid = false;
    }
    if (!isNumber.test(rate.value) || rate.value === '') {
        rate.style.border = '2px solid orange';
        isValid = false;
    }
    if (!isNumber.test(duration.value) || duration.value === '') {
        duration.style.border = '2px solid orange';
        isValid = false;
    }

    if (!isValid) {
        errorMessage.textContent = 'Veuillez entrer des valeurs numériques valides pour tous les champs.';
    } else {
        errorMessage.textContent = '';
        // Continuez avec le calcul ou toute autre logique que vous souhaitez appliquer
        console.log('Formulaire validé. Procédez avec le calcul...');
    }
}
