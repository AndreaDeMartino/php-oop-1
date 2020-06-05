<?php  
  // EX:
  // Creazione di una classe ‘Movie’
  // Dichiarazione delle proprietà della classe
  // Dichiarazione del costruttore
  // Dichiarazione di almeno un metodo
  // Fare poi degli esempi di utilizzo della classe istanziando almeno due oggetti e stampando a schermo il valore delle proprietà


  // Creazione classe
  class Movie{

    // Dichiarazione proprietà
    public $titolo;
    public $media_spettatori;
    public $costo_biglietto;
    public $logo;
    public $genere;

    // Dichiarazione Costruttore
    public function __construct($_titolo,$_media_spettatori ,$_costo_biglietto ,$_logo ,$_genere){
      $this->titolo = $_titolo;
      $this->media_spettatori = $_media_spettatori;
      $this->costo_biglietto = $_costo_biglietto;
      $this->logo = $_logo;
      $this->genere = $_genere;
    }

    // Dichiarazione Metodo che tramite funzione incassiG calcola la media degli incassi giornalieri
    public function incassiG(){
      $prezzo = $this->media_spettatori * $this->costo_biglietto;
      echo "
      <img src=\" $this->logo \" alt= \"Movie 1\">
      <div class=\"card-body\">
        <h4 class=\"card-title display-4\"> $this->titolo </h4>
        <p class=\"card-text text-muted\"> Media Spettatori: $this->media_spettatori </p>
        <p class=\"card-text text-muted\"> Costo Biglietto: $this->costo_biglietto € </p>
        <p class=\"card-text text-muted\"> Genere: $this->genere </p>
        <p class=\"card-text text-muted\"> L'incasso medio giornaliero è di: <strong> $prezzo € </strong> </p> 
      </div>";
    }
  }

  // Creazione Oggetti:
  $movie1 = new Movie('Il codice da Vinci',
                      '100000',
                      '7.50',
                      'https://pad.mymovies.it/filmclub/2005/05/088/locandina.jpg',
                      'Azione');

  $movie2 = new Movie('American Sniper',
                      '43948',
                      '10',
                      'https://lh3.googleusercontent.com/proxy/Opk7bQ7ECj5sFJ3htIB7soDcb4t4Sdi2n2PnT_EnoIySPEunWVBaT5S1lBrEGryVgSBWKBPv9Nk1Cst-HE7-bW_IZ-Tw86HeqJyJY6nwgO4tqIXftO0Y_PD1FgviC4PcZE9tIRJA63jUbcyoj3tHIGffbbCggQMkNgJa',
                      'Thriller');
