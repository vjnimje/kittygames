<!-- <div id="container">
  <div class="shuffleMe"> DIV 1</div>
  <div class="shuffleMe"> DIV 2</div>
  <div class="shuffleMe"> DIV 3</div>
  <div class="shuffleMe"> DIV 4</div>
  <div class="shuffleMe"> DIV 5</div>
  <div class="shuffleMe"> DIV 6</div>
</div>
<button onclick="shuffle()">
  SHUFFLE
</button>

<script type="text/javascript">
    function shuffle() {
  var container = document.getElementById("container");
  var elementsArray = Array.prototype.slice.call(container.getElementsByClassName('shuffleMe'));
    elementsArray.forEach(function(element){
    container.removeChild(element);
  })
  shuffleArray(elementsArray);
  elementsArray.forEach(function(element){
  container.appendChild(element);
})
}

function shuffleArray(array) {
    for (var i = array.length - 1; i > 0; i--) {
        var j = Math.floor(Math.random() * (i + 1));
        var temp = array[i];
        array[i] = array[j];
        array[j] = temp;
    }
    return array;
}
</script>

 -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
<div class="all">
  <div class="single">A</div>
  <div class="single">B</div>
  <div class="single">C</div>
</div>

<!-- <div class="all">
  <div class="single">A</div>
  <div class="single">B</div>
  <div class="single">C</div>
</div> -->
<button onclick="myShuffle()">
  SHUFFLE
</button>
<!-- <script type="text/javascript">
  function myShuffle() {
    $('.all').each(function() {
  var random = Math.floor(Math.random() * $('.single', this).length);
  $('.single', this).hide().eq(random).show();
});
  }
</script> -->