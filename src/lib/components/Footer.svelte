<script lang="ts">
	const currentYear = new Date().getFullYear();
</script>

<footer class="footer">
	<div class="container">
		<div class="footer-content">
			<div class="footer-section">
				<h3>Maxime Aupetit</h3>
				<p>Développeur Web Fullstack</p>
				<p>Passionné par les nouvelles technologies</p>
			</div>

			<div class="footer-section">
				<h4>Navigation</h4>
				<ul class="footer-links">
					<li><a href="#home">Accueil</a></li>
					<li><a href="#about">À propos</a></li>
					<li><a href="#skills">Compétences</a></li>
					<li><a href="#projects">Projets</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</div>

			<div class="footer-section">
				<h4>Légal</h4>
				<ul class="footer-links">
					<li><a href="/mentions-legales">Mentions légales</a></li>
					<li><a href="/politique-confidentialite">Politique de confidentialité</a></li>
					<li><a href="/politique-cookies">Politique des cookies</a></li>
				</ul>
			</div>

			<div class="footer-section">
				<h4>Contact</h4>
				<p>Disponible pour de nouveaux projets</p>
				<p>Ouvert aux opportunités de CDI et contrats de professionnalisation</p>
			</div>
		</div>

		<div class="footer-bottom">
			<p>&copy; {currentYear} Maxime Aupetit. Tous droits réservés.</p>
		</div>
	</div>
</footer>

<style>
	.footer {
		background: #0a1a13;
		padding: 3rem 0 1rem;
		border-top: 1px solid #284d3c;
	}

	.footer-content {
		display: grid;
		grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
		gap: 2rem;
		margin-bottom: 2rem;
	}

	.footer-section h3 {
		color: #3fa38e;
		margin-bottom: 1rem;
		font-size: 1.5rem;
	}

	.footer-section h4 {
		color: #ffffff;
		margin-bottom: 1rem;
		font-size: 1.2rem;
	}

	.footer-section p {
		color: #c2e4db;
		margin-bottom: 0.5rem;
	}

	.footer-links {
		list-style: none;
		padding: 0;
	}

	.footer-links li {
		margin-bottom: 0.5rem;
	}

	.footer-links a {
		color: #c2e4db;
		text-decoration: none;
		transition: color 0.3s ease;
	}

	.footer-links a:hover {
		color: #3fa38e;
	}

	.footer-bottom {
		text-align: center;
		padding-top: 2rem;
		border-top: 1px solid #284d3c;
	}

	.footer-bottom p {
		color: #5ea393;
		margin: 0;
	}

	@media (max-width: 768px) {
		.footer-content {
			grid-template-columns: 1fr;
			gap: 1.5rem;
		}

		.footer {
			padding: 2rem 0 1rem;
		}
	}
</style>
