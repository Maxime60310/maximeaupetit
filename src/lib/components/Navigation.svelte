<script lang="ts">
	import { onMount } from 'svelte';

	let isMenuOpen = false;
	let currentSection = 'home';

	const menuItems = [
		{ id: 'home', label: 'Accueil', href: '#home' },
		{ id: 'about', label: 'À propos', href: '#about' },
		{ id: 'skills', label: 'Compétences', href: '#skills' },
		{ id: 'projects', label: 'Projets', href: '#projects' },
		{ id: 'contact', label: 'Contact', href: '#contact' }
	];

	function toggleMenu() {
		isMenuOpen = !isMenuOpen;
	}

	function closeMenu() {
		isMenuOpen = false;
	}

	function handleNavClick(id: string) {
		currentSection = id;
		closeMenu();
	}

	onMount(() => {
		const observer = new IntersectionObserver(
			(entries) => {
				entries.forEach((entry) => {
					if (entry.isIntersecting) {
						currentSection = entry.target.id;
					}
				});
			},
			{ threshold: 0.3 }
		);

		menuItems.forEach((item) => {
			const element = document.getElementById(item.id);
			if (element) observer.observe(element);
		});

		return () => observer.disconnect();
	});
</script>

<nav class="nav">
	<div class="container">
		<div class="nav-content">
			<div class="logo">
				<h2>Maxime Aupetit</h2>
			</div>

			<!-- Desktop Menu -->
			<div class="nav-menu desktop-menu">
				{#each menuItems as item (item.id)}
					<a
						href={item.href}
						class="nav-link {currentSection === item.id ? 'active' : ''}"
						on:click={() => handleNavClick(item.id)}
					>
						{item.label}
					</a>
				{/each}
			</div>

			<!-- Mobile Menu Button -->
			<button class="mobile-menu-btn" on:click={toggleMenu} aria-label="Toggle menu">
				<span class="hamburger {isMenuOpen ? 'open' : ''}"></span>
			</button>
		</div>

		<!-- Mobile Menu -->
		{#if isMenuOpen}
			<div class="mobile-menu">
				{#each menuItems as item (item.id)}
					<a
						href={item.href}
						class="nav-link {currentSection === item.id ? 'active' : ''}"
						on:click={() => handleNavClick(item.id)}
					>
						{item.label}
					</a>
				{/each}
			</div>
		{/if}
	</div>
</nav>

<style>
	.nav-content {
		display: flex;
		justify-content: space-between;
		align-items: center;
	}

	.logo h2 {
		color: #3fa38e;
		font-size: 1.5rem;
		font-weight: 700;
	}

	.nav-menu {
		display: flex;
		gap: 2rem;
		align-items: center;
	}

	.mobile-menu-btn {
		display: none;
		background: none;
		border: none;
		cursor: pointer;
		padding: 0.5rem;
		position: relative;
		z-index: 1001;
	}

	.hamburger {
		display: block;
		width: 25px;
		height: 3px;
		background: #c2e4db;
		transition: all 0.3s ease;
		position: relative;
	}

	.hamburger::before,
	.hamburger::after {
		content: '';
		position: absolute;
		width: 25px;
		height: 3px;
		background: #c2e4db;
		transition: all 0.3s ease;
	}

	.hamburger::before {
		top: -8px;
	}

	.hamburger::after {
		top: 8px;
	}

	.hamburger.open {
		background: transparent;
	}

	.hamburger.open::before {
		transform: rotate(45deg);
		top: 0;
	}

	.hamburger.open::after {
		transform: rotate(-45deg);
		top: 0;
	}

	.mobile-menu {
		display: none;
		flex-direction: column;
		gap: 1rem;
		padding: 2rem 0;
		border-top: 1px solid #284d3c;
	}

	@media (max-width: 768px) {
		.desktop-menu {
			display: none;
		}

		.mobile-menu-btn {
			display: block;
		}

		.mobile-menu {
			display: flex;
		}
	}
</style>
