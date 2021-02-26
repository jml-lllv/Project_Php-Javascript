//Configuracion del ajax
  $.ajaxSetup({
  'beforeSend' : function(xhr) {
  try{
  xhr.overrideMimeType('text/html; charset=iso-8859-1');
  }
  catch(e){
  }
  }});


  $(".loguearse").submit(function(e){
    e.preventDefault();
    loguearse();
  });

  function loguearse()
  {
    $.post('controller.php', $('.loguearse').serialize(), function(resp)
    {
      if(resp.resultado != 0 )
      {
        $('#user').removeClass("is-invalid");
        $('#password').removeClass("is-invalid");
        $('#mensaje').removeClass();
        $('#mensaje').addClass("text-info");
        $('.loguearse').css({display:'none'});
      }
      else
      {
        $('#user').val('');
        $('#password').val('');
        $('#user').addClass("is-invalid");
        $('#password').addClass("is-invalid");
        $('#mensaje').removeClass();
        $('#mensaje').addClass("text-danger");
      }

      $('#contenido-mensaje').css({display:'inherit'});
      $('#mensaje').html(resp.html);
    }, "json");
  }
