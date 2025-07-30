<script lang="ts">
	import { onMount } from 'svelte';

	onMount(() => {
		document.title = 'Politique de confidentialité - Maxime Aupetit';
	});
</script>

<div class="legal-page">
	<div class="container">
		<header class="page-header">
			<h1>Politique de confidentialité</h1>
			<nav class="breadcrumb">
				<a href="/">Accueil</a> > Politique de confidentialité
			</nav>
		</header>

		<div class="legal-content">
			<div class="intro-block">
				<p>
					<strong>Dernière mise à jour :</strong>
					{new Date().toLocaleDateString('fr-FR')}
				</p>
				<p>
					Cette politique de confidentialité décrit comment Maxime Aupetit collecte, utilise et
					protège vos informations personnelles lorsque vous utilisez ce site web.
				</p>
			</div>

			<section class="legal-section">
				<h2>1. Informations collectées</h2>
				<h3>1.1 Informations que vous nous fournissez</h3>
				<p>Lorsque vous utilisez notre formulaire de contact, nous collectons :</p>
				<ul>
					<li>Votre nom complet</li>
					<li>Votre adresse email</li>
					<li>Le sujet de votre message</li>
					<li>Le contenu de votre message</li>
				</ul>

				<h3>1.2 Informations collectées automatiquement</h3>
				<p>Lors de votre navigation sur le site, nous pouvons collecter automatiquement :</p>
				<ul>
					<li>Votre adresse IP</li>
					<li>Le type de navigateur utilisé</li>
					<li>Les pages visitées</li>
					<li>La date et l'heure de votre visite</li>
					<li>Les données de performance du site</li>
				</ul>
			</section>

			<section class="legal-section">
				<h2>2. Utilisation des données</h2>
				<p>Nous utilisons vos données personnelles pour :</p>
				<ul>
					<li>Répondre à vos demandes de contact</li>
					<li>Améliorer notre site web et nos services</li>
					<li>Analyser l'utilisation du site</li>
					<li>Respecter nos obligations légales</li>
				</ul>
			</section>

			<section class="legal-section">
				<h2>3. Base légale du traitement</h2>
				<p>Le traitement de vos données personnelles est basé sur :</p>
				<ul>
					<li>
						<strong>Votre consentement :</strong> pour l'envoi de messages via le formulaire de contact
					</li>
					<li>
						<strong>Intérêt légitime :</strong> pour l'amélioration du site et l'analyse des performances
					</li>
					<li><strong>Obligation légale :</strong> pour respecter les exigences réglementaires</li>
				</ul>
			</section>

			<section class="legal-section">
				<h2>4. Partage des données</h2>
				<p>
					Nous ne vendons, n'échangeons, ni ne transférons vos informations personnelles à des
					tiers, sauf dans les cas suivants :
				</p>
				<ul>
					<li>Avec votre consentement explicite</li>
					<li>Pour respecter une obligation légale</li>
					<li>Pour protéger nos droits et notre sécurité</li>
					<li>Avec nos prestataires de services (hébergement, analyse)</li>
				</ul>
			</section>

			<section class="legal-section">
				<h2>5. Conservation des données</h2>
				<div class="info-block">
					<p><strong>Messages de contact :</strong> Conservés pendant 3 ans maximum</p>
					<p><strong>Données de navigation :</strong> Conservées pendant 13 mois maximum</p>
					<p><strong>Logs serveur :</strong> Conservés pendant 12 mois maximum</p>
				</div>
			</section>

			<section class="legal-section">
				<h2>6. Vos droits</h2>
				<p>Conformément au RGPD, vous disposez des droits suivants :</p>

				<div class="rights-grid">
					<div class="right-item">
						<h4>Droit d'accès</h4>
						<p>Obtenir une copie de vos données personnelles</p>
					</div>
					<div class="right-item">
						<h4>Droit de rectification</h4>
						<p>Corriger vos données inexactes ou incomplètes</p>
					</div>
					<div class="right-item">
						<h4>Droit à l'effacement</h4>
						<p>Demander la suppression de vos données</p>
					</div>
					<div class="right-item">
						<h4>Droit d'opposition</h4>
						<p>Vous opposer au traitement de vos données</p>
					</div>
					<div class="right-item">
						<h4>Droit à la portabilité</h4>
						<p>Récupérer vos données dans un format structuré</p>
					</div>
					<div class="right-item">
						<h4>Droit de limitation</h4>
						<p>Limiter le traitement de vos données</p>
					</div>
				</div>

				<p>
					Pour exercer ces droits, contactez-nous à : <strong>maximeaupetit60@gmail.com</strong>
				</p>
			</section>

			<section class="legal-section">
				<h2>7. Sécurité des données</h2>
				<p>
					Nous mettons en place des mesures techniques et organisationnelles appropriées pour
					protéger vos données personnelles contre :
				</p>
				<ul>
					<li>L'accès non autorisé</li>
					<li>La divulgation</li>
					<li>La modification</li>
					<li>La destruction</li>
				</ul>
			</section>

			<section class="legal-section">
				<h2>8. Cookies et technologies similaires</h2>
				<p>
					Ce site utilise des cookies pour améliorer votre expérience de navigation. Pour plus
					d'informations, consultez notre
					<a href="/politique-cookies">politique des cookies</a>.
				</p>
			</section>

			<section class="legal-section">
				<h2>9. Modifications de la politique</h2>
				<p>
					Nous nous réservons le droit de modifier cette politique de confidentialité à tout moment.
					Les modifications seront publiées sur cette page avec une nouvelle date de mise à jour.
				</p>
			</section>

			<section class="legal-section">
				<h2>10. Contact</h2>
				<p>
					Pour toute question concernant cette politique de confidentialité ou le traitement de vos
					données, contactez-nous :
				</p>
				<div class="contact-info">
					<p><strong>Email :</strong> maximeaupetit60@gmail.com</p>
					<p><strong>Téléphone :</strong> 06 40 70 92 02</p>
				</div>
			</section>
		</div>

		<div class="back-link">
			<a href="/" class="btn">Retour à l'accueil</a>
		</div>
	</div>
</div>

<style>
	.legal-page {
		min-height: 100vh;
		background: linear-gradient(135deg, #0a1a13 0%, #142821 100%);
		padding: 2rem 0;
		color: #e0f2ed;
	}

	.container {
		max-width: 900px;
		margin: 0 auto;
		padding: 0 1rem;
	}

	.page-header {
		text-align: center;
		margin-bottom: 3rem;
		padding: 2rem 0;
	}

	.page-header h1 {
		font-size: 2.5rem;
		color: #3fa38e;
		margin-bottom: 1rem;
	}

	.breadcrumb {
		color: #c2e4db;
		font-size: 0.9rem;
	}

	.breadcrumb a {
		color: #3fa38e;
		text-decoration: none;
		transition: color 0.3s ease;
	}

	.breadcrumb a:hover {
		color: #40a390;
	}

	.legal-content {
		background: #1b3d30;
		border-radius: 12px;
		padding: 2rem;
		box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
		margin-bottom: 2rem;
	}

	.intro-block {
		background: #142821;
		padding: 1.5rem;
		border-radius: 8px;
		border-left: 4px solid #3fa38e;
		margin-bottom: 2rem;
	}

	.intro-block p {
		margin-bottom: 0.5rem;
		color: #c2e4db;
	}

	.intro-block p:last-child {
		margin-bottom: 0;
	}

	.legal-section {
		margin-bottom: 2rem;
	}

	.legal-section:last-child {
		margin-bottom: 0;
	}

	.legal-section h2 {
		color: #3fa38e;
		font-size: 1.4rem;
		margin-bottom: 1rem;
		border-bottom: 2px solid #284d3c;
		padding-bottom: 0.5rem;
	}

	.legal-section h3 {
		color: #ffffff;
		font-size: 1.1rem;
		margin-bottom: 0.5rem;
		margin-top: 1rem;
	}

	.legal-section h4 {
		color: #3fa38e;
		font-size: 1rem;
		margin-bottom: 0.5rem;
	}

	.legal-section p {
		line-height: 1.6;
		margin-bottom: 1rem;
		color: #c2e4db;
	}

	.legal-section p:last-child {
		margin-bottom: 0;
	}

	.legal-section ul {
		margin: 1rem 0;
		padding-left: 1.5rem;
	}

	.legal-section li {
		margin-bottom: 0.5rem;
		color: #c2e4db;
		line-height: 1.5;
	}

	.info-block {
		background: #142821;
		padding: 1.5rem;
		border-radius: 8px;
		border-left: 4px solid #3fa38e;
	}

	.info-block p {
		margin-bottom: 0.5rem;
	}

	.info-block p:last-child {
		margin-bottom: 0;
	}

	.rights-grid {
		display: grid;
		grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
		gap: 1rem;
		margin: 1.5rem 0;
	}

	.right-item {
		background: #142821;
		padding: 1rem;
		border-radius: 8px;
		border: 1px solid #284d3c;
	}

	.right-item h4 {
		margin-bottom: 0.5rem;
	}

	.right-item p {
		margin: 0;
		font-size: 0.9rem;
	}

	.contact-info {
		background: #142821;
		padding: 1rem;
		border-radius: 8px;
		border-left: 4px solid #3fa38e;
	}

	.contact-info p {
		margin-bottom: 0.5rem;
	}

	.contact-info p:last-child {
		margin-bottom: 0;
	}

	.legal-section a {
		color: #3fa38e;
		text-decoration: none;
	}

	.legal-section a:hover {
		color: #40a390;
		text-decoration: underline;
	}

	.back-link {
		text-align: center;
	}

	.btn {
		display: inline-block;
		padding: 0.75rem 1.5rem;
		background: #3fa38e;
		color: #ffffff;
		text-decoration: none;
		border-radius: 8px;
		font-weight: 500;
		transition: all 0.3s ease;
	}

	.btn:hover {
		background: #40a390;
		transform: translateY(-2px);
	}

	@media (max-width: 768px) {
		.page-header h1 {
			font-size: 2rem;
		}

		.legal-content {
			padding: 1.5rem;
		}

		.legal-section h2 {
			font-size: 1.2rem;
		}

		.intro-block,
		.info-block,
		.contact-info {
			padding: 1rem;
		}

		.rights-grid {
			grid-template-columns: 1fr;
		}
	}
</style>
