</body>
</html>
<script type="text/javascript">
    function shuffle() {
  var mydiv = document.getElementById("mydiv");
  var elementsArray = Array.prototype.slice.call(mydiv.getElementsByClassName('shuffleMe'));
    elementsArray.forEach(function(element){
    mydiv.removeChild(element);
  })
  shuffleArray(elementsArray);
  elementsArray.forEach(function(element){
  mydiv.appendChild(element);
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

<script type="text/javascript">
  function myShuffle() {
    $('.all').each(function() {
  var random = Math.floor(Math.random() * $('.single', this).length);
  $('.single', this).hide().eq(random).show();
});
  }
</script>