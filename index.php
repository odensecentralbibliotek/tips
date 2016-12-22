<?php
include("app.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="http://tip13.fynbib.dk/css/bootstrap.min.css">
        <script src="http://tip13.fynbib.dk/js/jquery-3.1.1.min.js"></script>
        <script src="http://tip13.fynbib.dk/js/jquery.cookie.min.js"></script>
        <script src="http://tip13.fynbib.dk/js/bootstrap.min.js"></script>
        <script src="http://tip13.fynbib.dk/js/tips.js"></script>
        <title>Tip en 13'er</title>
        <style>
            body
            {
                background-color: #009ce2;
            }
            .table-wrap
            {
                background-color: white;
            }
            .tips-boks
            {
                
            }
            .tips-boks-header
            {
                border-bottom: 1px solid black !important;
            }
            .click-enabled
            {
                border: 1px solid gray !important;
                text-align: center;
            }
            .click-enabled:hover
            {
                cursor: pointer;
                
            }
            .table-wrap
            {
                margin-left: 33%;
                margin-right: 33%;
                margin-bottom: 10px;
                margin-top: 10px;
            }
            .tips-choice
            {
                font-weight: normal;
                
            }
            .thank_you_overlay
            {
                width: 100%;
                height: 100%;
                z-index: 1000;
                background: #009ce2;
                color:white;
                display:none;
                text-align: center;
            } 
            .pdf_print_name , .pdf_print_email
            {
                display:none;
            }
            #SubmitForm
            {
                padding: 10px;
            }
   </style>
    </head>
    <body>
        <div class="thank_you_overlay">
            <div style="padding-top: 45vh;font-size: 25px;">Tak for dit svar!<br/>
                <a class="restart_koupon" style="font-size: 17px;cursor:pointer;">Genstart kupon</a>
            </div>
            
        </div>
        <div class="table-wrap">
            <div id="data-container">
                <table class="table ">
                    <thead>
                        <tr>
                            <th class="col-md-9">Tip en 13'er</th>
                            <th class="col-md-1 text-center">1</th>
                            <th class="col-md-1 text-center">x</th>
                            <th class="col-md-1 text-center">2</th>
                        </tr>
                    </thead>
                     <!--
                     Question Block Start
                     -->
                    <tbody>
                        <tr>
                            <th scope="rowgroup">1. Hvilken forvaltning hører Fritid og Biblioteker ind under?</th>
                            <td ></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">1. Borgmesterforvaltningen</th>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks"></td>
                            
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">x. Børn- og Ungeforvaltningen</th>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            <td class="col-md-1 tips-boks"></td>
                            
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">2. By- og Kulturforvaltningen </th>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            
                        </tr>
                     </tbody>
                     <!--
                     Question Block end
                     -->
                     <!--
                     Question Block Start
                     -->
                    <tbody>
                        <tr>
                            <th scope="rowgroup">2. Hvilke afdelinger er der i Fritid og Biblioteker? </th>
                            <td ></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">1. Biblioteker, Odense Idrætspark, Center for Civilsamfund og Fritid og Eliteidræt </th>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks"></td>
                            
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">x. Biblioteker, Odense Idrætspark, Ungdomsskolerne og Fritid og Eliteidræt </th>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            <td class="col-md-1 tips-boks"></td>
                            
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">2. Biblioteker, Borgerservice, Center for Civilsamfund og Odense Idrætspark</th>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            
                        </tr>
                    </tbody>
                     <!--
                     Question Block end
                     -->
                                          <!--
                     Question Block Start
                     -->
                    <tbody>
                        <tr>
                            <th scope="rowgroup">3. Hvor mange ansatte er der i Fritid og Biblioteker? </th>
                            <td ></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">1. ca. 200 </th>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks"></td>
                            
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">x. ca. 300 </th>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            <td class="col-md-1 tips-boks"></td>
                            
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">2. ca. 500</th>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            
                        </tr>
                    </tbody>
                     <!--
                     Question Block end
                     -->
                                          <!--
                     Question Block Start
                     -->
                    <tbody>
                        <tr>
                            <th scope="rowgroup">4. Hvem har flest besøgende på Fyn? </th>
                            <td ></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">1. Egeskov Slot </th>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks"></td>
                            
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">x. Odense Zoo </th>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            <td class="col-md-1 tips-boks"></td>
                            
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">2. Bibliotekerne i Odense</th>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            
                        </tr>
                    </tbody>
                     <!--
                     Question Block end
                     -->
                                          <!--
                     Question Block Start
                     -->
                    <tbody>
                        <tr>
                            <th scope="rowgroup">5. Hvad tror folk ofte navnet er på Center for Civilsamfund? </th>
                            <td ></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">1. Center for civilingeniører </th>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks"></td>
                            
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">x. Center for civil ulydighed </th>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            <td class="col-md-1 tips-boks"></td>
                            
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">2. Center for civilforsvaret</th>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            
                        </tr>
                    </tbody>
                     <!--
                     Question Block end
                     -->
                                          <!--
                     Question Block Start
                     -->
                    <tbody>
                        <tr>
                            <th scope="rowgroup">6. Hvad består bassin vandet i en svømmehal af? </th>
                            <td ></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">1. Vand, klor, salt og saltsyre </th>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks"></td>
                            
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">x. Vand, klor og sæbe </th>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            <td class="col-md-1 tips-boks"></td>
                            
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">2. Vand, klor og slat</th>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            
                        </tr>
                    </tbody>
                     <!--
                     Question Block end
                     -->
                                          <!--
                     Question Block Start
                     -->
                    <tbody>
                        <tr>
                            <th scope="rowgroup">7. Hvordan kridter Idrætsparken baner op? </th>
                            <td ></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">1. Med robot </th>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks"></td>
                            
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">x. Eksterne aktør </th>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            <td class="col-md-1 tips-boks"></td>
                            
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">2. Teknisk personale med kridt og snor</th>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            
                        </tr>
                    </tbody>
                     <!--
                     Question Block end
                     -->
                                          <!--
                     Question Block Start
                     -->
                    <tbody>
                        <tr>
                            <th scope="rowgroup">8. Hvor er personalet i Fritid og Eliteidræt placeret fysisk? </th>
                            <td ></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">1. Klosterbakken og Odense Idrætspark </th>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks"></td>
                            
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">x. Odense Slot og Odense Idrætspark </th>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            <td class="col-md-1 tips-boks"></td>
                            
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">2. Odense Slot og Ørbækvej 100</th>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            
                        </tr>
                    </tbody>
                     <!--
                     Question Block end
                     -->
                                          <!--
                     Question Block Start
                     -->
                    <tbody>
                        <tr>
                            <th scope="rowgroup">9. Hvad er det kommende Borgernes Hus? </th>
                            <td ></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">1. Forsamlingshus og Borgerservice </th>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks"></td>
                            
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">x. Borgerservice, Hovedbibliotek, Center for Civilsamfund og Center for frivillighed</th>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            <td class="col-md-1 tips-boks"></td>
                            
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">2. Hovedbiblioteket, Folkeoplysningsforbundene og Borgerservice</th>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            
                        </tr>
                    </tbody>
                     <!--
                     Question Block end
                     -->
                                          <!--
                     Question Block Start
                     -->
                    <tbody>
                        <tr>
                            <th scope="rowgroup">10. Hvilke sportsgrene dyrkes der på isstadion? </th>
                            <td ></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">1. Short track og hockey </th>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks"></td>
                            
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">x. Hockey og styrtløb </th>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            <td class="col-md-1 tips-boks"></td>
                            
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">2. Curling og lifting</th>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            
                        </tr>
                    </tbody>
                     <!--
                     Question Block end
                     -->
                                          <!--
                     Question Block Start
                     -->
                    <tbody>
                        <tr>
                            <th scope="rowgroup">11. Skal Fritid og Eliteidræt finde lokaler til alle godkendte foreningsaktiviteter i Odense? </th>
                            <td ></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">1. Ja, Fritid og Eliteidræt er forpligtiget til at hjælpe de godkendte foreninger med alle deres aktiviteter </th>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks"></td>
                            
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">x. Nej, foreningerne skal selv finde lokaler, arealer m.v. </th>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            <td class="col-md-1 tips-boks"></td>
                            
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">2. Fritid og Eliteidræt er forpligtet til at stille egnede ledige lokaler til rådighed.</th>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            
                        </tr>
                    </tbody>
                     <!--
                     Question Block end
                     -->
                                          <!--
                     Question Block Start
                     -->
                    <tbody>
                        <tr>
                            <th scope="rowgroup">12. Hvilken funktion håber Center for Civilsamfund at have for borgerne i Odense? </th>
                            <td ></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">1. Give mindst en multibane til hver bydel </th>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks"></td>
                            
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">x. Give vejledning til personer, der er interesserede i at skrive sig op til civilforsvaret </th>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            <td class="col-md-1 tips-boks"></td>
                            
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">2. Give én samlte indgang for frivillige til kommunen mange forvaltninger</th>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            
                        </tr>
                    </tbody>
                     <!--
                     Question Block end
                     -->
                                          <!--
                     Question Block Start
                     -->
                    <tbody>
                        <tr>
                            <th scope="rowgroup">13. Hvor gammel er Friluftsbadet? </th>
                            <td ></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">1. 103 år</th>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks"></td>
                            
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">x. 93 år </th>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            <td class="col-md-1 tips-boks"></td>
                            
                        </tr>
                        <tr>
                            <th class="col-md-9 tips-choice">2. 83 år</th>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks"></td>
                            <td class="col-md-1 tips-boks click-enabled"></td>
                            
                        </tr>
                    </tbody>
                     <!--
                     Question Block end
                     -->
                </table>

            </div>
            <div class="pdf_print_name" >Name</div>
            <div class="pdf_print_email">Email</div>
            <div id="SubmitForm" style="padding-top: 20px;">
                <form action="/" method="POST">
                    <div class="form-group">
                        <label for="navn">Navn:</label>
                        <input class="form-control" type="text" placeholder="Navn" name="navn" id="navn" required="true"/>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input class="form-control"type="email" placeholder="Email" name="email" id="email" required="true"/>
                    </div>
                    <!--<div class="form-group">
                        <label for="telefon">Telefon:</label>
                        <input class="form-control" type="tel" placeholder="Telefon" name="telefon" id="telefon"/>
                    </div>    -->               
                    <input type="hidden" name="pdfdata" id="pdfdata" />
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </body>
</html>


