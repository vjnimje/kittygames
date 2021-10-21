</body>
<script src="<?php echo base_url();?>assets/js/bootstrap.bundle.js"></script>
</html>

<script type="text/javascript">
$(document).ready(function() {
  var str = "Ans 1,Ans 2,Ans 3, Ans 4,Ans 5";

  var arr = str.split(",");
  $.each(arr, function(value, index) {
    $("#myList").append("<a href='"+ index +"' value='"+ index +"'><li>" + index + "</li></a>");
  });

});

</script>
