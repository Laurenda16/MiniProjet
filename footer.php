  <footer class="footer mt-auto py-3 bg-body-tertiary">
      <div class="container">
          <span class="text-body-secondary">CopyRights 2023</span>
      </div>
  </footer>
  <script type="text/javascript">
      $(document).ready(function() {
          $('#datatable').DataTable({
                  "oLanguage": {
                      "oLengthMenu": "Afficher _MENU_ Enregistrements",
                      "oSearch": "Rechercher:",
                      "sInfo": "Total de _TOTAL_ enregistrements(_END_ / _TOTAL_)",
                      "sPaginate": {
                          "sNext": "Suivant ",
                          "oPrevious": "Précédent"
                      }
                  }
              }


          );
      });
  </script>
  <script src="https://getbootstrap.com/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


  </body>

  </html>