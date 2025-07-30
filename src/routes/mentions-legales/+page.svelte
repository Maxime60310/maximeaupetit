<script lang="ts">
	import { onMount } from 'svelte';

	onMount(() => {
		document.title = 'Mentions légales - Maxime Aupetit';
	});
</script>

<div class="legal-page">
	<div class="container">
		<header class="page-header">
			<h1>Mentions légales</h1>
			<nav class="breadcrumb">
				<a href="/">Accueil</a> > Mentions légales
			</nav>
		</header>

		<div class="legal-content">
			<section class="legal-section">
				<h2>1. Informations légales</h2>
				<div class="info-block">
					<h3>Éditeur du site</h3>
					<p><strong>Nom :</strong> Maxime Aupetit</p>
					<p><strong>Statut :</strong> Développeur Web Freelance</p>
					<p><strong>Email :</strong> maximeaupetit60@gmail.com</p>
					<p><strong>Téléphone :</strong> 06 40 70 92 02</p>
					<p><strong>Localisation :</strong> Compiègne, Noyon, France</p>
				</div>
			</section>

			<section class="legal-section">
				<h2>2. Hébergement</h2>
				<div class="info-block">
					<p><strong>Hébergeur :</strong> À définir selon votre hébergeur</p>
					<p><strong>Adresse :</strong> À compléter</p>
					<p><strong>Téléphone :</strong> À compléter</p>
				</div>
			</section>

			<section class="legal-section">
				<h2>3. Propriété intellectuelle</h2>
				<p>
					L'ensemble de ce site relève de la législation française et internationale sur le droit
					d'auteur et la propriété intellectuelle. Tous les droits de reproduction sont réservés, y
					compris pour les documents téléchargeables et les représentations iconographiques et
					photographiques.
				</p>
				<p>
					La reproduction de tout ou partie de ce site sur un support électronique quel qu'il soit
					est formellement interdite sauf autorisation expresse du directeur de la publication.
				</p>
			</section>

			<section class="legal-section">
				<h2>4. Responsabilité</h2>
				<p>
					Les informations contenues sur ce site sont aussi précises que possible et le site est
					périodiquement remis à jour, mais peut toutefois contenir des inexactitudes, des omissions
					ou des lacunes.
				</p>
				<p>
					Si vous constatez une lacune, erreur ou ce qui parait être un dysfonctionnement, merci de
					bien vouloir le signaler par email à l'adresse <strong>maximeaupetit60@gmail.com</strong> en
					décrivant le problème de la manière la plus précise possible.
				</p>
			</section>

			<section class="legal-section">
				<h2>5. Liens hypertextes</h2>
				<p>
					Les liens hypertextes mis en place dans le cadre du présent site web en direction d'autres
					ressources présentes sur le réseau Internet ne sauraient engager la responsabilité de
					Maxime Aupetit.
				</p>
			</section>

			<section class="legal-section">
				<h2>6. Données personnelles</h2>
				<p>
					Conformément au Règlement Général sur la Protection des Données (RGPD) et à la loi
					Informatique et Libertés, vous disposez d'un droit d'accès, de rectification, de
					suppression et d'opposition au traitement de vos données personnelles.
				</p>
				<p>
					Pour exercer ces droits ou pour toute question sur le traitement de vos données, vous
					pouvez nous contacter à l'adresse :
					<strong>maximeaupetit60@gmail.com</strong>
				</p>
			</section>

			<section class="legal-section">
				<h2>7. Droit applicable</h2>
				<p>
					Le présent site web et les présentes mentions légales sont régis par le droit français. En
					cas de litige, les tribunaux français seront seuls compétents.
				</p>
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
		max-width: 800px;
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
	}

	.legal-section p {
		line-height: 1.6;
		margin-bottom: 1rem;
		color: #c2e4db;
	}

	.legal-section p:last-child {
		margin-bottom: 0;
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

		.info-block {
			padding: 1rem;
		}
	}
</style>
