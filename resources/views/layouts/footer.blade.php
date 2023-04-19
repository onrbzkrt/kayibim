</div> <!-- /.container -->

 <!-- Bootstrap JS -->
 <script src="{{ asset('js/bootstrap.min.js') }}" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="{{ asset('js/jquery.min.js') }}" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

 <script>
  $(document).on('click', '.card-img-top', function() {
    var personId = $(this).data('person-id');
    var url = '/missing-persons/' + personId;

    $.ajax({
      url: url,
      type: 'GET',
      success: function(response) {
        var person = response;

        $('#personImage').attr('src', '/storage/' + person.photo);
        $('#personFullName').text(person.name + ' ' + person.surname);
        $('#personAddress').text(person.address);
        $('#personModal').modal('show');
      }
    });
  });
</script>

</body>
</body>
</html>
