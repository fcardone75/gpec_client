# Documentazione

## Client

### Generazione

Il client è generato tramite questa libreria composer: https://github.com/phpro/soap-client

Nel caso di aggiornamenti al WSDL, rigenerare il client con il comando da lanciare da root del progetto: vendor/bin/soap-client wizard

<b>ATTENZIONE</b>: data la necessità di header personalizzati, è stato creato un middleware personalizzato e la factory autogenerata dal comando sopra deve essere sovrascritta. Quindi in caso sia stato rigenerato il client, è necessario solo cancellare tutto quello che c'è nel metodo factory nella classe `GpecClientFactory` e mettere semplicemente
`return (new Bni\Gpec\Gpec\CustomGpecFactory())->getFactory($wsdl);`

In quanto Bni\Gpec\Gpec\CustomGpecFactory() non verrà mai sovorascritto dal comando sopra citato.

Altre soluzioni a questo workaround sono ben accette.

### Utilizzo

#### Env

Nel progetto dove è utilizzata questa libreria, creare un file .env

Le env usate al momento sono

`BNI_GPEC_RSM_CALLER, PHP_PORT, BNI_GPEC_WSDL_LOCATION,
BNI_GPEC_RSM_HOST_ALIAS,
BNI_GPEC_USER,
BNI_GPEC_PASSWORD,
BNI_GPEC_SUBJECT_ENCODING,
BNI_GPEC_HEADERS_ENCODING,
BNI_GPEC_BODY_ENCODING,
BNI_GPEC_PRIORITY`

#### GpecService

Il client è wrappato attorno alla classe `GpecService`. In base al framework che si sta usando, può essere utile usarla nel depency injection, passando come unico parametro il path del proprio file .env

Limitarsi ad usare questa classe in quanto contiene tutto il necessario. Evitare di chiamare classi o metodi della libreria client generata.

#### Metodi

`sendMail` permette di inviare una mail con i parametri richiesti e in risposta si ottiene un oggetto `SendMailResponse`

Esempio di utilizzo:

Instanziare (o tramite DI) `GpecService`:

`$gPecService = new GpecService('pathEnvFile');`

Creare gli oggetti di tipo DateTime e manipolarli in base al contesto in cui ci si trova:

`$startDate = new DateTime();`

`$endDate = new DateTime();`

Chiamare il metodo passando i parametri:

`$gPecService->sendMail('destinatario@test.com', 'oggetto email' ,'corpo messaggio', 'UTF-8', 'UTF-8', 'UTF-8', 'Normal' ,$startDate, $endDate);`

## Testare localmente

Alzare docker con `docker compose --env-file .env up` dalla root del progetto e in base alla variabile d'ambiente della porta (`PHP_PORT`) impostata da `.env`, collegarsi da browser.

Lanciare `composer install`.

Per testare localmente il client senza includerlo in un proggetto, creare a livello di root un `index.php`

Copiare e incollare il contenuto di `index-example.md`

Creare un file `.env`, copia incollare le variabili presenti `.env.example` e modificarne i valori secondo le proprie esigenze


Esempio: http://localhost:8005

Le variabili importanti da settare sono:

`BNI_GPEC_APPLICATION_ID`, `BNI_GPEC_RSM_CALLER`, `BNI_GPEC_RSM_HOST_ALIAS`, `BNI_GPEC_USER`, `BNI_GPEC_PASSWORD`, `BNI_GPEC_WSDL_LOCATION`

Le altre, per test, al momento possono essere lasciate così.
