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
                    <input type="text" id="amount" value="100 000">
                    <span>€</span>
                </div>
            </div>
            <div class="form-group">
                <label for="rate">Taux nominal</label>
                <div class="input-container">
                    <input type="text" id="rate" value="1.2">
                    <span>%</span>
                </div>
            </div>
            <div class="form-group">
                <label for="duration">Durée de remboursement</label>
                <div class="input-container">
                    <input type="text" id="duration" value="15">
                    <span>an(s)</span>
                </div>
            </div>
            <button>Calculer</button>
        </div>
    </div>
</body>
</html>
