<script>
	import About from '$lib/components/About.svelte';
	import Contact from '$lib/components/Contact.svelte';
	import Footer from '$lib/components/Footer.svelte';
	import Hero from '$lib/components/Hero.svelte';
	import Navigation from '$lib/components/Navigation.svelte';
	import Projects from '$lib/components/Projects.svelte';
	import Skills from '$lib/components/Skills.svelte';
</script>

<svelte:head>
	<title>Maxime Aupetit - Développeur Web Fullstack</title>
	<meta
		name="description"
		content="Maxime Aupetit, développeur web fullstack passionné depuis avril 2024. Spécialisé en JavaScript, TypeScript, React, SvelteKit, Node.js et PHP."
	/>
	<meta
		name="keywords"
		content="développeur web, fullstack, JavaScript, TypeScript, React, SvelteKit, Node.js, PHP, Symfony, freelance, CDI, contrat professionnalisation"
	/>
	<meta property="og:title" content="Maxime Aupetit - Développeur Web Fullstack" />
	<meta
		property="og:description"
		content="Développeur web fullstack passionné, ouvert aux opportunités CDI et contrats de professionnalisation."
	/>
	<meta property="og:type" content="website" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="Maxime Aupetit - Développeur Web Fullstack" />
	<meta
		name="twitter:description"
		content="Développeur web fullstack passionné, ouvert aux opportunités CDI et contrats de professionnalisation."
	/>
</svelte:head>

<Navigation />

<Hero />

<About />

<Skills />

<Projects />

<Contact />

<Footer />
