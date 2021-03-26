$(document).ready( function () {
    $('#trad1').dataTable();
    } );

$(document).ready( function () {
    $('#trad2').dataTable();
    } );

function check() {
        // ... ajouter la fonction ajax ... //
    
        var champ1=document.getElementById( "champ1" ).value;
            
        if(champ1)
        {
            $.ajax({
                type: 'POST',
                url: '../admin/checkdata.php',
                data: {
                champ1:champ1,
                },
                success: function (response) {
                    $( '#champ1status' ).html(response);
                    if(response == "<? php echo $row['texte2'] ; echo $row['audio'] ?>")	
                    {
                        return true;	
                    }
                    else
                    {
                        return false;	
                    }
                }
            });
        }
            else
            {
                $( '#champ1status' ).html("");
                return false;
            }
    }
    
function checkall()
    {
        var texte1html=document.getElementById("champ1status").innerHTML;
    
        if((champ1html) == "<? php echo $row['texte2'] ; echo $row['audio'] ?>")
        {
            return true;
        }
        else
        {
            return false;
        }
    
    }
    function reload() {
      window.location.reload();
      return false;
    }
    