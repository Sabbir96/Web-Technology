<?php
                    require('');
                    $userName = $balance = $amount =  '';
                    session_start();
                    $userName=$_SESSION['id'];
                    $balance=balanceRetrive($userName);

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $amount=$_POST['amount'];
                        if (isset($_POST['add']))
					    {
                            $amount=$amount+$balance;
                            updateBalance($amount,$userName);
                            $balance=balanceRetrive($userName);
                        }
                        else if(isset($_POST['withdraw'])){
                            if($balance<$amount+500){
                                echo "You have no sufficient money to withdraw ";
                            }
                            else{
                                $amount=$balance-$amount;
                                updateBalance($amount,$userName);
                                $balance=balanceRetrive($userName);
                            }
                            
                        }
                    }
                    
            
?>