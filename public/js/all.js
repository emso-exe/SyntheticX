$(function() {
    $(".my-status").each(function() {
      var $el = $(this);
      var op = $el.text();
      switch (op) {
        case 'Ativo':
          $el.html('<i class="fas fa-circle fa-small-size text-success"></i>');
          break;
        case 'Inativo':
          $el.html('<i class="fas fa-circle fa-small-size text-warning"></i>');
          break;
        case 'Bloqueado':
          $el.html('<i class="fas fa-circle fa-small-size text-danger"></i>');
          break;
        default:
          break;
      }
    });
  });
