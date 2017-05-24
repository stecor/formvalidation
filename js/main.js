$(document).ready( function(){


        $("#name").keyup( function(){

            $.post("validation.php",{ "act1" : $("#name").val() },

                function (data){

                    switch(data.toString()){

                    case("Error-Name"):
                                    document.getElementById("messagename").innerHTML="<strong>Movie name cannot contain digits.</strong>";
                                    $("#groupname").removeClass().addClass("form-group has-error has-feedback");
                                    $("#iconname").removeClass().addClass("glyphicon glyphicon-remove form-control-feedback");
                                    break;
                    case("Warning-Name"):
                                    document.getElementById("messagename").innerHTML="<strong>Movie name may be fictious.</strong>";
                                    $("#groupname").removeClass().addClass("form-group has-warning has-feedback");
                                    $("#iconname").removeClass().addClass("glyphicon glyphicon-warning-sign form-control-feedback");
                                    break;
                    case("Valid-Name"):
                                    document.getElementById("messagename").innerHTML="";
                                    $("#groupname").removeClass().addClass("form-group has-success has-feedback");
                                    $("#iconname").removeClass().addClass("glyphicon glyphicon-ok form-control-feedback");
                                    break;
                    default:
                                    document.getElementById("messagename").innerHTML="";
                                    $("#groupname").removeClass().addClass("form-group");
                                    $("#iconname").removeClass();
                    }
                    $data1=data.toString();
            });
        });

        $("#id").keyup( function(){

            $.post("validation.php",{ "act2" : $("#id").val() },

                function (data){

                    switch(data.toString()){

                    case("Error-ID"):
                                    document.getElementById("messageid").innerHTML="<strong>Movie ID must only contain digits.</strong>";
                                    $("#groupid").removeClass().addClass("form-group has-error has-feedback");
                                    $("#iconid").removeClass().addClass("glyphicon glyphicon-remove form-control-feedback");
                                    break;
                    case("Warning-ID"):
                                    document.getElementById("messageid").innerHTML="<strong>Movie ID is suspicious.</strong>";
                                    $("#groupid").removeClass().addClass("form-group has-warning has-feedback");
                                    $("#iconid").removeClass().addClass("glyphicon glyphicon-warning-sign form-control-feedback");
                                    break;
                    case("Valid-ID"):
                                    document.getElementById("messageid").innerHTML="";
                                    $("#groupid").removeClass().addClass("form-group has-success has-feedback");
                                    $("#iconid").removeClass().addClass("glyphicon glyphicon-ok form-control-feedback");
                                    break;
                    default:
                                    document.getElementById("messageid").innerHTML="";
                                    $("#groupid").removeClass().addClass("form-group");
                                    $("#iconid").removeClass();
                    }
                    $data2=data.toString()
            });
        });

        $("#genre").keyup( function(){

            $.post("validation.php",{ "act3" : $("#genre").val() },

                function (data){

                    switch(data.toString()){

                    case("Error-Prog"):
                                    document.getElementById("messageprog").innerHTML="<strong>Genre does not exist.</strong>";
                                    $("#groupprog").removeClass().addClass("form-group has-error has-feedback");
                                    $("#iconprog").removeClass().addClass("glyphicon glyphicon-remove form-control-feedback");
                                    break;
                    case("Warning-Prog"):
                                    document.getElementById("messageprog").innerHTML="<strong>Genre may be ficticious.</strong>";
                                    $("#groupprog").removeClass().addClass("form-group has-warning has-feedback");
                                    $("#iconprog").removeClass().addClass("glyphicon glyphicon-warning-sign form-control-feedback");
                                    break;
                    case("Valid-Prog"):
                                    document.getElementById("messageprog").innerHTML="";
                                    $("#groupprog").removeClass().addClass("form-group has-success has-feedback");
                                    $("#iconprog").removeClass().addClass("glyphicon glyphicon-ok form-control-feedback");
                                    break;
                    default:
                                    document.getElementById("messageprog").innerHTML="";
                                    $("#groupprog").removeClass().addClass("form-group");
                                    $("#iconprog").removeClass();
                    }
                    $data3 = data.toString();
            });
        });

        $("#submit").click(function(){

            $name = $("#name").val();
            $id = $("#id").val();
            $genre = $("#genre").val();


            if($name !== "" || $id !== "" || $genre !== ""){
                if($data1.indexOf('Valid') !== -1 && $data2.indexOf('Valid') !== -1 && $data3.indexOf('Valid') !== -1)
                {
                    $table = "<tr><td>"+ $name +"</td><td>"+ $id +"</td><td>"+ $genre +"</td></tr>";
                    $("#table").append($table);
                }
                else if($data1.indexOf('Error') === -1 && $data2.indexOf('Error') === -1 && $data3.indexOf('Error') === -1)
                {
                    if($data1.toString().indexOf('Warning') === 0 || $data2.toString().indexOf('Warning') === 0 || $data3.toString().indexOf('Warning') === 0)
                    {
                       $table = "<tr class='bg-warning'><td>"+ $name +"</td><td>"+ $id +"</td><td>"+ $genre +"</td></tr>";
                       $("#table").append($table);
                    }
                }
            }
            clearFields();
            return false;
        });


        function clearFields(){

            $("#name").val('');
            document.getElementById("messagename").innerHTML="";
            $("#groupname").removeClass().addClass("form-group");
            $("#iconname").removeClass();

            $("#id").val('');
            document.getElementById("messageid").innerHTML="";
            $("#groupid").removeClass().addClass("form-group");
            $("#iconid").removeClass();

            $("#genre").val('');
            document.getElementById("messageprog").innerHTML="";
            $("#groupprog").removeClass().addClass("form-group");
            $("#iconprog").removeClass();
        }

});
