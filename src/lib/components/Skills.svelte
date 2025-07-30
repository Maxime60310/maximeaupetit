<section id="skills" class="section-skills">
	<div class="container">
		<h2 class="section-title">Mes compétences</h2>
		<p class="section-subtitle">Technologies que je maîtrise et utilise au quotidien</p>

		<div class="skills-content">
			<div class="skill-category">
				<h3 class="category-title">Frontend</h3>
				<div class="skills-grid">
					<div class="skill-item">
						<span class="icon">🌐</span>
						<span class="text">HTML</span>
					</div>
					<div class="skill-item">
						<span class="icon">🎨</span>
						<span class="text">CSS</span>
					</div>
					<div class="skill-item">
						<span class="icon">⚡</span>
						<span class="text">JavaScript</span>
					</div>
					<div class="skill-item">
						<span class="icon">🔷</span>
						<span class="text">TypeScript</span>
					</div>
				</div>
			</div>

			<div class="skill-category">
				<h3 class="category-title">Frameworks CSS</h3>
				<div class="skills-grid">
					<div class="skill-item">
						<span class="icon">🅱️</span>
						<span class="text">Bootstrap</span>
					</div>
					<div class="skill-item">
						<span class="icon">🌊</span>
						<span class="text">Tailwind</span>
					</div>
				</div>
			</div>

			<div class="skill-category">
				<h3 class="category-title">Frameworks JavaScript</h3>
				<div class="skills-grid">
					<div class="skill-item">
						<span class="icon">🔥</span>
						<span class="text">SvelteKit</span>
					</div>
					<div class="skill-item">
						<span class="icon">⚛️</span>
						<span class="text">React</span>
					</div>
					<div class="skill-item">
						<span class="icon">💚</span>
						<span class="text">VueJS</span>
					</div>
				</div>
			</div>

			<div class="skill-category">
				<h3 class="category-title">Backend</h3>
				<div class="skills-grid">
					<div class="skill-item">
						<span class="icon">🐘</span>
						<span class="text">PHP</span>
					</div>
					<div class="skill-item">
						<span class="icon">🟢</span>
						<span class="text">Node.js</span>
					</div>
					<div class="skill-item">
						<span class="icon">🎵</span>
						<span class="text">Symfony</span>
					</div>
				</div>
			</div>

			<div class="skill-category">
				<h3 class="category-title">Base de données</h3>
				<div class="skills-grid">
					<div class="skill-item">
						<span class="icon">🗄️</span>
						<span class="text">MySQL</span>
					</div>
				</div>
			</div>

			<div class="skill-category">
				<h3 class="category-title">Outils & Plateformes</h3>
				<div class="skills-grid">
					<div class="skill-item">
						<span class="icon">💻</span>
						<span class="text">VSCode</span>
					</div>
					<div class="skill-item">
						<span class="icon">🖱️</span>
						<span class="text">Cursor</span>
					</div>
					<div class="skill-item">
						<span class="icon">🌿</span>
						<span class="text">Git</span>
					</div>
					<div class="skill-item">
						<span class="icon">🐙</span>
						<span class="text">GitHub</span>
					</div>
					<div class="skill-item">
						<span class="icon">📋</span>
						<span class="text">Trello</span>
					</div>
					<div class="skill-item">
						<span class="icon">🎨</span>
						<span class="text">Figma</span>
					</div>
					<div class="skill-item">
						<span class="icon">🐳</span>
						<span class="text">Docker</span>
					</div>
					<div class="skill-item">
						<span class="icon">📮</span>
						<span class="text">Postman</span>
					</div>
				</div>
			</div>

			<div class="skill-category">
				<h3 class="category-title">Compétences spécialisées</h3>
				<div class="skills-grid">
					<div class="skill-item">
						<span class="icon">🔗</span>
						<span class="text">Systèmes API</span>
					</div>
					<div class="skill-item">
						<span class="icon">📱</span>
						<span class="text">Responsive Design</span>
					</div>
					<div class="skill-item">
						<span class="icon">🤖</span>
						<span class="text">Utilisation optimisée de l'IA</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<style>
	.section-skills {
		padding: 4rem 0;
		min-height: 100vh;
	}
	.skills-content {
		display: grid;
		grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
		gap: 2rem;
		margin-top: 3rem;
	}

	.skill-category {
		background: #1b3d30;
		border-radius: 12px;
		padding: 2rem;
		box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
		transition: all 0.3s ease;
	}

	.skill-category:hover {
		transform: translateY(-4px);
		box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
	}

	.category-title {
		color: #3fa38e;
		font-size: 1.2rem;
		font-weight: 600;
		margin-bottom: 1.5rem;
		text-align: center;
		border-bottom: 2px solid #284d3c;
		padding-bottom: 0.5rem;
	}

	.skills-grid {
		display: grid;
		grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
		gap: 1rem;
	}

	.skill-item {
		background: #142821;
		border: 1px solid #284d3c;
		border-radius: 8px;
		padding: 1rem;
		transition: all 0.3s ease;
		display: flex;
		flex-direction: column;
		align-items: center;
		gap: 0.5rem;
		text-align: center;
		min-height: 80px;
		justify-content: center;
	}

	.skill-item:hover {
		background: #284d3c;
		transform: translateY(-2px);
		border-color: #3fa38e;
	}

	.skill-item .icon {
		font-size: 1.5rem;
		color: #e0f2ed;
	}

	.skill-item .text {
		color: #f2f2f2;
		font-weight: 500;
		font-size: 0.9rem;
	}

	@media (max-width: 768px) {
		.skills-content {
			grid-template-columns: 1fr;
			gap: 1.5rem;
		}

		.skill-category {
			padding: 1.5rem;
		}

		.skills-grid {
			grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
			gap: 0.75rem;
		}

		.skill-item {
			padding: 0.75rem;
			min-height: 70px;
		}

		.skill-item .icon {
			font-size: 1.2rem;
		}

		.skill-item .text {
			font-size: 0.8rem;
		}
	}
</style>
