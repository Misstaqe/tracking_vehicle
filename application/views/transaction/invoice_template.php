<style>
	@page {
		sheet-size: A3;
	}
</style>
<div style="width: 100%;">
	<div class="header">
		<div style="float: left; width: 50%; font-size: 20px; padding-top: 50px;">
			<strong>Ihre Rechnung</strong>
		</div>
		<div style="text-align: right; float: right; width: 50%;">
			<img src="<?= base_url('public/img/logo.png'); ?>" style="width: auto; height: 70px; margin-top: -40px;">
		</div>
	</div>

	<div class="content" style="clear: both;">
		<div class="detail-1-1">
			<div style="width: 35%; float: left; font-size: 14px; padding-top: 10px;">
				<p style="margin: 5px 0px;"><strong><?= $transaction[0]->b_name ?></strong></p>
				<p style="margin: 5px 0px;"><?= $transaction[0]->b_address ?></p>
				<p style="margin: 5px 0px;"><?= $transaction[0]->b_city ?></p>
				<p style="margin: 5px 0px;"><?= $transaction[0]->b_postal_code ?></p>
				<p style="margin: 5px 0px;"><?= $transaction[0]->b_country ?></p>
			</div>
			<div style="width: 60%; float: right;">
				<img src="<?= base_url('public/img/nicht.jpg'); ?>" width="100%">
			</div>
			<div style="font-size: 14px; width: 100%; padding-top: 20px;">
				<div class="detail-1-2" style="background-color: #f2f2f2;">
					<div style="font-size: 14px;">
						<p style="margin: 5px 0px;">Rechnungsdatum: <strong><?= $current_date ?></strong></p>
						<p style="margin: 5px 0px;">Kundennummer: <strong>K0620881</strong></p>
						<p style="margin: 5px 0px;">Zahlungsziel: <strong>3 Tag(e)</strong></p>
						<p style="margin: 5px 0px;">Unternehmensvertreter: <strong><?= $transaction[0]->b_detail_1 ?></strong></p>
					</div>
				</div>
			</div>
			<div style="font-size: 14px;">
				<p>Wir bedanken uns für die gute Zusammenarbeit und stellen Ihnen vereinbarungsgemäß folgende Lieferungen und Leistungen in Rechnung: </p>
			</div>
		</div>

		<div class="table" style="clear: both;">
			<table style="width: 100%; border-collapse: collapse;">
				<thead style="border-top: 1px solid black; border-bottom: 1px solid black;">
					<tr>
						<td style="width: 15%; text-align: center;">Lfd.Nr.</td>
						<td style="width: 50%;">Bezeichnung</td>
						<td style="width: 25%; text-align: center;">Brutto</td>
						<td style="width: 25%; text-align: center;">MwSt (%)</td>
					</tr>
				</thead>
				<tbody>
					<tr style="background-color: #c0c0c0;">
						<td style="text-align: center;">1</td>
						<td><?= $transaction[0]->p_description ?></td>
						<td style="text-align: center;"><?= $transaction[0]->p_value ?></td>
						<td style="text-align: center;">19</td>
					</tr>
					<tr>
						<td style="text-align: center;">2</td>
						<td>PKW TRANSPORT</td>
						<td style="text-align: center;">0,00</td>
						<td style="text-align: center;">19</td>
					</tr>
					<tr style="background-color: #c0c0c0;">
						<td style="background-color: white;"></td>
						<td><strong>Zwischensumme netto (19,00%)</strong></td>
						<td></td>
						<td style="text-align: center;"><?php echo round(($transaction[0]->p_value / 119 * 100), 2) ?> EUR</td>
					</tr>
					<tr>
						<td></td>
						<td><strong>+ Mehrwertsteuer (19,00%)</strong></td>
						<td></td>
						<td style="text-align: center;"><?php echo round(($transaction[0]->p_value / 119 * 19), 2) ?> EUR</td>
					</tr>
					<tr style="position: relative; background-color: #c0c0c0; border-bottom: 1px solid black;">
						<td style="background-color: white; border-bottom: none; border-bottom: 1px solid white;"></td>
						<td style="font-size: 20px;"><strong>Zu zahlender Betrag</strong></td>
						<td></td>
						<td style="position: absolute; right: 60px; font-size: 20px;"><strong><?= $transaction[0]->p_value ?> EUR</strong></td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="desc-1-1" style="font-size: 14px; width: 50%; float: left; margin-top: 30px;">
			<p>Zahlung innerhalb von 3 Tagen ab Rechnungseingang ohne Abzüge an die unten angegebene Bankverbindung.<br>Wir erwarten Ihre Zahlung innerhalb von 3 Tagen auf unserem Zahlungsstelle Bankkonto.<br>Sollten wir nichts von Ihnen hören, sehen wir uns zu weiteren juristischen Schritten gezwungen.<br>Sollten Sie die Überweisung nicht fristgemäß vornehmen, unsere Firma werde die Forderung an ein Inkassounternehmen abgeben, was mit weiteren Kosten zu Ihren Lasten verbunden sein wird.</p>
			<p>Für die Überweisung des Rechnungsbetrags nutzen Sie bitte unsere Bankverbindung.<br>Bitte geben Sie bei der Zahlung Ihre Referenznummer <strong><?= $transaction[0]->reference ?></strong>

			<div>
				<div>
					<p style="margin-top: 2px; margin-bottom: 2px;">Empfänger: <strong><?= $transaction[0]->b_detail_1 ?></strong></p>
				</div>
				<div>
					<p style="margin-top: 2px; margin-bottom: 2px;">IBAN: <strong><?= $transaction[0]->b_detail_2 ?></strong></p>
				</div>
				<div>
					<p style="margin-top: 2px; margin-bottom: 2px;">BIC/SWIFT: <strong><?= $transaction[0]->b_detail_3 ?></strong></p>
				</div>
				<div>
					<p style="margin-top: 2px; margin-bottom: 2px;">Referenznummer: <strong><?= $transaction[0]->reference ?></strong></p>
				</div>
			</div>
		</div>

		<div style="width: 50%; float: left; margin-bottom: 260px;">
			<img src="<?= base_url('public/img/phone.png'); ?>" style="margin-left: 50px;">
			<div style="margin-top: -479px; margin-left: 70px; text-align: center;">
				<p><strong style="font-size: 18px; color: red;"><?= $transaction[0]->b_detail_1 ?></strong></p>
				<p style="margin-top: 27px;"><strong style="font-size: 18px; letter-spacing: 0px; color: red;"><?= $transaction[0]->b_detail_2 ?></strong></p>
				<p style="margin-top: 28px;"><strong style="font-size: 21px; color: red;"><?= $transaction[0]->p_value ?></strong></p>
				<p style="margin-top: 27px; margin-left: 100px;"><strong style="font-size: 21px; color: red;"><?= $transaction[0]->reference ?></strong></p>
			</div>
		</div>
	</div>

	<div class="footer" style="border-top: 1px solid black; padding-top: 5px; padding-bottom: 20px; font-size: 10px; margin-top: 20px;">
		<div style="width: 10%; float: left;">
			<img src="<?= base_url('public/img/pic_footer.png'); ?>">
		</div>
		<div style="width: 30%; float: left;">
			SMDG Logistic GmbH<br>
			Am Bahndamm 17<br>
			54338 Schweich<br>
			Deutschland<br>
		</div>
		<div style="width: 30%; float: left;">
			USt-IdNr. DE317198791<br>
			Tel: +498005007015<br>
			Fax: +498005007015<br>
			Email: contact@smdglogistic.com<br>
		</div>
		<div style="width: 30%; float: left;">
			<?= $transaction[0]->b_detail_1 ?><br>
			IBAN: <?= $transaction[0]->b_detail_2 ?><br>
			SWIFT/BIC: <?= $transaction[0]->b_detail_3 ?><br>
		</div>
	</div>
</div>
<div style="width: 100%;">
	<div class="header">
		<div style="float: left; width: 50%; font-size: 20px;">
			<strong>Allgemeine Geschäftsbedingungen</strong>
			<strong>für die Nutzung des transport inkl. Treuhandservice</strong>
			<strong>für die SMDG Logistic GmbH</strong>
		</div>
		<div style="text-align: right; float: right; width: 50%;">
			<img src="<?= base_url('public/img/logo.png'); ?>" style="width: auto; height: 70px; margin-top: -40px;">
		</div>
	</div>

	<div class="content" style="font-size: 13px; clear: both;">
		<div class="detail-2-1" style="padding-top: 60px;">
			<div style="float: left; width: 33%;">
				<p style="margin: 5px 0px;"><strong>Vermittler:</strong>SMDG Logistic GmbH</p>
				<p style="margin: 5px 0px;"><strong><strong><span><?= $transaction[0]->b_detail_1 ?></span></p>
			</div>
			<div style="float: left; width: 33%;">
				<p style="margin: 5px 0px;"><strong>Käufer: </strong><?= $transaction[0]->b_name ?></p>
				<p style="margin: 5px 0px;"><?= $transaction[0]->b_address ?></p>
				<p style="margin: 5px 0px;"><?= $transaction[0]->b_city ?></p>
				<p style="margin: 5px 0px;"><?= $transaction[0]->b_postal_code ?></p>
				<p style="margin: 5px 0px;"><?= $transaction[0]->b_country ?></p>
			</div>
			<div style="float: left; width: 33%;">
				<p style="margin: 5px 0px;"><strong>Verkäufer: </strong><?= $transaction[0]->s_name ?></p>
				<p style="margin: 5px 0px;">Adresse: <span><?= !empty($s_address[0]) ? $s_address[0] : "" ?></span></p>
				<p style="margin: 5px 0px;">Stadt: <span><?= !empty($s_address[2]) ? $s_address[2] : "" ?></span></p>
				<p style="margin: 5px 0px;">Postleitzahl: <span><?= !empty($s_address[1]) ? $s_address[1] : "" ?></span></p>
				<p style="margin: 5px 0px;"><?= !empty($s_address[3]) ? $s_address[3] : "" ?></p>
			</div>
		</div>

		<div class="detail-2-2" style="clear: both; padding-top: 15px;">
			<div style="float: left; width: 33%;">
				<p style="margin: 5px 0px;"><strong>Transaktion einzelheiten</strong></p>
				<p style="margin: 5px 0px;">Transaktion #: <span><?= $transaction[0]->reference ?></span></p>
				<p style="margin: 5px 0px;">Fahrzeug: <span><?= $transaction[0]->p_description ?></span></p>
				<p style="margin: 5px 0px;">Fahrzeugpreis: <span><?= $transaction[0]->p_value ?> €</span></p>
			</div>

			<div class="desc-2-1" style="clear: both; padding-top: 50px;">
				<p style="margin: 5px 0px;"><strong>1. Gegenstand des Vertrages</strong></p>
				<p style="margin: 5px 0px; padding-left: 50px;">a. Grundsätzlich ist der Vermittler auch Spediteur der Ware. Als Spediteur arbeitet der Treuhänder nach den Allgemeinen Spediteursbedingungen.</p>
				<p style="margin: 5px 0px; padding-left: 50px;">b. Der Käufer bezahlt den Fahrzeugpreis auf ein eigenes dafür eingerichtetes Treuhandkonto des Vermittler.</p>
				<p style="margin: 5px 0px; padding-left: 50px;">c. Da der Vermittler zugleich als Spediteur agiert, hat er für den auftragsgemäßen Transport der Ware zu sorgen.</p>
				<p style="margin: 5px 0px; padding-left: 50px;">d. Der Vermittler haftet nicht für die Beschaffenheit der Ware, sondern nur nach der AdSp. für nachgewiesene Schäden, die auf dem Transportwege eingetreten sind.</p>
				<p style="margin: 5px 0px; padding-left: 50px;">e. Der Vermittler den Kaufpreis wird zurückkehren zum <?= $transaction[0]->b_name ?> wenn <?= $transaction[0]->b_name ?> ist nicht zufrieden mit das fahrzeug oder / und es wurde nicht geliefert.</p>

				<div class="desc-2-2" style="padding-top: 15px;">
					<p style="margin: 5px 0px;"><strong>2. Zusicherungen des Verkäufers</strong></p>
					<p style="margin: 5px 0px; padding-left: 50px;">a. Das Fahrzeug einschließlich des mitverkauften Zubehörs steht in seinem alleinigen Eigentum.</p>
					<p style="margin: 5px 0px; padding-left: 50px;">b. Das Fahrzeug ist mit dem Originalmotor.</p>
					<p style="margin: 5px 0px; padding-left: 50px;">c. Das Fahrzeug hatte, seit es im Eigentum des Verkäufers war, keinen Unfallschaden.</p>
					<p style="margin: 5px 0px; padding-left: 50px;">d. Das Fahrzeug wurde nicht gewerblich genutzt, z.B. als Taxi, Miet- oder Fahrschulwagen.</p>
					<p style="margin: 5px 0px; padding-left: 50px;">e. Zustimmung mit 5 Tagen Inspektionszeitraum.</p>
					<p style="margin: 5px 0px; padding-left: 50px;">f. Zustimmung mit 14 Tagen Rückgaberecht oder geld zurück garantie. Der Verkäufer gibt das Geld an den Käufer zurück, wenn das Fahrzeug versteckte Mängel aufweist.</p>
				</div>

				<div class="desc-2-3" style="padding-top: 15px;">
					<p style="margin: 5px 0px;"><strong>3. Zusicherungen des Käufers</strong></p>
					<p style="margin: 5px 0px; padding-left: 50px;">a. Ist einverstanden, das zu zahlen den Fahrzeugpreis in den nächsten 24 Stunden.</p>
					<p style="margin: 5px 0px; padding-left: 50px;">b. Hat innerhalb einer 500 km Grenze das Fahrzeug zu inspizieren.</p>
				</div>

				<div class="desc-2-4" style="padding-top: 15px;">
					<p style="margin: 5px 0px;"><strong>4. Ummelde-/Stilllegungsverpflichtung</strong></p>
					<p style="margin: 5px 0px; padding-left: 50px;">a. Der Käufer verpflichtet sich, das Fahrzeug innerhalb von zwei Werktagen nach Übergabe bei der zuständigen Straßenverkehrszulassungsbehörde auf seinen Namen anzumelden oder stillzulegen und Anmeldung bzw. Stilllegung dem Verkäufer nachzuweisen.</p>
				</div>

				<div class="sign" style="margin-top: 130px; z-index: 1; margin-bottom: 200px;">
					<div style="width: 33%; float: right; margin-top: -80px; margin-bottom: 290px;">
						<img src="<?= base_url('public/img/sellersignature.png'); ?>" style="width: 200px; z-index: 4; margin-bottom: -15px;">
						<p style="width: 170px; border-top: 1px dashed; padding-top: 5px; margin-top: 0;">Unterschrift des Verkäufers</p>
					</div>
					<div style="width: 33%; margin-bottom: 140px; margin-top: 0px; padding-top: 30px;">
						<p style="width: 170px; border-top: 1px dashed; padding-top: 5px;">Unterschrift des Käufers</p>
					</div>
					<div style="width: 33%;">
						<p style="width: 200px; border-top: 1px dashed; padding-top: 5px; z-index: 2;">Unterschrift des Vermittler</p>
						<div>
							<img src="<?= base_url('public/img/final_sign.png'); ?>" style="margin-top: -100px; margin-left: -20px; z-index: 3;">
						</div>
						<div style="margin-top: 30px; margin-left: 30px;">
							<img src="<?= base_url('public/img/stamp.png'); ?>" style="width: 200px; right: 125px; margin-top: -200px; z-index: 4; margin-left: 55px;">
						</div>
					</div>
				</div>

				<div class="footer" style="border-top: 1px solid black; padding-top: 5px; font-size: 10px;">
					<div style="width: 10%; float: left;">
						<img src="<?= base_url('public/img/pic_footer.png'); ?>">
					</div>
					<div style="width: 30%; float: left;">
						SMDG Logistic GmbH<br>
						Am Bahndamm 17<br>
						54338 Schweich<br>
						Deutschland<br>
					</div>
					<div style="width: 30%; float: left;">
						USt-IdNr. DE317198791<br>
						Tel: +498005007015<br>
						Fax: +498005007015<br>
						Email: contact@smdglogistic.com<br>
					</div>
					<div style="width: 30%; float: left;">
						<?= $transaction[0]->b_detail_1 ?><br>
						IBAN: <?= $transaction[0]->b_detail_2 ?><br>
						SWIFT/BIC: <?= $transaction[0]->b_detail_3 ?><br>
					</div>
				</div>
			</div>