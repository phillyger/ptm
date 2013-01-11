    $(document).ready(function() {
      $("#mobileNav").click(function() {
        $("#navModal").reveal();
      });

      $('#navModal a.close-reveal-modal').trigger('reveal:close');
    });