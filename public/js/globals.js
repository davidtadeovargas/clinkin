function closeSession(e){

        $("#closeSession").prop( "disabled", true ); //Disable

        console.log(url);

        $.ajax({
            type: 'POST',
            url: this.url,
            data: '{}', // or JSON.stringify ({name: 'jonas'}),
            success: function(data) { 
                  
                $("#closeSession").prop( "disabled", false ); //Enable

                if(data.res == "ok"){
                  window.location.href = "loginView";
                }
                else{
                  alert("Ups, tuvimos algunos inconvenientes porfavor intenta de nuevo :(");
                }

                return false;
            },
            error: function (error) {
              $("#closeSession").prop( "disabled", false ); //Enable
                alert('error; ' + eval(error));
            },
            contentType: "application/json",
            dataType: 'json'
        });

        return false;
  }