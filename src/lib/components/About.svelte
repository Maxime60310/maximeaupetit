<section id="about" class="section alternate">
	<div class="container">
		<h2 class="section-title">À propos de moi</h2>
		<p class="section-subtitle">Mon parcours et ma passion pour le développement</p>

		<div class="about-content">
			<div class="about-text">
				<div class="story-card card">
					<h3>Mon histoire</h3>
					<p>
						Passionné par l'informatique depuis toujours, mon intérêt pour le code a débuté avec la
						création d'un site web par mon père durant mon enfance. Bien que mon parcours initial ne
						m'ait pas permis de suivre cette voie, j'ai décidé en 2024 de me lancer dans une
						formation à plein temps pour devenir développeur.
					</p>
					<p>
						Je continue d'apprendre chaque jour de nouvelles technologies et langages, toujours
						motivé par cette passion qui m'anime depuis l'enfance.
					</p>
				</div>

				<div class="objective-card card">
					<h3>Mon objectif</h3>
					<p>
						Mon objectif est de monter en compétences continuellement. Je suis ouvert à des
						opportunités de CDI, mais je serais particulièrement ravi de trouver une entreprise
						prête à m'accueillir en tant qu'apprenant pour un contrat de professionnalisation (CDA).
					</p>
					<p>
						Je recherche un environnement où je peux contribuer tout en continuant à apprendre et à
						me développer professionnellement.
					</p>
				</div>
			</div>

			<div class="about-details">
				<div class="detail-card card">
					<h3>Formation</h3>
					<div class="detail-item">
						<span class="detail-label">Diplôme</span>
						<span class="detail-value"
							>Diplôme professionnel Développeur Web / Web Mobile Fullstack Bac+2</span
						>
					</div>
					<div class="detail-item">
						<span class="detail-label">Début</span>
						<span class="detail-value">Avril 2024</span>
					</div>
					<div class="detail-item">
						<span class="detail-label">Spécialité</span>
						<span class="detail-value">Développement Fullstack</span>
					</div>
				</div>

				<div class="values-card card">
					<h3>Mes valeurs</h3>
					<ul class="values-list">
						<li>
							<span class="value-icon">🚀</span>
							<div>
								<strong>Innovation</strong>
								<p>Toujours à la recherche de nouvelles solutions</p>
							</div>
						</li>
						<li>
							<span class="value-icon">📚</span>
							<div>
								<strong>Apprentissage continu</strong>
								<p>Curiosité et soif d'apprendre</p>
							</div>
						</li>
						<li>
							<span class="value-icon">🤝</span>
							<div>
								<strong>Collaboration</strong>
								<p>Travail d'équipe et partage de connaissances</p>
							</div>
						</li>
						<li>
							<span class="value-icon">💡</span>
							<div>
								<strong>Créativité</strong>
								<p>Solutions originales et design moderne</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<style>
	.about-content {
		display: grid;
		grid-template-columns: 1fr 1fr;
		gap: 3rem;
		margin-top: 3rem;
	}

	.about-text {
		display: flex;
		flex-direction: column;
		gap: 2rem;
	}

	.about-details {
		display: flex;
		flex-direction: column;
		gap: 2rem;
	}

	.story-card,
	.objective-card,
	.detail-card,
	.values-card {
		height: fit-content;
	}

	.detail-item {
		display: flex;
		justify-content: space-between;
		align-items: flex-start;
		margin-bottom: 1rem;
		padding-bottom: 1rem;
		border-bottom: 1px solid #284d3c;
	}

	.detail-item:last-child {
		border-bottom: none;
		margin-bottom: 0;
		padding-bottom: 0;
	}

	.detail-label {
		font-weight: 600;
		color: #3fa38e;
		min-width: 80px;
	}

	.detail-value {
		color: #c2e4db;
		text-align: right;
		flex: 1;
		margin-left: 1rem;
	}

	.values-list {
		list-style: none;
		padding: 0;
	}

	.values-list li {
		display: flex;
		align-items: flex-start;
		gap: 1rem;
		margin-bottom: 1.5rem;
	}

	.values-list li:last-child {
		margin-bottom: 0;
	}

	.value-icon {
		font-size: 1.5rem;
		flex-shrink: 0;
	}

	.values-list strong {
		color: #ffffff;
		display: block;
		margin-bottom: 0.25rem;
	}

	.values-list p {
		color: #c2e4db;
		font-size: 0.9rem;
		margin: 0;
	}

	@media (max-width: 768px) {
		.about-content {
			grid-template-columns: 1fr;
			gap: 2rem;
		}

		.detail-item {
			flex-direction: column;
			align-items: flex-start;
		}

		.detail-value {
			text-align: left;
			margin-left: 0;
			margin-top: 0.5rem;
		}
	}
</style>
