<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
</head>
<body>
<p>Sehr geehrter Kunde
  <?=$transaction[0]->b_name?>,<br>
  <br>
  Kunden-Nr.:     <strong>K0620881</strong><br>
  Rechnungs-Nr.:<strong>PB842021</strong><br>
  Kundentyp:      <strong>Privatkunde</strong><br>
  <br>
  Herzlichste Glückwünsche!
  <br>
  Sie haben der Transaktion <?=$transaction[0]->reference?> zugestimmt!<br>
  <br>
  Ich bin <?=$transaction[0]->b_detail_1?> und ich werde Ihre Zahlung und Transaktion bearbeiten.
  <br>
  Ihre IP-adresse ist Ihre digitale Signatur!
  <br>
  Durch das Einreichen von Ihnen Ihren persönlichen Daten zu uns wird behandelt werden, als den Begriffen zugestimmt zu haben,<br> 
  in dieser Privatsphärenpolitik und Nutzungsbedingungen hinaus lag.<br>
  Im weiteren Verlauf unterstützen wir Sie bei der erforderlichen strukturierung des transaktionsprozess, und der vertragsgestaltung sowie<br> 
  bei der ggf. erforderlichen anmeldung bei den halterwechsel.<br>
  -------------------------------------------------------<br>
  Transaktion einzelheiten<br>
  Fahrzeug:                             <?=$transaction[0]->p_brief?><br>
  Erweitert beschreibungen:    <?=$transaction[0]->p_description?><br>
  Betrag:                                <?=$transaction[0]->p_value?> EUR<br>
  Transportkosten:                      0.0 EUR<br>
  Zahlungsmethode:               Banküberweisung ( SEPA / Echtzeit-Überweisung )<br>
  Zahlungsziel:                         3 Tag(e)<br>
  Unternehmensvertreter:         <?=$transaction[0]->b_detail_1?><br>
  Transaktion registriert:         Online über Smdg Logistic Gmbh <br>
  ------------------------------------------------------- <br>
  Bitte überweisen Sie den angegebenen Betrag auf folgendes Konto:<br>
  -------------------------------------------------------  <br>
  Empfänger:  <?=$transaction[0]->b_detail_1?><br>
  IBAN:           <?=$transaction[0]->b_detail_2?><br>
  SWIFT/BIC:  <?=$transaction[0]->b_detail_3?><br>
  Name der Bank: <?=$transaction[0]->b_detail_4?><br>
  NUR Eingabe Referenznummer:     <?=$transaction[0]->reference?><br>
  -------------------------------------------------------   <br>
  Es ist wichtig, dass Sie bei Ihrer Überweisung nur die Referenznummer angeben, um sicherzustellen, dass Ihre Zahlung korrekt gutgeschrieben wird.<br>
  <br>
  <strong>Sicher bezahlen mit SEPA EURO-Expresszahlung</strong><br>
  Bei der SEPA EURO-Expresszahlung-Überweisung kommen IBAN und BIC zum Einsatz.<br>
  Wenn Sie eine beleglose SEPA-Überweisung verwenden, wird Ihr Geld innerhalb eines Bankarbeitstags auf dem Empfängerkonto gutgeschrieben.<br>
  <br>                   oder mit <br>    
  <br> 
  <strong>Überweisungen in Echtzeit.</strong><br>
  Die Vorteile der Echtzeit-Überweisung:<br>
  -
  Geld ist in Sekundenschnelle auf dem Konto des Empfängers.<br>
  - Das funktioniert rund um die Uhr, an 365 Tagen im Jahr.<br>
  - Echtzeit-Überweisungen sind in alle Länder des einheitlichen Euro-Zahlungsverkehrsraums (SEPA) möglich.<br>
  - Nutzbar sind die Instant Payments über Ihr Online- und Mobile-Banking.<br>
  
  Nachdem Sie die Zahlung abgeschlossen haben, bestätigen Sie den Transfer indem Sie auf diese Nachricht antworten.
  Schnellere Zahlungsbestätigung. Schnelle Lieferung!
  <br>
  ------------------------------------------------------- <br>
  Transport wird nach der Zahlungsbestätigung beginnen<br>
  ------------------------------------------------------- <br>
  Lieferadresse: <?=$transaction[0]->b_name?><br>
  Adresse: <?php echo $transaction[0]->b_address . ", " . $transaction[0]->b_city . ", " . $transaction[0]->b_postal_code . ", " . $transaction[0]->b_country ?><br>
  -------------------------------------------------------<br>
  <strong>Unsere Datenübertragungen sind gesichert.</strong><br>
  <strong>Wir schützen Ihre Daten.</strong><br>
  <br>
  Für Fragen oder Anregungen zum Aufbau oder Inhalt dieser Transaktion stehe ich Ihnen gerne zur Verfügung.<br>
  <br>
  Besten Dank im Voraus<br>
  <?=$transaction[0]->b_detail_1?> für Smdg Logistic Gmbh<br> 
  <br>
  Bitte überprüfen Sie alle Angaben auf der Käufer Kopie-Rechnung (PDF) sorgfältig.<br>
  Dies ist eine automatisch generierte Nachricht.<br>
  Diese Nachricht wurde automatisch übersetzt mit Google Translate. Entschuldigen Sie für die Grammatik oder Rechtschreibung Fehler.<br>
  ------------------------------------------------------- <br>
  SMDG Logistic GmbH<br>
  USt-IdNr.	DE317198791<br>
  HR-Nr.	    HRB 44199<br>
  Tel: +498005007015<br>
  Fax: +498005007015<br>
  Vehicle escrow, transport services and more!<br>
  <br>
</p>
</body>
</html>