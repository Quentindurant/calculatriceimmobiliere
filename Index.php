<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice Prêt Immobilier</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="img/Microlead.png" alt="Microlead">
        </div>
        <div class="calculator">
            <h2>Calculatrice prêt immobilier</h2>
            <div class="form-group">
                <label for="amount">Montant emprunté</label>
                <div class="input-container">
                    <input type="text" id="amount" placeholder="100 000">
                    <span>€</span>
                </div>
            </div>
            <div class="form-group">
                <label for="rate">Taux nominal</label>
                <div class="input-container">
                    <input type="text" id="rate" placeholder="1.2">
                    <span>%</span>
                </div>
            </div>
            <div class="form-group">
                <label for="duration">Durée de remboursement</label>
                <div class="input-container">
                    <input type="text" id="duration" placeholder="15">
                    <span>an(s)</span>
                </div>
            </div>
            <p id="error-message" class="error-message"></p>
            <button onclick="validateForm()">Calculer</button>
        </div>
        <div class="tableauA">
            <h2>Tableau d’amortissement</h2>
                <table>
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
                        <tr>
                            <td>1</td>
                            <td>100 000,00€</td>
                            <td>607,33€</td>
                            <td>100,00€</td>
                            <td>507,33€</td>
                            <td>99 492,67€</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>99 492,67€</td>
                            <td>607,33€</td>
                            <td>99,49€</td>
                            <td>507,84€</td>
                            <td>98 984,83€</td>
                        </tr>
                        <!-- Autres lignes du tableau -->
                        <tr>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                        </tr>
                        <tr>
                            <td>180</td>
                            <td>606,73€</td>
                            <td>607,33€</td>
                            <td>0,61€</td>
                            <td>606,73€</td>
                            <td>0,00€</td>
                        </tr>
                    </tbody>
                </table>
                <button class="download-btn">Télécharger en PDF</button>
            </div>
    </div>
    <script src="Calculette.js"></script>
</body>
</html>
