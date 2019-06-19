<h1>prijs resevering</h1>

<h3>prijs per rit:</h3>
<p>€55,-</p>

<h3>totaal ritten</h3>
<p id="min"><?= $resevation['time_span'] ?> ritjes</p>

<h3>totaal prijs</h3>
<p id="totaal"></p>

<script type="text/javascript">
var prijs = 55;
var min = <?= $resevation['time_span'] ?>;
var totaal = document.getElementById('totaal');

  function prijstotaal() {
    var totaalprijs = (prijs * min).toFixed(2);
    return totaalprijs;
  }

totaal.innerHTML = "€" + prijstotaal() + ",-";

</script>
