@extends('layout.defaultLayout')
@section('title', 'Visca s.n.c.')

@section('head')
@endsection

@section('content')

<body class="cms-index-index cms-home-page">

  <!--div Desktop-->
  <div id="page">
    <!-- Header -->
    @include('components.banner')
    @include('components.navbarDesktop')
    <!-- end header -->

    <!-- Main Container -->
    <section class="main-container col1-layout">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-xs-12">
            <article class="col-main">
              <div class="col-main">
                <div class="cart">
                  <div class="page-title">
                    <h2>Privacy and Policy</h2>
                  </div>
                  <div class="panel-group accordion-faq" id="faq-accordion">
                    <div class="panel">
                      <div class="panel-heading"> <a data-toggle="collapse" data-parent="#faq-accordion"
                          href="#question1"> <span class="arrow-down">+</span> <span class="arrow-up">&#8211;</span>
                          Soggetti del trattamento </a> </div>
                      <div id="question1" class="panel-collapse collapse in">
                        <div class="panel-body"> Titolare del trattamento ai sensi delle leggi vigenti è
                          l'amministratore del sito, Bruno SAETTA, contattabile tramite la sezione CONTATTI (link in
                          fondo alla pagina). </div>
                      </div>
                    </div>
                    <div class="panel">
                      <div class="panel-heading"> <a data-toggle="collapse" data-parent="#faq-accordion"
                          href="#question3" class="collapsed"> <span class="arrow-down">+</span> <span
                            class="arrow-up">&#8211;</span> Base giuridica del trattamento</a> </div>
                      <div id="question3" class="panel-collapse collapse">
                        <div class="panel-body"> Il presente sito tratta i dati prevalentemente in base al consenso
                          degli utenti. Il conferimento del consenso avviene tramite il banner posto in fondo alla
                          pagina, oppure tramite l’uso o la consultazione del sito, quale comportamento concludente. Con
                          l'uso o la consultazione del sito i visitatori e gli utenti approvano la presente informativa
                          privacy e acconsentono al trattamento dei loro dati personali in relazione alle modalità e
                          alle finalità di seguito descritte, compreso l'eventuale diffusione a terzi se necessaria per
                          l'erogazione di un servizio. Tramite i moduli di comunicazione o di richiesta di servizi
                          vengono raccolti ulteriori consensi relativi alla finalità specifica del servizio.

                          Il conferimento dei dati e quindi il consenso alla raccolta e al trattamento dei dati è
                          facoltativo, l'Utente può negare il consenso, e può revocare in qualsiasi momento un consenso
                          già fornito (tramite il banner posto a fondo pagina o le impostazioni del browser per i
                          cookie, o il link Contatti). Tuttavia negare il consenso può comportare l'impossibilità di
                          erogare alcuni servizi e l'esperienza di navigazione nel sito sarebbe compromessa.

                          I dati per la sicurezza del sito e per la prevenzione da abusi e SPAM, nonché i dati per
                          l’analisi del traffico del sito (statistica) in forma aggregata, sono trattati in base al
                          legittimo interesse del Titolare del trattamento alla tutela del sito e degli utenti stessi.
                          In tali casi l'utente ha sempre il diritto di opporsi al trattamento dei dati (vedi par.
                          Diritti dell'utente). </div>
                      </div>
                    </div>
                    <div class="panel">
                      <div class="panel-heading"> <a data-toggle="collapse" data-parent="#faq-accordion"
                          href="#question2" class="collapsed"> <span class="arrow-down">+</span> <span
                            class="arrow-up">&#8211;</span> Finalità del trattamento</a> </div>
                      <div id="question2" class="panel-collapse collapse">
                        <div class="panel-body"> Il trattamento dei dati raccolti dal sito, oltre alle finalità
                          connesse, strumentali e necessarie alla fornitura del servizio, è volto alle seguenti
                          finalità:

                          – Statistica (analisi)
                          Raccolta di dati e informazioni in forma esclusivamente aggregata e anonima al fine di
                          verificare il corretto funzionamento del sito. Nessuna di queste informazioni è correlata alla
                          persona fisica-Utente del sito, e non ne consentono in alcun modo l'identificazione. Non
                          occorre il consenso.

                          – Sicurezza
                          Raccolta di dati e informazioni al fine di tutelare la sicurezza del sito (filtri antispam,
                          firewall, rilevazione virus) e degli Utenti e per prevenire o smascherare frodi o abusi a
                          danno del sito web. I dati sono registrati automaticamente e possono eventualmente comprendere
                          anche dati personali (indirizzo Ip) che potrebbero essere utilizzati, conformemente alle leggi
                          vigenti in materia, al fine di bloccare tentativi di danneggiamento al sito medesimo o di
                          recare danno ad altri utenti, o comunque attività dannose o costituenti reato. Tali dati non
                          sono mai utilizzati per l'identificazione o la profilazione dell'Utente e vengono cancellati
                          periodicamente. Non occorre il consenso.

                          - Attività accessorie
                          Comunicare i dati a terze parti che svolgono funzioni necessarie o strumentali all'operatività
                          del servizio (es. box commenti), e per consentire a terze parti di svolgere attività tecniche,
                          logistiche e di altro tipo per nostro conto. I fornitori hanno accesso solo ai dati personali
                          che sono necessari per svolgere i propri compiti, e si impegnano a non utilizzare i dati per
                          altri scopi, e sono tenuti a trattare i dati personali in conformità delle normative vigenti.
                        </div>
                      </div>
                    </div>
                    <div class="panel">
                      <div class="panel-heading"> <a data-toggle="collapse" data-parent="#faq-accordion"
                          href="#question5" class="collapsed"> <span class="arrow-down">+</span> <span
                            class="arrow-up">&#8211;</span> Dati raccolti</a> </div>
                      <div id="question5" class="panel-collapse collapse">
                        <div class="panel-body"> Il presente sito raccoglie dati degli utenti in due modi.

                          - Dati raccolti in maniera automatizzata
                          Durante la navigazione degli Utenti possono essere raccolte le seguenti informazioni che
                          vengono conservate nei file di log del server (hosting) del sito:
                          - indirizzo internet protocol (IP);
                          - tipo di browser;
                          - parametri del dispositivo usato per connettersi al sito;
                          - nome dell'internet service provider (ISP);
                          - data e orario di visita;
                          - pagina web di provenienza del visitatore (referral) e di uscita;
                          - eventualmente il numero di click.

                          Questi dati sono utilizzati a fini di statistica e analisi, in forma esclusivamente aggregata.
                          L’indirizzo IP è utilizzato esclusivamente a fini di sicurezza e non è incrociato con nessun
                          altro dato.

                          - Dati conferiti volontariamente

                          Il sito può raccogliere altri dati in caso di utilizzo volontario di servizi da parte degli
                          utenti, quali servizi di commenti, di comunicazione (moduli per contatti, box commenti), e
                          verranno utilizzati esclusivamente per l'erogazione del servizio richiesto:
                          - nome;
                          - indirizzo email. </div>
                      </div>
                    </div>
                    <div class="panel">
                      <div class="panel-heading"> <a data-toggle="collapse" data-parent="#faq-accordion"
                          href="#question4" class="collapsed"> <span class="arrow-down">+</span> <span
                            class="arrow-up">&#8211;</span>Luogo del trattamento</a> </div>
                      <div id="question4" class="panel-collapse collapse">
                        <div class="panel-body"> I dati sono trattati presso la sede del Titolare del Trattamento, e
                          presso il datacenter del web Hosting (VHosting Solution s.r.l). Il web hosting (VHosting
                          Solution s.r.l Unipersonale - Via A. Telesino 67, Palermo, IT), è responsabile del
                          trattamento, elaborando i dati per conto del titolare. VHosting si trova nello Spazio
                          Economico Europeo e agisce in conformità delle norme europee (policy privacy di VHosting).
                        </div>
                      </div>
                    </div>
                    <div class="panel">
                      <div class="panel-heading"> <a data-toggle="collapse" data-parent="#faq-accordion"
                          href="#question6" class="collapsed"> <span class="arrow-down">+</span> <span
                            class="arrow-up">&#8211;</span> Periodo di conservazione dei dati
                        </a> </div>
                      <div id="question6" class="panel-collapse collapse">
                        <div class="panel-body"> I dati raccolti dal sito durante il suo funzionamento sono conservati
                          per il tempo strettamente necessario a svolgere le attività precisate. Alla scadenza i dati
                          saranno cancellati o anonimizzati, a meno che non sussistano ulteriori finalità per la
                          conservazione degli stessi.

                          I dati (indirizzo IP) utilizzati a fini di sicurezza del sito (blocco tentativi di danneggiare
                          il sito) sono conservati per 30 giorni.
                          I dati per finalità di analytics (statistica) sono conservati in forma aggregata per 24 mesi.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </article>
            <!--	///*///======    End article  ========= //*/// -->
          </div>

        </div>
      </div>
    </section>
    <!-- Main Container End -->


    <!--footer Desktop-->
    @include('components.footerDesktop')
    <!-- End Footer Desktop -->
  </div>

  <!--div Mobile Menu-->
  <div id="mobile-menu">
    @include('components.navbarMobile')
  </div>

  <!-- JavaScript -->
  <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/revslider.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/common.js') }}"></script>

  <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.mobile-menu.min.js') }}"></script>
</body>
@endsection