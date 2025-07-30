<script lang="ts">
	import { onMount } from 'svelte';

	onMount(() => {
		document.title = 'Politique des cookies - Maxime Aupetit';
	});
</script>

<div class="legal-page">
	<div class="container">
		<header class="page-header">
			<h1>Politique des cookies</h1>
			<nav class="breadcrumb">
				<a href="/">Accueil</a> > Politique des cookies
			</nav>
		</header>

		<div class="legal-content">
			<div class="intro-block">
				<p>
					<strong>Dernière mise à jour :</strong>
					{new Date().toLocaleDateString('fr-FR')}
				</p>
				<p>
					Cette politique explique l'utilisation des cookies sur le site web de Maxime Aupetit.
					<strong>Ce site vitrine n'utilise pas de cookies particuliers.</strong>
				</p>
			</div>

			<section class="legal-section">
				<h2>1. Qu'est-ce qu'un cookie ?</h2>
				<p>
					Un cookie est un petit fichier texte stocké sur votre ordinateur, tablette ou smartphone
					lorsque vous visitez un site web. Les cookies permettent au site de mémoriser vos actions
					et préférences pendant une période donnée.
				</p>
			</section>

			<section class="legal-section">
				<h2>2. Utilisation des cookies sur ce site</h2>

				<div class="no-cookies-block">
					<h3>🍪 Aucun cookie spécifique utilisé</h3>
					<p>
						Ce site web est un <strong>site vitrine statique</strong> qui ne nécessite pas l'utilisation
						de cookies particuliers. Nous n'utilisons pas :
					</p>
					<ul>
						<li>❌ Cookies de session utilisateur</li>
						<li>❌ Cookies d'analyse (Google Analytics, etc.)</li>
						<li>❌ Cookies de préférences</li>
						<li>❌ Cookies publicitaires</li>
						<li>❌ Cookies de réseaux sociaux</li>
						<li>❌ Cookies de suivi comportemental</li>
					</ul>
				</div>

				<div class="technical-info">
					<h3>⚙️ Cookies techniques potentiels</h3>
					<p>
						Seuls les cookies strictement nécessaires au fonctionnement technique du site peuvent
						être présents, générés automatiquement par :
					</p>
					<ul>
						<li><strong>Le serveur web :</strong> pour la sécurité et la stabilité de connexion</li>
						<li><strong>Le navigateur :</strong> pour le cache et l'affichage optimal du site</li>
					</ul>
					<p>
						Ces cookies techniques ne collectent aucune donnée personnelle et sont automatiquement
						supprimés à la fermeture du navigateur.
					</p>
				</div>
			</section>

			<section class="legal-section">
				<h2>3. Pourquoi ce site n'utilise pas de cookies ?</h2>

				<div class="reasons-grid">
					<div class="reason-item">
						<h4>🎯 Site vitrine simple</h4>
						<p>Présentation statique de compétences et projets sans fonctionnalités complexes</p>
					</div>
					<div class="reason-item">
						<h4>🔒 Respect de la vie privée</h4>
						<p>Aucun suivi, aucune collecte de données comportementales</p>
					</div>
					<div class="reason-item">
						<h4>⚡ Performance optimale</h4>
						<p>Chargement rapide sans scripts de tracking externes</p>
					</div>
					<div class="reason-item">
						<h4>📱 Simplicité d'usage</h4>
						<p>Pas de bannières de consentement ou de paramètres complexes</p>
					</div>
				</div>
			</section>

			<section class="legal-section">
				<h2>4. Formulaire de contact</h2>
				<p>
					Le formulaire de contact présent sur ce site envoie directement un email sans stocker
					d'informations dans des cookies. Les données saisies sont :
				</p>
				<ul>
					<li>Transmises uniquement par email</li>
					<li>Non stockées dans le navigateur</li>
					<li>Non utilisées à des fins de tracking</li>
				</ul>
			</section>

			<section class="legal-section">
				<h2>5. Gestion des cookies du navigateur</h2>
				<p>
					Bien que ce site n'utilise pas de cookies spécifiques, vous pouvez à tout moment
					configurer votre navigateur pour gérer les cookies en général :
				</p>

				<div class="browser-instructions">
					<div class="browser-item">
						<h4>Chrome</h4>
						<p>Paramètres > Confidentialité et sécurité > Cookies et autres données de sites</p>
					</div>
					<div class="browser-item">
						<h4>Firefox</h4>
						<p>Options > Vie privée et sécurité > Cookies et données de sites</p>
					</div>
					<div class="browser-item">
						<h4>Safari</h4>
						<p>Préférences > Confidentialité > Cookies et données de sites web</p>
					</div>
					<div class="browser-item">
						<h4>Edge</h4>
						<p>Paramètres > Cookies et autorisations de site</p>
					</div>
				</div>
			</section>

			<section class="legal-section">
				<h2>6. Évolutions futures</h2>
				<div class="info-block">
					<p>
						Si dans le futur ce site venait à utiliser des cookies (analytics, fonctionnalités
						avancées, etc.), cette politique serait mise à jour en conséquence et vous en seriez
						informé.
					</p>
					<p>
						Toute utilisation future de cookies respecterait la réglementation en vigueur (RGPD,
						directive ePrivacy) avec demande de consentement appropriée.
					</p>
				</div>
			</section>

			<section class="legal-section">
				<h2>7. Contact</h2>
				<p>Pour toute question concernant cette politique des cookies, contactez-nous :</p>
				<div class="contact-info">
					<p><strong>Email :</strong> maximeaupetit60@gmail.com</p>
					<p><strong>Téléphone :</strong> 06 40 70 92 02</p>
				</div>
			</section>

			<section class="legal-section">
				<h2>8. Modifications</h2>
				<p>
					Cette politique des cookies peut être modifiée pour refléter les changements dans nos
					pratiques ou pour d'autres raisons opérationnelles, légales ou réglementaires.
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
		margin-top: 1.5rem;
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

	.no-cookies-block,
	.technical-info {
		background: #142821;
		padding: 1.5rem;
		border-radius: 8px;
		margin-bottom: 1.5rem;
		border: 1px solid #284d3c;
	}

	.no-cookies-block h3 {
		color: #3fa38e;
		font-size: 1.1rem;
		margin-bottom: 1rem;
	}

	.technical-info h3 {
		color: #ffffff;
		font-size: 1.1rem;
		margin-bottom: 1rem;
	}

	.reasons-grid,
	.browser-instructions {
		display: grid;
		grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
		gap: 1rem;
		margin: 1.5rem 0;
	}

	.reason-item,
	.browser-item {
		background: #142821;
		padding: 1rem;
		border-radius: 8px;
		border: 1px solid #284d3c;
	}

	.reason-item h4,
	.browser-item h4 {
		margin-bottom: 0.5rem;
		color: #3fa38e;
	}

	.reason-item p,
	.browser-item p {
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
		.no-cookies-block,
		.technical-info,
		.contact-info {
			padding: 1rem;
		}

		.reasons-grid,
		.browser-instructions {
			grid-template-columns: 1fr;
		}
	}
</style>
