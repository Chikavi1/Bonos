@extends('layouts.app')
@section('content')

<div class="container">
    
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <h2>Crear Movimiento</h2>
            <div class="form-group">
                <label for="exampleInputEmail1">Número celular</label>
                <input type="tel" class="form-control" name="cellphone" id="cellphone" aria-describedby="emailHelp" placeholder="Ingresa Número">
                <button class="btn btn-primary m-2 float-end" onClick="checkUser()">Buscar</button>
            </div>

            <div id="user" class="text-center" >
                <h4 style="margin-top:3em;" id="name_user"></h4>
                <small>¿Es la persona?</small>
            </div>
            <form>  
                <div class="form-group mt-4">
                    <label for="exampleInputEmail1">Monto</label>
                    <input type="tel" class="form-control" name="amount" placeholder="Ingresa Monto">
                </div>
            </form>
            <div class="row my-4">
                <div class="col">
                    <button class="btn btn-success w-100">Contraseña</button>
                </div>
                <div class="col">
                    <button class="btn btn-primary w-100">Código QR</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    function checkUser(){
        cellphone = $("#cellphone").val();
        $.ajax({
        type: 'GET', //THIS NEEDS TO BE GET
        url: 'http://localhost:8000/search_cellphone?cellphone='+cellphone,
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded', 
      
        success: function (data) {
            console.log(data);
            name_user.html('');
            $.each(data, function(index, item) {
            name_user.html(''); //clears name_user for new data
            $.each(data, function(i, item) {
                  name_user.append('<div>'+item.name+'<br>'+hideemail(item.email)+'</div>');
          });
                name_user.append('<br>');
            });
        },error:function(err){ 
             console.log(err);
        }
    });
   

    function hideemail(target) {
        var email = target;
        var hiddenEmail = "";
        for (i = 0; i < email.length; i++) {
            if (i > 0 && i< email.indexOf("@") ) {
            hiddenEmail += "*";
            } else {
            hiddenEmail += email[i];
            }
        }
        return hiddenEmail;
    }

      $(document).ready(function(){
        name_user = $("#name_user");

   


});
    }
     
</script>
@endsection