<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Attestation de déplacement dérogatoire</title>

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/fontawesome-5.15.1/css/all.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<header>
		<div class="container">
			<h1>COVID-19</h1>
			<h3>Attestation de déplacement dérogatoire</h3>
			<p class="font-italic">En application du décret n°2020-1310 du 29 octobre 2020 prescrivant les mesures générales nécessaires pour faire face à l'épidémie de Covid19 dans le cadre de l'état d'urgence sanitaire.</p>
		</div>
	</header>

	<nav class="navbar navbar-default navbar-expand-lg no-margin no-border no-radius">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse"><span class="fas fa-bars"></span></button>

				<span class="navbar-text">Remplissez en ligne votre déclaration numérique</span>
			</div>

			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav ml-auto">
					<li class="nav-item"><a href="https://media.interieur.gouv.fr/deplacement-covid-19/" class="nav-link" target="_blank">Générateur d'attestation de déplacement dérogatoire officiel</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">	
		<form action="#" class="needs-validation" novalidate>
			<h2 class="section-title font-bold">État civil</h2>

			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="lastname">Nom</label>
					<input type="text" class="form-control" id="lastname" name="lastname" required>

					<div class="invalid-feedback">
						Le champ est obligatoire
					</div>
				</div>

				<div class="form-group col-md-6">
					<label for="firstname">Prénom</label>
					<input type="text" class="form-control" id="firstname" name="firstname" required>

					<div class="invalid-feedback">
						Le champ est obligatoire
					</div>
				</div>
			</div>

			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="birthday">Date de naissance</label>
					<input type="date" class="form-control" id="birthday" name="dob" maxlength="10" pattern="^([0][1-9]|[1-2][0-9]|30|31)/([0][1-9]|10|11|12)/(19[0-9][0-9]|20[0-1][0-9]|2020)" required>

					<div class="invalid-feedback">
						Le champ est obligatoire
					</div>
				</div>

				<div class="form-group col-md-6">
					<label for="placeofbirth">Lieu de naissance</label>
					<input type="text" class="form-control" id="placeofbirth" name="placeofbirth" required>

					<div class="invalid-feedback">
						Le champ est obligatoire
					</div>
				</div>
			</div>

			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="address">Adresse</label>
					<input type="text" class="form-control" id="address" name="address" required>

					<div class="invalid-feedback">
						Le champ est obligatoire
					</div>
				</div>

				<div class="form-group col-md-4">
					<label for="city">Ville</label>
					<input type="text" class="form-control" id="city" name="city" required>

					<div class="invalid-feedback">
						Le champ est obligatoire
					</div>
				</div>

				<div class="form-group col-md-4">
					<label for="zipcode">Code Postal</label>
					<input type="number" class="form-control" id="zipcode" name="zipcode" minlength="4" maxlength="5" min="1000" max="99999" pattern="[0-9]{5}" required>

					<div class="invalid-feedback">
						Le champ est obligatoire
					</div>
				</div>
			</div>

			<h2 class="section-title font-bold">Date de déplacement</h2>

			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="releasedate">Date de sortie</label>
					<input type="date" class="form-control" id="releasedate" name="releasedate" maxlength="10" pattern="^([0][1-9]|[1-2][0-9]|30|31)/([0][1-9]|10|11|12)/(19[0-9][0-9]|20[0-1][0-9]|2020)" required>
				
					<div class="invalid-feedback">
						Le champ est obligatoire
					</div>
				</div>

				<div class="form-group col-md-6">
					<label for="outinghour">Heure de sortie</label>
					<input type="time" class="form-control" id="outinghour" name="outinghour" required>

					<div class="invalid-feedback">
						Le champ est obligatoire
					</div>
				</div>
			</div>

			<fieldset>
				<h2 class="section-title font-bold">Choisissez un motif de déplacement</h2>

				<p class="text-muted font-italic">Je certifie que mon déplacement est lié au motif suivant (cocher la case) autorisé par le décret n°2020-1310 du 29 octobre 2020 prescrivant les mesures générales nécessaires pour faire face à l'épidémie de Covid19 dans le cadre de l'état d'urgence sanitaire <a href="javascript:void(0);" data-container="body" data-toggle="popover" data-placement="top" data-content="Les personnes souhaitant bénéficier de l'une de ces exceptions doivent se munir s'il y a lieu, lors de leurs déplacements hors de leur domicile, d'un document leur permettant de justifier que le déplacement considéré entre dans le champ de l'une de ces exceptions.">[1]</a> :</p>

				<div class="form-check">
					<input class="form-check-input" name="reasons"  type="checkbox" value="travail">
					<label class="form-check-label">Déplacements entre le domicile et le lieu d’exercice de l’activité professionnelle ou un établissement d’enseignement ou de formation, déplacements professionnels ne pouvant être différés <a href="javascript:void(0);" data-container="body" data-toggle="popover" data-placement="top" data-content="À utiliser par les travailleurs non salariés, lorsqu'ils ne peuvent disposer d'un justificatif de déplacement établi par leur employeur.">[2]</a>, déplacements pour un concours ou un examen</label>
				</div>

				<div class="form-check">
					<input class="form-check-input" name="reasons"  type="checkbox" value="achats">
					<label class="form-check-label">Déplacements pour effectuer des achats de fournitures nécessaires à l'activité professionnelle, des achats de première nécessité <a href="javascript:void(0);" data-container="body" data-toggle="popover" data-placement="top" data-content="Y compris les acquisitions à titre gratuit (distribution de denrées alimentaires...) et les déplacements liés à la perception de prestations sociales et au retrait d'espèces.">[3]</a> dans des établissements dont les activités demeurent autorisées, le retrait de commande et les livraisons à domicile</label>
				</div>

				<div class="form-check">
					<input class="form-check-input" name="reasons"  type="checkbox" value="sante">
					<label class="form-check-label">Consultations, examens et soins ne pouvant être assurés à distance et l’achat de médicaments</label>
				</div>

				<div class="form-check">
					<input class="form-check-input" name="reasons"  type="checkbox" value="famille">
					<label class="form-check-label">Déplacements pour motif familial impérieux, pour l'assistance aux personnes vulnérables et précaires ou la garde d'enfants</label>
				</div>

				<div class="form-check">
					<input class="form-check-input" name="reasons"  type="checkbox" value="handicap">
					<label class="form-check-label">Déplacement des personnes en situation de handicap et leur accompagnant</label>
				</div>

				<div class="form-check">
					<input class="form-check-input" name="reasons"  type="checkbox" value="sport_animaux">
					<label class="form-check-label">Déplacements brefs, dans la limite d'une heure quotidienne et dans un rayon maximal d'un kilomètre autour du domicile, liés soit à l'activité physique individuelle des personnes, à l'exclusion de toute pratique sportive collective et de toute proximité avec d'autres personnes, soit à la promenade avec les seules personnes regroupées dans un même domicile, soit aux besoins des animaux de compagnie</label>
				</div>

				<div class="form-check">
					<input class="form-check-input" name="reasons"  type="checkbox" value="convocation">
					<label class="form-check-label">Convocation judiciaire ou administrative et pour se rendre dans un service public</label>
				</div>

				<div class="form-check">
					<input class="form-check-input" name="reasons"  type="checkbox" value="missions">
					<label class="form-check-label">Participation à des missions d'intérêt général sur demande de l'autorité administrative</label>
				</div>

				<div class="form-check">
					<input class="form-check-input" name="reasons"  type="checkbox" value="enfants">
					<label class="form-check-label">Déplacement pour chercher les enfants à l’école et à l’occasion de leurs activités périscolaires</label>
				</div>
			</fieldset>

			<button type="submit" class="btn btn-primary btn-lg mt-5" id="make">Générer mon attestation</button>
		</form>
	</div>

	<div class="modal fade" id="qrcode_modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Votre attestion (QR Code)</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>

				<div class="modal-body">
					<center>
						<div id="qrcode"></div>
					</center>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-primary" id="download"><i class="fas fa-download"></i></button>
				</div>
			</div>
		</div>
	</div>
	
	<footer>
		<div class="container">
			<p class="text-white no-margin">
				&copy; Copyright 2020 Développer avec <i class="fas fa-heart text-alizarin-crimson"></i> par <a href="//github.com/Eurym3d0n" target="_blank">Jessy LELIEVRE</a>.
			</p>
		</div>
	</footer>

	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/popper.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery-qrcode-0.18.0.min.js"></script>
	<script type="text/javascript" src="assets/js/download.js"></script>
	<script type="text/javascript" src="assets/js/application.js"></script>
	<script type="text/javascript">
		$(function() {
			var form = $('form');
			var validation = Array.prototype.filter.call(form, function(form) {
				form.addEventListener('submit', function(e) {
					e.preventDefault();
					
					if(form.checkValidity() == false) {
						e.stopPropagation();
					} else {
						var data = {
							uid: $.uid(),
							firstname: $.getFieldValue('firstname'),
							lastname: $.getFieldValue('lastname'),
							dob: $.getFieldValue('dob'),
							placeofbirth: $.getFieldValue('placeofbirth'),
							address: $.getFieldValue('address'),
							city: $.getFieldValue('city'),
							zipcode: $.getFieldValue('zipcode')
						};

						var releasedate = $.getFieldValue('releasedate');
						var outinghour = $.getFieldValue('outinghour');
						var reasons = [];

						$('input[name=reasons]:checked').each(function() {
							reasons.push($(this).val());	
						});

						var dt = new Date();

						var map = {
							currentDate: dt.toLocaleDateString('fr-FR'),
							currentTime: $.pad(dt.getHours()) + 'h' + $.pad(dt.getMinutes()),

							lastname: data.lastname,
							firstname: data.firstname,
							dob: $.getFormattedDate(data.dob),
							placeofbirth: data.placeofbirth,

							releasedate: $.getFormattedDate(releasedate),
							outinghour: $.pad(outinghour),

							reasons: reasons.join(', ')
						}

						var text = 'Cree le: <%[currentDate]%> a <%[currentTime]%>;\r\nNom: <%[lastname]%>;\r\nPrenom: <%[firstname]%>;\r\nNaissance: <%[dob]%> a <%[placeofbirth]%>;\r\nSortie: <%[releasedate]%> a <%[outinghour]%>;\r\nMotifs: <%[reasons]%>';
							text = text.replace(/<%\[([^\]]+)\]%>/g, function(match, key) {
								return map[key] || match;
							});

						$('#qrcode').qrcode({
							render: 'image',
							minVersion: 1,
							maxVersion: 40,
							ecLevel: 'H',
							left: 0,
							right: 0,
							quiet: 2,
							radius: 0,
							size: 250,
							fill: '#1d274a',
							background: null,
							text: text
						});

						$('canvas').attr('id', 'result');
						$('#qrcode_modal').modal('toggle');
					}

					form.classList.add('was-validated');
				}, false);
			}, false);

			$('button#download').click(function(e) {
				e.preventDefault();
				
				download($('#qrcode > img').attr('src'), 'attestation-' + $.uid() + '.png', 'image/png');
				$('#qrcode_modal').modal('hide');
			})



			$('#qrcode_modal').on('hidden.bs.modal', function(e) {
				$('#qrcode').empty();
			});
		});
	</script>
</body>
</html>