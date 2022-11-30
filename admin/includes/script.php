<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js" integrity="sha512-i9cEfJwUwViEPFKdC1enz4ZRGBj8YQo6QByFTF92YXHi7waCqyexvRD75S5NVTsSiTv7rKWqG9Y5eFxmRsOn0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

<script src="js/scripts.js"></script>

<!-- Data Table cdn -->
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>

<script>
  // Call the dataTables jQuery plugin
  
  $(document).ready(function () {
    $('.table').DataTable({
      lengthMenu: [
            [10, 25, 50, -1],
            [10, 25, 50, 'All'],
        ],
      language:{
        search: "_INPUT_",
        searchPlaceholder: "Search Records"
      }
    });
  });

  $(document).ready(function(){
  $("#update").load(function(){
    $(".hi").hide(3000);
  });
});
</script>

<!-- Data Table cdn  end-->