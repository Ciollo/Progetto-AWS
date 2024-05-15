<?php
session_start();

if (!isset($_SESSION["email"])) {
	header("Location: login.html");
}
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="../assets/img/main_logo_favicon.png" type="image/x-icon" />
	<link rel="stylesheet" href="../style/style.css" />
	<title>Come creare un sever AWS</title>
</head>

<body class="w-screen">
	<header class="sticky top-0 flex w-full bg-navyBlue px-10 py-3">
		<div>
			<svg viewBox="0 0 16 16" data-view-component="true" stroke="white" stroke-width="0.7" stroke-linecap="round"
				stroke-linejoin="round"
				class="octicon octicon-mark-github v-align-middle color-fg-default h-8 w-8 cursor-pointer overflow-visible fill-white">
				<path
					d="M8 0c4.42 0 8 3.58 8 8a8.013 8.013 0 0 1-5.45 7.59c-.4.08-.55-.17-.55-.38 0-.27.01-1.13.01-2.2 0-.75-.25-1.23-.54-1.48 1.78-.2 3.65-.88 3.65-3.95 0-.88-.31-1.59-.82-2.15.08-.2.36-1.02-.08-2.12 0 0-.67-.22-2.2.82-.64-.18-1.32-.27-2-.27-.68 0-1.36.09-2 .27-1.53-1.03-2.2-.82-2.2-.82-.44 1.1-.16 1.92-.08 2.12-.51.56-.82 1.28-.82 2.15 0 3.06 1.86 3.75 3.64 3.95-.23.2-.44.55-.51 1.07-.46.21-1.61.55-2.33-.66-.15-.24-.6-.83-1.23-.82-.67.01-.27.38.01.53.34.19.73.9.82 1.13.16.45.68 1.31 2.69.94 0 .67.01 1.3.01 1.49 0 .21-.15.45-.55.38A7.995 7.995 0 0 1 0 8c0-4.42 3.58-8 8-8Z">
				</path>
			</svg>
		</div>
		<div class="ml-auto flex space-x-10">
			<div>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="white" stroke-width="2"
					stroke-linecap="round" stroke-linejoin="round"
					class="feather feather-sun h-8 w-8 cursor-pointer fill-none">
					<circle cx="12" cy="12" r="5"></circle>
					<line x1="12" y1="1" x2="12" y2="3"></line>
					<line x1="12" y1="21" x2="12" y2="23"></line>
					<line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
					<line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
					<line x1="1" y1="12" x2="3" y2="12"></line>
					<line x1="21" y1="12" x2="23" y2="12"></line>
					<line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
					<line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
				</svg>
			</div>
			<div>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="white" stroke-width="2"
					stroke-linecap="round" stroke-linejoin="round" class="feather feather-user h-8 w-8 fill-none">
					<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
					<circle cx="12" cy="7" r="4"></circle>
				</svg>
			</div>
		</div>
	</header>
	<div class="mx-auto mt-11 xs:w-96 sm:w-96 md:w-0.5xl lg:w-2xl xl:w-3xl">
		<div class="w-full">
			<a
				class="mb-2 inline-flex items-center rounded-md bg-blue-100 px-2.5 py-0.5 text-xs font-medium text-blue-800 dark:bg-gray-700 dark:text-blue-400">
				<svg class="me-1.5 h-2.5 w-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
					fill="currentColor" viewBox="0 0 20 14">
					<path
						d="M11 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm8.585 1.189a.994.994 0 0 0-.9-.138l-2.965.983a1 1 0 0 0-.685.949v8a1 1 0 0 0 .675.946l2.965 1.02a1.013 1.013 0 0 0 1.032-.242A1 1 0 0 0 20 12V2a1 1 0 0 0-.415-.811Z" />
				</svg>
				Tutorial
			</a>
			<h1 class="mb-4 text-3xl font-extrabold text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
				Guida ad
				<span class="bg-gradient-to-r from-orange-300 to-orange bg-clip-text text-transparent">AWS:</span>
				<small class="ms-2 font-semibold text-gray-500 dark:text-gray-400">Hosting di un sito web</small>
			</h1>

			<p>
				Nella nostra guida, esamineremo il processo completo di creazione e
				configurazione di un server virtuale utilizzando AWS per ospitare un
				sito web. <br />
				Offriremo istruzioni dettagliate per completare con successo
				l'implementazione del sito su AWS, seguendo le migliori pratiche per
				un hosting sicuro e affidabile.
			</p>

			<div class="mt-5 flex items-center gap-4">
				<img class="h-10 w-10 rounded-full" src="../assets/img/ciollo_pgp.jpeg" alt="" />
				<div class="font-medium dark:text-white">
					<a href="https://github.com/Ciollo" target="_blank">
						<button type="button"
							class="mb-1 me-2 inline-flex items-center rounded-lg bg-[#24292F] px-3 py-1.5 text-center text-sm font-medium text-white hover:bg-[#24292F]/90 focus:outline-none dark:hover:bg-[#050708]/30 dark:focus:ring-gray-500">
							<svg class="me-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
								fill="currentColor" viewBox="0 0 20 20">
								<path fill-rule="evenodd"
									d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
									clip-rule="evenodd" />
							</svg>
							Ciollo
						</button>
					</a>
					<div class="text-sm text-gray-500 dark:text-gray-400">
						Maggio 2024
					</div>
				</div>
			</div>
		</div>
		<div class="mt-10 w-full">
			<div>
				<img class="h-96 w-full rounded-lg object-cover shadow-xl dark:shadow-gray-800"
					src="../assets/img/aws_logo_smile_1200x630.png" alt="image description" />
			</div>
			<div>
				<div>
					<h2>Introduzione</h2>
					<p>
						AWS è un leader nei servizi di cloud computing. Questo tipo di
						computing offre risorse informatiche tramite Internet, anziché
						attraverso server fisici. Con AWS, le aziende possono accedere a
						queste risorse su richiesta, pagando solo ciò che utilizzano.
					</p>

					<p>
						Utilizzare AWS offre vantaggi come scalabilità, sicurezza e
						flessibilità.
					</p>
				</div>
				<div>
					<h2>Prerequisiti</h2>
					<p>
						Prima di iniziare, è necessario disporre di un account AWS. Se non
						ne hai già uno, puoi crearne uno gratuitamente sul sito web di
						<a href="https://signin.aws.amazon.com/signin?redirect_uri=https%3A%2F%2Fportal.aws.amazon.com%2Fbilling%2Fsignup%2Fresume&client_id=signup&code_challenge_method=SHA-256&code_challenge=pYUfKnSeUrkcTvHURywd3gTeo-H8ykR7lys6FKdv5Fs"
							target="_blank" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Amazon
							Web Service</a>
					</p>
				</div>
				<div>
					<div>
						<h1 class="mb-4 mt-10 text-3xl font-extrabold text-gray-900 dark:text-white">
							Iniziamo
						</h1>
					</div>
					<div>
						<h2>Step-1 Creare un'istanza EC2</h2>
						<p class="mb-4 text-lg text-gray-500 dark:text-gray-400">
							Il primo passo per ospitare un sito web su AWS è creare
							un'istanza EC2 (Elastic Compute Cloud), che è un server virtuale
							che può essere configurato e personalizzato per soddisfare le
							esigenze specifiche del tuo sito web. Per creare un'istanza EC2,
							segui questi passaggi:
						</p>
						<ol>
							<li>
								<div>
									Accedi alla console di AWS e vai alla sezione "EC2" nel
									pannello di controllo.

									<div class="mt-3 flex justify-center">
										<img class="h-auto max-w-full border border-gray-200 dark:border-gray-700"
											src="../assets/img/dashboard_navbar.png" alt="image description" />
									</div>

									<div class="mt-3 flex flex-col justify-center">
										<img class="h-auto max-w-full border border-gray-200 dark:border-gray-700"
											src="../assets/img/dashboard_istance.png" alt="image description" />
										<label class="self-center">Dashboard</label>
									</div>
								</div>
							</li>
							<hr />
							<li>
								<div>
									Fai clic su "Lancia istanza" per iniziare il processo di
									creazione di una nuova istanza EC2.
									<div class="mt-3 flex justify-center">
										<img class="h-auto max-w-3xl border-2 border-gray-200 object-cover dark:border-gray-700"
											src="../assets/img/launch_istance.png" alt="Launch instance" />
									</div>
								</div>
							</li>
							<hr />
							<li>
								<div>
									Digita il nome che vuoi dare all tua istanza sotto "Name and
									tag"
									<div class="mt-3 flex justify-center">
										<img class="h-auto max-w-3xl border-2 border-gray-200 object-cover dark:border-gray-700"
											src="../assets/img/name_instance.png" alt="Launch instance" />
									</div>
								</div>
							</li>
							<hr />
							<li>
								<div>
									Seleziona un'immagine AMI (Amazon Machine Image) per la tua
									istanza EC2. Puoi scegliere tra una vasta gamma di immagini
									preconfigurate, tra cui sistemi operativi Linux e Windows,
									noi sceglieremo il sistema operativo Ubuntu.
								</div>
								<div class="mt-3 flex justify-center">
									<img class="h-auto max-w-3xl border-2 border-gray-200 object-cover dark:border-gray-700"
										src="../assets/img/os_instance.png" alt="Launch instance" />
								</div>
							</li>
							<hr />
							<li>
								Seleziona il tipo di istanza e le specifiche hardware che
								desideri utilizzare per la tua istanza EC2. Puoi scegliere tra
								una varietà di opzioni di dimensioni e capacità per adattare
								l'istanza alle esigenze del tuo sito web, noi sceglieremo di
								lasciare i valori di default
							</li>
							<hr />
							<li>
								Creiamo delle chiavi di accesso per accedere alla nostra
								istanza EC2, creeremo delle chiavi di tipo RSA e le salveremo
								in un file .pem
								<div class="mb-4 flex items-center rounded-lg bg-blue-50 p-4 text-sm text-blue-800 dark:bg-gray-800 dark:text-blue-400"
									role="alert">
									<svg class="me-3 inline h-4 w-4 flex-shrink-0" aria-hidden="true"
										xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
										<path
											d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
									</svg>
									<div>
										<span class="font-medium">Info!</span> È possibile
										utilizzare anche chiavi.ppk se si vuole utilizzare un
										client come
										<a href="https://www.putty.org/"
											class="font-semibold underline hover:no-underline" target="_blank">PuTTY</a>
										per accedere alla nostra istanza EC2.
									</div>
								</div>
								<div class="mt-3 space-y-8">
									<img class="h-auto max-w-3xl rounded-lg border-2 border-gray-200 object-cover dark:border-gray-700"
										src="../assets/img/key_pair.png" alt="Creazione chiavi" />
									<div class="flex justify-center">
										<img class="h-auto max-w-xl rounded-lg border-2 border-gray-200 object-cover dark:border-gray-700"
											src="../assets/img/choose_key.png" alt="Creazione chiavi" />
									</div>
								</div>
								<div class="mb-4 flex items-center rounded-lg bg-red-50 p-4 text-sm text-red-800 dark:bg-gray-800 dark:text-red-400"
									role="alert">
									<svg class="me-3 inline h-4 w-4 flex-shrink-0" aria-hidden="true"
										xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
										<path
											d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
									</svg>
									<span class="sr-only">Info</span>
									<div>
										<span class="font-medium">ATTENZIONE!</span>
										NON CONDIVIDERE QUESTE CHIAVI CON NESSUNO.
									</div>
								</div>

								<div id="accordion-open" data-accordion="open">
									<h2 id="accordion-open-heading-1">
										<button type="button"
											class="accortion-example-heading-1 flex w-full items-center justify-between gap-3 rounded-t-xl border border-b-0 border-gray-200 p-5 font-medium text-gray-500 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 rtl:text-right dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-800 dark:focus:ring-gray-800"
											data-accordion-target="#accordion-open-body-1" aria-expanded="true"
											aria-controls="accordion-open-body-1">
											<span class="flex items-center"><svg class="me-2 h-5 w-5 shrink-0"
													fill="currentColor" viewBox="0 0 20 20"
													xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd"
														d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
														clip-rule="evenodd"></path>
												</svg>Quale chiave dovrei usare?</span>
											<svg data-accordion-icon class="h-3 w-3 shrink-0 rotate-180"
												aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
												viewBox="0 0 10 6">
												<path stroke="currentColor" stroke-linecap="round"
													stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
											</svg>
										</button>
									</h2>
									<div id="accordion-open-body-1" class="hidden"
										aria-labelledby="accordion-open-heading-1">
										<div
											class="border border-b-0 border-gray-200 p-5 dark:border-gray-700 dark:bg-gray-900">
											<p class="mb-2 text-gray-500 dark:text-gray-400">
												La scelta tra le due chiavi dipende dalle preferenze
												personali e dal sistema operativo in uso. Per gli
												utenti abituati al lavoro con il terminale o che
												utilizzano sistemi operativi basati su Unix, la chiave
												standard è preferibile. Se si preferisce
												un'interfaccia grafica user-friendly e si utilizza
												Windows o altri sistemi operativi, PuTTY potrebbe
												essere la scelta migliore.
											</p>
										</div>
									</div>
								</div>
							</li>
							<hr />
							<li>
								Configura le impostazioni di rete e sicurezza per la tua
								istanza EC2. Puoi definire regole di sicurezza, gruppi di
								sicurezza e altre impostazioni per garantire che la tua
								istanza sia accessibile solo da utenti autorizzati, noi
								spunteremo le checkbox per permettere l'accesso da SSH, HTTP e
								HTTPS.
								<div class="mt-3 flex justify-center">
									<img class="h-auto max-w-3xl border-2 border-gray-200 object-cover dark:border-gray-700"
										src="../assets/img/security_setting.png" alt="Launch instance" />
								</div>
								<div id="accordion-open-2" data-accordion="open">
									<h2 id="accordion-open-heading-2">
										<button type="button"
											class="accortion-example-heading-2 flex w-full items-center justify-between gap-3 rounded-t-xl border border-b-0 border-gray-200 p-5 font-medium text-gray-500 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 rtl:text-right dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-800 dark:focus:ring-gray-800"
											data-accordion-target="#accordion-open-body-2" aria-expanded="true"
											aria-controls="accordion-open-body-2">
											<span class="flex items-center"><svg class="me-2 h-5 w-5 shrink-0"
													fill="currentColor" viewBox="0 0 20 20"
													xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd"
														d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
														clip-rule="evenodd"></path>
												</svg>E se creo l'istanza senza aver spuntato le
												checkbox?</span>
											<svg data-accordion-icon class="h-3 w-3 shrink-0 rotate-180"
												aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
												viewBox="0 0 10 6">
												<path stroke="currentColor" stroke-linecap="round"
													stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
											</svg>
										</button>
									</h2>
									<div id="accordion-open-body-2" class="hidden"
										aria-labelledby="accordion-open-heading-2">
										<div
											class="border border-b-0 border-gray-200 p-5 dark:border-gray-700 dark:bg-gray-900">
											<p class="mb-2 text-gray-500 dark:text-gray-400">
												Nel caso tu non abbia spuntato le checkbox, non ti
												preoccupare, potrai sempre modificare le regole di
												sicurezza e i gruppi di sicurezza della tua istanza
												EC2 in qualsiasi momento dalla console di AWS.
											</p>
										</div>
									</div>
								</div>
							</li>
							<hr />
							<li>
								Adesso sei pronto a lanciare la tua istanza EC2. Fai clic sul
								pulsante "Lancia istanza" per completare il processo.
							</li>
						</ol>
					</div>
					<div>
						<h2>Step-2 Accedere alla console della tua istanza EC2.</h2>
						<> Una volta creata la tua istanza EC2, puoi accedere alla console
							della tua istanza per configurare il server e caricare il tuo sito
							web. Per accedere alla console della tua istanza EC2, segui questi
							passaggi:
							<ol>
								<li>
									<div>
										Torna alla sezione "EC2" nel pannello di controllo di AWS e
										fai clic su "Istanze" per visualizzare l'elenco delle tue
										istanze EC2.
										<div class="mt-3 flex justify-center">
											<img class="h-auto max-w-3xl border-2 border-gray-200 object-cover dark:border-gray-700"
												src="../assets/img/elenco_istanze.png" alt="Launch instance" />
										</div>
									</div>
								</li>
								<hr />
								<li>
									<div>
										Seleziona la tua istanza EC2 dall'elenco e fai clic su
										"Connetti" per accedere alla console della tua istanza.
									</div>
								</li>
								<hr />
								<li>
									<div>
										Seguiamo le istruzioni per connetterti alla tua istanza EC2
										utilizzando le chiavi di accesso che hai creato in
										precedenza.
										<div class="mt-3 flex justify-center">
											<img class="h-auto max-w-3xl border-2 border-gray-200 object-cover dark:border-gray-700"
												src="../assets/img/panel_connect_ssh.png" alt="Launch instance" />
										</div>
										<p class="mt-10">
											Facciamolo, aprendo il nostro terminal copiamo e
											incolliamo i comandi che ci vengono forniti.
										</p>

										<div class="mt-3 flex justify-center">
											<img class="h-auto max-w-3xl border-2 border-gray-200 object-cover dark:border-gray-700"
												src="../assets/img/ssh_completed.png" alt="Launch instance" />
										</div>
										<p class="mt-10">
											Qui digitiamo il comando neofetch per vedere le informazioni del sistema.
										</p>

										<div class="mt-3 flex justify-center">
											<img class="h-auto max-w-3xl border-2 border-gray-200 object-cover dark:border-gray-700"
												src="../assets/img/neofetch.png" alt="Launch instance" />
										</div>
									</div>
								</li>
							</ol>
					</div>
					<div>
						<h2>Step-3 Scaricare Docker e Docker Compose.</h2>
						<p>In questo passaggio, scaricheremo e installeremo Docker e Docker Compose. Docker è una
							piattaforma che ci permette di eseguire applicazioni in contenitori, mentre Docker Compose è
							uno strumento per definire ed eseguire applicazioni Docker multi-contenitore. Con questi
							strumenti, possiamo gestire e distribuire facilmente la nostra applicazione.</p>
						<ol>
							<li>
								<div>
									Per scaricare Docker, esegui il seguente comando:
									<pre class=" mt-3 pt-6 bg-gray-950 dark:bg-gray-800 rounded-lg">
							<code class="text-lg text-gray-50 dark:text-gray-400">
	$ sudo apt-get update
	$ sudo apt-get install docker.io
							</code>
						</pre>
								</div>
							</li>
							<li>
								<div>
									Per scaricare Docker Compose, esegui il seguente comando:
									<pre class=" mt-3 pt-6 bg-gray-950 dark:bg-gray-800 rounded-lg">
							<code class="text-lg text-gray-50 dark:text-gray-400">
	$ sudo apt-get install docker-compose
							</code>
						</pre>
								</div>
							</li>
							<li>
								<div>
									Verifica che Docker e Docker Compose siano stati installati correttamente eseguendo
									i seguenti comandi:
									<pre class=" mt-3 pt-6 bg-gray-950 dark:bg-gray-800 rounded-lg">
							<code class="text-lg text-gray-50 dark:text-gray-400">
	$ docker --version
	$ docker-compose --version
							</code>
						</pre>
								</div>
							</li>
							<div class="mb-4 flex items-center rounded-lg bg-blue-50 p-4 text-sm text-blue-800 dark:bg-gray-800 dark:text-blue-400"
								role="alert">
								<svg class="me-3 inline h-4 w-4 flex-shrink-0" aria-hidden="true"
									xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
									<path
										d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
								</svg>
								<div>
									<span class="font-medium">Info!</span> In alcune versioni di docker-compose,
									potresti dover utilizzare il comando <code>docker compose --version</code> per
									verificare la versione e di futuri comandi.
								</div>
							</div>
							<div class="mt-3 flex justify-center">
								<img class="h-auto max-w-3xl border-2 border-gray-200 object-cover dark:border-gray-700"
									src="../assets/img/dockerversion.png" alt="Docker version" />
							</div>
							<li>
								<div>
									Crea la tua cartella del progetto con il comando mkdir e spostati all'interno di
									essa con il comando cd, io la chiamero' "AWS"
									<pre class=" mt-3 pt-6 bg-gray-950 dark:bg-gray-800 rounded-lg">
							<code class="text-lg text-gray-50 dark:text-gray-400">
	$ mkdir myproject
	$ cd myproject
							</code>
						</pre>
								</div>
							</li>
							<li>
								<div>
									Creiamo un file docker-compose.yml, che ci permetterà di definire i servizi che
									vogliamo eseguire all'interno del nostro contenitore. In questo caso, creeremo un
									servizio per il nostro sito web.
									<pre class=" mt-3 pt-6 bg-gray-950 dark:bg-gray-800 rounded-lg">
							<code class="text-lg text-gray-50 dark:text-gray-400">
	myproject $ touch docker-compose.yml
							</code>
						</pre>
								</div>
							</li>
						</ol>
					</div>
					<div>
						<h2>Step-4 Configurare il server con nginx.</h2>
						<p>
							Nginx è un server web open-source che può essere utilizzato per servire pagine web statiche
							e dinamiche. In questo passaggio, installeremo nginx sul nostro server EC2 e lo
							configureremo per servire il nostro sito web, grazie ad nginx permetteremo di:
						</p>

						<ul>
							<li>
								Configurare il server per servire il nostro sito web in HTTP
							</li>
							<li>
								Configurare il server per servire il nostro sito web in HTTP.
							</li>
							<li>
								Permettere la ridirezione del traffico HTTP al traffico HTTPS.
							</li>
							</ol>
							<ul>

								<ol>
									<li>
										<div>
											Modifichiamo il file docker-compose.yml per aggiungere un servizio nginx che
											permetterà di servire il nostro sito web con connessioni HTTP, utilizza un
											qualsiasi editor di testo, io usero' vim.
											<pre class=" mt-3 pt-6 bg-gray-950 dark:bg-gray-800 rounded-lg">
							<code class="text-lg text-gray-50 dark:text-gray-400">
	myproject $ vim docker-compose.yml
							</code>
						</pre>
										</div>
										<div>
											All'interno del file scriviamo:
											<pre class=" mt-3 pt-6 bg-gray-950 dark:bg-gray-800 rounded-lg">
							<code class="text-lg text-gray-50 dark:text-gray-400">
	services:
	nginx:
		build: ./nginx/
		ports:
		- 443:443
		- 80:80
		volumes:
		-  ./Website/:/var/www/html/
							</code>
						</pre>
											<p class="my-10">
												Il servizio andra' ad essere eseguito in un contenitore docker, che
												sara' costruito utilizzando il Dockerfile presente nella cartella nginx
												che creeremo a breve, la cartella "Website" e' la cartella che conterra'
												il nostro sito web, non tratteremo la creazione del sito web in questa
												guida, le porte 80 e 443 saranno le porte che useremo per la connessione
												HTTP e HTTPS.
											</p>
										</div>
									</li>
									<li>
										<div>
											Creiamo la cartella nginx, che conterra' il Dockerfile e la configurazione
											per la creazione del nostro servizio nginx

											<pre class=" mt-3 pt-6 bg-gray-950 dark:bg-gray-800 rounded-lg">
							<code class="text-lg text-gray-50 dark:text-gray-400">	
	myproject $ mkdir nginx
	myproject $ cd nginx
	myproject/nginx $ touch Dockerfile
	myproject/nginx $ touch default.conf
							</code>
						</pre>
										</div>

										<div>
											Modifichiamo ora il nostro Dockerfile per creare il nostro servizio nginx
											<pre class=" mt-3 pt-6 bg-gray-950 dark:bg-gray-800 rounded-lg">
							<code class="text-lg text-gray-50 dark:text-gray-400">
	FROM nginx:latest
	COPY default.conf /etc/nginx/conf.d/default.conf
							</code>
						</pre>
										</div>
										<div>
											Ora se andate all'indirizzo "http://vostroIndirizzoIp:8080" vi comparira' la
											pagina di default di nginx.
										</div>
										<div>
											Modifichiamo ora il nostro file default.conf per far si che sia il nostro
											sito web a visualizzarsi.
											<pre class=" mt-3 pt-6 bg-gray-950 dark:bg-gray-800 rounded-lg">
							<code class="text-lg text-gray-50 dark:text-gray-400">
	server {
		listen 80 default server;
		location / {
			root /var/www/html;
			index index.html;
		}
	}
							</code>
							</pre>
										</div>
									</li>
									<li>
										<div>
											Facciamo eseguire il nostro docker composer con il comando docker compose up
											--build
											<pre class=" mt-3 pt-6 bg-gray-950 dark:bg-gray-800 rounded-lg">
							<code class="text-lg text-gray-50 dark:text-gray-400">
	myproject $ docker compose up --build

	[+] Running 1/0
	✔ Container aws-nginx-1       Created                                                                                 
							</code>
						</pre>
										</div>
									</li>
									<h2>
										Step-5 Configurare il server per HTTPS.
									</h2>
									<p>
										HTTPS è un protocollo di comunicazione sicuro che utilizza la crittografia per
										proteggere i dati trasmessi tra il server e il client. In questo passaggio,
										configureremo il nostro server EC2 per supportare HTTPS utilizzando un
										certificato SSL self-signed.
									</p>
									<ul>
										<li>
											<div>
												Spostiamoci nella cartella nginx e creiamo delle chiavi SSL
												<pre class=" mt-3 pt-6 bg-gray-950 dark:bg-gray-800 rounded-lg">
							<code class="text-lg text-gray-50 dark:text-gray-400">
	myproject $ cd nginx

	openssl req -x509 -nodes -days 365 -newkey rsa:2048-keyout 
	nginx-selfsigned.key-out nginx-selfsigned.crt
							</code>
						</pre>
										</li>
										<li>
											Modifichiamo il nostro file default.conf per far si che il nostro sito web
											sia visibile in HTTPS.
											<pre class=" mt-3 pt-6 bg-gray-950 dark:bg-gray-800 rounded-lg">
							<code class="text-lg text-gray-50 dark:text-gray-400">
server {
	listen 443 ssl default_server;
	root /var/www/html;
	index index.html index.php;

	charset utf-8;

	ssl_certificate /etc/nginx/ssl/nginx-selfsigned.crt;
	ssl_certificate_key /etc/nginx/ssl/nginx-selfsigned.key;
	location / {
			try_files $uri $uri/ /index.php?$query_string;
	}

	location = /favicon.ico { access_log off; log_not_found off; }
	location = /robots.txt { access_log off; log_not_found off; }

	access_log off;
	error_log /var/log/nginx/error.log error;

	sendfile off;

	#client_max_body_size 100m;

	location ~ .php$ {
		fastcgi_split_path_info ^(.+.php)(/.+)$;
		fastcgi_pass php:9000;
		fastcgi_index index.php;
		include fastcgi_params;
		fastcgi_read_timeout 300;
		fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
		fastcgi_intercept_errors off;
		fastcgi_buffer_size 16k;
		fastcgi_buffers 4 16k;
	}

	location ~ /.ht {
			deny all;
	}
}
								
							</code>
						</pre>
											Notate come alcune parti ci sia il php, questo perche' adesso andremo a
											creare il servizio php per usarlo nel nostro sito
					</div>
					<div>
						Facciamo eseguire il nostro docker composer con il comando docker compose up --build
						<pre class=" mt-3 pt-6 bg-gray-950 dark:bg-gray-800 rounded-lg">
							<code class="text-lg text-gray-50 dark:text-gray-400">
	myproject $ docker compose up --build

	[+] Running 1/0
	✔ Container aws-nginx-1       Created                                                                                 
							</code>
						</pre>
					</div>
					</li>
					</ul>
					</ol>
				</div>
				<div>
					<h2>
						Step-6 Configurare il server per PHP.
					</h2>
					<p>
						PHP e' un linguaggio di scripting open-source ampiamente utilizzato per lo sviluppo di
						applicazioni web. In questo passaggio, installeremo PHP sul nostro server EC2 e lo configureremo
						per eseguire il nostro sito web.
					</p>
					<ol>
						<li>
							Come abbiamo visto precedentemente, modifichiamo il nostro file docker-compose.yml per
							aggiungere un servizio php che permetterà di eseguire il nostro sito web.
						</li>
						<li>
							modifichiamo il nostro Dockerfile per creare il nostro servizio php
							<pre class=" mt-3 pt-6 bg-gray-950 dark:bg-gray-800 rounded-lg">
						<code class="text-lg text-gray-50 dark:text-gray-400">
	myproject $ vim docker-compose.yml
						</code>
					</pre>
							<div>
								All'interno del file scriviamo:
								<pre class=" mt-3 pt-6 bg-gray-950 dark:bg-gray-800 rounded-lg">
							<code class="text-lg text-gray-50 dark:text-gray-400">
		php:
			build: ./Website/
			expose:
				- 9000
			volumes:
				- ./Website/:/var/www/html/
			</code>
			</pre>
							</div>
							Come so up notare, il container php viene costruito con il Dockerfile presente nella
							cartella Website, la porta 9000 e' la porta che useremo per la connessione tra il nostro
							servizio php e il servizio nginx.
						</li>
						<li>
							Creiamo e modifichiamo il Dockerfile per PHP.
							<div>
								<pre class=" mt-3 pt-6 bg-gray-950 dark:bg-gray-800 rounded-lg">
							<code class="text-lg text-gray-50 dark:text-gray-400">
		myproject $ cd Website
		myproject/website $ vim DockerFile
							</code>
						</pre>
							</div>
							E dentro scriviamo
							<pre class=" mt-3 pt-6 bg-gray-950 dark:bg-gray-800 rounded-lg">
						<code class="text-lg text-gray-50 dark:text-gray-400">
	FROM php:7.0-fpm
	RUN docker-php-ext-install mysqli pdo pdo_mysql
	RUN docker-php-ext-enable mysqli
							</code>
							</pre>
							Andiamo ora a eseguirlo
							<pre class=" mt-3 pt-6 bg-gray-950 dark:bg-gray-800 rounded-lg">
							<code class="text-lg text-gray-50 dark:text-gray-400">
	myproject/website $ docker-compose up --build

	[+] Running 2/0
	✔ Container aws-nginx-1       Created                                                                                 0.0s
	✔ Container aws-php-1         Created                                                                                 0.0s

							</code>
						</pre>
				</div>
				</li>

				<h2>
					Step-7 Configurare MariaDb e PhpMyAdmin.
				</h2>
				<p>
					MariaDb e' un sistema di gestione di database relazionali open-source che puo' essere utilizzato per
					memorizzare e gestire i dati del nostro sito web. In questo passaggio, installeremo MariaDb e
					PhpMyAdmin sul nostro server EC2 e lo configureremo per gestire il nostro database.
				</p>

				<li>
					Modifichiamo il nostro file docker-compose.yml per aggiungere un servizio MariaDb e PhpMyAdmin che
					permetterà di gestire il nostro database.
					<pre class=" mt-3 pt-6 bg-gray-950 dark:bg-gray-800 rounded-lg">
							<code class="text-lg text-gray-50 dark:text-gray-400">
		db:
			image: mariadb
			volumes:
				- mysql-data:/var/lib/mysql
			environment:
				MYSQL_ROOT_PASSWORD: laPasswordRoot
				MYSQL_USER: ilVostroUser
				MYSQL_PASSWORD: laPasswordRootDb
	
		phpmyadmin:
			image: phpmyadmin
			ports:
				- 8080:80
			environment:
				PMA_HOST: db
				PMA_USER: ilVostroUser
				PMA_PASSWORD: laPasswordRootDb
				PMA_ARBITRARY: 1
	
	volumes:
		mysql-data:
							</code>
							</pre>
				</li>
				<li>
					Creiamo il nostro user
					<pre class=" mt-3 pt-6 bg-gray-950 dark:bg-gray-800 rounded-lg">
							<code class="text-lg text-gray-50 dark:text-gray-400">
	myproject $ docker compose up --build
	myproject $ docker compose -it exec nome_db bash
	# mariadb -u root -pmariadb
	CREATE USER 'user'@'%' IDENTIFIED BY "password";
	</code>
	</pre>
				</li>
				<li>
					Gli diamo i permessi
					<pre class=" mt-3 pt-6 bg-gray-950 dark:bg-gray-800 rounded-lg">
							<code class="text-lg text-gray-50 dark:text-gray-400">
	GRANT ALL PRIVILEGES ON *.* TO 'rapidcode'@'%';
	FLUSH PRIVILEGES;

	exit
	</code>
	</pre>

				</li>
				<li>
					Andiamo ora ad accedere al nostro PhpMyAdmin con la porta 8080
					<img class="h-96 w-full rounded-lg object-cover shadow-xl dark:shadow-gray-800"
						src="../assets/img/phpmyadmin.png" alt="image description" />
				</li>
				<h2>
					Conclusioni
				</h2>
				<p>
					Siamo riusciti a creare un server web con Nginx, PHP, MariaDb e PhpMyAdmin su AWS EC2. Abbiamo
					configurato il server per supportare HTTP e HTTPS, e abbiamo creato un database per memorizzare i
					dati del nostro sito web. Ora puoi iniziare a caricare il tuo sito web sul server e gestire il
					database con PhpMyAdmin. Speriamo che questa guida ti sia stata utile e ti abbia aiutato a creare il
					tuo server web su AWS EC2.
				</p>
				</ol>
			</div>
		</div>
	</div>
	</div>
	</div>
	<script src="/src/AWS_website/js/accortion.js"></script>
</body>

</html>