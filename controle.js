
                    function controle(document){
                                    
                                    if(document.forms["form_commentaire"].commentaire.value == "" || document.forms["form_commentaire"].adresse_mail.value == "" || document.forms["form_commentaire"].username.value == "") {
                                       alert('Le champ ne peut pas rester vide !! Veuillez introduire votre formule de calcul');
                                       controle=false;
                                        
                                      }
                                      else {
                                             
                                            document.forms["form_commentaire"].method = "post";
                                            document.forms["form_commentaire"].action = "consulter_articles.php";
                                            document.forms["form_commentaire"].submit();
                                      } 
                                    }



