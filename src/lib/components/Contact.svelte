<script lang="ts">
	let formData = {
		name: '',
		email: '',
		subject: '',
		message: ''
	};

	let isSubmitting = false;
	let submitMessage = '';
	let errorMessage = '';
	let fieldErrors: Record<string, string> = {};

	async function handleSubmit(event: Event) {
		event.preventDefault();
		isSubmitting = true;
		submitMessage = '';
		errorMessage = '';
		fieldErrors = {};

		try {
			const response = await fetch('http://sendmail.maximeaupetit.fr', {
				method: 'POST',
				headers: {
					'Content-Type': 'application/json'
				},
				body: JSON.stringify({
					nom_complet: formData.name,
					email: formData.email,
					sujet: formData.subject,
					message: formData.message
				})
			});

			const result = await response.json();

			if (result.success) {
				// Succès
				submitMessage = 'Merci pour votre message ! Je vous répondrai dans les plus brefs délais.';

				// Reset form
				formData = {
					name: '',
					email: '',
					subject: '',
					message: ''
				};

				// Clear success message after 5 seconds
				setTimeout(() => {
					submitMessage = '';
				}, 5000);
			} else {
				// Erreur avec détails
				if (result.details && typeof result.details === 'object') {
					fieldErrors = result.details;
				} else {
					errorMessage = result.error || "Une erreur est survenue lors de l'envoi du message.";
				}
			}
		} catch (error) {
			console.error('Erreur réseau:', error);
			errorMessage =
				'Erreur de connexion. Veuillez vérifier votre connexion internet et réessayer.';
		} finally {
			isSubmitting = false;
		}
	}
</script>

<section id="contact" class="section">
	<div class="container">
		<h2 class="section-title">Contactez-moi</h2>
		<p class="section-subtitle">Discutons de votre projet ou de vos opportunités</p>

		<div class="contact-content">
			<div class="contact-info">
				<div class="info-card card">
					<h3>Prise de contact</h3>
					<p>
						Je suis actuellement disponible pour de nouveaux projets et opportunités. N'hésitez pas
						à me contacter pour discuter de vos besoins.
					</p>

					<div class="contact-methods">
						<div class="contact-method">
							<span class="method-icon">📧</span>
							<div class="method-info">
								<strong>Email</strong>
								<p>maximeaupetit60@gmail.com</p>
							</div>
						</div>

						<div class="contact-method">
							<span class="method-icon">📱</span>
							<div class="method-info">
								<strong>Téléphone</strong>
								<p>06 40 70 92 02</p>
							</div>
						</div>

						<div class="contact-method">
							<span class="method-icon">📍</span>
							<div class="method-info">
								<strong>Localisation</strong>
								<p>Compiègne, Noyon</p>
							</div>
						</div>
					</div>
				</div>

				<div class="availability-card card">
					<h3>Disponibilité</h3>
					<ul class="availability-list">
						<li>
							<span class="availability-icon">💼</span>
							<div>
								<strong>CDI</strong>
								<p>Ouvert aux opportunités</p>
							</div>
						</li>
						<li>
							<span class="availability-icon">🎓</span>
							<div>
								<strong>Contrat de professionnalisation</strong>
								<p>Particulièrement intéressé</p>
							</div>
						</li>
						<li>
							<span class="availability-icon">🚀</span>
							<div>
								<strong>Projets freelance</strong>
								<p>Selon disponibilité</p>
							</div>
						</li>
					</ul>
				</div>
			</div>

			<div class="contact-form-container">
				<form class="contact-form card" on:submit={handleSubmit}>
					<h3>Envoyez-moi un message</h3>

					{#if submitMessage}
						<div class="success-message">
							{submitMessage}
						</div>
					{/if}

					{#if errorMessage}
						<div class="error-message">
							{errorMessage}
						</div>
					{/if}

					<div class="form-group">
						<label for="name">Nom complet</label>
						<input
							type="text"
							id="name"
							bind:value={formData.name}
							class="form-field {fieldErrors.nom_complet ? 'error' : ''}"
							placeholder="Votre nom complet"
							required
						/>
						{#if fieldErrors.nom_complet}
							<div class="field-error">{fieldErrors.nom_complet}</div>
						{/if}
					</div>

					<div class="form-group">
						<label for="email">Email</label>
						<input
							type="email"
							id="email"
							bind:value={formData.email}
							class="form-field {fieldErrors.email ? 'error' : ''}"
							placeholder="votre@email.com"
							required
						/>
						{#if fieldErrors.email}
							<div class="field-error">{fieldErrors.email}</div>
						{/if}
					</div>

					<div class="form-group">
						<label for="subject">Sujet</label>
						<select
							id="subject"
							bind:value={formData.subject}
							class="form-field {fieldErrors.sujet ? 'error' : ''}"
							required
						>
							<option value="">Sélectionnez un sujet</option>
							<option value="projet">Nouveau projet</option>
							<option value="emploi">Opportunité d'emploi</option>
							<option value="collaboration">Collaboration</option>
							<option value="autre">Autre</option>
						</select>
						{#if fieldErrors.sujet}
							<div class="field-error">{fieldErrors.sujet}</div>
						{/if}
					</div>

					<div class="form-group">
						<label for="message">Message</label>
						<textarea
							id="message"
							bind:value={formData.message}
							class="form-field {fieldErrors.message ? 'error' : ''}"
							placeholder="Décrivez votre projet ou votre demande..."
							rows="5"
							required
						></textarea>
						{#if fieldErrors.message}
							<div class="field-error">{fieldErrors.message}</div>
						{/if}
					</div>

					<button type="submit" class="btn submit-btn" disabled={isSubmitting}>
						{#if isSubmitting}
							Envoi en cours...
						{:else}
							Envoyer le message
						{/if}
					</button>
				</form>
			</div>
		</div>
	</div>
</section>

<style>
	.contact-content {
		display: grid;
		grid-template-columns: 1fr 1fr;
		gap: 3rem;
		margin-top: 3rem;
	}

	.contact-info {
		display: flex;
		flex-direction: column;
		gap: 2rem;
	}

	.info-card,
	.availability-card {
		height: fit-content;
	}

	.contact-methods {
		margin-top: 2rem;
	}

	.contact-method {
		display: flex;
		align-items: flex-start;
		gap: 1rem;
		margin-bottom: 1.5rem;
	}

	.contact-method:last-child {
		margin-bottom: 0;
	}

	.method-icon {
		font-size: 1.5rem;
		flex-shrink: 0;
	}

	.method-info strong {
		color: #ffffff;
		display: block;
		margin-bottom: 0.25rem;
	}

	.method-info p {
		color: #c2e4db;
		margin: 0;
		font-size: 0.95rem;
	}

	.availability-list {
		list-style: none;
		padding: 0;
	}

	.availability-list li {
		display: flex;
		align-items: flex-start;
		gap: 1rem;
		margin-bottom: 1.5rem;
	}

	.availability-list li:last-child {
		margin-bottom: 0;
	}

	.availability-icon {
		font-size: 1.5rem;
		flex-shrink: 0;
	}

	.availability-list strong {
		color: #ffffff;
		display: block;
		margin-bottom: 0.25rem;
	}

	.availability-list p {
		color: #c2e4db;
		margin: 0;
		font-size: 0.9rem;
	}

	.contact-form {
		height: fit-content;
	}

	.form-group {
		margin-bottom: 1.5rem;
	}

	.form-group label {
		display: block;
		margin-bottom: 0.5rem;
		color: #ffffff;
		font-weight: 500;
	}

	.form-field {
		width: 100%;
		padding: 0.75rem;
		background: #1f4236;
		color: #e2f2ed;
		border: 1px solid #3fa790;
		border-radius: 6px;
		font-size: 1rem;
		transition: all 0.3s ease;
		font-family: inherit;
	}

	.form-field::placeholder {
		color: #5ea393;
	}

	.form-field:focus {
		outline: none;
		border-color: #40a390;
		box-shadow: 0 0 0 2px rgba(63, 163, 142, 0.3);
	}

	.form-field:invalid {
		border-color: #e74c3c;
	}

	textarea.form-field {
		resize: vertical;
		min-height: 120px;
	}

	select.form-field {
		cursor: pointer;
	}

	.submit-btn {
		width: 100%;
		margin-top: 1rem;
	}

	.submit-btn:disabled {
		cursor: not-allowed;
		opacity: 0.7;
	}

	.success-message {
		background: rgba(63, 163, 142, 0.1);
		border: 1px solid #3fa38e;
		color: #3fa38e;
		padding: 1rem;
		border-radius: 6px;
		margin-bottom: 1.5rem;
		font-size: 0.95rem;
	}

	.error-message {
		background: rgba(231, 76, 60, 0.1);
		border: 1px solid #e74c3c;
		color: #e74c3c;
		padding: 1rem;
		border-radius: 6px;
		margin-bottom: 1.5rem;
		font-size: 0.95rem;
	}

	.form-field.error {
		border-color: #e74c3c;
		box-shadow: 0 0 0 2px rgba(231, 76, 60, 0.2);
	}

	.field-error {
		color: #e74c3c;
		font-size: 0.85rem;
		margin-top: 0.5rem;
		display: block;
	}

	@media (max-width: 768px) {
		.contact-content {
			grid-template-columns: 1fr;
			gap: 2rem;
		}

		.contact-info {
			order: 2;
		}

		/* .contact-form-container {
			order: 1;
		} */

		.contact-method,
		.availability-list li {
			margin-bottom: 1rem;
		}

		.method-icon,
		.availability-icon {
			font-size: 1.2rem;
		}
	}
</style>
