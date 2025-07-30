<script lang="ts">
	import { onMount } from 'svelte';

	let isVisible = false;

	onMount(() => {
		setTimeout(() => {
			isVisible = true;
		}, 100);
	});
</script>

<section id="home" class="hero gradient-bg">
	<div class="container">
		<div class="hero-content {isVisible ? 'fade-in-up' : ''}">
			<div class="hero-text">
				<h1>Maxime Aupetit</h1>
				<h2 class="hero-subtitle">Développeur Web Fullstack</h2>
				<p class="hero-description">
					Passionné par l'informatique depuis toujours, je développe des solutions web modernes et
					performantes. Développeur depuis avril 2024, je continue d'apprendre chaque jour de
					nouvelles technologies.
				</p>
				<div class="hero-stats">
					<div class="stat-item">
						<span class="stat-number">2024</span>
						<span class="stat-label">Début en développement</span>
					</div>
					<div class="stat-item">
						<span class="stat-number">Bac+2</span>
						<span class="stat-label">Diplôme professionnel</span>
					</div>
					<div class="stat-item">
						<span class="stat-number">Fullstack</span>
						<span class="stat-label">Développeur Web/Mobile</span>
					</div>
				</div>
				<div class="hero-actions">
					<a href="#contact" class="btn">Me contacter</a>
					<a href="#projects" class="btn-secondary">Voir mes projets</a>
				</div>
			</div>
			<div class="hero-visual">
				<div class="code-animation">
					<div class="code-line">
						<span class="code-comment">// Développeur passionné</span>
					</div>
					<div class="code-line">
						<span class="code-keyword">const</span>
						<span class="code-variable">developer</span>
						<span class="code-operator">=</span>
						<span class="code-string">"Maxime Aupetit"</span>
					</div>
					<div class="code-line">
						<span class="code-keyword">const</span>
						<span class="code-variable">skills</span>
						<span class="code-operator">=</span>
						<span class="code-bracket">[</span>
					</div>
					<div class="code-line code-indent">
						<span class="code-string">"JavaScript"</span><span class="code-operator">,</span>
					</div>
					<div class="code-line code-indent">
						<span class="code-string">"TypeScript"</span><span class="code-operator">,</span>
					</div>
					<div class="code-line code-indent">
						<span class="code-string">"SvelteKit"</span><span class="code-operator">,</span>
					</div>
					<div class="code-line code-indent">
						<span class="code-string">"React"</span><span class="code-operator">,</span>
					</div>
					<div class="code-line code-indent">
						<span class="code-string">"Node.js"</span>
					</div>
					<div class="code-line">
						<span class="code-bracket">]</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<style>
	.hero {
		min-height: 100vh;
		display: flex;
		align-items: center;
		padding: 6rem 0 4rem;
		position: relative;
		overflow: hidden;
	}

	.hero::before {
		content: '';
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		background:
			radial-gradient(circle at 20% 80%, rgba(63, 163, 142, 0.1) 0%, transparent 50%),
			radial-gradient(circle at 80% 20%, rgba(63, 163, 142, 0.1) 0%, transparent 50%);
		pointer-events: none;
	}

	.hero-content {
		display: grid;
		grid-template-columns: 1fr 1fr;
		gap: 4rem;
		align-items: center;
		position: relative;
		z-index: 1;
	}

	.hero-text h1 {
		font-size: 3.5rem;
		font-weight: 700;
		margin-bottom: 1rem;
		background: linear-gradient(135deg, #ffffff 0%, #3fa38e 100%);
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
		background-clip: text;
	}

	.hero-subtitle {
		font-size: 1.5rem;
		color: #c2e4db;
		margin-bottom: 1.5rem;
		font-weight: 400;
	}

	.hero-description {
		font-size: 1.1rem;
		line-height: 1.7;
		margin-bottom: 2rem;
		color: #c2e4db;
	}

	.hero-stats {
		display: flex;
		gap: 2rem;
		margin-bottom: 2rem;
	}

	.stat-item {
		text-align: center;
	}

	.stat-number {
		display: block;
		font-size: 1.5rem;
		font-weight: 700;
		color: #3fa38e;
		margin-bottom: 0.25rem;
	}

	.stat-label {
		font-size: 0.9rem;
		color: #c2e4db;
	}

	.hero-actions {
		display: flex;
		gap: 1rem;
		align-items: center;
	}

	.btn-secondary {
		padding: 0.75rem 1.5rem;
		background: transparent;
		color: #3fa38e;
		text-decoration: none;
		border: 2px solid #3fa38e;
		border-radius: 8px;
		font-weight: 500;
		transition: all 0.3s ease;
	}

	.btn-secondary:hover {
		background: #3fa38e;
		color: #ffffff;
		transform: translateY(-2px);
	}

	.hero-visual {
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.code-animation {
		background: #1b3d30;
		border-radius: 12px;
		padding: 2rem;
		font-family: 'Courier New', monospace;
		font-size: 0.9rem;
		line-height: 1.6;
		box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
		border: 1px solid #284d3c;
		max-width: 400px;
		width: 100%;
	}

	.code-line {
		margin-bottom: 0.5rem;
		animation: typewriter 0.5s ease-out;
	}

	.code-indent {
		padding-left: 2rem;
	}

	.code-comment {
		color: #5ea393;
		font-style: italic;
	}

	.code-keyword {
		color: #3fa38e;
		font-weight: bold;
	}

	.code-variable {
		color: #e2f2ed;
	}

	.code-operator {
		color: #c2e4db;
	}

	.code-string {
		color: #40a390;
	}

	.code-bracket {
		color: #c2e4db;
	}

	@keyframes typewriter {
		from {
			opacity: 0;
			transform: translateX(-10px);
		}
		to {
			opacity: 1;
			transform: translateX(0);
		}
	}

	@media (max-width: 768px) {
		.hero-content {
			grid-template-columns: 1fr;
			gap: 2rem;
			text-align: center;
		}

		.hero-text h1 {
			font-size: 2.5rem;
		}

		.hero-subtitle {
			font-size: 1.2rem;
		}

		.hero-stats {
			justify-content: center;
			flex-wrap: wrap;
			gap: 1.5rem;
		}

		.hero-actions {
			justify-content: center;
			flex-wrap: wrap;
		}

		.code-animation {
			font-size: 0.8rem;
			padding: 1.5rem;
		}
	}

	@media (max-width: 480px) {
		.hero {
			padding: 4rem 0 3rem;
		}

		.hero-text h1 {
			font-size: 2rem;
		}

		.hero-subtitle {
			font-size: 1.1rem;
		}

		.hero-description {
			font-size: 1rem;
			margin-bottom: 1.5rem;
		}

		.hero-stats {
			gap: 1rem;
		}

		.stat-item {
			flex: 1;
			min-width: 80px;
		}

		.stat-number {
			font-size: 1.2rem;
		}

		.stat-label {
			font-size: 0.8rem;
		}

		.hero-actions {
			flex-direction: column;
			gap: 0.75rem;
			width: 100%;
		}

		.btn,
		.btn-secondary {
			width: 100%;
			text-align: center;
		}

		.code-animation {
			font-size: 0.75rem;
			padding: 1rem;
			max-width: 100%;
		}

		.code-indent {
			padding-left: 1rem;
		}
	}

	@media (max-width: 320px) {
		.hero {
			padding: 3rem 0 2rem;
		}

		.hero-content {
			gap: 1.5rem;
		}

		.hero-text h1 {
			font-size: 1.8rem;
			line-height: 1.2;
		}

		.hero-subtitle {
			font-size: 1rem;
			margin-bottom: 1rem;
		}

		.hero-description {
			font-size: 0.95rem;
			line-height: 1.6;
			margin-bottom: 1.25rem;
		}

		.hero-stats {
			flex-direction: column;
			gap: 0.75rem;
			margin-bottom: 1.5rem;
		}

		.stat-item {
			display: flex;
			justify-content: space-between;
			align-items: center;
			text-align: left;
			padding: 0.5rem 0;
		}

		.stat-number {
			font-size: 1.1rem;
			margin-bottom: 0;
		}

		.stat-label {
			font-size: 0.75rem;
			text-align: right;
		}

		.hero-actions {
			gap: 0.5rem;
		}

		.btn,
		.btn-secondary {
			padding: 0.6rem 1rem;
			font-size: 0.9rem;
		}

		.code-animation {
			font-size: 0.7rem;
			padding: 0.75rem;
			line-height: 1.4;
		}

		.code-line {
			margin-bottom: 0.25rem;
		}

		.code-indent {
			padding-left: 0.75rem;
		}
	}
</style>
