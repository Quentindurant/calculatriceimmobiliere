<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice Prêt Immobilier</title>
    <link rel="stylesheet" href="Style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.14/jspdf.plugin.autotable.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="img/Microlead.png" alt="Microlead">
        </div>
        <div class="calculator">
            <h2>Calculatrice prêt immobilier</h2>
            <div class="form-group">
                <label for="montant">Montant emprunté</label>
                <div class="input-container">
                    <input type="text" id="montant" placeholder="100 000">
                    <span>€</span>
                </div>
            </div>
            <div class="form-group">
                <label for="taux">Taux nominal</label>
                <div class="input-container">
                    <input type="text" id="taux" placeholder="1.2">
                    <span>%</span>
                </div>
            </div>
            <div class="form-group">
                <label for="duree">Durée de remboursement</label>
                <div class="input-container">
                    <input type="text" id="duree" placeholder="15">
                    <span>an(s)</span>
                </div>
            </div>
            <p id="error-message" class="error-message"></p>
            <button type="button" onclick="validateForm()">Calculer</button>
        </div>
        <div class="tableauA">
            <h2>Tableau d’amortissement</h2>
                <table id="amortissement-table">
                    <thead>
                        <tr>
                            <th>Mois</th>
                            <th>Solde initial</th>
                            <th>Échéance</th>
                            <th>Intérêts</th>
                            <th>Amortissement</th>
                            <th>Solde restant</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <button class="download-btn" onclick="genererPDF()">Télécharger en PDF</button>
        </div>
    </div>
    <script src="Calculette.js"></script>
</body>
</html>
