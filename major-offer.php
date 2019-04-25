<style>
#offer{
  height: 80%;
}
@media only screen and (max-width: 900px) {
  #offer{ height : 55%;}
}
</style>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><center style="font-weight:bold;">10% Off on ready made projects. Offer ends soon.</center></h4>
      </div>
      <div class="modal-body">
        <center>
          <img id = "offer" src="images/poster.jpg" >
        </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script>
$('#myModal').modal('toggle');
</script>
