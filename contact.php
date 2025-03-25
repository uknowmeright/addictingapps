                            <?php 
                            /* send the submitted data */  
                            $name=$_REQUEST['name']; 
                            $email=$_REQUEST['email']; 
                            $message=$_REQUEST['message']; 
                            if (($name=="")||($email=="")||($message=="")) 
                                { 
                                echo "<div class="alert alert-danger"><span class="glyphicon glyphicon-alert"></span><strong> Error! Please check the inputs. (If form error!)</strong></div>"; 
                                header('Location: contact.html');                             
                                exit();
                                } 
                            else{         
                                $from="From: $name<$email>\r\nReturn-path: $email"; 
                                $subject="Message sent!"; 
                                mail("pmlehn@gmail.com", $subject, $message, $from); 
                                echo "<div class="alert alert-success"><strong><span class="glyphicon glyphicon-send"></span> Success! Message sent. (If form ok!)</strong></div>"; 
                                header('Location: contact.html');                             
                                exit();
                                }   
                            ?> 