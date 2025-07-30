<section id="projects" class="section alternate">
	<div class="container">
		<h2 class="section-title">Mes réalisations</h2>
		<p class="section-subtitle">Découvrez quelques-uns de mes projets récents</p>

		<div class="projects-grid">
			<div class="project-card card">
				<div class="project-image">
					<div class="project-placeholder">
						<img src="/images/laMeute.jpg" alt="La Meute de Jean-Eude" />
					</div>
					<div class="project-overlay">
						<div class="project-links">
							<a href="https://www.lameute.maximeaupetit.fr/" class="project-link">
								<span class="link-icon">👁️</span>
								Voir le projet
							</a>
							<a href="https://github.com/Maxime60310/lameute" target="_blank" class="project-link">
								<span class="link-icon">💻</span>
								Code source
							</a>
						</div>
					</div>
				</div>
				<div class="project-content">
					<h3>La Meute de Jean-Eude</h3>
					<p>
						Site web test pour un éducateur-comportementaliste canin, inscription / prise de
						rendez-vous / Gestion des chiens.
					</p>
					<div class="project-tech">
						<span class="tech-tag">Sveltekit</span>
						<span class="tech-tag">TypeScript</span>
						<span class="tech-tag">MySQL</span>
					</div>
				</div>
			</div>

			<div class="project-card card">
				<div class="project-image">
					<div class="project-placeholder">
						<img src="/images/sophrologie.jpg" alt="Delphine Sophrologie" />
					</div>
					<div class="project-overlay">
						<div class="project-links">
							<a href="https://delphinesophrologie.com/" target="_blank" class="project-link">
								<span class="link-icon">👁️</span>
								Voir le projet
							</a>
							<a
								href="https://github.com/seekode/delphinesophrologie"
								target="_blank"
								class="project-link"
							>
								<span class="link-icon">💻</span>
								Code source
							</a>
						</div>
					</div>
				</div>
				<div class="project-content">
					<h3>Delphine Sophrologie</h3>
					<p>
						Site web pour une sophrologue, avec implémentation de boutique en ligne et de blog.
						Réalisé en collaboration avec Seekode.
					</p>
					<div class="project-tech">
						<span class="tech-tag">SvelteKit</span>
						<span class="tech-tag">PHP</span>
						<span class="tech-tag">MySQL</span>
					</div>
				</div>
			</div>

			<div class="project-card card">
				<div class="project-image">
					<div class="project-placeholder">
						<img src="/images/octographisme.jpg" alt="Octographisme" />
					</div>
					<div class="project-overlay">
						<div class="project-links">
							<a href="https://octographisme.fr/" target="_blank" class="project-link">
								<span class="link-icon">👁️</span>
								Voir le projet
							</a>
							<a
								href="https://github.com/seekode/octographisme.git"
								target="_blank"
								class="project-link"
							>
								<span class="link-icon">💻</span>
								Code source
							</a>
						</div>
					</div>
				</div>
				<div class="project-content">
					<h3>Octographism</h3>
					<p>Site vitrine pour un graphiste, réalisé en collaboration avec Seekode.</p>
					<p></p>
					<div class="project-tech">
						<span class="tech-tag">SvelteKit</span>
						<span class="tech-tag">TypeScript</span>
						<span class="tech-tag">Scss</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<style>
	.projects-grid {
		display: grid;
		grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
		gap: 2rem;
		margin-top: 3rem;
	}

	.project-card {
		overflow: hidden;
		position: relative;
		height: 400px;
		display: flex;
		flex-direction: column;
	}

	.project-image {
		position: relative;
		height: 200px;
		overflow: hidden;
		border-radius: 8px 8px 0 0;
	}

	.project-placeholder {
		width: 100%;
		height: 100%;
		background: linear-gradient(135deg, #142821 0%, #284d3c 100%);
		display: flex;
		align-items: center;
		justify-content: center;
		position: relative;
	}

	.project-card img {
		width: 100%;
		height: 100%;
		object-fit: cover;
		opacity: 0.5;
		filter: hue-rotate(15deg);
	}

	.project-overlay {
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		background: rgba(0, 0, 0, 0.8);
		display: flex;
		align-items: center;
		justify-content: center;
		opacity: 0;
		transition: all 0.3s ease;
	}

	.project-card:hover .project-overlay {
		opacity: 1;
	}

	.project-links {
		display: flex;
		gap: 1rem;
	}

	.project-link {
		display: flex;
		align-items: center;
		gap: 0.5rem;
		padding: 0.75rem 1rem;
		background: #3fa38e;
		color: #ffffff;
		text-decoration: none;
		border-radius: 6px;
		font-size: 0.9rem;
		font-weight: 500;
		transition: all 0.3s ease;
	}

	.project-link:hover {
		background: #2b5240;
		transform: translateY(-2px);
	}

	.link-icon {
		font-size: 1rem;
	}

	.project-content {
		padding: 0.5rem;
		padding-top: 1rem;
		flex: 1;
		display: flex;
		flex-direction: column;
	}

	.project-content h3 {
		margin-bottom: 0.75rem;
		color: #ffffff;
	}

	.project-content p {
		flex: 1;
		margin-bottom: 1rem;
		color: #c2e4db;
		font-size: 0.95rem;
		line-height: 1.5;
	}

	.project-tech {
		display: flex;
		flex-wrap: wrap;
		gap: 0.5rem;
	}

	.tech-tag {
		background: #284d3c;
		color: #e0f2ed;
		padding: 0.25rem 0.75rem;
		border-radius: 20px;
		font-size: 0.8rem;
		font-weight: 500;
		border: 1px solid #3fa38e;
	}

	@media (max-width: 768px) {
		.projects-grid {
			grid-template-columns: 1fr;
			gap: 1.5rem;
		}

		.project-card {
			height: auto;
		}

		.project-image {
			height: 150px;
		}

		.project-links {
			flex-direction: column;
			gap: 0.5rem;
		}

		.project-link {
			padding: 0.5rem 0.75rem;
			font-size: 0.8rem;
		}

		/* .projects-cta {
			margin-top: 2rem;
			padding: 1.5rem;
		}

		.projects-cta p {
			font-size: 1rem;
		} */
	}
</style>
