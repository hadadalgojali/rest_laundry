  $(document).ready(function () {
      $('#btnCopy_create').on('click', function () {
        // STEP 1  : SELECT TEXT

        selectText('create_params');
        // STEP 2  : Command Copy
        document.execCommand('copy');

        toastr.success('Text copy to clipboard');
      });

      $('#btnCopy_update').on('click', function () {
        // STEP 1  : SELECT TEXT

        selectText('update_params');
        // STEP 2  : Command Copy
        document.execCommand('copy');

        toastr.success('Text copy to clipboard');
      });

      $('#btnCopy_delete').on('click', function () {
        // STEP 1  : SELECT TEXT

        selectText('delete_params');
        // STEP 2  : Command Copy
        document.execCommand('copy');

        toastr.success('Text copy to clipboard');
      });

      $('#btnCopy_read').on('click', function () {
        // STEP 1  : SELECT TEXT

        selectText('read_params');
        // STEP 2  : Command Copy
        document.execCommand('copy');

        toastr.success('Text copy to clipboard');
      });

      function selectText(containerid) {
          if (document.selection) { // IE
              var range = document.body.createTextRange();
              range.moveToElementText(document.getElementById(containerid));
              range.select();
          } else if (window.getSelection) {
              var range = document.createRange();
              range.selectNode(document.getElementById(containerid));
              window.getSelection().removeAllRanges();
              window.getSelection().addRange(range);
          }
      }

    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });

    function toggleSidebar(){
      console.log(document.getElementById("sidebar-rest"))
      document.getElementById("sidebar-rest").classList.toggle('active');
    }
  });
