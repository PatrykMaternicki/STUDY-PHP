<?php
  error_reporting(E_ALL ^ E_WARNING);
         error_reporting(E_ALL ^ E_NOTICE);
         ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href='./CSS/style.css' rel='stylesheet' />
        <title></title>
    </head>
    <body>
        <header>
            <nav> Zadanie 2.0 </nav>
        </header>
        <form action='lab2.0.php' method='post'>
            <main>
            <fieldset>
                <div>
                <label id='nameAndSurName'>
                    <tbody>
                        <table>
                            <tr>
                                <td>Imię i nazwisko: </td><td><input type='text' name='nameAndSurName'/></td>
                            </tr>
                        </table>
                </tbody>
                </label>
                </div>
                <div>
                <label id ='email'>
                    <tbody>
                    <table>
                        <tr>
                            <td>Email: </td><td> <input type='email' name='email'/></td>
                        </tr>
                    </table>
                    </tbody>
                </label>
                </div>
                <label id='phoneCall'>
                    <tbody>
                    <table>
                        <tr>
                        <td>Telefon Kontaktowy:</td> <td><input type='text' name='phoneCall'/></td>
                        <tr>
                    </table>
                    </tbody>
                </label>
                <div>
                    <p>Wybierz temat</p>
                <textarea name='message' rows='5' cols='20' class='inputs'>
                Tu wpisz swoj tekst...
                </textarea>
                    
                </div>
                <div>
                <p>Preferowana forma kontaktu</p>
                </div>
                <div>
                    <ul>
                        <li><input type='checkBox' name='preferContact[0]' value='email'/>Email</li>
                        <li><input type='checkBox' name='preferContact[1]' value='phone'/>Telefon</li>
                    </ul> 
                </div>
                <div>
                    <p>Czy posiadasz juz strone WWW?</p>
                    <ul>
                        <li><input type='radio' name='prop' value='heHad' />Tak</li>
                        <li><input type='radio' name='prop' value='hehadnt' />Nie</li>
                        
                    </ul>
                </div>
                <div class='inputs'>
                    <p>Zalaczniki</p>
                    <img src='./CSS/file.png' id='img'>Dodaj plik </img>
                </div>
                <div class='inputs'>
                <input type='submit' value='Send ' class='sendBtn'/>
                </div>
            </fieldset>
            
            
        </form>
      
        <section>
           <?php
       
        include ('valid.php');
        validateForm();
        ?> 
        </section>
        </main>
            
    </body>
</html>
