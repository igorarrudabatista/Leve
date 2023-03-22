<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Invoice template</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
  <link id="theme-style" rel="stylesheet" href="{{asset('css/recibo/style.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  <div class="invoice">
    <div class="row">
      <div class="col-7">
        <img src="https://s3.eu-central-1.amazonaws.com/zl-clients-sharings/90Tech.png" class="logo">
      </div>
      <div class="col-5">
        <h1 class="document-type display-4">RECIBO</h1>
        <p class="text-right">Data de emissão: <strong> {{ date('d-m-Y') }}</strong></p>
      </div>
    </div>
    <div class="row">
      <div class="col-7">
        <p>
          <strong>{{$recibo->empresa_cliente->Nome_Empresa ?? 'Sem registros'  }}</strong><br>
          6B Rue Aux-Saussaies-Des-Dames<br>
          57950 MONTIGNY-LES-METZ
        </p>
      </div>
      <div class="col-5">
        <br><br><br>
        <p>
          <strong>Energies54</strong><br>
          Réf. Client <em>C00022</em><br>
          12 Rue de Verdun<br>
          54250 JARNY
        </p>
      </div>
    </div>
    <br>
    <br>
    <h6>Audits et rapports mensuels (1er Novembre 2016 - 30 Novembre 2016)</h6>
    <br>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Description</th>
          <th>Quantité</th>
          <th>Unité</th>
          <th>PU HT</th>
          <th>TVA</th>
          <th>Total HT</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Audits et rapports mensuels</td>
          <td>1</td>
          <td>Jour</td>
          <td class="text-right">500,00€</td>
          <td>20%</td>
          <td class="text-right">500,00€</td>
        </tr>
        <tr>
          <td>Génération des rapports d'activité</td>
          <td>4</td>
          <td>Rapport</td>
          <td class="text-right">800,00€</td>
          <td>20%</td>
          <td class="text-right">3 200,00€</td>
        </tr>
      </tbody>
    </table>
    <div class="row">
      <div class="col-8">
      </div>
      <div class="col-4">
        <table class="table table-sm text-right">
          <tr>
            <td><strong>Total HT</strong></td>
            <td class="text-right">3 700,00€</td>
          </tr>
          <tr>
            <td>TVA 20%</td>
            <td class="text-right">740,00€</td>
          </tr>
          <tr>
            <td><strong>Total TTC</strong></td>
            <td class="text-right">4 440,00€</td>
          </tr>
        </table>
      </div>
    </div>
    
    <p class="conditions">
      En votre aimable règlement
      <br>
      Et avec nos remerciements.
      <br><br>
      Conditions de paiement : paiement à réception de facture, à 15 jours.
      <br>
      Aucun escompte consenti pour règlement anticipé.
      <br>
      Règlement par virement bancaire.
      <br><br>
      En cas de retard de paiement, indemnité forfaitaire pour frais de recouvrement : 40 euros (art. L.4413 et L.4416 code du commerce).
    </p>
    
    <br>
    <br>
    <br>
    <br>
    
    <p class="bottom-page text-right">
      90TECH SAS - N° SIRET 80897753200015 RCS METZ<br>
      6B, Rue aux Saussaies des Dames - 57950 MONTIGNY-LES-METZ 03 55 80 42 62 - www.90tech.fr<br>
      Code APE 6201Z - N° TVA Intracom. FR 77 808977532<br>
      IBAN FR76 1470 7034 0031 4211 7882 825 - SWIFT CCBPFRPPMTZ
    </p>
  </div>
</div>
<!-- partial -->
  
</body>
</html>
