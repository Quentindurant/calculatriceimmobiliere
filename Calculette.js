function validateForm() {
    const montant = document.getElementById('montant');
    const taux = document.getElementById('taux');
    const duree = document.getElementById('duree');
    const errorMessage = document.getElementById('error-message');

    const isNumber = /^\d+(\.\d+)?$/;

    let isValid = true;
    let errorMessages = [];

    montant.classList.remove('invalid');
    taux.classList.remove('invalid');
    duree.classList.remove('invalid');
    
    if (!isNumber.test(montant.value) || montant.value === '') {
        montant.classList.add('invalid');
        isValid = false;
        errorMessages.push('remplis le montant putain !');
    } else if (parseInt(montant.value) < 1000 || parseInt(montant.value) > 1000000) {
        montant.classList.add('invalid');
        isValid = false;
        errorMessages.push('Le montant entre 1 000€ et 1 000 000€ mdrr tu es pauvre ou trop riche toi');
    }
    
    if (!isNumber.test(taux.value) || taux.value === '') {
        taux.classList.add('invalid');
        isValid = false;
        errorMessages.push('remplis le taux au moin fdp');
    } else if (parseFloat(taux.value) < 0.1 || parseFloat(taux.value) > 100) {
        taux.classList.add('invalid');
        isValid = false;
        errorMessages.push('le taux entre 0.1% et 100% stp salope');
    }

    if (!isNumber.test(duree.value) || duree.value === '') {
        duree.classList.add('invalid');
        isValid = false;
        errorMessages.push('remplis la duree petite pute');
    } else if (parseInt(duree.value) < 1 || parseInt(duree.value) > 40) {
        duree.classList.add('invalid');
        isValid = false;
        errorMessages.push('entre 1 et 40 ans connard');
    }

    if (!isValid) {
        errorMessage.innerHTML = errorMessages.join('<br>');
    } else {
        errorMessage.textContent = '';
        calculerAmortissement(parseFloat(montant.value), parseFloat(taux.value), parseInt(duree.value));
    }
}

function calculerAmortissement(montant, taux, duree) {
    const tauxMensuel = taux / 100 / 12;
    const nombreDeMensualites = duree * 12;
    const echeance = (montant * tauxMensuel) / (1 - Math.pow(1 + tauxMensuel, -nombreDeMensualites));

    const tableBody = document.getElementById('amortissement-table').getElementsByTagName('tbody')[0];
    tableBody.innerHTML = '';

    let soldeRestant = montant;

    for (let i = 1; i <= nombreDeMensualites; i++) {
        const interet = soldeRestant * tauxMensuel;
        const amortissement = echeance - interet;
        soldeRestant -= amortissement;

        const row = tableBody.insertRow();
        row.insertCell(0).textContent = i;
        row.insertCell(1).textContent = soldeRestant.toFixed(2) + '€';
        row.insertCell(2).textContent = echeance.toFixed(2) + '€';
        row.insertCell(3).textContent = interet.toFixed(2) + '€';
        row.insertCell(4).textContent = amortissement.toFixed(2) + '€';
        row.insertCell(5).textContent = soldeRestant.toFixed(2) + '€';
    }
}

function genererPDF() {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();

    doc.autoTable({ 
        html: '#amortissement-table',
        startY: 10,
        
    });
    doc.save('tableau_amortissement.pdf');
}
